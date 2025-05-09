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
    <td><?php
        echo form_dropdown('transItems[%d][from]', '', '', 'id="from" class="form-control i-from"')
        ?></td>
    <td><?php
        echo form_dropdown('transItems[%d][to]', $all_warehouses_shelfs, '', 'id="to" class="form-control i-to"')
        ?></td>
    <td><?php
        echo form_dropdown('transItems[%d][sizes]', '', '', 'id="sizes" class="form-control i-sizes"')
        ?></td>
    <td class="i-max_qty" style="text-align: center;"></td>
    <td><input name="transItems[%d][qty]" type="text" class="form-control i-qty" style="width: 70px;"/>
        <div id="error_qty" class="form-control i-error_qty" style="text-align:center; display: none;"></div>
    </td>
    <td><input name="transItems[%d][cost]" type="text" class="form-control i-cost" style="width: 70px;"/>
        <div id="error_cost" class="form-control i-error_cost" style="text-align:center; display: none;"></div>
    </td>
</tr>