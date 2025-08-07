let $transactionForm, $itemLookup, $transactionLines;
jQuery(document).ready(function ($) {
  $transactionForm = $("form#transactionForm");
  $transactionLines = $("tbody#transactionLines", $transactionForm);
  $itemLookup = $("#itemLookup", $transactionForm);
  inputToDatepickerA(
    $("#trans_date, #value_date, #journal_date", $transactionForm)
  );
  let $acctLkupFrom = $("#acctLkupFrom", $transactionForm),
    $acctLkupTo = $("#acctLkupTo", $transactionForm),
    $accountId = $("#account_id", $transactionForm),
    $account2Id = $("#account2_id", $transactionForm);
  autoCompleteAccount($acctLkupTo, $accountId, accountSelected);
  autoCompleteItem();
  bindLinesEvents();
  getcurrencyrate();
  $("#sub_total").val("0");
  if ($("#disc").val() == "") {
    $("#disc").val("0");
  }
  $("#final_total").val("0");
  calculateSubtotalAndTotal($("#disc"));
  $("#currency_id_list").prop("disabled", true).trigger("chosen:updated");
  if (window.location.href == getAppURL("return_sales/add")) {
    document.getElementById("print").style.visibility = "hidden";
  } else {
    $.ajax({
      cache: false,
      type: "POST",
      data: { whatselected: $("#currency_id").val() },
      url: getAppURL("currencies/get_currency_rate"),
      success: function (data) {
        var result = data.split("-");
        var cur_read = result[1];
        if (cur_read == "readonly") {
          document
            .getElementById("currency_rate")
            .setAttribute("readonly", true);
        } else {
          document.getElementById("currency_rate").removeAttribute("readonly");
        }
      },
    });
  }
  $("#bgback").click(function (e) {
    e.preventDefault();
    window.location.href = document.referrer;
  });
});

function accountSelected(account, $accountId) {
  $accountId.val(account.id);
}

function autoCompleteAccount($acctLkup, $accountId, onResultSelection) {
  $acctLkup.autocomplete({
    serviceUrl: getAppURL("sales/lookup_customers_accounts"),
    appendTo: $acctLkup.parent()[0],
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
      onResultSelection(result.row, $accountId);
      let $acctLkupFrom = $("#acctLkupFrom", $transactionForm);
      let $account2Id = $("#account2_id", $transactionForm);
      var id = $("#account_id").val();
      $.ajax({
        cache: false,
        type: "POST",
        data: { whatselected: id },
        url: getAppURL("purchases/get_account_currency"),
        success: function (data) {
          $("#currency_id_list").val(data);
          $("#currency_id").val(data);
          $.ajax({
            cache: false,
            type: "POST",
            data: { whatselected: data },
            url: getAppURL("sales/get_sales_account_with_the_same_currency"),
            success: function (data) {
              $("#acctLkupFrom").val(
                JSON.stringify(data["description"]).replace(/"/g, "")
              );
              $("#account2_id").val(
                JSON.stringify(data["id"]).replace(/"/g, "")
              );
            },
          });
          // autoCompleteSalesAccount($acctLkupFrom, $account2Id, accountSelected, data);
          $.ajax({
            cache: false,
            type: "POST",
            data: { whatselected: data },
            url: getAppURL("currencies/get_currency_rate"),
            success: function (data) {
              var result = data.split("-");
              var cur_rate = result[0];
              var cur_read = result[1];
              $("#currency_id_list")
                .prop("disabled", true)
                .trigger("chosen:updated");
              $("#currency_rate").val(cur_rate);
              if (cur_read == "readonly") {
                document
                  .getElementById("currency_rate")
                  .setAttribute("readonly", true);
              } else {
                document
                  .getElementById("currency_rate")
                  .removeAttribute("readonly");
              }
            },
          });
        },
      });
    },
    transformResult: function (response) {
      return {
        suggestions: jQuery.map(response, function (account) {
          return { value: account.description, row: account };
        }),
      };
    },
  });
}

function autoCompleteItem() {
  $itemLookup
    .on("keydown", function (e) {
      if (e.keyCode == 13) {
        // do not submit form on press of return key
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        return false;
      }
    })
    .autocomplete({
      serviceUrl: getAppURL("purchases/lookup_items"),
      appendTo: $itemLookup.parent()[0],
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
        addLineToTransaction(result.row, true);
      },
      transformResult: function (response) {
        return {
          suggestions: jQuery.map(response, function (item) {
            return { value: item.suggestion, row: item };
          }),
        };
      },
    });
}

