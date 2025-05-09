jQuery(document).ready(function () {
    $('.action_remove').on('click', function (e) {
        let row = $(this).closest("tr");
        let item_id = row.find('input.action_id').val();
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'item_id': item_id
            },
            url: getAppURL('accounts/delete_item_from_customer_wishlist'),
            success: function (data) {
                if (data === '1') {
                    row.remove();
                    $.ajax({
                        cache: false,
                        type: 'POST',
                        url: getAppURL('accounts/get_user_wishlist_count'),
                        success: function (data) {
                            $('#WishlistCountNavPhone').text(data);
                            $('#WishlistCountNav').text(data);
                        }
                    });
                }
            }
        });
    });
    $('.action_add_cart').on('click', function (e) {
        let item_id = $(this).closest("tr").find('input.action_id').val();
        window.location.href = getAppURL('products/view/'.concat(item_id));
    });
    $('#wishlist_table').DataTable({
        "pagingType": "full_numbers"
    });
});