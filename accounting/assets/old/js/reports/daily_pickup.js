jQuery(document).ready(function () {
	window.pickupDT = null;
	/***************************************************/
	var $dtTbl = $('#pickupTbl');
	BuildDataTableColumnSearch($dtTbl, 'pickupDT');
	EnhanceDataTableSearch(window.pickupDT = $dtTbl.DataTable({
		orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { 
            url: getAppURL('reports/daily_pickup'), type: 'GET', searchDelay: _GST,
            data: function (params) {
				let formData = jQuery('#dtAdvFltrs').serializeArray();
				for (i in formData) {
					params[formData[i].name] = formData[i].value;
				}
			}, 
        },
		columns: [{ data: 'auto_no' }, { data: 'account_name' }, { data: 'value_date' }, { data: 'total' },
		{ data: 'currency_code' }, { data: 'city' }, { data: 'phone' }, { data: 'delivery_note' }
		]
	}), 2048);

	$('#print').on('click', function (e) {
        var rows = [];
        var count = 0;
        $("table > tbody > tr").each(function () {
            rows[count] =
            {
                'auto_no': $(this).find('td').eq(0).text(),
                'account_name': $(this).find('td').eq(1).text(),
                'value_date': $(this).find('td').eq(2).text(),
                'total': $(this).find('td').eq(3).text(),
                'currency_code': $(this).find('td').eq(4).text(),
                'city': $(this).find('td').eq(5).text(),
                'phone': $(this).find('td').eq(6).text(),
                'delivery_note': $(this).find('td').eq(7).text()
            };
            count++;
        });

        $.ajax({
            cache: false,
            type: 'POST',
            data: {'rows': rows},
            url: getAppURL('reports/print_daily_pickup_report'),
            success: function (data) {
                const mywindow = window.open('', '_blank', '');
                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                mywindow.document.write('</head><body>');
                mywindow.document.write(data);
                mywindow.document.write('</body></html>');
            }
        });
    });
    inputToDatepickerA($('#date'));
    jQuery('#dtAdvFltrs').attr('onsubmit', '').on('submit', triggerDTFiltersSearch);
});
function triggerDTFiltersSearch(e) {
	window.pickupDT.ajax.reload();
	e.preventDefault();
	e.stopPropagation();
	return false;
}
function ExportToExcel(type, fn, dl) {
	var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = dd + '-' + mm + '-' + yyyy;
    $('#pickupTbl thead tr:eq(1)').hide();
	var elt = document.getElementById('pickupTbl');
	var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
	return dl ?
		XLSX.write(wb, { bookType: type, bookSST: false, type: 'base64' }) :
		XLSX.writeFile(wb, fn || ('pickup_report_'.concat(today).concat(".") + (type || 'xlsx')));
}