<p class="text-right">
<?php echo anchor('order_purchases/add', 'Add Order Purchase', 'accesskey="a" class="btn btn-primary" id="bgadd" style="width:200px"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="purchasesTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('auto_number') ?></th>
			<th><?php echo $this->lang->line('order_number') ?></th>
			<th><?php echo $this->lang->line('transaction_date') ?></th>
			<th><?php echo $this->lang->line('value_date') ?></th>
			<th><?php echo $this->lang->line('supplier_account') ?></th>
			<th><?php echo $this->lang->line('purchases_account') ?></th>
			<th><?php echo $this->lang->line('currency') ?></th>
			<th><?php echo $this->lang->line('currency_rate') ?></th>
			<th><?php echo $this->lang->line('discount') ?></th>
			<th><?php echo $this->lang->line('total') ?></th>
			<th><?php echo $this->lang->line('done') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['auto_no'] ?></td>
				<td><?php echo $record['op_nb'] ?></td>
				<td><?php echo $record['trans_date'] ?></td>
				<td><?php echo $record['value_date'] ?></td>
				<td><?php echo $record['account1'] ?></td>
				<td><?php echo $record['account2'] ?></td>
				<td><?php echo $record['currency_code'] ?></td>
				<td><?php echo $record['currency_rate'] ?></td>
				<td><?php echo $record['discount'] ?></td>				
				<td><?php echo $record['total'] ?></td>
				<td><?php echo $record['status'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
