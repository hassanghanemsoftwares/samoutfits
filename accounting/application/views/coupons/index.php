<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
            <?php echo anchor('ecommerce/add_coupon', 'Add Coupon', 'accesskey="b"  class="btn btn-primary" id="bgadd"') ?>
        </p>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="couponsTbl" data-num-rows="<?php echo $this->Coupon->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('code') ?></th>
            <th><?php echo $this->lang->line('customer_name') ?></th>
            <th><?php echo $this->lang->line('expiry_date') ?></th>
            <th><?php echo $this->lang->line('limitation') ?></th>
            <th><?php echo $this->lang->line('usage_times') ?></th>
            <th><?php echo $this->lang->line('amount') ?></th>
            <th><?php echo $this->lang->line('active') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['coupon'] ?></td>
                <td><?php echo $record['customer_name'] ?></td>
                <td><?php echo $record['expiry_date'] ?></td>
                <td><?php echo $record['limitation'] ?></td>
                <td><?php echo $record['usage_times'] ?></td>
                <td><?php echo $record['final_amount'] ?></td>
                <td><?php echo $record['active'] ?></td>
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="modal" id="activation_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b><?php echo $this->lang->line('Coupon_Activate_Deactivate') ?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="modal_coupon_id" hidden>
                <h5><b><?php echo $this->lang->line('Coupon_Code') ?>: </b><span id="modal_coupon_name"></span></h5>
                <center>
                    <?php echo form_dropdown('activation', ['Activate', 'Deactivate'], '', 'id="activation_dropdown" class="form-control" style="width:35%;"') ?>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary bgsave" id="activation_modal_btn"><?php echo $this->lang->line('Submit') ?></button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
            </div>
        </div>
    </div>
</div>