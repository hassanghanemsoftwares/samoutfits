<p class="text-right">
	<?php echo anchor('currencies/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback" ') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-3">
		<h4><?php echo $title ?></h4>
		<hr />
	</div>
</div>
<?php echo form_open('', 'class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Currency->get_field('id') ?>" />
<div class="form-group">
	<label class="col-sm-4 control-label" for="currency_name"><?php echo $this->lang->line('currency_name') ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('currency_name', $this->Currency->get_field('currency_name'), 'id="currency_name" maxlength="255" class="form-control" required'),
		$this->Currency->get_error('currency_name')
		?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label" for="currency_code"><?php echo $this->lang->line('currency_code') ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('currency_code', $this->Currency->get_field('currency_code'), 'id="currency_code" maxlength="3" class="form-control" required'),
		$this->Currency->get_error('currency_code')
		?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label" for="currency_rate"><?php echo $this->lang->line('currency_rate') ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('currency_rate', $this->Currency->get_field('currency_rate'), 'id="currency_rate" class="form-control" required'),
		$this->Currency->get_error('currency_rate')
		?>
		<div id="error_trans_date" style="text-align: left; color: white; background-color: #808080; border-color: #404040; padding: 7px; border-radius:5px;" onclick="document.getElementById('error_trans_date').style.display = 'none'">
			<strong>
				<p><?php echo $this->lang->line('Example') ?>:</p>
				<p><?php echo $this->lang->line('If_System_Currency') ?>: Dollar</p>
				<p><?php echo $this->lang->line('To_calculate_currency_rate_in') ?> Euro:</p>
				<p>1$ ----> 0.85€</p>
				<p><?php echo $this->lang->line('Then_currency_rate') ?> = 0.85</p>
			</strong>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
		<?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php
echo form_close();
