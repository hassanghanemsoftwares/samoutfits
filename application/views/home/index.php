<?php if ($this->session->flashdata('message')) { ?>
<div id="message" class="alert alert-success" style="text-align:center; margin:0;"
    onclick="document.getElementById('message').style.display = 'none'">
    <strong><?php echo $this->session->flashdata('message') ?></strong>
</div>
<?php } ?>
<link rel="stylesheet" href="assets/lib/swiper/swiper-bundle.min.css" />

<script src="assets/lib/swiper/swiper-bundle.min.js"></script>
<div class="mb-4">
<?php $ban1 =  ($screen_case == 'mobile')? '20' : '19'; ?>
<?php $ban2 =  ($screen_case == 'mobile')? '22' : '21'; ?>
<?php $ban3 =  ($screen_case == 'mobile')? '24' : '23'; ?>
    <div class="">
        <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
				<li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 430px; width: 100%;">
                    <img id="banner1" class="position-absolute w-100 w-100 h-100" style="width: 100%;"
                        src="accounting/sections_uploads/<?php echo $sections[$ban1]['value'] ?>"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item position-relative" style="height: 430px; width: 100%;">
					<img id="banner2" class="position-absolute w-100 w-100 h-100" style="width: 100%;" src="accounting/sections_uploads/<?php echo $sections[$ban2]['value'] ?>" style="object-fit: cover;">
				</div>
				<div class="carousel-item position-relative" style="height: 430px; width: 100%;">
					<img id="banner3" class="position-absolute w-100 w-100 h-100" style="width: 100%;" src="accounting/sections_uploads/<?php echo $sections[$ban3]['value'] ?>" style="object-fit: cover;">
				</div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>

<div class="container mb-4">
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
            class="bg-secondary pr-3">Categories</span></h4>
    <div class="row">
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Sunglasses">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[0]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Wallets">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[1]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Shoes">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[2]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Bracelets_-and_Necklaces">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[3]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Clothing">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[4]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Hats">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[5]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Hair_-and_Skin_Products">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[6]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Perfume">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[7]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <div class="col-sm cat-style mb-3">
            <a href="products/category/Socks">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[8]['value'] ?>"
                    width="100%">
            </a>
        </div>
        <!-- <div class="col-sm cat-style mb-3">
			<a href="javascript:void(0);">
				<div class="content_img">
					<img class="img-fluid" src="images/gc.jpg" width="100%">
					<div><i class="fa fa-bullhorn"></i> Coming Soon</div>
				</div>
			</a>
		</div> -->
        <div class="col-sm cat-style mb-3">
            <a href="products/stock_clearance">
                <img class="img-fluid" src="accounting/sections_uploads/<?php echo $sections[9]['value'] ?>"
                    width="100%">
            </a>
        </div>
    </div>
</div>
<style>
.swiper {
    width: 100%;
    height: 380px;
    

}
.swiper-button-disabled{
    display:none;
}
.swiper-scrollbar{
    visibility:hidden;
}
.swiper-button-next:after,
.swiper-button-prev:after {
font-weight:bold;
  font-size: 20px !important;
        background-color:  #D1A3FF !important;
            padding: 10px 16px;
            border-radius: 100%;
            border: 2px solid #D1A3FF;
            color: black !important;
}
@media  (min-width: 1500px) {
    .swip_container{
        /*padding-top:20px !important;*/
        /*  
        padding-bottom:20px !important;*/
        padding:30px !important;
    }
}
@media  (max-width: 600px) {
    .swiper-scrollbar{
    visibility:visible;
}
     .swip_container{
    
        padding:10px !important;
         height: auto;
    }
    .swiper {
    width: 100%;
    height: 750px;

}
.swiper-wrapper{
    height: 100%;
}
.slide_mobile{
 padding:5px;
  /*display:flex;*/

}
.slide_mobile .product-item{
     width:100%;
     height: 100%;
    
}

/*.product-img{*/
/*    max-height: 150px;*/
/*}*/
}
</style>


