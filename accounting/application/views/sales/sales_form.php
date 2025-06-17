<?php
// var_dump($_SESSION);
// exit;
?>
<?php
$selected_gateway = $this->Transaction->get_field('payment_method_gateway');
$selected_status = $this->Transaction->get_field('payment_method_gateway_status');
$is_cod = ($selected_gateway === 'C.O.D');

$is_success_paymet_wish = ($selected_gateway == "whish" && $selected_status == "Payment successful");
?>
<p class="text-right">
	<?php echo anchor('delivery_notes/preview/' . $this->Transaction->get_field('id'), $this->lang->line('Delivery_Note'), 'accesskey="b" class="btn btn-primary btndnote" id="dnbtn"') ?>
	<?php echo anchor('sales/invoice_preview/' . $this->Transaction->get_field('id'), $this->lang->line('Print_Invoice'), 'class="btn btn-primary btnprinteri"  id="invoice_print"') ?>
	<?php echo anchor('sales/preview/' . $this->Transaction->get_field('id'), $this->lang->line('Print_waybil'), 'class="btn btn-primary"  id="print"') ?>
	<?php echo anchor('sales/wakilni_preview/' . $this->Transaction->get_field('id'), $this->lang->line('Print_wakilni'), 'class="btn btn-primary btnprinter"  id="wakilni_print"') ?>
	<button accesskey="b" class="btn btn-primary" id="bgback"><?php echo $this->lang->line('Back') ?></button>
