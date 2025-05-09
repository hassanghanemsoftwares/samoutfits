jQuery(document).ready(function ($) {
    autoCompleteAccount();
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
        if (id == 'subject') {
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
    if ($('#message').val().trim() == "") {
        document.getElementById('error_message').innerHTML = "*This Field Required*";
        document.getElementById('error_message').className = "alert alert-danger";
        document.getElementById('error_message').style.display = "block";
        count++;
    } else {
        document.getElementById('error_message').style.display = "none";
    }
    // return false;
    if (count > 0) {
        return false;
    } else {
        return true;
    }
}