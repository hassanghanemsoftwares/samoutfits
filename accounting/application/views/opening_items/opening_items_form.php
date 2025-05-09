<p class="text-right">
	<button onclick="AddItem()" class="btn btn-primary" id="bgadd">Add Item</button>
	<?php echo anchor('opening_items/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
	<?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form"  onsubmit="return validation();" novalidate') ?>
	<input name="id" id="id" type="hidden" value="<?php echo $this->Transaction->get_field('id') ?>" />
<div class="row">
	<div class="col-sm-12">
		<h4><?php echo $transTypeText ?></h4>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="auto_no">Opening Items #</label>
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
			<label class="col-sm-3 control-label" for="trans_date">Date</label>
			<div class="col-sm-6">
				<?php echo form_input('trans[trans_date]', $this->Transaction->get_field('trans_date'), 'id="trans_date" class="form-control" required'), $this->Transaction->get_error('trans_date')
				?>
				<div id="error_trans_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="itemLookup">Select Item</label>
			<div class="col-sm-6">
				<?php echo form_input('', '', 'id="itemLookup" class="form-control" required') ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-12 table-responsive">
		<table class="table table-bordered table-condensed table-striped table-hover">
			<thead>
				<tr class="danger">
					<th class="col-sm-1">Delete</th>
					<th class="col-sm-1">Barcode</th>
					<th class="col-sm-1">Item Name</th>
					<th class="col-sm-2">Warehouse</th>
					<th class="col-sm-2">Shelf</th>
					<th>Qty</th>
					<?php if ($sizes[0] !== '') {
						foreach ($sizes as $s) { ?>
							<th><?php echo $s ?></th>
					<?php }
					} ?>
					<th class="col-sm-1">Open Qty</th>
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