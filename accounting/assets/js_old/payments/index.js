jQuery(document).ready(function () {
	window.paymentsDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('payments/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
			'<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('payments/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete" >' +
			'<i class="glyphicon glyphicon-trash text-danger"></i></a>';
	/***************************************************/
	var $dtTbl = $('#paymentsTbl');
	EnhanceDataTableSearch(window.paymentsDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: {url: getAppURL('payments/index'), type: 'GET', searchDelay: _GST},
		columns: [{data: 'auto_no'}, {data: 'description'}, {data: 'journal_date'}, {data: 'account1'}, {data: 'account2'}, 
		{data: 'currency_code'}, {data: 'currency_rate'}, {data: 'amount'}, {data: 'id'}],
		columnDefs: [
			{targets: 8, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))},
			{targets: 2, render: $.fn.dataTable.render.moment('YYYY-MM-DD','DD-MM-YYYY')},
		]
	}), 2048);
});