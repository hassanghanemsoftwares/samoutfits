<p class="text-right">
	<?php echo anchor('users/index', $this->lang->line('Back'), 'accesskey="b" class="btn btn-primary"  id="bgback" ') ?>
</p>
<?php echo form_open('', array('id' => 'edit_permissions_form')); ?>
<input type="number" name="id" value="<?php echo $user['id']; ?>" hidden>
<div class="row mt-3" style="background-color:#ffdf59; border-radius:10px;">
    <div class="col-lg-6 col-md-6 col-ms-12">
        <h3><span class="text-primary">Username: </span><?php echo $user['user_name']; ?></h3>
    </div>
    <div class="col-lg-6 col-md-6 col-ms-12">
        <h3><span class="text-primary">Type: </span><?php echo $user['user_type']; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-12 pt-5">
        <input class="form-check-input me-5" type="checkbox" id="all_permissions">
        <label class="form-check-label" for="">All Permissions</label>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 pt-2 h-100">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Products
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="items,items/index"
                            name="permission[]" <?php if (in_array('items/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="items/add" name="permission[]"
                            <?php if (in_array('items/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="items/edit"
                            name="permission[]" <?php if (in_array('items/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="items/add_opening_item"
                            name="permission[]" <?php if (in_array('items/add_opening_item', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add Opening</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="items/warehouses"
                            name="permission[]" <?php if (in_array('items/warehouses', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Warehouses</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="barcodes/generate"
                            name="permission[]" <?php if (in_array('barcodes/generate', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Generate Barcode</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2 h-100">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Order Purchases
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox"
                            value="order_purchases,order_purchases/index" name="permission[]" <?php if (in_array('order_purchases/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="order_purchases/add"
                            name="permission[]" <?php if (in_array('order_purchases/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="order_purchases/edit"
                            name="permission[]" <?php if (in_array('order_purchases/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="order_purchases/to_purchase"
                            name="permission[]" <?php if (in_array('order_purchases/to_purchase', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">To Purchase</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="barcodes/bulk_print"
                            name="permission[]" <?php if (in_array('barcodes/bulk_print', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Barcode</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="order_purchases/inventory"
                            name="permission[]" <?php if (in_array('order_purchases/inventory', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Inventory</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Warehouses
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="warehouses,warehouses/index"
                            name="permission[]" <?php if (in_array('warehouses/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="warehouses/add"
                            name="permission[]" <?php if (in_array('warehouses/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="warehouses/edit"
                            name="permission[]" <?php if (in_array('warehouses/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="warehouses/inventory"
                            name="permission[]" <?php if (in_array('warehouses/inventory', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Inventory</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Sales
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales,sales/index"
                            name="permission[]" <?php if (in_array('sales/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/add" name="permission[]"
                            <?php if (in_array('sales/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/edit"
                            name="permission[]" <?php if (in_array('sales/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/archive"
                            name="permission[]" <?php if (in_array('sales/archive', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Archive</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="profit"
                            name="permission[]" <?php if (in_array('profit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Profit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Pre Order
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="pre_orders,pre_orders/index"
                            name="permission[]" <?php if (in_array('pre_orders/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="pre_orders/add"
                            name="permission[]" <?php if (in_array('pre_orders/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="pre_orders/edit"
                            name="permission[]" <?php if (in_array('pre_orders/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Return Sales
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox"
                            value="return_sales,return_sales/index" name="permission[]" <?php if (in_array('return_sales/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="return_sales/add"
                            name="permission[]" <?php if (in_array('return_sales/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="return_sales/edit"
                            name="permission[]" <?php if (in_array('return_sales/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Reports
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="journal_accounts/index"
                            name="permission[]" <?php if (in_array('journal_accounts/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Journals</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="warehouses/reports"
                            name="permission[]" <?php if (in_array('warehouses/reports', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Warehouse Report</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="reports/wakilni_data"
                            name="permission[]" <?php if (in_array('reports/wakilni_data', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Wakilni Data</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="reports/daily_pickup"
                            name="permission[]" <?php if (in_array('reports/daily_pickup', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Daily Pickup</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="reports/daily_sales"
                            name="permission[]" <?php if (in_array('reports/daily_sales', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Daily Sales</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="reports/stock"
                            name="permission[]" <?php if (in_array('reports/stock', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Product History</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="reports/multi_invoices"
                            name="permission[]" <?php if (in_array('reports/multi_invoices', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Packing Orders</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="order_purchases/op_inventory"
                            name="permission[]" <?php if (in_array('order_purchases/op_inventory', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">OP Item</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row stuff_group_container">
    <div class="col-12 pt-5">
        <h4><input class="form-check-input stuff_group_pages" style="margin-right:10px;"
                type="checkbox"><span>Administration</span></h4>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Accounts
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="accounts,accounts/index"
                            name="permission[]" <?php if (in_array('accounts/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="accounts/add"
                            name="permission[]" <?php if (in_array('accounts/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="accounts/edit"
                            name="permission[]" <?php if (in_array('accounts/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="accounts/activity"
                            name="permission[]" <?php if (in_array('accounts/activity', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Purchases
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="purchases,purchases/index"
                            name="permission[]" <?php if (in_array('purchases/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="purchases/add"
                            name="permission[]" <?php if (in_array('purchases/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="purchases/edit"
                            name="permission[]" <?php if (in_array('purchases/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Payments
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="payments,payments/index"
                            name="permission[]" <?php if (in_array('payments/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="payments/add"
                            name="permission[]" <?php if (in_array('payments/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="payments/edit"
                            name="permission[]" <?php if (in_array('payments/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Receipts
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="receipts,receipts/index"
                            name="permission[]" <?php if (in_array('receipts/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="receipts/add"
                            name="permission[]" <?php if (in_array('receipts/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="receipts/edit"
                            name="permission[]" <?php if (in_array('receipts/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/receive_cash"
                            name="permission[]" <?php if (in_array('sales/receive_cash', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Receive Cash</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Reports
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="reports/profits_per_date"
                            name="permission[]" <?php if (in_array('reports/profits_per_date', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Profits Per Date</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Fiscal Years
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox"
                            value="fiscal_years,fiscal_years/index" name="permission[]" <?php if (in_array('fiscal_years/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="fiscal_years/add"
                            name="permission[]" <?php if (in_array('fiscal_years/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="fiscal_years/edit"
                            name="permission[]" <?php if (in_array('fiscal_years/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Currencies
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="currencies,currencies/index"
                            name="permission[]" <?php if (in_array('currencies/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="currencies/add"
                            name="permission[]" <?php if (in_array('currencies/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="currencies/edit"
                            name="permission[]" <?php if (in_array('currencies/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Configurations
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox"
                            value="configurations,configurations/index" name="permission[]" <?php if (in_array('configurations/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Tags
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="tags,tags/index"
                            name="permission[]" <?php if (in_array('tags/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="tags/add" name="permission[]"
                            <?php if (in_array('tags/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="tags/edit" name="permission[]"
                            <?php if (in_array('tags/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Users
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="users,users/index"
                            name="permission[]" <?php if (in_array('users/index', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="users/add" name="permission[]"
                            <?php if (in_array('users/add', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="users/edit"
                            name="permission[]" <?php if (in_array('users/edit', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="users/edit_permissions"
                            name="permission[]" <?php if (in_array('users/edit_permissions', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit Permissions</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="users/choose_fiscal_year"
                            name="permission[]" <?php if (in_array('users/choose_fiscal_year', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Choose Fiscal Year</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<div class="row stuff_group_container">
    <div class="col-12 pt-5">
        <h4><input class="form-check-input stuff_group_pages" style="margin-right:10px;"
                type="checkbox"><span>Ecommerce</span></h4>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Orders
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/orders"
                            name="permission[]" <?php if (in_array('ecommerce/orders', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Sales
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/sales"
                            name="permission[]" <?php if (in_array('ecommerce/sales', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/check"
                            name="permission[]" <?php if (in_array('sales/check', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Check</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/exchange"
                            name="permission[]" <?php if (in_array('sales/exchange', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Exchange</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="sales/return_sales"
                            name="permission[]" <?php if (in_array('sales/return_sales', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Return Sales</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Coupons
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/coupons"
                            name="permission[]" <?php if (in_array('ecommerce/coupons', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/add_coupon"
                            name="permission[]" <?php if (in_array('ecommerce/add_coupon', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Add</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/edit_coupon"
                            name="permission[]" <?php if (in_array('ecommerce/edit_coupon', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Edit</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Inbox
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/inbox"
                            name="permission[]" <?php if (in_array('ecommerce/inbox', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/sent_messages"
                            name="permission[]" <?php if (in_array('ecommerce/sent_messages', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Send Message</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/create_message"
                            name="permission[]" <?php if (in_array('ecommerce/create_message', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Create Message</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Sections
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/sections"
                            name="permission[]" <?php if (in_array('ecommerce/sections', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">Sections</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Landing Page
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/landing_page"
                            name="permission[]" <?php if (in_array('ecommerce/landing_page', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-12 pt-2">
        <div class="panel panel-default permission_cards">
            <div class="panel-header text-center">
                <input class="form-check-input me-2 group_page" type="checkbox">Ecommerce Users
            </div>
            <div class="panel-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input class="form-check-input permission" type="checkbox" value="ecommerce/users"
                            name="permission[]" <?php if (in_array('ecommerce/users', $access_pages)) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="">View</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <?php echo form_submit('submitBtn', $this->lang->line('save'), 'class="btn btn-primary" id="bgsave" accesskey="s"'), ' ', form_reset('reset', $this->lang->line('reset'), 'class="btn btn-link"') ?>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>