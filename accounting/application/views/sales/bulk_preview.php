<p class="text-right">
    <button id="bgback" class="btn btn-primary"><?php echo $this->lang->line('Back') ?></button>
    <button id="print" onclick="window.print()" class="btn btn-primary"><?php echo $this->lang->line('Print') ?></button>
    <?php foreach ($trans as $x => $t) : ?>
        <input type="text" id="<?php echo "sales_nb" . $x ?>" value="<?php echo $t["auto_no"] ?>" hidden>
</p>
<center>
    <div id="myHtml" class="print_invoice" style="background-color: white; color: black; width:320px; margin:10px;
        padding:10px; display: flex; flex-direction: column; min-height: 55vh; position: relative;">
        <section style="flex: 1;">
            <div class="col-sm-12 col-xs-12">
                <h4><b><?php echo $this->lang->line('Tracking') ?># : <?php echo $t["auto_no"] ?></b></h4>
            </div>
            <div class="col-sm-6 col-xs-6">
                <div class="col-sm-12 col-xs-12">
                    <img id="logo" style="height: 45px; width: 60px;" src="<?php echo site_url('assets/images/cash1.png') ?>">
                </div>
                <div class="col-sm-12 col-xs-12" style="border: solid 1px black; border-radius:5px; width: 150px;">
                    <h4 style="color: black; text-align:center;">
                        <b>USD <?php echo $total[$x] ?> </b>
                    </h4>
                </div>
                <p style="color: black; font-size:11px; font-weight:bold;">
                <?php echo $this->lang->line('Date') ?>: <?php echo $t["trans_date"] ?>
                </p>
            </div>
            <div class="col-sm-6 col-xs-6">
                <!-- <p style="color: black; margin-bottom:0px; font-size:12px;">
                    Sales Invoice:
                </p> -->
                <div id="<?php echo "qrcode" . $x ?>"></div>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="border:solid 1px black; background-color: black;">
            </div>
            <div class="col-sm-6 col-xs-6" id="test">
                <p style="text-align: left; color: black;">
                    <b><?php echo $this->lang->line('Name') ?>: <?php echo $customer_info[$x]["account_name"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Country') ?>: <?php echo $customer_info[$x]["country"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('City') ?>: <?php echo $customer_info[$x]["city"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Place') ?>: <?php echo $customer_info[$x]["place"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Street') ?>: <?php echo $customer_info[$x]["street"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Building') ?>: <?php echo $customer_info[$x]["building"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Floor') ?>: <?php echo $customer_info[$x]["floor"] ?></b>
                </p>
            </div>

            <div class="col-sm-6 col-xs-6">
                <p style="text-align: left; color: black; font-size:12.5px; margin:2px; border: solid 1px black; border-radius:5px; ">
                    <b><?php echo $this->lang->line('Mobile') ?> 1: </b>
                    <br>
                    <b><?php echo $customer_info[$x]["phone"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Mobile') ?> 2: </b>
                    <br>
                    <b><?php echo $customer_info[$x]["phone2"] ?></b>
                    <?php if ($t["delivery_note"] !== "") {  ?>
                <p style="text-align: left; color: black; font-size:12.5px; margin:2px; border: solid 1px black; border-radius:5px; ">
                    <b><?php echo $t["delivery_note"] ?></b>
                </p>
            <?php } ?>
            </p>
            </div>

            <div class="col-sm-12 col-xs-12">
                <p style="text-align: left; color: black;">
                    <b><?php echo $this->lang->line('Details') ?>: <?php echo $customer_info[$x]["description"] ?></b>
                </p>
            </div>

            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="border:solid 1px black; background-color: black; margin-bottom:10px;">
            </div>

            <br>
            <div class="col-sm-12 col-xs-12">
                <table id="invoice_table">
                    <thead>
                        <tr>
                            <th colspan="3" style="text-align: center;"><?php echo $this->lang->line('Item') ?></th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <?php foreach ($trans_items[$x] as $transItem) : ?>
                            <tr>
                                <td style="width: 90px; margin:2px;"><b><?php echo $transItem['barcode'] ?></b></td>
                                <td style="width: 90px; margin:2px;"><b><?php echo $transItem['size'] ?></b></td>
                                <td style="width: 90px; margin:2px;"><b><?php echo $transItem['qty'] ?></b></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</center>
<div class="pagebreak"> </div>
<?php endforeach ?>
<input type="text" id="invoices_count" value="<?php echo $x ?>" hidden>