<p class="text-right">
	<?php echo anchor('users/index', $this->lang->line('Back'), 'accesskey="b" class="btn btn-primary"  id="bgback" ') ?>
</p>
<?php echo form_open('', 'id="userForm" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
<div class="col-sm-12">
	<div class="col-sm-3">
		<h4><?php echo $title ?></h4>
		<hr />
	</div>
	<div class="col-sm-3">
		<label for="" class="col-sm-4"><?php echo $this->lang->line('Hide') ?></label>
		<div>
			<input type='hidden' value='0' name='hide'>
			<input name="hide" value='1' type="checkbox" style="transform: scale(1.5);" id="hide">
		</div>
	</div>
</div>
<input name="id" id="id" type="hidden" value="<?php echo $this->User->get_field('id') ?>" />

<div class="col-sm-6">
	<div class="form-group">
		<label class="col-sm-4 control-label" for="user_name"><?php echo $this->lang->line('Username') ?></label>
		<div class="col-sm-8">
			<?php
			echo form_input('user_name', $this->User->get_field('user_name'), 'id="user_name" maxlength="255" class="form-control" required'),
			$this->User->get_error('user_name')
			?>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 control-label" for="user_email"><?php echo $this->lang->line('Email') ?></label>
		<div class="col-sm-8">
			<?php
			echo form_input('user_email', $this->User->get_field('user_email'), 'id="user_email" maxlength="255" class="form-control" required'),
			$this->User->get_error('user_email')
			?>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 control-label" for="user_type"><?php echo $this->lang->line('User_Type') ?></label>
		<div class="col-sm-8">
			<?php
			echo form_dropdown('user_type', $user_type, $this->User->get_field('user_type'), 'id="user_type" class="form-control" required'),
			$this->User->get_error('user_type');
			?>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 control-label" for="user_password"><?php echo $this->lang->line('Password') ?></label>
		<div class="col-sm-8">
			<div class="input-group" id="show_hide_password">
				<?php
				echo form_password('user_password', $this->User->decryptPass($this->User->get_field('user_password')), 'id="user_password" maxlength="255" class="form-control" required'),
				$this->User->get_error('user_password')
				?>
				<div class="input-group-addon">
					<a href=""><i class="glyphicon glyphicon-eye-close" style="color:#808080" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 control-label" for="fiscal_year_id"><?php echo $this->lang->line('Fiscal_Year') ?></label>
		<div class="col-sm-8">
			<?php
			echo form_dropdown('fiscal_year_id', $fiscal_year, $this->User->get_field('fiscal_year_id'), 'id="fiscal_year_id" class="form-control" required'),
			$this->User->get_error('fiscal_year_id');
			?>
		</div>
	</div>
</div>
<div class="col-sm-6" hidden>
	<h4><b><?php echo $this->lang->line('User_Permissions') ?>:</b></h4>
	<div class="col-sm-6">
		<input type="checkbox" id="permission0" name="permission0" value="accounts/index" <?php echo ($perm0 === "1") ?  'checked' : '' ?>>
		<label for="p0"><?php echo $this->lang->line('Accounts') ?></label><br>
		<input type="text" name="permissions[]" id="p0" value="<?php echo ($perm0 === "1") ?  "accounts/index" : '' ?>" hidden>

		<input type="checkbox" id="permission1" name="permission1" value="items/index" <?php echo ($perm1 === "1") ?  'checked' : '' ?>>
		<label for="p1"><?php echo $this->lang->line('Products') ?></label><br>
		<input type="text" name="permissions[]" id="p1" value="<?php echo ($perm1 === "1") ?  "items/index" : '' ?>" hidden>

		<input type="checkbox" id="permission2" name="permission2" value="opening_items/index" <?php echo ($perm2 === "1") ?  'checked' : '' ?>>
		<label for="p2"><?php echo $this->lang->line('Opening') ?></label><br>
		<input type="text" name="permissions[]" id="p2" value="<?php echo ($perm2 === "1") ?  "opening_items/index" : '' ?>" hidden>

		<input type="checkbox" id="permission3" name="permission3" value="missing_products/index" <?php echo ($perm3 === "1") ?  'checked' : '' ?>>
		<label for="p3"><?php echo $this->lang->line('Missing_Products') ?></label><br>
		<input type="text" name="permissions[]" id="p3" value="<?php echo ($perm3 === "1") ?  "missing_products/index" : '' ?>" hidden>

		<input type="checkbox" id="permission4" name="permission4" value="transfers/index" <?php echo ($perm4 === "1") ?  'checked' : '' ?>>
		<label for="p4"><?php echo $this->lang->line('Transfer') ?></label><br>
		<input type="text" name="permissions[]" id="p4" value="<?php echo ($perm4 === "1") ?  "transfers/index" : '' ?>" hidden>

		<input type="checkbox" id="permission5" name="permission5" value="warehouses/inventory" <?php echo ($perm5 === "1") ?  'checked' : '' ?>>
		<label for="p5"><?php echo $this->lang->line('Inventory') ?></label><br>
		<input type="text" name="permissions[]" id="p5" value="<?php echo ($perm5 === "1") ?  "warehouses/inventory" : '' ?>" hidden>

		<input type="checkbox" id="permission6" name="permission6" value="quotations/index" <?php echo ($perm6 === "1") ?  'checked' : '' ?>>
		<label for="p6"><?php echo $this->lang->line('Quotations') ?></label><br>
		<input type="text" name="permissions[]" id="p6" value="<?php echo ($perm6 === "1") ?  "quotations/index" : '' ?>" hidden>

		<input type="checkbox" id="permission7" name="permission7" value="orders/index" <?php echo ($perm7 === "1") ?  'checked' : '' ?>>
		<label for="p7"><?php echo $this->lang->line('Orders') ?></label><br>
		<input type="text" name="permissions[]" id="p7" value="<?php echo ($perm7 === "1") ?  "orders/index" : '' ?>" hidden>

		<input type="checkbox" id="permission8" name="permission8" value="sales/index" <?php echo ($perm8 === "1") ?  'checked' : '' ?>>
		<label for="p8"><?php echo $this->lang->line('Sales') ?></label><br>
		<input type="text" name="permissions[]" id="p8" value="<?php echo ($perm8 === "1") ?  "sales/index" : '' ?>" hidden>

		<input type="checkbox" id="permission9" name="permission9" value="delivery_notes/index" <?php echo ($perm9 === "1") ?  'checked' : '' ?>>
		<label for="p9"><?php echo $this->lang->line('Delivery_Notes') ?></label><br>
		<input type="text" name="permissions[]" id="p9" value="<?php echo ($perm9 === "1") ?  "delivery_notes/index" : '' ?>" hidden>

		<input type="checkbox" id="permission10" name="permission10" value="return_sales/index" <?php echo ($perm10 === "1") ?  'checked' : '' ?>>
		<label for="p10"><?php echo $this->lang->line('Return_Sales') ?></label><br>
		<input type="text" name="permissions[]" id="p10" value="<?php echo ($perm10 === "1") ?  "return_sales/index" : '' ?>" hidden>

		<input type="checkbox" id="permission11" name="permission11" value="sales/receive_cash" <?php echo ($perm11 === "1") ?  'checked' : '' ?>>
		<label for="p11"><?php echo $this->lang->line('Receive_Cash') ?></label><br>
		<input type="text" name="permissions[]" id="p11" value="<?php echo ($perm11 === "1") ?  "sales/receive_cash" : '' ?>" hidden>

		<input type="checkbox" id="permission12" name="permission12" value="order_purchases/index" <?php echo ($perm12 === "1") ?  'checked' : '' ?>>
		<label for="p12"><?php echo $this->lang->line('Order_Purchases') ?></label><br>
		<input type="text" name="permissions[]" id="p12" value="<?php echo ($perm12 === "1") ?  "order_purchases/index" : '' ?>" hidden>

		<input type="checkbox" id="permission13" name="permission13" value="purchases/index" <?php echo ($perm13 === "1") ?  'checked' : '' ?>>
		<label for="p13"><?php echo $this->lang->line('Purchases') ?></label><br>
		<input type="text" name="permissions[]" id="p13" value="<?php echo ($perm13 === "1") ?  "purchases/index" : '' ?>" hidden>
	</div>
	<div class="col-sm-6">
		<input type="checkbox" id="permission14" name="permission14" value="return_purchases/index" <?php echo ($perm14 === "1") ?  'checked' : '' ?>>
		<label for="p14"><?php echo $this->lang->line('Return_Purchases') ?></label><br>
		<input type="text" name="permissions[]" id="p14" value="<?php echo ($perm14 === "1") ?  "return_purchases/index" : '' ?>" hidden>

		<input type="checkbox" id="permission15" name="permission15" value="payments/index" <?php echo ($perm15 === "1") ?  'checked' : '' ?>>
		<label for="p15"><?php echo $this->lang->line('Payments') ?></label><br>
		<input type="text" name="permissions[]" id="p15" value="<?php echo ($perm15 === "1") ?  "payments/index" : '' ?>" hidden>

		<input type="checkbox" id="permission16" name="permission16" value="receipts/index" <?php echo ($perm16 === "1") ?  'checked' : '' ?>>
		<label for="p16"><?php echo $this->lang->line('Receipts') ?></label><br>
		<input type="text" name="permissions[]" id="p16" value="<?php echo ($perm16 === "1") ?  "receipts/index" : '' ?>" hidden>

		<input type="checkbox" id="permission17" name="permission17" value="journal_accounts/index" <?php echo ($perm17 === "1") ?  'checked' : '' ?>>
		<label for="p17"><?php echo $this->lang->line('Journals_Report') ?></label><br>
		<input type="text" name="permissions[]" id="p17" value="<?php echo ($perm17 === "1") ?  "journal_accounts/index" : '' ?>" hidden>

		<input type="checkbox" id="permission18" name="permission18" value="warehouses/reports" <?php echo ($perm18 === "1") ?  'checked' : '' ?>>
		<label for="p18"><?php echo $this->lang->line('Warehouses_Report') ?></label><br>
		<input type="text" name="permissions[]" id="p18" value="<?php echo ($perm18 === "1") ?  "warehouses/reports" : '' ?>" hidden>

		<input type="checkbox" id="permission19" name="permission19" value="reports/wakilni_data" <?php echo ($perm19 === "1") ?  'checked' : '' ?>>
		<label for="p19"><?php echo $this->lang->line('Wakilni_Data_Report') ?></label><br>
		<input type="text" name="permissions[]" id="p19" value="<?php echo ($perm19 === "1") ?  "reports/wakilni_data" : '' ?>" hidden>

		<input type="checkbox" id="permission20" name="permission20" value="reports/daily_pickup" <?php echo ($perm20 === "1") ?  'checked' : '' ?>>
		<label for="p20"><?php echo $this->lang->line('Daily_Pickup_Report') ?></label><br>
		<input type="text" name="permissions[]" id="p20" value="<?php echo ($perm20 === "1") ?  "reports/daily_pickup" : '' ?>" hidden>

		<input type="checkbox" id="permission21" name="permission22" value="fiscal_years/index" <?php echo ($perm21 === "1") ?  'checked' : '' ?>>
		<label for="p21"><?php echo $this->lang->line('Fiscal_Years') ?></label><br>
		<input type="text" name="permissions[]" id="p21" value="<?php echo ($perm21 === "1") ?  "fiscal_years/index" : '' ?>" hidden>

		<input type="checkbox" id="permission22" name="permission22" value="currencies/index" <?php echo ($perm22 === "1") ?  'checked' : '' ?>>
		<label for="p22"><?php echo $this->lang->line('Currencies') ?></label><br>
		<input type="text" name="permissions[]" id="p22" value="<?php echo ($perm22 === "1") ?  "currencies/index" : '' ?>" hidden>

		<input type="checkbox" id="permission23" name="permission23" value="warehouses/index" <?php echo ($perm23 === "1") ?  'checked' : '' ?>>
		<label for="p23"><?php echo $this->lang->line('Warehouses') ?></label><br>
		<input type="text" name="permissions[]" id="p23" value="<?php echo ($perm23 === "1") ?  "warehouses/index" : '' ?>" hidden>

		<input type="checkbox" id="permission24" name="permission24" value="configurations/index" <?php echo ($perm24 === "1") ?  'checked' : '' ?>>
		<label for="p24"><?php echo $this->lang->line('Configurations') ?></label><br>
		<input type="text" name="permissions[]" id="p24" value="<?php echo ($perm24 === "1") ?  "configurations/index" : '' ?>" hidden>

		<input type="checkbox" id="permission25" name="permission25" value="users/index" <?php echo ($perm25 === "1") ?  'checked' : '' ?>>
		<label for="p25"><?php echo $this->lang->line('Users') ?></label><br>
		<input type="text" name="permissions[]" id="p25" value="<?php echo ($perm25 === "1") ?  "users/index" : '' ?>" hidden>

		<input type="checkbox" id="permission26" name="permission26" value="users/choose_fiscal_year" <?php echo ($perm26 === "1") ?  'checked' : '' ?>>
		<label for="p26"><?php echo $this->lang->line('Choose_Fiscal_Year') ?></label><br>
		<input type="text" name="permissions[]" id="p26" value="<?php echo ($perm26 === "1") ?  "users/choose_fiscal_year" : '' ?>" hidden>

		<input type="checkbox" id="permission27" name="permission27" value="profit" <?php echo ($perm27 === "1") ?  'checked' : '' ?>>
		<label for="p27"><?php echo $this->lang->line('Profit') ?></label><br>
		<input type="text" name="permissions[]" id="p27" value="<?php echo ($perm27 === "1") ?  "profit" : '' ?>" hidden>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
		<?php echo form_submit('', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</div>

<?php
echo form_close();
