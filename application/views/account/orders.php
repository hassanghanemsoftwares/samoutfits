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
                <a class="breadcrumb-item text-dark" href="#">Account</a>
                <span class="breadcrumb-item active"><?php echo $title ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <div class="bg-light p-30 mb-5">
                <?php if ($orders !== []) { ?>
                    <?php foreach ($orders as $k => $r) { ?>
                        <div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="mail mail-name">
                                <h6># <?php echo $this->lang->line('Tracking_Number') ?>: <span style="color:#fad12a;font-weight:bold"><?php echo $r['auto_no'] ?></span></h6>
                                <h6><?php echo $this->lang->line('Order_Date') ?>: <span style="font-weight:bold"> <?php echo $r['date'] ?> </span></h6>
                                <h6><?php echo $this->lang->line('Order_Status') ?>: <span style="color:#fad334;font-weight:bold"> <?php echo $r['status'] ?> <i class="fa fa-spinner" aria-hidden="true" hidden></i></span></h6>
                                <h6><?php echo $this->lang->line('Total_amount') ?>: &nbsp; &nbsp; <span style="color:#fad334;font-weight:bold"> <?php echo $total[$r['id']] ?>$ </span></h6>
                            </div>
                            <a href="accounts/order_details/<?php echo $r['id'] ?>">
                                <div class="mail-right">
                                    <p style="color:#fad334"><?php echo $this->lang->line('Order_Details') ?></p>
                                </div>
                            </a>
                        </div>
                        <hr>
                        <br>
                    <?php } ?>

                    <center>
                        <div class="pagination_items">
                            <a href="<?php echo 'accounts/pending_orders/' . $previous_page ?>" <?php echo ($previous_page == 0) ? 'hidden' : ''; ?>>&laquo; Previous</a>
                            <?php for ($x = 1; $x <= $pages; $x++) { ?>
                                <a href="<?php echo 'accounts/pending_orders/' . $x ?>" class="<?php echo ($x == $page) ? 'active' : ''; ?>"><?php echo $x ?></a>
                            <?php } ?>
                            <a href="<?php echo 'accounts/pending_orders/' . $next_page ?>" <?php echo ($next_page == '') ? 'hidden' : ''; ?>>Next &raquo;</a>
                        </div>
                    </center>
                <?php } else { ?>
                    <h5 class="text_style"><?php echo $this->lang->line('No_Orders_Found') . "." ?>.</h5>
                <?php } ?>
            </div>
        </div>
    </div>
</div>