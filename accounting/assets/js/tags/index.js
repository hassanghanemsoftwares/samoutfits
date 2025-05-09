jQuery(document).ready(function () {
    window.tagsDT = null;
    let dtActionsHTML =
        '<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('tags/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
        '<i class="glyphicon glyphicon-trash text-danger"></i></a>';
    /***************************************************/
    var $dtTbl = $('#tagsTbl');
    EnhanceDataTableSearch(window.tagsDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: { url: getAppURL('tags/index'), type: 'GET', searchDelay: _GST },
        columns: [{ data: 'tag' }, { data: 'id' }],
        columnDefs: [
            { targets: 1, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) },
        ]
    }), 2048);
    $('#bgadd').on('click', function(){
        $('#modal_add_tag').modal('show');
    })
});

function validation(){
    if($('#tag').val() == ''){
        document.getElementById('error_tag').innerHTML = "*This Field is Required*";
		document.getElementById('error_tag').className = "alert alert-danger";
        return false;
    }else{
        return true;
    }
}