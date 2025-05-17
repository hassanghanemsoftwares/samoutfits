<?php if ($this->session->flashdata('error_message')) { ?>
    <div id="error_message" class="alert alert-danger" style="text-align:center; margin:0;"
        onclick="document.getElementById('error_message').style.display = 'none'">
        <strong>
            <?php echo $this->session->flashdata('error_message') ?>
        </strong>
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
    <div class="container-fluid px-xl-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 px-lg-3">
            <div class="col-lg-12 col-xl-12">
                <div class="card text-black">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-6 col-xl-6 order-1 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-0 mt-4">Sign up</p>
                                <?php echo form_open('users/register_ecomerce_user_and_account', 'id="registerForm" name="registerForm" onsubmit="return validation();" class="mx-1 mx-md-4" role="form" autocomplete="off" novalidate') ?>
                                <!-- <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-flag fa-lg me-3 fa-fw" style="width: 10%;"></i>
                                    <div class="form-outline flex-fill mb-0" style="width: 60%;">
                                        <?php echo form_dropdown('country', '', '', 'id="country" class="selectpicker countrypicker form-control" disabled   data-live-search="true" data-flag="true" data-default="LB"') ?>
                                    </div>
                                  
                                    <div class="form-outline flex-fill mb-0" style="width: 30%;">
                                        <input type="text" id="code" name="code" class="form-control"
                                            placeholder="Country Code" readonly />
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-0">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">

                                        <input type="text" id="phone" name="phone" class="form-control"
                                            placeholder="Phone Number ex:03NNNNNN" />
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <span id="msg_phone"></span>
                                </div> -->
                                <div class="d-flex flex-row align-items-center mb-0">
                                    <i class="fas fa-flag fa-lg me-3 mr-2 fa-fw"></i>

                                    <div class="form-outline w-20">
                                        <?php echo form_dropdown('country', '', '', 'id="country" class="selectpicker countrypicker  form-control border"  data-live-search="true" data-flag="true" style="padding: 5px;" data-default="LB"') ?>
                                    </div>


                                    <!-- <div class="form-outline"> -->
                                    <input type="hidden" class="form-control " id="code" name="code" value="+961"
                                        placeholder="Your Phone Number" required="required"
                                        data-validation-required-message="Please enter your phone number" />
                                    <input type="text" class="form-control " id="phone" name="phone"
                                        placeholder="Your Phone Number" required="required"
                                        data-validation-required-message="Please enter your phone number" />
                                    <!-- </div> -->

                                </div>
                            
                                    <span id="msg_phone" class="d-flex flex-row align-items-center mb-4"></span>
                            
                                <div class="d-flex flex-row align-items-center mb-0">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <div class="input-group mb-1">
                                            <input type="password" class="form-control" id="password" name="password"
                                                value="" placeholder="Your Password" required="required"
                                                data-validation-required-message="Please enter your password" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" id="show_hide_password_btn1"
                                                    type="button"><i id="show_hide_password_i1"
                                                        class="fa fa-eye-slash"></i></button>
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
                                            <input type="password" class="form-control" id="confirm_password" value=""
                                                placeholder="Repeat Password" required="required"
                                                data-validation-required-message="Please Repeat password" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" id="show_hide_password_btn2"
                                                    type="button"><i id="show_hide_password_i2"
                                                        class="fa fa-eye-slash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <span id="msg_password"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6 d-flex align-items-center order-2 order-lg-2">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label>Country/Region</label>
                                        <?php echo form_dropdown('country_name', '', '', 'id="country_id"  class="form-control form-control-md selectpicker countrypicker"  data-live-search="true" data-flag="true" data-default="' . 'LB' . '"') ?>
                                        <input type="text" name="country_val" id="country_val" value="LB" hidden>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>First Name <span id="msg_fname"></span></label>
                                        <input class="form-control" type="text" id="fname" name="fname" value="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Last Name <span id="msg_lname"></span></label>
                                        <input class="form-control" type="text" id="lname" name="lname" value="">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Address <span id="msg_direction"></span></label>
                                        <input class="form-control" type="text" value="" id="direction"
                                            name="direction">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>City <span id="msg_city"></span></label>
                                        <input class="form-control" list="cities" type="text" id="city" name="city"
                                            value="" />
                                        <datalist id="cities">
                                        </datalist>
                                    </div>
                                    <div class="col-md-12 form-group" style="padding-left:30px !important;">
                                        <label>Other Phone (Optional)</label>
                                        <div class="row">
                                            <div class="col-4 col-md-2 p-0 m-0 w-100 ps-2">
                                                <div class="form-outline w-100">
                                                    <?php echo form_dropdown('country_phone2', '', '', 'id="country_phone2" class="selectpicker countrypicker  form-control border"  data-live-search="true" data-flag="true" style="padding: 5px;" data-default="LB"') ?>
                                                </div>
                                            </div>
                                            <div class="col-8 col-md-10 p-0 m-0 w-100">
                                                <!-- <div class="form-outline"> -->
                                                <input type="hidden" class="form-control " id="phone2_code"
                                                    name="phone2_code" value="+961" placeholder="Your Phone Number"
                                                    required="required"
                                                    data-validation-required-message="Please enter your phone number" />
                                                <input type="text" class="form-control " id="phone2" name="phone2"
                                                    placeholder="Your Phone Number" required="required"
                                                    data-validation-required-message="Other Phone(Optional)" />
                                                <!-- </div> -->
                                                  <span id="msg_phone2" class="d-flex flex-row align-items-center mb-4"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" id="email" name="email" value="">
                                        <span id="msg_email" class="d-flex flex-row align-items-center mb-4"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 order-3 order-lg-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-check d-flex justify-content-center mb-0">
                                            <label class="form-check-label" for="form2Example3">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="agree_terms" /> I agree all statements in <a
                                                    href="home/terms_of_use">Terms of service</a>
                                            </label>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-5">
                                            <span id="msg_terms"></span>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg"
                                                id="registerBtn">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
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



<!-- opt modal start-->
<div class="modal" id="otp_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/img/otp_verf.png" id="modal_image" style="width: 150px; height:80px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <div class="form-outline mb-1">
                            <h5>Please enter the one time code</h5>
                        </div>
                        <div class="form-outline mb-1">
                            <h5>to verify your phone</h5>
                        </div>
                        <div class="form-outline mb-5">
                            <h5>A code has been sent to
                                <span id="phoneOtp"></span>
                            </h5>
                        </div>
                        <div class="form-outline mb-5">
                            <input type="text" class="form-control mb-1" id="otpCode" name="otpCode" value=""
                                placeholder="Enter Verification Code" required="required"
                                data-validation-required-message="Please enter Code" />
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn" id="verify_code_btn"
                            style="background-color:#FFDF59; color:#3D464D;"><i class="fas fa-check"></i></i>
                            <?php echo $this->lang->line('Validate') ?>
                        </button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- opt modal end -->



<!-- opt modal start-->
<div class="modal" id="otp_error_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/warning.png" id="modal_image" style="width: 50px; height:50px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <div class="form-outline mb-1">
                            <h5 id="error_message_otp"></h5>
                        </div>
                    </div>
                    <div>
                        <button class="btn" data-dismiss="modal" aria-label="Close"
                            style="background-color: black; color:white;"><i class="fa fa-close"></i>
                            <?php echo $this->lang->line('Close') ?>
                        </button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- opt modal end -->