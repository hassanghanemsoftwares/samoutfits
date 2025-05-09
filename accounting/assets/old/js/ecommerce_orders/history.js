jQuery(document).ready(function () {
    window.ecoOrdersHistroyDT = null;
    let dtActionsHTML = '';
        // '<button type="button" class="btn bt-link btn-xs i-adjust" style="background-color: #333;" onclick="openStatusModal(%d, \'%a\', \'%t\', \'%s\')">' +
        // '<i class="glyphicon glyphicon-edit text-yellow" title="Adjust"></i>' +
        // '</button>';
    /***************************************************/
    var $dtTbl = $('#ecoOrdersHistroyTbl');
    BuildDataTableColumnSearch($dtTbl, 'ecoOrdersHistroyDT');
    var table = $dtTbl.DataTable({
        fixedHeader: true, orderCellsTop: true, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "400px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: { url: getAppURL('ecommerce/orders_history'), type: 'GET', searchDelay: _GST },
        columns: [{ data: 'auto_no' }, { data: 'tracking_nb' }, { data: 'customer_name' }, { data: 'order_date' }, { data: 'description' },
        { data: 'total_qty' }, { data: 'total' }, { data: 'status' }, { data: 'id' }],
        columnDefs: [
            {
                targets: 8, orderable: false, createdCell: (td, Id, row) => $(td).addClass('text-right').html(
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
            $('#ecoOrdersHistroyTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            data.colsFilter = temp;
            // console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#ecoOrdersHistroyTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    })
    EnhanceDataTableSearch(window.ecoOrdersHistroyDT = table, 2048);
    $('#reset_filters').on('click', function (e) {
        $('#ecoOrdersHistroyTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        var table = $('#ecoOrdersHistroyTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });
});