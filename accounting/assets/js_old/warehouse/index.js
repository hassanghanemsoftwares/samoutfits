jQuery(document).ready(function () {
    window.warehousesDT = null;
    let dtActionsHTML = '<a href="' + getAppURL('warehouses/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;"  class="glyphicon glyphicon-pencil"></i></a>' +
            '<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('warehouses/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
            '<i class="glyphicon glyphicon-trash text-danger"></i></a>';
    /***************************************************/
    var $dtTbl = $('#warehousesTbl');
    EnhanceDataTableSearch(window.warehousesDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {url: getAppURL('warehouses/index'), type: 'GET', searchDelay: _GST},
        columns: [{data: 'warehouse'}, {data: 'shelf'}, {data: 'id'}],
        columnDefs: [
            {targets: 2, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
        ]

    }), 2048);

});