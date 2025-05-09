jQuery(document).ready(function () {
    window.ecoordersDT = null;
    let dtActionsHTML =
        '<button type="button" class="btn bt-link btn-xs i-adjust" style="background-color: #333;" onclick="openStatusModal(%d, \'%a\', \'%t\', \'%s\')">' +
        '<i class="glyphicon glyphicon-edit text-yellow" title="Adjust"></i>' +
        '</button>';
    /***************************************************/
    var $dtTbl = $('#ecoordersTbl');
    BuildDataTableColumnSearch($dtTbl, 'ecoordersDT');
    var table = $dtTbl.DataTable({
        fixedHeader: true, orderCellsTop: true, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "400px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: { url: getAppURL('ecommerce/orders'), type: 'GET', searchDelay: _GST },
        columns: [{ data: 'auto_no' }, { data: 'tracking_nb' }, { data: 'customer_name' }, { data: 'order_date' }, { data: 'description' },
        { data: 'total_qty' }, { data: 'percent_disc' }, { data: 'total' }, { data: 'status' }, { data: 'id' }],
        columnDefs: [
            {
                targets: 9, orderable: false, createdCell: (td, Id, row) => $(td).addClass('text-right').html(
                    dtActionsHTML.replace(/%d/g, parseInt(Id))
                        .replace(/%a/g, row.auto_no)
                        .replace(/%t/g, row.tracking_nb)
                        .replace(/%s/g, row.status)
                )
            }
        ],
        stateSave: true,
        stateSaveCallback: function (settings, data) {
            localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data))
        },
        stateLoadCallback: function (settings) {
            return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance))
        },
        "stateSaveParams": function (settings, data) {
            var temp = {};
            $('#ecoordersTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            data.colsFilter = temp;
            // console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#ecoordersTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    })
    EnhanceDataTableSearch(window.ecoordersDT = table, 2048);
    $('#reset_filters').on('click', function (e) {
        $('#ecoordersTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        var table = $('#ecoordersTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });
    inputToDatepickerA($('#dispatch_date'));
});

function openStatusModal(order_id, auto_no, tracking_nb, status) {
    // $('#order_items_table').find('tbody').empty();
    $.ajax({
        cache: false,
        type: 'POST',
        data: { 'order_id': order_id },
        url: getAppURL('ecommerce/get_order_data_and_items'),
        success: function (result) {
            $('#waybil_preview').attr("href", 'ecommerce/preview_order_private_waybil/' + order_id);
            for (let i = 0; i < 7; i++) {
                $('#order_address' + i).text('');
            }
            for (let i = 0; i < result['order_data']['address_details'].length; i++) {
                $('#order_address' + i).text(result['order_data']['address_details'][i]);
            }
            $('#order_items_table_body').empty();
            for (let i = 0; i < result['items'].length; i++) {
                let row = "<tr><td>" + result['items'][i]['barcode']
                    + "</td><td>" + result['items'][i]['size']
                    + "</td><td>" + result['items'][i]['qty']
                    + "</td></tr>";
                $('#order_items_table_body').append(row);
            }
            console.log(result['items'])
            $('#modal_order_id').val(order_id);
            $('#modal_old_status').val(status);
            $('#modal_order_data').text("Order# " + auto_no + " - Tracking# " + tracking_nb);
            $('#statusModalForm').modal('show');
        }
    });
}

function orderValidate() {
    var count = 0;
    if ($('#dispatch_date').val() != '') {
        var date = change_date_format($('#dispatch_date').val());
        if (isNaN(date.getDate())) {
            document.getElementById('error_dispatch_date').innerHTML = "*Please enter a valide date*";
            document.getElementById('error_dispatch_date').className = "alert alert-danger";
            count++;
        }
    }
    if (count == 0) {
        if (confirm("Are You Sure?")) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function change_date_format(date) {
    var datearray = date.split("-");
    var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2]
    var date_new = new Date(new_date_format);
    return date_new;
}