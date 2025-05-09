<div id="AccountFormModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="accModalLabel"><?php echo $this->lang->line('Add_Account') ?></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('', 'id="accountForm" name="accountForm" class="form-horizontal" role="form" onsubmit="return AccountModalValidation();" autocomplete="off" novalidate') ?>
				<input name="id" id="acc_id" type="hidden" value="" />
				<input class="form_type" type="hidden" value="" />

				<div class="row">
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="account_type"><?php echo $this->lang->line('account_type') ?></label>
						<div class="col-md-8">
							<?php
							echo form_dropdown('account_type', $account_type, '', 'id="account_type" class="form-control"')
							?>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="account_name"><?php echo $this->lang->line('account_name') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('account_name', '', 'id="account_name" maxlength="255" class="form-control" required')
							?>
							<div id="error_account_name" style="text-align:center" onclick="document.getElementById('error_account_name').style.display = 'none'"></div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="account_number"><?php echo $this->lang->line('account_number') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('account_number', '', 'id="account_number" class="form-control" required readonly')
							?>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="country"><?php echo $this->lang->line('country') ?></label>
						<div class="col-md-8">
							<?php
							echo form_dropdown('country', '', '', 'id="country" maxlength="255" class="selectpicker countrypicker form-control" data-flag="true" data-default="LB" data-live-search="true"')
							?>
							<!-- <select class="selectpicker countrypicker" data-flag="true"></select> -->
							<div id="error_country" style="text-align:center" onclick="document.getElementById('error_country').style.display = 'none'"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="currency_id"><?php echo $this->lang->line('currency_type') ?></label>
						<div class="col-md-8">
							<?php
							echo form_dropdown('currency_id', $currenciesList, '', 'id="acc_currency_id" class="form-control"')
							?>
							<div id="error_acc_currency_id" style="text-align:center" onclick="document.getElementById('error_acc_currency_id').style.display = 'none'"></div>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="city"><?php echo $this->lang->line('city') ?></label>
						<div class="col-md-8">
							<input type="text" list="cities" id="city" name="city" class="form-control" />
							<datalist id="cities">
							</datalist>
							<div id="error_city" style="text-align:center" onclick="document.getElementById('error_city').style.display = 'none'"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="col-md-4" style="text-align: left;" for="opening_date"><?php echo $this->lang->line('opening_date') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('opening_date', date("d-m-Y"), 'id="opening_date" class="form-control" required')
							?>
							<div id="error_date" style="text-align:center" onclick="document.getElementById('error_date').style.display = 'none'"></div>
						</div>
					</div>
					<div class=" col-md-6">
						<label class="col-md-4" style="text-align: left;" for="place"><?php echo $this->lang->line('place') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('place', '', 'id="place" maxlength="255" class="form-control"')
							?>
							<div id="error_place" style="text-align:center" onclick="document.getElementById('error_place').style.display = 'none'"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class=" col-md-6">
						<label class="col-md-4" style="text-align: left;" for="open_balance"><?php echo $this->lang->line('open_balance') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('open_balance', 0, 'id="open_balance" class="form-control"')
							?>
						</div>
					</div>
					<div class=" col-md-6">
						<label class="col-md-4" style="text-align: left;" for="street"><?php echo $this->lang->line('street') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('street', '', 'id="street" maxlength="255" class="form-control"')
							?>
							<div id="error_street" style="text-align:center" onclick="document.getElementById('error_street').style.display = 'none'"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class=" col-md-6">
						<label class="col-md-4" style="text-align: left;" for="email"><?php echo $this->lang->line('email') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('email', '', 'id="email" maxlength="255" class="form-control"')
							?>
						</div>
					</div>
					<div class=" col-md-6">
						<label class="col-md-4" style="text-align: left;" for="building"><?php echo $this->lang->line('building') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('building', '', 'id="building" maxlength="255" class="form-control"')
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label class="col-md-4 control-label" style="text-align: left;" for="phone"><?php echo $this->lang->line('mobile_1') ?></label>
						<div class="col-sm-8">
							<div style="display: flex;">
								<div class="drop_country" style="width: 40%;">
									<?php
									echo form_dropdown('country_phone', '', '', 'id="country_phone" data-countryCode="true" data-showCode="true" style="max-height: 300px !important;" maxlength="255" class="selectpicker countrypicker form-control country_phone" data-live-search="true" data-flag="true" ');
									?>
								</div>
								<div style="width:60%;">
									<?php
									echo form_input('phone', '', 'id="phone" maxlength="255" class="form-control i-phone"')
									?>
								</div>
							</div>

							<?php

							?>
							<div id="error_phone" style="text-align:center" onclick="document.getElementById('error_phone').style.display = 'none'"></div>
						</div>
					</div>
					<div class=" col-md-6">
						<label class="col-md-4" style="text-align: left;" for="floor"><?php echo $this->lang->line('floor') ?></label>
						<div class="col-md-8">
							<?php
							echo form_input('floor', '', 'id="floor" maxlength="255" class="form-control"')
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class=" col-md-6">
						<label class="col-md-4 control-label" style="text-align: left;" for="phone2"><?php echo $this->lang->line('mobile_2') ?></label>
						<div class="col-md-8">
							<div style="display: flex;">
								<div style="width: 40%;">
									<?php
									echo form_dropdown('country_phone2', '', '', 'id="country_phone2" data-countryCode="true" data-showCode="true" style="max-height: 300px !important;" maxlength="255" class="selectpicker countrypicker form-control country_phone2" data-live-search="true" data-flag="true" '); //data-default="' . $country . '"

									?>
								</div>
								<div style="width:60%;">
									<?php
									echo form_input('phone2', '', 'id="phone2" maxlength="255" class="form-control"')
									?>
								</div>

							</div>
							<div id="error_phone2" style="text-align:center" onclick="document.getElementById('error_phone2').style.display = 'none'"></div>

						</div>
					</div>
					<div class=" col-md-6">
						<label class="col-md-4" for="description">Direction</label>
						<div class="col-md-8">
							<?php echo form_textarea('description', '', 'id="description1" class="form-control" style="height:100px;"') ?>
						</div>
					</div>
				</div>
				<?php
				echo form_close();
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="save_acc" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>