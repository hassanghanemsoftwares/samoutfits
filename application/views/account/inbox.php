<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Account</a>
                <span class="breadcrumb-item active"><?php echo $this->lang->line('Inbox') ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <div class="bg-dark p-30 mb-2">
                <div class="text-right" style="color: white;">
                    <!-- <a><?php echo $pagination_info ?></a> -->
                    <a href="<?php echo 'accounts/inbox/' . $previous_page ?>" <?php echo ($previous_page == 0) ? 'hidden' : ''; ?> title="<?php echo $this->lang->line('previous') ?>"><b style="font-size: 10px;">&laquo;</b> <?php echo $this->lang->line('previous') ?></a>
                    <a <?php echo ($previous_page == 0) ? '' : 'hidden'; ?> title="<?php echo $this->lang->line('previous') ?>"><b style="font-size: 20px;">&laquo;</b> <?php echo $this->lang->line('previous') ?></a>
                    &nbsp;
                    <a><?php echo $pagination_info ?></a>
                    &nbsp;
                    <a href="<?php echo 'accounts/inbox/' . $next_page ?>" <?php echo ($next_page == '') ? 'hidden' : ''; ?> title="<?php echo $this->lang->line('next') ?>"> <?php echo $this->lang->line('next') ?> <b style="font-size: 20px;">&raquo;</b></a>
                    <a <?php echo ($next_page == '') ? '' : 'hidden'; ?> title="<?php echo $this->lang->line('next') ?>"> <?php echo $this->lang->line('next') ?> <b style="font-size: 20px;">&raquo;</b> </a>
                </div>
            </div>
            <?php
            if ($msgs) {
                $count = 0;
                foreach ($msgs as $msg) {
                    $count++; ?>
                    <div class="bg-light mb-2" style="padding: 20px;">
                        <table style="width: 100%;">
                            <tr>
                                <td style="text-align: left;">
                                    <h6>
                                        <img src="assets/images/man.png" style="width: 40px; height: 40px;" />
                                        Samoutfits Customer Service
                                    </h6>
                                </td>
                                <!-- <td style="text-align: right;">
                                <p> <?php echo $msg['date'] ?></p>
                            </td> -->
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><b style="color: black;">Subject:</b> <?php echo $msg['subject'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p><b style="color: black;">Message:</b> <?php echo $msg['message'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right;">
                                    <p> <?php echo $msg['date'] ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php }
            } else { ?>
                <div class="bg-light mb-2" style="padding: 20px;">
                <h5>No Messages Found</h5>
                </div>
            <?php } ?>
        </div>
    </div>
</div>