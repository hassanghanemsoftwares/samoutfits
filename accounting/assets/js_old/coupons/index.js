jQuery(document).ready(function () {
    window.couponsDT = null;
    let dtActionsHTML =
        '<a href="' + getAppURL('ecommerce/edit_coupon/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>'
        + '<button type="button" class="btn bt-link btn-xs i-adjust" style="background-color: #333;" onclick="openActivationModal(%d, \'%c\')">' +
        '<i class="glyphicon glyphicon-off text-yellow" title="Activate/Deactivate"></i>';
    /***************************************************/
    var $dtTbl = $('#couponsTbl');
    BuildDataTableColumnSearch($dtTbl, 'couponsDT');
    var table = $dtTbl.DataTable({
        fixedHeader: true, orderCellsTop: true, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "400px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: { url: getAppURL('ecommerce/coupons'), type: 'GET', searchDelay: _GST },
        columns: [{ data: 'coupon' }, { data: 'customer_name' }, { data: 'expiry_date' }, { data: 'limitation' }, { data: 'usage_times' },
        { data: 'final_amount' }, { data: 'active' }, { data: 'id' }],
        columnDefs: [
            {
                targets: 7, orderable: false, createdCell: (td, Id, row) =>
                    $(td).addClass('text-right').html(
                        dtActionsHTML.replace(/%d/g, parseInt(Id))
                            .replace(/%c/g, row.coupon)
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
            $('#couponsTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            data.colsFilter = temp;
            console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#couponsTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    })
    EnhanceDataTableSearch(window.couponsDT = table, 2048);
    $('#reset_filters').on('click', function (e) {
        $('#couponsTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        var table = $('#couponsTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });

    $('#activation_modal_btn').on('click', function (e) {
        // console.log($('#modal_coupon_id').val(), $('#activation_dropdown').val())
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'coupon_id': $('#modal_coupon_id').val(),
                'deactivate': $('#activation_dropdown').val(),
            },
            url: getAppURL('ecommerce/update_coupon_deactivate_field'),
            success: function (data) {
                $('#activation_modal').modal('hide');
                if(data == '1'){
                    alert('Coupon Updated Successfully');
                }else{
                    alert('Something Went Wrong!');
                }
            }
        });
    });
});

function openActivationModal($coupon_id, $coupon) {
    $('#modal_coupon_id').val($coupon_id);
    $('#modal_coupon_name').text($coupon);
    $('#activation_modal').modal('show');
}