<style>
	#img-preview {
		display: none;
		width: 200px;
		height: 200px;
		border: 2px dashed #333;
		margin-bottom: 20px;
	}

	#img-preview img {
		width: 100%;
		height: 100%;
		display: block;
	}
</style>
<?php
$yes_no = [
	'0' => $this->lang->line('no'),
	'1' => $this->lang->line('yes'),
];
?>
<?php if ($this->session->flashdata('message_success')) { ?>
	<div id="save_msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('save_msg').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_success') ?></strong>
	</div>
<?php } ?>
<p class="text-right" <?php echo ($this->violet_auth->get_user_type() == "Employee") ? 'hidden' : ''; ?>>
	<?php echo anchor('items/add_opening_item/' . $this->Item->get_field('id'), 'Opening', 'id="open_product" class="btn btn-primary"') ?>
	<?php echo anchor('items/index', 'Back', 'accesskey="b"  class="btn btn-primary" id="bgback"') ?>
</p>
<p class="text-right" <?php echo ($this->violet_auth->get_user_type() !== "Employee") ? 'hidden' : ''; ?>>
	<?php echo anchor('items/all', 'Back', 'accesskey="b"  class="btn btn-primary" id="bgback"') ?>
</p>
<?php echo form_open_multipart('', 'id="itemsform" name="itemsform" class="form-horizontal" role="form" onsubmit="return validation();" novalidate') ?>
<div class="row">
	<div class="col-sm-6">
		<h3><strong><?php echo $title ?></strong></h3>
		<hr>
	</div>
	<div class="col-sm-3">
		<div class="form-check">
			<input type="text" value="0" name="publish" hidden>
			<input class="form-check-input" type="checkbox" value="1" name="publish" id="publish" <?php echo ($this->Item->get_field('publish') == 1) ? "checked" : "" ?>>
			<label class="form-check-label" for="publish">
				<?php echo $this->lang->line('Published'); ?>
			</label>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-check">
			<input type="text" value="0" name="stock_clearance" hidden>
			<input class="form-check-input" type="checkbox" value="1" name="stock_clearance" id="stock_clearance" <?php echo ($this->Item->get_field('stock_clearance') == 1) ? "checked" : "" ?>>
			<label class="form-check-label" for="stock_clearance">
				<?php echo $this->lang->line('Stock_Clearance'); ?>
			</label>
		</div>
	</div>
