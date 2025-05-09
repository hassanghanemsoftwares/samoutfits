let $transactionForm, $itemLookup, $transactionLines;
jQuery(document).ready(function ($) {
	$transactionForm = $('form#transactionForm');
	$transactionLines = $('tbody#transactionLines', $transactionForm);
	$itemLookup = $('#itemLookup', $transactionForm);
	inputToDatepickerA($('#trans_date, #value_date, #journal_date', $transactionForm));
	let $acctLkupFrom = $('#acctLkupFrom', $transactionForm), $acctLkupTo = $('#acctLkupTo', $transactionForm),
		$accountId = $('#account_id', $transactionForm), $account2Id = $('#account2_id', $transactionForm);
	autoCompleteAccount1($acctLkupTo, $accountId, accountSelected);
	autoCompleteItem();
	bindLinesEvents();
	getcurrencyrate();
	$('#sub_total').val('0');
	if ($('#disc').val() == '') {
		$('#disc').val('0');
	}
	$('#final_total').val('0');
	calculateSubtotalAndTotal($('#disc'));
	$('#currency_id_list').prop('disabled', true).trigger("chosen:updated");
	if (window.location.href == getAppURL('purchases/add') || window.location.href == getAppURL('order_purchases/add')) {
		document.getElementById("print").style.visibility = "hidden";
	} else {
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'whatselected': $('#currency_id').val() },
			url: getAppURL('currencies/get_currency_rate'),
			success: function (data) {
				var result = data.split('-');
				var cur_read = result[1];
				if (cur_read == "readonly") {
					document.getElementById('currency_rate').setAttribute("readonly", true);
				} else {
					document.getElementById('currency_rate').removeAttribute("readonly");
				}
			}
		});
	}
	$('#bgback').click(function (e) {
		e.preventDefault();
		window.location.href = document.referrer;
	});
	$('#acctLkupTo').change(function (e) {
		$('#account2_id').val("");
		$('#acctLkupFrom').val("");
	});

});

function accountSelected(account, $accountId) {
	$accountId.val(account.id);
}

