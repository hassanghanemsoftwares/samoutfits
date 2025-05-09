<p class="text-right">
    <button onclick="window.print();return false" class="btn btn-primary" id="print"><?php echo $this->lang->line('print') ?></button>
</p>
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<?php echo form_open('reports/stock', 'class="form-horizontal" role="form"  onsubmit="return validation();" autocomplete="off"'); ?>
<div class="col-sm-12" id="report_form_div">
    <div class="row">
        <div class="col-sm-6 form-group">
            <label class="col-sm-4 control-label" for="select_item" id="label_from"><?php echo $this->lang->line('select_item') ?></label>
            <div class="col-sm-8">
                <?php
                echo form_input('select_item', $name, 'id="select_item" class="form-control" autocomplete="off"')
                ?>
                <input type="text" name="item_id" id="item_id" value="<?php echo $item_id ?>" hidden>
                <div id="error_item_id" style="text-align:center" onclick="document.getElementById('error_item_id').style.display = 'none'"></div>
            </div>
        </div>
        <div class="col-sm-6 form-group">
            <label class="col-sm-4 control-label" for="size" id="label_from"><?php echo $this->lang->line('size') ?></label>
            <div class="col-sm-8">
                <?php
                echo form_dropdown('size', $sizes, $size, 'id="size" class="form-control" autocomplete="off"')
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group">
            <label class="col-sm-4 control-label" for="from_date"><?php echo $this->lang->line('from_date') ?></label>
            <div class="col-sm-8">
                <?php
                echo form_input('from_date', $from, 'id="from_date" class="form-control i-from_date" autocomplete="off"')
                ?>
                <div id="error_from_date" style="text-align:center" onclick="document.getElementById('error_from_date').style.display = 'none'"></div>
            </div>
        </div>
        <div class="col-sm-6 form-group">
            <label class="col-sm-4 control-label" for="to_date" id="label_from"><?php echo $this->lang->line('to_date') ?></label>
            <div class="col-sm-8">
                <?php
                echo form_input('to_date', $to, 'id="to_date" class="form-control i-to_date" autocomplete="off"')
                ?>
                <div id="error_to_date" style="text-align:center" onclick="document.getElementById('error_to_date').style.display = 'none'"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-2 form-group">
        <button type="submit" id="search" class="btn btn-primary btn-block"><?php echo $this->lang->line('search') ?></button>
    </div>
</div>
<?php echo form_close(); ?>
<?php if ($records !== []) { ?>
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('auto_no') ?></th>
                <th><?php echo $this->lang->line('trans_type') ?></th>
                <th><?php echo $this->lang->line('trans_date') ?></th>
                <th><?php echo $this->lang->line('barcode') ?></th>
                <th><?php echo $this->lang->line('size') ?></th>
                <th><?php echo $this->lang->line('qty') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record) { ?>
                <tr>
                    <td><?php echo $record['auto_no'] ?></td>
                    <td><?php echo $record['trans_type'] ?></td>
                    <td><?php echo $record['trans_date'] ?></td>
                    <td><?php echo $record['barcode'] ?></td>
                    <td><?php echo $record['size'] ?></td>
                    <td><?php echo ($record['mvt_type'] == -1)? '-'.$record['qty'] : '+'.$record['qty'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>