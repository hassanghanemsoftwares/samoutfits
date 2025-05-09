jQuery(document).ready(function () {
    window.fiscal_yearsDT = null;
    let dtActionsHTML = '<a href="' + getAppURL('fiscal_years/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;"  class="glyphicon glyphicon-pencil"></i></a>' +
            '<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('fiscal_years/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
            '<i class="glyphicon glyphicon-trash text-danger"></i></a>';
    /***************************************************/
    var $dtTbl = $('#fiscal_yearsTbl');
    EnhanceDataTableSearch(window.fiscal_yearsDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {url: getAppURL('fiscal_years/index'), type: 'GET', searchDelay: _GST},
        columns: [{data: 'year_name'}, {data: 'start_date'}, {data: 'end_date'}, {data: 'id'}],
        columnDefs: [
            {targets: 3, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
        ]

    }), 2048);

});