	<p class="text-right">
		<?php echo anchor('accounts/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
	</p>
	<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="activityaccountTbl" data-num-rows="<?php echo $this->Journal->get('paginationTotalRows') ?>">
		<thead>
			<tr>
				<th><?php echo $this->lang->line('account_number'); ?></th>
				<th><?php echo $this->lang->line('account_name'); ?></th>
				<th><?php echo $this->lang->line('journal_type'); ?></th>
				<th><?php echo $this->lang->line('invoice_number'); ?></th>
				<th><?php echo $this->lang->line('trans_date'); ?></th>
				<th><?php echo $this->lang->line('currency_rate'); ?></th>
				<th><?php echo $this->lang->line('currency_name'); ?></th>
				<th><?php echo $this->lang->line('total'); ?></th>
				<th><?php echo $this->lang->line('actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($records as $record) { ?>
				<tr>
					<td><?php echo $record['account_number'] ?></td>
					<td><?php echo $record['account_name'] ?></td>
					<td><?php echo $record['journal_type'] ?></td>
					<td><?php echo $record['auto_no'] ?></td>
					<td><?php echo $record['journal_date'] ?></td>
					<td><?php echo $record['currency_rate'] ?></td>
					<td><?php echo $record['currency_code'] ?></td>
					<td><?php echo $record['total'] ?></td>
					<td><?php echo $record['id'] ?></td>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script type="text/javascript">
		const ActivityAccountId = <?php echo $account_id ?>;
	</script>