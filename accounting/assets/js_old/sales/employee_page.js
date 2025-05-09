jQuery(document).ready(function () {
	window.salesDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('sales/preview/') + '%d/print" class="btn bt-link btn-xs" title="Print Invoice"><i style="color:#282828;" class="glyphicon glyphicon-print"></i></a>' +
		'<a href="' + getAppURL('sales/check/') + '%d" class="btn bt-link btn-xs" title="Check Box"><i style="color:#282828;" class="glyphicon glyphicon-search"></i></a>'+ 
		'<input type="text" value="%d" hidden>';
	/***************************************************/
	var $dtTbl = $('#salesTbl');
	BuildDataTableColumnSearch($dtTbl, 'salesDT');
	EnhanceDataTableSearch(window.salesDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('sales/employee_page'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'auto_no' }, { data: 'account1' }, { data: 'account_number1' }, { data: 'trans_date' }, { data: 'value_date' },
		{ data: 'status2' }, { data: 'driver' }, { data: 'cash_date' }, { data: 'return_date' }, { data: 'id' }],
		columnDefs: [
			{ targets: 9, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) }
		]
	}), 2048);

	inputToDatepickerA($('#cash_date, #value_date, #return_date'));

	$('#bulk').on('click', function (e) {
		let table = document.getElementById("table_bulk");
		table.deleteTHead();
		for (var i = 1; i < table.rows.length;) {
			table.deleteRow(i);
		}
		let table1 = document.getElementById("table_bulk_ids");
		table1.deleteTHead();
		for (var i = 1; i < table1.rows.length;) {
			table1.deleteRow(i);
		}
		var rows = [];
		var ids = [];
		var count = 0;
		$("table > tbody > tr").each(function () {
			rows[count] =
			{
				'invoice nb': $(this).find('td').eq(0).text(),
				'customer name': $(this).find('td').eq(1).text(),
				'customer nb': $(this).find('td').eq(2).text(),
				'trans date': $(this).find('td').eq(3).text(),
				'dispatch date': $(this).find('td').eq(4).text(),
				'status': $(this).find('td').eq(5).text(),
				'delivery': $(this).find('td').eq(6).text(),
				'cash date': $(this).find('td').eq(7).text(),
				'return date': $(this).find('td').eq(8).text()
			};
			ids[count] = { 'id': $(this).find("td").eq(9).find("input").val() };
			count++;
		});
		let data = Object.keys(rows[0]);
		generateTableHead(table, data);
		generateTable(table, rows);
		let data1 = Object.keys(ids[0]);
		generateTableHead(table1, data1);
		generateTable(table1, ids);
		$('#bulk_modal').modal('show');
	});

	$('#bulk_submit').on('click', function (e) {
		// var delivered = $('input[name="delivered"]:checked').val();
		var status = $('#status2').val();
		var driver = $('#driver').val();
		var value_date;
		if ($('#value_date').val() != '') {
			value_date = change_date_format($('#value_date').val());
		} else {
			value_date = 0;
		}
		var cash_date;
		if ($('#cash_date').val() != '') {
			var cash_date = change_date_format($('#cash_date').val());
		} else {
			cash_date = 0;
		}
		var return_date;
		if ($('#return_date').val() != '') {
			return_date = change_date_format($('#return_date').val());
		} else {
			return_date = 0;
		}
		var count = -1;
		var ids = [];
		$('#table_bulk_ids tr').each(function () {
			if (count != -1) {
				ids[count] = $(this).find("td:first").text();
			}
			count++;
		});
		$.ajax({
			cache: false,
			type: 'POST',
			async: true,
			data: { 'ids': ids, 'status': status, 'driver': driver, 'value_date': value_date, 'cash_date': cash_date, 'return_date': return_date },
			url: getAppURL('sales/bulk_transaction_fields_update_in_sale'),
			success: function (data) {
				setTimeout(() => $('#bulk_modal').modal('hide'), 1000);
				location.reload();
			}
		});
	});
});

function generateTableHead(table, data) {
	let thead = table.createTHead();
	let row = thead.insertRow();
	for (let key of data) {
		let th = document.createElement("th");
		let text = document.createTextNode(key);
		th.appendChild(text);
		row.appendChild(th);
	}
}

function generateTable(table, data) {
	for (let element of data) {
		let row = table.insertRow();
		for (key in element) {
			let cell = row.insertCell();
			let text = document.createTextNode(element[key]);
			cell.appendChild(text);
		}
	}
}

function change_date_format(date) {
	var datearray = date.split("-");
	var new_date_format = datearray[2] + "-" + datearray[1] + "-" + datearray[0];
	return new_date_format;
}