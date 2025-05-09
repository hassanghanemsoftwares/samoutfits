<?php if ($this->session->flashdata('message_error')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_error') ?></strong>
	</div>
<?php } ?>
<?php if ($this->session->flashdata('message_success')) { ?>
	<div id="delete_ignore" class="alert alert-success" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_success') ?></strong>
	</div>
<?php } ?>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
	<input type="text" id="user_type" value="<?php echo $this->violet_auth->get_user_type() ?>" hidden>
	<div class="col-sm-8">
		<p class="text-right">
			<button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
		</p>
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-12 form-group">
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="category_filter">Category</label>
			<div class="col-sm-8">
				<?php echo form_dropdown('category_filter', $categories, '', 'id="category_filter" class="form-control input-sm"') ?>
			</div>
		</div>
	</div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="warehousesTbl" data-num-rows="<?php echo $this->Warehouse->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('barcode') ?></th>
			<th><?php echo $this->lang->line('description') ?></th>
			<th><?php echo $this->lang->line('category') ?></th>
			<th><?php echo $this->lang->line('sizes') ?></th>
			<th><?php echo $this->lang->line('warehouse') ?></th>
			<th><?php echo $this->lang->line('shelf') ?></th>
			<th data-no-search="0"><?php echo $this->lang->line('qty') ?></th>
			<th data-no-search="0"><?php echo $this->lang->line('price') ?></th>
			<th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['barcode'] ?></td>
				<td><?php echo $record['description'] ?></td>
				<td><?php echo $record['category'] ?></td>
				<td><?php echo $record['size'] ?></td>
				<td><?php echo $record['warehouse'] ?></td>
				<td><?php echo $record['shelf'] ?></td>
				<td><?php echo $record['total_qty'] ?></td>
				<td><?php echo $record['price_ttc'] ?></td>
				<td><?php echo $record['item_id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<!-- Adjust Modal -->
<div id="itemAdjustModalForm" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">
					<legend>Adjust Product</legend>
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-8">
						<h4 id="adjust_product_data"></h4>
						<hr>
					</div>
				</div>
				<?php echo form_open('adjusts/save', 'id="adjustForm" class="form-horizontal" onsubmit="return adjustvalidate();" role="form" novalidate') ?>
				<input type="text" name="item_id" id="adjust_item_id" hidden>
				<input type="text" name="size" id="adjust_size" hidden>
				<input type="text" name="warehouse" id="adjust_warehouse" hidden>
				<input type="text" name="shelf" id="adjust_shelf" hidden>
				<div class="row">
					<div class="form-group col-md-6">
						<label class="col-md-2 control-label" for="old_qty">Old Qty</label>
						<div class="col-md-10">
							<?php
							echo form_input('old_qty', '', 'id="old_qty" class="form-control" readonly="true"')
							?>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-md-2 control-label" for="new_qty">New Qty</label>
						<div class="col-md-10">
							<?php
							echo form_input('new_qty', 0, 'id="new_qty" class="form-control"')
							?>
							<div id="error_adjust_old_qty" style="text-align:center" onclick="document.getElementById('error_adjust_old_qty').style.display = 'none'"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Transfer Modal -->
<div id="itemTransferModalForm" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">
					<legend>Transfer Product</legend>
				</h4>
			</div>
			<div class="modal-body">
				<?php echo form_open('transfers/add_new_transfer', 'id="transferForm" class="form-horizontal" onsubmit="return transfervalidate();" role="form"') ?>
				<input type="text" name="item_id" id="transfer_item_id" hidden>
				<input type="text" name="warehouse" id="transfer_warehouse" hidden>
				<input type="text" name="shelf" id="transfer_shelf" hidden>
				<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-12">
						<label class="col-md-12" for="transfer_item">Description</label>
						<div class="col-md-12">
							<?php
							echo form_input('transfer_item', '', 'id="transfer_item" class="form-control input-sm" readonly="true"')
							?>
						</div>
					</div>
				</div>
				<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-6">
						<label class="col-md-12" for="transfer_barcode">Barcode</label>
						<div class="col-md-12">
							<?php
							echo form_input('transfer_barcode', '', 'id="transfer_barcode" class="form-control input-sm" readonly="true"')
							?>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-md-12" for="transfer_size">Size</label>
						<div class="col-md-12">
							<?php
							echo form_input('transfer_size', '', 'id="transfer_size" class="form-control input-sm" readonly="true"')
							?>
						</div>
					</div>
				</div>
				<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-6">
						<label class="col-md-12" for="current_warehouse">Current Warehouse</label>
						<div class="col-md-12">
							<?php
							echo form_input('current_warehouse', '', 'id="transfer_current_warehouse" class="form-control input-sm" readonly="true"')
							?>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-md-12" for="current_qty">Current Qty</label>
						<div class="col-md-12">
							<?php
							echo form_input('current_qty', '', 'id="transfer_current_qty" class="form-control input-sm" readonly="true"')
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="col-md-12" for="new_warehouse">New Warehouse</label>
						<div class="col-md-12">
							<?php
							echo form_dropdown('new_warehouse', $w_s_list, '', 'id="transfer_new_warehouse" class="form-control input-sm" required')
							?>
							<div id="error_transfer_new_warehouse" style="text-align:center" onclick="document.getElementById('error_transfer_new_warehouse').style.display = 'none'"></div>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-md-12" for="new_qty">Transfer Qty</label>
						<div class="col-md-12">
							<input type="number" name="transfer_qty" id="transfer_qty" class="form-control input-sm" value="0" required>
							<div id="error_transfer_qty" style="text-align:center" onclick="document.getElementById('error_transfer_qty').style.display = 'none'"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>