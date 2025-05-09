jQuery(document).ready(function ($) {
    autoCompleteAccount($('#account_nb'), $('#account_id'), accountSelected);
});

function autoCompleteAccount($acctLkup, $accountId, onResultSelection) {
    $acctLkup.autocomplete({
        serviceUrl: getAppURL('accounts/lookup_seatch_accounts'), appendTo: $acctLkup.parent()[0],
        noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
        noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
        onSearchStart: function (params) {
        }, onSelect: function (result) {
            onResultSelection(result.row, $accountId);
        }, transformResult: function (response) {
            return {
                suggestions: jQuery.map(response, function (account) {
                    return { value: account.suggestion, row: account };
                })
            };
        }
    });
}

function accountSelected(account, $accountId) {
    $accountId.val(account.id);
    var rows = [];
    $.ajax({
        cache: false,
        type: 'POST',
        async: true,
        data: {
            'currency_id': account.currency_id
        },
        url: getAppURL('Accounts/get_account_currency_code'),
        success: function (res) {
            rows[0] = {
                "Account Nb": account.account_number,
                "Account Name": account.account_name,
                "Currency": res,
                "Mobile 1": account.phone,
                "Mobile 2": account.phone2,
                "Email": account.email,
                "Country": account.country,
                "City": account.city,
                "Place": account.place,
                "Street": account.street,
                "Building": account.building,
                "floor": account.floor,
                "Direction": account.description,
            };
            let table = document.getElementById("acc_table");
            table.deleteTHead();
            for (var i = 1; i < table.rows.length;) {
                table.deleteRow(i);
            }
            let data = Object.keys(rows[0]);
            generateTableHead(table, data);
            generateTable(table, rows);
            $("#acc_table thead").addClass('');
        }
    });

}

function generateTableHead(table, data) {
    let thead = table.createTHead();
    let row = thead.insertRow();
    for (let key of data) {
        let th = document.createElement("th");
        let text = document.createTextNode(key);
        th.appendChild(text);
        row.appendChild(th);
    }
}

function generateTable(table, data) {
    for (let element of data) {
        let row = table.insertRow();
        for (key in element) {
            let cell = row.insertCell();
            let text = document.createTextNode(element[key]);
            cell.appendChild(text);
        }
    }
}