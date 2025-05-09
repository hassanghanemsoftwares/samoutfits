<center>
    <p class="text-right">
        <input id="btn_convert" type="button" value="Download" class="btn btn-primary" />
        <button id="print" class="btn btn-primary">print</button>
        <button accesskey="b" class="btn btn-primary" id="bgback">Back</button>
        <input type="text" id="dn_nb" value="<?php echo $trans["auto_no"] ?>" hidden>
    </p>
    <div id="myHtml" style="background-color: #F0F0F1; color: #00cc65; width:1000px; height: auto; margin:20px;
        padding:25px;">
        <div class="col-sm-12">
            <div class="col-sm-1">
                <img id="logo" src="<?php echo site_url('assets/images/logo.png') ?>">
            </div>
            <div class="col-sm-5 col-sm-offset-2">
                <h2 style="color: #3e4b51;">Pickup Note</h2>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p style="color: #3e4b51; border: 1px solid #3e4b51; border-radius: 10px;">
                    <b><?php echo $company_name ?></b>
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
        <div class="col-sm-12">
            <div class="col-sm-3">
                <p style="text-align: left; color: #3e4b51; border: 1px solid #3e4b51; border-radius: 10px; padding:3px;">
                    <b>Invoice Number: </b> <?php echo $trans["auto_no"] ?>
                    <br>
                    <b>Pickup Number: </b> <?php echo $trans["auto_no"] ?>
                    <br>
                    <b>Invoice Date: </b> <?php echo $trans["trans_date"] ?>
                    <br>
                    <b>Currency Code: </b> <?php echo $currency ?>
                </p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
            <img id="barcode" style="height: 80px; width:100px; border-radius: 5px;"></img>
            </div>
            <div class="col-sm-3 col-sm-offset-2">
                <p style="color: #3e4b51; border: 1px solid #3e4b51; border-radius: 10px;">
                    <b>Customer: </b> <?php echo $customer_info["account_name"] ?>
                    <br>
                    <b>Phone: </b><?php echo $customer_info["phone"] ?>
                    <br>
                    <b>Address: </b> <?php echo $customer_info["address"] ?>
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
                        <th class="col-sm-2">Product Barcode</th>                       
                        <th class="col-sm-2">warehouse</th>
                        <th class="col-sm-2">shelf</th>
                        <th class="col-sm-2">Quantity</th>
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
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</center>