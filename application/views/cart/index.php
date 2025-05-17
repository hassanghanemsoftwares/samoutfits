<?php if ($this->session->flashdata('message')) { ?>
    <div id="message" class="alert alert-success" style="text-align:center; margin:0;" onclick="document.getElementById('message').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message') ?></strong>
    </div>
<?php } ?>
<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Product</th>
                        <th>Code</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle" id="cartLines">
                    <?php foreach ($cartItems as $item) { ?>
                        <tr>
                            <td class="align-middle">
                                <a href="products/view/<?php echo $item['id'] ?>" class="text-dark">
                                    <img src="accounting/assets/uploads/<?php echo $item['options']['image'] ?>" alt="" width="60px">
                                    <input type="text" name="item_id" id="item_id" class="r-item_id" value="<?php echo $item['id'] ?>" hidden>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="products/view/<?php echo $item['id'] ?>" class="text-dark">
                                    <?php echo $item['options']['barcode'] ?>
                                </a>
                            </td>
                            <td class="align-middle i-size"><?php echo $item['options']['size'] ?></td>
                            <td class="align-middle i-price">$<?php echo $item['price'] ?><input type="text" value="<?php echo $item['price'] ?>" hidden></td>
                            <td class="align-middle i-qty">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn i-minus">
                                        <button class="btn btn-sm btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center r-qty" value="<?php echo $item['qty'] ?>" max="<?php echo $item['total_qty'] ?>" readonly>
                                    <div class="input-group-btn i-plus">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <span class="i-av_qty"></span>
                            </td>
                            <td class="align-middle">$<?php echo $item['subtotal'] ?></td>
                            <td class="align-middle i-row_id"><input type="text" value="<?php echo $item['rowid'] ?>" hidden><button class="btn btn-sm btn-danger i-delete" data-product="<?php echo $item['id']; ?>"><i class="fa fa-times"></i></button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <div class="input-group mb-30">
                <input type="text" id="coupon" class="form-control border-0 p-4" placeholder="Coupon Code">
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary" id="check_coupon">Apply Coupon</button>
                </div>
            </div>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6 id="subtotal">$<?php echo $subtot; ?></h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Discount</h6>
                        <h6 id="disc_value">0</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$<?php echo $delivery_charge; ?><input type="text" id="delivery_inp" value="<?php echo $delivery_charge; ?>" hidden></h6>
                        <input type="text" name="delivery_charge" id="delivery_charge" value="<?php echo $delivery_charge; ?>" hidden>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5 id="grand_total">$<?php echo $subtot + $delivery_charge; ?></h5>
                    </div>
                    <?php echo form_open('checkout/index', 'role="form"  onsubmit="return validation();" autocomplete="off"'); ?>
                    <input type="hidden" name="coupon_id" id="coupon_id">
                    <input type="hidden" name="discount_type" id="discount_type" value="1">
                    <input type="hidden" name="discount" id="discount" value="0">
                    <input type="text" id="loged_in_user" value="<?php echo $this->violet_auth->get_user_id(); ?>" hidden>
                    <button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
<!-- coupon_modal -->
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
                        <button class="btn" data-dismiss="modal" aria-label="Close" style="background-color: black; color:white;"><i class="fa fa-close"></i> <?php echo $this->lang->line('Close') ?></button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- login_modal -->
<div class="modal" id="login_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/warning.png" id="modal_image" style="width: 50px; height:50px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h3 id="modal_text">Sorry, You Must be Signed In To Proceed To Checkout!</h3>
                    </div>
                    <div>
                        <button class="btn" data-dismiss="modal" aria-label="Close" style="background-color: black; color:white;"><i class="fa fa-window-close"></i> <?php echo $this->lang->line('Close') ?></button>
                        <a class="btn" href="users/login" style="background-color: black; color:white;"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                        <a class="btn" href="users/register" style="background-color: black; color:white;"><i class="fa fa-user-plus"></i> Sign Up</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>