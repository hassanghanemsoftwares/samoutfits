jQuery(document).ready(function () {
    $('.remove_item').on('click', function (e) {
        var item_id = $(this).closest('.remove_div').find('.item_id').val();
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'item_id': item_id,
            },
            url: getAppURL('accounts/remove_item_from_viewed_items'),
            success: function (data) {
                // console.log(data);
                if (data === '1') {
                    window.location.href = getAppURL('accounts/viewed_items');
                } else {
                    $('#vi_modal').modal('show');
                }
            }
        });
    });
});