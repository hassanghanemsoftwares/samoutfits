$(document).ready(function () {

    $("#btn_convert").on('click', function () {
        html2canvas(document.getElementById("myHtml"), {
            allowTaint: true,
            useCORS: true
        }).then(function (canvas) {
            var anchorTag = document.createElement("a");
            // document.body.appendChild(anchorTag);
            // document.getElementById("previewImg").appendChild(canvas);
            anchorTag.download = "invoice.jpg";
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';
            anchorTag.click();
        });
    });

    $('#bgback').click(function (e) {
        e.preventDefault();
        window.location.href = document.referrer;
    });

    // JsBarcode("#barcode", $('#sales_nb').val());
    new QRCode(document.getElementById("qrcode"), {
        text: $('#sales_nb').val(),
        width: 105,
        height: 105
    });  
});