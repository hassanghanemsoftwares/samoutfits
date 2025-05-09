<?php if ($this->session->flashdata('message_error')) { ?>
	<div id="msg_error" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('msg_error').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message_error') ?></strong>
	</div>
<?php } ?>
<?php if ($this->session->flashdata('message')) { ?>
	<div id="msg" class="alert alert-success" style="text-align:center" onclick="document.getElementById('msg').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
            <?php echo anchor('ecommerce/inbox', 'Inbox', 'class="btn btn-primary"') ?>
            <?php echo anchor('ecommerce/create_message', 'Create Message', 'class="btn btn-primary" style="width:180px;" id="bgadd"') ?>
        </p>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" style="width: 100%;" id="sentMessagesTbl" data-num-rows="<?php echo $this->Inbox->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('customer') ?></th>
            <th><?php echo $this->lang->line('subject') ?></th>
            <th><?php echo $this->lang->line('message') ?></th>
            <th><?php echo $this->lang->line('date') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['customer'] ?></td>
                <td><?php echo $record['subject'] ?></td>
                <td><?php echo $record['message'] ?></td>
                <td><?php echo $record['date'] ?></td>
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>