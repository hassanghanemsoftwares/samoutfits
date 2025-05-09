<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Account</a>
                <span class="breadcrumb-item active"><?php echo $this->lang->line('Wishlist') ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <div class="bg-light p-30 mb-5">
                <center>
                    <div style="width: 85%;">
                        <table id="wishlist_table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><?php echo $this->lang->line('Item') ?></th>
                                    <th><?php echo $this->lang->line('code') ?></th>
                                    <th><?php echo $this->lang->line('Name') ?></th>
                                    <th><?php echo $this->lang->line('Price') ?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($wishlist) {
                                    foreach ($wishlist as $k => $item) { ?>
                                        <tr>

                                            <td><a href="<?php echo 'products/view/' . $item['item_id'] ?>"><img height="120px" width="120px" src="<?php echo base_url('accounting/assets/uploads/' . $item['image']); ?>"></a></td>
                                            <td><?php echo $item["barcode"]; ?></td>
                                            <td><?php echo $item["description"]; ?></td>
                                            <td><?php echo $item["price"] . "$"; ?></td>
                                            <td style="width: 90px;">
                                                <input type="text" name="item_id" id="item_id" value="<?php echo $item["item_id"]; ?>" class="hide action_id" hidden>
                                                <button class="btn action_add_cart" title="<?php echo $this->lang->line('Shop_now') ?>"><i class="fa fa-shopping-cart"></i></button>
                                                <button class="btn action_remove" title="<?php echo $this->lang->line('Remove') ?>"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>