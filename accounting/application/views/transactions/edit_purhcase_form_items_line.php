<?php
$c1 = 0;
foreach ($records as $k => $record) :  
?>
    <tr id="<?php echo 'item-', $c1 ?>" data-index="<?php echo $c1 ?>">
        <td>
            <input name="transItems[<?php echo $c1 ?>][transaction_id]" value="<?php echo $this->Transaction->get_field('id') ?>" id="transaction_id" type="text" class="hide i-transaction_id" />
            <input name="transItems[<?php echo $c1 ?>][item_id]" value="<?php echo $record['item_id'] ?>" id="item_id" type="text" class="hide i-item_id" />
            <input name="transItems[<?php echo $c1 ?>][mvt_type]" value="<?php echo $record['mvt_type'] ?>" id="mvt_type" type="text" class="hide i-mvt_type" />
            <button type="button" class="btn btn-xs btn-danger i-remove">
                <i class="glyphicon glyphicon-remove-circle"></i>
            </button>
        </td>
        <td class="i-description"><?php echo $record['description'] ?></td>
        <td class="i-barcode"><?php echo $record['barcode'] ?></td>
        <td><?php echo form_dropdown('transItems[' . $c1 . '][warehouses]', $warehouses_list, $warehouse[$c1], 'id="warehouses" class="form-control i-warehouse" style="width: 100px;"')
            ?></td>
        <td><?php echo form_dropdown('transItems[' . $c1 . '][shelfs]', $shelf_list[$c1], $shelf[$c1], 'id="shelfs" class="form-control i-shelf" style="width: 100px;"')
            ?></td>
        <td><input name="transItems[<?php echo $c1 ?>][item_qty]" value="<?php echo $record["size_qty"]["No"] ?>" id="item_qty" type="text" class="form-control i-item_qty" style="width: 70px;"/></td>
        <?php if($sizes[0] !== ''){ foreach ($sizes as $s) { ?>
            <td><input name="transItems[<?php echo $c1 ?>][qty_size][<?php echo $s ?>]" value="<?php echo $record["size_qty"][$s] ?>" type="text" class="form-control i-qty_size" style="width: 70px;"/></td>
        <?php }} ?>
        <td><input name="transItems[<?php echo $c1 ?>][qty]" value="<?php echo $record['qty'] ?>" id="qty" type="text" class="form-control i-qty" style="width: 70px;" readonly/></td>
        <td><input name="transItems[<?php echo $c1 ?>][price]" value="<?php echo $record['price'] ?>" id="price" type="text" class="form-control i-price" style="width: 70px;"/></td>
        <td><input name="transItems[<?php echo $c1 ?>][cost]" value="<?php echo $record['cost'] ?>" id="cost" type="text" class="form-control i-cost" style="width: 70px;"/></td>
        <td><input name="transItems[<?php echo $c1 ?>][discount]" value="<?php echo $record['discount'] ?>" id="discount" type="text" class="form-control i-discount" style="width: 70px;"/></td>
        <td class="i-net_cost text-center"></td>
        <td class="i-total text-right"></td>
    </tr>
<?php $c1++; endforeach ?>