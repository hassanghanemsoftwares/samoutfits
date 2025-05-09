<!-- <div class="">
	<img id="cat_banner1" style="width: 100%;" src="accounting/sections_uploads/sho444.jpg" style="object-fit: cover;">
</div> -->
 <!-- Breadcrumb Start -->
 <div class="container-fluid mt-4">
     <div class="row px-xl-5">
         <div class="col-12">
             <nav class="breadcrumb bg-light mb-30">
                 <a class="breadcrumb-item text-dark" href="home/index">Home</a>
                 <a class="breadcrumb-item text-dark" href="<?php echo $breadcrumb_cat_link; ?>"><?php echo $category_name; ?></a>
                 <span class="breadcrumb-item active"><?php echo $breadcrumb_sub_category; ?></span>
             </nav>
         </div>
     </div>
 </div>
 <!-- Breadcrumb End -->
 <!-- Shop Start -->
 <div class="container-fluid">
     <div class="row px-xl-5">
         <!-- Shop Sidebar Start -->
         <div class="col-lg-3 col-md-4 hide-filter-on-mobile" id="filter_div">
             <!-- Price Start -->
             <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
             <div class="bg-light p-4 mb-30">
                 <input type="text" id="url_link" value="<?php echo base_url(($category_name == 'Bags & Wallets') ? 'products/category/Wallets' : "products/category/" . str_replace("&", "%26", $category_name)); ?>" hidden>
                 <div>
                     <center>
                         <section class="range-slider">
                             <span class="output outputOne"></span>
                             <span class="output outputTwo"></span>
                             <span class="full-range"></span>
                             <span class="incl-range"></span>
                             <input name="rangeOne" id="minpr" value="<?php echo $min_price ?>" min="0" max="<?php echo ceil($price_max) ?>" step="1" type="range">
                             <input name="rangeTwo" id="maxpr" value="<?php echo ceil($max_price)  ?>" min="0" max="<?php echo ceil($price_max) ?>" step="1" type="range">
                         </section>
                     </center>
                 </div>
             </div>
             <!-- Price End -->

             <!-- Subcat Start -->
             <h5 class="section-title position-relative text-uppercase mb-3" hidden><span class="bg-secondary pr-3">Filter by Sub-category</span></h5>
             <div class="bg-light p-4 mb-30" hidden>
                 <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                     <input type="checkbox" class="custom-control-input sub_category" checked name="sub_category" id="sub_category-all" value="All">
                     <label class="custom-control-label" for="sub_category-all">All</label>
                     <!-- <span class="badge border font-weight-normal">1000</span> -->
                 </div>
                 <?php foreach ($sub_categories as $c) { ?>
                     <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                         <input type="checkbox" class="custom-control-input sub_category" name="sub_category" id="sub_category-<?php echo $c ?>" value="<?php echo $c ?>" <?php echo (array_key_exists(str_replace('&', '%26',str_replace(' ', '%20', $c)), $selected_subcategory)) ? 'checked' : ''; ?>>
                         <label class="custom-control-label" for="sub_category-<?php echo $c ?>"><?php echo $c ?></label>
                          <span class="badge border font-weight-normal"><?php var_dump( $selected_subcategory, str_replace('&', '%26',str_replace(' ', '%20', $c))) ?></span> 
                     </div>
                 <?php } ?>
             </div>
             <!-- Subcat End -->

             <!-- gender Start -->
             <h5 class="section-title position-relative text-uppercase mb-3" <?php echo ($gender) ? "" : "hidden"; ?>><span class="bg-secondary pr-3">Filter by Gender</span></h5>
             <div class="bg-light p-4 mb-30" <?php echo ($gender) ? "" : "hidden"; ?>>
                 <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                     <input type="checkbox" class="custom-control-input gender" checked name="gender" id="gender-all" value="All">
                     <label class="custom-control-label" for="gender-all">All</label>
                     <!-- <span class="badge border font-weight-normal">1000</span> -->
                 </div>
                 <?php foreach ($gender as $c) { ?>
                     <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                         <input type="checkbox" class="custom-control-input gender" name="gender" id="gender-<?php echo $c ?>" value="<?php echo $c ?>" <?php echo (array_key_exists(str_replace(' ', '%20', $c), $selected_gender)) ? 'checked' : ''; ?>>
                         <label class="custom-control-label" for="gender-<?php echo $c ?>"><?php echo $c ?></label>
                         <!-- <span class="badge border font-weight-normal">150</span> -->
                     </div>
                 <?php } ?>
             </div>
             <!-- gender End -->

             <!-- Color Start -->
             <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by color</span></h5>
             <div class="bg-light p-4 mb-30">
                 <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                     <input type="checkbox" class="custom-control-input color" checked name="color" id="color-all" value="All">
                     <label class="custom-control-label" for="price-all">All Color</label>
                     <!-- <span class="badge border font-weight-normal">1000</span> -->
                 </div>
                 <?php foreach ($colors_list as $color) { ?>
                     <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                         <input type="checkbox" class="custom-control-input color" name="color" id="color-<?php echo $color ?>" value="<?php echo $color ?>" <?php echo (in_array($color, str_replace('%20', ' ', str_replace('%26', '&', $colors)))) ? 'checked' : ''; ?>>
                         <label class="custom-control-label" for="color-<?php echo $color ?>"><?php echo $color ?></label>
                         <!-- <span class="badge border font-weight-normal">150</span> -->
                     </div>
                 <?php } ?>
             </div>
             <!-- Color End -->

             <!-- Size Start -->
             <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3" <?php echo ($hide_size == 0) ? '' : 'hidden'; ?>>Filter by size</span></h5>
             <div class="bg-light p-4 mb-30" <?php echo ($hide_size == 0) ? '' : 'hidden'; ?>>
                 <form>
                     <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                         <input type="checkbox" class="custom-control-input sizes" checked id="size-all" value="All">
                         <label class="custom-control-label" for="size-all">All Size</label>
                         <!-- <span class="badge border font-weight-normal">1000</span> -->
                     </div>
                     <?php foreach ($sizes_list as $size) { ?>
                         <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                             <input type="checkbox" class="custom-control-input sizes" id="size-<?php echo $size ?>" value="<?php echo $size ?>" <?php echo (array_key_exists(str_replace(' ', '%20', $size), $sizes)) ? 'checked' : ''; ?>>
                             <label class="custom-control-label" for="size-<?php echo $size ?>"><?php echo $size ?></label>
                             <!-- <span class="badge border font-weight-normal">150</span> -->
                         </div>
                     <?php } ?>
                 </form>
             </div>
             <!-- Size End -->
         </div>
         <!-- Shop Sidebar End -->


         <!-- Shop Product Start -->
         <div class="col-lg-9 col-md-8">
             <div class="row pb-3">
                 <div class="col-12 pb-1">
                     <div class="d-flex align-items-center justify-content-between mb-4">
                         <div>
                             <button class="btn btn-sm btn-light ml-2 hide-filter-button-on-desktop"><i class="fa fa-bars"></i> Advanced Filters</button>
                         </div>
                         <div class="ml-2">
                             <div class="btn-group" <?php echo ($products) ? '' : 'hidden'; ?>>
                                 <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                 <div class="dropdown-menu dropdown-menu-right">
                                     <a class="dropdown-item sort <?php echo ($sort == 'Latest') ? 'active' : ''; ?>" href="javascript: void(0);">Latest</a>
                                     <a class="dropdown-item sort <?php echo ($sort == 'Oldest') ? 'active' : ''; ?>" href="javascript: void(0);">Oldest</a>
                                     <a class="dropdown-item sort <?php echo ($sort == 'priceDESC') ? 'active' : ''; ?>" href="javascript: void(0);">Price DESC</a>
                                     <a class="dropdown-item sort <?php echo ($sort == 'priceASC') ? 'active' : ''; ?>" href="javascript: void(0);">Price ASC</a>
                                 </div>
                                 <input type="text" name="sorting" id="sorting" value="<?php echo $sort ?>" hidden>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row w-100" style="margin: 5px;">
                     <?php foreach ($products as $n) { ?>
                     
                         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pb-1" style="padding-left: 5px; padding-right: 5px;">
                             <div class="product-item bg-light mb-1">
                                 <div class="product-img position-relative overflow-hidden">
                                     <a href="<?php echo 'products/view/' . $n['id'] ?>">
                                         <img class="i-pr_image w-100 <?php echo ($n['total_qty'] > 0) ? '' : 'image_blur' ?>" src="<?php echo 'accounting/assets/uploads/' . $n['image_name'] ?>">
                                     </a>
                                     <!-- <div class="product-action">
                                     <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                 </div> -->
                                 </div>
                                 <div class="text-center py-4">
                                     <h6><a class="h6 text-decoration-none text-truncate" href="<?php echo 'products/view/' . $n['id'] ?>"><?php echo (strlen($n['description']) > 15) ? substr($n['description'], 0, 15) . "..." : substr($n['description'], 0, 15) ?></a></h6>
                                     <a class="h6 text-decoration-none text-truncate" href="<?php echo 'products/view/' . $n['id'] ?>"><?php echo $n['barcode'] ?></a>
                                     <div class="d-flex align-items-center justify-content-center mt-2">
                                         <?php if ($n['total_qty'] > 0) { ?>
                                             <h5><?php echo "$" . $n['price'] ?></h5>
                                             <?php if ($n['old_price'] && doubleval($n['old_price']) > doubleval($n['price'])) { ?>
                                                 <h6 class="text-muted ml-2"><del><?php echo "$" . $n['old_price'] ?></del></h6>
                                             <?php } ?>
                                         <?php } else { ?>
                                             <h5 class="text-primary">Sold Out</h5>
                                         <?php } ?>

                                     </div>
                                 </div>
                             </div>
                         </div>
              
                     <?php } ?>
                 </div>
                 <div class="col-12" <?php echo ($products) ? '' : 'hidden'; ?>>
                     <nav>
                         <ul class="pagination justify-content-center">
                             <li class="page-item <?php echo ($page_nb != 1) ? '' : 'disabled' ?>"><a class="page-link page_prev" href="javascript: void(0);">Previous</span></a></li>
                             <?php $count = 1;
                                while ($pages_count >= $count) {  ?>
                                 <?php if ($count >= $page_nb - 2 && $count <= $page_nb + 2) { ?>
                                     <li class="page-item page_nb <?php echo ($count == $page_nb) ? 'active' : ''; ?>" <?php ($pages_count > 6) ? 'hidden' : ''; ?>><a class="page-link" href="javascript: void(0);"><?php echo $count ?></a></li>
                             <?php }
                                    $count++;
                                } ?>
                             <li class="page-item <?php echo ($page_nb != $pages_count) ? '' : 'disabled' ?>"><a class="page-link page_next" href="javascript: void(0);">Next</a></li>
                             <input type="text" id="page_nb_inp" value="<?php echo $page_nb; ?>" hidden>
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
         <!-- Shop Product End -->
     </div>
 </div>