jQuery(document).ready(function () {
	window.opInventoryDT = null;
	// let dtActionsHTML = '';
	/***************************************************/
	var $dtTbl = $('#opInventoryTbl');
	EnhanceDataTableSearch(window.opInventoryDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('order_purchases/inventory'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'barcode' }, { data: 'description' }, { data: 'size' }, { data: 'total_qty' }, { data: 'price_ttc' }],
		columnDefs: [
			// { targets: 10, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) },
		]
	}), 2048);
});