</p>
<?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form" onsubmit="return validation();" autocomplete="off" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Transaction->get_field('id') ?>" />
<input name="user_permission" id="user_permission" type="hidden" value="<?php echo $profit_permission ?>" />
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
			<label class="col-sm-4 control-label" for="auto_no"><?php echo $this->lang->line('Tracking') ?> #</label>
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
			<label class="col-sm-6 control-label" for="currency_id"><?php echo $this->lang->line('currency') ?></label>
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
				echo form_input('trans[currency_rate]', $this->Transaction->get_field('currency_rate'), 'id="currency_rate" class="form-control" required'),
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
				<?php echo $this->lang->line('Customer_Account') ?>
			</label>
			<div class="col-sm-8">
				<?php echo form_input('', $account, 'id="acctLkupTo" maxlength="100" class="form-control"') ?>
				<div class="input-group-addon">
					<button type="button" id="add_acc_modal" class="form_small_btns"><i class="glyphicon glyphicon-plus text-yellow"></i></button>
					<button type="button" id="edit_acc_modal" class="form_small_btns"><i class="glyphicon glyphicon-pencil text-yellow"></i></button>
				</div>
				<input name="trans[account_id]" value="<?php echo $this->Transaction->get_field('account_id') ?>" id="account_id" type="hidden" />
				<div id="error_acctLkupTo" style="text-align:center" onclick="document.getElementById('error_acctLkupTo').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="acctLkupFrom">
				<?php echo $this->lang->line('Sales_Account') ?>
			</label>
			<div class="col-sm-8">
				<?php echo form_input('', $account2, 'id="acctLkupFrom" maxlength="100" class="form-control" readonly="true"') ?>
				<input name="trans[account2_id]" value="<?php echo $this->Transaction->get_field('account2_id') ?>" id="account2_id" type="hidden" />
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
			<label class="col-sm-6 control-label" for="value_date"><?php echo $this->lang->line('Dispatch_Date') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('trans[value_date]', $value_date, 'id="value_date" class="form-control"'), $this->Transaction->get_error('value_date')
				?>
				<div id="error_value_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="driver_id">
				<?php echo $this->lang->line('Select_Driver') ?>
			</label>
			<div class="col-sm-6">
				<?php echo form_dropdown('driver_list', $drivers, $this->Transaction->get_field('driver_id'), 'id="driver_list" class="form-control"') ?>
				<input name="trans[driver_id]" value="<?php echo $this->Transaction->get_field('driver_id') ?>" id="driver_id" type="hidden" />
				<div id="error_driver_id" style="text-align:center" onclick="document.getElementById('error_driver_id').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="employee_id">
				<?php echo $this->lang->line('Select_Employee') ?>
			</label>
			<div class="col-sm-6">
				<?php echo form_dropdown('employee_list', $employees, $this->Transaction->get_field('employee_id'), 'id="employee_list" class="form-control"') ?>
				<input name="trans[employee_id]" value="<?php echo $this->Transaction->get_field('employee_id') ?>" id="employee_id" type="hidden" />
				<div id="error_employee_id" style="text-align:center" onclick="document.getElementById('error_employee_id').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="source"><?php echo $this->lang->line('source') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_dropdown('trans[source]', $sources, $this->Transaction->get_field('source'), 'id="source" class="form-control"')
				?>
				<div id="error_source" style="text-align:center" onclick="document.getElementById('error_source').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="status2"><?php echo $this->lang->line('status') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_dropdown('trans[status2]', $status2, $this->Transaction->get_field('status2'), 'id="status2" class="form-control"')
				?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="payment_method"><?php echo $this->lang->line('payment_currency') ?></label>
			<div class="col-sm-8">
				<?php
				echo form_dropdown('trans[payment_method]', $payment_method, $this->Transaction->get_field('payment_method'), 'id="payment_method" class="form-control"')
				?>
			</div>
		</div>
	</div>


	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="try_on"><?php echo 'Try On' ?></label>
			<div class="col-sm-6">
				<?php
				echo form_dropdown('trans[try_on]', $try_on_list, $try_on, 'id="try_on" class="form-control"')
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="exchange"><?php echo 'Exchange' ?></label>
			<div class="col-sm-6">
				<?php
				echo form_dropdown('trans[exchange]', $exchange_list, $exchange, 'id="exchange" class="form-control"')
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="payment_method_gateway"><?php echo $this->lang->line('payment_method') ?></label>
			<div class="col-sm-8">
				<?php
				echo form_dropdown(
					'trans[payment_method_gateway]',
					$payment_method_gateway,
					$selected_gateway,
					'id="payment_method_gateway" class="form-control" ' . ( $is_success_paymet_wish ? 'disabled' : '')
				);
				?>
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="payment_method_gateway_status"><?php echo $this->lang->line('payment_status') ?></label>
			<div class="col-sm-8">
				<?php
				echo form_dropdown(
					'trans[payment_method_gateway_status]',
					$payment_method_gateway_status,
					$selected_status,
					'id="payment_method_gateway_status" class="form-control" ' . (($is_cod || $is_success_paymet_wish) ? 'disabled' : '')
				);
				?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="itemLookup"><?php echo $this->lang->line('Select_Item') ?></label>
			<div class="col-sm-8">
				<?php echo form_input('', '', 'id="itemLookup" class="form-control" required') ?>
				<div class="input-group-addon">
					<button type="button" id="add_item_modal" class="form_small_btns"><i class="glyphicon glyphicon-plus text-yellow"></i></button>
					<!-- <button type="button" id="edit_item_modal"><i class="glyphicon glyphicon-pencil text-yellow"></i></button> -->
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="description"><?php echo $this->lang->line('Description') ?></label>
			<div class="col-sm-6">
				<?php echo form_textarea('trans[description]', $this->Transaction->get_field('description'), 'id="description" class="form-control" style="height:100px;"') ?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="delivery_note"><?php echo $this->lang->line('Delivery_Note') ?></label>
			<div class="col-sm-6">
				<?php echo form_textarea('trans[delivery_note]', $this->Transaction->get_field('delivery_note'), 'id="delivery_note" class="form-control" style="height:100px;"') ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-12 table-responsive">
		<table class="table table-bordered table-condensed table-striped table-hover">
			<thead>
				<tr class="form_table_head">
					<th><?php echo $this->lang->line('Delete') ?></th>
					<th><?php echo $this->lang->line('Description') ?></th>
					<th><?php echo $this->lang->line('Barcode') ?></th>
					<th><?php echo $this->lang->line('Warehouse') ?></th>
					<th><?php echo $this->lang->line('Shelf') ?></th>
					<th><?php echo $this->lang->line('Sizes') ?></th>
					<th><?php echo $this->lang->line('Quantity') ?></th>
					<th><?php echo $this->lang->line('Price') ?></th>
					<th><?php echo $this->lang->line('Discount') ?></th>
					<?php if ($_SESSION['vauth_user_type'] == "Admin") {
					?>
						<th><?php echo $this->lang->line('Profit') ?></th>
					<?php } ?>

					<th class="text-right"><?php echo $this->lang->line('Total') ?></th>
				</tr>
			</thead>
			<tbody id="transactionLines">
				<?php
				$this->load->view('sales/edit_sale_form_items_line', ['transItems' => isset($trans_items) ? $trans_items : []]);
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
		<div class="col-sm-2">
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
				<label class="col-sm-6 control-label" for="delivery_charge"><?php echo $this->lang->line('delivery_charge') ?></label>
				<div class="col-sm-6">
					<?php
					echo form_dropdown('trans[delivery_charge]', $delivery_charge, $this->Transaction->get_field('delivery_charge'), 'id="delivery_charge" class="form-control"')
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="form-group">
				<label class="col-sm-4 control-label" for="final_total"><?php echo $this->lang->line('Total') ?></label>
				<div class="col-sm-8">
					<?php
					echo form_input('trans[final_total]', '', 'id="final_total" class="form-control" readonly="true"')
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="form-group">
				<label class="col-sm-4 control-label" for="final_qty"><?php echo $this->lang->line('Qty') ?></label>
				<div class="col-sm-8">
					<?php
					echo form_input('trans[final_qty]', '', 'id="final_qty" class="form-control" readonly="true"')
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-2" id="div_profit">
			<div class="form-group">
				<label class="col-sm-4 control-label" for="final_profit"><?php echo $this->lang->line('Profit') ?></label>
				<div class="col-sm-8">
					<?php
					echo form_input('trans[final_profit]', '', 'id="final_profit" class="form-control" readonly="true"')
					?>
				</div>
			</div>
		</div>
		<?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php echo form_close() ?>
<script type="text/javascript">
	const ItemLineTpl = <?php echo json_encode($this->load->view('sales/sales_form_items_line', [], true)) ?>;
</script>
<!-- Account Form Modal -->
<?php
$this->load->view('accounts/modal_form');
?>
<!-- Item Form Modal -->
<?php
$this->load->view('items/modal_form');
?>