<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p id="user_id" hidden><?php echo $this->violet_auth->get_user_id() ?></p>
<?php echo form_open_multipart('', 'role="form" class="form-horizontal" id="frmConfigurations" autocomplete="off" accept-charset="UTF-8"') ?>
<div class="row">
	<div class="col-sm-6">
		<h4 class="h4 margin-thin text-center text-danger">* <?php echo $this->lang->line('Company_Info') ?> *</h4>
		<hr class="margin-thin" />
		<?php
		foreach ($configSet1 as $conf) :
			echo $conf;
		endforeach;
		?>
	</div>
	<div class="col-sm-6">
		<h4 class="h4 margin-thin text-center text-danger">* <?php echo $this->lang->line('Settings') ?> *</h4>
		<hr class="margin-thin" />
		<?php
		foreach ($configSet2 as $conf) :
			echo $conf;
		endforeach;
		?>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-6">
			<h4 class="h4 margin-thin text-center text-danger">* <?php echo $this->lang->line('Variables') ?> *</h4>
			<hr class="margin-thin" />
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="categories_tags"><?php echo $this->lang->line('categories') ?></label>
			<div class="col-sm-9">
				<input type="text" name="categories_tags" id="categories_tags" class="form-control">
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="sub_categories_tags"><?php echo $this->lang->line('sub_categories') ?></label>
			<div class="col-sm-9">
				<input type="text" name="sub_categories_tags" id="sub_categories_tags" class="form-control">
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="sizes_tags"><?php echo $this->lang->line('sizes') ?></label>
			<div class="col-sm-9">
				<input type="text" name="sizes_tags" id="sizes_tags" class="form-control">
			</div>
		</div>
		<!-- </div>
	<div class="col-sm-12"> -->
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="status"><?php echo $this->lang->line('status') ?></label>
			<div class="col-sm-9">
				<input type="text" name="status_tags" id="status_tags" class="form-control">
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="source"><?php echo $this->lang->line('source') ?></label>
			<div class="col-sm-9">
				<input type="text" name="source_tags" id="source_tags" class="form-control">
			</div>
		</div>
		<!-- </div>
	<div class="col-sm-12"> -->
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="delivery_charge"><?php echo $this->lang->line('delivery_charge') ?></label>
			<div class="col-sm-9">
				<input type="text" name="delivery_charge_tags" id="delivery_charge_tags" class="form-control">
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="colors"><?php echo $this->lang->line('colors') ?></label>
			<div class="col-sm-9">
				<input type="text" name="colors_tags" id="colors_tags" class="form-control">
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label class="col-sm-3 control-label" for="size_guidances"><?php echo $this->lang->line('size_guidances') ?></label>
			<div class="col-sm-9">
				<input type="text" name="size_guidances_tags" id="size_guidances_tags" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group col-sm-12">
			<label for="whatsapp_order_confirmation_msg" class="col-sm-2 control-label">
				<i class="fa fa-whatsapp text-success"></i> WhatsApp Template
			</label>
			<div class="col-sm-10">
				<textarea name="variables[whatsapp_order_confirmation_msg]" id="whatsapp_order_confirmation_msg" rows="8" class="form-control" style="white-space: pre-wrap; font-family: monospace;" placeholder="Enter your WhatsApp message template here..."><?php echo htmlspecialchars($whatsapp_order_confirmation_msg); ?></textarea>
				<small class="help-block text-muted">
					Use placeholders like <code>{{customer_name}}</code>, <code>{{order_value}}</code>, <code>{{tracking_nb}}</code>.<br>
					Emojis and links are supported. Example: 👋 🛒 <br>
					You can include links like: <code>https://samoutfits.com/products/view/2333</code>
				</small>
				<button type="button" id="copyBtn">Copy Message Template</button>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="form-group">
			<div class="col-sm-offset-6 col-sm-5">
				<?php
				echo form_submit('saveConfigurations', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" ');
				?>
			</div>
		</div>
	</div>


</div>
<?php
echo form_close();
