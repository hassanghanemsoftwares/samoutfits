<?php if ($this->session->flashdata('message')) { ?>
    <div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message') ?></strong>
    </div>
<?php } ?>
<div class="row">
    <div class="col-sm-4">
        <h3 class="margin-thin"><?php echo $this->lang->line('ecommerce_users') ?></h3>
        <hr>
    </div>
</div>
<br />
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="ecousersTbl" data-num-rows="<?php echo $this->Ecommerce_user->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('Username'); ?></th>
            <th><?php echo $this->lang->line('Account_Number'); ?></th>
            <th><?php echo $this->lang->line('Birthdate'); ?></th>
            <th><?php echo $this->lang->line('Phone'); ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) {  ?>
            <tr>
                <td><?php echo $record['eco_user_name'] ?></td>
                <td><?php echo $record['account_number'] ?></td>
                <td><?php echo $record['birthdate'] ?></td>
                <td><?php echo $record['phone'] ?></td>
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- Reset Pass Modal -->
<div id="resetPassModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    <legend><?php echo $this->lang->line('Reset_Password'); ?></legend>
                </h4>
            </div>
            <div class="modal-body">
                <center>
                    <h4 id="reset_msg"></h4>
                    <br>
                    <h4 id="new_pass_reset"></h4>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('Close'); ?></button>
            </div>
        </div>
    </div>
</div>