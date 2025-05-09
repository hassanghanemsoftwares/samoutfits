jQuery(document).ready(function () {
    window.warehousesDT = null;
    let dtActionsHTML =
        '<button type="button" class="btn bt-link btn-xs i-adjust" style="background-color: #333;" onclick="openAdjustModal(%d, \'%s\', \'%n\', \'%q\', \'%b\', \'%x\')">' +
        '<i class="glyphicon glyphicon-adjust text-yellow" title="Adjust"></i>' +
        '</button>' +
        '<button type="button" class="btn bt-link btn-xs i-transfer" style="background-color: #ffdf59; color: #333; margin-left: 5px;" onclick="openTransferModal(%d, \'%s\', \'%n\', \'%q\', \'%b\', \'%x\', \'%i\')">' +
        '<i class="glyphicon glyphicon-transfer" title="Transfer"></i>' +
        '</button>';
    /***************************************************/
    var $dtTbl = $('#warehousesTbl');
    BuildDataTableColumnSearch($dtTbl, 'warehousesDT');
    EnhanceDataTableSearch(window.warehousesDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: false, deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {
            url: getAppURL('warehouses/inventory'), type: 'GET', searchDelay: _GST,
            data: function (params) {
                if ($('#category_filter').val()) {
                    params['category'] = $('#category_filter').val();
                } else {
                    params['category'] = '';
                }
            }
        },
        columns: [{ data: 'barcode' }, { data: 'description' }, { data: 'category' }, { data: 'size' }, { data: 'warehouse' }, { data: 'shelf' }, { data: 'total_qty' }, { data: 'price_ttc' }, { data: 'item_id' }],
        columnDefs: [
            {
                targets: 8, orderable: false, createdCell: (td, itemId, row) => {
                    $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(itemId))
                        .replace(/%s/g, row.warehouse)
                        .replace(/%i/g, escapeSpecialChars(row.description))
                        .replace(/%n/g, row.shelf)
                        .replace(/%b/g, row.barcode)
                        .replace(/%x/g, row.size)
                        .replace(/%q/g, row.total_qty)
                    );
                }
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
            $('#warehousesTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            data.colsFilter = temp;
            // console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#warehousesTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    }), 2048);

    $('#reset_filters').on('click', function (e) {
        $('#warehousesTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        var table = $('#warehousesTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });
    jQuery('#category_filter').on('change', triggerDTFiltersSearch);
});

function triggerDTFiltersSearch(e) {
    window.warehousesDT.ajax.reload();
    e.preventDefault();
    e.stopPropagation();
    return false;
}

function openAdjustModal(item_id, warehouse, shelf, qty, barcode, size) {
    // if ($('#user_type').val() !== "Employee") {
    $('#adjust_product_data').text(barcode.concat(' - ').concat(size).concat(' - ').concat(warehouse).concat(' - ').concat(shelf));
    $('#old_qty').val(qty);
    $('#adjust_item_id').val(item_id);
    $('#adjust_size').val(size);
    $('#adjust_warehouse').val(warehouse);
    $('#adjust_shelf').val(shelf);
    $('#new_qty').val(0);
    $('#itemAdjustModalForm').modal('show');
    // }
}

function openTransferModal(item_id, warehouse, shelf, qty, barcode, size, description) {
    // if ($('#user_type').val() !== "Employee") {
    $('#transfer_item').val(decodeSpecialChars(description));
    $('#transfer_barcode').val(barcode);
    $('#transfer_current_warehouse').val(warehouse + " - " + shelf);
    $('#transfer_current_qty').val(qty);
    $('#transfer_item_id').val(item_id);
    $('#transfer_size').val(size);
    $('#transfer_warehouse').val(warehouse);
    $('#transfer_shelf').val(shelf);
    $('#transfer_qty').val(0);
    $('#transfer_qty').attr('min', 1);
    $('#transfer_qty').attr('max', qty);
    $('#transfer_new_warehouse').val('');
    $('#itemTransferModalForm').modal('show');
    // }
}

function transfervalidate() {
    var count = 0;
    let current_ws = $('#transfer_current_warehouse').val().trim();
    let new_ws = $('#transfer_new_warehouse option:selected').text().trim();
    if (current_ws == new_ws) {
        document.getElementById('error_transfer_new_warehouse').innerHTML = _lang.select_different_warehouse_than_the_current_warehouse;
        document.getElementById('error_transfer_new_warehouse').className = "alert alert-danger";
        count++;
    }
    if (count == 0) {
        return true;
    } else {
        return false;
    }
}

function escapeSpecialChars(inputString) {
    return inputString
        .replace(/\\/g, '\\\\')     // Escape backslashes
        .replace(/"/g, '&quot;')    // Use &quot; for double quotes
        .replace(/'/g, '&#39;')     // Use &#39; for single quotes
        .replace(/</g, '&lt;')      // Escape less-than
        .replace(/>/g, '&gt;')      // Escape greater-than
        .replace(/&/g, '&amp;');    // Escape ampersands
}

function decodeSpecialChars(inputString) {
    return inputString
        .replace(/&quot;/g, '"')     // Convert &quot; back to "
        .replace(/&#39;/g, "'")      // Convert &#39; back to '
        .replace(/&lt;/g, '<')       // Convert &lt; back to <
        .replace(/&gt;/g, '>')       // Convert &gt; back to >
        .replace(/&amp;/g, '&');     // Convert &amp; back to &
}