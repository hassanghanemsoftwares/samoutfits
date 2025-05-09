$(document).ready(function () {

    $("#btn_convert").on('click', function () {
        html2canvas(document.getElementById("myHtml"), {
            allowTaint: true,
            useCORS: true
        }).then(function (canvas) {
            var anchorTag = document.createElement("a");
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
    var count = $("#invoices_count").val();
    for (let i = 0; i <= count; i++) {
        new QRCode(document.getElementById("qrcode".concat(i)), {
            text: $('#sales_nb'.concat(i)).val(),
            width: 105,
            height: 105
        });
    }
});