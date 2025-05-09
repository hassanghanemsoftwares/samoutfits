jQuery(document).ready(function () {
	window.returnsalesDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('return_sales/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
			'<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('return_sales/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
			'<i class="glyphicon glyphicon-trash text-danger"></i></a>';
	/***************************************************/
	var $dtTbl = $('#returnsalesTbl');
	EnhanceDataTableSearch(window.returnsalessDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: {url: getAppURL('return_sales/index'), type: 'GET', searchDelay: _GST},
		columns: [{data: 'auto_no'}, {data: 'trans_date'}, {data: 'value_date'}, {data: 'account1'}, 
		{data: 'account2'}, {data: 'currency_code'}, {data: 'currency_rate'}, {data: 'discount'},{data: 'total'}, {data: 'id'}],
		columnDefs: [
			{targets: 9, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))},
			{targets: 1, render: $.fn.dataTable.render.moment('YYYY-MM-DD','DD-MM-YYYY')},
			{targets: 2, render: $.fn.dataTable.render.moment('YYYY-MM-DD','DD-MM-YYYY')},
		]
	}), 2048);
});