<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
</div>
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" id="journal_accountsTbl" data-num-rows="<?php echo $this->Journal_account->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('journal') ?></th>
            <th><?php echo $this->lang->line('transaction') ?></th>
            <th><?php echo $this->lang->line('account_name') ?></th>
            <th><?php echo $this->lang->line('credit_debit') ?></th>
            <th><?php echo $this->lang->line('amount') ?></th>
            <th><?php echo $this->lang->line('value_date') ?></th>
            <th><?php echo $this->lang->line('description') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['journal'] ?></td>
                <td><?php echo ($record['transaction'] ? $record['transaction'] : '') ?></td>
                <td><?php echo $record['account_name'] ?></td>
                <td><?php echo $record['credit_debit'] ?></td>
                <td><?php echo $record['amount'] ?></td>
                <td><?php echo $record['value_date'] ?></td>
                <td><?php echo $record['description'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>