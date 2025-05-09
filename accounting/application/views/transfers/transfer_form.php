<p class="text-right">
    <button accesskey="b" class="btn btn-primary" id="bgback"><?php echo $this->lang->line('Back') ?></button>
</p>
<?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form" onsubmit="return validation();" autocomplete="off" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Transaction->get_field('id') ?>" />
<div class="row">
    <div class="col-sm-12">
        <h4><?php echo $transTypeText ?></h4>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="auto_no"><?php echo $this->lang->line('Transfer') ?> #</label>
            <div class="col-sm-8">
                <?php
                echo form_input('trans[auto_no]', $this->Transaction->get_field('auto_no'), 'id="auto_no" class="form-control" readonly="true" required '),
                $this->Transaction->get_error('auto_no')
                ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="trans_date"><?php echo $this->lang->line('Date') ?></label>
            <div class="col-sm-8">
                <?php echo form_input('trans[trans_date]', $trans_date, 'id="trans_date" class="form-control" required'), $this->Transaction->get_error('trans_date')
                ?>
                <div id="error_trans_date" style="text-align:center" onclick="document.getElementById('error_trans_date').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="itemLookup"><?php echo $this->lang->line('Select_Item') ?></label>
            <div class="col-sm-10">
                <?php echo form_input('', '', 'id="itemLookup" class="form-control" required') ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered table-condensed table-striped table-hover">
            <thead>
                <tr class="danger">
                    <th class="col-sm-1"><?php echo $this->lang->line('Delete') ?></th>
                    <th class="col-sm-2"><?php echo $this->lang->line('Description') ?></th>
                    <th class="col-sm-2"><?php echo $this->lang->line('Barcode') ?></th>
                    <th class="col-sm-2"><?php echo $this->lang->line('From') ?></th>
                    <th class="col-sm-2"><?php echo $this->lang->line('To') ?></th>
                    <th class="col-sm-2"><?php echo $this->lang->line('Sizes') ?></th>
                    <th class="col-sm-1"><?php echo $this->lang->line('Available_Quantity') ?></th>
                    <th class="col-sm-1"><?php echo $this->lang->line('Quantity') ?></th>
                    <th class="col-sm-1"><?php echo $this->lang->line('Cost') ?></th>
                </tr>
            </thead>
            <tbody id="transactionLines">
                <?php
                $this->load->view('transfers/edit_transfer_form_items_line', ['transItems' => isset($trans_items) ? $trans_items : []]);
                ?>
            </tbody>
        </table>
        <div id="error_transactionLines" style="text-align:center" onclick="document.getElementById('error_transactionLines').style.display = 'none'"></div>
    </div>
    <?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
</div>
</div>
<?php echo form_close() ?>
<script type="text/javascript">
    const ItemLineTpl = <?php echo json_encode($this->load->view('transfers/transfer_form_items_line', [], true)) ?>;
</script>