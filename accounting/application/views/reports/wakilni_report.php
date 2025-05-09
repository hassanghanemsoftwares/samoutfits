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
				<?php echo form_submit('search', $this->lang->line('Filter'), ' class="btn btn-primary"') ?>
			</div>
		</div>
	</div>
	<?php echo form_close() ?>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="wakilniTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('recipient_name') ?></th>
            <th><?php echo $this->lang->line('email') ?></th>
            <th><?php echo $this->lang->line('recipient_number') ?></th>
            <th><?php echo $this->lang->line('area') ?></th>
            <th><?php echo $this->lang->line('floor') ?></th>
            <th><?php echo $this->lang->line('building') ?></th>
            <th><?php echo $this->lang->line('directions') ?></th>
            <th><?php echo $this->lang->line('cash_collection') ?></th>
            <th><?php echo $this->lang->line('currency') ?></th>
            <th><?php echo $this->lang->line('collection_in_either_currencies') ?></th>
            <th><?php echo $this->lang->line('package_type') ?></th>
            <th><?php echo $this->lang->line('package_quantity') ?></th>
            <th><?php echo $this->lang->line('waybill_#') ?></th>
            <th><?php echo $this->lang->line('notes') ?></th>
            <th><?php echo $this->lang->line('try_on') ?></th>
            <th><?php echo $this->lang->line('EX') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['account_name'] ?></td>
                <td><?php echo $record['email'] ?></td>
                <td><?php echo $record['phone'] ?></td>
                <td><?php echo $record['city'] ?></td>
                <td><?php echo $record['floor'] ?></td>
                <td><?php echo $record['building'] ?></td>
                <td><?php echo $record['direction'] ?></td>
                <td><?php echo $record['total'] ?></td>
                <td><?php echo $record['currency_code'] ?></td>
                <td><?php echo $record['method'] ?></td>
                <td><?php echo $record['package_type'] ?></td>
                <td><?php echo $record['package_qty'] ?></td>
                <td><?php echo $record['auto_no'] ?></td>
                <td><?php echo $record['delivery_note'] ?></td>
                <td><?php echo $record['try_on'] ?></td>
                <td><?php echo $record['exchange'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>