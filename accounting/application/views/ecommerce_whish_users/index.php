<?php if ($this->session->flashdata('message')) { ?>
    <div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message') ?></strong>
    </div>
<?php } ?>
<div class="row">
    <div class="col-sm-4">
        <h3 class="margin-thin"><?php echo $this->lang->line('whish_users') ?></h3>
        <hr>
    </div>
</div>
<br />
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="whish_usersTbl" data-num-rows="<?php echo $this->Ecommerce_user->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('Username'); ?></th>
            <th><?php echo $this->lang->line('Account_Number'); ?></th>
            <th><?php echo $this->lang->line('Birthdate'); ?></th>
            <th><?php echo $this->lang->line('Phone'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) {  ?>
            <tr>
                <td><?php echo $record['eco_user_name'] ?></td>
                <td><?php echo $record['account_number'] ?></td>
                <td><?php echo $record['birthdate'] ?></td>
                <td><?php echo $record['phone'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
