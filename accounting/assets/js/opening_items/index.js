jQuery(document).ready(function () {
	window.purchasesDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('opening_items/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
			'<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('opening_items/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete" >' +
			'<i class="glyphicon glyphicon-trash text-danger"></i></a>';
	/***************************************************/
	var $dtTbl = $('#purchasesTbl');
	EnhanceDataTableSearch(window.purchasesDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: false, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: {url: getAppURL('opening_items/index'), type: 'GET', searchDelay: _GST},
		columns: [{data: 'auto_no'}, {data: 'trans_date'}, {data: 'description'},{data: 'barcode'},{data: 'total_qty'}, {data: 'id'}],
		columnDefs: [
			{targets: 5, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
		]
	}), 2048);
});