function addLineToTransaction(item, newLine) {
  $itemLookup.val("");
  let $lastTr = jQuery("tr:last", $transactionLines);
  let idx = 1 + parseInt($lastTr.length > 0 ? $lastTr.attr("data-index") : -1);
  $transactionLines.append(ItemLineTpl.replace(/%d/g, String(idx)));
  if (newLine) {
    var $tr = jQuery("tr#item-" + idx, $transactionLines);
    jQuery("input.i-item_id", $tr).val(item.id);
    jQuery("td.i-description", $tr).text(item.description);
    jQuery("td.i-barcode", $tr).text(item.barcode);
    jQuery("input.i-qty", $tr).val("1").focus();
    var price =
      parseFloat(item.price_ttc) * parseFloat($("#currency_rate").val());
    jQuery("input.i-price", $tr).val(price.toFixed(2));
    jQuery("input.i-discount", $tr).val("0");
    jQuery("td.i-total", $tr).text(jQuery("input.i-price", $tr).val());
    jQuery("select.i-shelf", $tr)
      .append(`<option value="1">1</option>`)
      .val("1");
    jQuery("select.i-warehouse", $tr)
      .prop("selectedIndex", 1)
      .trigger("change");
    var getselected = jQuery("select.i-warehouse", $tr)
      .children("option:selected")
      .text();
    console.log(getselected);
    $.ajax({
      cache: false,
      type: "POST",
      data: { whatselected: getselected },
      url: getAppURL("purchases/get_warehouse_shelfs"),
      success: function (data) {
        jQuery("select.i-shelf", $tr).empty();
        for (let i = 0; i < data.length; i++) {
          jQuery("select.i-shelf", $tr)
            .append(
              `<option value="${data[i]}">
							${data[i]} </option>`
            )
            .val(data[0]);
        }
      },
    });
    bindLineEvents($tr);
  }
}

function bindLinesEvents() {
  jQuery("tr", $transactionLines).each(function (i, tr) {
    bindLineEvents(jQuery(tr));
  });
}

function bindLineEvents($tr) {
  jQuery("select.i-warehouse", $tr).change(function (e) {
    var getselected = jQuery("select.i-warehouse", $tr)
      .children("option:selected")
      .text();
    $.ajax({
      cache: false,
      type: "POST",
      data: { whatselected: getselected },
      url: getAppURL("purchases/get_warehouse_shelfs"),
      success: function (data) {
        jQuery("select.i-shelf", $tr).empty();
        for (let i = 0; i < data.length; i++) {
          jQuery("select.i-shelf", $tr).append(`<option value="${data[i]}">
						${data[i]} </option>`);
        }
      },
    });
  });
  jQuery("button.i-remove", $tr).on("click", function () {
    jQuery(this.parentNode.parentNode).remove();
  });
  var $qty = jQuery("input.i-qty", $tr).on("change", calculateLineTotal);
  var $price = jQuery("input.i-price", $tr).on("change", calculateLineTotal);
  var $cost = jQuery("input.i-cost", $tr).on("change", calculateLineTotal);
  var $discount = jQuery("input.i-discount", $tr).on(
    "change",
    calculateLineTotal
  );
  var $total_discount = $("#disc").on("change", calculateLineTotal);
  calculateLineTotal();
  function calculateLineTotal() {
    let net_cost = parseFloat($price.val()) * (1 - $discount.val() / 100);
    let total = $qty.val() * net_cost;
    jQuery("td.i-total", $tr).text(total.toFixed(2));
    calculateSubtotalAndTotal($total_discount);
  }
  $("#delivery_charge").on("change", function () {
    calculateSubtotalAndTotal();
  });
  $("#disc").on("change", function () {
    calculateSubtotalAndTotal();
  });
}

function calculateSubtotalAndTotal($total_discount) {
  var subtot = 0;
  jQuery("tr", $transactionLines).each(function (i, tr) {
    subtot = subtot + parseFloat(jQuery("td.i-total", tr).text());
  });
  $("#sub_total").val(subtot.toFixed(2));
  $("#final_total").val(
    (
      subtot -
      parseFloat($("#disc").val()) +
      parseFloat($("#delivery_charge").val())
    ).toFixed(2)
  );
}

function getcurrencyrate() {
  $("#currency_id").change(function (e) {
    var id = $("#currency_id").val();
    $.ajax({
      cache: false,
      type: "POST",
      data: { whatselected: id },
      url: getAppURL("currencies/get_currency_rate"),
      success: function (data) {
        var result = data.split("-");
        $("#currency_rate").val(result[0]);
      },
    });
  });
}

