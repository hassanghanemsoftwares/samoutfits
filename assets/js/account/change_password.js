jQuery(document).ready(function () {
    // $('#registerForm').disableAutoFill();
    $("#show_hide_password_btn1").on('click', function (event) {
        event.preventDefault();
        if ($('#new_password').attr("type") == "text") {
            $('#new_password').attr('type', 'password');
            $('#show_hide_password_i1').addClass("fa-eye-slash");
            $('#show_hide_password_i1').removeClass("fa-eye");
        } else if ($('#new_password').attr("type") == "password") {
            $('#new_password').attr('type', 'text');
            $('#show_hide_password_i1').removeClass("fa-eye-slash");
            $('#show_hide_password_i1').addClass("fa-eye");
        }
    });
    $("#show_hide_password_btn2").on('click', function (event) {
        event.preventDefault();
        if ($('#confirm_password').attr("type") == "text") {
            $('#confirm_password').attr('type', 'password');
            $('#show_hide_password_i2').addClass("fa-eye-slash");
            $('#show_hide_password_i2').removeClass("fa-eye");
        } else if ($('#confirm_password').attr("type") == "password") {
            $('#confirm_password').attr('type', 'text');
            $('#show_hide_password_i2').removeClass("fa-eye-slash");
            $('#show_hide_password_i2').addClass("fa-eye");
        }
    });
});
function validation() {
    var count = 0;
    if ($('#current_password').val() == '') {
        $('#msg_current_password').html(_lang.field_required).css('color', 'red');
        $('#msg_current_password').show();
        count++;
    } else {
        $('#msg_current_password').hide();
    }
    if ($('#new_password').val() == '') {
        $('#msg_new_password').html(_lang.field_required).css('color', 'red');
        $('#msg_new_password').show();
        count++;
    } else {
        if ($('#new_password').val().length < 8) {
            $('#msg_new_password').html("Must be at least 8 digits").css('color', 'red');
            $('#msg_new_password').show();
            count++;
        } else {
            $('#msg_new_password').hide();
        }       
    }
    if ($('#confirm_password').val() == '') {
        $('#msg_confirm_password').html(_lang.field_required).css('color', 'red');
        count++;
    } else {
        if ($('#confirm_password').val() == $('#new_password').val()) {
            $('#msg_confirm_password').hide();
        } else {
            $('#msg_confirm_password').html('<i class="fa fa-exclamation"></i> ' + _lang.Password_Not_Matching).css('color', 'red');
            $('#msg_confirm_password').show();
            count++;
        }
    }
    if (count !== 0) {
        return false;
    } else {
        return true;
    }
}