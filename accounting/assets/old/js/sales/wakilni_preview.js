$(document).ready(function () {

    $('#bgback').click(function (e) {
        e.preventDefault();
        window.location.href = document.referrer;
    });

    new QRCode(document.getElementById("qrcode"), {
        text: $('#sales_nb').val(),
        width: 130,
        height: 140
    });  
});