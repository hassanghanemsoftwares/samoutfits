jQuery(document).ready(function () {
	window.accountsDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('%t/edit/') + '%d" class="btn bt-link btn-xs"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>';
	/***************************************************/
	var $dtTbl = $('#activityaccountTbl');
	EnhanceDataTableSearch(window.accountsDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: false, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: {url: getAppURL('accounts/activity/'+ActivityAccountId), type: 'GET', searchDelay: _GST},
		columns: [{data: 'account_number'}, {data: 'account_name'}, {data: 'journal_type'}, {data: 'auto_no'},
			{data: 'journal_date'}, {data: 'currency_code'}, {data: 'currency_rate'}, {data: 'total'}, {data: 'id'}],
			columnDefs: [
				{ targets: 8, orderable: false, createdCell: (td, accId, row) => $(td).addClass('text-right').html((dtActionsHTML.replace(/%d/g , get_id(accId))).replace(/%t/g , get_journal_name(row.journal_type)))},
			]
		}), 2048);
	});
	
	function get_journal_name(type){
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
		if (type == "RE") {
			$trans = "receipts";
		}
		if (type == "PA") {
			$trans = "payments";
		}
		return $trans;
	}

	function get_id(accId){
		var id="";
		$.ajax({
			cache: false,
			type: 'POST',
			async: false,
			data: {'journal_id': accId},
			url: getAppURL('accounts/get_journal_or_trans_id'),
			success: function (data) {
				if(data == ''){
					id = accId;
				}else{
					id= data;
				}				
			}
		});
		return id;
	}