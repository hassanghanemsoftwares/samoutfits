<style>
  .container {
    width: 100% !important;
  }

  .print-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 100%;
    margin: 0;
    box-sizing: border-box;
    page-break-inside: avoid;
  }

  .print-container img {
    height: auto;
    display: block;
    margin: 0;
    max-width: 100%;
  }

  .info-box {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    border-top: 1px solid #000;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
    page-break-inside: avoid;
    box-sizing: border-box;
  }

  .info-box div {
    border-right: 1px solid #000;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
  }

  .info-box div:last-child {
    border-right: none;
  }

  #print,
  #bgback {
    margin-bottom: 10px;
  }

  @media print {
    @page {
      margin: 0;
      size: 3.5cm 2.5cm;
    }

    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    .print-container {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
      box-sizing: border-box;
      page-break-inside: avoid;
      overflow: hidden;
    }

    .print-container img {
      margin: 0;
      padding: 0;
      display: block;
      max-width: 100%;
    }

    .info-box {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      flex-shrink: 0;
      border-top: 1px solid #000;
      font-weight: bold;
      font-size: 18px;
      text-align: center;
      page-break-inside: avoid;
    }

    #print,
    #bgback {
      display: none !important;
    }
  }
</style>

<p class="text-right">
  <?php echo anchor('warehouses/inventory', 'Back', 'accesskey="b" class="btn btn-primary" id="bgback"') ?>
  <button id="print" onclick="window.print()" class="btn btn-primary">Print</button>
</p>

<div class="print-container">
  <img id="barcodeImage" src="<?php echo site_url('assets/barcode/' . $image); ?>" alt="Barcode" />

  <div id="infoBox" class="info-box">
    <div class="size"><?php echo ($size) ?></div>
    <div class="color"><?php echo ($color) ?></div>
  </div>
</div>

<script>
  const img = document.getElementById('barcodeImage');
  const infoBox = document.getElementById('infoBox');

  function adjustInfoBoxWidth() {
    const width = img.offsetWidth;
    infoBox.style.width = width + 'px';
  }

  img.onload = adjustInfoBoxWidth;

  if (img.complete) {
    adjustInfoBoxWidth();
  }

  window.addEventListener('resize', adjustInfoBoxWidth); // Optional: keep in sync on resize
</script>
