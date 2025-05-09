jQuery(document).ready(function () {
    window.sentMessagesDT = null;
    let dtActionsHTML =
    '<a href="' + getAppURL('ecommerce/edit_message/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>'+
    '<a href="' + getAppURL('ecommerce/delete_message/') + '%d" class="btn bt-link btn-xs" title="Delete"><i style="color:red;" class="glyphicon glyphicon-trash"></i></a>';
    /***************************************************/
    var $dtTbl = $('#sentMessagesTbl');
    BuildDataTableColumnSearch($dtTbl, 'sentMessagesDT');
    var table = $dtTbl.DataTable({
        fixedHeader: true, orderCellsTop: true, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "400px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: { url: getAppURL('ecommerce/sent_messages'), type: 'GET', searchDelay: _GST },
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
            $('#sentMessagesTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            data.colsFilter = temp;
            console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#sentMessagesTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    })
    EnhanceDataTableSearch(window.sentMessagesDT = table, 2048);
    $('#reset_filters').on('click', function (e) {
        $('#sentMessagesTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        var table = $('#sentMessagesTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });
});