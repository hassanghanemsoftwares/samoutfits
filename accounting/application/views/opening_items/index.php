<h3><?php echo $title ?></h3>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="purchasesTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('auto_number') ?></th>
			<th><?php echo $this->lang->line('transaction_date') ?></th>
			<th><?php echo $this->lang->line('description') ?></th>
			<th><?php echo $this->lang->line('barcode') ?></th>
			<th><?php echo $this->lang->line('total_qty') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['auto_no'] ?></td>
				<td><?php echo $record['trans_date'] ?></td>
				<td><?php echo $record['description'] ?></td>
				<td><?php echo $record['barcode'] ?></td>
				<td><?php echo $record['total_qty'] ?></td>	
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
