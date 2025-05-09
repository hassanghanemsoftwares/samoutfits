jQuery(document).ready(function ($) {
    autoCompleteAccount($('#account_nb'), $('#account_id'));
});

function autoCompleteAccount($acctLkup, $accountId, onResultSelection) {
    $acctLkup.autocomplete({
        serviceUrl: getAppURL('accounts/lookup_seatch_accounts'), appendTo: $acctLkup.parent()[0],
        noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
        noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
        onSearchStart: function (params) {
        }, onSelect: function (result) {
            // onResultSelection(result.row, $accountId);
            $('#account_id').val(result.row.id)
        }, transformResult: function (response) {
            return {
                suggestions: jQuery.map(response, function (account) {
                    return { value: account.suggestion, row: account };
                })
            };
        }
    });
}