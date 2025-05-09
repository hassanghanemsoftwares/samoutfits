$(document).ready(function () {

    $('#bgback').click(function (e) {
        e.preventDefault();
        window.location.href = document.referrer;
    });

    var count = $("#invoices_count").val();

    for (let i = 0; i < count; i++) {
        new QRCode(document.getElementById("qrcode".concat(i)), {
            text: $('#sales_nb'.concat(i)).val(),
            width: 130,
            height: 140
        });
    }
});