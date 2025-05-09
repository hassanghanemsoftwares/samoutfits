<p class="text-right">
    <?php echo anchor('items/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback" ') ?>
    <button id="print" onclick="window.print()" class="btn btn-primary">print</button>
</p>
<div class="row">
    <?php foreach ($images as $image) :
        for ($x = 0; $x < $image['count']; $x++) {
    ?>
            <center>
                <div style="display: block;">
                    <img src="<?php echo site_url('assets/barcode/' . $image['image']); ?>" />
                </div>
                <div class="pagebreak"> </div>
            </center>
    <?php }
    endforeach ?>
</div>