<p id="group_by_visibility" hidden><?php echo $group_by_visibility ?></p>
<p class="text-right">
	<?php echo anchor('warehouses/reports', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback" ') ?>
</p>	
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<p class="text-left">
<h2>
    <strong>Warehouse Name :</strong>
    <?php echo $warehouse_name;    ?>
</h2>
<hr />
</p>
<p>
	<?php echo anchor('warehouses/reports_groupby/'.$warehouse_name.'/'.$shelf_name, 'Group by', 'accesskey="b" class="btn btn-primary " id="bglist" ') ?>
</p>
<br>
<div class="table-wrapper-scroll-y my-custom-scrollbar" id="tablescroll">
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('item_name'); ?></th>
                <th><?php echo $this->lang->line('barcode'); ?></th>
                <th><?php echo $this->lang->line('qty'); ?></th>
                <?php if($group_by==0) {?>
                <th><?php echo $this->lang->line('shelf'); ?></th>
                <?php }  ?>
        </thead>
        <tbody>
            <?php foreach ($items as $record) { ?>
                <tr>
                    <td><?php echo $record['description']?></td>
                    <td><?php echo $record['barcode'] ?></td>
                    <td><?php echo $record['qty'] ?></td>
                    <?php if($group_by==0) {?>
                    <td><?php echo $record['shelf'] ?></td>
                    <?php }  ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>