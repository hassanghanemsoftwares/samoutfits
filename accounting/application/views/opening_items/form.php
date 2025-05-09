<?php if ($this->session->flashdata('message_op')) { ?>
	<div id="save_msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('save_msg').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_op') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
	<button accesskey="b" class="btn btn-primary" id="bgback"><?php echo $this->lang->line('Back') ?></button>
	<?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form"  onsubmit="return validation();" novalidate') ?>
	<input name="id" id="id" type="hidden" value="<?php echo $this->Transaction->get_field('id') ?>" />
    <input name="item_id" id="item_line_id" type="hidden" value="<?php echo $item_id ?>" />
<div class="row">
	<div class="col-sm-12">
		<h4><?php echo $transTypeText ?></h4>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="auto_no"><?php echo $this->lang->line('Opening_Items') ?> #</label>
			<div class="col-sm-6">
				<?php
				echo form_input('trans[auto_no]', $this->Transaction->get_field('auto_no'), 'id="auto_no" class="form-control" readonly="true" required '),
				$this->Transaction->get_error('auto_no')
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="col-sm-3 control-label" for="trans_date"><?php echo $this->lang->line('Date') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('trans[trans_date]', $trans_date, 'id="trans_date" class="form-control" required'), $this->Transaction->get_error('trans_date')
				?>
				<div id="error_trans_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<div class="col-sm-2 col-sm-offset-2">
                <button id="addline" class="btn btn-primary"><?php echo $this->lang->line('Add_Line') ?></button>
            </div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-12 table-responsive">
		<table class="table table-bordered table-condensed table-striped table-hover">
			<thead>
				<tr class="danger">
					<th><?php echo $this->lang->line('Delete') ?></th>
					<th><?php echo $this->lang->line('Barcode') ?></th>
					<th><?php echo $this->lang->line('Name') ?></th>
					<th><?php echo $this->lang->line('Warehouse') ?></th>
					<th><?php echo $this->lang->line('Shelf') ?></th>
					<th><?php echo $this->lang->line('Qty') ?></th>
					<?php if($sizes[0] !== ''){ foreach ($sizes as $s) { ?>
						<th><?php echo $s ?></th>
					<?php }} ?>
					<th class="col-sm-1"><?php echo $this->lang->line('Open_Qty') ?></th>
				</tr>
			</thead>
			<tbody id="transactionLines">
				<?php
				$this->load->view('opening_items/edit_opening_items_form_items_line', ['transItems' => isset($trans_items) ? $trans_items : []]);
				?>
			</tbody>
		</table>
		<div id="error_transactionLines" style="text-align:center" onclick="document.getElementById('error_transactionLines').style.display = 'none'"></div>
	</div>
	<div class="col-sm-12 text-right">
	 <?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php echo form_close() ?>
<script type="text/javascript">
	const ItemLineTpl = <?php echo json_encode($this->load->view('opening_items/opening_items_form_items_line', [], true)) ?>;
</script>