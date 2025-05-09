<?php if ($this->session->flashdata('message')) { ?>
    <div id="msg" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('msg').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message') ?></strong>
    </div>
<?php } ?>
<div class="row form-group">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label class="col-sm-5 control-label" for="tot_profit"><?php echo $this->lang->line('Total_Profit') ?></label>
            <div class="col-sm-7">
                <?php echo form_input('tot_profit', $tot_profit, 'id="tot_profit" class="form-control" readonly="true" required')
                ?>
            </div>
        </div>
    </div>
</div>
<?php echo form_open_multipart('', 'id="importform" name="importform" class="form-horizontal" role="form" novalidate') ?>
<div class="row form-group">
    <div class="col-sm-8">
        <input type="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="form-control">
    </div>
    <div class="col-sm-2 text-right">
        <?php echo form_submit('submitBtn', $this->lang->line('check'), 'class="btn btn-primary" accesskey="s" value="upload"'),
        ' ',
        form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
    </div>
    <div class="col-sm-2 text-right">
       <button type="button" id="export" name="export" onclick="ExportToExcel('xlsx')" class="btn btn-primary"><?php echo $this->lang->line('Export_Excel') ?></button>
    </div>
</div>
<?php echo form_close() ?>
<div class="row">
    <div class="col-sm-5">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="cash_date"><?php echo $this->lang->line('Cash_Date') ?></label>
            <div class="col-sm-6">
                <?php echo form_input('cash_date', '', 'id="cash_date" class="form-control" required')
                ?>
                <div id="error_cash_date" style="text-align:center" onclick="document.getElementById('error_cash_date').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-5 hide">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="status"><?php echo $this->lang->line('Status') ?></label>
            <div class="col-sm-6">
                <?php echo form_dropdown('status', $status2, $selected_status, 'id="status" class="form-control" required')
                ?>
                 <div id="error_status" style="text-align:center" onclick="document.getElementById('error_status').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <button type="button" id="bgsave" class="btn btn-primary"><?php echo $this->lang->line('Submit') ?></button>
    </div>
</div>
<br>
<div class="row">
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="cashTbl">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('invoice_nb') ?></th>
                <th><?php echo $this->lang->line('customer_name') ?></th>
                <th><?php echo $this->lang->line('amount') ?></th>
                <th><?php echo $this->lang->line('profit') ?></th>
                <th><?php echo $this->lang->line('differance') ?></th>
                <th><?php echo $this->lang->line('note') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) { ?>
                <tr>
                    <td><?php echo $result['invoice nb'] ?></td>
                    <td><?php echo $result['customer'] ?></td>
                    <td><?php echo $result['cash'] ?></td>
                    <td><?php echo $result['profit'] ?></td>
                    <td><?php echo $result['differance'] ?></td>
                    <td><?php echo $result['note'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>