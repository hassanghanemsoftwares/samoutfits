jQuery(document).ready(function () {
    window.ecousersDT = null;
    let dtActionsHTML = '<a href="javascript:void(0);" onclick="resetPass(%d)" class="btn bt-link btn-xs" title="Reset Password" >' +
    '<i style="color:#ffdf59;" class="glyphicon glyphicon-refresh"></i></a>';
    /***************************************************/
    var $dtTbl = $('#ecousersTbl');
    BuildDataTableColumnSearch($dtTbl, 'ecousersDT');
    EnhanceDataTableSearch(window.ecousersDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: {headerOffset: 0}, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {url: getAppURL('ecommerce/users'), type: 'GET', searchDelay: _GST},
        columns: [{data: 'eco_user_name'}, {data: 'account_number'}, {data: 'birthdate'}, {data: 'phone'}, {data: 'id'}],
        columnDefs: [
            {targets: 4, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId)))}
        ]

    }), 2048);

});

function resetPass(customer_id){
    if (confirm("Msg Confirm Rest Pass #1: Are You Sure?")) {
        if (confirm("Msg Confirm Rest Pass #2: Are You Sure?")) {
            $.ajax({
                cache: false,
                type: 'POST',
                data: { 'customer_id': customer_id },
                url: getAppURL('ecommerce/reset_ecommerce_user_password'),
                success: function (data) {
                    if(data == '1'){                      
                        $('#reset_msg').text("User Password Reset Successfully");
                        $('#new_pass_reset').text("New Password: Sam20Outfit22");
                        $('#resetPassModal').modal('show');
                    }else{
                        $('#reset_msg').text("Sorry, Something Went Wrong!");
                        $('#new_pass_reset').text("");
                        $('#resetPassModal').modal('show');
                    }
                }
            });
        }  
    }
}