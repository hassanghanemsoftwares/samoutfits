<?php echo form_open('', 'id="choose_f_year" class="form-horizontal" role="form" novalidate') ?>
<div class="form-group">
	<label class="col-sm-4 control-label" for="fiscal_year_id"><?php echo $this->lang->line('select_fiscal_year'); ?></label>
	<div class="col-sm-4">
		<?php echo form_dropdown('fiscal_year_id', $fiscal_year, $this->violet_auth->get_fiscal_year_id(), ' id="fiscal_year_id" class="form-control"') ?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
		 <?php echo form_submit('submitBtn', $this->lang->line('ok'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php
echo form_close();
