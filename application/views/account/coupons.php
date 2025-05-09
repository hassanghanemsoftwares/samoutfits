<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Account</a>
                <span class="breadcrumb-item active"><?php echo $this->lang->line('Coupons') ?></span>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <div class="bg-light p-30 mb-5">
                <center>
                    <div class="table-responsive" style="width: 100%;">
                        <table id="coupons_table" class="table display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo $this->lang->line('Code') ?></th>
                                    <th><?php echo $this->lang->line('Discount') ?></th>
                                    <th><?php echo $this->lang->line('Usage_times') ?></th>
                                    <th><?php echo $this->lang->line('Expiry_Date') ?></th>
                                    <th><?php echo $this->lang->line('Status') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 0;
                                foreach ($coupons as $c) {
                                    $count++; ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td><?php echo $c['coupon'] ?></td>
                                        <td><?php echo $c['amount'] . $c['type'] ?></td>
                                        <td><?php echo $c['usage_times'] ?></td>
                                        <td><?php echo $c['expiry_date'] ?></td>
                                        <?php if ($c['status'] == 'Valid') { ?> <td style="color:green"><?php echo $c['status']; ?></td>

                                        <?php } else { ?> <td style="color:red"><?php echo $c['status']; ?></td> <?php } ?>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>