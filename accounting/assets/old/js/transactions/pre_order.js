let $transactionForm, $itemLookup, $transactionLines;
jQuery(document).ready(function ($) {
	$transactionForm = $('form#transactionForm');
	$transactionLines = $('tbody#transactionLines', $transactionForm);
	$itemLookup = $('#itemLookup', $transactionForm);
	inputToDatepickerA($('#trans_date, #value_date, #journal_date', $transactionForm));
	let $acctLkupFrom = $('#acctLkupFrom', $transactionForm), $acctLkupTo = $('#acctLkupTo', $transactionForm),
		$accountId = $('#account_id', $transactionForm), $account2Id = $('#account2_id', $transactionForm);
	autoCompleteAccount($acctLkupTo, $accountId, accountSelected);
	autoCompleteItem();
	bindLinesEvents();
	getcurrencyrate();
	$('#sub_total').val('0');
	if ($('#disc').val() == '') {
		$('#disc').val('0');
	}
	$('#final_total').val('0');
	$('#final_profit').val('0');
	calculateSubtotalAndTotal();
	$('#currency_id_list').prop('disabled', true).trigger("chosen:updated");
	if (window.location.href == getAppURL('sales/add')) {
		document.getElementById("print").style.visibility = "hidden";
		document.getElementById("dnbtn").style.visibility = "hidden";
		document.getElementById("wakilni_print").style.visibility = "hidden";
		document.getElementById("invoice_print").style.visibility = "hidden";
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
	$('#driver_list').change(function (e) {
		$('#driver_id').val($('#driver_list').val())
	});
	$('#employee_list').change(function (e) {
		$('#employee_id').val($('#employee_list').val())
	});
});

function accountSelected(account, $accountId) {
	$accountId.val(account.id);
}

function autoCompleteAccount($acctLkup, $accountId, onResultSelection) {
	$acctLkup.autocomplete({
		serviceUrl: getAppURL('sales/lookup_customers_accounts'), appendTo: $acctLkup.parent()[0],
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
						url: getAppURL('sales/get_sales_account_with_the_same_currency'),
						success: function (data) {
							$('#acctLkupFrom').val(JSON.stringify(data["description"]).replace(/"/g, ""));
							$('#account2_id').val(JSON.stringify(data["id"]).replace(/"/g, ""));
						}
					});
					// autoCompleteSalesAccount($acctLkupFrom, $account2Id, accountSelected, data);
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

function autoCompleteItem() {
	$itemLookup.on('keydown', function (e) {
		if (e.keyCode == 13) {
			// do not submit form on press of return key
			e.preventDefault();
			e.stopPropagation();
			e.stopImmediatePropagation();
			return false;
		}
		// getAppURL('pre_orders/lookup_items_from_order_purchases')
	}).autocomplete({
		serviceUrl: getAppURL('purchases/lookup_items'), appendTo: $itemLookup.parent()[0],
		noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
		noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
		onSearchStart: function (params) {
		}, onSelect: function (result) {
			//alert(result.row.id);
			var currency_rate = $('#currency_rate').val();
			if (currency_rate != '') {
				addLineToTransaction(result.row, true);
			} else {
				alert("Please, you must select customer account first.")
			}
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
		var currency_rate = $('#currency_rate').val();
		var $tr = jQuery('tr#item-' + idx, $transactionLines);
		jQuery('input.i-item_id', $tr).val(item.id);
		jQuery('td.i-description', $tr).text(item.description);
		jQuery('td.i-barcode', $tr).text(item.barcode);
		jQuery('input.i-qty', $tr).val('1');
		var price = parseFloat(item.price_ttc) * parseFloat(currency_rate);
		jQuery('input.i-price', $tr).val(price.toFixed(2));
		var cost = parseFloat(item.cost) * parseFloat(currency_rate);
		if ($('#user_permission').val() == "1") {
			var profit = parseFloat(price) - parseFloat(cost);
			jQuery('input.i-profit', $tr).val(profit.toFixed(2));
		}
		jQuery('input.i-discount', $tr).val('0');
		jQuery('td.i-total', $tr).text(jQuery('input.i-price', $tr).val());
		var id = jQuery('input.i-item_id', $tr).val();
		// $.ajax({
		// 	cache: false,
		// 	type: 'POST',
		// 	data: { 'whatselected': id },
		// 	// url: getAppURL('warehouses/get_warehouses_for_item_from_op'),
		// 	url: getAppURL('warehouses/get_warehouses_for_item_from_op'),
		// 	success: function (data) {
		// 		jQuery('select.i-warehouse', $tr).empty();
		// 		var uniqueData = [];
		// 		$.each(data, function (i, el) {
		// 			if ($.inArray(el, uniqueData) === -1) uniqueData.push(el);
		// 		});
		// 		for (let i = 0; i < uniqueData.length; i++) {
		// 			jQuery('select.i-warehouse', $tr).append(`<option value="${uniqueData[i]}">
		// 					${uniqueData[i]} </option>`).val(uniqueData[i]);
		// 		}
		// 		var warehouse = jQuery('select.i-warehouse', $tr).val();
		// 		$.ajax({
		// 			cache: false,
		// 			type: 'POST',
		// 			data: { 'item_id': id, 'whatselected': warehouse },
		// 			url: getAppURL('warehouses/get_shelfs_for_item_from_op'),
		// 			success: function (data) {
		// 				jQuery('select.i-shelf', $tr).empty();
		// 				for (let i = 0; i < data.length; i++) {
		// 					jQuery('select.i-shelf', $tr).append(`<option value="${data[i]}">
		// 					${data[i]} </option>`);
		// 				}
		// 				var shelf = jQuery('select.i-shelf', $tr).val();
		// 				$.ajax({
		// 					cache: false,
		// 					type: 'POST',
		// 					data: { 'item_id': id, 'warehouse': warehouse, 'shelf': shelf },
		// 					url: getAppURL('pre_orders/get_item_sizes_in_specific_warehouse_shelf_in_op'),
		// 					success: function (data) {
		// 						jQuery('select.i-sizes', $tr).empty();
		// 						if (JSON.stringify(data) == "[]") {
		// 							jQuery('select.i-sizes', $tr).append(`<option value="No">No</option>`);
		// 						} else {
		// 							jQuery('select.i-sizes', $tr).empty();
		// 							for (let i = 0; i < data.length; i++) {
		// 								jQuery('select.i-sizes', $tr).append(`<option value="${data[i]}">
		// 							${data[i]} </option>`);
		// 							}
		// 						}
		// 					}
		// 				});
		// 			}
		// 		});
		// 	}
		// });
		$.ajax({
			cache: false,
			type: 'POST',
			url: getAppURL('warehouses/get_all_warehouses'),
			success: function (data) {
				jQuery('select.i-warehouse', $tr).empty();
				var uniqueData = [];
				$.each(data, function (i, el) {
					if ($.inArray(el, uniqueData) === -1) uniqueData.push(el);
				});
				var default_warehouse = '';
				for (let i = 0; i < uniqueData.length; i++) {
					if(uniqueData[i] == "Primary Warehouse"){
						default_warehouse = "Primary Warehouse"
					}
					jQuery('select.i-warehouse', $tr).append(`<option value="${uniqueData[i]}">
							${uniqueData[i]} </option>`).val(uniqueData[i]);
				}
				if(default_warehouse == "Primary Warehouse"){
					jQuery('select.i-warehouse', $tr).val("Primary Warehouse")
				}
				var getselected = jQuery('select.i-warehouse', $tr).children("option:selected").val();
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
			}
		});
		$.ajax({
			cache: false,
			type: 'POST',
			url: getAppURL('pre_orders/get_all_sizes'),
			success: function (data) {
				jQuery('select.i-sizes', $tr).empty();
				jQuery('select.i-sizes', $tr).append(`<option value="No">
					No </option>`);
				for (let i = 0; i < data.length; i++) {
					jQuery('select.i-sizes', $tr).append(`<option value="${data[i]}">
					${data[i]} </option>`);
				}
			}
		});
		calculateSubtotalAndTotal();
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'item_id': id },
			url: getAppURL('pre_orders/load_item_available_qty_in_order_purchase'),
			success: function (data) {
				$('#op_qty_tbody').empty();
				for (let i = 0; i < data.length; i++) {
					let tr = "<tr><td>" + data[i]['barcode'] + "</td><td>" + data[i]['size'] + "</td><td>" + data[i]['qty'] + "</td></tr>"
					$('#op_qty_tbody').append(tr);
				}
			}
		});
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'item_id': id },
			url: getAppURL('pre_orders/load_item_pre_orders'),
			success: function (data) {
				$('#os_qty_tbody').empty();
				for (let i = 0; i < data.length; i++) {
					let tr = "<tr><td>" + data[i]['barcode'] + "</td><td>" + data[i]['size'] + "</td><td>" + data[i]['qty'] + "</td></tr>"
					$('#os_qty_tbody').append(tr);
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
	var id = jQuery('input.i-item_id', $tr).val();
	jQuery('select.i-warehouse', $tr).change(function (e) {
		var warehouse = jQuery('select.i-warehouse', $tr).val();
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'item_id': id, 'whatselected': warehouse },
			// url: getAppURL('warehouses/get_shelfs_for_item_from_op'),
			url: getAppURL('purchases/get_warehouse_shelfs'),
			success: function (data) {
				jQuery('select.i-shelf', $tr).empty();
				for (let i = 0; i < data.length; i++) {
					jQuery('select.i-shelf', $tr).append(`<option value="${data[i]}">
							${data[i]} </option>`);
				}
				// var shelf = jQuery('select.i-shelf', $tr).val();
				// $.ajax({
				// 	cache: false,
				// 	type: 'POST',
				// 	data: { 'item_id': id, 'warehouse': warehouse, 'shelf': shelf },
				// 	url: getAppURL('sales/get_item_sizes_in_specific_warehouse_shelf_in_op'),
				// 	success: function (data) {
				// 		// alert(JSON.stringify(data));
				// 		jQuery('select.i-sizes', $tr).empty();
				// 		for (let i = 0; i < data.length; i++) {
				// 			jQuery('select.i-sizes', $tr).append(`<option value="${data[i]}">
				// 					${data[i]} </option>`);
				// 		}
				// 	}
				// });
			}
		});
	});
	jQuery('select.i-shelf', $tr).change(function (e) {
		var warehouse = jQuery('select.i-warehouse', $tr).val();
		var shelf = jQuery('select.i-shelf', $tr).val();
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'item_id': id, 'warehouse': warehouse, 'shelf': shelf },
			url: getAppURL('sales/get_item_sizes_in_specific_warehouse_shelf_in_op'),
			success: function (data) {
				jQuery('select.i-sizes', $tr).empty();
				for (let i = 0; i < data.length; i++) {
					jQuery('select.i-sizes', $tr).append(`<option value="${data[i]}">
							${data[i]} </option>`);
				}
			}
		});
	});
	jQuery('button.i-remove', $tr).on('click', function () {
		jQuery(this.parentNode.parentNode).remove();
	});
	var $qty = jQuery('input.i-qty', $tr).on('change', calculateLineTotal);
	var $price = jQuery('input.i-price', $tr).on('change', calculateLineTotal);
	var $cost = jQuery('input.i-cost', $tr).on('change', calculateLineTotal);
	var $discount = jQuery('input.i-discount', $tr).on('change', calculateLineTotal);
	calculateLineTotal();
	function calculateLineTotal() {
		let net_cost = (parseFloat($price.val()) * (1 - ($discount.val() / 100)));
		let total = $qty.val() * net_cost;
		jQuery('td.i-total', $tr).text(total.toFixed(2));
		var currency_rate = $('#currency_rate').val();
		var price = parseFloat(jQuery('input.i-price', $tr).val());
		$.ajax({
			cache: false,
			type: 'POST',
			data: { 'item_id': id },
			url: getAppURL('items/get_item_cost_LC'),
			success: function (data) {
				var cost = parseFloat(data) * parseFloat(currency_rate);
				let net_price = (parseFloat(price) * (1 - ($discount.val() / 100)));
				var profit = parseFloat(net_price) - parseFloat(cost);
				if ($('#user_permission').val() == "1") {
					jQuery('input.i-profit', $tr).val(profit.toFixed(2));
					calculateTotalprofit();
				} else {
					jQuery('input.i-profit', $tr).hide();
					$('#div_profit').hide();
					jQuery('input.i-profit', $tr).val(profit.toFixed(2));
					calculateTotalprofit();
				}
			}
		});
		calculateSubtotalAndTotal();
	}
	$('#delivery_charge').on('change', function () {
		calculateSubtotalAndTotal();
	});
	$('#disc').on('change', function () {
		calculateSubtotalAndTotal();
	});
}

function calculateSubtotalAndTotal() {
	var subtot = 0;
	var total_qty = 0;
	jQuery('tr', $transactionLines).each(function (i, tr) {
		subtot = subtot + parseFloat(jQuery('td.i-total', tr).text());
		total_qty = total_qty + parseInt(jQuery('input.i-qty', tr).val());
	});
	$('#sub_total').val(subtot.toFixed(2));
	$('#final_total').val((subtot - parseFloat($('#disc').val()) + parseFloat($('#delivery_charge').val())).toFixed(2));
	$('#final_qty').val(total_qty);
}

function calculateTotalprofit() {
	var profit_total = 0;
	jQuery('tr', $transactionLines).each(function (i, tr) {
		profit_total += parseFloat(jQuery('input.i-profit', tr).val()) * parseFloat(jQuery('input.i-qty', tr).val());
	});
	$('#final_profit').val(profit_total.toFixed(2));
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

function validation() {
	document.getElementById('bgsave').style.display = 'none';
	var count = 0;
	var trans_items = [];
	jQuery('tr', $transactionLines).each(function (i, tr) {
		var qty = jQuery('input.i-qty', tr).val();
		var price = jQuery('input.i-price', tr).val();
		var discount = jQuery('input.i-discount', tr).val();
		if (isNaN(qty) == true || isNaN(price) == true || isNaN(discount) == true) {
			document.getElementById('error_transactionLines').innerHTML = "*All inputs: qty, price and discount must be numeric*";
			document.getElementById('error_transactionLines').className = "alert alert-danger";
			count++;
		} else {
			if (Math.sign(qty) == -1 || Math.sign(price) == -1 || Math.sign(discount) == -1) {
				document.getElementById('error_transactionLines').innerHTML = "*All inputs: qty, price and discount must be positive numbers*";
				document.getElementById('error_transactionLines').className = "alert alert-danger";
				count++;
			}
		}
		if (qty.trim() == "" || price.trim() == "" || discount.trim() == "") {
			document.getElementById('error_transactionLines').innerHTML = "*All inputs: qty, price and discount must be numeric*";
			document.getElementById('error_transactionLines').className = "alert alert-danger";
			count++;
		}
		var shelf = jQuery('select.i-shelf', tr).children("option:selected").val();
		var warehouse = jQuery('select.i-warehouse', tr).children("option:selected").val();
		var size = jQuery('select.i-sizes', tr).children("option:selected").val();
		var item_id = jQuery('input.i-item_id', tr).val();
		var qty = jQuery('input.i-qty', tr).val();
		trans_items[$(this).attr('data-index')] = { 'qty': qty, 'shelf': shelf, 'warehouse': warehouse, 'item_id': item_id, 'size': size };
		// if (window.location.href == getAppURL('pre_orders/add')) {
		// 	$.ajax({
		// 		cache: false,
		// 		type: 'POST',
		// 		async: false,
		// 		data: { 'qty': qty, 'shelf': shelf, 'warehouse': warehouse, 'item_id': item_id, 'size': size },
		// 		url: getAppURL('pre_orders/get_max_qty_for_item_size_in_warehouse_shelf_case_pre_orders'),
		// 		success: function (data) {
		// 			// console.log(data.tot_qty)
		// 			// return false;
		// 			if (parseFloat(qty) > parseFloat(data.tot_qty) || parseFloat(qty) < 1) {
		// 				error = jQuery('div.i-error_qty', tr);
		// 				error.show().html("*Qty not available*");
		// 				error.addClass("alert alert-danger");
		// 				count++;
		// 			}
		// 		}
		// 	});
		// } else {
		// 	$.ajax({
		// 		cache: false,
		// 		type: 'POST',
		// 		async: false,
		// 		data: { 'qty': qty, 'shelf': shelf, 'warehouse': warehouse, 'item_id': item_id, 'size': size, 'trans_id': $('#id').val() },
		// 		url: getAppURL('pre_orders/get_max_qty_for_item_size_in_warehouse_shelf_validation_edit_pre_orders'),
		// 		success: function (data) {
		// 			if (parseFloat(qty) > parseFloat(data.tot_qty) || parseFloat(qty) < 1) {
		// 				error = jQuery('div.i-error_qty', tr);
		// 				error.show().html("*Qty not available*");
		// 				error.addClass("alert alert-danger");
		// 				count++;
		// 			}
		// 		}
		// 	});
		// }
	});
	var disc = $('#disc').val()
	if (disc.trim() == "") {
		document.getElementById('error_disc').innerHTML = "*please enter number for discount*";
		document.getElementById('error_disc').className = "alert alert-danger";
		count++;
	}
	if (isNaN(disc) == true) {
		document.getElementById('error_disc').innerHTML = "*discount must be numeric*";
		document.getElementById('error_disc').className = "alert alert-danger";
		count++;
	} else {
		if (Math.sign(disc) == -1) {
			document.getElementById('error_disc').innerHTML = "*discount must be positive number*";
			document.getElementById('error_disc').className = "alert alert-danger";
			count++;
		}
	}
	if (document.transactionForm.acctLkupTo.value == "" || document.transactionForm.account_id.value == "") {
		document.getElementById('error_acctLkupTo').innerHTML = "*Please select a Supplier Account*";
		document.getElementById('error_acctLkupTo').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.acctLkupFrom.value == "" || document.transactionForm.account2_id.value == "") {
		document.getElementById('error_acctLkupFrom').innerHTML = "*Please select a Purchases Account*";
		document.getElementById('error_acctLkupFrom').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.currency_id.value == "") {
		document.getElementById('error_currency_id').innerHTML = "*Please select a currency*";
		document.getElementById('error_currency_id').className = "alert alert-danger";
		count++;
	}
	var currency_rate = $('#currency_rate').val();
	if (currency_rate.trim() == "") {
		document.getElementById('error_currency_rate').innerHTML = "*please enter number for currency rate*";
		document.getElementById('error_currency_rate').className = "alert alert-danger";
		count++;
	}
	if (isNaN(currency_rate) == true) {
		document.getElementById('error_currency_rate').innerHTML = "*currency rate must be numeric*";
		document.getElementById('error_currency_rate').className = "alert alert-danger";
		count++;
	} else {
		if (Math.sign(currency_rate) == -1) {
			document.getElementById('error_currency_rate').innerHTML = "*currency rate must be positive number*";
			document.getElementById('error_currency_rate').className = "alert alert-danger";
			count++;
		}
	}
	var date1 = change_date_format(document.transactionForm.trans_date.value);
	if (document.transactionForm.trans_date.value == "" || isNaN(date1.getDate())) {
		document.getElementById('error_trans_date').innerHTML = "*Please enter a valide date*";
		document.getElementById('error_trans_date').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.value_date.value != '') {
		var date2 = change_date_format(document.transactionForm.value_date.value);
		if (isNaN(date2.getDate())) {
			document.getElementById('error_value_date').innerHTML = "*Please enter a valide date*";
			document.getElementById('error_value_date').className = "alert alert-danger";
			count++;
		}
	}
	if (document.getElementById('transactionLines').rows.length == "0") {
		document.getElementById('error_transactionLines').innerHTML = "*Please enter an item*";
		document.getElementById('error_transactionLines').className = "alert alert-danger";
		count++;
	}
	if (document.transactionForm.source.value == "0") {
		document.getElementById('error_source').innerHTML = "*Please select a source*";
		document.getElementById('error_source').className = "alert alert-danger";
		count++;
	}
	if (count > 0) {
		document.getElementById('bgsave').style.display = 'block';
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

function autoCompleteSalesAccount($acctLkup, $accountId, onResultSelection, $currency_id) {
	$acctLkup.autocomplete({
		serviceUrl: getAppURL('sales/lookup_sales_accounts/'.concat($currency_id)), appendTo: $acctLkup.parent()[0],
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
