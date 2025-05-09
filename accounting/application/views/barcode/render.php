<p class="text-right">
  <?php echo anchor('items/index', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback" ') ?>
  <button id="print" onclick="window.print()" class="btn btn-primary">print</button>
</p>
<center>
  <img src="<?php echo site_url('assets/barcode/' . $image); ?>" />
</center>
<!-- <br> -->
<!-- <div id="pb">
    <svg id="barcode"></svg>
  </div>
  <button id="p">print</button> -->

<!-- <script type="text/javascript">
    $(document).ready(function() {
      JsBarcode("#barcode", "9900021");

      $("#p").on('click', function() {
        event.preventDefault();
        var divContents = document.getElementById("pb").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
      });
    });
  </script> -->