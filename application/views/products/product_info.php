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
</style>
<style>
    /* Main carousel container */
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
            <!-- <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <?php foreach ($images as $k => $img) { ?>
                        <div class="carousel-item <?php echo ($k == 0) ? 'active' : ''; ?>">
                            <img loading="lazy" class="w-100 h-100" src="accounting/assets/uploads/<?php echo $img['image_name'] ?>"
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
            </div> -->
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
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DGSz6DsSBMw/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/DGSz6DsSBMw/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DGSz6DsSBMw/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Trendy Tech Review (@trendytechreview)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
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