<p class="text-right">
<button onclick="ExportToExcel('xlsx')" class="btn btn-primary"><?php echo $this->lang->line('Export_Excel') ?></button>
<button type="button" class="btn btn-primary" id="print"><?php echo $this->lang->line('Print') ?></button>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<div class="row">
	<?php echo form_open('', 'class="form-horizontal" onsubmit="return false" id="dtAdvFltrs"') ?>
	<div class="col-sm-5">
		<div class="form-group">
			<label class="control-label col-sm-6"><?php echo $this->lang->line('Dispatch_Date_Filter') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('date', '', 'class="form-control" id="date" autocomplete="off"') ?>
			</div>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<div class="col-sm-12">
				<?php echo form_submit('search', 'Filter', ' class="btn btn-primary"') ?>
			</div>
		</div>
	</div>
	<?php echo form_close() ?>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="pickupTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
    <thead>
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
        <?php foreach ($records as $record) { ?>
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
        <?php } ?>
    </tbody>
</table>