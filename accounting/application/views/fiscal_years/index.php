<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
<?php echo anchor('fiscal_years/add', 'Add Fiscal Year', 'accesskey="a" class="btn btn-primary" style="width:180px;" id="bgadd"') ?>
</p>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive"  id="fiscal_yearsTbl" data-num-rows="<?php echo $this->Fiscal_year->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('Name'); ?></th>
			<th><?php echo $this->lang->line('start_date'); ?></th>
			<th><?php echo $this->lang->line('end_date'); ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['year_name'] ?></td>
				<td><?php echo $record['start_date'] ?></td>
				<td><?php echo $record['end_date'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>