
<style>
    .countrypicker .dropdown-toggle{
        padding: 5px;
    }
</style>
<?php if ($this->session->flashdata('message')) { ?>
    <div id="message" class="alert alert-danger" style="text-align:center;" onclick="document.getElementById('message').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message') ?></strong>
    </div>
<?php } ?>
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
                <span class="breadcrumb-item active">Sign In</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Contact Start -->
<div class="container-fluid">
    <!-- Section: Design Block -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <section class="text-center text-lg-start">
                <div class="card mb-3">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-lg-4 d-none d-lg-flex">
                            <img src="images/login5.jpg" class="w-100 ml-4 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" height="100%" />
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body py-5 px-md-5">

                                <?php echo form_open('users/login', 'id="loginForm" name="loginForm" onsubmit="return validation();" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
                                <div class="form-outline mb-4">
                                    <h4>Sign In</h4>
                                </div>

                                <div class=" align-items-center mb-4 w-100 px-3">

                                    <div class="row">
                                        <div class="col-4 col-md-2 p-0 m-0 w-100">
                                            <div class="form-outline w-100">
                                                <?php echo form_dropdown('country', '', '', 'id="country" class="selectpicker countrypicker  form-control border"  data-live-search="true" data-flag="true" style="padding: 5px;" data-default="LB"') ?>
                                            </div>
                                        </div>
                                        <div class="col-8 col-md-10 p-0 m-0 w-100">
                                            <!-- <div class="form-outline"> -->
                                                <input type="hidden" class="form-control " id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Your Phone Number" required="required" data-validation-required-message="Please enter your phone number" />
                                                <input type="text" class="form-control " id="phone_view"  placeholder="Your Phone Number" required="required" data-validation-required-message="Please enter your phone number" />

                                             
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    <span id="error_phone" class="text-danger"></span>

                                    <!-- </div><div class="d-flex flex-row align-items-center mb-4"> -->
                                    <!-- <i class="fas fa-mobile fa-lg me-3 fa-fw"></i> -->

                                </div>
                                <!-- phone input -->


                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <div class="input-group mb-1">
                                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" placeholder="Your Password" required="required" data-validation-required-message="Please enter your password" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" id="show_hide_password_btn" type="button"><i id="show_hide_password_i" class="fa fa-eye-slash"></i></button>
                                        </div>
                                    </div>
                                    <span id="error_pass" class="text-danger"></span>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                                            </div> -->
                                    </div>

                                    <!-- <div class="col">
                                            <a href="#!">Forgot password?</a>
                                        </div> -->
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
    </div>
</div>
</div>
<!-- Contact End -->