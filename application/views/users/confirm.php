<!-- Breadcrumb Start -->
<div class="container-fluid mt-5">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item">Sign Up</span>
                <span class="breadcrumb-item active">Verification Code</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Contact Start -->
<div class="container-fluid">
    <!-- Section: Design Block -->
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <section class="text-center text-lg-start">
                <div class="card mb-3">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="card-body py-5 px-md-5">
                                <?php echo form_open('users/personal_info', 'id="loginForm" name="loginForm" onsubmit="return validation();" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
                                <div class="form-outline mb-1">
                                    <h5>Please enter the one time code</h5>
                                </div>
                                <div class="form-outline mb-1">
                                    <h5>to verify your account</h5>
                                </div>
                                <div class="form-outline mb-5">
                                    <h5>A code has been sent to <?php echo $phone; ?></h5>
                                </div>
                                <input type="text" name="phone" value="<?php echo $phone; ?>" hidden>
                                <input type="text" name="password" value="<?php echo $password; ?>" hidden>
                                <!-- phone input -->
                                <div class="form-outline mb-5">
                                    <input type="text" class="form-control mb-1" id="code" name="code" value="" placeholder="Enter Verification Code" required="required" data-validation-required-message="Please enter Code" />
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Validate</button>

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