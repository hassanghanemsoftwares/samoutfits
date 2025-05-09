jQuery(document).ready(function () {
    window.inboxDT = null;
    let dtActionsHTML = '';
    '<a href="' + getAppURL('ecommerce/edit_coupon/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>';
    /***************************************************/
    var $dtTbl = $('#inboxTbl');
    BuildDataTableColumnSearch($dtTbl, 'inboxDT');
    var table = $dtTbl.DataTable({
        fixedHeader: true, orderCellsTop: true, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "400px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: { url: getAppURL('ecommerce/inbox'), type: 'GET', searchDelay: _GST },
        columns: [{ data: 'customer' }, { data: 'subject' }, { data: 'message' }, { data: 'date' }, { data: 'id' }],
        columnDefs: [
            {
                targets: 4, orderable: false, createdCell: (td, Id, row) => $(td).addClass('text-right').html(
                    dtActionsHTML.replace(/%d/g, parseInt(Id))
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
            $('#inboxTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            data.colsFilter = temp;
            console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#inboxTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    })
    EnhanceDataTableSearch(window.inboxDT = table, 2048);
    $('#reset_filters').on('click', function (e) {
        $('#inboxTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        var table = $('#inboxTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });
});