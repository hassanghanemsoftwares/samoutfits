<p class="text-right">
    <button id="print" onclick="window.print()" class="btn btn-primary">print</button>
</p>
<table class="table table-bordered" id="pickupTblprint">
    <thead>
        <tr>
            <th colspan="8" style="text-align:center"><?php echo date("d-m-Y") ?></th>
        </tr>
        <tr>
            <th><?php echo $this->lang->line('waybill_nb') ?></th>
            <th><?php echo $this->lang->line('name') ?></th>
            <th><?php echo $this->lang->line('dispatch_date') ?></th>
            <th><?php echo $this->lang->line('amount') ?></th>
            <th><?php echo $this->lang->line('currency') ?></th>
            <th><?php echo $this->lang->line('city') ?></th>
            <th><?php echo $this->lang->line('mobile_nb') ?></th>
            <th><?php echo $this->lang->line('notes') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $count=0;
        foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['auto_no'] ?></td>
                <td><?php echo $record['account_name'] ?></td>
                <td><?php echo $record['value_date'] ?></td>
                <td><?php echo $record['total'] ?></td>
                <td><?php echo $record['currency_code'] ?></td>
                <td><?php echo $record['city'] ?></td>
                <td><?php echo $record['phone'] ?></td>
                <td><?php echo $record['delivery_note'] ?></td>
            </tr>
        <?php $count++; } ?>
        <tr>
            <td colspan="8" style="text-align:center"><?php echo $count." - order" ?></td>
        </tr>
    </tbody>
</table>