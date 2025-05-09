<div class="row">
    <div class="col-sm-6">
        <h3><strong><?php echo $title ?></strong></h3>
        <hr>
    </div>
</div>
<div class="col-sm-12 table-responsive">
    <table class="table table-bordered table-condensed table-striped table-hover">
        <thead>
            <tr style="background-color: #7f00ff; ">
                <th>#</th>
                <th><?php echo $this->lang->line('Name') ?></th>
                <th><?php echo $this->lang->line('Value') ?></th>
                <th colspan="2"><?php echo $this->lang->line('Edit') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sections as $k => $s) { ?>
                <tr>
                    <td><?php echo $k + 1 ?></td>
                    <td><?php echo $s['name'] ?></td>
                    <td><img src="sections_uploads/<?php echo $s['value'] ?>" height="70px"></td>
                    <?php echo form_open_multipart('', 'id="sectionForm" name="sectionForm" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
                    <td>
                        <center>
                            <input type="file" name="files[]" class="form-control" accept="image/png, image/jpeg" style="width: 70%;">
                        </center>
                        <input type="text" name="id" value="<?php echo $s['id'] ?>" hidden>
                    </td>
                    <td>
                        <button type="submit"><?php echo $this->lang->line('Submit') ?></button>
                    </td>
                    <?php echo form_close() ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>