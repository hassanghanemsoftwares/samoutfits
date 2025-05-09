<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Account</span>
                <span class="breadcrumb-item active"><?php echo $title ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <div class="bg-light p-30 mb-5">

            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Info</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="d-flex justify-content-between mb-3">
                    <h6><?php echo $this->lang->line('Tracking_Number') ?></h6>
                    <h6 id="disc_value">#<?php echo $order['auto_no'] ?></h6>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <h6><?php echo $this->lang->line('Order_Date') ?></h6>
                    <h6 id="disc_value"><?php echo $order['date'] ?></h6>
                </div>
                <div class="d-flex justify-content-between mb-0">
                    <h6><?php echo $this->lang->line('Order_Status') ?></h6>
                    <h6 id="disc_value"><?php echo $order['status'] ?> <i class="fa fa-spinner" aria-hidden="true"></i></h6>
                </div>
            </div>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Products List</span></h5>
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Product</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody class="align-middle" id="cartLines">
                    <?php foreach ($order_items as $item) { ?>
                        <tr>
                            <td class="align-middle">
                                <img src="accounting/assets/uploads/<?php echo $item['image_name'] ?>" alt="" width="60px">
                            </td>
                            <td class="align-middle i-barcode"><?php echo $item['barcode'] ?></td>
                            <td class="align-middle i-description"><?php echo $item['description'] ?></td>
                            <td class="align-middle i-size"><?php echo $item['size'] ?></td>
                            <td class="align-middle i-price">$<?php echo $item['price'] ?></td>
                            <td class="align-middle i-qty"><?php echo $item['qty'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6 id="subtotal">$<?php echo $subtotal; ?></h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Discount</h6>
                        <h6 id="disc_value"><?php echo $disc; ?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Delivery Charge</h6>
                        <h6 class="font-weight-medium">$<?php echo $order['delivery_charge']; ?></h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5 id="grand_total">$<?php echo $total; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>