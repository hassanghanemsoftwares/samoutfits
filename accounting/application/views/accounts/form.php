<style>
	#bs-select-2,
	#bs-select-3 {
		max-height: 300px !important;
	}
</style>

<p class="text-right" id="listbtn">
	<?php echo anchor('accounts/index', $this->lang->line('Back'), 'accesskey="b" class="btn btn-primary " id="bgback"') ?>
</p>
<h3 style="text-align: center;"><strong><?php echo $title ?></strong></h3>
<?php echo form_open('', 'id="accountForm" name="accountForm" class="form-horizontal" role="form" onsubmit="return validation();" autocomplete="off" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Account->get_field('id') ?>" />
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="account_type"><?php echo $this->lang->line('account_type') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_dropdown('account_type', $account_type, $this->Account->get_field('account_type'), 'id="account_type" class="form-control"'),
			$this->Account->get_error('account_type');
			?>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="account_name"><?php echo $this->lang->line('account_name') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('account_name', $this->Account->get_field('account_name'), 'id="account_name" maxlength="255" class="form-control" required'),
			$this->Account->get_error('account_name')
			?>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="account_number"><?php echo $this->lang->line('account_number') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('account_number', $this->Account->get_field('account_number'), 'id="account_number" class="form-control" required readonly'),
			$this->Account->get_error('account_number')
			?>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="country"><?php echo $this->lang->line('country') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_dropdown('country', '', $this->Account->get_field('country'), 'id="country" maxlength="255" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" data-default="' . $country . '"'),
			$this->Account->get_error('country')
			?>
			<div id="error_country" style="text-align:center" onclick="document.getElementById('error_country').style.display = 'none'"></div>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="currency_id"><?php echo $this->lang->line('currency_type') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_dropdown('currency_id', $currenciesList, $currency_id, 'id="currency_id" class="form-control"'),
			$this->Account->get_error('currency_id');
			?>
			<div id="error_currency_id" style="text-align:center" onclick="document.getElementById('error_currency_id').style.display = 'none'"></div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="city"><?php echo $this->lang->line('city') ?></label>
		<div class="col-sm-7">
			<input type="text" list="cities" id="city" name="city" value="<?php echo  $this->Account->get_field('city') ?>" class="form-control" />
			<datalist id="cities">
			</datalist>
			<div id="error_city" style="text-align:center" onclick="document.getElementById('error_city').style.display = 'none'"></div>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="opening_date"><?php echo $this->lang->line('opening_date') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('opening_date', $opening_date, 'id="opening_date" class="form-control" required'),
			$this->Account->get_error('opening_date')
			?>
			<div id="error_date" style="text-align:center" onclick="document.getElementById('error_date').style.display = 'none'"></div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="place"><?php echo $this->lang->line('place') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('place', $this->Account->get_field('place'), 'id="place" maxlength="255" class="form-control"'),
			$this->Account->get_error('place')
			?>
			<div id="error_place" style="text-align:center" onclick="document.getElementById('error_place').style.display = 'none'"></div>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="open_balance"><?php echo $this->lang->line('open_balance') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('open_balance', $open_balance, 'id="open_balance" class="form-control"'),
			$this->Account->get_error('open_balance')
			?>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="street"><?php echo $this->lang->line('street') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('street', $this->Account->get_field('street'), 'id="street" maxlength="255" class="form-control"'),
			$this->Account->get_error('street')
			?>
			<div id="error_street" style="text-align:center" onclick="document.getElementById('error_street').style.display = 'none'"></div>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="email"><?php echo $this->lang->line('email') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('email', $this->Account->get_field('email'), 'id="email" maxlength="255" class="form-control"'),
			$this->Account->get_error('email')
			?>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="building"><?php echo $this->lang->line('building') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('building', $this->Account->get_field('building'), 'id="building" maxlength="255" class="form-control"'),
			$this->Account->get_error('building')
			?>
		</div>
	</div>

</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="phone"><?php echo $this->lang->line('mobile_1') ?></label>
		<div class="col-sm-7">
			<div style="display: flex;">
				<div class="drop_country" style="width: 40%;">
					<?php
					echo form_dropdown('country_phone', '', $this->Account->get_field('country'), 'id="country_phone" data-countryCode="true" data-showCode="true" style="max-height: 300px !important;" maxlength="255" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" '),  //data-default="' . $country . '"
					$this->Account->get_error('country')
					?>
				</div>
				<div style="width:60%;">
					<?php
					echo form_input('phone', $this->Account->get_field('phone'), 'id="phone" maxlength="255" class="form-control"  pattern=" /^[+]{1}(?:[0-9\-\(\)\/\.]\s?){6, 15}[0-9]{1}$/"');
					?>
				</div>
			</div>

			<?php
			$this->Account->get_error('phone')
			?>
			<div id="error_phone" style="text-align:center" onclick="document.getElementById('error_phone').style.display = 'none'"></div>
		</div>
	</div>

	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="floor"><?php echo $this->lang->line('floor') ?></label>
		<div class="col-sm-7">
			<?php
			echo form_input('floor', $this->Account->get_field('floor'), 'id="floor" maxlength="255" class="form-control"'),
			$this->Account->get_error('floor')
			?>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="phone2"><?php echo $this->lang->line('mobile_2') ?></label>
		<div class="col-sm-7">
			<div style="display: flex;">
				<div style="width: 40%;">
					<?php
					echo form_dropdown('country_phone2', '', $this->Account->get_field('country'), 'id="country_phone2" data-countryCode="true" data-showCode="true" style="max-height: 300px !important;" maxlength="255" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" '), //data-default="' . $country . '"
					$this->Account->get_error('country')
					?>
				</div>
				<div style="width:60%;">
					<!-- <input type="tel" name="phone2" value="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="phone2" maxlength="255" class="form-control"> -->
					<?php
					echo form_input('phone2', $this->Account->get_field('phone2'), 'id="phone2" maxlength="255" class="form-control"  pattern=" /^[+]{1}(?:[0-9\-\(\)\/\.]\s?){6, 15}[0-9]{1}$/"');

					?>
				</div>
			</div>
			<?php
			// echo form_input('phone2', $this->Account->get_field('phone2'), 'id="phone2" maxlength="255" class="form-control"'),
			$this->Account->get_error('phone2')
			?>
			<div id="error_phone2" style="text-align:center" onclick="document.getElementById('error_phone2').style.display = 'none'"></div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<label class="col-sm-5 control-label" for="description">Direction</label>
		<div class="col-sm-7">
			<?php echo form_textarea('description', $this->Account->get_field('description'), 'id="description" class="form-control" style="height:100px;"') ?>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
		<img src="<?php echo site_url('assets/images/tick.png') ?>" style="height:25px; width:25px; margin-left:25px; position:absolute; margin-top:11px;"> <?php echo form_submit('submitBtn', $this->lang->line('save'), 'id="savebtn" class="btn btn-primary" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>
<?php
echo form_close();
?>

<!-- example cities -->
<!-- <select name="country" class="countries order-alpha presel-LB" id="countryId">
	<option value="">Select Country</option>
</select>
<select name="state" class="states order-alpha" id="stateId">
	<option value="">Select State</option>
</select>
<select name="city" class="cities order-alpha" id="cityId">
	<option value="">Select City</option>
</select>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script> -->