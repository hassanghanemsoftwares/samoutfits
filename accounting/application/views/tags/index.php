<?php if ($this->session->flashdata('message_error')) { ?>
	<div id="delete_ignore" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('delete_ignore').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_error') ?></strong>
	</div>
<?php } ?>
<?php if ($this->session->flashdata('message')) { ?>
	<div id="msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('msg').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<div class="row">
    <p class="text-right">
        <button class="btn btn-primary" id="bgadd"><?php echo $this->lang->line('Add_New_Tag') ?></button>
    </p>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4">
            <h4><strong><?php echo $title ?></strong></h4>
            <hr>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="tagsTbl" data-num-rows="<?php echo $this->Tag->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('tag') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody id="table_body">
        <?php foreach ($records as $record) { ?>
            <td><?php echo $record['tag'] ?></td>
            <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="modal" tabindex="-1" role="dialog" id="modal_add_tag">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $this->lang->line('Add_New_Tag') ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('tags/add', 'id="tagForm" name="tagForm" class="form-horizontal" onsubmit="return validation();" role="form" autocomplete="off" novalidate') ?>
                <div class="row">
                    <label class="col-md-2 control-label" for="tag">
                    <?php echo $this->lang->line('Tag') ?>
                    </label>
                    <div class="col-md-10">
                        <input type="text" name="tag" id="tag" class="form-control" required>
                        <div id="error_tag" style="text-align:center" onclick="document.getElementById('error_tag').style.display = 'none'"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('Submit') ?></button>
                <?php echo form_close() ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
            </div>
        </div>
    </div>
</div>