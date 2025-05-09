<p class="text-right">
	<?php echo anchor('fiscal_years/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-3">
		<h4><?php echo $title ?></h4>
		<hr />
	</div>
</div>
<?php echo form_open('', 'id="fiscalYearForm" class="form-horizontal" role="form" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Fiscal_year->get_field('id') ?>" />
<div class="form-group">
	<label class="col-sm-4 control-label" for="year_name"><?php echo $this->lang->line('Name'); ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('year_name', $this->Fiscal_year->get_field('year_name'), 'autofocus id="year_name" maxlength="255" class="form-control" required'),
		$this->Fiscal_year->get_error('year_name')
		?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label" for="start_date"><?php echo $this->lang->line('start_date'); ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('start_date', $this->Fiscal_year->get_field('start_date'), 'id="start_date" class="form-control" required'),
		$this->Fiscal_year->get_error('start_date')
		?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label" for="end_date"><?php echo $this->lang->line('end_date'); ?></label>
	<div class="col-sm-4">
		<?php echo form_input('end_date', $this->Fiscal_year->get_field('end_date'), 'id="end_date" class="form-control" required'), $this->Fiscal_year->get_error('end_date')
		?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4 text-right">
		<?php
		echo form_submit('submitBtn', $this->lang->line('Save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'); ?>
		<?php
		echo form_reset('reset', $this->lang->line('Reset'), 'class="btn btn-primary" id="bgreset"')
		?>
	</div>
</div>
<?php
echo form_close();
