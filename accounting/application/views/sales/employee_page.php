<?php if ($this->session->flashdata('message')) { ?>
	<div id="msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('msg').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
	<button type="button" id="bulk" class="btn btn-primary"><?php echo $this->lang->line('Bulk_Actions') ?></button>
</p>
<h3><?php echo $this->lang->line('Employee_Page') ?></h3>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="salesTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('invoice_number') ?></th>
			<th><?php echo $this->lang->line('customer_account') ?></th>
			<th><?php echo $this->lang->line('customer_number') ?></th>
			<th><?php echo $this->lang->line('transaction_date') ?></th>
			<th><?php echo $this->lang->line('dispatch_date') ?></th>			
			<th><?php echo $this->lang->line('status') ?></th>
			<th><?php echo $this->lang->line('delivery') ?></th>
			<th><?php echo $this->lang->line('cash_date') ?></th>
			<th><?php echo $this->lang->line('return_date') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['auto_no'] ?></td>				
				<td><?php echo $record['account1'] ?></td>
				<td><?php echo $record['account_number1'] ?></td>
				<td><?php echo $record['trans_date'] ?></td>
				<td><?php echo $record['value_date'] ?></td>
				<td><?php echo $record['status2'] ?></td>
				<td><?php echo $record['driver'] ?></td>
				<td><?php echo $record['cash_date'] ?></td>
				<td><?php echo $record['return_date'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<!-- Large modal -->
<div id="bulk_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo $this->lang->line('Bulk_Actions') ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div>
					<div class="col-sm-12">
						<div class="col-sm-5 col-sm-offset-1">
							<div class="form-group">
								<label class="col-sm-3 control-label" for="status2"><?php echo $this->lang->line('status') ?></label>
								<div class="col-sm-7">
									<?php
									echo form_dropdown('status2', $status2, '', 'id="status2" class="form-control"')
									?>
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label class="col-sm-3 control-label" for="driver"><?php echo $this->lang->line('Delivery') ?></label>
								<div class="col-sm-7">
									<?php echo form_dropdown('driver', $drivers, '', 'id="driver" class="form-control"') ?>
								</div>
							</div>
						</div>
					</div>
					<br><br><br>
					<div class="col-sm-12">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="value_date"><?php echo $this->lang->line('Dispatch_Date') ?></label>
								<div class="col-sm-8">
									<?php echo form_input('value_date', '', 'id="value_date" class="form-control"') ?>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="cash_date"><?php echo $this->lang->line('Cash_Date') ?></label>
								<div class="col-sm-8">
									<?php echo form_input('cash_date', '', 'id="cash_date" class="form-control"') ?>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="return_date"><?php echo $this->lang->line('Return_Date') ?></label>
								<div class="col-sm-8">
									<?php echo form_input('return_date', '', 'id="return_date" class="form-control"') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br><br><br>
				<table id="table_bulk" class="table table-bordered table-striped table-hover table-condensed table-responsive"></table>
				<table id="table_bulk_ids" class="table table-bordered table-striped table-hover table-condensed table-responsive" hidden></table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="bulk_submit"><?php echo $this->lang->line('Submit') ?></button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
			</div>
		</div>
	</div>
</div>
