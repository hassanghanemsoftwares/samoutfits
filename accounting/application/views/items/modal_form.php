<div class="modal fade" id="ItemFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="iModalLabel"><?php echo $this->lang->line('Add_Product') ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyitem">
                <?php echo form_open('', 'id="itemsform" name="itemsform" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
                <input name="id" id="id" type="hidden" />
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="barcode"><?php echo $this->lang->line('barcode') ?></label>
                    <div class="col-sm-5">
                        <?php
                        echo form_input('barcode', '', 'id="barcode" maxlength="32" class="form-control" style="width:50%;" required')
                        ?>
                        <div id="error_barcode" style="text-align:center" onclick="document.getElementById('error_barcode').style.display = 'none'"></div>
                    </div>
                    <div class="col-sm-1">
                        <p class="text-right">
                            <button name="generate" id="generate" accesskey="a" class="btn btn-primary"><?php echo $this->lang->line('Generate') ?></button>
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="description"><?php echo $this->lang->line('name') ?></label>
                    <div class="col-sm-6">
                        <?php
                        echo form_input('description', '', 'id="description" maxlength="255" class="form-control" required')
                        ?>
                        <div id="error_description" style="text-align:center" onclick="document.getElementById('error_description').style.display = 'none'"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="category"><?php echo $this->lang->line('category') ?></label>
                    <div class="col-sm-6">
                        <?php
                        echo form_dropdown('category', $categories, '', 'id="category" class="form-control"')
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="open_cost"><?php echo $this->lang->line('open_cost') ?></label>
                    <div class="col-sm-6">
                        <?php
                        echo form_input('open_cost', '', 'id="open_cost" class="form-control" ')
                        ?>
                        <div id="error_open_cost" style="text-align:center" onclick="document.getElementById('error_open_cost').style.display = 'none'"></div>
                        <div id="warning_open_cost" style="text-align:center" onclick="document.getElementById('warning_open_cost').style.display = 'none'"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="open_qty"><?php echo $this->lang->line('open_qty') ?></label>
                    <div class="col-sm-6">
                        <?php
                        echo form_input('open_qty', '', 'id="open_qty" class="form-control" readonly="true"')
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="cost"><?php echo $this->lang->line('cost_lc') ?></label>
                    <div class="col-sm-2">
                        <?php
                        echo form_input('cost', '', 'id="cost" class="form-control" readonly="true"')
                        ?>
                        <div id="error_cost" style="text-align:center" onclick="document.getElementById('error_cost').style.display = 'none'"></div>
                    </div>
                    <label class="col-sm-2 control-label" for="purchase_cost"><?php echo $this->lang->line('purchase_cost') ?></label>
                    <div class="col-sm-2">
                        <?php
                        echo form_input('purchase_cost', '', 'id="purchase_cost" class="form-control"')
                        ?>
                        <div id="error_purchase_cost" style="text-align:center" onclick="document.getElementById('error_purchase_cost').style.display = 'none'"></div>
                        <div id="warning_purchase_cost" style="text-align:center" onclick="document.getElementById('warning_purchase_cost').style.display = 'none'"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="profit"><?php echo $this->lang->line('profit_%') ?></label>
                    <div class="col-sm-6">
                        <?php
                        echo form_input('profit', '', 'id="profit" class="form-control"');
                        ?>
                        <div id="error_profit" style="text-align:center" onclick="document.getElementById('error_profit').style.display = 'none'"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="profit"><?php echo $this->lang->line('TVA_%') ?></label>
                    <div class="col-sm-6">
                        <?php
                        echo form_dropdown('TVA', $TVA, '', 'id="TVA" class="form-control"');
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="price"><?php echo $this->lang->line('net_sale_price') ?></label>
                    <div class="col-sm-2">
                        <?php
                        echo form_input('price', '', 'id="price" class="form-control"')
                        ?>
                        <div id="error_price" style="text-align:center" onclick="document.getElementById('error_price').style.display = 'none'"></div>
                        <div id="warning_price" style="text-align:center" onclick="document.getElementById('warning_price').style.display = 'none'"></div>
                    </div>
                    <label class="col-sm-2 control-label" for="price_ttc"><?php echo $this->lang->line('price_ttc') ?></label>
                    <div class="col-sm-2">
                        <?php
                        echo form_input('price_ttc', '', 'id="price_ttc" class="form-control"')
                        ?>
                        <div id="error_price_ttc" style="text-align:center" onclick="document.getElementById('error_price_ttc').style.display = 'none'"></div>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
                <button type="button" id="save_item" class="btn btn-primary"><?php echo $this->lang->line('Save') ?></button>
            </div>
        </div>
    </div>
</div>