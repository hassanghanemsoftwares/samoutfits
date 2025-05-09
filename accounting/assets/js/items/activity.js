jQuery(document).ready(function () {
	window.itemsDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('%t/edit/') + '%d" class="btn bt-link btn-xs"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>';
	/***************************************************/
	var $dtTbl = $('#itemsactivityTbl');
	EnhanceDataTableSearch(window.itemsDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('items/activity/' + ActivityItemId), type: 'GET', searchDelay: _GST },
		columns:
			[{ data: 'account_name' }, { data: 'trans_type' }, { data: 'trans_date' },
			{ data: 'auto_no' }, { data: 'currency_code' }, { data: 'currency_rate' },
			{ data: 'warehouse' }, { data: 'shelf' }, { data: 'qty' }, { data: 'price' },
			{ data: 'total_of_item' }, { data: 'trans_id' }
			],
		columnDefs: [
			{ targets: 11, orderable: false, createdCell: (td, accId, row) => $(td).addClass('text-right').html((dtActionsHTML.replace(/%d/g, parseInt(accId))).replace(/%t/g, get_trans_name(row.trans_type))) },
		]
	}), 2048);
});

function get_trans_name(type) {
	var $trans = "";
	if (type == "PU") {
		$trans = "purchases";
	}
	if (type == "SA") {
		$trans = "sales";
	}
	if (type == "EX") {
		$trans = "sales";
	}
	if (type == "RP") {
		$trans = "return_purchases";
	}
	if (type == "RS") {
		$trans = "return_sales";
	}
	if (type == "OS") {
		$trans = "orders";
	}
	if (type == "OP") {
		$trans = "order_purchases";
	}
	if (type == "QU") {
		$trans = "quotations";
	}
	if (type == "OI") {
		$trans = "opening_items";
	}
	if (type == "MP") {
		$trans = "missing_products";
	}
	if (type == "TR") {
		$trans = "transfers";
	}
	return $trans;
}
