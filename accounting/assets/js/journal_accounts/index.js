jQuery(document).ready(function () {
	window.journal_accountsDT = null;
	/***************************************************/
	var $dtTbl = $('#journal_accountsTbl');
	EnhanceDataTableSearch(window.journal_accountsDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: false, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('journal_accounts/index'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'journal' }, { data: 'transaction' }, { data: 'account_name' },
		{ data: 'credit_debit' }, { data: 'amount' }, { data: 'value_date' }, { data: 'description' }
		]
	}), 2048);
});