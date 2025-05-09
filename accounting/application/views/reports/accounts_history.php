<div class="row">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<style>
    @media(min-width:768px) {
        .mobile_search {
            display: none;
        }

    }
</style>
<div class="form-group row mobile_search">
    <?php echo form_open('', 'id="acchistoryForm" name="acchistoryForm" role="form" autocomplete="off" method="get"') ?>

    <div class="col-sm-10">
        <label class="col-sm-5 control-label" for="account_nb"><?php echo $this->lang->line('Search_Account_by_Number_Name_Phone') ?></label>
        <div class="col-sm-6">
            <input type="text" id="account_nb" class="form-control" value="<?php echo $account ?>" required>
            <?php echo form_input('account_id', $account_id, 'id="account_id" class="hide"') ?>
        </div>
    </div>
    <div class="col-sm-2">
        <button type="submit" id="submit_btn" class="btn btn-primary"><?php echo $this->lang->line('Submit') ?></button>
    </div>
    <?php echo form_close() ?>
</div>
<?php if ($account_info) { ?>
    <div class="row">
        <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
            <thead>
                <tr style="background-color: #333; color: white;">
                    <th><?php echo $this->lang->line('account_number') ?></th>
                    <th><?php echo $this->lang->line('account_name') ?></th>
                    <th><?php echo $this->lang->line('currency') ?></th>
                    <th><?php echo $this->lang->line('phone') . " 1" ?></th>
                    <th><?php echo $this->lang->line('phone') . " 2" ?></th>
                    <th><?php echo $this->lang->line('email') ?></th>
                    <th><?php echo $this->lang->line('country') ?></th>
                    <th><?php echo $this->lang->line('city') ?></th>
                    <th><?php echo $this->lang->line('place') ?></th>
                    <th><?php echo $this->lang->line('street') ?></th>
                    <th><?php echo $this->lang->line('building') ?></th>
                    <th><?php echo $this->lang->line('floor') ?></th>
                    <th><?php echo $this->lang->line('direction') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $account_info['account_number'] ?></td>
                    <td><?php echo $account_info['account_name'] ?></td>
                    <td><?php echo $account_info['currency_code'] ?></td>
                    <td>
                        <a href="accounts/open_customer_whatsapp/<?php echo $account_info['id'] ?>" class="btn bt-link btn-xs" target="_blank" title="Whatsapp"><img src="assets/images/whatsapp.png" width="20" height="20"> <?php echo $account_info['phone'] ?></a>
                    </td>
                    <td><?php echo $account_info['phone2'] ?></td>
                    <td><?php echo $account_info['email'] ?></td>
                    <td><?php echo $account_info['country'] ?></td>
                    <td><?php echo $account_info['city'] ?></td>
                    <td><?php echo $account_info['place'] ?></td>
                    <td><?php echo $account_info['street'] ?></td>
                    <td><?php echo $account_info['building'] ?></td>
                    <td><?php echo $account_info['floor'] ?></td>
                    <td><?php echo $account_info['description'] ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
            <tr>
                <th style="background-color: #333; color: white;"><?php echo $this->lang->line('debit') ?></th>
                <td><?php echo $acc_cdb['debit'] ?></td>
                <th style="background-color: #333; color: white;"><?php echo $this->lang->line('credit') ?></th>
                <td><?php echo $acc_cdb['credit'] ?></td>
                <th style="background-color: #333; color: white;"><?php echo $this->lang->line('balance') ?></th>
                <td><?php echo $acc_cdb['balance'] ?></td>
            </tr>
        </table>
        <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
            <thead>
                <tr style="background-color: #333; color: white;">
                    <th>#</th>
                    <th><?php echo $this->lang->line('type'); ?></th>
                    <th><?php echo $this->lang->line('invoice_number'); ?></th>
                    <th><?php echo $this->lang->line('trans_date'); ?></th>
                    <th><?php echo $this->lang->line('total'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0;
                foreach ($records as $record) {
                    $count++; ?>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $this->lang->line($record['journal_type']); ?></td>
                        <td><?php echo $record['auto_no'] ?></td>
                        <td><?php echo $record['journal_date'] ?></td>
                        <td><?php echo $record['total'] . " " . $record['currency_code'] ?></td>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>