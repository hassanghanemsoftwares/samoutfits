let $transactionForm, $transactionLines;
jQuery(document).ready(function ($) {
    $transactionForm = $('form#transactionForm');
    $transactionLines = $('tbody#transactionLines', $transactionForm);
    inputToDatepickerA($('#trans_date, #value_date, #journal_date', $transactionForm));
    onClickAddLine();
    bindLinesEvents();
    var item_id = $('#item_line_id').val();
    if (window.location.href == getAppURL('items/add_opening_item/') + item_id) {
        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'whatselected': item_id },
            url: getAppURL('purchases/get_item_data'),
            success: function (data) {
                addLineToTransaction(data[0], true);
            }
        });
    }

    $('#bgback').click(function (e) {
        e.preventDefault();
        window.location.href = document.referrer;
    });
});
function accountSelected(account, $accountId) {
    $accountId.val(account.id);
}

function addLineToTransaction(item, newLine) {
    let $lastTr = jQuery('tr:last', $transactionLines);
    let idx = 1 + parseInt($lastTr.length > 0 ? $lastTr.attr('data-index') : -1);
    $transactionLines.append(ItemLineTpl.replace(/%d/g, String(idx)));
    if (newLine) {
        var $tr = jQuery('tr#item-' + idx, $transactionLines);
        jQuery('input.i-item_id', $tr).val(item.id);
        jQuery('td.i-description', $tr).text(item.description);
        jQuery('td.i-barcode', $tr).text(item.barcode);
        jQuery('input.i-qty', $tr).val('1');
        jQuery('input.i-cost', $tr).val('0');
        jQuery('input.i-item_qty', $tr).val('0').focus();
        var sizes = jQuery('input.i-qty_size', $tr);
        for (var i = 0; i < sizes.length; i++) {
            $(sizes[i]).val(0);
        }
        var getselected = jQuery('select.i-warehouse', $tr).children("option:selected").text();
        var item_id = $('#item_line_id').val();
        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'whatselected': getselected, 'item_id': item_id },
            url: getAppURL('purchases/get_warehouse_shelfs_for_OP'),
            success: function (data) {
                jQuery('select.i-shelf', $tr).empty();
                for (let i = 0; i < data.length; i++) {
                    jQuery('select.i-shelf', $tr).append(`<option value="${data[i]}">
							${data[i]} </option>`).val(data[0]);
                }
            }
        });
        bindLineEvents($tr);
    }
}

function bindLinesEvents() {
    jQuery('tr', $transactionLines).each(function (i, tr) {
        bindLineEvents(jQuery(tr));
    });
}

function bindLineEvents($tr) {
    jQuery('select.i-warehouse', $tr).change(function (e) {
        var getselected = jQuery('select.i-warehouse', $tr).children("option:selected").text();
        var item_id = $('#item_line_id').val();
        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'whatselected': getselected, 'item_id': item_id },
            url: getAppURL('purchases/get_warehouse_shelfs_for_OP'),
            success: function (data) {
                jQuery('select.i-shelf', $tr).empty();
                for (let i = 0; i < data.length; i++) {
                    jQuery('select.i-shelf', $tr).append(`<option value="${data[i]}">
						${data[i]} </option>`);
                }
            }
        });
    });
    jQuery('input.i-qty_size', $tr).on('change', function (e) {
        var sizes = jQuery('input.i-qty_size', $tr);
        var qty = 0;
        for (var i = 0; i < sizes.length; i++) {
            qty = qty + parseInt($(sizes[i]).val());
        }
        jQuery('input.i-qty', $tr).val(qty);
    });
    jQuery('input.i-item_qty', $tr).on('change', function (e) {
        jQuery('input.i-qty', $tr).val(jQuery('input.i-item_qty', $tr).val());
    });
    jQuery('button.i-remove', $tr).on('click', function () {
        jQuery(this.parentNode.parentNode).remove();
    });
}


function validation() {

    var count = 0;
    const warehouses = [];
    jQuery('tr', $transactionLines).each(function (i, tr) {
        var warehouse = jQuery('select.i-warehouse', tr).children("option:selected").val();
        var shelf = jQuery('select.i-shelf', tr).children("option:selected").val();
        warehouses.push(warehouse + " - " + shelf)
        var sizes = jQuery('input.i-qty_size', tr);
        for (var i = 0; i < sizes.length; i++) {
            if (isNaN($(sizes[i]).val()) == true) {
                document.getElementById('error_transactionLines').innerHTML = "*All inputs: size qty must be numeric*";
                document.getElementById('error_transactionLines').className = "alert alert-danger";
                count++;
            }
            if (Math.sign($(sizes[i]).val()) == -1) {
                document.getElementById('error_transactionLines').innerHTML = "*All inputs: size qty must be positive numbers*";
                document.getElementById('error_transactionLines').className = "alert alert-danger";
                count++;
            }
            if ($(sizes[i]).val().trim() == "") {
                document.getElementById('error_transactionLines').innerHTML = "*All inputs: size qty must be numeric*";
                document.getElementById('error_transactionLines').className = "alert alert-danger";
                count++;
            }
        }
        var qty = jQuery('input.i-item_qty', tr).val();
        if (isNaN(qty) == true) {
            document.getElementById('error_transactionLines').innerHTML = "*All inputs: qty, unit cost, extra cost and discount must be numeric*";
            document.getElementById('error_transactionLines').className = "alert alert-danger";
            count++;
        } else {
            if (Math.sign(qty) == -1) {
                document.getElementById('error_transactionLines').innerHTML = "*All inputs: qty, unit cost, extra cost and discount must be positive numbers*";
                document.getElementById('error_transactionLines').className = "alert alert-danger";
                count++;
            }
        }
        if (qty.trim() == "") {
            document.getElementById('error_transactionLines').innerHTML = "*All inputs: qty, unit cost, extra cost and discount must be numeric*";
            document.getElementById('error_transactionLines').className = "alert alert-danger";
            count++;
        }
    });
    const uniqueSet = new Set(warehouses); //like array_unique
    if (warehouses.length !== uniqueSet.size) {
        document.getElementById('error_transactionLines').innerHTML = "*Duplicate Entry: remove duplicated record*";
        document.getElementById('error_transactionLines').className = "alert alert-danger";
        count++;
    }
    if (document.transactionForm.trans_date.value == "") {
        document.getElementById('error_trans_date').innerHTML = "*Please enter a trans date*";
        document.getElementById('error_trans_date').className = "alert alert-danger";
        count++;
    }
    if (document.getElementById('transactionLines').rows.length == "0") {
        document.getElementById('error_transactionLines').innerHTML = "*Please enter an item*";
        document.getElementById('error_transactionLines').className = "alert alert-danger";
        count++;
    }
    if (count > 0) {
        return false;
    }
}

function AddItem() {
    window.open(getAppURL('items/add?TransAddItem=1'), "_blank");
}

function onClickAddLine() {
    $('#addline').click(function (e) {
        e.preventDefault();
        var item_id = $('#item_line_id').val();
        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'whatselected': item_id },
            url: getAppURL('purchases/get_item_data'),
            success: function (data) {
                addLineToTransaction(data[0], true);
            }
        });
    });
}