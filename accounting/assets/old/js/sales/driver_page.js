jQuery(document).ready(function () {
	window.salesDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('delivery_notes/preview/') + '%d" class="btn bt-link btn-xs" title="Delivery Note"><i style="color:#282828;" class="glyphicon glyphicon-file"></i></a>' +
		'<a href="' + getAppURL('sales/check/') + '%d" class="btn bt-link btn-xs" title="Check Box"><i style="color:#282828;" class="glyphicon glyphicon-search"></i></a>'
		+ '<a href="' + getAppURL('sales/update_delivered/') + '%d" class="btn bt-link btn-xs" title="Delivered"><i style="color:#282828;" class="glyphicon glyphicon-check"></i></a>';
	let deliveredHTML = '<center><input name="delivered" type="checkbox"id="delivered" class="input.i-delivered" onclick="return false;" %s></center>';
	let orderHTML = '<center><p>%o</p></center>';
	/***************************************************/
	var $dtTbl = $('#salesTbl');
	EnhanceDataTableSearch(window.salesDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('sales/driver_page'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'auto_no' }, { data: 'relation_id' }, { data: 'trans_date' }, { data: 'value_date' }, { data: 'account1' }, { data: 'account_number1' },
		{ data: 'account2' }, { data: 'delivered' }, { data: 'id' }],
		columnDefs: [
			{ targets: 1, orderable: false, createdCell: (td, orderid) => $(td).addClass('text-right').html(orderHTML.replace(/%o/g, get_auto_nb(orderid))) },
			{ targets: 8, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) },
			{ targets: 7, orderable: false, createdCell: (td, delivered) => $(td).addClass('text-right').html(deliveredHTML.replace(/%s/g, delivered_check(delivered))) }
		]
	}), 2048);
});

function delivered_check(delivered) {
	if (parseInt(delivered) == 1) {
		return 'checked';
	} else {
		return '';
	}
}

function get_auto_nb(orderid){
	var auto_no;
	$.ajax({
		cache: false,
		async: false,
		type: 'POST',
		data: { 'id': orderid },
		url: getAppURL('sales/get_order_auto_no'),
		success: function (data) {
			auto_no= data;
		}
	});
	return auto_no;
}