<?php foreach ($transfer_lines as $x => $transfer_line) : ?>
    <tr id="<?php echo 'item-', $x ?>" data-index="<?php echo $x ?>">
        <td>
            <input name="transItems[<?php echo $x ?>][transaction_id]" value="<?php echo $this->Transaction->get_field('id') ?>" id="transaction_id" type="text" class="hide i-transaction_id" />
            <input name="transItems[<?php echo $x ?>][item_id]" value="<?php echo $transfer_line['item_id'] ?>" id="item_id" type="text" class="hide i-item_id" />
            <input name="transItems[<?php echo $x ?>][mvt_type]" value="" id="mvt_type" type="text" class="hide i-mvt_type" />
            <button type="button" class="btn btn-xs btn-danger i-remove">
                <i class="glyphicon glyphicon-remove-circle"></i>
            </button>
        </td>
        <td class="i-description"><?php echo $transfer_line['description'] ?></td>
        <td class="i-barcode"><?php echo $transfer_line['barcode'] ?></td>
        <td><?php
            echo form_dropdown('transItems[' . $x . '][from]', $transfer_line['from_list'], $transfer_line['from'], 'id="from" class="form-control i-from"')
            ?></td>
        <td><?php
            echo form_dropdown('transItems[' . $x . '][to]',  $all_warehouses_shelfs, $transfer_line['to'], 'id="to" class="form-control i-to"')
            ?></td>
        <td><?php
            echo form_dropdown('transItems[' . $x . '][sizes]',  $transfer_line['sizes'], $transfer_line['size'], 'id="sizes" class="form-control i-sizes"')
            ?></td>
        <td class="i-max_qty" style="text-align: center;"></td>
        <td><input name="transItems[<?php echo $x ?>][qty]" value="<?php echo $transfer_line['qty'] ?>" id="qty" type="text" class="form-control i-qty" style="width: 70px;"/>
            <div id="error_qty" class="form-control i-error_qty" style="text-align:center; display: none; height: auto;"></div>
        </td>
        <td><input name="transItems[<?php echo $x ?>][cost]" value="<?php echo $transfer_line['cost'] ?>" id="cost" type="text" class="form-control i-cost" style="width: 70px;"/></td>
    </tr>
<?php endforeach ?>