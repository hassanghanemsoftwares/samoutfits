jQuery(document).ready(function () {
    window.usersDT = null;
    let dtActionsHTML = '<a href="' + getAppURL('users/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;"  class="glyphicon glyphicon-pencil"></i></a>' +
            '<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('users/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
            '<i class="glyphicon glyphicon-trash text-danger"></i></a>';
    /***************************************************/
    var $dtTbl = $('#usersTbl');
    EnhanceDataTableSearch(window.usersDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {url: getAppURL('users/index'), type: 'GET', searchDelay: _GST},
        columns: [{data: 'user_name'}, {data: 'user_email'}, {data: 'user_type'}, {data: 'year_name'}, {data: 'id'}],
        columnDefs: [
            {targets: 4, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
        ]

    }), 2048);

});