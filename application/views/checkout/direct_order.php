<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<style>
    @media screen and (max-width:513px) {
        #bs-select-1 ul {
            max-width: 315px !important;
        }
    }

    .bootstrap-select>.dropdown-toggle {
        height: calc(1.5em + 0.75rem);
    }

    .spinner-white {
        border-top-color: white !important;
        /* Change the spinner color to white */
        border-left-color: white !important;
        /* Ensure the spinner is fully white */
    }
</style>
<!-- Checkout Start -->
<?php echo form_open('checkout/confirm_direct_order', 'id="directOrderForm" name="directOrderForm" onsubmit="return validation();" role="form" autocomplete="off" novalidate') ?>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span
                    class="bg-secondary pr-3">Contact</span></h5>
            <div class="bg-light p-30 mb-5">
                <span id="msg_phone"></span>
                <div class="row">
                    <div class="col-4 col-md-2 p-0 m-0 w-100">
                        <div class="form-outline w-100">
                            <?php echo form_dropdown('country', '', '', 'id="country" class="selectpicker countrypicker  form-control border"  data-live-search="true" data-flag="true" style="padding: 5px;" data-default="LB" autocomplete="tel-country-code"') ?>
                        </div>
                    </div>
                    <div class="col-8 col-md-10 p-0 m-0 w-100">
                        <!-- <div class="form-outline"> -->
                        <input type="hidden" class="form-control " id="phone_code" name="phone_code" value="+961"
                            placeholder="Your Phone Number" required="required"
                            data-validation-required-message="Please enter your phone number" />
                        <input type="text" class="form-control " id="phone_view" autocomplete="tel" name="phone"
                            placeholder="Your Phone Number" required="required"
                            data-validation-required-message="Please enter your phone number" autocomplete="tel-national" />
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- <h5 class="section-title position-relative text-uppercase mb-3"><span
                    class="bg-secondary pr-3">Payment</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="row">
                    <div class="col-12 w-100">
                        <small class="text-danger">All Transactions Are Secure And Encrypted</small>
                        <input type="text" class="form-control " id="" placeholder="Cash On Delivery"
                            value="Cash On Delivery" readonly />
                    
                    </div>
                </div>
            </div> -->

            <div class="mb-5" id="shipping-address">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                        Address</span></h5>
                <div class="bg-light p-30">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Country/Region</label>
                            <?php echo form_dropdown('country_val', '', '', 'id="country_val"  class="form-control form-control-md selectpicker countrypicker" data-countries="LB"  data-live-search="true" data-flag="true" data-default="' . 'LB' . '"') ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>First Name <span id="msg_fname"></span></label>
                            <input class="form-control" type="text" id="fname" name="fname" autocomplete="given-name" value="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name <span id="msg_lname"></span></label>
                            <input class="form-control" type="text" id="lname" name="lname" autocomplete="family-name" value="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>City <span id="msg_city"></span></label>
                            <input class="form-control" list="cities" type="text" autocomplete="address-level2" id="city" name="city" value="" />
                            <datalist id="cities">
                            </datalist>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Street <span id="msg_street"></span></label>
                            <input class="form-control" type="text" value="" id="street" autocomplete="street-address" name="street">
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <label>Address <span id="msg_direction"></span></label>
                            <input class="form-control" type="text" value="" id="direction" name="direction">
                        </div> -->

                        <div class="col-md-6 form-group" style="padding-left:30px !important;">
                            <label>Other Phone (Optional)</label>
                            <div class="row">
                                <div class="col-4 col-md-2 p-0 m-0 w-100 ps-2">
                                    <div class="form-outline w-100">
                                        <?php echo form_dropdown(
                                            'country_phone2',
                                            '',
                                            '',
                                            'id="country_phone2" autocomplete="off" class="selectpicker countrypicker form-control border" data-live-search="true" data-flag="true" style="padding: 5px;" data-default="LB"'
                                        ) ?>
                                    </div>
                                </div>
                                <div class="col-8 col-md-10 p-0 m-0 w-100">
                                    <input type="hidden" class="form-control" id="phone2_code" name="phone2_code"
                                        value="+961" placeholder="Country Code"
                                        autocomplete="off" />

                                    <input type="text" class="form-control" id="phone2" name="phone2"
                                        placeholder="Your Phone Number"
                                        required="required"
                                        data-validation-required-message="Other Phone(Optional)"
                                        autocomplete="new-phone" /> <!-- key line -->
                                </div>
                            </div>
                            <span id="msg_phone2"></span>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" id="email" name="email" autocomplete="email" value="">

                            <span id="msg_email"></span>

                        </div>
                        <div class="col-md-12 form-group">
                            <label>Directions (Optional)</label>
                            <!-- <input class="form-control" type="text-area" id="city" name="city" /> -->
                            <textarea class="form-control" rows="4" cols="50" name="directions"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Note For Delivery (Optional)</label>
                            <!-- <input class="form-control" type="text-area" id="city" name="city" /> -->
                            <textarea class="form-control" rows="4" cols="50" name="note"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group mb-30">
                <input type="text" id="coupon" class="form-control border-0 p-4" value="<?php echo isset($coupon) ? htmlspecialchars($coupon) : ''; ?>" placeholder="Coupon Code">
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary" id="check_coupon">Apply Coupon</button>
                </div>
            </div>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                    Total</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom" id="cartLines">
                    <h6 class="mb-3">Products</h6>
                    <?php foreach ($cartItems as $item) { ?>
                        <div class="d-flex justify-content-between">
                            <p>
                                <?php echo $item['options']['barcode'] ?>
                            </p>
                            <p>$
                                <?php echo number_format($item['price'] * $item['qty'], 2) ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6 id="subTotalLabel">$
                            <?php echo number_format($subtotal, 2) ?>
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="font-weight-medium">Discount</h6>
                        <h6 class="font-weight-medium" id="discountLabel">
                            <?php echo ($discount_type == '1') ? '$' . number_format($discount, 2) : number_format($discount, 2) . '%' ?>
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Delivery Charge</h6>
                        <h6 class="font-weight-medium" id="deliveryChargeLabel">$
                            <?php echo number_format($delivery_charge, 2) ?>
                        </h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5 id="totalLabel">$
                            <?php echo number_format($total, 2) ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="mb-5">

                <div class="card border-0 shadow-sm rounded-4 p-4 bg-light">
                    <div class="mb-3">
                        <h5 class="fw-bold mb-1 text-primary">Payment Method</h5>
                        <small class="text-danger">All transactions are secure and encrypted.</small>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio mb-4">
                            <input type="radio" class="custom-control-input" name="payment_method" id="cod" value="cod" checked>
                            <label class="custom-control-label" for="cod"><img src="<?php echo base_url(); ?>assets/img/cod.png" style="height: 30px; width: auto;" alt="Cash on Delivery (COD)"></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment_method" id="whish" value="whish">
                            <label class="custom-control-label" for="whish"><img src="<?php echo base_url(); ?>assets/img/wish.png" style="height: 30px; width: auto;" alt="Wish"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="bg-light p-30">
                    <input type="number" name="otp_success" id="otp_success" value="0" hidden>
                    <input type="text" id="total" name="total" value="<?php echo $total; ?>" hidden>
                    <input type="text" id="subtotal" name="subtotal" value="<?php echo $subtotal; ?>" hidden>
                    <input type="text" id="delivery_charge" name="delivery_charge"
                        value="<?php echo $delivery_charge; ?>" hidden>
                    <input type="text" id="coupon_id" name="coupon_id" value="<?php echo $coupon_id; ?>" hidden>
                    <input type="text" id="discount" name="discount" value="<?php echo $discount; ?>" hidden>
                    <input type="text" id="discount_type" name="discount_type" value="<?php echo $discount_type; ?>"
                        hidden>
                    <button type="button" id="placeOrderBtn" class="btn btn-block btn-primary font-weight-bold py-3">
                        <span class="spinner-border spinner-border-sm d-none mr-2 " role="status"></span>
                        <span class="btn-text">Place Order</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<!-- Checkout End -->


<!-- coupon_modal start-->
<div class="modal" id="coupon_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/warning.png" id="modal_image" style="width: 50px; height:50px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h3 id="modal_text"></h3>
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
<!-- coupon modal end -->

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

                        <button type="button" class="btn mx-2" id="place_order_without_otp_btn"
                            style="background-color:#FFDF59; color:#3D464D;"><i class="fas fa-check"></i></i>
                            <?php echo $this->lang->line('Place_Order_Without_Otp') ?>
                        </button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- opt modal end -->

<!-- order success modal start-->
<div class="modal" id="order_success_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px 0px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/order.png" style="width: 50px; height:50px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <div class="form-outline mb-1">
                            <h5 id="order_success_message"></h5>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 pb-lg-0 pb-md-0 pb-sm-0 pb-3">
                                <button class="btn" style="background-color: green; color:white;"
                                    onclick='window.location.href="https://wa.me/+96170615210";'>
                                    <i class="fab fa-whatsapp me-2"></i>
                                    <?php echo $this->lang->line('Continue_Us_On_WhatsApp') ?>
                                </button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <button type="button" class="btn mx-2  text-white bg-dark" id="continue_shopping"
                                    style="background-color:#FFDF59; color:#3D464D;">
                                    <i class="fas fa-shopping-basket me-2"></i>
                                    <?php echo $this->lang->line('Continue_Shopping') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- order success modal end -->



<!-- error modal start-->
<div class="modal" id="error_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/warning.png" style="width: 50px; height:50px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <div class="form-outline mb-1">
                            <h5 id="error_message"></h5>
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
<!-- error modal end -->