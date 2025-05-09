<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<?php echo form_open('reports/daily_sales', 'id="form" name="form" class="form-horizontal" role="form" onsubmit="return validation();"  autocomplete="off" novalidate') ?>
<div class="row">
    <div class="col-sm-5">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="date"><?php echo $this->lang->line('Date') ?></label>
            <div class="col-sm-9">
                <?php echo form_input('date', date('d-m-Y'), 'id="date" class="form-control" required')
                ?>
                <div id="error_date" style="text-align:center" onclick="document.getElementById('error_date').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-5" >
        <div class="form-group">
            <label class="col-sm-3 control-label" for="users"><?php echo $this->lang->line('Users') ?></label>
            <div class="col-sm-9">
                <?php echo form_dropdown('users[]', $users, '', 'id="users" class="form-control selectpicker" data-live-search="true"  multiple title="select users..."') ?>
                <div id="error_users" style="text-align:center" onclick="document.getElementById('error_users').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('Submit') ?></button>
    </div>
</div>
<?php echo form_close() ?>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="dailyreporttbl" <?php echo ($hide_table === 0) ? 'hidden' : '' ?>>
    <thead>
        <tr>
            <th colspan="2" style="text-align: center;"><?php echo "Date: " . $selected_date ?> </th>
        </tr>
        <tr>
            <th style="color: red;"><?php echo $this->lang->line('Title') ?></th>
            <th style="color: red;"><?php echo $this->lang->line('Value') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $this->lang->line('Total_Nb_of_Sales') ?></td>
            <td><?php echo $sales_count ?></td>
        </tr>
        <tr>
            <th style="color: red;"><?php echo $this->lang->line('Total_Nb_of_Sales_by_source') ?>:</th>
            <th style="color: red;"><?php echo $this->lang->line('Value') ?></th>
        </tr>
        <?php foreach ($sources as $s) { ?>
            <tr>
                <td><?php echo $s ?></td>
                <td><?php echo $count_by_source[$s] ?></td>
            </tr>
        <?php } ?>
        <tr>
            <th style="color: red;"><?php echo $this->lang->line('Total_Nb_of_Sales_by_status') ?>:</th>
            <th style="color: red;"><?php echo $this->lang->line('Value') ?></th>
        </tr>
        <?php foreach ($status2 as $st) { ?>
            <tr>
                <td><?php echo $st ?></td>
                <td><?php echo $count_by_status[$st] ?></td>
            </tr>
        <?php } ?>
        <?php
        if ($selected_users !== '') { ?>
            <tr>
                <th style="color: red;"><?php echo $this->lang->line('Total_Nb_of_Sales_by_user') ?>:</th>
                <th style="color: red;"><?php echo $this->lang->line('Value') ?></th>
            </tr>
            <?php foreach ($selected_users as $k => $u) { ?>
                <tr>
                    <td><?php echo $u ?></td>
                    <td><?php echo $count_by_user[$k] ?></td>
                </tr>
        <?php }
        } ?>
        <tr>
            <th style="color: red;"><?php echo $this->lang->line('Total_Nb_of_products_by_category') ?>: </th>
            <th style="color: red;"><?php echo $this->lang->line('Value') ?></th>
        </tr>
        <?php foreach ($categories as $c) { ?>
            <tr>
                <td><?php echo $c ?></td>
                <td><?php echo $products_by_categories[$c] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>