<?php if ($this->session->flashdata('message_success')) { ?>
    <div id="save_msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('save_msg').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message_success') ?></strong>
    </div>
<?php } ?>
<?php if ($this->session->flashdata('message_error')) { ?>
	<div id="msg_error" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('msg_error').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_error') ?></strong>
	</div>
<?php } ?>
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <?php echo anchor('ecommerce/inbox', 'Back', 'accesskey="b"  class="btn btn-primary" id="bgback"') ?>
        </p>
    </div>
</div>
<?php echo form_open('', 'id="inboxform" name="inboxform" class="form-horizontal" role="form" autocomplete="off" onsubmit="return validation();" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $msg_id ?>" />
<div class="row" id="form_div">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="customer"><?php echo $this->lang->line('select_customer') ?></label>
        <div class="col-sm-5">
            <?php
            echo form_input('customer', $customer, 'id="customer" class="form-control"')
            ?>
            <input type="text" name="customer_id" id="customer_id" value="<?php echo $to_user_id ?>" hidden>
            <div id="error_customer_id" style="text-align:center" onclick="document.getElementById('error_customer_id').style.display = 'none'"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="subject"><?php echo $this->lang->line('subject') ?></label>
        <div class="col-sm-5">
            <?php
            echo form_input('subject', $subject, 'id="subject" class="form-control"')
            ?>
            <div id="error_subject" style="text-align:center" onclick="document.getElementById('error_subject').style.display = 'none'"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="message"><?php echo $this->lang->line('message') ?></label>
        <div class="col-sm-5">
            <?php
            echo form_textarea('message', $message, 'id="message" class="form-control"')
            ?>
            <div id="error_message" style="text-align:center" onclick="document.getElementById('error_message').style.display = 'none'"></div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-6 col-sm-5">
        <?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s" value="upload"') ?>
    </div>
</div>
<?php echo form_close() ?>