function autoCompleteAccount1($acctLkup, $accountId, onResultSelection) {
	$acctLkup.autocomplete({
		serviceUrl: getAppURL('purchases/lookup_suppliers_accounts'), appendTo: $acctLkup.parent()[0],
		noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
		noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
		onSearchStart: function (params) {
		}, onSelect: function (result) {
			onResultSelection(result.row, $accountId);
			let $acctLkupFrom = $('#acctLkupFrom', $transactionForm);
			let $account2Id = $('#account2_id', $transactionForm);
			var id = $("#account_id").val();
			$.ajax({
				cache: false,
				type: 'POST',
				data: { 'whatselected': id },
				url: getAppURL('purchases/get_account_currency'),
				success: function (data) {
					$('#currency_id_list').val(data);
					$('#currency_id').val(data);
					$.ajax({
						cache: false,
						type: 'POST',
						data: { 'whatselected': data },
						url: getAppURL('purchases/get_purchases_account_with_the_same_currency'),
						success: function (data) {
							$('#acctLkupFrom').val(JSON.stringify(data["description"]).replace(/"/g, ""));
							$('#account2_id').val(JSON.stringify(data["id"]).replace(/"/g, ""));
						}
					});
					// autoCompletePurchasesAccount($acctLkupFrom, $account2Id, accountSelected, data);
					$.ajax({
						cache: false,
						type: 'POST',
						data: { 'whatselected': data },
						url: getAppURL('currencies/get_currency_rate'),
						success: function (data) {
							var result = data.split('-');
							var cur_rate = result[0];
							var cur_read = result[1];
							$('#currency_id_list').prop('disabled', true).trigger("chosen:updated");
							$('#currency_rate').val(cur_rate);
							if (cur_read == "readonly") {
								document.getElementById('currency_rate').setAttribute("readonly", true);
							} else {
								document.getElementById('currency_rate').removeAttribute("readonly");
							}
						}
					});
				}
			});
		}, transformResult: function (response) {
			return {
				suggestions: jQuery.map(response, function (account) {
					return { value: account.description, row: account };
				})
			};
		}
	});
}

function autoCompleteAccount2($acctLkup, $accountId, onResultSelection) {
	$acctLkup.autocomplete({
		serviceUrl: getAppURL('purchases/lookup_accounts'), appendTo: $acctLkup.parent()[0],
		noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
		noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
		onSearchStart: function (params) {
		}, onSelect: function (result) {
			onResultSelection(result.row, $accountId);
		}, transformResult: function (response) {
			return {
				suggestions: jQuery.map(response, function (account) {
					return { value: account.description, row: account };
				})
			};
		}
	});
}

function autoCompleteItem() {
	$itemLookup.on('keydown', function (e) {
		if (e.keyCode == 13) {
			// do not submit form on press of return key
			e.preventDefault();
			e.stopPropagation();
			e.stopImmediatePropagation();
			return false;
		}
	}).autocomplete({
		serviceUrl: getAppURL('purchases/lookup_items'), appendTo: $itemLookup.parent()[0],
		noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
		noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
		onSearchStart: function (params) {
		}, onSelect: function (result) {
			addLineToTransaction(result.row, true);
		}, transformResult: function (response) {
			return {
				suggestions: jQuery.map(response, function (item) {
					return { value: item.suggestion, row: item };
				})
			};
		}
	});
}

function addLineToTransaction(item, newLine) {
	$itemLookup.val('');
	let $lastTr = jQuery('tr:last', $transactionLines);
	let idx = 1 + parseInt($lastTr.length > 0 ? $lastTr.attr('data-index') : -1);
	$transactionLines.append(ItemLineTpl.replace(/%d/g, String(idx)));
	if (newLine) {
		var $tr = jQuery('tr#item-' + idx, $transactionLines);
		jQuery('input.i-item_id', $tr).val(item.id);
		jQuery('td.i-description', $tr).text(item.description);
		jQuery('td.i-barcode', $tr).text(item.barcode);
		jQuery('input.i-qty', $tr).val('0');
		jQuery('input.i-item_qty', $tr).val('0');
		jQuery('input.i-price', $tr).val('0');
		jQuery('input.i-cost', $tr).val('0');
		jQuery('input.i-discount', $tr).val('0');
		jQuery('td.i-total', $tr).text('0');
		jQuery('td.i-net_cost', $tr).text('0');
		var sizes = jQuery('input.i-qty_size', $tr);
		for (var i = 0; i < sizes.length; i++) {
			$(sizes[i]).val(0);
		}
		var getselected = jQuery('select.i-warehouse', $tr).children("option:selected").text();
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'whatselected': getselected },
			url: getAppURL('purchases/get_warehouse_shelfs'),
			success: function (data) {
				jQuery('select.i-shelf', $tr).empty();
				for (let i = 0; i < data.length; i++) {
					jQuery('select.i-shelf', $tr).append(`<option value="${data[i]}">
							${data[i]} </option>`).val(data[0]);
				}
			}
		});
		bindLineEvents($tr);
	}
}

function bindLinesEvents() {
	jQuery('tr', $transactionLines).each(function (i, tr) {
		bindLineEvents(jQuery(tr));
	});
}

function bindLineEvents($tr) {
	jQuery('select.i-warehouse', $tr).change(function (e) {
		var getselected = jQuery('select.i-warehouse', $tr).children("option:selected").text();
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'whatselected': getselected },
			url: getAppURL('purchases/get_warehouse_shelfs'),
			success: function (data) {
				jQuery('select.i-shelf', $tr).empty();
				for (let i = 0; i < data.length; i++) {
					jQuery('select.i-shelf', $tr).append(`<option value="${data[i]}">
						${data[i]} </option>`);
				}
			}
		});
	});
	jQuery('button.i-remove', $tr).on('click', function () {
		jQuery(this.parentNode.parentNode).remove();
	});
	jQuery('input.i-qty_size', $tr).on('change', function (e) {
		var sizes = jQuery('input.i-qty_size', $tr);
		var qty = 0;
		for (var i = 0; i < sizes.length; i++) {
			qty = qty + parseInt($(sizes[i]).val());
		}
		if (qty != 0) {
			jQuery('input.i-qty', $tr).val(qty);
		} else {
			jQuery('input.i-qty', $tr).val(jQuery('input.i-item_qty', $tr).val());
		}
	});
	jQuery('input.i-item_qty', $tr).on('change', function (e) {
		if (jQuery('input.i-item_qty', $tr).val() != 0) {
			jQuery('input.i-qty', $tr).val(jQuery('input.i-item_qty', $tr).val());
		} else {
			var sizes = jQuery('input.i-qty_size', $tr);
			var qty = 0;
			for (var i = 0; i < sizes.length; i++) {
				qty = qty + parseInt($(sizes[i]).val());
			}
			jQuery('input.i-qty', $tr).val(qty);
		}

	});
	var $qty = jQuery('input.i-qty', $tr).on('change', calculateLineTotal);
	var $price = jQuery('input.i-price', $tr).on('change', calculateLineTotal);
	var $cost = jQuery('input.i-cost', $tr).on('change', calculateLineTotal);
	var $discount = jQuery('input.i-discount', $tr).on('change', calculateLineTotal);
	var $total_discount = $('#disc').on('change', calculateLineTotal);
	calculateLineTotal();
	function calculateLineTotal() {
		let net_cost = (parseFloat($price.val()) * (1 - ($discount.val() / 100))) + parseFloat($cost.val());
		jQuery('td.i-net_cost', $tr).text(net_cost.toFixed(2));
		let total = ($qty.val() * net_cost);
		jQuery('td.i-total', $tr).text(total.toFixed(2));
		calculateSubtotalAndTotal($total_discount)
	}
}

