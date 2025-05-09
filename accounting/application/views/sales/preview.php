<center>
    <p class="text-right">
        <input id="btn_convert" type="button" value="Download" class="btn btn-primary" />
        <button id="print" class="btn btn-primary">print</button>
        <button id="bgback" class="btn btn-primary">Back</button>
    </p>

    <div id="myHtml" style="background-color: #F0F0F1; color: #00cc65; width:900px; height: auto; margin:20px;
        padding:15px;">

        <div class="col-sm-12" style="border-bottom: 1px solid #808080; padding:10px;">
            <div class="col-sm-1">
                <img id="logo" src="<?php echo site_url('assets/images/logo.png') ?>">
            </div>
            <div class="col-sm-4 ">
                <h2 style="color: #3e4b51;"><b><?php echo $title ?></b></h2>
            </div>
            <div class="col-sm-3 col-sm-offset-4">
                <p style="color: #3e4b51; text-align:left;">
                    <b>Company Name:</b> <?php echo $company_name ?>
                    <br>
                    <b>Phone: </b> <?php echo $company_phone ?>
                    <br>
                    <b>Address: </b> <?php echo $company_address ?>
                    <br>
                    <b>Email: </b><?php echo $company_email ?>
                    <br>
                    <b>Website: </b><?php echo $company_website ?>
                </p>
            </div>           
        </div>

        <div class="col-sm-12" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-sm-2">
                <p style="text-align: left; color: #e84c3c;"><b>Invoice Info: </b></p>
            </div>
            <div class="col-sm-3">
                <p style="text-align: left; color: #3e4b51;">
                    <b>Invoice Number: </b> <?php echo $trans["auto_no"] ?>
                    <br>
                    <b>Invoice Date: </b> <?php echo $trans["trans_date"] ?>
                    <br>
                    <b>Currency Code: </b> <?php echo $currency ?>
                    <br>
                    <b>Currency Rate: </b> <?php echo $trans["currency_rate"] ?>
                    <br>
                    <b>Sales Account: </b> <?php echo $sales_info["account_name"] . " - " . $sales_info["account_number"] ?>
                </p>
            </div>
            <div class="col-sm-2 col-sm-offset-2">
                <p style="text-align: left; color: #e84c3c;"><b>Customer Info: </b></p>
            </div>
            <div class="col-sm-3 ">
                <p style="text-align: left; color: #3e4b51;">
                    <b>Name: </b> <?php echo $customer_info["account_name"] ?>
                    <br>
                    <b>Account nb: </b> <?php echo $customer_info["account_number"] ?>
                    <br>
                    <b>Phone: </b><?php echo $customer_info["phone"] ?>
                    <br>
                    <b>Address: </b> <?php echo $customer_info["country"] ?>
                    <br>
                    <b>Email: </b><?php echo $customer_info["email"] ?>
                </p>
            </div>
        </div>

        <div>
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr class="danger">
                        <th class="col-sm-2">Product Name</th>
                        <th class="col-sm-2">Barcode</th>
                        <th class="col-sm-2">Warehouse</th>
                        <th class="col-sm-2">Shelf</th>
                        <th class="col-sm-1">Quantity</th>
                        <th class="col-sm-2">Price</th>
                        <th class="col-sm-2">Discount</th>
                        <th class="col-sm-2">Total</th>
                    </tr>
                </thead>
                <tbody style="color: #3e4b51;">
                    <?php foreach ($trans_items as $x => $transItem) : ?>
                        <tr>
                            <td><?php echo $transItem['description'] ?></td>
                            <td><?php echo $transItem['barcode'] ?></td>
                            <td><?php echo $transItem['warehouse'] ?></td>
                            <td><?php echo $transItem['shelf'] ?></td>
                            <td><?php echo $transItem['qty'] ?></td>
                            <td><?php echo $transItem['price'] ?></td>
                            <td><?php echo $transItem['discount'] ?></td>
                            <td><?php echo $transItem['total'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <p style="color: #3e4b51;">
                <b>Sub Total: </b> <?php echo $sub_total ?>
                <br>
            </p>
        </div>
        <div class="col-sm-4">
            <p style="color: #3e4b51;">
                <b>Discount: </b> <?php echo $trans["discount"] ?>
                <br>
            </p>
        </div>
        <div class="col-sm-4">
            <p style="color: #3e4b51;">
                <b>Total: </b> <?php echo $total ?>
                <br>
            </p>
        </div>
        <br>
        <br>

    </div>
</center>