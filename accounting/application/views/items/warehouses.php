<p class="text-right">
	<?php echo anchor('items/index', $this->lang->line('Back'), 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<h3> &nbsp; <strong><?php echo $item ?></strong> </h3>
<fieldset style="background-color: #eeeeee;">
	<center>
		<legend><?php echo $this->lang->line('Transfer_Products') ?></legend>
	</center>
	<input name="item_id" id="item_id" type="hidden" value="<?php echo $item_id ?>" />
	<input name="max_qty" id="max_qty" type="hidden" />

	<?php echo form_open('items/transfer/' . $item_id, 'id="transferform" name="transferform" class="form-horizontal" role="form" onsubmit="return validate();" autocomplete="off" novalidate') ?>
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label class="col-sm-2 control-label" for="from"><?php echo $this->lang->line('from') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_dropdown('from', $warehouses_shelfs, '', 'id="from" class="form-control"')
				?>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label class="col-sm-2 control-label" for="sizes"><?php echo $this->lang->line('sizes') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_dropdown('sizes', '', '', 'id="sizes" class="form-control"')
				?>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label class="col-sm-2 control-label" for="qty"><?php echo $this->lang->line('qty') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_input('qty', '', 'id="qty" class="form-control"')
				?>
				<div id="error_qty" style="text-align:center" onclick="document.getElementById('error_qty').style.display = 'none'"></div>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label class="col-sm-2 control-label" for="to"><?php echo $this->lang->line('to') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_dropdown('to', $all_warehouses_shelfs, '', 'id="to" class="form-control"')
				?>
				<div id="error_to" style="text-align:center" onclick="document.getElementById('error_to').style.display = 'none'"></div>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label class="col-sm-2 control-label" for="cost"><?php echo $this->lang->line('cost') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_input('cost', 0, 'id="cost" class="form-control"')
				?>
				<div id="error_cost" style="text-align:center" onclick="document.getElementById('error_cost').style.display = 'none'"></div>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label class="col-sm-2 control-label" for="trans_date">Date</label>
			<div class="col-sm-10">
				<?php echo form_input('trans_date', date("d-m-Y"), 'id="trans_date" class="form-control" required')
				?>
				<div id="error_trans_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
		<div class="col-sm-2 col-sm-offset-9">
			<input type="submit" value="Transfer" class="btn btn-danger"> <br /><br />
		</div>
	</div>
	<?php echo form_close() ?>
</fieldset>
<br />
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="activityitemTbl" data-num-rows="<?php echo $this->Item->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('warehouse'); ?></th>
			<th><?php echo $this->lang->line('shelf'); ?></th>
			<th><?php echo $this->lang->line('size'); ?></th>
			<th><?php echo $this->lang->line('qty'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['warehouse'] ?></td>
				<td><?php echo $record['shelf'] ?></td>
				<td><?php echo $record['size'] ?></td>
				<td><?php echo $record['qty'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>