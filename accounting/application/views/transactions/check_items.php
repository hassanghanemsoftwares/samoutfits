<?php if ($this->session->flashdata('message')) { ?>
	<div id="msg" class="alert alert-danger" style="text-align:center" onclick="document.getElementById('msg').style.display = 'none'">
		<strong><?php echo $this->session->flashdata('message') ?></strong>
	</div>
<?php } ?>
<p class="text-right">
    <br /><br /> 
    <button accesskey="b" class="btn btn-primary" id="bgback"><?php echo $this->lang->line('Back') ?></button>
    <?php echo form_open('', 'id="transactionForm" name="transactionForm" class="form-horizontal" role="form"  onsubmit="return validation();" autocomplete="off" novalidate') ?>
    <input name="id" id="id" type="hidden" value="<?php echo $this->Transaction->get_field('id') ?>" />
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-3">
            <h4><?php echo $title ?></h4>
            <hr />
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="col-sm-4 control-label" for="auto_no"><?php echo $this->lang->line('Purchase') ?> #</label>
                <div class="col-sm-8">
                    <?php
                    echo form_input('trans[auto_no]', $trans['auto_no'], 'id="auto_no" class="form-control" readonly="true" required '),
                    $this->Transaction->get_error('auto_no')
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="itemLookup"><?php echo $this->lang->line('Select_Item') ?></label>
                <div class="col-sm-9">
                    <?php echo form_input('', '', 'id="itemLookup" class="form-control" required') ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12 table-responsive">
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                    <tr style="background-color: #404040; color:white;">
                        <th class="col-sm-1"><?php echo $this->lang->line('Delete') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Description') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('barcode') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Quantity') ?></th>
                    </tr>
                </thead>
                <tbody id="transactionLines">
                    <?php foreach ($posted_products as $k => $p) { ?>
                        <tr id="<?php echo 'item-', $k ?>" data-index="<?php echo $k ?>">
                            <td>
                                <input name="transItems[<?php echo $k ?>][item_id]" value="<?php echo $p['item_id'] ?>" id="item_id" type="text" class="hide i-item_id" />
                                <button type="button" class="btn btn-xs btn-danger i-remove"><i class="glyphicon glyphicon-remove-circle"></i>
                            </td>
                            <td><?php echo $p['description'] ?></td>
                            <td><?php echo $p['barcode'] ?></td>
                            <td><input name="transItems[<?php echo $k ?>][qty]" value="<?php echo $p['qty'] ?>" id="qty" type="text" class="form-control i-qty" /></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div id="error_transactionLines" style="text-align:center" onclick="document.getElementById('error_transactionLines').style.display = 'none'"></div>
        </div>
        <div class="col-sm-12 text-right">
            <?php echo form_submit('submitBtn', "Check", 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
        </div>
    </div>
    <?php echo form_close() ?>
    <div class="col-sm-12">
        <div class="col-sm-6">
            <h4><?php echo $this->lang->line('Missing_Products') ?></h4>
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                    <tr class="danger">
                    <th class="col-sm-2"><?php echo $this->lang->line('Description') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Barcode') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Quantity') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($missing_products as $m) { ?>
                        <tr>
                            <td><?php echo $m['description'] ?></td>
                            <td><?php echo $m['barcode'] ?></td>
                            <td><?php echo $m['qty'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h4><?php echo $this->lang->line('Extra_Products') ?></h4>
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                    <tr class="danger">
                        <th class="col-sm-2"><?php echo $this->lang->line('Description') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Barcode') ?></th>
                        <th class="col-sm-2"><?php echo $this->lang->line('Quantity') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($extra_products as $e) { ?>
                        <tr>
                            <td><?php echo $e['description'] ?></td>
                            <td><?php echo $e['barcode'] ?></td>
                            <td><?php echo $e['qty'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        const ItemLineTpl = <?php echo json_encode($this->load->view('transactions/check_items_line_form', [], true)) ?>;
    </script>