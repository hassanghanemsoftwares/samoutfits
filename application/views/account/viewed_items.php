<br><br><br><br><br>
<div>
    <h3 class="title1"><?php echo $this->lang->line('Viewed_Items') ?> <i class="fa fa-heart-o"></i></h3>
    <?php if ($viewed_items !== []) { ?>
        <div class="grid-container">
            <?php foreach ($viewed_items as $p) { ?>
                <div class="grid-item">
                    <div class="img_div">
                        <a href="<?php echo 'products/view/' . $p['id'] ?>"><img src="<?php echo 'accounting/assets/uploads/' . $p['image_name'] ?>" alt="" class="img-responsive zoom-img" id="proimg"></a>
                    </div>
                    <div class="card_info_div">
                        <h3><a href="<?php echo 'products/view/' . $p['id'] ?>" id="caption"><?php echo $p['barcode'] ?></a></h3>
                    </div>
                    <div class="card_price_div">
                        <span><?php echo $p['price'] . '$' ?></span>
                    </div>
                    <div class="remove_div">
                        <input type="text" id="item_id" class="item_id hide" value="<?php echo  $p['id'] ?>">
                        <button class="remove_item" style="font-size:24px"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
            <?php } ?>
        </div>
        <center>
            <div class="pagination_items">
                <a href="<?php echo 'accounts/viewed_items/' . $previous_page ?>" <?php echo ($previous_page == 0) ? 'hidden' : ''; ?>>&laquo; Previous</a>
                <?php for ($x = 1; $x <= $pages; $x++) { ?>
                    <a href="<?php echo 'accounts/viewed_items/' . $x ?>" class="<?php echo ($x == $page) ? 'active' : ''; ?>"><?php echo $x ?></a>
                <?php } ?>
                <a href="<?php echo 'accounts/viewed_items/' . $next_page ?>" <?php echo ($next_page == '') ? 'hidden' : ''; ?>>Next &raquo;</a>
            </div>
        </center>
    <?php }else{ ?>
        <h5 class="text_style"><?php echo $this->lang->line('No_Viewed_Items_Found')."." ?></h5>
    <?php } ?>
</div>
<!-- modal -->
<div class="modal" id="vi_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <img src="assets/images/warning.png" id="modal_image" style="width: 50px; height:50px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h3><?php echo $this->lang->line('Oops_Something_Went_Wrong!') ?></h3>
                    </div>
                    <div>
                        <button class="btn" data-dismiss="modal" aria-label="Close" style="background-color: black; color:white;"><i class="fa fa-close"></i> <?php echo $this->lang->line('Close') ?></button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>