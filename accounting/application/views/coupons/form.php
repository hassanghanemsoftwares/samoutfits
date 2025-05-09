<?php if ($this->session->flashdata('message_success')) { ?>
    <div id="save_msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('save_msg').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message_success') ?></strong>
    </div>
<?php } ?>
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <?php echo anchor('ecommerce/coupons', 'Back', 'accesskey="b"  class="btn btn-primary" id="bgback"') ?>
        </p>
    </div>
</div>
<?php echo form_open('', 'id="couponsform" name="couponsform" class="form-horizontal" role="form" autocomplete="off" onsubmit="return validation();" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Coupon->get_field('id') ?>" />
<input type="text" id="old_coupon" value="<?php echo $this->Coupon->get_field('coupon') ?>" hidden>
<div class="row" id="form_div">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="coupon"><?php echo $this->lang->line('coupon_code') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_input('coupon', $this->Coupon->get_field('coupon'), 'id="coupon" maxlength="255" class="form-control" required')
                ?>
                <div id="error_coupon" style="text-align:center" onclick="document.getElementById('error_coupon').style.display = 'none'"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="customer"><?php echo $this->lang->line('select_customer') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_input('customer', $customer_selected, 'id="customer" class="form-control"')
                ?>
                <input type="text" name="customer_id" id="customer_id" value="<?php echo $this->Coupon->get_field('customer_id') ?>" hidden>
                <div id="error_customer_id" style="text-align:center" onclick="document.getElementById('error_customer_id').style.display = 'none'"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="expiry_date"><?php echo $this->lang->line('expiry_date') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_input('expiry_date', $this->Coupon->get_field('expiry_date'), 'id="expiry_date" class="form-control"')
                ?>
                <div id="error_expiry_date" style="text-align:center" onclick="document.getElementById('error_expiry_date').style.display = 'none'"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="amount"><?php echo $this->lang->line('amount') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_input('amount', $this->Coupon->get_field('amount'), 'id="amount" class="form-control"')
                ?>
                <div id="error_amount" style="text-align:center" onclick="document.getElementById('error_amount').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="discount_type"><?php echo $this->lang->line('discount_type') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_dropdown('discount_type', $discount_type, $this->Coupon->get_field('discount_type'), 'id="discount_type" class="form-control"')
                ?>
                <div id="error_discount_type" style="text-align:center" onclick="document.getElementById('error_discount_type').style.display = 'none'"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="limited"><?php echo $this->lang->line('limitation') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_dropdown('limited', $limited_list, $this->Coupon->get_field('limited'), 'id="limited" class="form-control"')
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="usage_times"><?php echo $this->lang->line('usage_times') ?></label>
            <div class="col-sm-6">
                <?php
                echo form_input('usage_times', $this->Coupon->get_field('usage_times'), 'id="usage_times" class="form-control"')
                ?>
                <div id="error_usage_times" style="text-align:center" onclick="document.getElementById('error_usage_times').style.display = 'none'"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s" value="upload"') ?>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>