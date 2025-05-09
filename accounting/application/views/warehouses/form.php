<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
    <img src="<?php echo site_url('assets/images/back.png') ?>" id="downloadimg"> <?php echo anchor('warehouses/index', 'Back', 'accesskey="b" class="btn btn-primary"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-3">
		<h4><?php echo $title ?></h4>
		<hr />
	</div>
</div>
<?php echo form_open('', 'id="warehouseForm" class="form-horizontal" autocomplete="off" role="form" novalidate') ?>
<input name="id" id="id" type="hidden" value="<?php echo $this->Warehouse->get_field('id') ?>" />
<div class="form-group">
    <label class="col-sm-4 control-label" for="warehouse">Warehouse</label>
    <div class="col-sm-4">
        <?php
        echo form_input('warehouse', $this->Warehouse->get_field('warehouse'), 'autofocus id="warehouse" list="warehouses" maxlength="255" class="form-control" required'),
        $this->Warehouse->get_error('warehouse')
        ?>
        <datalist id="warehouses">
            <?php foreach($warehouses_list as $w):?>
            <option value="<?php echo $w ?>"><?php echo $w ?></option>
            <?php endforeach;?>
		</datalist>	
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label" for="shelf">Shelf</label>
    <div class="col-sm-4">
        <?php
        echo form_input('shelf', $this->Warehouse->get_field('shelf'), 'autofocus id="shelf" maxlength="255" class="form-control" required'),
        $this->Warehouse->get_error('shelf')
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-4 text-right">
        <img src="<?php echo site_url('assets/images/tick.png') ?>" id="saveimg"><?php
                                                                                    echo form_submit('submitBtn', 'Save', 'class="btn btn-primary" accesskey="s"'); ?>
        <img src="<?php echo site_url('assets/images/reset.png') ?>" id="addimg"> <?php
                                                                                    echo form_reset('reset', 'Reset', 'class="btn btn-primary"')
                                                                                    ?>
    </div>
</div>
<?php
echo form_close();
