<p class="text-right">
    <button id="bgback" class="btn btn-primary"><?php echo $this->lang->line('Back') ?></button>
    <button id="print" onclick="window.print()" class="btn btn-primary"><?php echo $this->lang->line('Print') ?></button>
    <?php foreach ($trans as $x => $t) : ?>
        <input type="text" id="<?php echo "sales_nb" . $x ?>" value="<?php echo $trans[$x]["auto_no"] ?>" hidden>
</p>
<center>
    <div id="myHtml" style="background-color: white; color: black; width:430px; margin:10px;
        padding:10px; display: flex; flex-direction: column; min-height: 35vh;">
        <section style="flex: 1;">
            <div class="col-sm-4 col-xs-4">
                <div id="<?php echo "qrcode" . $x ?>"></div>
            </div>
            <div class="col-sm-8 col-xs-8" id="test">
                <p style="text-align: left; color: black;">
                    <b><?php echo $this->lang->line('Tracking') ?> #: <?php echo $trans[$x]["auto_no"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Total') ?>: <?php echo $total[$x]."$" ?></b>
                    <br>
                    <b><?php echo $this->lang->line('From') ?>: <?php echo $company_name[$x] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('To') ?>: <?php echo $customer_info[$x]["account_name"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Phone') ?>: <?php echo $customer_info[$x]["phone"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Date') ?>: <?php echo $trans[$x]["value_date"] ?></b>
                    <br>
                    <b><?php echo $this->lang->line('Note') ?>: <?php echo $trans[$x]["delivery_note"]  ?></b>
                </p>
            </div>
            <br>
            <div class="col-sm-12 col-xs-12">
                <center>
                    <table id="invoice_table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;"><?php echo $this->lang->line('Item') ?></th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            <?php foreach ($trans_items[$x] as $x => $transItem) : ?>
                                <tr>
                                    <td style="width: 90px; margin:2px;"><b><?php echo $transItem['barcode'] ?></b></td>
                                    <td style="width: 90px; margin:2px;"><b><?php echo $transItem['size'] ?></b></td>
                                    <td style="width: 90px; margin:2px;"><b><?php echo $transItem['qty'] ?></b></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </center>
            </div>
        </section>
    </div>
</center>
<div class="pagebreak"></div>
<?php endforeach ?>
<input type="text" id="invoices_count" value="<?php echo $count ?>" hidden>