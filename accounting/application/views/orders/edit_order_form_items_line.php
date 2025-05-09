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
        <td><?php echo form_dropdown('transItems[' . $x . '][sizes]', $sizes, $size[$x], 'id="sizes" class="form-control i-sizes" style="width: 100px;"')
            ?></td>
        <td><input name="transItems[<?php echo $x ?>][qty]" value="<?php echo $transItem['qty'] ?>" id="qty" type="text" class="form-control i-qty" /></td>
        <td><input name="transItems[<?php echo $x ?>][price]" value="<?php echo $transItem['price'] ?>" id="price" type="text" class="form-control i-price" /></td>
        <td><input name="transItems[<?php echo $x ?>][discount]" value="<?php echo $transItem['discount'] ?>" id="discount" type="text" class="form-control i-discount" /></td>
        <td class="i-total text-right"></td>
    </tr>
<?php endforeach ?>