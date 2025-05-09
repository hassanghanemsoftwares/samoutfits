let $accountForm;
jQuery(document).ready(function ($) {
    inputToDatepickerA($('#expiry_date'));
    autoCompleteAccount();
    if($('#limited').val() == 0){
        $('#usage_times').attr('readonly', true)
    }
    $('#limited').on('change', function(e){
        if($(this).val() == 0){
            $('#usage_times').val(0);   
            $('#usage_times').attr('readonly', true)      
        }else{
            $('#usage_times').attr('readonly', false) 
        }
    });
});

function autoCompleteAccount() {
    let $acctLkup = $('#customer');
    $acctLkup.autocomplete({
        serviceUrl: getAppURL('ecommerce/lookup_customer_users'), appendTo: $acctLkup.parent()[0],
        noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
        noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
        onSearchStart: function (params) {
        }, onSelect: function (result) {
            $('#customer_id').val(result.row.user_id);
        }, transformResult: function (response) {
            return {
                suggestions: jQuery.map(response, function (account) {
                    return { value: account.description, row: account };
                })
            };
        }
    });
}

function validation() {
    var count = 0;
    $('#form_div input').each(function (e) {
        var id = $(this).attr('id');
        if (id !== 'customer' && id !== 'bgsave' && id !== 'customer_id') {
            if ($(this).val().trim() == "") {
                document.getElementById('error_' + id).innerHTML = "*This Field Required*";
                document.getElementById('error_' + id).className = "alert alert-danger";
                document.getElementById('error_' + id).style.display = "block";
                count++;

            } else {
                document.getElementById('error_' + id).style.display = "none";
            }
        }
    });
    var date1 = change_date_format($('#expiry_date').val());
    if (isNaN(date1.getDate())) {
        document.getElementById('error_expiry_date').innerHTML = "*Please enter a valide date*";
        document.getElementById('error_expiry_date').className = "alert alert-danger";
        document.getElementById('error_expiry_date').style.display = "block";
        count++;
    } else {
        document.getElementById('error_expiry_date').style.display = "none";
    }
    if ($('#coupon').val().trim() !== "") {
        if (window.location.href == getAppURL('ecommerce/add_coupon')) {
            $.ajax({
                cache: false,
                async: false,
                type: 'POST',
                data: { 'coupon': $('#coupon').val() },
                url: getAppURL('Ecommerce/check_if_coupon_exists'),
                success: function (data) {
                    if (data['count'] !== '0') {
                        document.getElementById('error_coupon').innerHTML = "*Coupon code already exists, It must be Unique!*";
                        document.getElementById('error_coupon').className = "alert alert-danger";
                        document.getElementById('error_coupon').style.display = "block";
                        count++;
                    } else {
                        document.getElementById('error_coupon').style.display = "none";
                    }
                }
            });
        } else {
            if ($('#coupon').val() !== $('#old_coupon').val()) {
                $.ajax({
                    cache: false,
                    async: false,
                    type: 'POST',
                    data: { 'coupon': $('#coupon').val() },
                    url: getAppURL('Ecommerce/check_if_coupon_exists'),
                    success: function (data) {
                        if (data['count'] !== '0') {
                            document.getElementById('error_coupon').innerHTML = "*Coupon code already exists, It must be Unique!*";
                            document.getElementById('error_coupon').className = "alert alert-danger";
                            document.getElementById('error_coupon').style.display = "block";
                            count++;
                        } else {
                            document.getElementById('error_coupon').style.display = "none";
                        }
                    }
                });
            }
        }
    }
    // return false;
    if (count > 0) {
        return false;
    } else {
        return true;
    }
}
function change_date_format(date) {
    var datearray = date.split("-");
    var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2]
    var date_new = new Date(new_date_format);
    return date_new;
}