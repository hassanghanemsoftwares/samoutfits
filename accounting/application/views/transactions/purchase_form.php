<p class="text-right">
	<button accesskey="b" class="btn btn-primary" id="bgback"><?php echo $this->lang->line('Back') ?></button>
	<?php echo anchor('purchases/preview/' . $this->Transaction->get_field('id'), $this->lang->line('Print'), 'accesskey="p" class="btn btn-primary"  id="print"') ?>
	<?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form"  onsubmit="return validation();" autocomplete="off" novalidate') ?>
	<input name="id" id="id" type="hidden" value="<?php echo $this->Transaction->get_field('id') ?>" />
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-3">
			<h4><?php echo $transTypeText ?></h4>
			<hr />
		</div>
		<div class="col-sm-1">
			<input type='hidden' value='0' name='trans[status]'>
			<input name="trans[status]" value='1' type="checkbox" style="transform: scale(1.5);" id="status" class="input.i-status" <?php echo ($status == 1 ? 'checked' : ''); ?>>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="auto_no"><?php echo $this->lang->line('Purchase') ?> #</label>
			<div class="col-sm-8">
				<?php
				echo form_input('trans[auto_no]', $this->Transaction->get_field('auto_no'), 'id="auto_no" class="form-control" readonly="true" required '),
				$this->Transaction->get_error('auto_no')
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="currency_id"><?php echo $this->lang->line('purchase_currency') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_dropdown('currency_id_list', $currenciesList, $this->Transaction->get_field('currency_id'), 'id="currency_id_list" class="form-control"'),
				$this->Transaction->get_error('currency_id');
				?>
				<input name="trans[currency_id]" id="currency_id" type="hidden" value="<?php echo $this->Transaction->get_field('currency_id') ?>" />
				<div id="error_currency_id" style="text-align:center" onclick="document.getElementById('error_currency_id').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="currency_rate"><?php echo $this->lang->line('Currency_Rate') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_input('trans[currency_rate]', $this->Transaction->get_field('currency_rate'), 'id="currency_rate" class="form-control" required '),
				$this->Transaction->get_error('currency_rate')
				?>
				<div id="error_currency_rate" style="text-align:center" onclick="document.getElementById('error_currency_rate').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="acctLkupTo">
			<?php echo $this->lang->line('Supplier_Account') ?>
			</label>
			<div class="col-sm-8">
				<?php echo form_input('', $account, 'id="acctLkupTo" maxlength="10" class="form-control"') ?>
				<div class="input-group-addon">
					<button type="button" id="add_acc_modal"><i class="glyphicon glyphicon-plus text-yellow"></i></button>
					<button type="button" id="edit_acc_modal"><i class="glyphicon glyphicon-pencil text-yellow"></i></button>
				</div>
				<input name="trans[account_id]" type="hidden" value="<?php echo $this->Transaction->get_field('account_id') ?>" id="account_id" />
				<div id="error_acctLkupTo" style="text-align:center" onclick="document.getElementById('error_acctLkupTo').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="acctLkupFrom">
			<?php echo $this->lang->line('Purchases_Account') ?>
			</label>
			<div class="col-sm-8">
				<?php echo form_input('', $account2, 'id="acctLkupFrom" maxlength="10" class="form-control" readonly="true"') ?>
				<input name="trans[account2_id]" type="hidden" value="<?php echo $this->Transaction->get_field('account2_id') ?>" id="account2_id" />
				<div id="error_acctLkupFrom" style="text-align:center" onclick="document.getElementById('error_acctLkupFrom').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="trans_date"><?php echo $this->lang->line('Date') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('trans[trans_date]', $trans_date, 'id="trans_date" class="form-control" required'), $this->Transaction->get_error('trans_date')
				?>
				<div id="error_trans_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="value_date"><?php echo $this->lang->line('Due_Date') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('trans[value_date]', $value_date, 'id="value_date" class="form-control"'), $this->Transaction->get_error('value_date')
				?>
				<div id="error_value_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="form-group">
			<label class="col-sm-3 control-label" for="description"><?php echo $this->lang->line('Description') ?></label>
			<div class="col-sm-9">
				<?php echo form_textarea('trans[description]', $this->Transaction->get_field('description'), 'id="description" class="form-control" style="height:100px;"') ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="op_nb"><?php echo $this->lang->line('OP_nb') ?></label>
			<div class="col-sm-8">
				<?php
				echo form_input('trans[op_nb]', $this->Transaction->get_field('op_nb'), 'id="op_nb" class="form-control" required '),
				$this->Transaction->get_error('op_nb')
				?>
				<div id="error_op_nb" style="text-align:center" onclick="document.getElementById('error_op_nb').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="form-group">
			<label class="col-sm-3 control-label" for="itemLookup"><?php echo $this->lang->line('Select_Item') ?></label>
			<div class="col-sm-9">
				<?php echo form_input('', '', 'id="itemLookup" class="form-control" required') ?>
				<div class="input-group-addon">
					<button type="button" id="add_item_modal"><i class="glyphicon glyphicon-plus text-yellow"></i></button>
					<!-- <button type="button" id="edit_item_modal"><i class="glyphicon glyphicon-pencil text-yellow"></i></button> -->
				</div>
			</div>
		</div>
	</div>
	
	<div id="table-scroll-y" class="col-sm-12 table-responsive">
		<table id="table-fixed" class="table table-bordered table-condensed table-striped table-hover">
			<thead>
				<tr class="form_table_head">
					<th><?php echo $this->lang->line('Delete') ?></th>
					<th><?php echo $this->lang->line('Description') ?></th>
					<th><?php echo $this->lang->line('Barcode') ?></th>
					<th><?php echo $this->lang->line('Warehouse') ?></th>
					<th><?php echo $this->lang->line('Shelf') ?></th>
					<th><?php echo $this->lang->line('Qty') ?></th>
					<?php if ($sizes[0] !== '') {
						foreach ($sizes as $s) { ?>
							<th><?php echo $s ?></th>
					<?php }
					} ?>
					<th><?php echo $this->lang->line('Total_Qty') ?></th>
					<th><?php echo $this->lang->line('Unit_Cost') ?></th>
					<th><?php echo $this->lang->line('Extra_Cost') ?></th>
					<th><?php echo $this->lang->line('Discount') ?></th>
					<th class="text-center"><?php echo $this->lang->line('Net_Cost') ?></th>
					<th class="text-right"><?php echo $this->lang->line('Total') ?></th>
				</tr>
			</thead>
			<tbody id="transactionLines">
				<?php
				$this->load->view('transactions/edit_purhcase_form_items_line', ['transItems' => isset($trans_items) ? $trans_items : []]);
				?>
			</tbody>
		</table>
		<div id="error_transactionLines" style="text-align:center" onclick="document.getElementById('error_transactionLines').style.display = 'none'"></div>
	</div>
	<div class="col-sm-12 text-right">
		<div class="col-sm-3">
			<div class="form-group">
				<label class="col-sm-6 control-label" for="sub_total"><?php echo $this->lang->line('Subtotal') ?></label>
				<div class="col-sm-6">
					<?php
					echo form_input('trans[sub_total]', '', 'id="sub_total" class="form-control" readonly="true"')
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label class="col-sm-6 control-label" for="discount"><?php echo $this->lang->line('Discount') ?></label>
				<div class="col-sm-6">
					<?php
					echo form_input('trans[discount]', $this->Transaction->get_field('discount'), 'id="disc" class="form-control" required'),
					$this->Transaction->get_error('discount')
					?>
					<div id="error_disc" style="text-align:center" onclick="document.getElementById('error_disc').style.display = 'none'"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label class="col-sm-6 control-label" for="final_total"><?php echo $this->lang->line('Total') ?></label>
				<div class="col-sm-6">
					<?php
					echo form_input('trans[final_total]', '', 'id="final_total" class="form-control" readonly="true"')
					?>
				</div>
			</div>
		</div>
		<?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"') ?>
	</div>
</div>
<?php echo form_close() ?>
<script type="text/javascript">
	const ItemLineTpl = <?php echo json_encode($this->load->view('transactions/purhcase_form_items_line', [], true)) ?>;
</script>
<!-- Account Form Modal -->
<?php
$this->load->view('accounts/modal_form');
?>
<!-- Item Form Modal -->
<?php
$this->load->view('items/modal_form');
?>