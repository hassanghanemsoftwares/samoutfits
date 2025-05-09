<div id="printdiv" style="float: right; margin-bottom:20px;">
    <button type="button" onclick="window.print();" name="print" class="btn-style">Print</button>
</div>
<div id="printdiv" style="float: left; margin-bottom:20px;">
    <a href="<?php echo "sales/edit/".$trans_id ?>" class="btn-style a-style">Back</a>
</div>
<center>
    <div class="row form-group" style="clear:both; background-color: #d1a3ff; color:black; width: 100%; height:420px; font-family: Arial, Helvetica, sans-serif;">
        <div class="col-sm-12">
            <div class="col-sm-4 col-sm-offset-4">
                <center>
                    <div class="col-sm-12">
                        <img src="assets/images/logo_black.png" style="width:200px; height:100px; margin-top:30px;">
                        <h1> <strong>Sales Invoice</strong> </h1>
                    </div>
                </center>
            </div>
        </div>
        <div style="float: left; margin-left:3%; width:250px; ">
            <div>
                <h4><strong>Invoice To:</strong></h4>
                <h5><?php echo $customer_info["account_name"] ?></h5>
            </div>
            <div>
                <h4><strong>Address:</strong></h4>
                <h5><?php echo $address ?></h5>
            </div>
        </div>
        <div style="float: right; margin-right:3%; width:250px; ">
            <div>
                <h4><strong>Invoice Date:</strong></h4>
                <h5><?php echo $trans["trans_date"] ?></h5>
            </div>
            <div>
                <h4><strong>Invoice NO:</strong></h4>
                <h5><?php echo $trans["auto_no"] ?></h5>
            </div>
        </div>
    </div>
    <div class="row form-group" style="width:100%; height:auto; margin-top:20px; margin-bottom:20px;">
        <table class="table table-bordered table-condensed table-striped table-hover" id="print_table">
            <thead id="print_table">
                <tr>
                    <th class="table_th_ivoice_print">Code</th>
                    <th class="table_th_ivoice_print">Size</th>
                    <th class="table_th_ivoice_print">Qty</th>
                    <th class="table_th_ivoice_print">Price</th>
                    <th class="table_th_ivoice_print">Total</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php foreach ($trans_items as $transItem) :
                ?>
                    <tr>
                        <td><b><?php echo $transItem['barcode'] ?></b></td>
                        <td><b><?php echo $transItem['size'] ?></b></td>
                        <td><b><?php echo $transItem['qty'] ?></b></td>
                        <td><b><?php echo $transItem['price'] ?></b></td>
                        <td><b><?php echo $transItem['qty'] * $transItem['price'] ?></b></td>
                    </tr>
                <?php endforeach
                ?>
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 20px; height: 140px; float: right; margin-right: 5%;">
        <div class="row form-group" style="width: 320px;">
            <div class="col-sm-4 col-sm-offset-7" style="background-color: #d1a3ff; height:120px; padding-left:60px; padding-top:20px; margin-left:3%; text-align:center;">
                <div style="float: left;">
                    <h4 class="col-sm-6"><strong>Subtotal:</strong></h4>
                    <h4 class="col-sm-6"><strong>Total:</strong></h4>
                </div>
                <div style="float: center;">
                    <h5 class="col-sm-6"><?php echo "$" . $subtotal ?></h5>
                    <h5 class="col-sm-6"><?php echo "$" . $total ?></h5>
                </div>

            </div>
        </div>
    </div>
    <div style="clear:both;">
        <div class="col-sm-4" style="float: left; margin-left:5%;">
            <h4><strong>ADMINISTRATIONS</strong></h4>
            <h4><strong>SAM OUTFITS</strong></h4>
        </div>
        <div class="col-sm-3 col-sm-offset-5" style="float: right; margin-right:5%;">
            <h4><strong>HAPPY SHOPPING!</strong></h4>
        </div>
    </div>
    <div class="row form-group" style="clear:both; background-color: #d1a3ff; width:100%; height:50px; margin-top:20px;"></div>
</center>