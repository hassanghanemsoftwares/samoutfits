<tr id="<?php echo 'item-%d' ?>" data-index="<?php echo '%d' ?>">
    <td>
        <input name="transItems[%d][transaction_id]" id="transaction_id" type="text" class="hide i-transaction_id" />
        <input name="transItems[%d][item_id]" id="item_id" type="text" class="hide i-item_id" />
        <input name="transItems[%d][mvt_type]" id="mvt_type" type="text" class="hide i-mvt_type" />
        <button type="button" class="btn btn-xs btn-danger i-remove">
            <i class="glyphicon glyphicon-remove-circle"></i>
        </button>
    </td>
    <td class="i-description"></td>
    <td class="i-barcode"></td>
    <td><input name="transItems[%d][qty]" id="qty" type="text" class="form-control i-qty" /></td>
</tr>