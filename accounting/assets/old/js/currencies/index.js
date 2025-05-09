jQuery(document).ready(function () {
    window.currenciesDT = null;
    let dtActionsHTML = '<a href="' + getAppURL('currencies/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;"  class="glyphicon glyphicon-pencil"></i></a>' +
            '<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('currencies/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
            '<i class="glyphicon glyphicon-trash text-danger"></i></a>';
    /***************************************************/
    var $dtTbl = $('#currenciesTbl');
    EnhanceDataTableSearch(window.currenciesDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {url: getAppURL('currencies/index'), type: 'GET', searchDelay: _GST},
        columns: [{data: 'currency_name'}, {data: 'currency_code'}, {data: 'currency_rate'},{data: 'id'}],
        columnDefs: [
            {targets: 3, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
        ]

    }), 2048);

});