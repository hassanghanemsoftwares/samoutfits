jQuery(document).ready(function () {
	window.itemsDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('items/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>'
		+ '<input type="text" value="%d" hidden>';
	/***************************************************/
	var $dtTbl = $('#itemsTbl');
	BuildDataTableColumnSearch($dtTbl, 'itemsDT');
	EnhanceDataTableSearch(window.itemsDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: {
			url: getAppURL('items/all'), type: 'GET', searchDelay: _GST,
			data: function (params) {
				var tags = $('#tag_barcodes').data('tags');
				if (tags !== undefined) {
					var t = [];
					for (let i = 0; i < tags.length; i++) {
						t.push(tags[i].text);
					}
					params["multi_barcodes"] = t;
				}
				if ($('#category_filter').val()) {
					params['category'] = $('#category_filter').val();
				} else {
					params['category'] = '';
				}
				// console.log($('#category_filter').val(), '11')
				if ($('#sub_category_filter').val()) {
					params['sub_category'] = $('#sub_category_filter').val();
				} else {
					params['sub_category'] = '';
				}
				// console.log($('#sub_category_filter').val())
				if ($('#color_filter').val()) {
					params['color'] = $('#color_filter').val();
				} else {
					params['color'] = '';
				}
				if ($('#gender_filter').val()) {
					params['gender'] = $('#gender_filter').val();
				} else {
					params['gender'] = '';
				}
				if ($('#publish_filter').val()) {
					params['published'] = $('#publish_filter').val();
				} else {
					params['published'] = '';
				}
				if ($('#stock_clearance_filter').val()) {
					params['stock_clearance'] = $('#stock_clearance_filter').val();
				} else {
					params['stock_clearance'] = '';
				}
			}
		},
		columns: [{ data: 'barcode' }, { data: 'description' }, { data: 'category' }, { data: 'price' }, { data: 'price_ttc' }, { data: 'qty' }, { data: 'id' }
		],
		columnDefs: [
			{ targets: 6, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) }
		]
	}), 2048);
	$('#tag_barcodes').tagThis({
		noDuplicates: true
	});
	jQuery('#dtAdvFltrs').attr('onsubmit', '').on('submit', triggerDTFiltersSearch);
	jQuery('#category_filter').on('change', triggerDTFiltersSearch);
	jQuery('#sub_category_filter').on('change', triggerDTFiltersSearch);
	jQuery('#color_filter').on('change', triggerDTFiltersSearch);
	jQuery('#gender_filter').on('change', triggerDTFiltersSearch);
	jQuery('#publish_filter').on('change', triggerDTFiltersSearch);
	jQuery('#stock_clearance_filter').on('change', triggerDTFiltersSearch);

	$('#bulk').on('click', function (e) {
		let table = document.getElementById("table_bulk");
		table.deleteTHead();
		for (var i = 1; i < table.rows.length;) {
			table.deleteRow(i);
		}
		let table1 = document.getElementById("table_bulk_ids");
		table1.deleteTHead();
		for (var i = 1; i < table1.rows.length;) {
			table1.deleteRow(i);
		}
		var rows = [];
		var ids = [];
		var all_ids = [];
		var count = 0;
		$("table > tbody > tr").each(function () {
			rows[count] =
			{
				'Barcode': $(this).find('td').eq(0).text(),
				'Description': $(this).find('td').eq(1).text(),
				'Category': $(this).find('td').eq(2).text(),
				'Sale Price': $(this).find('td').eq(3).text(),
				'Gross Sale Price': $(this).find('td').eq(4).text()
			};
			ids[count] = { 'id': $(this).find("td").eq(6).find("input").val() };
			all_ids[count] = ids[count].id;
			count++;
		});
		$('#all_ids').val(all_ids);
		let data = Object.keys(rows[0]);
		generateTableHead(table, data);
		generateTable(table, rows);
		let data1 = Object.keys(ids[0]);
		// console.log(ids)
		generateTableHead(table1, data1);
		generateTable(table1, ids);
		$('#bulk_modal').modal('show');
	});
	$('#bulk_submit').on('click', function (e) {
		var edit_publish = $('#edit_publish').is(':checked');
		var edit_stock_clearance = $('#edit_stock_clearance').is(':checked');
		var edit_price = $('#edit_price').is(':checked');
		var operation = $('#operation').val();
		var price = $('#price').val();
		var edit_cost = $('#edit_cost').is(':checked');
		var operation1 = $('#operation1').val();
		var edit_category = $('#edit_category').is(':checked');
		var category = $('#category').val();
		var edit_sub_category = $('#edit_sub_category').is(':checked');
		var sub_category = $('#sub_category').val();
		var edit_color = $('#edit_color').is(':checked');
		var color = $('#color').val();
		var edit_gender = $('#edit_gender').is(':checked');
		var gender = $('#gender').val();
		var edit_old_price = $('#edit_old_price').is(':checked');
		var old_price = $('#old_price').val();
		var edit_tags = $('#edit_tags').is(':checked');
		var tags = $('#tags').val();
		var cost = $('#cost').val();
		if (edit_price === true || edit_cost === true || edit_publish === true || edit_stock_clearance === true || edit_category == true || edit_sub_category == true || edit_color == true || edit_gender == true || edit_old_price == true || edit_tags == true) {
			var count = -1;
			var ids = [];
			$('#table_bulk_ids tr').each(function () {
				if (count != -1) {
					ids[count] = $(this).find("td:first").text();
				}
				count++;
			});
		}
		// console.log(ids);
		if (edit_price === true) {
			if (price == '') {
				alert("Please Enter Numeric Value For Sale Price");
			} else {
				$.ajax({
					cache: false,
					type: 'POST',
					async: true,
					data: {
						'ids': ids, 'price': price, 'operation': operation
					},
					url: getAppURL('items/bulk_product_sale_price_edit'),
					success: function (data) {
						// alert(data);
						setTimeout(() => $('#bulk_modal').modal('hide'), 1000);
						location.reload();
					}
				});
			}
		}
		if (edit_cost === true) {
			if (cost == '') {
				alert("Please Enter Numeric Value For Cost LC");
			} else {
				$.ajax({
					cache: false,
					type: 'POST',
					async: true,
					data: {
						'ids': ids, 'cost': cost, 'operation': operation1
					},
					url: getAppURL('items/bulk_product_cost_edit'),
					success: function (data) {
						// alert(data);
						setTimeout(() => $('#bulk_modal').modal('hide'), 1000);
						location.reload();
					}
				});
			}
		}
		if (edit_publish === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'publish': $('#publish').val()
				},
				url: getAppURL('items/bulk_product_publish_edit'),
				success: function (data) {
					// console.log(data);
					// return false;
					setTimeout(() => $('#bulk_modal').modal('hide'), 1000);
					location.reload();
				}
			});
		}
		if (edit_stock_clearance === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'stock_clearance': $('#stock_clearance').val()
				},
				url: getAppURL('items/bulk_product_stock_clearance_edit'),
				success: function (data) {
					// console.log(data);
					// return false;
					// setTimeout(() => $('#bulk_modal').modal('hide'), 1000);
					location.reload();
				}
			});
		}
		if (edit_category === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'category': category
				},
				url: getAppURL('items/bulk_product_category_edit'),
				success: function (data) {
					location.reload();
				}
			});
		}
		if (edit_sub_category === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'sub_category': sub_category
				},
				url: getAppURL('items/bulk_product_sub_category_edit'),
				success: function (data) {
					location.reload();
				}
			});
		}
		if (edit_color === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'color': color
				},
				url: getAppURL('items/bulk_product_color_edit'),
				success: function (data) {
					location.reload();
				}
			});
		}
		if (edit_gender === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'gender': gender
				},
				url: getAppURL('items/bulk_product_gender_edit'),
				success: function (data) {
					location.reload();
				}
			});
		}
		if (edit_old_price === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'old_price': old_price
				},
				url: getAppURL('items/bulk_product_old_price_edit'),
				success: function (data) {
					location.reload();
				}
			});
		}
		if (edit_tags === true) {
			$.ajax({
				cache: false,
				type: 'POST',
				async: true,
				data: {
					'ids': ids, 'tags': tags
				},
				url: getAppURL('items/bulk_product_add_new_tags'),
				success: function (data) {
					// console.log(data);
					location.reload();
				}
			});
		}
	});
});

function triggerDTFiltersSearch(e) {
	window.itemsDT.ajax.reload();
	e.preventDefault();
	e.stopPropagation();
	return false;
}

function generateTableHead(table, data) {
	let thead = table.createTHead();
	let row = thead.insertRow();
	for (let key of data) {
		let th = document.createElement("th");
		let text = document.createTextNode(key);
		th.appendChild(text);
		row.appendChild(th);
	}
}

function generateTable(table, data) {
	for (let element of data) {
		let row = table.insertRow();
		for (key in element) {
			let cell = row.insertCell();
			let text = document.createTextNode(element[key]);
			cell.appendChild(text);
		}
	}
}