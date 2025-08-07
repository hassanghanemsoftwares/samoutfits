jQuery(document).ready(function ($) {

  autoCompleteTransactionSearch($(".transaction_nb_search"));
});


function autoCompleteTransactionSearch($acctLkup) {
  $acctLkup.autocomplete({
    serviceUrl: getAppURL("sales/lookup_seatch_transactions"),
    appendTo: $(this).parent()[0],
    noCache: true,
    showNoSuggestionNotice: true,
    triggerSelectOnValidInput: false,
    minChars: 2,
    autoSelectFirst: true,
    preventBadQueries: false,
    noSuggestionNotice: "Sorry, no matching results",
    type: "GET",
    dataType: "JSON",
    deferRequestBy: 480,
    onSearchStart: function (params) {},
    onSelect: function (result) {
      console.log(result.row);
       window.location.href = "reports/accounts_history/?account_id=" + result.row.account_id;
    },
    transformResult: function (response) {
      return {
        suggestions: jQuery.map(response, function (transaction) {
          return {
            value: transaction.suggestion,
            row: transaction,
          };
        }),
      };
    },
  });
}