<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
	<?php echo anchor('currencies/add', 'Add Currency', 'accesskey="a" class="btn btn-primary" style="width:180px;" id="bgadd"') ?>
</p>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="currenciesTbl" data-num-rows="<?php echo $this->Currency->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('currency_name') ?></th>
			<th><?php echo $this->lang->line('currency_code') ?></th>
			<th><?php echo $this->lang->line('currency_rate') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>

		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['currency_name'] ?></td>
				<td><?php echo $record['currency_code'] ?></td>
				<td><?php echo $record['currency_rate'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>