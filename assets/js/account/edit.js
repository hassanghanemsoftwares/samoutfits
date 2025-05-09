jQuery(document).ready(function () {
    $('#message_modal').modal('show');
    $("#email").on('keyup', function (event) {
        if ($("#email").val() !== '') {
            var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if ($("#email").val().match(email_format)) {
                $('#msg_email').html(_lang.Email_format_accepted).css('color', 'green');
            }
            else {
                $('#msg_email').html(_lang.Email_format_rejected).css('color', 'red');
            }
        } else {
            $('#msg_email').html('');
        }
    });
    $("#phone2").on('keyup', function (event) {
        if ($("#phone2").val() !== '') {
            var phonenb = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
            if ($("#phone2").val().match(phonenb)) {
                $('#msg_phone2').html(_lang.Phone_format_accepted).css('color', 'green');
            }
            else {
                $('#msg_phone2').html(_lang.Phone_format_rejected).css('color', 'red');
            }
        } else {
            $('#msg_phone2').html('');
        }
    });
});

function validation() {
    var count = 0;
    if ($("#first_name").val() !== '') {
        $('#msg_first_name').html(_lang.Accepted).css('color', 'green');
    }
    else {
        $('#msg_first_name').html(_lang.Required).css('color', 'red');
        count++;
    }
    if ($("#last_name").val() !== '') {
        $('#msg_last_name').html(_lang.Accepted).css('color', 'green');
    }
    else {
        $('#msg_last_name').html(_lang.Required).css('color', 'red');
        count++;
    }
    if ($('#phone2').val() !== '') {
        if ($('#msg_phone2').text() === _lang.Phone_format_rejected) {
            count++;
        }
    }
    if ($('#email').val() !== '') {
        if ($('#msg_email').text() === _lang.Email_format_rejected) {
            count++;
        }
    }
    if (count !== 0) {
        return false;
    } else {
        return true;
    }
}