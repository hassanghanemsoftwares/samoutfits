<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <input type="text" id="user_type" value="<?php echo $this->violet_auth->get_user_type() ?>" hidden>
    <div class="col-sm-8 hide">
        <p class="text-right">
            <button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
        </p>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" style="width: 100%;" id="opinventoryTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo 'OP#' ?></th>
            <th><?php echo $this->lang->line('barcode') ?></th>
            <th><?php echo $this->lang->line('size') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('qty') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('price') ?></th>
            <th><?php echo $this->lang->line('description') ?></th>
            <th><?php echo $this->lang->line('warehouse') ?></th>
            <th><?php echo $this->lang->line('shelf') ?></th>
            <th><?php echo $this->lang->line('date') ?></th>
            <th><?php echo $this->lang->line('Supplier') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['auto_no'] ?></td>
                <td><?php echo $record['barcode'] ?></td>
                <td><?php echo $record['size'] ?></td>
                <td><?php echo $record['qty'] ?></td>
                <td><?php echo $record['price_ttc'] ?></td>
                <td><?php echo $record['description'] ?></td>              
                <td><?php echo $record['warehouse'] ?></td>
                <td><?php echo $record['shelf'] ?></td>
                <td><?php echo $record['trans_date'] ?></td>
                <td><?php echo $record['supplier'] ?></td>              
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>