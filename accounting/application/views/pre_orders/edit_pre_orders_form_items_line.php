<?php foreach ($transItems as $x => $transItem) : ?>
    <tr id="<?php echo 'item-', $x ?>" data-index="<?php echo $x ?>">
        <td>
            <input name="transItems[<?php echo $x ?>][transaction_id]" value="<?php echo $this->Transaction->get_field('id') ?>" id="transaction_id" type="text" class="hide i-transaction_id" />
            <input name="transItems[<?php echo $x ?>][item_id]" value="<?php echo $transItem['item_id'] ?>" id="item_id" type="text" class="hide i-item_id" />
            <input name="transItems[<?php echo $x ?>][mvt_type]" value="<?php echo $transItem['mvt_type'] ?>" id="mvt_type" type="text" class="hide i-mvt_type" />
            <button type="button" class="btn btn-xs btn-danger i-remove">
                <i class="glyphicon glyphicon-remove-circle"></i>
            </button>
        </td>
        <td class="i-description"><?php echo $transItem['description'] ?></td>
        <td class="i-barcode"><?php echo $transItem['barcode'] ?></td>
        <td><?php echo form_dropdown('transItems[' . $x . '][warehouses]', $warehouses_list[$x], $warehouses[$x],  'id="warehouses" class="form-control i-warehouse" style="width: 100px;"')
            ?></td>
        <td><?php echo form_dropdown('transItems[' . $x . '][shelfs]', $shelf_list[$x], $shelfs[$x], 'id="shelfs" class="form-control i-shelf" style="width: 100px;"')
            ?></td>
        <td><?php echo form_dropdown('transItems[' . $x . '][sizes]', $sizes_list[$x], $size[$x], 'id="sizes" class="form-control i-sizes" style="width: 100px;"')
            ?></td>
        <td><input name="transItems[<?php echo $x ?>][qty]" value="<?php echo $transItem['qty'] ?>" id="qty" type="text" class="form-control i-qty" style="width: 100px;"/>
            <div id="error_qty" class="form-control i-error_qty" style="height:auto; text-align:center; display: none;"></div>
        </td>
        <td><input name="transItems[<?php echo $x ?>][price]" value="<?php echo $transItem['price'] ?>" id="price" type="text" class="form-control i-price" style="width: 100px;"/></td>
        <td><input name="transItems[<?php echo $x ?>][discount]" value="<?php echo $transItem['discount'] ?>" id="discount" type="text" class="form-control i-discount" style="width: 100px;"/></td>
        <td><input name="transItems[<?php echo $x ?>][profit]" value="<?php echo $transItem['profit'] ?>" id="profit" type="text" class="form-control i-profit" readonly style="width: 100px;"/></td>
        <td class="i-total text-right"></td>
    </tr>
<?php endforeach ?> 