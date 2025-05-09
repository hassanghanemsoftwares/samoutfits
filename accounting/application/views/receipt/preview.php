<center>
    <p class="text-right">
        <input id="btn_convert" type="button" value="<?php echo $this->lang->line('Download') ?>" class="btn btn-primary" />
        <button id="print" class="btn btn-primary"><?php echo $this->lang->line('Print') ?></button>
        <button id="bgback" class="btn btn-primary"><?php echo $this->lang->line('Back') ?></button>
    </p>

    <div id="myHtml" style="background-color: #F0F0F1; color: #00cc65; width:1150px; height: 550px; margin:20px;
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
                    <b><?php echo $this->lang->line('Company_Name') ?>:</b> <?php echo $company_name ?>
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
        <div class="col-sm-12" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-sm-2">
                <p style="text-align: left; color: #e84c3c;"><b>Account from Info: </b></p>
            </div>
            <div class="col-sm-3 ">
                <p style="text-align: left; color: #3e4b51;">
                    <b><?php echo $this->lang->line('Name') ?>: </b> <?php echo $from_info["account_name"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Account_nb') ?>: </b> <?php echo $from_info["account_number"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Phone') ?>: </b><?php echo $from_info["phone"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Address') ?>: </b> <?php echo $from_info["address"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Email') ?>: </b><?php echo $from_info["email"] ?>
                </p>
            </div>
            <div class="col-sm-2 col-sm-offset-2">
                <p style="text-align: left; color: #e84c3c;"><b>Account to Info: </b></p>
            </div>
            <div class="col-sm-3 ">
                <p style="text-align: left; color: #3e4b51;">
                    <b><?php echo $this->lang->line('Name') ?>: </b> <?php echo $to_info["account_name"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Account_nb') ?>: </b> <?php echo $to_info["account_number"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Phone') ?>: </b><?php echo $to_info["phone"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Address') ?>: </b> <?php echo $to_info["address"] ?>
                    <br>
                    <b><?php echo $this->lang->line('Email') ?>: </b><?php echo $to_info["email"] ?>
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="col-sm-4 col-sm-offset-4" style="border: 1px solid #808080; padding: 10px; border-radius: 10px;">
            <div class="col-sm-6">
                <p style="color: #3e4b51">
                    <b><?php echo $this->lang->line('Receipt_Number') ?>: </b>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51;">
                    <strong><?php echo $trans["auto_no"] ?></strong>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51">
                    <b><?php echo $this->lang->line('Receipt_Date') ?>: </b>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51;">
                    <strong><?php echo $trans["journal_date"] ?></strong>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51">
                    <b><?php echo $this->lang->line('Currency_Code') ?>: </b>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51;">
                    <strong> <?php echo $currency ?></strong>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51">
                    <b><?php echo $this->lang->line('Currency_Rate') ?>: </b>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51;">
                    <strong><?php echo $trans["currency_rate"] ?></strong>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #e84c3c;">
                    <b><?php echo $this->lang->line('Receipt_Amount') ?>: </b>
                </p>
            </div>
            <div class="col-sm-6">
                <p style="color: #3e4b51;">
                    <strong><?php echo $trans["amount"] . " " . $currency ?></strong>
                </p>
            </div>
        </div>
    </div>
</center>