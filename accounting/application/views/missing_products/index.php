<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-12">
		<div class="col-sm-2">
			<form method="post" action="<?php echo base_url("missing_products/show_all"); ?>">
				<?php echo form_submit('showall', "Show All", 'class="btn btn-primary" id="bglist"  accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link" ') ?>
			</form>
		</div> &nbsp;
		<div class="col-sm-2">
			<form method="post" action="<?php echo base_url("missing_products/index"); ?>">

				<?php echo form_submit('showunchecked', "Unchecked", 'class="btn btn-primary" id="bgreset"  accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>

			</form>
		</div>&nbsp;
		<div class="col-sm-2">
			<form method="post" action="<?php echo base_url("missing_products/show_checked"); ?>">

				<?php echo form_submit('showchecked', "Checked", 'class="btn btn-primary" id="bgsave"  accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>

			</form>
		</div>
		<div class="col-sm-5 text-right">
			<button id="print" class="btn btn-primary" onclick="window.print()">Print</button>
		</div>
	</div>
</div>
<br />
<br />
<form method="post" action="<?php echo base_url("missing_products/save_changes"); ?>">
	<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="MPTbl" data-num-rows="<?php echo $this->Transaction->get('paginationTotalRows') ?>">
		<thead>
			<tr>
				<th><?php echo $this->lang->line('barcode') ?></th>
				<th><?php echo $this->lang->line('description') ?></th>
				<th><?php echo $this->lang->line('qty') ?></th>
				<th><?php echo $this->lang->line('actions') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php $count = 0;
			foreach ($records as $record) {
				$count++;
			?>
				<tr>
					<td><?php echo $record['barcode'] ?></td>
					<td><?php echo $record['description'] ?></td>
					<td><?php echo $record['qty'] ?></td>
					<td> <input name="transaction_items[<?php echo $count ?>][checkbox]" type="checkbox" id="check<?php echo $count ?>" class="input.i-check" <?php echo ($record['checkbox'] == 1 ? 'checked' : ''); ?>>
						<input name="transaction_items[<?php echo $count ?>][id]" type="text" id="transaction_item_id_<?php echo $count ?>" class="hide" value="<?php echo $record['id'] ?>" />
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="text-right">
		<?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="missing_save" style="float:right" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
	</div>
</form>