<?php
$count = 10;
foreach ($cat as $val => $cat_r) {

    ?>
<div class="">
    <img id="cat_banner1" style="width: 100%;" src="accounting/sections_uploads/<?php echo $sections[$cat_r['banner_nb']]['value'] ?>"
        style="object-fit: cover;">
</div>
<!-- Shoes Products Start -->
<div class="container-fluid ">
    <!-- <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Shoes
        </span></h2> -->
            <div class="swip_container">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper ">
            <!-- Slides -->
            <!-- <div class="swiper-slide"> -->
            <?php foreach ($cat_r['items'] as $n) { ?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 swiper-slide d-flex align-items-center slide_mobile">
                <div class="product-item bg-light ">
                    <div class="product-img position-relative overflow-hidden">
                        <a href="<?php echo 'products/view/' . $n['id'] ?>">
                            <img class="w-100 w-100 image_height_mobile <?php echo ($n['total_qty'] > 0) ? '' : 'image_blur' ?>"
                                src="<?php echo 'accounting/assets/uploads/' . $n['image_name'] ?>">
                        </a>
                    </div>
                    <div class="text-center py-4">
                        <h6><a class="h6 text-decoration-none text-truncate"
                                href="<?php echo 'products/view/' . $n['id'] ?>"><?php echo (strlen($n['description']) > 15) ? substr($n['description'], 0, 15) . "..." : substr($n['description'], 0, 15) ?></a>
                        </h6>
                        <a class="h6 text-decoration-none text-truncate"
                            href="<?php echo 'products/view/' . $n['id'] ?>"><?php echo $n['barcode'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <?php if ($n['total_qty'] > 0) { ?>
                            <h5><?php echo "$" . $n['price'] ?></h5>
                            <?php if ($n['old_price'] && doubleval($n['old_price']) > doubleval($n['price'])) { ?>
                            <h6 class="text-muted ml-2"><del><?php echo "$" . $n['old_price'] ?></del></h6>
                            <?php } ?>
                            <?php } else { ?>
                            <h5>Sold Out</h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } 
            if($cat_r['cat_id'] !="5"){
                ?>
                
           
            <!--<div class="swiper-slide d-flex align-items-center">-->
            <!--    <div>-->
            <!--    <a href="products/category/Shoes" style="text-decoration: none;" class="text-dark"><button class="btn btn-primary btn-square w-100">-->
            <!--         <b style="padding:10px">View All Products ></b>-->

            <!--        </button></a>-->
            <!--    </div>-->
            <!--</div>-->
                 <?php
            }
            ?>
        </div>
        <div class="swiper-button-prev" ></div>
        <div class="swiper-button-next" ></div>
         <div class="swiper-scrollbar js-swiper-scrollbar"></div>
    </div>
</div>
</div>
    <?php
} ?>

<div>


<!-- Hair and Body Care  Products End -->
<input type="hidden" id="sliderD1" value="accounting/sections_uploads/<?php echo $sections[19]['value'] ?>">
<input type="hidden" id="sliderM1" value="accounting/sections_uploads/<?php echo $sections[20]['value'] ?>">
<input type="hidden" id="sliderD2" value="accounting/sections_uploads/<?php echo $sections[21]['value'] ?>">
<input type="hidden" id="sliderM2" value="accounting/sections_uploads/<?php echo $sections[22]['value'] ?>">
<input type="hidden" id="sliderD3" value="accounting/sections_uploads/<?php echo $sections[23]['value'] ?>">
<input type="hidden" id="sliderM3" value="accounting/sections_uploads/<?php echo $sections[24]['value'] ?>">
<script>
const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    // loop: true,

    // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },

    breakpoints: {
    // when window width is >= 320px
    320: {
        grid: {
          rows: 2,
        },
        slidesPerGroup: 2,
        slidesPerView: 2,
            scrollbar: {
        el: '.swiper-scrollbar',
        spaceBetween: 0,
    },
    },
    // when window width is >= 480px
    480: {
        grid: {
          rows: 2,
        },
        slidesPerGroup: 2,
        slidesPerView: 2,
            scrollbar: {
        el: '.swiper-scrollbar',
    },
    },
    // when window width is >= 640px
    640: {
        slidesPerGroup: 6,
    slidesPerView: 6,
    
    }
  },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar

});

function myFunction(x) {
    if (x.matches) { // If media query matches
        // mobile
        // slider banners
        // document.getElementById("banner1").src = document.getElementById("sliderM1").value;
        // document.getElementById("banner2").src = document.getElementById("sliderM2").value;
        // document.getElementById("banner3").src = document.getElementById("sliderM3").value;
        // category banners
        // document.getElementById("cat_banner1").src = "images/shoes_banner700.jpg";
        // document.getElementById("cat_banner2").src = "images/caps_700.jpg";
        // document.getElementById("cat_banner3").src = "images/wallets_700.jpg";
        // document.getElementById("cat_banner4").src = "images/sunglasses_700.jpg";
        // document.getElementById("cat_banner5").src = "images/perfumes_700.jpg";
        // document.getElementById("cat_banner6").src = "images/clothes_700.jpg";
        // document.getElementById("cat_banner7").src = "images/bracelets_700.jpg";
    } else {
        //desktop
        // slider banners
        // document.getElementById("banner1").src = document.getElementById("sliderD1").value;
        // document.getElementById("banner2").src = document.getElementById("sliderD2").value;
        // document.getElementById("banner3").src = document.getElementById("sliderD3").value;
        // category banners
        // document.getElementById("cat_banner1").src = "images/shoes_banner.jpeg";
        // document.getElementById("cat_banner2").src = "images/caps_banner.jpg";
        // document.getElementById("cat_banner3").src = "images/wallets_banner.jpg";
        // document.getElementById("cat_banner4").src = "images/sunglasses_banner.jpg";
        // document.getElementById("cat_banner5").src = "images/perfumes_banner.jpg";
        // document.getElementById("cat_banner6").src = "images/clothes_banner.jpg";
        // document.getElementById("cat_banner7").src = "images/bracelets_banner.jpg";
    }
}
var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>