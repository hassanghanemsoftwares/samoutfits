<p class="text-right">
<?php echo anchor('receipts/preview/'.$this->Journal->get_field('id'), $this->lang->line('Print'), 'accesskey="p" class="btn btn-primary"  id="print"') ?>
	<?php echo anchor('receipts/index', $this->lang->line('Back'), 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
</p>
<?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form" onsubmit="return validation();" autocomplete="off" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Journal->get_field('id') ?>" />
<div class="row">
	<div class="col-sm-12">
		<h4><?php echo $transTypeText ?></h4>
		<hr />
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="auto_no"><?php echo $this->lang->line('Receipt') ?> #</label>
			<div class="col-sm-8">
				<?php
				echo form_input('trans[auto_no]', $this->Journal->get_field('auto_no'), 'id="auto_no" class="form-control" readonly="true" required '),
				$this->Journal->get_error('auto_no')
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="currency_id"><?php echo $this->lang->line('currency') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_dropdown('currency_id_list', $currenciesList, $this->Journal->get_field('currency_id'), 'id="currency_id_list" class="form-control"'),
				$this->Journal->get_error('currency_id');
				?>
				<input name="trans[currency_id]" id="currency_id" type="hidden" value="<?php echo $this->Journal->get_field('currency_id') ?>" />
				<div id="error_currency_id" style="text-align:center" onclick="document.getElementById('error_currency_id').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="currency_rate"><?php echo $this->lang->line('Currency_Rate') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_input('trans[currency_rate]', $this->Journal->get_field('currency_rate'), 'id="currency_rate" class="form-control" required'),
				$this->Journal->get_error('currency_rate')
				?>
				<div id="error_currency_rate" style="text-align:center" onclick="document.getElementById('error_currency_rate').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="acctLkupTo">
			<?php echo $this->lang->line('Account_From') ?>
			</label>
			<div class="col-sm-8">
				<?php echo form_input('', $account, 'id="acctLkupTo" maxlength="10" class="form-control"') ?>
				<input name="trans[account_id]" value="<?php echo $this->Journal->get_field('account_id') ?>" id="account_id" type="hidden" />
				<div id="error_acctLkupTo" style="text-align:center" onclick="document.getElementById('error_acctLkupTo').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="acctLkupFrom">
			<?php echo $this->lang->line('Account_To') ?>
			</label>
			<div class="col-sm-8">
				<?php echo form_input('', $account2, 'id="acctLkupFrom" maxlength="10" class="form-control"') ?>
				<input name="trans[account2_id]" value="<?php echo $this->Journal->get_field('account2_id') ?>" id="account2_id" type="hidden" />
				<div id="error_acctLkupFrom" style="text-align:center" onclick="document.getElementById('error_acctLkupFrom').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="journal_date"><?php echo $this->lang->line('Date') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('trans[journal_date]', $journal_date, 'id="journal_date" class="form-control" required'), $this->Journal->get_error('journal_date')
				?>
				<div id="error_trans_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-6 control-label" for="balance"><?php echo $this->lang->line('Balance') ?></label>
			<div class="col-sm-6">
				<?php echo form_input('trans[balance]', "0", 'id="balance"  class="form-control" readonly="true"')
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="form-group">
			<label class="col-sm-3 control-label" for="amount"><?php echo $this->lang->line('Amount') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_input('trans[amount]', $this->Journal->get_field('amount'), 'id="amount" class="form-control" style="border-color:grey;" required'),
				$this->Journal->get_error('currency_rate')
				?>
				<div id="error_amount" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label" for="description"><?php echo $this->lang->line('Description') ?></label>
			<div class="col-sm-8">
			<?php echo form_textarea('trans[description]', $this->Journal->get_field('description'), 'id="description" class="form-control" style="height:100px;"') ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-12 text-right">
		 <?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php echo form_close() ?>
<script type="text/javascript">
	const ItemLineTpl = <?php echo json_encode($this->load->view('transactions/purhcase_form_items_line', [], true)) ?>;
</script>