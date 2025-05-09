jQuery(document).ready(function () {
    inputToDatepickerA($('#cash_date'));
    $('#bgsave').on('click', function (e) {
        if ($("table > tbody > tr").length != 0) {
            var tot = 0;
            var diff;
            $("table > tbody > tr").each(function () {
                diff = $(this).find('td').eq(4).text();
                if (diff != '') {
                    tot = tot + parseFloat(diff);
                }
            });
            if (tot != 0) {
                alert("Please, Check and Edit your Excel sheet before submit because it still have errors.");
            } else {
                if (validation() == true) {
                    var auto_nbs = [];
                    var amounts = [];
                    var count = 0;
                    $("table > tbody > tr").each(function () {
                        auto_nbs[count] = $(this).find('td').eq(0).text();
                        amounts[count] = $(this).find('td').eq(2).text();
                        count++;
                    });
                    $.ajax({
                        cache: false,
                        type: 'POST',
                        data: {
                            'auto_nbs': auto_nbs, 'amounts': amounts, 'status2': $('#status').val(), 'cash_date': $('#cash_date').val()
                        },
                        url: getAppURL('sales/bulk_receipts_for_invoices'),
                        success: function (data) {
                            alert("successfully completed");
                        }
                    });
                }
            }
        }
    });
});

function ExportToExcel(type, fn, dl) {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = dd + '-' + mm + '-' + yyyy;
    $('#pickupTbl thead tr:eq(1)').hide();
    var elt = document.getElementById('cashTbl');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: false, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('receive_cash_'.concat(today).concat(".") + (type || 'xlsx')));
}

function validation() {
    var count = 0;
    var date1 = change_date_format($('#cash_date').val());
    if ($('#cash_date').val() == "" || isNaN(date1.getDate())) {
        document.getElementById('error_cash_date').style.display = "block";
        document.getElementById('error_cash_date').innerHTML = "*Please enter a valide date*";
        document.getElementById('error_cash_date').className = "alert alert-danger";
        count++;
    } else {
        document.getElementById('error_cash_date').style.display = "none";
    }
    if ($('#status').val() == "0") {
        document.getElementById('error_status').style.display = "block";
        document.getElementById('error_status').innerHTML = "*Please select a status*";
        document.getElementById('error_status').className = "alert alert-danger";
        count++;
    } else {
        document.getElementById('error_status').style.display = "none";
    }
    if (count > 0) {
        return false;
    } else {
        return true;
    }
}

function change_date_format(date) {
    var datearray = date.split("-");
    var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2]
    var date_new = new Date(new_date_format);
    return date_new;
}