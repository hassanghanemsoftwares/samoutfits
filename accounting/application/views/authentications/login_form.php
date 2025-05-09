<?php echo form_open('authentications/authenticate', 'id="authenticationslogin" class="form-horizontal" role="form" novalidate') ?>
<div class="form-group">
	<label class="col-sm-4 control-label" for="user_name"><?php echo 'username' ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('user_name_login', $this->Authentication->get_field('user_name_login'), 'id="user_name_login" maxlength="255" class="form-control" required'),
		$this->Authentication->get_error('user_name_login')
		?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label" for="user_password_login"><?php echo 'password' ?></label>
	<div class="col-sm-4">
		<?php
		echo form_input('user_password_login', $this->Authentication->get_field('user_password_login'), 'id="user_password_login" maxlength="255" class="form-control" required'),
		$this->Authentication->get_error('user_password_login')
		?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
	<?php echo form_submit('submitBtn', 'login', 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php
echo form_close();