<?php
//  var_dump($product);exit;
?>

<style>
@media (max-width: 752px) {
    .image_size_chart {
        width: 100% !important;
    }
}

@media screen and (max-width:681px) {
    #whats_app_barcode_btn {
        margin-left: 0px;
    }
    #add_to_cart {
        margin-bottom: 10px;
        font-size: 13px !important;
    }
}

@media screen and (min-width:682px) {
    .product_btns {
        display: flex;
    }
    #whats_app_barcode_btn {
        margin-left: 1rem;
    }
}

#buy_now_btn{
    background-color: #7F00FF !important;
    color: white !important;
    border-color: #7F00FF !important;
}

#whats_app_barcode_btn,.order_whatsapp_btn,.order_whatsapp_btn i {
    background-color: #25d366 !important;
    color: white !important;
    border-color: #25d366 !important;
}
.order_whatsapp_btn {
    padding: 4px;
    padding-left: 5px;
    padding-right: 5px;
    border-radius: 3px;
}

#buy_now_btn {
    margin-left: 1rem;
}
#wishlist {
    background-color: #7F00FF !important;
    color: white !important;
    border-color: #7F00FF !important;
}
</style>
<input type="number" id="fbp_product_price" value="<?php echo $product['price']; ?>" hidden>
<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="home/index">Home</a>
                <a class="breadcrumb-item text-dark" href="products/category/<?php echo $category_link ?>">
                    <?php echo $category ?>
                </a>
                <?php if ($sub_category) { ?>
                <a class="breadcrumb-item text-dark"
                    href="products/category/<?php echo $category_link ?>/<?php echo $sub_category_link ?>">
                    <?php echo $sub_category ?>
                </a>
                <?php } ?>
                <span class="breadcrumb-item active">Product Details</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <?php foreach ($images as $k => $img) { ?>
                    <div class="carousel-item <?php echo ($k == 0) ? 'active' : ''; ?>">
                        <img class="w-100 h-100" src="accounting/assets/uploads/<?php echo $img['image_name'] ?>"
                            alt="Image">
                    </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i style="color: #7F00FF !important; font-size:42px; text-shadow: 2px 2px white;"
                        class="fa fa-2x fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i style="color: #7F00FF !important; font-size:42px; text-shadow: -2px -2px white;"
                        class="fa fa-2x fa-angle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <input type="text" name="item_id" id="item_id" value="<?php echo $product['id'] ?>" hidden>
                <h3 class="text-black">
                    <?php echo $product['description'] ?>
                    <button class="btn btn-primary" id="wishlist">
                        <i class="fa fa-heart"></i>
                    </button>
                </h3>
                <div class="d-flex mb-3">
                    <small class="pt-1">
                        <?php echo $product['barcode'] ?>
                    </small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">
                    <?php echo "$" . $product['price'] ?>
                    <?php echo ($product['old_price'] && doubleval($product['old_price']) > doubleval($product['price'])) ? '<del>$' . $product['old_price'] . '<del>' : '' ?>
                </h3>
                <div class="d-flex">
                    <strong class="text-dark mr-2">Color:</strong>
                    <div class="d-inline-flex">
                        <p>
                            <?php echo $product['color'] ?>
                        </p>
                    </div>
                </div>
                <div class="d-none">
                    <strong class="text-dark mr-2">Gender:</strong>
                    <div class="d-inline-flex">
                        <p>
                            <?php echo $product['gender'] ?>
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <strong class="text-dark mr-2">Description:</strong>
                    <div class="d-inline-flex">
                        <p>
                            <?php echo $product['note'] ?>
                        </p>
                    </div>
                </div>
                <?php if($product['link']){ ?>
                    <div class="d-flex">
                        <strong class="text-dark mr-2"><a href="<?php echo $product['link'] ?>" target="_blank"><i class="fa fa-video"></i> Watch Video </a></strong>
                        <div class="d-inline-flex">
                            
                        </div>
                    </div>
                <?php } ?>
                <div class=" mb-3">
                    <?php if ($hide_size === 0) { ?>
                    <strong class="text-dark mr-3">Sizes:</strong>
                    <?php if ($sizes) { ?>
                    <?php foreach ($sizes as $s) { ?>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-<?php echo $s['size'] ?>" name="size"
                            value="<?php echo $s['size'] ?>">
                        <label class="custom-control-label" for="size-<?php echo $s['size'] ?>">
                            <?php echo $s['size'] ?>
                        </label>
                    </div>
                    <?php } ?>
                    <?php } else { ?>
                    <p>
                        <?php echo $this->lang->line('Not_Found') ?>
                    </p>
                    <?php }
                    } ?>
                    <span id='msg_size'></span>
                </div>
                <div class="product_btns mb-4 pt-2">
                    <div class="d-flex">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" id="qty_value"
                                value="1" readonly>
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <span id='msg_qty'></span>
                        <button class="btn btn-primary px-3" id="add_to_cart"
                            <?php echo ($sizes) ? '' : 'disabled'; ?>><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div>

                    <div class="d-flex">
                        <a href="https://wa.me/+96170615210?text=<?php echo $product['barcode'] ?> "
                            class="btn btn-primary px-3" id="whats_app_barcode_btn"
                            <?php echo ($sizes && $product['publish'] == '1') ? '' : 'disabled'; ?>><i
                                class="fab fa-whatsapp mr-1"></i> WhatsApp</a>
                        <?php if(!$this->violet_auth->is_logged_in()){ ?>
                        <button class="btn px-3" id="buy_now_btn" <?php echo ($sizes) ? '' : 'disabled'; ?>><i
                                class="fa fa-shopping-cart mr-1"></i> Buy Now</button>
                        <?php } ?>
                    </div>
                </div>
                <div class="d-flex pt-2" style="display: none !important;">
                    <strong class="text-dark mr-2">Order by Whatsapp:</strong>
                    <div class="d-inline-flex">
                        <a class="text-dark px- order_whatsapp_btn" href="https://wa.me/+96170615210">
                        <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex pt-1" style="display: none !important;">
                    <strong class="text-dark mr-2">Tags:</strong>
                    <div class="d-inline-flex">
                        <p>
                            <?php $count = 0;
                            foreach ($all_tags as $tag) {
                                $count++; ?>
                            <a href="home/search/<?php echo preg_replace('/[^a-zA-Z0-9_.]/', '_', $tag['tag']); ?>/1"
                                style="color:#6C757D;">
                                <?php echo $tag['tag'] ?>
                            </a>
                            <?php if ($count !== count($all_tags)) { ?> ,
                            <?php }
                            } ?>
                        </p>
                    </div>
                </div>
                <?php
                if ($product['size_chart'] != null) {
                    ?>
                <div class="form-group mt-3">
                    <strong class="text-dark mr-2">Size Chart</strong>
                    <div class="d-inline-flex justify-content-center w-100">
                        <img class="w-50 h-50 image_size_chart"
                            src="<?php echo base_url('accounting/assets/uploads/' . $product['size_chart']) ?>"
                            alt="Size chart">
                    </div>
                </div>

                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->
<!-- Products Start -->
<div class="container-fluid ">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also
            Like</span></h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <?php foreach ($similar_products as $n) { ?>
                <div class="product-item bg-light">
                    <div class="product-img position-relative overflow-hidden">
                        <a href="<?php echo 'products/view/' . $n['id'] ?>">
                            <img class="w-100 <?php echo ($n['total_qty'] > 0) ? '' : 'image_blur' ?>"
                                src="<?php echo 'accounting/assets/uploads/' . $n['image_name'] ?>">
                        </a>
                        <!-- <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div> -->
                    </div>
                    <div class="text-center py-4">
                        <input type="text" name="category" id="category" value="<?php echo $product['category'] ?>"
                            hidden>
                        <h6><a class="h6 text-decoration-none text-truncate"
                                href="<?php echo 'products/view/' . $n['id'] ?>">
                                <?php echo (strlen($n['description']) > 15) ? substr($n['description'], 0, 15) . "..." : substr($n['description'], 0, 15) ?>
                            </a></h6>
                        <a class="h6 text-decoration-none text-truncate"
                            href="<?php echo 'products/view/' . $n['id'] ?>">
                            <?php echo $n['barcode'] ?>
                        </a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <?php if ($n['total_qty'] > 0) { ?>
                            <h5>
                                <?php echo "$" . $n['price'] ?>
                            </h5>
                            <?php if ($n['old_price'] && doubleval($n['old_price']) > doubleval($n['price'])) { ?>
                            <h6 class="text-muted ml-2"><del>
                                    <?php echo "$" . $n['old_price'] ?>
                                </del></h6>
                            <?php } ?>
                            <?php } else { ?>
                            <h5 class="text-primary">Sold Out</h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->
<!-- modal -->
<div class="modal" id="product_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/wishlist.png" id="modal_image" style="width: 80px; height:80px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h3 id="modal_text"></h3>
                    </div>
                    <div>
                        <button class="btn btn-primary px-3" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-window-close mr-1"></i>
                            <?php echo $this->lang->line('Close') ?>
                        </button>
                        <button class="btn btn-primary" id="go_wishlist"><i class="fa fa-heart"></i>
                            <?php echo $this->lang->line('Go_Wishlist') ?>
                        </button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>