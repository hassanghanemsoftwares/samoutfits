<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design"><i class="glyphicon glyphicon-refresh"></i></button>
        </p>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="ecoordersTbl" data-num-rows="<?php echo $this->Order->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('order') . "#" ?></th>
            <th><?php echo $this->lang->line('tracking_#') ?></th>
            <th><?php echo $this->lang->line('customer_name') ?></th>
            <th><?php echo $this->lang->line('order_date') ?></th>
            <th><?php echo $this->lang->line('description') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('qty') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('discount') . "(%)" ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('total') ?></th>
            <th><?php echo $this->lang->line('status') ?></th>
            <th><?php echo $this->lang->line('payment_method') ?></th>
            <th><?php echo $this->lang->line('payment_status') ?></th>
            <th data-no-search="0"><?php echo $this->lang->line('actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['auto_no'] ?></td>
                <td><?php echo $record['tracking_nb'] ?></td>
                <td><?php echo $record['customer_name'] ?></td>
                <td><?php echo $record['order_date'] ?></td>
                <td><?php echo $record['description'] ?></td>
                <td><?php echo $record['total_qty'] ?></td>
                <td><?php echo $record['percent_disc'] ?></td>
                <td><?php echo $record['total'] ?></td>
                <td><?php echo $record['status'] ?></td>
                <td><?php echo $record['payment_method'] ?></td>
                <td><?php echo $record['payment_status'] ?></td>
                <td><?php echo $record['id'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
  <div id="order-summary-root"></div>
<!-- Edit Order Status Modal -->
<div id="statusModalForm" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    <legend><?php echo $this->lang->line('Edit_Order_Status_Of ') ?><span id="modal_order_data">></span></legend>
                </h4>
            </div>
            <div class="modal-body">
                <!-- <div class="row">
                    <div class="col-md-5">
                        <h4 id="modal_order_data"></h4>
                        <hr>
                    </div>
                </div> -->
                <?php echo form_open('ecommerce/edit_order_status', 'id="adjustForm" class="form-horizontal" onsubmit="return orderValidate();" role="form" novalidate') ?>
                <input type="text" name="order_id" id="modal_order_id" hidden>
                <div class="row">
                    <div class="form-group col-md-6">
                        <h4 style="text-decoration: underline; margin-left:8px;"><b><?php echo $this->lang->line('Actions') ?></b></h4>
                        <div class="form-group col-md-12">
                            <label class="col-md-4 control-label" style="text-align: left;" for="old_qty"><?php echo $this->lang->line('Old_Status') ?></label>
                            <div class="col-md-8">
                                <?php
                                echo form_input('old_status', '', 'id="modal_old_status" class="form-control" readonly')
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-4 control-label" style="text-align: left;" for="old_qty"><?php echo $this->lang->line('New_Status') ?></label>
                            <div class="col-md-8">
                                <?php
                                echo form_dropdown('status', $status, '', 'id="status" class="form-control"')
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-4 control-label" style="text-align: left;" for="old_qty"><?php echo $this->lang->line('Dispatch_Date') ?></label>
                            <div class="col-md-8">
                                <?php
                                echo form_input('dispatch_date', '', 'id="dispatch_date" class="form-control"')
                                ?>
                                <div id="error_dispatch_date" style="text-align:center" onclick="document.getElementById('error_dispatch_date').style.display = 'none'"></div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-4 control-label" style="text-align: left;" for="old_qty"><?php echo $this->lang->line('Delivery') ?></label>
                            <div class="col-md-8">
                                <?php
                                echo form_dropdown('driver', $drivers, '', 'id="driver" class="form-control"')
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="order_data_div">
                        <div class="col-md-12" style="padding:10px; background-color: #ffdf59; color:black;">
                            <h4 style="text-decoration: underline;"><b><?php echo $this->lang->line('Order_Data') ?></b></h4>
                            <h4><b><?php echo $this->lang->line('Items') ?>:</b></h4>
                            <table id="order_items_table" class="table-style">
                                <tr>
                                    <td><?php echo $this->lang->line('Code') ?></td>
                                    <td><?php echo $this->lang->line('Size') ?></td>
                                    <td><?php echo $this->lang->line('Qty') ?></td>
                                </tr>
                                <tbody id="order_items_table_body"></tbody>
                            </table>
                        </div>
                        <div class="col-md-12" style="background-color: #ffdf59; color:black;">
                            <h4><b>Address: </b><span id="order_address"></span></h4>
                            <div class="col-md-6">
                                <h5><b><?php echo $this->lang->line('Country') ?>: </b><span id="order_address0"></span></h5>
                                <h5><b><?php echo $this->lang->line('City') ?>: </b><span id="order_address1"></span></h5>
                                <h5><b><?php echo $this->lang->line('Place') ?>: </b><span id="order_address2"></span></h5>
                                <h5><b><?php echo $this->lang->line('Street') ?>: </b><span id="order_address3"></span></h5>
                            </div>
                            <div class="col-md-6">
                                <h5><b><?php echo $this->lang->line('Building') ?>: </b><span id="order_address4"></span></h5>
                                <h5><b><?php echo $this->lang->line('Floor') ?>: </b><span id="order_address5"></span></h5>
                                <h5><b><?php echo $this->lang->line('Direction') ?>: </b><span id="order_address6"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer px-0">
                <button type="button" class="btn btn-primary " style="width:20% !important;" id="accept_order">
                    <?php echo $this->lang->line('accept_order') ?>
                </button>
                <button type="button" class="btn btn-success" id="whatsapp_btn">
                    <img src="https://img.icons8.com/color/24/000000/whatsapp.png" alt="WhatsApp Icon">
                </button>
                <button type="button" class="btn btn-primary" style="width:20% !important;" id="order_summery">
                    <?php echo $this->lang->line('order_summery') ?>
                </button>
                <button type="submit" class="btn btn-primary " style="width:20% !important;"><?php echo $this->lang->line('Submit') ?></button>
                <?php echo form_close(); ?>
                <a href="" class="btn btn-primary" style="width:20% !important;" id="waybil_preview"><?php echo $this->lang->line('Private_Waybil') ?></a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
            </div>
        </div>
    </div>
</div>