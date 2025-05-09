jQuery(document).ready(function () {
    $('#send_message').on('click', function(e){
        if(validation()){
            $.ajax({
                cache: false,
                type: 'POST',
                data: {
                    'subject': $('#subject').val(),
                    'message': $('#message').val(),
                },
                url: getAppURL('accounts/send_message_administration'),
                success: function (data) {
                    if(data === '1'){
                        $('#modal_text').text(_lang.Message_Sent_Successfuly);
                        $('#modal_image').attr("src", "assets/images/sent.png");
                        $('#modal_image').width(50);
                        $('#modal_image').height(50);
                        $('#adm_modal').modal('show');
                    }else{
                        $('#modal_text').text(_lang.Oops_Something_Went_Wrong+'!');
                        $('#modal_image').attr("src", "assets/images/warning.png");
                        $('#modal_image').width(50);
                        $('#modal_image').height(50);
                        $('#adm_modal').modal('show');
                    }
                }
            });
        }
    })
});

function validation() {
    var count = 0;
    if ($("#subject").val() !== '') {
        $('#msg_subject').html('');
    }
    else {
        $('#msg_subject').html(_lang.Required).css('color', 'red');
        count++;
    }
    if ($("#message").val() !== '') {
        $('#msg_message').html('');
    }
    else {
        $('#msg_message').html(_lang.Required).css('color', 'red');
        count++;
    }
    if (count !== 0) {
        return false;
    } else {
        return true;
    }
}