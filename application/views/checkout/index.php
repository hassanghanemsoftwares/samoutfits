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
    <!-- Checkout Start -->
    <?php echo form_open('checkout/confirm', 'id="loginForm" name="loginForm" onsubmit="return validation();" role="form" autocomplete="off" novalidate') ?>
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Customer Info</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" value="<?php echo $account['first_name'] ?>" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" value="<?php echo $account['last_name'] ?>" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" value="<?php echo $account['phone'] ?>" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" value="<?php echo $account['email'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="mb-5" id="shipping-address">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <?php echo form_dropdown('country', '', '', 'id="country"  class="form-control form-control-md selectpicker countrypicker"  data-live-search="true" data-flag="true" data-default="' . $account['country'] . '"') ?>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City <span id="msg_city"></span></label>
                                <input class="form-control" list="cities" type="text" id="city" name="city" value="<?php echo $account['city'] ?>" />
                                <datalist id="cities">
                                </datalist>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Place <span id="msg_place"></span></label>
                                <input class="form-control" type="text" id="place" name="place" value="<?php echo $account['place'] ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Street <span id="msg_street"></span></label>
                                <input class="form-control" type="text" id="street" name="street" value="<?php echo $account['street'] ?>">

                            </div>
                            <div class="col-md-6 form-group">
                                <label>Building <span id="msg_building"></span></label>
                                <input class="form-control" type="text" id="building" name="building" value="<?php echo $account['building'] ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Floor <span id="msg_floor"></span></label>
                                <input class="form-control" type="text" id="floor" name="floor" value="<?php echo $account['floor'] ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Direction</label>
                                <input class="form-control" type="text" id="direction" name="direction" value="<?php echo $account['description'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5" id="shipping-address">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Customer Notes</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Note (Optional)</label>
                                <!-- <input class="form-control" type="text-area" id="city" name="city" /> -->
                                <textarea class="form-control" rows="4" cols="50" name="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <?php foreach ($cartItems as $item) { ?>
                            <div class="d-flex justify-content-between">
                                <p> <?php echo $item['options']['barcode'] ?></p>
                                <p>$<?php echo number_format($item['price'] * $item['qty'], 2) ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$<?php echo number_format($subtotal, 2)  ?></h6>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="font-weight-medium">Discount</h6>
                            <h6 class="font-weight-medium"><?php echo ($discount_type == '1') ? '$' . number_format($discount, 2) : number_format($discount, 2) . '%' ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Delivery Charge</h6>
                            <h6 class="font-weight-medium">$<?php echo number_format($delivery_charge, 2) ?></h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?php echo number_format($total, 2) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="cash" id="cash" checked disabled>
                                <label class="custom-control-label" for="cash">Cash On Delivery</label>
                            </div>
                        </div>
                        <input type="text" name="delivery_charge" value="<?php echo $delivery_charge ?>" hidden>
                        <input type="text" name="coupon_id" value="<?php echo $coupon_id ?>" hidden>
                        <input type="text" name="discount" value="<?php echo $discount ?>" hidden>
                        <input type="text" name="discount_type" value="<?php echo $discount_type ?>" hidden>
                        <button type="submit" id="placeOrderBtn" class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
    <!-- Checkout End -->