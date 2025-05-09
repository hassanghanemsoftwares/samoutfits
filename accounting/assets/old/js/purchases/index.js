jQuery(document).ready(function () {
	window.purchasesDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('purchases/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
		'<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('purchases/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete" >' +'<i class="glyphicon glyphicon-trash text-danger"></i></a>'+
		'<a href="' + getAppURL('purchases/check/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-search"></i></a>'+
		'<a href="' + getAppURL('barcodes/bulk_print/') + '%d" class="btn bt-link btn-xs" title="Barcodes"><i style="color:#282828;" class="glyphicon glyphicon-barcode"></i></a>';
	let statusHTML = '<input name="status" type="checkbox"id="status" class="input.i-status" onclick="return false;" %s>';
	/***************************************************/
	var $dtTbl = $('#purchasesTbl');
	BuildDataTableColumnSearch($dtTbl, 'purchasesDT');
	EnhanceDataTableSearch(window.purchasesDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('purchases/index'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'auto_no' }, { data: 'trans_date' }, { data: 'value_date' }, { data: 'account1' },
		{ data: 'account2' }, { data: 'currency_code' }, { data: 'currency_rate' }, { data: 'discount' }, { data: 'total' }, { data: 'status' }, { data: 'id' }],
		columnDefs: [
			{ targets: 10, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) },
			{ targets: 9, orderable: false, createdCell: (td, status) => $(td).addClass('text-right').html(statusHTML.replace(/%s/g, status_check(status))) },
			{targets: 1, render: $.fn.dataTable.render.moment('YYYY-MM-DD','DD-MM-YYYY')},
			{targets: 2, render: $.fn.dataTable.render.moment('YYYY-MM-DD','DD-MM-YYYY')},
		]
	}), 2048);
});

function status_check(status) {
	if (parseInt(status) == 1) {
		return 'checked';
	} else {
		return '';
	}
}