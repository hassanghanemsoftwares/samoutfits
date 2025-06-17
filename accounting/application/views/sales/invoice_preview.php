<p class="text-right<?php echo $print ? ' hide' : '' ?>">
    <input id="btn_convert" type="button" value="Download" class="btn btn-primary" />
    <button id="print" onclick="window.print()" class="btn btn-primary">print</button>
    <button id="bgback" class="btn btn-primary">Back</button>
    <input type="text" id="sales_nb" value="<?php echo $trans["auto_no"] ?>" hidden>
</p>
<p class="text-right hidden-print <?php echo $print ? '' : ' hide' ?>">
    <input id="btn_convert" type="button" value="Download" class="btn btn-primary" />
    <button id="print" onclick="window.print()" class="btn btn-primary">print</button>
    <button id="bgback" class="btn btn-primary">Back</button>
</p>
<style>
    .gray-background {
        background-color: #cccccc;
    }

    @media print {
        .gray-background {
            background-color: #cccccc !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
    }
</style>

<center>
    <div id="myHtml" class="print_invoice" style="background-color: white; color: black; width:320px; margin:10px;
        padding:10px; display: flex; flex-direction: column; min-height: 55vh;">
        <section style="flex: 1;">
            <div class="col-sm-12 col-xs-12">
                <img style="height: 50px; width: auto;  filter: grayscale(100%) contrast(200%);" src="<?php echo site_url('assets/images/logo_black.png') ?>">
            </div>
            <div class="col-sm-12 col-xs-12">
                <h4><b>Tracking# : <?php echo $trans["auto_no"] ?></b></h4>
            </div>
            <div class="col-sm-6 col-xs-6">
                <div class="col-sm-12 col-xs-12 pl-0" style="padding-left: 0 !important;">
                    <?php
                    echo ($trans["payment_method_gateway"] == "whish")
                        ? '<img style="height: 35px; width: 140px; margin-bottom: 15px; filter: grayscale(100%) contrast(200%);" src="' . site_url('assets/images/wish_black.png') . '">'
                        : '<img style="height: 35px; width: 140px; margin-bottom: 15px; filter: grayscale(100%) contrast(200%);" src="' . site_url('assets/images/cod_black.png') . '">';
                    ?>
                </div>
                <div class="col-sm-12 col-xs-12" style="border: solid 1px black; border-radius:5px; width: 150px;">
                    <h4 style="color: black; text-align:center;">
                        <b>USD <?php echo ($trans["payment_method_gateway"] == "whish" && $trans["payment_method_gateway_status"] == "Payment successful") ? "0" : $total ?> </b>

                    </h4>
                </div>
                <p style="color: black; font-size:11px; font-weight:bold;">
                    Date: <?php echo $trans["trans_date"] ?>
                </p>
            </div>
            <div class="col-sm-6 col-xs-6">
                <!-- <p style="color: black; margin-bottom:0px; font-size:12px; font-weight:bold;">
                    Sales Invoice:
                </p> -->
                <div id="qrcode"></div>
                <!-- <img id="barcode" style="height: 95px; width:110px;"></img> -->
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="border:solid 1px black; background-color: black;">
            </div>
            <div class="col-sm-6 col-xs-6" id="test">
                <p style="text-align: left; color: black;">
                    <b>Name: <?php echo $customer_info["account_name"] ?></b>
                    <br>
                    <b>Country: <?php echo $customer_info["country"] ?></b>
                    <br>
                    <b>City: <?php echo $customer_info["city"] ?></b>
                    <br>
                    <b>Place: <?php echo $customer_info["place"] ?></b>
                    <br>
                    <b>Street: <?php echo $customer_info["street"] ?></b>
                    <br>
                    <b>Building: <?php echo $customer_info["building"] ?></b>
                    <br>
                    <b>Floor: <?php echo $customer_info["floor"] ?></b>
                </p>
            </div>

            <div class="col-sm-6 col-xs-6">
                <p style="text-align: left; color: black; font-size:12.5px; margin:2px; border: solid 1px black; border-radius:5px; ">
                    <b>Mobile 1: </b>
                    <br>
                    <b><?php echo $customer_info["phone"] ?></b>
                    <br>
                    <b>Mobile 2: </b>
                    <br>
                    <b><?php echo $customer_info["phone2"] ?></b>
                </p>
            </div>

            <div class="col-sm-12 col-xs-12">
                <p style="text-align: left; color: black;">
                    <b>Details: <?php echo $customer_info["description"] ?></b>
                </p>
            </div>

            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="border:solid 1px black; background-color: black; margin-bottom:10px;">
            </div>

            <br>
            <div class="col-sm-12 col-xs-12">
                <table id="invoice_table">
                    <thead>
                        <tr>
                            <th colspan="3" style="text-align: center;">Item</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <?php foreach ($trans_items as $x => $transItem) : ?>
                            <tr class="<?php echo ($transItem['qty'] > 1) ? 'gray-background' : '' ?>">
                                <td style="width: 90px; margin:2px;"><b><?php echo ($transItem['qty'] > 1) ? '**' : '' ?><?php echo $transItem['barcode'] ?></b></td>
                                <td style="width: 90px; margin:2px;"><b><?php echo ($transItem['qty'] > 1) ? '**' : '' ?><?php echo $transItem['size'] ?></b></td>
                                <td style="width: 90px; margin:2px;"><b><?php echo ($transItem['qty'] > 1) ? '**' : '' ?><?php echo $transItem['qty'] ?></b></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</center>

<div id="editor"></div>