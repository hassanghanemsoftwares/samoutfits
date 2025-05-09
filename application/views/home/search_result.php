   <!-- Breadcrumb Start -->
   <div class="container-fluid mt-4">
       <div class="row px-xl-5">
           <div class="col-12">
               <nav class="breadcrumb bg-light mb-30">
                   <a class="breadcrumb-item text-dark" href="#">Home</a>
                   <span class="breadcrumb-item active"><?php echo $title; ?> </span>
               </nav>
           </div>
       </div>
   </div>
   <!-- Breadcrumb End -->
   <div class="container-fluid pt-2 pb-3">
       <div class="row px-xl-5">
           <?php if ($results) {
                foreach ($results as $n) { ?>
                   <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 pb-1">
                       <div class="product-item bg-light mb-4">
                           <div class="product-img position-relative overflow-hidden">
                               <a href="<?php echo 'products/view/' . $n['id'] ?>">
                                   <img class="w-100 <?php echo ($n['total_qty'] > 0 && $n['publish'] == '1') ? '' : 'image_blur' ?>" src="<?php echo 'accounting/assets/uploads/' . $n['image_name'] ?>" height="auto">
                               </a>
                           </div>
                           <div class="text-center py-4">
                               <h6><a class="h6 text-decoration-none text-truncate" href="<?php echo 'products/view/' . $n['id'] ?>"><?php echo (strlen($n['description']) > 15) ? substr($n['description'], 0, 15) . "..." : substr($n['description'], 0, 15) ?></a></h6>
                               <a class="h6 text-decoration-none text-truncate" href="<?php echo 'products/view/' . $n['id'] ?>"><?php echo $n['barcode'] ?></a>
                               <div class="d-flex align-items-center justify-content-center mt-2">
                                   <?php if ($n['total_qty'] > 0 && $n['publish'] == '1') { ?>
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
            } else { ?>
               <div class="col-12">
                   <h4>No Results Found</h4>
               </div>
           <?php } ?>
           <div class="col-12" <?php echo ($results) ? '' : 'hidden'; ?>>
               <nav>
                   <ul class="pagination justify-content-center">
                       <li class="page-item <?php echo ($page_nb != 1) ? '' : 'disabled' ?>"><a class="page-link page_prev" href="home/search/<?php echo $search_url."/".($page_nb -1); ?>">Previous</span></a></li>
                       <?php $count = 1;
                        while ($pages_count >= $count) {  ?>
                           <?php if ($count >= $page_nb - 2 && $count <= $page_nb + 2) { ?>
                               <li class="page-item page_nb <?php echo ($count == $page_nb) ? 'active' : ''; ?>" <?php ($pages_count > 6) ? 'hidden' : ''; ?>><a class="page-link" href="home/search/<?php echo $search_url."/".$count ?>"><?php echo $count ?></a></li>
                       <?php }
                            $count++;
                        } ?>
                       <li class="page-item <?php echo ($page_nb != $pages_count) ? '' : 'disabled' ?>"><a class="page-link page_next" href="home/search/<?php echo $search_url."/".($page_nb +1); ?>">Next</a></li>
                       <input type="text" id="page_nb_inp" value="<?php echo $page_nb; ?>" hidden>
                   </ul>
               </nav>
           </div>
       </div>
   </div>