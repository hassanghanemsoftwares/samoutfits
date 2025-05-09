<?php if ($this->session->flashdata('message')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
	<button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
	<button type="button" id="bulk" class="btn btn-primary btnbulk"><?php echo $this->lang->line('Bulk_Actions'); ?></button>
	<?php echo anchor('items/add', $this->lang->line('Add_Product'), 'accesskey="a" class="btn btn-primary" id="bgadd"') ?>
</p>
<div class="col-sm-12">
	<div class="col-sm-4">
		<h4><strong><?php echo $title ?></strong></h4>
		<hr>
	</div>
</div>
<div class="col-sm-9">
	<?php echo form_open('', 'class="form-horizontal" onsubmit="return false" id="dtAdvFltrs"') ?>
	<div class="col-sm-10">
		<label class="col-sm-4 control-label" for="tag_barcodes"><?php echo $this->lang->line('Multi_Barcodes_Filter'); ?></label>
		<div class="col-sm-8">
			<input type="text" name="tag_barcodes" id="tag_barcodes" class="form-control">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<?php echo form_submit('filter', 'Filter', 'id="filter" class="btn btn-primary"') ?>
		</div>
	</div>
	<?php echo form_close() ?>
</div>
<div class="row form-group">
	<div class="col-sm-12 form-group">
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="category_filter"><?php echo $this->lang->line('Category'); ?></label>
			<div class="col-sm-8">
				<?php echo form_dropdown('category_filter', $categories, '', 'id="category_filter" class="form-control input-sm"') ?>
			</div>
		</div>
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="sub_category_filter"><?php echo $this->lang->line('Sub_Category'); ?></label>
			<div class="col-sm-8">
				<?php echo form_dropdown('sub_category_filter', $sub_categories, '', 'id="sub_category_filter" class="form-control input-sm"') ?>
			</div>
		</div>
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="color_filter"><?php echo $this->lang->line('Color'); ?></label>
			<div class="col-sm-8">
				<?php echo form_dropdown('color_filter', $colors, '', 'id="color_filter" class="form-control input-sm"') ?>
			</div>
		</div>
	</div>
	<div class="col-sm-12 form-group">
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="gender_filter"><?php echo $this->lang->line('Gender'); ?></label>
			<div class="col-sm-8">
				<?php echo form_dropdown('gender_filter', $gender_list, '', 'id="gender_filter" class="form-control input-sm"') ?>
			</div>
		</div>
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="publish_filter"><?php echo $this->lang->line('Published'); ?></label>
			<div class="col-sm-8">
				<?php echo form_dropdown('publish_filter', array('' => '', '0' => $this->lang->line('No'), '1' => $this->lang->line('Yes')), '', 'id="publish_filter" class="form-control input-sm"') ?>
			</div>
		</div>
		<div class="col-sm-4">
			<label class="col-sm-4 control-label" for="stock_clearance_filter"><?php echo $this->lang->line('Stock_Clearance'); ?></label>
			<div class="col-sm-8">
				<?php echo form_dropdown('stock_clearance_filter', array('' => '', '0' => $this->lang->line('No'), '1' => $this->lang->line('Yes')), '', 'id="stock_clearance_filter" class="form-control input-sm"') ?>
			</div>
		</div>
	</div>
</div>
<table style="width:100%;" class="table table-bordered table-striped table-hover table-condensed table-responsive" id="itemsTbl" data-num-rows="<?php echo $this->Item->get('paginationTotalRows') ?>">
	<thead>
		<tr>
			<th><?php echo $this->lang->line('barcode') ?></th>
			<th><?php echo $this->lang->line('description') ?></th>
			<th><?php echo $this->lang->line('category') ?></th>
			<th><?php echo $this->lang->line('sale_price') ?></th>
			<th><?php echo $this->lang->line('gross_sale_price') ?></th>
			<th><?php echo $this->lang->line('quantity') ?></th>
			<th><?php echo $this->lang->line('actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($records as $record) { ?>
			<tr>
				<td><?php echo $record['barcode'] ?></td>
				<td><?php echo $record['description'] ?></td>
				<td><?php echo $record['category'] ?></td>
				<td><?php echo $record['price'] ?></td>
				<td><?php echo $record['price_ttc'] ?></td>
				<td><?php echo $record['qty'] ?></td>
				<td><?php echo $record['id'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<!-- Large modal -->
<div id="bulk_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><strong><?php echo $this->lang->line('Bulk_Actions'); ?></strong></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-sm-12 form-group">
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_price" name="edit_price" value="1">
							<label class="col-sm-2 control-label" for="edit_price"><?php echo $this->lang->line('Sale_Price'); ?></label>
							<div class="col-sm-3">
								<?php
								echo form_dropdown('operation', $operations, '', 'id="operation" class="form-control"')
								?>
							</div>
							<div class="col-sm-6">
								<input type="number" name="price" id="price" value="0" min="0" class="form-control" autocomplete="off">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_old_price" name="edit_old_price" value="1">
							<label class="col-sm-2 control-label" for="edit_old_price"><?php echo $this->lang->line('Old_Price'); ?></label>
							<div class="col-sm-9">
								<input type="number" name="old_price" id="old_price" value="0" min="0" class="form-control" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_publish" name="edit_publish" value="1">
							<label class="col-sm-2 control-label" for="edit_publish"><?php echo $this->lang->line('Publish'); ?></label>
							<div class="col-sm-9">
								<?php
								echo form_dropdown('publish', array('0' => $this->lang->line('Unpublish'), '1' => $this->lang->line('Publish')), '', 'id="publish" class="form-control"')
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_stock_clearance" name="edit_stock_clearance" value="1">
							<label class="col-sm-5 control-label" for="edit_stock_clearance"><?php echo $this->lang->line('Stock_Clearance'); ?></label>
							<div class="col-sm-6">
								<?php
								echo form_dropdown('stock_clearance', array('0' => $this->lang->line('No'), '1' => $this->lang->line('Yes')), '', 'id="stock_clearance" class="form-control"')
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_category" name="edit_category" value="1">
							<label class="col-sm-2 control-label" for="edit_category"><?php echo $this->lang->line('Category'); ?></label>
							<div class="col-sm-9">
								<?php
								echo form_dropdown('category', $categories, '', 'id="category" class="form-control"')
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_sub_category" name="edit_sub_category" value="1">
							<label class="col-sm-2 control-label" for="edit_sub_category"><?php echo $this->lang->line('Sub_Category'); ?></label>
							<div class="col-sm-9">
								<?php
								echo form_dropdown('sub_category', $sub_categories, '', 'id="sub_category" class="form-control"')
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_color" name="edit_color" value="1">
							<label class="col-sm-2 control-label" for="edit_color"><?php echo $this->lang->line('Color'); ?></label>
							<div class="col-sm-9">
								<?php
								echo form_dropdown('color', $colors, '', 'id="color" class="form-control"')
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_gender" name="edit_gender" value="1">
							<label class="col-sm-2 control-label" for="edit_gender"><?php echo $this->lang->line('Gender'); ?></label>
							<div class="col-sm-9">
								<?php
								echo form_dropdown('gender', $gender, '', 'id="gender" class="form-control"')
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6">
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_tags" name="edit_tags" value="1">
							<label class="col-sm-2 control-label" for="edit_tags"><?php echo $this->lang->line('Tags'); ?></label>
							<div class="col-sm-9">
								<?php
								echo form_dropdown('tags', $tags, '', 'id="tags" class="form-control selectpicker" data-live-search="true" multiple title="select tags..."')
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-6" hidden>
						<div class="form-group">
							<input class="col-sm-1" type="checkbox" id="edit_cost" name="edit_cost" value="1">
							<label class="col-sm-2 control-label" for="edit_cost"><?php echo $this->lang->line('Cost_LC'); ?></label>
							<div class="col-sm-3">
								<?php
								echo form_dropdown('operation1', $operations, '', 'id="operation1" class="form-control"')
								?>
							</div>
							<div class="col-sm-6">
								<input type="number" name="cost" id="cost" value="0" min="0" class="form-control" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
				<table id="table_bulk" class="table table-bordered table-striped table-hover table-condensed table-responsive"></table>
				<table id="table_bulk_ids" class="table table-bordered table-striped table-hover table-condensed table-responsive" hidden></table>
			</div>
			<div class="modal-footer">
				<div class="col-sm-12">
					<div class="col-sm-6 col-sm-offset-4">
						<button type="button" class="btn btn-primary" id="bulk_submit"><?php echo $this->lang->line('Submit'); ?></button>
					</div>
					<div class="col-sm-2">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('Close'); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>