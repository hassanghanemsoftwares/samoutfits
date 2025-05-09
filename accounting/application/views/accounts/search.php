<style>
    @media(min-width:768px) {
        .mobile_search {
            display: none;
        }

    }
</style>
<?php
// var_dump($account_id);
// exit;
if ($account_id == null) {
?>

<?php
}
?>
    <div class="form-group row mobile_search">
        <div class="col-sm-10">
            <label class="col-sm-5 control-label" for="account_nb"><?php echo $this->lang->line('Search_Account_by_Number_Name_Phone') ?></label>
            <div class="col-sm-7">
                <?php echo form_input('', '', ' class="form-control account_nb_search"') ?>
                <?php echo form_input('', '', ' class="form-control hide account_id_search"') ?>
            </div>
        </div>
    </div>
<input type="hidden" value="<?php echo $account_id  ?>" id="url_account_id">

<div class="row">
    <table id="acc_table" class="table table-bordered table-striped table-hover table-condensed table-responsive"></table>
</div>