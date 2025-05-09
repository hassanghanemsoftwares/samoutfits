<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
	<input type="text" id="user_type" value="<?php echo $this->violet_auth->get_user_type() ?>" hidden>
	<div class="col-sm-8">
		<p class="text-right">
			<button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
		</p>
	</div>
</div>
<table style="width: 100%;" class="table table-bordered table-striped table-hover table-condensed table-responsive" id="opInventoryTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('barcode') ?></th>
			<th><?php echo $this->lang->line('description') ?></th>
			<th><?php echo $this->lang->line('size') ?></th>
			<th data-no-search="0"><?php echo $this->lang->line('qty') ?></th>
			<th data-no-search="0"><?php echo $this->lang->line('price') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['barcode'] ?></td>
				<td><?php echo $record['description'] ?></td>
				<td><?php echo $record['size'] ?></td>
				<td><?php echo $record['total_qty'] ?></td>
				<td><?php echo $record['price_ttc'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>