<?php foreach ($records as $x => $record) : ?>
    <tr id="<?php echo 'item-', $x ?>" data-index="<?php echo $x ?>">
        <td>
            <input name="transItems[<?php echo $x ?>][transaction_id]" value="<?php echo $this->Transaction->get_field('id') ?>" id="transaction_id" type="text" class="hide i-transaction_id" />
            <input name="transItems[<?php echo $x ?>][item_id]" value="<?php echo $record['item_id'] ?>" id="item_id" type="text" class="hide i-item_id" />
            <input name="transItems[<?php echo $x ?>][mvt_type]" value="<?php echo $record['mvt_type'] ?>" id="mvt_type" type="text" class="hide i-mvt_type" />
            <button type="button" class="btn btn-xs btn-danger i-remove">
                <i class="glyphicon glyphicon-remove-circle"></i>
            </button>
        </td>
        <td class="i-description"><?php echo $record['description'] ?></td>
        <td class="i-barcode"><?php echo $record['barcode'] ?></td>
        <td><?php echo form_dropdown('transItems[' . $x . '][warehouses]', $warehouses_list, $warehouses[$x],  'id="warehouses" class="form-control i-warehouse" style="width: 100px;"')
            ?></td>
        <td><?php echo form_dropdown('transItems[' . $x . '][shelfs]', [$shelfs[$x] => $shelfs[$x]], $shelfs[$x], 'id="shelfs" class="form-control i-shelf" style="width: 100px;"')
            ?></td>
        <td><input name="transItems[<?php echo $x ?>][item_qty]" value="<?php echo $record["size_qty"]["No"] ?>" id="item_qty" type="text" class="form-control i-item_qty" style="width: 70px;"/></td>
        <?php if($sizes[0] !== ''){ foreach ($sizes as $s) { ?>
            <td><input name="transItems[<?php echo $x ?>][qty_size][<?php echo $s ?>]" value="<?php echo $record["size_qty"][$s] ?>" type="text" class="form-control i-qty_size" style="width: 70px;"/></td>
        <?php }} ?>
        <td><input name="transItems[<?php echo $x ?>][qty]" value="<?php echo $record['qty'] ?>" id="qty" type="text" class="form-control i-qty" style="width: 70px;" readonly/></td>
        <td><input name="transItems[<?php echo $x ?>][price]" value="<?php echo $record['price'] ?>" id="price" type="text" class="form-control i-price" style="width: 70px;"/></td>
        <td><input name="transItems[<?php echo $x ?>][discount]" value="<?php echo $record['discount'] ?>" id="discount" type="text" class="form-control i-discount" style="width: 70px;"/></td>
        <td class="i-total text-right"></td>
    </tr>
<?php endforeach ?>