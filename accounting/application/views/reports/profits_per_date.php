<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8 text-right">
        <button onclick="window.print();return false" class="btn btn-primary" id="print"><?php echo $this->lang->line('print') ?></button>
    </div>
</div>
<?php echo form_open('', 'autocomplete="off"'); ?>
<div class="col-sm-12" id="report_form_div">
    <div class="col-sm-5 form-group">
        <label class="col-sm-4 control-label" for="from_date"><?php echo $this->lang->line('from_date') ?></label>
        <div class="col-sm-8">
            <?php
            echo form_input('from_date', $from, 'id="from_date" class="form-control i-from_date" autocomplete="off"')
            ?>
        </div>
    </div>
    <div class="col-sm-5 form-group">
        <label class="col-sm-4 control-label" for="to_date" id="label_from"><?php echo $this->lang->line('to_date') ?></label>
        <div class="col-sm-8">
            <?php
            echo form_input('to_date', $to, 'id="to_date" class="form-control i-to_date" autocomplete="off"')
            ?>
        </div>
    </div>
    <div class="col-sm-2">
        <button type="submit" id="search" class="btn btn-primary btn-block"><?php echo $this->lang->line('search') ?></button>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
    <thead>
        <tr style="background-color: #404040; color:white;">
            <th><?php echo $this->lang->line('date') ?></th>
            <th><?php echo $this->lang->line('invoice_nb') ?></th>
            <th><?php echo $this->lang->line('trans_type') ?></th>
            <th><?php echo $this->lang->line('cost') ?></th>
            <th><?php echo $this->lang->line('profit') ?></th>
            <th><?php echo $this->lang->line('revenue') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php if ($records !== []) { ?>
            <?php $total_profit = $total_cost = $total_rev = 0; ?>
            <?php foreach ($records as $record) { ?>
                <?php $profit = doubleval($record['revenue']) - doubleval($record['cost']) ?>
                <?php $total_profit += $profit; ?>
                <?php $total_cost += doubleval($record['cost']); ?>
                <?php $total_rev += doubleval($record['revenue']); ?>
                <tr>
                    <td><?php echo $record['trans_date'] ?></td>
                    <td><?php echo $record['auto_no'] ?></td>
                    <td><?php echo $record['trans_type'] ?></td>
                    <td><?php echo $record['cost'] ?></td>
                    <td><?php echo $profit ?></td>
                    <td><?php echo $record['revenue'] ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th colspan="3" style="background-color: #404040; color:white;"><?php echo $this->lang->line('total') ?></th>
                <th style="background-color: #ffdf59; color:black;"><?php echo $total_cost ?></th>
                <th style="background-color: #ffdf59; color:black;"><?php echo $total_profit ?></th>
                <th style="background-color: #ffdf59; color:black;"><?php echo $total_rev ?></th>
            </tr>
        <?php }else{ ?>
            <tr>
                <th colspan="6">No Records Found</th>
            </tr>
        <?php } ?>
    </tbody>
</table>