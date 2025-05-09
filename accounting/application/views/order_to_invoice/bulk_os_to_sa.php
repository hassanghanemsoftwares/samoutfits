<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4">
            <h4><strong><?php echo $title ?></strong></h4>
            <hr>
        </div>
    </div>
</div>
<?php echo form_open('pre_orders/bulk_transfer_os_to_sa', 'id="BulkPrintForm" name="BulkPrintForm" role="form" autocomplete="off" novalidate') ?>
<div class="col-sm-12">
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="bulkpreordersTbl">
        <thead>
            <tr class="form_table_head">
                <th><?php echo $this->lang->line('tracking_#') ?></th>
                <th><?php echo $this->lang->line('account') ?></th>
                <th><?php echo $this->lang->line('transaction_date') ?></th>
                <th><?php echo $this->lang->line('check') ?></th>
            </tr>
        </thead>
        <tbody id="table_body">
            <?php foreach ($records as $k => $record) { ?>
                <tr>
                    <td>
                        <?php echo $record['auto_no'] ?>
                        <input type="hidden" name="trans[<?php echo $k ?>][id]" value="<?php echo $record['id'] ?>">
                        <input type="hidden" name="trans[<?php echo $k ?>][check]" value="<?php echo $record['check'] ?>">
                    </td>
                    <td><?php echo $record['customer'] ?></td>
                    <td><?php echo $record['trans_date'] ?></td>
                    <td style="color:<?php echo ($record['check'] == 'Yes') ? 'green' : 'red'; ?>"><b><?php echo $record['check'] ?></b></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="col-sm-12">
    <div class="col-sm-2 col-sm-offset-10">
        <button type="submit" class="btn btn-primary" id="bulk_submit"><?php echo $this->lang->line('Submit') ?></button>
    </div>
</div>
<?php echo form_close() ?>