<p class="text-right">
	<?php echo anchor('items/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<h3><strong><?php echo $this->lang->line('Product_Name'); ?>: <?php echo $records[0]['description'] ?></strong></h3>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="itemsactivityTbl" data-num-rows="<?php echo $this->Item->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('account_name'); ?></th>
			<th><?php echo $this->lang->line('trans_type'); ?></th>
			<th><?php echo $this->lang->line('trans_date'); ?></th>
			<th><?php echo $this->lang->line('invoice_number'); ?></th>
			<th><?php echo $this->lang->line('currency'); ?></th>
			<th><?php echo $this->lang->line('currency_rate'); ?></th>
			<th><?php echo $this->lang->line('warehouse'); ?></th>
			<th><?php echo $this->lang->line('shelf'); ?></th>
			<th><?php echo $this->lang->line('qty'); ?></th>
			<th><?php echo $this->lang->line('price'); ?></th>
			<th><?php echo $this->lang->line('total_of_item'); ?></th>
			<th><?php echo $this->lang->line('actions'); ?></th>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['account_name'] ?></td>
				<td><?php echo $record['trans_type'] ?></td>
				<td><?php echo $record['trans_date'] ?></td>
				<td><?php echo $record['auto_no'] ?></td>
				<td><?php echo $record['currency_code'] ?></td>
				<td><?php echo $record['currency_rate'] ?></td>
				<td><?php echo $record['warehouse'] ?></td>
				<td><?php echo $record['shelf'] ?></td>
				<td><?php echo $record['qty'] ?></td>
				<td><?php echo $record['price'] ?></td>
				<td><?php echo $record['total_of_item'] ?></td>
				<td><?php echo $record['trans_id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<script type="text/javascript">
	const ActivityItemId = <?php echo $item_id ?>;
</script>