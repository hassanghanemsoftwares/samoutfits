<?php if ($this->session->flashdata('msg')) { ?>
    <div id="message" class="alert alert-success" style="text-align:center; margin:0;" onclick="document.getElementById('message').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('msg') ?></strong>
    </div>
<?php } ?>
<?php if ($this->session->flashdata('error_msg')) { ?>
    <div id="error_message" class="alert alert-danger" style="text-align:center; margin:0;" onclick="document.getElementById('error_message').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('error_msg') ?></strong>
    </div>
<?php } ?>
<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item">Account</span>
                <span class="breadcrumb-item active"><?php echo $this->lang->line('change_password') ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <div class="bg-light p-30">
                <div class="col-lg-12">
                    <center>
                        <h4 style="margin-bottom: 15px;">Change Your Password</h4>
                    </center>
                    <?php echo form_open('accounts/confirm_user_change_password', 'id="addressForm" name="addressForm" onsubmit="return validation();" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Current_password') ?>" name="current_pass" id="current_password">
                        <span id='msg_current_password'></span>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <div class="input-group mb-1">
                                <input type="password" class="form-control" id="new_password" name="new_password" value="" placeholder="<?php echo $this->lang->line('new_password') ?>" required="required" data-validation-required-message="Please Enter password" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="show_hide_password_btn1" type="button"><i id="show_hide_password_i1" class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <span id='msg_new_password'></span>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-0">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <div class="input-group mb-1">
                                <input type="password" class="form-control" id="confirm_password" value="" placeholder="Repeat Password" required="required" data-validation-required-message="Please Repeat password" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="show_hide_password_btn2" type="button"><i id="show_hide_password_i2" class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <span id='msg_confirm_password'></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3" id="submit_btn"><?php echo $this->lang->line('Submit') ?></button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>