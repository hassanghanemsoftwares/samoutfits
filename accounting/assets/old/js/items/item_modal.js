var $input;
$(document).ready(function () {
	$('#add_item_modal').on('click', function () {
		$("#itemsform").find('input:text').val('');
		$('div#ItemFormModal').modal('show');
	});
	$('#generate').click(function (e) {
		var barcode = $('#barcode').val();
		e.preventDefault();
		e.stopPropagation();
		e.stopImmediatePropagation();
		if (barcode == '') {
			$.ajax({
				cache: false,
				type: 'POST',
				data: {
					'': ''
				},
				url: getAppURL('Items/fetchitemnumberfromDatabase'),
				success: function (data) {
					$('#barcode').val(data);
				}
			});
		}
	});
	$('#save_item').on('click', function () {
		$("#itemsform").each(function () {
			$input = $(this).serializeArray();
		});
		// alert($input);
		if (ItemModalvalidation() == true) {
			// alert("done");
			$.ajax({
				cache: false,
				type: 'POST',
				data: { 'form_data': $input },
				url: getAppURL('items/add_item_by_modal'),
				success: function (data) {
					// alert(data);
					setTimeout(() => $('div#ItemFormModal').modal('hide'), 1000);
				}
			});
		}
	});
});

function ItemModalvalidation() {
	var count = 0;
	if (window.location.href == getAppURL('items/add')) {
		$.ajax({
			cache: false,
			type: 'POST',
			async: false,
			data: { 'barcode': document.itemsform.barcode.value },
			url: getAppURL('Items/check_if_barcode_exists'),
			success: function (data) {
				if (data != "0") {
					document.getElementById('error_barcode').innerHTML = "*Please Enter a new barcode: barcode must be unique*";
					document.getElementById('error_barcode').className = "alert alert-danger";
					count++;
				}
			}
		});
	}
	var id = $('#id').val();
	if (id) {
		if (window.location.href == getAppURL('items/edit/') + id) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: false,
				data: { 'barcode': document.itemsform.barcode.value, 'id': id },
				url: getAppURL('Items/check_if_barcode_exists_on_item_update'),
				success: function (data) {
					if (data.barcode != document.itemsform.barcode.value) {
						if (data.count != "0") {
							document.getElementById('error_barcode').innerHTML = "*Please Enter a new barcode: barcode must be unique*";
							document.getElementById('error_barcode').className = "alert alert-danger";
							count++;
						}
					}
				}
			});
		}
	}
	if (document.itemsform.barcode.value == "") {
		document.getElementById('error_barcode').innerHTML = "*Please Enter or generate a barcode*";
		document.getElementById('error_barcode').className = "alert alert-danger";
		count++;
	}
	if (document.itemsform.description.value == "") {
		document.getElementById('error_description').innerHTML = "*Please enter a description*";
		document.getElementById('error_description').className = "alert alert-danger";
		count++;
	}
	if (isNaN(document.itemsform.profit.value) == true) {
		document.getElementById('error_profit').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_profit').className = "alert alert-danger";
		count++;
	}
	var prof = $("#profit").val();
	if (parseFloat(prof) < 0 || parseFloat(prof) > 100) {
		document.getElementById('error_profit').innerHTML = "*Please enter a numeric value between 0 and 100*";
		document.getElementById('error_profit').className = "alert alert-danger";
		count++;
	}
	if (isNaN(document.itemsform.price.value) == true) {
		document.getElementById('error_price').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_price').className = "alert alert-danger";
		count++;
	}
	if (isNaN(document.itemsform.price_ttc.value) == true) {
		document.getElementById('error_price_ttc').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_price_ttc').className = "alert alert-danger";
		count++;
	}
	if (isNaN(document.itemsform.cost.value) == true) {
		document.getElementById('error_cost').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_cost').className = "alert alert-danger";
		count++;
	}	
	if (isNaN(document.itemsform.open_cost.value) == true) {
		document.getElementById('error_open_cost').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_open_cost').className = "alert alert-danger";
		count++;
	}
	if (isNaN(document.itemsform.purchase_cost.value) == true) {
		document.getElementById('error_purchase_cost').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_purchase_cost').className = "alert alert-danger";
		count++;
	}
	if (count > 0) {
		return false;
	} else {
		return true;
	}
}