function validation() {
  const gateway = $("#payment_method_gateway").val();
  const status = $("#payment_method_gateway_status").val();

  if (gateway === "whish" && status === "Payment successful") {
    if (!confirm("Are you sure you want to submit this form?")) {
      return false;
    }
  }
  var count = 0;
  jQuery("tr", $transactionLines).each(function (i, tr) {
    var qty = jQuery("input.i-qty", tr).val();
    var price = jQuery("input.i-price", tr).val();
    var discount = jQuery("input.i-discount", tr).val();
    if (isNaN(qty) == true || isNaN(price) == true || isNaN(discount) == true) {
      document.getElementById("error_transactionLines").innerHTML =
        _lang.numeric_values;
      document.getElementById("error_transactionLines").className =
        "alert alert-danger";
      count++;
    } else {
      if (
        Math.sign(qty) == -1 ||
        Math.sign(price) == -1 ||
        Math.sign(discount) == -1
      ) {
        document.getElementById("error_transactionLines").innerHTML =
          _lang.positive_values;
        document.getElementById("error_transactionLines").className =
          "alert alert-danger";
        count++;
      }
    }
    if (qty.trim() == "" || price.trim() == "" || discount.trim() == "") {
      document.getElementById("error_transactionLines").innerHTML =
        _lang.numeric_values;
      document.getElementById("error_transactionLines").className =
        "alert alert-danger";
      count++;
    }
  });
  var disc = $("#disc").val();
  if (disc.trim() == "") {
    document.getElementById("error_disc").innerHTML = _lang.field_required;
    document.getElementById("error_disc").className = "alert alert-danger";
    count++;
  }
  if (isNaN(disc) == true) {
    document.getElementById("error_disc").innerHTML = _lang.numeric_nb;
    document.getElementById("error_disc").className = "alert alert-danger";
    count++;
  } else {
    if (Math.sign(disc) == -1) {
      document.getElementById("error_disc").innerHTML = _lang.positive_nb;
      document.getElementById("error_disc").className = "alert alert-danger";
      count++;
    }
  }
  if (
    document.transactionForm.acctLkupTo.value == "" ||
    document.transactionForm.account_id.value == ""
  ) {
    document.getElementById("error_acctLkupTo").innerHTML = _lang.select_acc;
    document.getElementById("error_acctLkupTo").className =
      "alert alert-danger";
    count++;
  }
  if (
    document.transactionForm.acctLkupFrom.value == "" ||
    document.transactionForm.account2_id.value == ""
  ) {
    document.getElementById("error_acctLkupFrom").innerHTML = _lang.select_acc;
    document.getElementById("error_acctLkupFrom").className =
      "alert alert-danger";
    count++;
  }
  if (document.transactionForm.currency_id.value == "") {
    document.getElementById("error_currency_id").innerHTML =
      _lang.field_required;
    document.getElementById("error_currency_id").className =
      "alert alert-danger";
    count++;
  }
  var currency_rate = $("#currency_rate").val();
  if (currency_rate.trim() == "") {
    document.getElementById("error_currency_rate").innerHTML =
      _lang.field_required;
    document.getElementById("error_currency_rate").className =
      "alert alert-danger";
    count++;
  }
  if (isNaN(currency_rate) == true) {
    document.getElementById("error_currency_rate").innerHTML = _lang.numeric_nb;
    document.getElementById("error_currency_rate").className =
      "alert alert-danger";
    count++;
  } else {
    if (Math.sign(currency_rate) == -1) {
      document.getElementById("error_currency_rate").innerHTML =
        _lang.positive_nb;
      document.getElementById("error_currency_rate").className =
        "alert alert-danger";
      count++;
    }
  }
  var date1 = change_date_format(document.transactionForm.trans_date.value);
  if (
    document.transactionForm.trans_date.value == "" ||
    isNaN(date1.getDate())
  ) {
    document.getElementById("error_trans_date").innerHTML = _lang.valid_date;
    document.getElementById("error_trans_date").className =
      "alert alert-danger";
    count++;
  }
  if (document.transactionForm.value_date.value != "") {
    var date2 = change_date_format(document.transactionForm.value_date.value);
    if (isNaN(date2.getDate())) {
      document.getElementById("error_value_date").innerHTML = _lang.valid_date;
      document.getElementById("error_value_date").className =
        "alert alert-danger";
      count++;
    }
  }
  if (document.getElementById("transactionLines").rows.length == "0") {
    document.getElementById("error_transactionLines").innerHTML =
      _lang.select_items;
    document.getElementById("error_transactionLines").className =
      "alert alert-danger";
    count++;
  }
  if (count > 0) {
    return false;
  }
}
function AddAccount() {
  window.open(getAppURL("accounts/add?TransAddAccount=1"), "_blank");
}

function change_date_format(date) {
  var datearray = date.split("-");
  var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2];
  var date_new = new Date(new_date_format);
  return date_new;
}

function autoCompleteSalesAccount(
  $acctLkup,
  $accountId,
  onResultSelection,
  $currency_id
) {
  $acctLkup.autocomplete({
    serviceUrl: getAppURL("sales/lookup_sales_accounts/".concat($currency_id)),
    appendTo: $acctLkup.parent()[0],
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
      onResultSelection(result.row, $accountId);
    },
    transformResult: function (response) {
      return {
        suggestions: jQuery.map(response, function (account) {
          return { value: account.description, row: account };
        }),
      };
    },
  });
}

$(document).ready(function () {
  function toggleStatusDropdown() {
    const $status = $("#payment_method_gateway_status");
    const selectedValue = $("#payment_method_gateway").val();

    if (selectedValue === "C.O.D") {
      $status.val("").prop("disabled", true);
    } else if (selectedValue === "whish") {
      $status.find('option[value=""]').remove();

      if (!$status.val()) {
        $status.val($status.find("option").first().val());
      }

      $status.prop("disabled", $status.val() === "Payment successful");
    }
  }

  toggleStatusDropdown();
  $("#payment_method_gateway").on("change", toggleStatusDropdown);
});
