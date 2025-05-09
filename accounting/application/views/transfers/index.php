<p class="text-right">
<?php echo anchor('transfers/add', $this->lang->line('Add_Transfer'), 'accesskey="a" class="btn btn-primary" id="bgadd" ') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="transfersTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('auto_number') ?></th>
			<th><?php echo $this->lang->line('transaction_date') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['auto_no'] ?></td>
				<td><?php echo $record['trans_date'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
