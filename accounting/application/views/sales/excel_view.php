<p class="text-right">
    <?php echo anchor('sales/index', $this->lang->line('Back'), 'class="btn btn-primary" id="bgback" ') ?>
    <button onclick="ExportToExcel('xlsx')" class="btn btn-primary"><?php echo $this->lang->line('Export_Excel') ?></button>
</p>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4">
            <h4><strong><?php echo $title ?></strong></h4>
            <hr>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="salesExcelTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
    <thead>
        <tr style="background-color: #404040; color: white;">
            <th>#</th>
            <th><?php echo $this->lang->line('account_nb') ?></th>
            <th><?php echo $this->lang->line('transaction_date') ?></th>
            <th><?php echo $this->lang->line('trans_type') ?></th>
            <th><?php echo $this->lang->line('done') ?></th>
            <th><?php echo $this->lang->line('tracking_#') ?></th>
            <th><?php echo $this->lang->line('account_name') ?></th>
            <th><?php echo $this->lang->line('subtotal') ?></th>
            <th><?php echo $this->lang->line('delivery_charge') ?></th>
            <th><?php echo $this->lang->line('total') ?></th>
            <th><?php echo $this->lang->line('qty') ?></th>
            <th><?php echo $this->lang->line('status') ?></th>
            <th><?php echo $this->lang->line('dispatch_date') ?></th>
            <th><?php echo $this->lang->line('delivery') ?></th>
            <th><?php echo $this->lang->line('user') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody id="table_body">
        <?php $count = 0;
        foreach ($records as $record) {
            $count++; ?>
            <tr <?php echo ($record['trans_type'] === "EX") ? "style='color: #820707;'" : "" ?>>
                <td><?php echo $count ?></td>
                <td><?php echo $record['account_nb1'] ?></td>
                <td><?php echo $record['trans_date'] ?></td>
                <td><?php echo $record['trans_type'] ?></td>
                <td><?php echo $record['status'] ?></td>
                <td><?php echo $record['auto_no'] ?></td>
                <td><?php echo $record['account1'] ?></td>
                <td><?php echo $record['subtotal'] ?></td>
                <td><?php echo $record['delivery_charge'] ?></td>
                <td><?php echo $record['total'] ?></td>
                <td><?php echo $record['trans_qty'] ?></td>
                <td><?php echo $record['status2'] ?></td>
                <td><?php echo $record['value_date'] ?></td>
                <td><?php echo $record['driver'] ?></td>
                <td><?php echo $record['user'] ?></td>
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>