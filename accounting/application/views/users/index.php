<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<div class="row">
	<div class="col-sm-6">
		<h3 class="margin-thin"><?php echo $this->lang->line('users_list') ?></h3>
	</div>

	<?php echo anchor('users/add', $this->lang->line('Add_User'), 'accesskey="a" class="btn btn-primary" style="float:right;" id="bgadd" ') ?></p>
</div>
<br />
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="usersTbl" data-num-rows="<?php echo $this->User->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('Username') ?></th>
			<th><?php echo $this->lang->line('Email') ?></th>
			<th><?php echo $this->lang->line('User_Type') ?></th>
			<th><?php echo $this->lang->line('Fiscal_Year') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) {
			if ($record['id'] != 1) { ?>
				<tr>
					<td><?php echo $record['user_name'] ?></td>
					<td><?php echo $record['user_email'] ?></td>
					<td><?php echo $record['user_type'] ?></td>
					<td><?php echo $record['year_name'] ?></td>
					<td><?php echo $record['id'] ?></td>
				</tr>
		<?php }
		} ?>
	</tbody>
</table>