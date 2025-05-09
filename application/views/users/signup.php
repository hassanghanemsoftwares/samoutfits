<?php if ($this->session->flashdata('error_message')) { ?>
    <div id="error_message" class="alert alert-danger" style="text-align:center; margin:0;" onclick="document.getElementById('error_message').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('error_message') ?></strong>
    </div>
<?php } ?>
<!-- Breadcrumb Start -->
<div class="container-fluid mt-5">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Sign Up</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Contact Start -->
<!-- <div class="container-fluid">
        <div class="col-sm-8"> -->
<section class="mh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-10">
                <div class="card text-black">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-0 mt-4">Sign up</p>
                                <?php echo form_open('users/confirm', 'id="registerForm" name="registerForm" onsubmit="return validation();" class="mx-1 mx-md-4" role="form" autocomplete="off" novalidate') ?>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-flag fa-lg me-3 fa-fw" style="width: 10%;"></i>
                                    <div class="form-outline flex-fill mb-0" style="width: 60%;">
                                        <?php echo form_dropdown('country', '', '', 'id="country" class="selectpicker countrypicker form-control" disabled   data-live-search="true" data-flag="true" data-default="LB"') ?>
                                    </div>
                                    <!-- </div><div class="d-flex flex-row align-items-center mb-4"> -->
                                    <!-- <i class="fas fa-mobile fa-lg me-3 fa-fw"></i> -->
                                    <div class="form-outline flex-fill mb-0" style="width: 30%;">
                                        <input type="text" id="code" name="code" class="form-control" placeholder="Country Code" readonly />
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-0">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <span id="msg_phone"></span>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-0">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <div class="input-group mb-1">
                                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Your Password" required="required" data-validation-required-message="Please enter your password" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" id="show_hide_password_btn1" type="button"><i id="show_hide_password_i1" class="fa fa-eye-slash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <span id="msg_password1"></span>
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
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <span id="msg_password"></span>
                                </div>
                                <div class="form-check d-flex justify-content-center mb-0">
                                    <label class="form-check-label" for="form2Example3">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="agree_terms" /> I agree all statements in <a href="home/terms_of_use">Terms of service</a>
                                    </label>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-5">
                                    <span id="msg_terms"></span>
                                </div>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                </div>

                                <?php echo form_close(); ?>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 div-display-none-phone">

                                <img src="images/register.jpg" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- </div>
    </div> -->
</div>
<!-- Contact End -->