</div>
<input name="id" id="id" type="hidden" value="<?php echo $this->Item->get_field('id') ?>" />
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="col-sm-3 control-label" for="barcode"><?php echo $this->lang->line('barcode') ?></label>
			<div class="col-sm-6">
				<?php
				echo form_input('barcode', $this->Item->get_field('barcode'), 'id="barcode"  class="form-control" required'),
				$this->Item->get_error('barcode')
				?>
				<div id="error_barcode" style="text-align:center" onclick="document.getElementById('error_barcode').style.display = 'none'"></div>
			</div>
			<div class="col-sm-3">
				<p class="text-right">
					<button name="generate" id="generate" accesskey="a" class="btn btn-primary"><?php echo $this->lang->line('Generate'); ?></button>
				</p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="description"><?php echo $this->lang->line('title') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_input('description', $this->Item->get_field('description'), 'id="description" maxlength="255" class="form-control" required'),
				$this->Item->get_error('description')
				?>
				<div id="error_description" style="text-align:center" onclick="document.getElementById('error_description').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="category"><?php echo $this->lang->line('category') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_dropdown('category', $categories, $this->Item->get_field('category'), 'id="category" class="form-control"')
				?>
				<div id="error_category" style="text-align:center" onclick="document.getElementById('error_category').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="category"><?php echo $this->lang->line('sub_category') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_dropdown('sub_category', $sub_categories, $this->Item->get_field('sub_category'), 'id="sub_category" class="form-control"')
				?>
				<div id="error_sub_category" style="text-align:center" onclick="document.getElementById('error_sub_category').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="variant1"><?php echo $this->lang->line('variant1') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_dropdown('variant1', $variant1, $this->Item->get_field('variant1'), 'id="variant1" class="form-control"')
				?>
				<div id="error_variant1" style="text-align:center" onclick="document.getElementById('error_variant1').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="gender"><?php echo $this->lang->line('gender') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_dropdown('gender', $gender, $this->Item->get_field('gender'), 'id="gender" class="form-control"')
				?>
			</div>
		</div>




		<div class="form-group">
			<label class="col-sm-3 control-label" for="color"><?php echo $this->lang->line('color') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_dropdown('color', $colors, $this->Item->get_field('color'), 'id="color" class="form-control"')
				?>
				<div id="error_color" style="text-align:center" onclick="document.getElementById('error_color').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="old_price"><?php echo $this->lang->line('old_price') ?></label>
			<div class="col-sm-9">
				<?php
				echo form_input('old_price', $this->Item->get_field('old_price'), 'id="old_price" maxlength="255" class="form-control" required'),
				$this->Item->get_error('old_price')
				?>
				<div id="error_old_price" style="text-align:center" onclick="document.getElementById('error_old_price').style.display = 'none'"></div>
			</div>
		</div>
		<style>
			.bootstrap-select>.dropdown-toggle {
				width: 112%;
			}
		</style>
		<div class="form-group col-sm-12">
			<label class="col-sm-3 control-label" for="tags"><?php echo $this->lang->line('tags') ?></label>
			<div class="col-sm-9">
				<?php echo form_dropdown('tags[]', $tags, $selected_tags, 'id="tags" class="form-control selectpicker" data-live-search="true" multiple title="select tags..."') ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="upload_images"><?php echo $this->lang->line('product_images') ?></label>
			<div class="col-sm-9">
				<input type="file" name="files[]" class="form-control" id="upload_images" value="./assets/uploads/ac.png" multiple>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="size_chart"><?php echo $this->lang->line('size_chart') ?></label>
			<div class="col-sm-9">
				<input type="file" name="size_chart" class="form-control" id="size_chart">
			</div>
		</div>

	</div>
	<div class="col-sm-6">
		<div class="form-group <?php echo ($this->violet_auth->get_user_type() == "Employee") ? 'hide' : ''; ?>">
			<label class="col-sm-2 control-label" for="open_cost"><?php echo $this->lang->line('open_cost') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('open_cost', $this->Item->get_field('open_cost'), 'id="open_cost" class="form-control"')
				?>
				<div id="error_open_cost" style="text-align:center" onclick="document.getElementById('error_open_cost').style.display = 'none'"></div>
			</div>
			<label class="col-sm-2 control-label" for="open_qty"><?php echo $this->lang->line('open_qty') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('open_qty', $this->Item->get_field('open_qty'), 'id="open_qty" class="form-control" readonly="true"')
				?>
			</div>
		</div>
		<div class="form-group <?php echo ($this->violet_auth->get_user_type() == "Employee") ? 'hide' : ''; ?>">
			<label class="col-sm-2 control-label" for="cost"><?php echo $this->lang->line('cost_lc') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('cost', $this->Item->get_field('cost'), 'id="cost" class="form-control"')
				?>
				<div id="error_cost" style="text-align:center" onclick="document.getElementById('error_cost').style.display = 'none'"></div>
			</div>
			<label class="col-sm-2 control-label" for="purchase_cost"><?php echo $this->lang->line('purchase_cost') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('purchase_cost', $this->Item->get_field('purchase_cost'), 'id="purchase_cost" class="form-control"')
				?>
				<div id="error_purchase_cost" style="text-align:center" onclick="document.getElementById('error_purchase_cost').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group <?php echo ($this->violet_auth->get_user_type() == "Employee") ? 'hide' : ''; ?>">
			<label class="col-sm-2 control-label" for="profit"><?php echo $this->lang->line('profit_%') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('profit', $this->Item->get_field('profit'), 'id="profit" class="form-control"')
				?>
				<div id="error_profit" style="text-align:center" onclick="document.getElementById('error_profit').style.display = 'none'"></div>
			</div>
			<label class="col-sm-2 control-label" for="TVA"><?php echo $this->lang->line('TVA_%') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_dropdown('TVA', $TVA, $this->Item->get_field('TVA'), 'id="TVA" class="form-control"'),
				$this->Item->get_error('TVA');
				?>
			</div>
		</div>
		<div class="form-group <?php echo ($this->violet_auth->get_user_type() == "Employee") ? 'hide' : ''; ?>">
			<label class="col-sm-2 control-label" for="price"><?php echo $this->lang->line('net_sale_price') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('price', $this->Item->get_field('price'), 'id="price" class="form-control"')
				?>
				<div id="error_price" style="text-align:center" onclick="document.getElementById('error_price').style.display = 'none'"></div>
			</div>
			<label class="col-sm-2 control-label" for="price_ttc"><?php echo $this->lang->line('price_ttc') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('price_ttc', $this->Item->get_field('price_ttc'), 'id="price_ttc" class="form-control"')
				?>
				<div id="error_price_ttc" style="text-align:center" onclick="document.getElementById('error_price_ttc').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group ">
			<label class="col-sm-2 control-label" for="note"><?php echo $this->lang->line('note') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_textarea('note', $this->Item->get_field('note'), 'id="note" maxlength="255" class="form-control" style="height:85px;" required')
				?>
			</div>
		</div>
		<div class="form-group ">
			<label class="col-sm-2 control-label" for="link"><?php echo $this->lang->line('link') ?></label>
			<div class="col-sm-10">
				<?php
				echo form_textarea('link', $this->Item->get_field('link'), 'id="link" maxlength="255" class="form-control" style="height:85px;"')
				?>
			</div>
		</div>
		<div class="form-group <?php echo ($this->violet_auth->get_user_type() == "Employee") ? 'hide' : ''; ?>">
			<label class="col-sm-2 control-label" for="supplier_code"><?php echo $this->lang->line('supplier_code') ?></label>
			<div class="col-sm-4">
				<?php
				echo form_input('supplier_code', $this->Item->get_field('supplier_code'), 'id="supplier_code" class="form-control"')
				?>
				<div id="error_supplier_code" style="text-align:center" onclick="document.getElementById('error_supplier_code').style.display = 'none'"></div>
			</div>
			<label class="col-sm-2 control-label" for="rmb"><?php echo "RMB ¥" ?></label>
			<div class="col-sm-4">
				<input type="number" name="rmb" id="rmb" value="<?php echo $this->Item->get_field('rmb'); ?>" class="form-control">
				<div id="error_rmb" style="text-align:center" onclick="document.getElementById('error_rmb').style.display = 'none'"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="cool_storage"><?php echo $this->lang->line('cool_storage'); ?></label>
			<div class="col-sm-4">
				<?php
				echo form_dropdown('cool_storage', $yes_no, $this->Item->get_field('cool_storage'), 'id="cool_storage" class="form-control"');
				?>
			</div>

			<label class="col-sm-2 control-label" for="flammable_handling"><?php echo $this->lang->line('flammable_handling'); ?></label>
			<div class="col-sm-4">
				<?php
				echo form_dropdown('flammable_handling', $yes_no, $this->Item->get_field('flammable_handling'), 'id="flammable_handling" class="form-control"');
				?>
			</div>
		</div>
		<div class="form-group">

			<label class="col-sm-2 control-label" for="fragile"><?php echo $this->lang->line('fragile'); ?></label>
			<div class="col-sm-4">
				<?php
				echo form_dropdown('fragile', $yes_no, $this->Item->get_field('fragile'), 'id="fragile" class="form-control"');
				?>
			</div>
		</div>

		<?php
		if ($this->Item->get_field('size_chart')) {
		?>
			<div class="form-group" style="margin-top: 100px !important;">
				<label class="col-sm-2 control-label" for="size_chart"><?php echo $this->lang->line('size_chart') ?></label>
				<div class="col-sm-10">
					<div class="gallery">
						<a target="_blank" href="<?php echo base_url('assets/uploads/' . $this->Item->get_field('size_chart')) ?>">
							<img src="<?php echo base_url('assets/uploads/' . $this->Item->get_field('size_chart')) ?>" alt="Cinque Terre">
						</a>
						<div class="desc"><button type="button" class="btn btn-danger remove_size_chart" id="<?php echo $this->Item->get_field('size_chart') ?>"><?php echo $this->lang->line('Remove') ?></button></div>
					</div>
				</div>
			</div>

		<?php
		}
		?>
	</div>
	<div class="col-sm-9 col-sm-offset-2">

		<?php foreach ($item_images as $image) : ?>
			<div class="gallery">
				<a target="_blank" href="<?php echo base_url('assets/uploads/' . $image["image_name"]) ?>">
					<img src="<?php echo base_url('assets/uploads/' . $image["image_name"]) ?>" alt="Cinque Terre">
				</a>
				<div class="desc">
					<input type="text" id="image_id" value="<?php echo $image["id"] ?>" hidden>
					<input type="text" id="old_order_nb" value="<?php echo $image["order_nb"] ?>" hidden>
					<?php echo form_dropdown('order_nb', $images_nbs, $image["order_nb"], 'id="order_nb" class="form-control image-nb"') ?>
				</div>
				<div class="desc"><button type="button" class="btn btn-danger i-remove" id="<?php echo $image["image_name"] ?>"><?php echo $this->lang->line('Remove') ?></button></div>
			</div>
		<?php endforeach ?>
	</div>
	<div class="form-group row">
		<div class="col-sm-offset-10 col-sm-2">
			<?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s" value="upload"'),
			' ',
			form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
		</div>
	</div>
	<?php echo form_close() ?>
</div>

<script>
	const chooseFile = document.getElementById("upload_images");
	const imgPreview = document.getElementById("img-preview");

	chooseFile.addEventListener("change", function() {
		getImgData();
	});

	function getImgData() {
		const files = chooseFile.files[0];
		if (files) {
			const fileReader = new FileReader();
			fileReader.readAsDataURL(files);
			fileReader.addEventListener("load", function() {
				imgPreview.style.display = "block";
				imgPreview.innerHTML = '<img src="' + this.result + '" />';
			});
		}
	}
</script>