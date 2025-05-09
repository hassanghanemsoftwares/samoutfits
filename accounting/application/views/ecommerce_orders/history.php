<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
        </p>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="ecoOrdersHistroyTbl" data-num-rows="<?php echo $this->Order->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('order') . "#" ?></th>
            <th><?php echo $this->lang->line('tracking_#') ?></th>
            <th><?php echo $this->lang->line('customer_name') ?></th>
            <th><?php echo $this->lang->line('order_date') ?></th>
            <th><?php echo $this->lang->line('description') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('qty') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('total') ?></th>
            <th><?php echo $this->lang->line('status') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['auto_no'] ?></td>
                <td><?php echo $record['tracking_nb'] ?></td>
                <td><?php echo $record['customer_name'] ?></td>
                <td><?php echo $record['order_date'] ?></td>
                <td><?php echo $record['description'] ?></td>
                <td><?php echo $record['total_qty'] ?></td>
                <td><?php echo $record['total'] ?></td>
                <td><?php echo $record['status'] ?></td>
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>