<center>
    <p class="text-right">
        <input id="btn_convert" type="button" value="<?php echo $this->lang->line('Download') ?>" class="btn btn-primary" />
        <button id="print" class="btn btn-primary"><?php echo $this->lang->line('Print') ?></button>
        <button accesskey="b" class="btn btn-primary" id="bgback"><?php echo $this->lang->line('Back') ?></button>
        <input type="text" id="dn_nb" value="<?php echo $trans["auto_no"] ?>" hidden>
    </p>

    <div id="myHtml" style="background-color: #F0F0F1; color: #00cc65; width:1000px; height: auto; margin:20px;
        padding:25px;">
        <div class="col-sm-12">
            <div class="col-sm-1">
                <img id="logo" src="<?php echo site_url('assets/images/logo.png') ?>">
            </div>
            <div class="col-sm-5 col-sm-offset-2">
                <h2 style="color: #3e4b51;"><?php echo $this->lang->line('Delivery_Note') ?></h2>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p style="color: #3e4b51; border: 1px solid #3e4b51; border-radius: 10px;">
                    <b><?php echo $company_name ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Phone') ?>: </b> <?php echo $company_phone ?>
                    <br>
                    <b><?php echo $this->lang->line('Address') ?>: </b> <?php echo $company_address ?>
                    <br>
                    <b><?php echo $this->lang->line('Email') ?>: </b><?php echo $company_email ?>
                    <br>
                    <b><?php echo $this->lang->line('Website') ?>: </b><?php echo $company_website ?>
                </p>
            </div>
        </div>

        <div class="col-sm-12">

            <div class="col-sm-3">
                <p style="text-align: left; color: #3e4b51; border: 1px solid #3e4b51; border-radius: 10px; padding:3px;">
                    <b><?php echo $this->lang->line('Invoice_Number') ?>: </b> <?php echo $trans["auto_no"] ?>
                    <br>
                    <b><?php echo $this->lang->line('DN_Number') ?>: </b> <?php echo $trans["auto_no"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Invoice_Date') ?>: </b> <?php echo $trans["trans_date"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Currency_Code') ?>: </b> <?php echo $currency ?>
                </p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
            <img id="barcode" style="height: 80px; width:100px; border-radius: 5px;"></img>
            </div>
            <div class="col-sm-3 col-sm-offset-2">
                <p style="color: #3e4b51; border: 1px solid #3e4b51; border-radius: 10px;">
                    <b><?php echo $this->lang->line('Customer') ?>: </b> <?php echo $customer_info["account_name"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Phone') ?>: </b><?php echo $customer_info["phone"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Address') ?>: </b> <?php echo $customer_info["city"]." - ".$customer_info["place"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Email') ?>: </b><?php echo $customer_info["email"] ?>
                </p>
            </div>
        </div>

        <div>
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr class="danger">
                        <th class="col-sm-2"><?php echo $this->lang->line('Product_Name') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Barcode') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Quantity') ?></th>
                    </tr>
                </thead>
                <tbody style="color: #3e4b51;">
                    <?php foreach ($trans_items as $x => $transItem) : ?>
                        <tr>
                            <td><?php echo $transItem['description'] ?></td>
                            <td><?php echo $transItem['barcode'] ?></td>
                            <td><?php echo $transItem['qty'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="col-sm-3 col-sm-offset-7" style="text-align: right; color: #3e4b51;">
            <h5><b><?php echo $this->lang->line('Customer_Signture') ?>:</b></h5>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</center>