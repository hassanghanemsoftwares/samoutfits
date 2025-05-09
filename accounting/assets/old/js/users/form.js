$(document).ready(function () {
    $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("glyphicon-eye-close");
            $('#show_hide_password i').removeClass("glyphicon-eye-open");
        } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("glyphicon-eye-close");
            $('#show_hide_password i').addClass("glyphicon-eye-open");
        }
    });
    $("#permission0").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p0").val($("#permission0").val());
        } else {
            $("#p0").val('');
        }       
    });
    $("#permission1").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p1").val($("#permission1").val());
        } else {
            $("#p1").val('');
        }       
    });
    $("#permission2").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p2").val($("#permission2").val());
        } else {
            $("#p2").val('');
        }       
    });
    $("#permission3").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p3").val($("#permission3").val());
        } else {
            $("#p3").val('');
        }       
    });
    $("#permission4").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p4").val($("#permission4").val());
        } else {
            $("#p4").val('');
        }       
    });
    $("#permission5").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p5").val($("#permission5").val());
        } else {
            $("#p5").val('');
        }       
    });
    $("#permission6").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p6").val($("#permission6").val());
        } else {
            $("#p6").val('');
        }       
    });
    $("#permission7").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p7").val($("#permission7").val());
        } else {
            $("#p7").val('');
        }       
    });
    $("#permission8").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p8").val($("#permission8").val());
        } else {
            $("#p8").val('');
        }       
    });
    $("#permission9").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p9").val($("#permission9").val());
        } else {
            $("#p9").val('');
        }       
    });
    $("#permission10").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p10").val($("#permission10").val());
        } else {
            $("#p10").val('');
        }       
    });
    $("#permission11").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p11").val($("#permission11").val());
        } else {
            $("#p11").val('');
        }       
    });
    $("#permission12").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p12").val($("#permission12").val());
        } else {
            $("#p12").val('');
        }       
    });
    $("#permission13").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p13").val($("#permission13").val());
        } else {
            $("#p13").val('');
        }       
    });
    $("#permission14").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p14").val($("#permission14").val());
        } else {
            $("#p14").val('');
        }       
    });
    $("#permission15").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p15").val($("#permission15").val());
        } else {
            $("#p15").val('');
        }       
    });
    $("#permission16").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p16").val($("#permission16").val());
        } else {
            $("#p16").val('');
        }       
    });
    $("#permission17").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p17").val($("#permission17").val());
        } else {
            $("#p17").val('');
        }       
    });
    $("#permission18").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p18").val($("#permission18").val());
        } else {
            $("#p18").val('');
        }       
    });
    $("#permission19").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p19").val($("#permission19").val());
        } else {
            $("#p19").val('');
        }       
    });
    $("#permission20").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p20").val($("#permission20").val());
        } else {
            $("#p20").val('');
        }       
    });
    $("#permission21").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p21").val($("#permission21").val());
        } else {
            $("#p21").val('');
        }       
    });
    $("#permission22").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p22").val($("#permission22").val());
        } else {
            $("#p22").val('');
        }       
    });
    $("#permission23").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p23").val($("#permission23").val());
        } else {
            $("#p23").val('');
        }       
    });
    $("#permission24").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p24").val($("#permission24").val());
        } else {
            $("#p24").val('');
        }       
    });
    $("#permission25").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p25").val($("#permission25").val());
        } else {
            $("#p25").val('');
        }       
    });
    $("#permission26").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p26").val($("#permission26").val());
        } else {
            $("#p26").val('');
        }       
    });
    $("#permission27").on('change', function () {
        if ($(this).is(':checked')) {
            $("#p27").val($("#permission27").val());
        } else {
            $("#p27").val('');
        }       
    });
});
