<div class="row">
	<div class="col-sm-8">
		<?php echo form_open('', 'class="form-horizontal" onsubmit="return false" id="dtAdvFltrs"') ?>
		<div class="col-sm-10">
			<div class="form-group">
				<label class="control-label col-sm-3"><?php echo $this->lang->line('Multi_tracking_nb') ?></label>
				<div class="col-sm-9">
					<?php echo form_input('multi_auto_no', '', ' placeholder="ex: 1,2,3" class="form-control" id="multi_auto_no"') ?>
				</div>
			</div>
		</div>
		<div class="col-sm-1">
			<button type="submit" name="search" id="filter" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-filter"></i></button>
		</div>
		<?php echo form_close() ?>
		<div class="col-sm-1">
		<button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="col-sm-6 form-group">
			<?php echo anchor('accounts/search', 'Accounts', 'class="btn btn-primary" id="bgsearch" ') ?>
		</div>
		<div class="col-sm-6 form-group">
			<button type="button" id="bulk" class="btn btn-primary btnbulk"><?php echo $this->lang->line('Bulk_Actions') ?></button>
		</div>
	</div>
</div>
<!-- <p class="text-right">


</p> -->
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4">
			<h4><strong><?php echo $title ?></strong></h4>
			<hr>
		</div>
	</div>
</div>
<!-- <div class="row">
</div> -->
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="salesTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
	<thead>
		<tr>
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
		<?php foreach ($records as $record) { ?>
			<tr <?php echo ($record['trans_type'] === "EX") ? "style='color: #820707;'" : "" ?>>
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
	<tr>
		<td colspan="6"></td>
		<td style="font-weight: bold; color:black;" id="subtotal"></td>
		<td style="font-weight: bold; color:black;" id="delivery_charge"></td>
		<td style="font-weight: bold; color:black;" id="total"></td>
		<td colspan="6"></td>
	</tr>
</table>
<!-- Large modal -->
<div id="bulk_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><strong><?php echo $this->lang->line('Bulk_Actions') ?></strong></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div>
					<div class="col-sm-12">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="status2"><?php echo $this->lang->line('status') ?></label>
								<div class="col-sm-8">
									<?php
									echo form_dropdown('status2', $status2, '', 'id="status2" class="form-control"')
									?>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="driver"><?php echo $this->lang->line('Delivery') ?></label>
								<div class="col-sm-8">
									<?php echo form_dropdown('driver', $drivers, '', 'id="driver" class="form-control"') ?>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="value_date"><?php echo $this->lang->line('Dispatch_Date') ?></label>
								<div class="col-sm-8">
									<?php echo form_input('value_date', '', 'id="value_date" class="form-control"') ?>
								</div>
							</div>
						</div>
					</div>
					<br><br><br>
					<div class="col-sm-12">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="receipt"><?php echo $this->lang->line('Receipts') ?></label>
								<div class="col-sm-8">
									<input type="checkbox" id="receipt" value="1">
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
				<div class="col-sm-12">

					<?php echo form_open('', 'id="BulkPrintForm" name="BulkPrintForm" role="form" autocomplete="off" novalidate') ?>
					<div class="col-sm-3 col-sm-offset-1">
						<input type="text" name="all_ids" id="all_ids" hidden>
						<button type="submit" class="btn btn-primary" id="bulk_print" onclick='this.form.action="sales/bulk_preview";'><?php echo $this->lang->line('Print_All_Private') ?></button>
					</div>
					<div class="col-sm-3">
						<button type="submit" class="btn btn-primary" id="bulk_wakilni_print" onclick='this.form.action="sales/bulk_wakilni_preview";'><?php echo $this->lang->line('Print_All_Wakilni') ?></button>
					</div>
					<?php echo form_close() ?>
					<div class="col-sm-3">
						<button type="button" class="btn btn-primary" id="bulk_submit"><?php echo $this->lang->line('Submit') ?></button>
					</div>
					<div class="col-sm-2">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>