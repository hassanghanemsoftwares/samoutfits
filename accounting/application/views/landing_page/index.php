<?php if ($this->session->flashdata('message_error')) { ?>
    <div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message_error') ?></strong>
    </div>
<?php } ?>
<?php if ($this->session->flashdata('message_success')) { ?>
    <div id="msg_success" class="alert alert-success" style="text-align:center" onclick="document.getElementById('msg_success').style.display = 'none'">
        <strong><?php echo $this->session->flashdata('message_success') ?></strong>
    </div>
<?php } ?>
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>

<div class="row form-group">
    <div class="col-sm-12 form-group">
        <div class="col-sm-4">
            <label class="col-sm-4 control-label" for="category_filter"><?php echo $this->lang->line('Sections') ?></label>
            <div class="col-sm-8">
                <?php echo form_dropdown('category_filter', $sections, $selected_category, 'id="category_filter" class="form-control input-sm"') ?>
            </div>

        </div>
        <?php if ($section_nb) {
        ?>
            <div class="col-sm-4">
                <label class="col-sm-4 control-label" for="section_nb"><?php echo $this->lang->line('Switch_section') ?></label>
                <input type="text" name="old_section_nb" value="<?php echo $section_nb[0]['order_nb'] ?>" hidden>
                <input type="text" name="section_id" value="<?php echo $section_nb[0]['id'] ?>" hidden>
                <input type="number" style="width: 150px;" id="section_nb" max="10" class="form-control input-sm w-50" name="section_nb" value="<?php echo $section_nb[0]['order_nb'] ?>">
            </div>

        <?php
        } ?>

    </div>
</div>
<h5><strong><?php echo $this->lang->line('Banner') ?></strong></h5>
<?php echo form_open_multipart('ecommerce/update_sections', 'id="sectionForm" name="sectionForm" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>

<div class="row mb-5">

    <table class="table table-bordered table-condensed table-striped table-hover">
        <thead>
            <tr style="background-color: #ffdf59; ">
                <!-- <th>#</th> -->
                <!-- <th><?php echo $this->lang->line('Name') ?></th> -->
                <th><?php echo $this->lang->line('Value') ?></th>
                <th colspan="2"><?php echo $this->lang->line('Edit') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($banner_data) {
            ?>
                <tr>
                    <!-- <td><?php echo $banner_data['id'] ?></td> -->
                    <!-- <td><?php echo $banner_data['name'] ?></td> -->
                    <td><img src="sections_uploads/<?php echo $banner_data['value'] ?>" height="70px"></td>
                    <td>
                        <center>
                            <input type="file" name="files[]" class="form-control" accept="image/png, image/jpeg" style="width: 70%;">
                        </center>
                        <input type="text" name="id" value="<?php echo $banner_data['id'] ?>" hidden>
                    </td>
                    <td>
                        <button type="submit"><?php echo $this->lang->line('Submit') ?></button>
                    </td>

                </tr>
            <?php
            } ?>
        </tbody>
    </table>
    <?php echo form_close() ?>

</div>
<h5><strong><?php echo $this->lang->line('Items') ?></strong></h5>
<?php echo form_open('ecommerce/change_landing_page_items', 'id="landingpageForm" name="landingpageForm" class="form-horizontal" role="form" autocomplete="off"') ?>
<?php if ($section_nb) {
?>

   
        <input type="text" name="old_section_nb" value="<?php echo $section_nb[0]['order_nb'] ?>" hidden>
        <input type="text" name="section_id" value="<?php echo $section_nb[0]['id'] ?>" hidden>
        <input type="text" id="section_nb_1" name="section_nb" value="<?php echo $section_nb[0]['order_nb'] ?>" hidden>

<?php
} ?>
<div class="row form-group ">
    <table class="table table-bordered table-condensed table-striped table-hover">
        <thead>
            <tr style="background-color: #ffdf59; ">
                <th>#</th>
                <th><?php echo $this->lang->line('Image') ?></th>
                <th><?php echo $this->lang->line('Description') ?></th>
                <th><?php echo $this->lang->line('Barcode') ?></th>
                <th><?php echo $this->lang->line('New_Item') ?></th>
            </tr>
        </thead>
        <tbody id="body_rows">
            <?php $count = 0;
            foreach ($items as $k => $item) {
                $count++; ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <td><img src="assets/uploads/<?php echo ($item['image_name']) ? $item['image_name'] : 'no_image.jpg' ?>" height="70px"></td>
                    <td><?php echo $item['description'] ?></td>
                    <td><?php echo $item['barcode'] ?></td>
                    <td>
                        <input type="text" class="form-control r-select_item" class="form-control" placeholder="Select New Item">
                        <input type="hidden" name="item[item_id][]" class="r-item_id">
                        <input type="text" name="item[id][]" value="<?php echo $item['id'] ?>" hidden>
                        <input type="text" name="category" value="<?php echo $selected_category ?>" hidden>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p class="text-right">
        <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('Update') ?></button>
    </p>

</div> <?php echo form_close() ?>

<script>
    $("#section_nb").on('change', function() {
        $("#section_nb_1").val($(this).val())
    });
</script>