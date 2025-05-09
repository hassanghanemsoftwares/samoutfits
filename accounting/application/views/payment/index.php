<p class="text-right">
<?php echo anchor('payments/add', 'Add Payment', 'accesskey="a" class="btn btn-primary" id="bgadd"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" width="100%" id="paymentsTbl" data-num-rows="<?php echo $this->Journal->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('auto_number') ?></th>
			<th><?php echo $this->lang->line('description') ?></th>
			<th><?php echo $this->lang->line('journal_date') ?></th>
			<th><?php echo $this->lang->line('account_from') ?></th>
			<th><?php echo $this->lang->line('account_to') ?></th>
			<th><?php echo $this->lang->line('currency') ?></th>
			<th><?php echo $this->lang->line('currency_rate') ?></th>
			<th><?php echo $this->lang->line('amount') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['auto_no'] ?></td>
				<td><?php echo $record['description'] ?></td>
				<td><?php echo $record['journal_date'] ?></td>
				<td><?php echo $record['account1'] ?></td>
				<td><?php echo $record['account2'] ?></td>
				<td><?php echo $record['currency_code'] ?></td>
				<td><?php echo $record['currency_rate'] ?></td>
				<td><?php echo $record['amount'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
