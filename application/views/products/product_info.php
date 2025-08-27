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

    #buy_now_btn {
        background-color: #7F00FF !important;
        color: white !important;
        border-color: #7F00FF !important;
    }

    #whats_app_barcode_btn,
    .order_whatsapp_btn,
    .order_whatsapp_btn i {
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

    .product-carousel {
        margin: 0 auto;
        max-width: 600px;
    }

    /* Main image slide wrapper */
    .main-carousel .slick-slide {
        padding: 0 5px;
        max-height: 600px;
        /* Smaller height but not fixed */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Main image styling */
    .main-carousel img {
        width: 100%;
        height: auto;
        max-height: 600px;
        /* Ensure it fits within container */
        aspect-ratio: 4/5;
        object-fit: contain;
        /* Show full image without cropping */
        display: block;
        margin: 0 auto;
    }

    /* Thumbnail carousel styling */
    .thumbnail-carousel {
        margin: 10px auto 0;
        max-width: 600px;
    }

    .thumbnail-carousel .slick-slide {
        padding: 5px;
        cursor: pointer;
        opacity: 0.6;
        transition: opacity 0.3s;
    }

    .thumbnail-carousel .slick-slide.slick-current {
        opacity: 1;
    }

    .thumbnail-carousel img {
        width: 100%;
        height: auto;
        aspect-ratio: 4/5;
        object-fit: cover;
        border: 1px solid #ddd;
        width: 80px;
    }



    /* Remove arrows */
    .slick-prev,
    .slick-next {
        display: none !important;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {

        .product-carousel,
        .thumbnail-carousel {
            max-width: 100%;
            padding: 0;
        }

        .thumbnail-carousel {
            margin-top: 5px;
        }

        .thumbnail-carousel img {
            max-width: 80px;
        }
    }

    @media (max-width: 480px) {
        .thumbnail-carousel img {
            max-width: 60px;
        }

        .thumbnail-carousel .slick-slide {
            padding: 3px;
        }
    }

    .carousel-hidden {
        visibility: hidden;
        height: 0;
        overflow: hidden;
    }

    .inline-loader {
        position: relative;
        height: 400px;
        /* or match your image height */
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f8f8;
    }

    /* Spinner animation */
    .spinner {
        border: 6px solid #eee;
        border-top: 6px solid #333;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }

    /* Rotation keyframes */
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Wrapper to enable horizontal scroll */
    .variants-wrapper {
        overflow-x: auto;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        /* smooth scroll on iOS */
        padding-bottom: 6px;
        /* little spacing for scroll bar */
    }

    /* Variants container */
    .variants {
        display: flex;
        flex-wrap: nowrap;
        /* keep them in one line */
    }

    /* Variant item */
    .variants a {
        text-decoration: none;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        color: #333;
        font-size: 13px;
        transition: 0.3s;
        margin: 3px;
        flex: 0 0 auto;
        /* prevents shrinking */
    }

    .variants a img {
        width: 60px;
        aspect-ratio: 4/5;
        object-fit: cover;
        border: 1px solid #d9d9d9;
        border-radius: 6px;
        transition: 0.3s;
        height: auto;
    }

    .variants a span {
        margin-top: 4px;
        font-size: 12px;
        text-align: center;
        width: 100%;
    }

    /* Hover */
    .variants a:hover img {
        border-color: #aaa;
    }

    /* Active */
    .variants a.active img,
    .variants a.active span {
        border-color: #7F00FF;
        color: #7F00FF;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .variants a img {
            max-width: 60px;
        }
    }

    @media (max-width: 480px) {
        .variants a img {
            max-width: 60px;
        }

        .variants a span {
            font-size: 11px;
        }
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
            <div class="product-carousel">
                <!-- Loader inside image area -->
                <div id="carouselLoader" class="inline-loader">
                    <div class="spinner"></div>
                </div>

                <!-- Main Carousel -->
                <div class="main-carousel carousel-hidden">
                    <?php foreach ($images as $img) { ?>
                        <div>
                            <img loading="lazy" src="accounting/assets/uploads/<?php echo $img['image_name'] ?>" alt="Image">
                        </div>
                    <?php } ?>
                </div>

                <!-- Thumbnail Carousel -->
                <div class="thumbnail-carousel carousel-hidden">
                    <?php foreach ($images as $img) { ?>
                        <div>
                            <img loading="lazy" src="accounting/assets/uploads/<?php echo $img['image_name'] ?>" alt="Thumbnail">
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <input type="text" name="item_id" id="item_id" value="<?php echo $product['id'] ?>" hidden>
                <!-- <button class="btn btn-primary" id="wishlist">
                        <i class="fa fa-heart"></i>
                    </button> -->

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-black mb-0">
                        <?php echo $product['description']; ?>
                    </h3>

                    <div class="dropdown ml-auto mr-3">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <div class="dropdown-menu mr-5">
                            <!-- WhatsApp Share -->
                            <a id="whatsappShare" class="dropdown-item" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp text-success mr-2"></i> WhatsApp
                            </a>

                            <!-- Copy Link Button -->
                            <button class="dropdown-item" id="copyLinkBtn">
                                <i class="fas fa-link text-gray mr-2"></i> Copy Link
                            </button>
                        </div>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <small class="pt-1">
                        <?php echo $product['barcode'] ?>
                    </small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">
                    <?php echo "$" . $product['price'] ?>
                    <?php echo ($product['old_price'] && doubleval($product['old_price']) > doubleval($product['price'])) ? '<del>$' . $product['old_price'] . '<del>' : '' ?>
                </h3>
                <!-- <div class="d-flex">
                    <strong class="text-dark mr-2">Color:</strong>
                    <div class="d-inline-flex">
                        <p>
                            <?php echo $product['color'] ?>
                        </p>
                    </div>
                </div> -->
                <?php if (count($variants) > 1) { ?>
                    <div class="mb-3">
                        <strong class="text-dark mr-3">Colors:</strong>

                        <div class="variants-wrapper">
                            <div class="variants">
                                <?php foreach ($variants as $variant): ?>
                                    <a href="<?php echo 'products/view/' . $variant['id'] ?>"
                                        class="text-center <?php echo ($product['id'] == $variant['id']) ? 'active' : ''; ?>">
                                        <img src="accounting/assets/uploads/<?php echo $variant['item_images'][0]['image_name'] ?? 'no-image.jpg'; ?>"
                                            alt="<?php echo $variant['color']; ?>">
                                        <span><?php echo $variant['color']; ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="">
                    <strong class="text-dark mr-2">Gender:</strong>
                    <div class="d-inline-flex">
                        <p>
                            <?php echo ($product['gender'] == "") ? "Unisex" : $product['gender'] ?>
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
                <?php if ($product['link']) { ?>
                    <div class="d-flex">
                        <strong class="text-dark mr-2"><a href="<?php echo $product['link'] ?>" target="_blank"><i class="fa fa-video"></i> Watch Video </a></strong>
                        <div class="d-inline-flex">

                        </div>
                    </div>
                <?php } ?>
                <?php
                if ($product['size_guidance'] != "") {
                ?>
                    <div class="d-flex mt-3">
                        <strong class="text-dark mr-2">Size Guidance:</strong>
                        <div class="d-inline-flex">
                            <p>
                                <?php echo $product['size_guidance'] ?>
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class=" mb-3">
                    <?php if ($hide_size === 0) { ?>
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <?php if ($sizes) { ?>
                            <?php foreach ($sizes as $s) { ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-<?php echo $s['size'] ?>" name="size"
                                        value="<?php echo $s['size'] ?>" data-max="<?php echo $s['total_qty'] ?>">
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
                                value="1"
                                <?=
                                (isset($sizes[0]['size']) && $sizes[0]['size'] == "No")
                                    ? 'max="' . $sizes[0]['total_qty'] . '"'
                                    : (count($sizes) == 0 ? 'max="1"' : '')
                                ?>
                                readonly>



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
                        <?php if (!$this->violet_auth->is_logged_in()) { ?>
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
                            <img loading="lazy" class="w-50 h-50 image_size_chart"
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
                                <img loading="lazy" class="w-100 <?php echo ($n['total_qty'] > 0) ? '' : 'image_blur' ?>"
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
            <div class="modal-body" style="padding: 80px 20px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img loading="lazy" src="assets/images/wishlist.png" id="modal_image" style="width: 80px; height:80px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h3 id="modal_text"></h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 pb-lg-0 pb-md-0 pb-sm-0 pb-3">
                            <button class="btn" style="background-color: green; color:white;"
                                onclick='window.location.href=getAppURL("cart/index");'>
                                <i class="fa fa-shopping-cart me-1"></i>
                                View Cart
                            </button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <button type="button" class="btn text-white bg-dark" id="continue_shopping"
                                onclick='window.location.href=getAppURL("home/index");' style="background-color:#FFDF59; color:#3D464D;">
                                <i class="fas fa-shopping-basket me-1"></i>
                                <?php echo $this->lang->line('Continue_Shopping') ?>
                            </button>
                        </div>
                    </div>

                    <!-- <div>
                        <button class="btn btn-primary px-3" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-window-close mr-1"></i>
                            <?php echo $this->lang->line('Close') ?>
                        </button>
                        <button class="btn btn-primary" id="go_wishlist"><i class="fa fa-heart"></i>
                            <?php echo $this->lang->line('Go_Wishlist') ?>
                        </button>
                    </div> -->
                </center>
            </div>
        </div>
    </div>
</div>
<script>
    const variantLinks = document.querySelectorAll('.variants a');

    // Save scroll position only when a variant is clicked
    variantLinks.forEach(link => {
        link.addEventListener('click', function() {
            localStorage.setItem('scrollPos', window.scrollY);
        });
    });

    // Restore scroll position as soon as DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        const scrollPos = localStorage.getItem('scrollPos');
        if (scrollPos) {
            window.scrollTo(0, scrollPos);
            localStorage.removeItem('scrollPos');
        }
    });
</script>