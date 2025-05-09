<p class="text-right">
    <button onclick="window.print();return false" class="btn btn-primary" id="print"><?php echo $this->lang->line('print') ?></button>
</p>
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<?php echo form_open('reports/multi_invoices', 'class="form-horizontal" role="form"  onsubmit="return validation();" autocomplete="off"'); ?>
<div class="col-sm-12" id="report_form_div">
    <div class="row">
        <div class="col-sm-12 form-group">
            <label class="col-sm-3 control-label" for="multi_auto_no" id="label_from"><?php echo $this->lang->line('Enter_Multi_Invoice_Auto_no') ?></label>
            <div class="col-sm-9">
                <?php
                echo form_input('multi_auto_no', $multi_auto_no, 'id="multi_auto_no" class="form-control" autocomplete="off" placeholder="ex: 1,2,3"')
                ?>
            </div>
        </div>
        <div class="col-sm-12 form-group">
            <label class="col-sm-3 control-label" for="status2"><?php echo $this->lang->line('status') ?></label>
            <div class="col-sm-9">
                <?php
                echo form_dropdown('status2', $status2, $status_selected, 'id="status2" class="form-control"')
                ?>
            </div>
        </div>
        <div class="col-sm-12 form-group">
            <button type="submit" id="search" style="float: right;" class="btn btn-primary btn-block"><?php echo $this->lang->line('submit') ?></button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<div class="row">
    <div class="col-sm-12">
        <?php if ($trans) {
            foreach ($trans as $t) { ?>
                <div style="border: 2px solid #444; margin-bottom: 30px;">
                    <table class="table table-bordered table-condensed table-striped table-hover">
                        <tr style="background-color: #ffdf59;">
                            <th colspan="7">
                                <center><?php echo ($t[0]['trans_type'] == 'EX') ? 'Exchange' : 'Invoice' ?> #<?php echo $t[0]['auto_no'] ?></center>
                            </th>
                        </tr>
                        <tr>
                            <th><?php echo $this->lang->line('Date') ?></th>
                            <td colspan="6"><?php echo $t[0]['trans_date'] ?></td>
                        </tr>
                        <tr>
                            <th><?php echo $this->lang->line('Customer') ?></th>
                            <td colspan="6"><?php echo $t[0]['account_name'] . " - " . $t[0]['account_number'] ?></td>
                        </tr>
                        <tr>
                            <th><?php echo $this->lang->line('Source') ?></th>
                            <td colspan="6"><?php echo $t[0]['source'] ?></td>
                        </tr>
                        <tr>
                            <th><?php echo $this->lang->line('Status') ?></th>
                            <td colspan="6"><?php echo $t[0]['status2'] ?></td>
                        </tr>
                        <tr style="background-color: #ffdf59;">
                            <th colspan="7">
                                <center><?php echo ($t[0]['trans_type'] == 'EX') ?  $this->lang->line('Exchange') : $this->lang->line('Invoice') ?> <?php echo $this->lang->line('Items') ?></center>
                            </th>
                        </tr>
                        <tr style="background-color: #444; color: white;">
                            <th><?php echo $this->lang->line('Barcode') ?></th>
                            <th><?php echo $this->lang->line('Image') ?></th>
                            <th><?php echo $this->lang->line('Size') ?></th>
                            <th><?php echo $this->lang->line('Qty') ?></th>
                            <th><?php echo $this->lang->line('Warehouse') ?></th>
                            <th><?php echo $this->lang->line('Shelf') ?></th>
                            <th><?php echo $this->lang->line('Description') ?></th>
                        </tr>
                        <?php foreach ($t as $i) { ?>
                            <tr>
                                <th><?php echo $i['barcode'] ?></th>
                                <th><img src="assets/uploads/<?php echo $i['image'] ?>" height="100px"></th>
                                <th><?php echo $i['size'] ?></th>
                                <th><?php echo $i['qty'] ?></th>
                                <th><?php echo $i['warehouse'] ?></th>
                                <th><?php echo $i['shelf'] ?></th>
                                <th><?php echo $i['description'] ?></th>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
        <?php }
        } ?>
    </div>
</div>