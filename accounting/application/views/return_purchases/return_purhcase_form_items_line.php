<tr id="<?php echo 'item-%d' ?>" data-index="<?php echo '%d' ?>">
    <td>
        <input name="transItems[%d][transaction_id]" type="text" class="hide i-transaction_id" />
        <input name="transItems[%d][item_id]" type="text" class="hide i-item_id" />
        <input name="transItems[%d][mvt_type]" type="text" class="hide i-mvt_type" />
        <button type="button" class="btn btn-xs btn-danger i-remove">
            <i class="glyphicon glyphicon-remove-circle"></i>
        </button>
    </td>
    <td class="i-description"></td>
    <td class="i-barcode"></td>
    <td><?php echo form_dropdown('transItems[%d][warehouses]', '', '',  'id="warehouses" class="form-control i-warehouse" style="width: 100px;"')
        ?></td>
    <td><?php echo form_dropdown('transItems[%d][shelfs]', '', '', 'id="shelfs" class="form-control i-shelf" style="width: 100px;"')
        ?></td>
    <td><input name="transItems[%d][item_qty]" id="item_qty" type="text" class="form-control i-item_qty" style="width: 70px;" /></td>
    <?php if ($sizes[0] !== '') {
        foreach ($sizes as $s) { ?>
            <td><input name="transItems[%d][qty_size][<?php echo $s ?>]" type="text" class="form-control i-qty_size" style="width: 70px;" /></td>
    <?php }
    } ?>
    <td><input name="transItems[%d][qty]" type="text" class="form-control i-qty" style="width: 70px;" readonly/></td>
    <td><input name="transItems[%d][price]" type="text" class="form-control i-price" style="width: 70px;"/></td>
    <td><input name="transItems[%d][discount]" type="text" class="form-control i-discount" style="width: 70px;"/></td>
    <td class="i-total text-right"></td>
</tr>