$(document).ready(function () {
	$('#generate').on('click', function (e) {	
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
	$('#price').on('change', function (e) {
		calculate_price_ttc();
	});
	$('#TVA').on('change', function (e) {
		calculate_price_ttc();
	});
	$('#open_product').on('click', function (e) {
		e.preventDefault();
		var item_id = $('#id').val();
		if (!item_id) {
			alert("Save Item first");
		} else {
			window.location.href = getAppURL('items/add_opening_item/' + item_id);
		}
	});

	$(document).keypress(
		function (event) {
			if (event.which == '13') {
				event.preventDefault();
			}
		});

	$('#purchase_cost').on('change', function (e) {
		$.ajax({
			cache: false,
			type: 'POST',
			data: {
				'purchase_cost': $('#purchase_cost').val()
			},
			url: getAppURL('Items/calculate_cost_lc_by_purch_cost'),
			success: function (data) {
				$('#cost').val(data);
			}
		});
	});

	$('button.i-remove').on('click', function (e) {
		let $btn = $(this);
		var image_name = this.id;
		$confirm = confirm("Sure you want to remove image: ".concat(image_name).concat("?"));
		if ($confirm == true) {
			var item_id = $('#id').val();
			$.ajax({
				cache: false,
				type: 'POST',
				data: {
					'image_name': image_name, 'item_id': item_id
				},
				url: getAppURL('Items/delete_item_image'),
				success: function (data) {
					// alert(data);
					$btn.closest('.gallery').remove();
					window.location.href = getAppURL('Items/edit/'+item_id);
					// location.reload()
				}
			});
		}
	});
	$('.image-nb').on('change', function(e){
		let image_id = $(this).data('image-id');

		let old_order_nb = $(this).data('order_nb');
		let image_nb = $(this).val();
		var item_id =  $(this).data('item-id');


		$.ajax({
			cache: false,
			type: 'POST',
			data: {
				'order_nb': image_nb, 'image_id': image_id, 'item_id': item_id, 'old_order_nb': old_order_nb
			},
			url: getAppURL('Items/update_item_image_order_nb'),
			success: function (data) {
				location.reload(true);
			}
		});
	})
});

function calculate_price_ttc() {
	if (isNaN(document.itemsform.price.value) == false) {
		document.getElementById('error_price').style.display = "none";
		var price = $('#price').val();
		var TVA = $('#TVA').val();
		$('#price_ttc').val(parseFloat(price) * (1 + (parseFloat(TVA) / 100)));
	} else {
		document.getElementById('error_price').style.display = "block";
		document.getElementById('error_price').innerHTML = "*Please enter a numeric value*";
		document.getElementById('error_price').className = "alert alert-warning";
	}
}



$('button.remove_size_chart').on('click', function (e) {
	let $btn = $(this);
	var image_name = this.id;
	$confirm = confirm("Sure you want to remove size chart: ".concat(image_name).concat("?"));
	if ($confirm == true) {
		var item_id = $('#id').val();
		$.ajax({
			cache: false,
			type: 'POST',
			data: {
				'image_name': image_name, 'item_id': item_id
			},
			url: getAppURL('Items/delete_item_size_chart'),
			success: function (data) {
				// alert(data);
				$btn.closest('.gallery').remove();
				window.location.href = getAppURL('Items/edit/'+item_id);
				// location.reload()
			}
		});
	}
});