<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<div class="row">
	<div class="col-sm-6">
		<h3 class="margin-thin"><?php echo $this->lang->line('accounts_list') ?></h3>
	</div>
	<div class="col-sm-6">
		<p class="text-right">
			<button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
			<?php echo anchor('accounts/add', 'Add Account', 'accesskey="a" class="btn btn-primary" id="bgadd" ') ?>
		</p>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="accountsTbl" data-num-rows="<?php echo $this->Account->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('account_number') ?></th>
			<th><?php echo $this->lang->line('account_name') ?></th>
			<th><?php echo $this->lang->line('account_type') ?></th>
			<th><?php echo $this->lang->line('currency') ?></th>
			<th><?php echo $this->lang->line('opening_date') ?></th>
			<th><?php echo $this->lang->line('phone') ?></th>
			<th><?php echo $this->lang->line('email') ?></th>
			<th><?php echo $this->lang->line('country') ?></th>
			<th><?php echo $this->lang->line('debit') ?></th>
			<th><?php echo $this->lang->line('credit') ?></th>
			<th><?php echo $this->lang->line('balance') ?></th>
			<th><?php echo $this->lang->line('open_balance') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['account_number'] ?></td>
				<td><?php echo $record['account_name'] ?></td>
				<td><?php echo $record['account_type'] ?></td>
				<td><?php echo $record['currency'] ?></td>
				<td><?php echo $record['opening_date'] ?></td>
				<td><?php echo $record['phone'] ?></td>
				<td><?php echo $record['email'] ?></td>
				<td><?php echo $record['country'] ?></td>
				<td><?php echo $record['debit'] ?></td>
				<td><?php echo $record['credit'] ?></td>
				<td><?php echo $record['balance'] ?></td>
				<td><?php echo $record['open_balance'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>