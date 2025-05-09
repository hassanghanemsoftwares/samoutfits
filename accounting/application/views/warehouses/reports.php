<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<div class="col-sm-12">
    <div class="col-sm-4 form-group">
        <label class="col-sm-4 control-label" for="from"><?php echo "warehouses" ?></label>
        <div class="col-sm-8">
            <?php
            echo form_dropdown('warehouses_select_report', $warehouses, '', 'id="warehouses_select_report" class="form-control i-warehouse"')
            ?>
        </div>
    </div>
    <div class="col-sm-4 form-group">
        <label class="col-sm-4 control-label" for="to"><?php echo "shelfs" ?></label>
        <div class="col-sm-8">
            <?php
            echo form_dropdown('shelf_select_report', '', '', 'id="shelf_select_report" class="form-control i-shelf"')
            ?>
        </div>
    </div>
    <?php echo form_open('warehouses/reports'); ?>
    <div class="col-sm-3 form-group">
        <button type="submit" class="btn btn-primary btn-block">search</button>
    </div>
</div>
<input type="hidden" name="warehouse_text" id="warehouse_text" class="form-control">
<input type="hidden" name="shelf_text" id="shelf_text" class="form-control">
<?php echo form_close(); ?>