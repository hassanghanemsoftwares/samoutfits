<p class="text-right">
    <button id="print" onclick="window.print()" class="btn btn-primary">print</button>
    <button id="bgback" class="btn btn-primary">Back</button>
    <input type="text" id="sales_nb" value="<?php echo $trans["auto_no"] ?>" hidden>
</p>
<center>
    <div id="myHtml" class="print_invoice" style="background-color: white; color: black; width:430px; margin:10px;
        padding:10px; display: flex; flex-direction: column; min-height: 55vh;">
        <section style="flex: 1;">
            <div class="col-sm-4 col-xs-4">
                <div id="qrcode"></div>
                <!-- <img id="barcode" style="height: 95px; width:110px;"></img> -->
            </div>
            <div class="col-sm-8 col-xs-8" id="test">
                <p style="text-align: left; color: black;">
                    <b>Tracking #: <?php echo $trans["auto_no"] ?></b>
                    <br>
                    <b>Total: <?php echo $total."$" ?></b>
                    <br>
                    <b>From: <?php echo $company_name ?></b>
                    <br>
                    <b>To: <?php echo $customer_info["account_name"] ?></b>
                    <br>
                    <b>Phone: <?php echo $customer_info["phone"] ?></b>
                    <br>
                    <b>Date: <?php echo $trans["value_date"] ?></b>
                    <br>
                    <b>Note: <?php echo $trans["delivery_note"]  ?></b>
                </p>
            </div>
            <br>

            <div class="col-sm-12 col-xs-12">
                <center>
                    <table id="invoice_table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;">Item</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            <?php foreach ($trans_items as $x => $transItem) : ?>
                                <tr>
                                    <td style="width: 90px; margin:2px;"><b><?php echo $transItem['barcode'] ?></b></td>
                                    <td style="width: 90px; margin:2px;"><b><?php echo $transItem['size'] ?></b></td>
                                    <td style="width: 90px; margin:2px;"><b><?php echo $transItem['qty'] ?></b></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </center>
            </div>

        </section>
    </div>
</center>

<div id="editor"></div>