jQuery(document).ready(function () {
    window.wakilniDT = null;
    /***************************************************/
    var $dtTbl = $('#wakilniTbl');
    BuildDataTableColumnSearch($dtTbl, 'wakilniDT');
    EnhanceDataTableSearch(window.wakilniDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {
            url: getAppURL('reports/wakilni_data'), type: 'GET', searchDelay: _GST,
            data: function (params) {
                let formData = jQuery('#dtAdvFltrs').serializeArray();
                for (i in formData) {
                    params[formData[i].name] = formData[i].value;
                }
            },
        },
        columns: [{ data: 'account_name' }, { data: 'email' }, { data: 'phone' },
        { data: 'city' }, { data: 'floor' }, { data: 'building' }, { data: 'direction' },
        { data: 'total' }, { data: 'currency_code' }, { data: 'method' }, { data: 'package_type' }, { data: 'package_qty' },
        { data: 'auto_no' }, { data: 'delivery_note' }, { data: 'try_on' }, { data: 'exchange' },
        ]
    }), 2048);

    inputToDatepickerA($('#date'));

    $('#print').on('click', function (e) {
        var rows = [];
        var count = 0;
        $("table > tbody > tr").each(function () {
            rows[count] =
            {
                'account_name': $(this).find('td').eq(0).text(),
                'email': $(this).find('td').eq(1).text(),
                'phone': $(this).find('td').eq(2).text(),
                'city': $(this).find('td').eq(3).text(),
                'floor': $(this).find('td').eq(4).text(),
                'building': $(this).find('td').eq(5).text(),
                'direction': $(this).find('td').eq(6).text(),
                'total': $(this).find('td').eq(7).text(),
                'currency_code': $(this).find('td').eq(8).text(),
                'method': $(this).find('td').eq(9).text(),
                'package_type': $(this).find('td').eq(10).text(),
                'package_qty': $(this).find('td').eq(11).text(),
                'auto_no': $(this).find('td').eq(12).text(),
                'delivery_note': $(this).find('td').eq(13).text(),
                'try_on': $(this).find('td').eq(14).text(),
                'exchange': $(this).find('td').eq(15).text(),
            };
            count++;
        });

        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'rows': rows },
            url: getAppURL('reports/print_wakilni_report'),
            success: function (data) {
                var mywindow = window.open('', '_blank', '');
                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                mywindow.document.write('</head><body>');
                mywindow.document.write(data);
                mywindow.document.write('</body></html>');
            }
        });
    });
    jQuery('#dtAdvFltrs').attr('onsubmit', '').on('submit', triggerDTFiltersSearch);
});
function triggerDTFiltersSearch(e) {
    window.wakilniDT.ajax.reload();
    e.preventDefault();
    e.stopPropagation();
    return false;
}
function ExportToExcel(type, fn, dl) {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = dd + '-' + mm + '-' + yyyy;
    $('#wakilniTbl thead tr:eq(1)').hide();
    var elt = document.getElementById('wakilniTbl');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1", raw: true });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: false, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('wakilni_report_'.concat(today).concat(".") + (type || 'xlsx')));
}

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