function getcurrencyrate() {
	$('#currency_id').change(function (e) {
		var id = $("#currency_id").val();
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'whatselected': id },
			url: getAppURL('currencies/get_currency_rate'),
			success: function (data) {
				var result = data.split('-');
				$('#currency_rate').val(result[0]);
			}
		});
	});
}

function calculateSubtotalAndTotal($total_discount) {
	var subtot = 0;
	jQuery('tr', $transactionLines).each(function (i, tr) {
		subtot = subtot + parseFloat(jQuery('td.i-total', tr).text());
	});
	$('#sub_total').val(subtot.toFixed(2));
	$('#final_total').val((subtot - parseFloat($total_discount.val())).toFixed(2));
}

function validation() {
	var count = 0;
	jQuery('tr', $transactionLines).each(function (i, tr) {
		var qty = jQuery('input.i-qty', tr).val();
		var price = jQuery('input.i-price', tr).val();
		var cost = jQuery('input.i-cost', tr).val();
		var discount = jQuery('input.i-discount', tr).val();
		if (isNaN(qty) == true || isNaN(price) == true || isNaN(cost) == true || isNaN(discount) == true) {
			document.getElementById('error_transactionLines').innerHTML = _lang.numeric_values;
			document.getElementById('error_transactionLines').className = "alert alert-danger";
			count++;
		} else {
			if (Math.sign(qty) == -1 || Math.sign(price) == -1 || Math.sign(cost) == -1 || Math.sign(discount) == -1) {
				document.getElementById('error_transactionLines').innerHTML = _lang.positive_values;
				document.getElementById('error_transactionLines').className = "alert alert-danger";
				count++;
			}
		}
		if (qty.trim() == "" || price.trim() == "" || cost.trim() == "" || discount.trim() == "") {
			document.getElementById('error_transactionLines').innerHTML = _lang.numeric_values;
			document.getElementById('error_transactionLines').className = "alert alert-danger";
			count++;
		}
		var sizes_qty = 0;
		var sizes = jQuery('input.i-qty_size', tr);
		for (var i = 0; i < sizes.length; i++) {
			if (isNaN($(sizes[i]).val()) == true) {
				document.getElementById('error_transactionLines').innerHTML = _lang.numeric_values;
				document.getElementById('error_transactionLines').className = "alert alert-danger";
				count++;
			}
			if (Math.sign($(sizes[i]).val()) == -1) {
				document.getElementById('error_transactionLines').innerHTML = _lang.positive_values;
				document.getElementById('error_transactionLines').className = "alert alert-danger";
				count++;
			}
			if ($(sizes[i]).val().trim() == "") {
				document.getElementById('error_transactionLines').innerHTML = _lang.numeric_values;
				document.getElementById('error_transactionLines').className = "alert alert-danger";
				count++;
			}
			sizes_qty = sizes_qty + parseInt($(sizes[i]).val());
		}
		if (jQuery('input.i-item_qty', tr).val() != 0 && sizes_qty != 0) {
			document.getElementById('error_transactionLines').innerHTML = _lang.error_qty_case_sizes;
			document.getElementById('error_transactionLines').className = "alert alert-danger";
			count++;
		}

	});
	var disc = $('#disc').val()
	if (disc.trim() == "") {
		document.getElementById('error_disc').innerHTML = _lang.field_required;
		document.getElementById('error_disc').className = "alert alert-danger";
		count++;
	}
	if (isNaN(disc) == true) {
		document.getElementById('error_disc').innerHTML = _lang.numeric_nb;
		document.getElementById('error_disc').className = "alert alert-danger";
		count++;
	} else {
		if (Math.sign(disc) == -1) {
			document.getElementById('error_disc').innerHTML = _lang.positive_nb;
			document.getElementById('error_disc').className = "alert alert-danger";
			count++;
		}
	}
	if (document.transactionForm.acctLkupTo.value == "" || document.transactionForm.account_id.value == "") {
		document.getElementById('error_acctLkupTo').innerHTML = _lang.select_acc;
		document.getElementById('error_acctLkupTo').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.acctLkupFrom.value == "" || document.transactionForm.account2_id.value == "") {
		document.getElementById('error_acctLkupFrom').innerHTML = _lang.select_acc;
		document.getElementById('error_acctLkupFrom').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.currency_id.value == "") {
		document.getElementById('error_currency_id').innerHTML =  _lang.field_required;
		document.getElementById('error_currency_id').className = "alert alert-danger";
		count++;
	}
	var currency_rate = $('#currency_rate').val();
	if (currency_rate.trim() == "") {
		document.getElementById('error_currency_rate').innerHTML = _lang.field_required;
		document.getElementById('error_currency_rate').className = "alert alert-danger";
		count++;
	}
	if (isNaN(currency_rate) == true) {
		document.getElementById('error_currency_rate').innerHTML = _lang.numeric_nb;
		document.getElementById('error_currency_rate').className = "alert alert-danger";
		count++;
	} else {
		if (Math.sign(currency_rate) == -1) {
			document.getElementById('error_currency_rate').innerHTML = _lang.positive_nb;
			document.getElementById('error_currency_rate').className = "alert alert-danger";
			count++;
		}
	}
	var date1 = change_date_format(document.transactionForm.trans_date.value);
	if (document.transactionForm.trans_date.value == "" || isNaN(date1.getDate())) {
		document.getElementById('error_trans_date').innerHTML =  _lang.valid_date;
		document.getElementById('error_trans_date').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.value_date.value != '') {
		var date2 = change_date_format(document.transactionForm.value_date.value);
		if (isNaN(date2.getDate())) {
			document.getElementById('error_value_date').innerHTML = _lang.valid_date;
			document.getElementById('error_value_date').className = "alert alert-danger";
			count++;
		}
	}
	if (document.getElementById('transactionLines').rows.length == "0") {
		document.getElementById('error_transactionLines').innerHTML = _lang.select_items;
		document.getElementById('error_transactionLines').className = "alert alert-danger";
		count++;
	}
	var op_nb = $('#op_nb').val()
	if (op_nb.trim() == "") {
		document.getElementById('error_op_nb').innerHTML = _lang.field_required;
		document.getElementById('error_op_nb').className = "alert alert-danger";
		count++;
	} else {
		if (isNaN(op_nb) == true) {
			document.getElementById('error_op_nb').innerHTML = _lang.numeric_nb;
			document.getElementById('error_op_nb').className = "alert alert-danger";
			count++;
		} else {
			if (Math.sign(op_nb) == -1) {
				document.getElementById('error_op_nb').innerHTML = _lang.positive_nb;
				document.getElementById('error_op_nb').className = "alert alert-danger";
				count++;
			} else {
				var url = window.location.href;
				var seg = url.split('/');
				
				let trans_type = 'PU';
				if(seg.includes('to_purchase')){
					trans_type = 'PU';
				}else{
					if (seg.includes('order_purchases')) {
						trans_type = 'OP';
					}
				}				
				// case add
				let trans_id = '';
				if (seg.includes('edit')) {
					trans_id = $('#id').val();
				}
				$.ajax({
					cache: false,
					async: false,
					type: 'POST',
					data: {
						'op_nb': op_nb,
						'trans_type': trans_type,
						'trans_id': trans_id
					},
					url: getAppURL('order_purchases/check_if_op_nb_exists'),
					success: function (data) {
						if (data !== false) {
							document.getElementById('error_op_nb').innerHTML =  _lang.unique_value;
							document.getElementById('error_op_nb').className = "alert alert-danger";
							count++;
						}
					}
				});
			}
		}
	}

	if (count > 0) {
		return false;
	} else {
		return true;
	}
}

function AddAccount() {
	window.open(getAppURL('accounts/add?TransAddAccount=1'), "_blank");
}

function AddItem() {
	window.open(getAppURL('items/add?TransAddItem=1'), "_blank");
}

function change_date_format(date) {
	var datearray = date.split("-");
	var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2]
	var date_new = new Date(new_date_format);
	return date_new;
}

function autoCompletePurchasesAccount($acctLkup, $accountId, onResultSelection, $currency_id) {
	$acctLkup.autocomplete({
		serviceUrl: getAppURL('purchases/lookup_purchases_accounts/'.concat($currency_id)), appendTo: $acctLkup.parent()[0],
		noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
		noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
		onSearchStart: function (params) {
		}, onSelect: function (result) {
			onResultSelection(result.row, $accountId);
		}, transformResult: function (response) {
			return {
				suggestions: jQuery.map(response, function (account) {
					return { value: account.description, row: account };
				})
			};
		}
	});
}