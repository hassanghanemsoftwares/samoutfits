<div class="col-sm-12">
    <div class="col-sm-4">
        <h4><strong><?php echo $title ?></strong></h4>
        <hr>
    </div>
    <div class="col-sm-8">
        <p class="text-right">
            <button type="button" name="reset_filters" id="reset_filters" class="btn bt-link btn-s btn-small-design">
                <i class="glyphicon glyphicon-refresh"></i>
            </button>
        </p>
    </div>
</div>

<table class="table table-bordered table-striped table-hover table-condensed table-responsive " 
       id="newsletterTbl" 
       style="width: 100% !important;"
       data-num-rows="<?php echo $this->NewsletterModel->get('paginationTotalRows') ?>">
    <thead>
        <tr>
            <th><?php echo $this->lang->line('email') ?></th>
            <th><?php echo $this->lang->line('created_at') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td><?php echo $record['email'] ?></td>
                <td><?php echo $record['created_at'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
