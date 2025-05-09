jQuery(document).ready(function () {
	window.salesDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('delivery_notes/preview/') + '%d" class="btn bt-link btn-xs" title="Delivery Note"><i style="color:#282828;" class="glyphicon glyphicon-file"></i></a>'			
	/***************************************************/
	var $dtTbl = $('#salesTbl');
	EnhanceDataTableSearch(window.salesDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: {url: getAppURL('sales/index'), type: 'GET', searchDelay: _GST},
		columns: [{data: 'auto_no'}, {data: 'trans_date'}, {data: 'value_date'}, {data: 'account1'}, 
		{data: 'account2'}, {data: 'currency_code'}, {data: 'currency_rate'}, {data: 'discount'}, {data: 'total'}, {data: 'id'}],
		columnDefs: [
			{targets: 9, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
		]
	}), 2048);
});