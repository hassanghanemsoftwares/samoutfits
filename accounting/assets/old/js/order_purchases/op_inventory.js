jQuery(document).ready(function () {
	window.opinventoryDT = null;
	let dtActionsHTML = '';
	/***************************************************/
	var $dtTbl = $('#opinventoryTbl');
	EnhanceDataTableSearch(window.opinventoryDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('order_purchases/op_inventory'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'auto_no' }, { data: 'barcode' }, { data: 'size' }, { data: 'qty' }, { data: 'price_ttc' },
        { data: 'description' },  { data: 'warehouse' }, { data: 'shelf' }, 
         { data: 'trans_date' }, { data: 'supplier' },  { data: 'id' }],
		columnDefs: [
			{ targets: 10, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) },
		]
	}), 2048);
});