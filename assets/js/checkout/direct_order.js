jQuery(document).ready(function () {
    get_city_data();
    $('#country').on('change', function () {
        get_city_data();
    });

    $('#country_phone2').on('change', function () {
        get_city_data();
    });

    $('#country option').each(function () {

        $(this).text(get_mobile_country_code_BY_letter($(this).val()))
        $(this).attr("value", get_mobile_country_code_BY_letter($(this).val()))
    });

    $('#country_phone2 option').each(function () {

        $(this).text(get_mobile_country_code_BY_letter($(this).val()))
        $(this).attr("value", get_mobile_country_code_BY_letter($(this).val()))
    });

    $('#country_phone2').on("change", function () {
        $('#phone2_code').val("+" + $(this).val());
    })

    //onchange country select to fill code start
    $('#country').on("change", function () {
        $('#phone_code').val("+" + $(this).val());
    })
    //onchange country select to fill code end

    // check coupon code start
    $('#check_coupon').on('click', function (e) {
        if ($('#coupon').val() !== _lang.Enter_Coupon && $('#coupon').val() !== '') {
            $.ajax({
                cache: false,
                type: 'POST',
                data: {
                    'coupon': $('#coupon').val(),
                    'phone': $('#phone_code').val() + $("#phone_view").val()
                },
                url: getAppURL('checkout/check_coupon_on_phone'),
                success: function (data) {
                    if (data === null) {
                        $('#discount').val(0);
                        $('#coupon_id').val('');
                        $('#discount_type').val(1);
                        $('#discountLabel').text('$0.00');
                        calculateTotal();
                        $('#modal_text').text(_lang.Oops_Wrong_Coupon_Code);
                        $('#coupon_modal').modal('show');
                    } else {
                        if (data['deactivate'] !== '1') {
                            var today = new Date();
                            var use_time = parseInt(data['usage_times']);
                            var expiry_date = new Date(data['expiry_date']);
                            if (today < expiry_date) {
                                if (data['limited'] === '1') {
                                    $.ajax({
                                        cache: false,
                                        type: 'POST',
                                        data: {
                                            'coupon_id': data['id'],
                                            'phone': $('#phone_code').val() + $("#phone_view").val(),
                                            'usage_times': data['usage_times']
                                        },
                                        url: getAppURL('checkout/check_customer_coupon_usage_times_as_phone'),
                                        success: function (res) {
                                            var result = parseInt(res);
                                            // console.log(result);
                                            // console.log(use_time)
                                            if (res === '1') {
                                                $('#discount').val(data['amount']);
                                                $('#coupon_id').val(data['id']);
                                                $('#discount_type').val(data['discount_type']);
                                                var disc = data['amount'];
                                                if (data['discount_type'] === '0') {
                                                    disc += "%";
                                                } else {
                                                    disc += "";
                                                }
                                                calculateTotal()
                                                $('#discountLabel').text(disc);
                                            } else {
                                                $('#modal_text').text(_lang.Oops_Coupon_Code_No_More_Active);
                                                $('#coupon_modal').modal('show');
                                            }
                                        }
                                    });
                                } else {
                                    $('#discount').val(data['amount']);
                                    $('#coupon_id').val(data['id']);
                                    $('#discount_type').val(data['discount_type']);
                                    var disc = data['amount'];
                                    if (data['discount_type'] === '0') {
                                        disc += "%";
                                    } else {
                                        disc += "";
                                    }
                                    calculateTotal()
                                    $('#discountLabel').text(disc);
                                }
                            } else {
                                $('#modal_text').text(_lang.Oops_Coupon_Code_Expired);
                                $('#coupon_modal').modal('show');
                            }
                        } else {
                            $('#modal_text').text(_lang.Oops_Coupon_Code_No_More_Active);
                            $('#coupon_modal').modal('show');
                        }
                    }
                }
            });
        } else {
            $('#discount').val(0);
            $('#coupon_id').val('');
            $('#discount_type').val(1);
            $('#discountLabel').text('$0.00');
            calculateTotal()
            $('#modal_text').text(_lang.Please_Enter_Coupon_Code);
            $('#coupon_modal').modal('show');
        }
    });
    //check coupon code end

    //open otp modal start
    $("#placeOrderBtn").on("click", function () {
        if (validation()) {
            // $.ajax({
            //     url: getAppURL('checkout/send_otp'),
            //     type: "POST",
            //     data: { phone: $('#phone_code').val() + $("#phone_view").val() },
            //     dataType: "json",
            //     success: function (dataResult) {
            //         if(dataResult.logged_in){
            //             $("#otp_success").val(1);
            //             $("#directOrderForm").submit();
            //         } else {
            //             if (dataResult.result) {
            //                 $("#phoneOtp").text($('#phone_code').val() + $("#phone_view").val());
            //                 $('#otp_modal').modal('show');
            //             } else {
            //                 $("#error_message_otp").text(dataResult.error);
            //                 $("#place_order_without_otp_btn").prop('hidden', false);
            //                 $("#otp_success").val(0);
            //                 $('#otp_error_modal').modal('show');
            //             }
            //         }
            //     },
            //     error: function (jqXHR, textStatus, errorThrown) {
            //         console.log("Error: " + textStatus + " " + errorThrown);
            //     },
            // });
            $("#otp_success").val(0);
            var form = document.getElementById('directOrderForm');
            var formData = new FormData(form);
            $.ajax({
                url: getAppURL('checkout/confirm_direct_order'),
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (dataResult) {
                    if (dataResult.result) {
                        //place order make fire on purchase start
                        //end
                        $("#order_success_message").text("Order Received And Waiting Approval. We Will Contact You Shortly");
                        $('#order_success_modal').modal('show');
                        firePurchase(dataResult.fireData.order, dataResult.fireData.coupon, dataResult.fireData.order_items, dataResult.fireData.delivery_charge)
                    } else {
                        $("#error_message").text(dataResult.message);
                        $('#error_modal').modal('show');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Error: " + textStatus + " " + errorThrown);
                    $("#error_message").text("We Have Error Please Call Admin!!");
                    $('#error_modal').modal('show');
                },
            });
        }
    });

    $("#verify_code_btn").on("click", function () {
        $.ajax({
            url: getAppURL('checkout/verify_opt'),
            type: "POST",
            data: { otp_code: $('#otpCode').val() },
            dataType: "json",
            success: function (dataResult) {
                if (dataResult.result) {
                    $("#otp_success").val(1);
                    $("#directOrderForm").submit();
                } else {
                    $("#otp_success").val(0);
                    // alert($("#otp_success").val());
                    $("#error_message_otp").text(dataResult.error);
                    $("#place_order_without_otp_btn").prop('hidden', false);
                    $('#otp_error_modal').modal('show');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error: " + textStatus + " " + errorThrown);
            },
        });
    });

    $("#continue_shopping").on("click", function () {
        window.location.href = getAppURL('home/index');
    });

    $("#place_order_without_otp_btn").on("click", function () {
        $("#directOrderForm").submit();
    });
    //open otp modal end
});
//calculate start
function calculateTotal() {
    var total = parseFloat($("#subtotal").val());
    var disc = $('#discount').val();
    if ($('#discount_type').val() === '0') {
        disc += "%";
        tot = (total * (1 - (parseFloat($('#discount').val()) / 100)));
    } else {
        disc += "$";
        tot = total - parseFloat($('#discount').val());
        if (tot < 0) {
            tot = 0;
        }
    }
    var final_tot = tot + parseFloat($('#delivery_charge').val())
    $('#totalLabel').text('$'.concat(final_tot));
}
//calculate end
function validation() {

    var count = 0;
    if ($("#city").val() !== '') {
        if ($("#country").val() == 'LB') {
            var cities = get_lebanese_cities();
            if (!cities.includes($("#city").val())) {
                $('#msg_city').html('You Must Select a City From The Given Options!').css('color', 'red');
                count++;
            } else {
                $('#msg_city').html('');
            }
        } else {
            $('#msg_city').html('');
        }
    }
    else {
        $('#msg_city').html("*" + _lang.Required + "*").css('color', 'red');
        count++;
    }
    if ($("#phone_view").val() !== '') {
        $('#msg_phone').html('');
        var phonenb = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
        var phone = $("#phone_code").val() + $("#phone_view").val();
        if (phone.match(phonenb)) {
            $('#msg_phone').html('');
        } else {
            $('#msg_phone').html('<i class="fa fa-exclamation"></i> ' + _lang.Wrong_Format).css('color', 'red');
            count++;
        }
    }
    else {
        $('#msg_phone').html("*" + _lang.Required + "*").css('color', 'red');
        count++;
    }

    if ($("#fname").val() !== '') {
        $('#msg_fname').html('');
    }
    else {
        $('#msg_fname').html("*" + _lang.Required + "*").css('color', 'red');
        count++;
    }

    if ($("#lname").val() !== '') {
        $('#msg_lname').html('');
    }
    else {
        $('#msg_lname').html("*" + _lang.Required + "*").css('color', 'red');
        count++;
    }

    if ($("#direction").val() !== '') {
        $('#msg_direction').html('');
    }
    else {
        $('#msg_direction').html("*" + _lang.Required + "*").css('color', 'red');
        count++;
    }

    if (count !== 0) {
        return false;
    } else {
        return true;
    }
}

function get_city_data() {
    if ($('#country').val() == "LB") {
        var cities = get_lebanese_cities();
        var options = '';
        for (var i = 0; i < cities.length; i++) {
            options += '<option value="' + cities[i] + '" />';
        }
        document.getElementById('cities').innerHTML = options;
    } else {
        document.getElementById('cities').innerHTML = '';
    }
}


function get_mobile_country_code_BY_letter(countryletter) {
    for (const country of AllCounties()) {
        if (country.code === countryletter) {
            return country.phone;
        }
    }
    return null;
}

function AllCounties() {
    return [{
        code: 'AD',
        label: 'Andorra',
        phone: '376',
        phoneLength: [6, 8, 9]
    },
    {
        code: 'AE',
        label: 'United Arab Emirates',
        phone: '971',
        phoneLength: [8, 9]
    },
    {
        code: 'AF',
        label: 'Afghanistan',
        phone: '93',
        phoneLength: 9
    },
    {
        code: 'AG',
        label: 'Antigua and Barbuda',
        phone: '1-268',
        phoneLength: 10
    },
    {
        code: 'AI',
        label: 'Anguilla',
        phone: '1-264',
        phoneLength: 10
    },
    {
        code: 'AL',
        label: 'Albania',
        phone: '355',
        phoneLength: 9
    },
    {
        code: 'AM',
        label: 'Armenia',
        phone: '374',
        phoneLength: 8
    },
    {
        code: 'AO',
        label: 'Angola',
        phone: '244',
        phoneLength: 9
    },
    {
        code: 'AQ',
        label: 'Antarctica',
        phone: '672',
        phoneLength: 6
    },
    {
        code: 'AR',
        label: 'Argentina',
        phone: '54',
        phoneLength: [6, 7, 8, 10]
    },
    {
        code: 'AS',
        label: 'American Samoa',
        phone: '1-684',
        phoneLength: 10
    },
    {
        code: 'AT',
        label: 'Austria',
        phone: '43',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11, 12, 13]
    },
    {
        code: 'AU',
        label: 'Australia',
        phone: '61',
        suggested: true,
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
    },
    {
        code: 'AW',
        label: 'Aruba',
        phone: '297',
        phoneLength: 7
    },
    {
        code: 'AX',
        label: 'Alland Islands',
        phone: '358',
        min: 7,
        max: 10
    },
    {
        code: 'AZ',
        label: 'Azerbaijan',
        phone: '994',
        phoneLength: [8, 9]
    },
    {
        code: 'BA',
        label: 'Bosnia and Herzegovina',
        phone: '387',
        phoneLength: 8
    },
    {
        code: 'BB',
        label: 'Barbados',
        phone: '1-246',
        phoneLength: 10
    },
    {
        code: 'BD',
        label: 'Bangladesh',
        phone: '880',
        phoneLength: [6, 7, 8, 9, 10]
    },
    {
        code: 'BE',
        label: 'Belgium',
        phone: '32',
        phoneLength: [8, 9]
    },
    {
        code: 'BF',
        label: 'Burkina Faso',
        phone: '226',
        phoneLength: 8
    },
    {
        code: 'BG',
        label: 'Bulgaria',
        phone: '359',
        phoneLength: [7, 8, 9]
    },
    {
        code: 'BH',
        label: 'Bahrain',
        phone: '973',
        phoneLength: 8
    },
    {
        code: 'BI',
        label: 'Burundi',
        phone: '257',
        phoneLength: 8
    },
    {
        code: 'BJ',
        label: 'Benin',
        phone: '229',
        phoneLength: 8
    },
    {
        code: 'BL',
        label: 'Saint Barthelemy',
        phone: '590',
        phoneLength: 9
    },
    {
        code: 'BM',
        label: 'Bermuda',
        phone: '1-441',
        phoneLength: 10
    },
    {
        code: 'BN',
        label: 'Brunei Darussalam',
        phone: '673',
        phoneLength: 7
    },
    {
        code: 'BO',
        label: 'Bolivia',
        phone: '591',
        phoneLength: [8, 9]
    },
    {
        code: 'BR',
        label: 'Brazil',
        phone: '55',
        phoneLength: [10, 11]
    },
    {
        code: 'BS',
        label: 'Bahamas',
        phone: '1-242',
        phoneLength: 10
    },
    {
        code: 'BT',
        label: 'Bhutan',
        phone: '975',
        phoneLength: [7, 8]
    },
    {
        code: 'BV',
        label: 'Bouvet Island',
        phone: '47',
        phoneLength: 10
    },
    {
        code: 'BW',
        label: 'Botswana',
        phone: '267',
        phoneLength: [7, 8]
    },
    {
        code: 'BY',
        label: 'Belarus',
        phone: '375',
        phoneLength: [9, 10]
    },
    {
        code: 'BZ',
        label: 'Belize',
        phone: '501',
        phoneLength: 7
    },
    {
        code: 'CA',
        label: 'Canada',
        phone: '1',
        suggested: true,
        phoneLength: 10
    },
    {
        code: 'CC',
        label: 'Cocos (Keeling) Islands',
        phone: '61',
        phoneLength: 10
    },
    {
        code: 'CD',
        label: 'Congo, Democratic Republic of the',
        phone: '243',
        phoneLength: [5, 6, 7, 8, 9]
    },
    {
        code: 'CF',
        label: 'Central African Republic',
        phone: '236',
        phoneLength: 8
    },
    {
        code: 'CG',
        label: 'Congo, Republic of the',
        phone: '242',
        phoneLength: [6, 7, 9]
    },
    {
        code: 'CH',
        label: 'Switzerland',
        phone: '41',
        phoneLength: [4, 5, 6, 7, 9, 10, 11, 12, 13]
    },
    {
        code: 'CI',
        label: "Cote d'Ivoire",
        phone: '225',
        phoneLength: 8
    },
    {
        code: 'CK',
        label: 'Cook Islands',
        phone: '682',
        phoneLength: 5
    },
    {
        code: 'CL',
        label: 'Chile',
        phone: '56',
        phoneLength: [8, 9]
    },
    {
        code: 'CM',
        label: 'Cameroon',
        phone: '237',
        phoneLength: [8, 9]
    },
    {
        code: 'CN',
        label: 'China',
        phone: '86',
        phoneLength: [5, 6, 7, 8, 9, 10, 11, 12]
    },
    {
        code: 'CO',
        label: 'Colombia',
        phone: '57',
        phoneLength: [8, 9, 10]
    },
    {
        code: 'CR',
        label: 'Costa Rica',
        phone: '506',
        phoneLength: 8
    },
    {
        code: 'CU',
        label: 'Cuba',
        phone: '53',
        phoneLength: [6, 7, 8]
    },
    {
        code: 'CV',
        label: 'Cape Verde',
        phone: '238',
        phoneLength: 7
    },
    {
        code: 'CW',
        label: 'Curacao',
        phone: '599',
        phoneLength: 7
    },
    {
        code: 'CX',
        label: 'Christmas Island',
        phone: '61',
        phoneLength: 9
    },
    {
        code: 'CY',
        label: 'Cyprus',
        phone: '357',
        phoneLength: [8, 9, 10, 11]
    },
    {
        code: 'CZ',
        label: 'Czech Republic',
        phone: '420',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11, 12]
    },
    {
        code: 'DE',
        label: 'Germany',
        phone: '49',
        suggested: true,
        phoneLength: [6, 7, 8, 9, 10, 11, 12, 13]
    },
    {
        code: 'DJ',
        label: 'Djibouti',
        phone: '253',
        phoneLength: [6, 10]
    },
    {
        code: 'DK',
        label: 'Denmark',
        phone: '45',
        phoneLength: 8
    },
    {
        code: 'DM',
        label: 'Dominica',
        phone: '1-767',
        phoneLength: 10
    },
    {
        code: 'DO',
        label: 'Dominican Republic',
        phone: '1-809',
        phoneLength: 10
    },
    {
        code: 'DZ',
        label: 'Algeria',
        phone: '213',
        phoneLength: 9
    },
    {
        code: 'EC',
        label: 'Ecuador',
        phone: '593',
        phoneLength: [8, 9]
    },
    {
        code: 'EE',
        label: 'Estonia',
        phone: '372',
        phoneLength: [7, 8, 9, 10]
    },
    {
        code: 'EG',
        label: 'Egypt',
        phone: '20',
        phoneLength: [7, 8, 9, 10]
    },
    {
        code: 'EH',
        label: 'Western Sahara',
        phone: '212',
        phoneLength: 9
    },
    {
        code: 'ER',
        label: 'Eritrea',
        phone: '291',
        phoneLength: 7
    },
    {
        code: 'ES',
        label: 'Spain',
        phone: '34',
        phoneLength: 9
    },
    {
        code: 'ET',
        label: 'Ethiopia',
        phone: '251',
        phoneLength: 9
    },
    {
        code: 'FI',
        label: 'Finland',
        phone: '358',
        phoneLength: [5, 6, 7, 8, 9, 10, 11, 12]
    },
    {
        code: 'FJ',
        label: 'Fiji',
        phone: '679',
        phoneLength: 7
    },
    {
        code: 'FK',
        label: 'Falkland Islands (Malvinas)',
        phone: '500',
        phoneLength: 5
    },
    {
        code: 'FM',
        label: 'Micronesia, Federated States of',
        phone: '691',
        phoneLength: 7
    },
    {
        code: 'FO',
        label: 'Faroe Islands',
        phone: '298',
        phoneLength: [5, 6]
    },
    {
        code: 'FR',
        label: 'France',
        phone: '33',
        suggested: true,
        phoneLength: 9
    },
    {
        code: 'GA',
        label: 'Gabon',
        phone: '241',
        phoneLength: [6, 7, 8]
    },
    {
        code: 'GB',
        label: 'United Kingdom',
        phone: '44',
        phoneLength: [7, 8, 9, 10]
    },
    {
        code: 'GD',
        label: 'Grenada',
        phone: '1-473',
        phoneLength: [7, 10]
    },
    {
        code: 'GE',
        label: 'Georgia',
        phone: '995',
        phoneLength: [8, 9]
    },
    {
        code: 'GF',
        label: 'French Guiana',
        phone: '594',
        phoneLength: 9
    },
    {
        code: 'GG',
        label: 'Guernsey',
        phone: '44',
        phoneLength: 10
    },
    {
        code: 'GH',
        label: 'Ghana',
        phone: '233',
        phoneLength: [5, 6, 7, 8, 9]
    },
    {
        code: 'GI',
        label: 'Gibraltar',
        phone: '350',
        phoneLength: 8
    },
    {
        code: 'GL',
        label: 'Greenland',
        phone: '299',
        phoneLength: 6
    },
    {
        code: 'GM',
        label: 'Gambia',
        phone: '220',
        phoneLength: 7
    },
    {
        code: 'GN',
        label: 'Guinea',
        phone: '224',
        phoneLength: [8, 9]
    },
    {
        code: 'GP',
        label: 'Guadeloupe',
        phone: '590',
        phoneLength: 9
    },
    {
        code: 'GQ',
        label: 'Equatorial Guinea',
        phone: '240',
        phoneLength: [6, 9]
    },
    {
        code: 'GR',
        label: 'Greece',
        phone: '30',
        phoneLength: 10
    },
    {
        code: 'GS',
        label: 'South Georgia and the South Sandwich Islands',
        phone: '500',
        phoneLength: 5
    },
    {
        code: 'GT',
        label: 'Guatemala',
        phone: '502',
        phoneLength: 8
    },
    {
        code: 'GU',
        label: 'Guam',
        phone: '1-671',
        phoneLength: [7, 10]
    },
    {
        code: 'GW',
        label: 'Guinea-Bissau',
        phone: '245',
        phoneLength: [7, 9]
    },
    {
        code: 'GY',
        label: 'Guyana',
        phone: '592',
        phoneLength: 7
    },
    {
        code: 'HK',
        label: 'Hong Kong',
        phone: '852',
        phoneLength: [4, 8, 9]
    },
    {
        code: 'HM',
        label: 'Heard Island and McDonald Islands',
        phone: '672',
        phoneLength: 10
    },
    {
        code: 'HN',
        label: 'Honduras',
        phone: '504',
        phoneLength: [7, 8]
    },
    {
        code: 'HR',
        label: 'Croatia',
        phone: '385',
        phoneLength: [8, 9, 10, 11, 12]
    },
    {
        code: 'HT',
        label: 'Haiti',
        phone: '509',
        phoneLength: 8
    },
    {
        code: 'HU',
        label: 'Hungary',
        phone: '36',
        phoneLength: [8, 9]
    },
    {
        code: 'ID',
        label: 'Indonesia',
        phone: '62',
        phoneLength: [5, 6, 7, 8, 9, 10, 11]
    },
    {
        code: 'IE',
        label: 'Ireland',
        phone: '353',
        phoneLength: [7, 8, 9, 10, 11]
    },

    {
        code: 'IM',
        label: 'Isle of Man',
        phone: '44',
        phoneLength: 10
    },
    {
        code: 'IN',
        label: 'India',
        phone: '91',
        phoneLength: [7, 8, 9, 10]
    },
    {
        code: 'IO',
        label: 'British Indian Ocean Territory',
        phone: '246',
        phoneLength: 7
    },
    {
        code: 'IQ',
        label: 'Iraq',
        phone: '964',
        phoneLength: [8, 9, 10]
    },
    {
        code: 'IR',
        label: 'Iran, Islamic Republic of',
        phone: '98',
        phoneLength: [6, 7, 8, 9, 10, 11]
    },
    {
        code: 'IS',
        label: 'Iceland',
        phone: '354',
        phoneLength: [7, 8, 9]
    },
    {
        code: 'IT',
        label: 'Italy',
        phone: '39',
        phoneLength: [10, 11]
    },
    {
        code: 'JE',
        label: 'Jersey',
        phone: '44',
        phoneLength: 10
    },
    {
        code: 'JM',
        label: 'Jamaica',
        phone: '1-876',
        phoneLength: [7, 10]
    },
    {
        code: 'JO',
        label: 'Jordan',
        phone: '962',
        phoneLength: [5, 6, 7, 8, 9]
    },
    {
        code: 'JP',
        label: 'Japan',
        phone: '81',
        suggested: true,
        phoneLength: [9, 10]
    },
    {
        code: 'KE',
        label: 'Kenya',
        phone: '254',
        phoneLength: [6, 7, 8, 9, 10]
    },
    {
        code: 'KG',
        label: 'Kyrgyzstan',
        phone: '996',
        phoneLength: 9
    },
    {
        code: 'KH',
        label: 'Cambodia',
        phone: '855',
        phoneLength: [8, 9]
    },
    {
        code: 'KI',
        label: 'Kiribati',
        phone: '686',
        phoneLength: [5, 8]
    },
    {
        code: 'KM',
        label: 'Comoros',
        phone: '269',
        phoneLength: 7
    },
    {
        code: 'KN',
        label: 'Saint Kitts and Nevis',
        phone: '1-869',
        phoneLength: [7, 10]
    },
    {
        code: 'KP',
        label: "Korea, Democratic People's Republic of",
        phone: '850',
        phoneLength: [4, 6, 7, 13]
    },
    {
        code: 'KR',
        label: 'Korea, Republic of',
        phone: '82',
        phoneLength: [7, 8]
    },
    {
        code: 'KW',
        label: 'Kuwait',
        phone: '965',
        phoneLength: [7, 8]
    },
    {
        code: 'KY',
        label: 'Cayman Islands',
        phone: '1-345',
        phoneLength: [7, 10]
    },
    {
        code: 'KZ',
        label: 'Kazakhstan',
        phone: '7',
        phoneLength: 10
    },
    {
        code: 'LA',
        label: "Lao People's Democratic Republic",
        phone: '856',
        phoneLength: [8, 9]
    },
    {
        code: 'LB',
        label: 'Lebanon',
        phone: '961',
        // phoneLength: [7, 8]
        phoneLength: 8
    },
    {
        code: 'LC',
        label: 'Saint Lucia',
        phone: '1-758',
        phoneLength: [7, 10]
    },
    {
        code: 'LI',
        label: 'Liechtenstein',
        phone: '423',
        phoneLength: [7, 8, 9]
    },
    {
        code: 'LK',
        label: 'Sri Lanka',
        phone: '94',
        phoneLength: [7, 9]
    },
    {
        code: 'LR',
        label: 'Liberia',
        phone: '231',
        phoneLength: [7, 8, 9]
    },
    {
        code: 'LS',
        label: 'Lesotho',
        phone: '266',
        phoneLength: 8
    },
    {
        code: 'LT',
        label: 'Lithuania',
        phone: '370',
        phoneLength: 8
    },
    {
        code: 'LU',
        label: 'Luxembourg',
        phone: '352',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11]
    },
    {
        code: 'LV',
        label: 'Latvia',
        phone: '371',
        phoneLength: [7, 8]
    },
    {
        code: 'LY',
        label: 'Libya',
        phone: '218',
        phoneLength: [8, 9, 10]
    },
    {
        code: 'MA',
        label: 'Morocco',
        phone: '212',
        phoneLength: 9
    },
    {
        code: 'MC',
        label: 'Monaco',
        phone: '377',
        phoneLength: [5, 6, 7, 8, 9]
    },
    {
        code: 'MD',
        label: 'Moldova, Republic of',
        phone: '373',
        phoneLength: 8
    },
    {
        code: 'ME',
        label: 'Montenegro',
        phone: '382',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11, 12]
    },
    {
        code: 'MF',
        label: 'Saint Martin (French part)',
        phone: '590',
        phoneLength: 6
    },
    {
        code: 'MG',
        label: 'Madagascar',
        phone: '261',
        phoneLength: [7, 9, 10]
    },
    {
        code: 'MH',
        label: 'Marshall Islands',
        phone: '692',
        phoneLength: 7
    },
    {
        code: 'MK',
        label: 'Macedonia, the Former Yugoslav Republic of',
        phone: '389',
        phoneLength: 8
    },
    {
        code: 'ML',
        label: 'Mali',
        phone: '223',
        phoneLength: 8
    },
    {
        code: 'MM',
        label: 'Myanmar',
        phone: '95',
        min: 7,
        max: 10
    },
    {
        code: 'MN',
        label: 'Mongolia',
        phone: '976',
        phoneLength: [7, 8]
    },
    {
        code: 'MO',
        label: 'Macao',
        phone: '853',
        phoneLength: 8
    },
    {
        code: 'MP',
        label: 'Northern Mariana Islands',
        phone: '1-670',
        phoneLength: [7, 10]
    },
    {
        code: 'MQ',
        label: 'Martinique',
        phone: '596',
        phoneLength: 9
    },
    {
        code: 'MR',
        label: 'Mauritania',
        phone: '222',
        phoneLength: [7, 8]
    },
    {
        code: 'MS',
        label: 'Montserrat',
        phone: '1-664',
        phoneLength: [7, 10]
    },
    {
        code: 'MT',
        label: 'Malta',
        phone: '356',
        phoneLength: 8
    },
    {
        code: 'MU',
        label: 'Mauritius',
        phone: '230',
        phoneLength: [7, 8]
    },
    {
        code: 'MV',
        label: 'Maldives',
        phone: '960',
        phoneLength: 7
    },
    {
        code: 'MW',
        label: 'Malawi',
        phone: '265',
        phoneLength: [7, 8, 9]
    },
    {
        code: 'MX',
        label: 'Mexico',
        phone: '52',
        phoneLength: 10
    },
    {
        code: 'MY',
        label: 'Malaysia',
        phone: '60',
        phoneLength: [7, 8, 9]
    },
    {
        code: 'MZ',
        label: 'Mozambique',
        phone: '258',
        phoneLength: [8, 9, 12]
    },
    {
        code: 'NA',
        label: 'Namibia',
        phone: '264',
        phoneLength: [6, 7, 8, 9, 10]
    },
    {
        code: 'NC',
        label: 'New Caledonia',
        phone: '687',
        phoneLength: 6
    },
    {
        code: 'NE',
        label: 'Niger',
        phone: '227',
        phoneLength: 8
    },
    {
        code: 'NF',
        label: 'Norfolk Island',
        phone: '672',
        phoneLength: 6
    },
    {
        code: 'NG',
        label: 'Nigeria',
        phone: '234',
        phoneLength: [7, 8, 9, 10]
    },
    {
        code: 'NI',
        label: 'Nicaragua',
        phone: '505',
        phoneLength: 8
    },
    {
        code: 'NL',
        label: 'Netherlands',
        phone: '31',
        phoneLength: [6, 7, 8, 9]
    },
    {
        code: 'NO',
        label: 'Norway',
        phone: '47',
        phoneLength: [5, 6, 7, 8]
    },
    {
        code: 'NP',
        label: 'Nepal',
        phone: '977',
        phoneLength: [8, 9]
    },
    {
        code: 'NR',
        label: 'Nauru',
        phone: '674',
        phoneLength: [4, 5, 6, 7]
    },
    {
        code: 'NU',
        label: 'Niue',
        phone: '683',
        phoneLength: 4
    },
    {
        code: 'NZ',
        label: 'New Zealand',
        phone: '64',
        phoneLength: [3, 4, 5, 6, 7, 8, 9, 10]
    },
    {
        code: 'OM',
        label: 'Oman',
        phone: '968',
        phoneLength: [7, 8]
    },
    {
        code: 'PA',
        label: 'Panama',
        phone: '507',
        phoneLength: [7, 8]
    },
    {
        code: 'PE',
        label: 'Peru',
        phone: '51',
        phoneLength: [8, 9, 10, 11]
    },
    {
        code: 'PF',
        label: 'French Polynesia',
        phone: '689',
        phoneLength: [6, 8]
    },
    {
        code: 'PG',
        label: 'Papua New Guinea',
        phone: '675',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11]
    },
    {
        code: 'PH',
        label: 'Philippines',
        phone: '63',
        phoneLength: [8, 9, 10]
    },
    {
        code: 'PK',
        label: 'Pakistan',
        phone: '92',
        phoneLength: [8, 9, 10, 11]
    },
    {
        code: 'PL',
        label: 'Poland',
        phone: '48',
        phoneLength: [6, 7, 8, 9]
    },
    {
        code: 'PM',
        label: 'Saint Pierre and Miquelon',
        phone: '508',
        phoneLength: 6
    },
    {
        code: 'PN',
        label: 'Pitcairn',
        phone: '870',
        phoneLength: 9
    },
    {
        code: 'PR',
        label: 'Puerto Rico',
        phone: '1',
        phoneLength: [7, 10]
    },
    {
        code: 'PS',
        label: 'Palestine, State of',
        phone: '970',
        phoneLength: 9
    },
    {
        code: 'PT',
        label: 'Portugal',
        phone: '351',
        phoneLength: [8, 9, 10, 11]
    },
    {
        code: 'PW',
        label: 'Palau',
        phone: '680',
        phoneLength: 7
    },
    {
        code: 'PY',
        label: 'Paraguay',
        phone: '595',
        phoneLength: [5, 6, 7, 8, 9]
    },
    {
        code: 'QA',
        label: 'Qatar',
        phone: '974',
        phoneLength: [6, 7, 8, 9, 10]
    },
    {
        code: 'RE',
        label: 'Reunion',
        phone: '262',
        phoneLength: 10
    },
    {
        code: 'RO',
        label: 'Romania',
        phone: '40',
        phoneLength: [9, 10]
    },
    {
        code: 'RS',
        label: 'Serbia',
        phone: '381',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11, 12]
    },
    {
        code: 'RU',
        label: 'Russian Federation',
        phone: '7',
        phoneLength: 10
    },
    {
        code: 'RW',
        label: 'Rwanda',
        phone: '250',
        phoneLength: 9
    },
    {
        code: 'SA',
        label: 'Saudi Arabia',
        phone: '966',
        phoneLength: [8, 9]
    },
    {
        code: 'SB',
        label: 'Solomon Islands',
        phone: '677',
        phoneLength: [5, 7]
    },
    {
        code: 'SC',
        label: 'Seychelles',
        phone: '248',
        phoneLength: [6, 7]
    },
    {
        code: 'SD',
        label: 'Sudan',
        phone: '249',
        phoneLength: 9
    },
    {
        code: 'SE',
        label: 'Sweden',
        phone: '46',
        phoneLength: [7, 8, 9, 10, 11, 12, 13]
    },
    {
        code: 'SG',
        label: 'Singapore',
        phone: '65',
        phoneLength: [8, 9, 10, 11, 12]
    },
    {
        code: 'SH',
        label: 'Saint Helena',
        phone: '290',
        phoneLength: 4
    },
    {
        code: 'SI',
        label: 'Slovenia',
        phone: '386',
        phoneLength: [8, 9]
    },
    {
        code: 'SJ',
        label: 'Svalbard and Jan Mayen',
        phone: '47',
        phoneLength: 8
    },
    {
        code: 'SK',
        label: 'Slovakia',
        phone: '421',
        phoneLength: [4, 5, 6, 7, 8, 9]
    },
    {
        code: 'SL',
        label: 'Sierra Leone',
        phone: '232',
        phoneLength: 8
    },
    {
        code: 'SM',
        label: 'San Marino',
        phone: '378',
        phoneLength: [6, 7, 8, 9, 10]
    },
    {
        code: 'SN',
        label: 'Senegal',
        phone: '221',
        phoneLength: 9
    },
    {
        code: 'SO',
        label: 'Somalia',
        phone: '252',
        phoneLength: [5, 6, 7, 8, 9]
    },
    {
        code: 'SR',
        label: 'Suriname',
        phone: '597',
        phoneLength: [6, 7]
    },
    {
        code: 'SS',
        label: 'South Sudan',
        phone: '211',
        phoneLength: 7
    },
    {
        code: 'ST',
        label: 'Sao Tome and Principe',
        phone: '239',
        phoneLength: 7
    },
    {
        code: 'SV',
        label: 'El Salvador',
        phone: '503',
        phoneLength: [7, 8, 11]
    },
    {
        code: 'SX',
        label: 'Sint Maarten (Dutch part)',
        phone: '1-721',
        phoneLength: 10
    },
    {
        code: 'SY',
        label: 'Syrian Arab Republic',
        phone: '963',
        phoneLength: [8, 9, 10]
    },
    {
        code: 'SZ',
        label: 'Swaziland',
        phone: '268',
        phoneLength: [7, 8]
    },
    {
        code: 'TC',
        label: 'Turks and Caicos Islands',
        phone: '1-649',
        phoneLength: [7, 10]
    },
    {
        code: 'TD',
        label: 'Chad',
        phone: '235',
        phoneLength: [6, 7]
    },
    {
        code: 'TF',
        label: 'French Southern Territories',
        phone: '262',
        phoneLength: 10
    },
    {
        code: 'TG',
        label: 'Togo',
        phone: '228',
        phoneLength: [7, 8]
    },
    {
        code: 'TH',
        label: 'Thailand',
        phone: '66',
        phoneLength: [8, 9]
    },
    {
        code: 'TJ',
        label: 'Tajikistan',
        phone: '992',
        phoneLength: 9
    },
    {
        code: 'TK',
        label: 'Tokelau',
        phone: '690',
        phoneLength: [4, 5]
    },
    {
        code: 'TL',
        label: 'Timor-Leste',
        phone: '670',
        phoneLength: 7
    },
    {
        code: 'TM',
        label: 'Turkmenistan',
        phone: '993',
        phoneLength: 8
    },
    {
        code: 'TN',
        label: 'Tunisia',
        phone: '216',
        phoneLength: 8
    },
    {
        code: 'TO',
        label: 'Tonga',
        phone: '676',
        phoneLength: [5, 6, 7]
    },
    {
        code: 'TR',
        label: 'Turkey',
        phone: '90',
        phoneLength: [10, 11]
    },
    {
        code: 'TT',
        label: 'Trinidad and Tobago',
        phone: '1-868',
        phoneLength: [7, 10]
    },
    {
        code: 'TV',
        label: 'Tuvalu',
        phone: '688',
        phoneLength: [5, 6]
    },
    {
        code: 'TW',
        label: 'Taiwan, Province of China',
        phone: '886',
        phoneLength: [8, 9]
    },
    {
        code: 'TZ',
        label: 'United Republic of Tanzania',
        phone: '255',
        phoneLength: [7, 9]
    },
    {
        code: 'UA',
        label: 'Ukraine',
        phone: '380',
        phoneLength: 9
    },
    {
        code: 'UG',
        label: 'Uganda',
        phone: '256',
        phoneLength: [7, 9]
    },
    {
        code: 'US',
        label: 'United States',
        phone: '1',
        suggested: true,
        phoneLength: 10
    },
    {
        code: 'UY',
        label: 'Uruguay',
        phone: '598',
        phoneLength: [4, 5, 6, 7, 8, 9, 10, 11]
    },
    {
        code: 'UZ',
        label: 'Uzbekistan',
        phone: '998',
        phoneLength: 9
    },
    {
        code: 'VA',
        label: 'Holy See (Vatican City State)',
        phone: '379',
        phoneLength: [10, 11]
    },
    {
        code: 'VC',
        label: 'Saint Vincent and the Grenadines',
        phone: '1-784',
        phoneLength: [7, 10]
    },
    {
        code: 'VE',
        label: 'Venezuela',
        phone: '58',
        phoneLength: [7, 10]
    },
    {
        code: 'VG',
        label: 'British Virgin Islands',
        phone: '1-284',
        phoneLength: [7, 10]
    },
    {
        code: 'VI',
        label: 'US Virgin Islands',
        phone: '1-340',
        phoneLength: [7, 10]
    },
    {
        code: 'VN',
        label: 'Vietnam',
        phone: '84',
        phoneLength: [7, 8, 9, 10]
    },
    {
        code: 'VU',
        label: 'Vanuatu',
        phone: '678',
        phoneLength: [5, 6, 7]
    },
    {
        code: 'WF',
        label: 'Wallis and Futuna',
        phone: '681',
        phoneLength: 6
    },
    {
        code: 'WS',
        label: 'Samoa',
        phone: '685',
        phoneLength: [3, 4, 5, 6, 7]
    },
    {
        code: 'XK',
        label: 'Kosovo',
        phone: '383',
        phoneLength: 8
    },
    {
        code: 'YE',
        label: 'Yemen',
        phone: '967',
        phoneLength: [6, 7, 8, 9]
    },
    {
        code: 'YT',
        label: 'Mayotte',
        phone: '262',
        phoneLength: 9
    },
    {
        code: 'ZA',
        label: 'South Africa',
        phone: '27',
        phoneLength: 9
    },
    {
        code: 'ZM',
        label: 'Zambia',
        phone: '260',
        phoneLength: 9
    },
    {
        code: 'ZW',
        label: 'Zimbabwe',
        phone: '263',
        phoneLength: [5, 6, 7, 8, 9]
    },
    ];
}

function get_lebanese_cities() {
    var cities = ["Wakilni Beirut Office (Self Pickup)", "Dawra", "Hamra", "Ain el Remmaneh (Beirut)", "Baabda", "Bourj El Brajneh", "Chiyah", "Fayadieh", "Furn el-Chebbak", "Ghobeiry", "Hadath", "Haret Hreik", "Hazmieh (Baabda)", "Leilaky", "Louaizeh (Baabda)", "Mreijeh", "Tahweitat", "Jdeideh", "Achrafieh", "Ain el-Mreisseh", "Ain el Tineh", "Bab Idriss", "Bachoura", "Badaro", "Barbir", "Basta Fawka", "Basta Tahta", "Batrakiyi", "Beirut", "Bourj Abi Haidar", "Down Town", "Mathaf", "Medawar", "Minet el-Hosn", "Mousseitbeh", "Port of Beirut", "Ramle El Baida", "Ras-Beyrouth", "Rmeil", "Saifi", "Snoubra", "Verdun", "Wata Al Mousaitbe", "Zokak el-Blat", "Manara (Beirut)", "Rawda", "Amaret Chalhoub", "Antelias", "Bouchrieh", "Bourj Hammoud", "Dawra", "Dbayeh", "Dekouaneh", "Fanar", "Jal el-Dib", "Mansourieh", "Mar Mikhael", "Mar Roukoz", "Mezher", "Mkalles", "Nahr El Mot", "Sad el-Baouchrieh", "Sin el-Fil", "Zalka", "Hay el-Sellom", "Karantina", "Tarik Jdideh", "Bir Hasan", "Raouche", "Zarif", "Gemmayzeh", "Tallet El Khayyat", "Dahieh", "Mar Elias", "cola", "Sabtieh", "Jisr el Bacha", "Sanayeh", "hay madi", "Jnah", "Mcharafiyeh", "Zaydenieh", "cornich el mazeraa", "Madine Riyadiye", "New Rawda", "Tayouneh", "Sfeir", "noueiry", "kafaat", "Beirut Central District", "Mouawad", "Koraytem", "Beirut Digital District", "Clemenceau", "Sioufi", "Adlieh", "Jamhour", "Rweissat", "Karakol Druze", "Kaskas", "New Jdeideh", "betchay", "Airport Road", "Horch Tabet", "Bechara El Khoury", "Salim Slem", "kantari", "Sodeco", "Sakiet El Janzir", "Wetwat", "Sami El Solh", "Al Marfa'a", "Karakas", "Geitawi", "Galerie Semaan", "Aicha Bakkar", "Yarzeh", "Jisr El Wati", "Mar Takla", "Ras Al Nabeh", "Cornish el Naher", "Bourj Al Barajneh", "Ouzai", "Sassine", "Unesco", "Rweiss", "Malla", "Ras Beirut", "Barbour", "Sabra", "Quello Chocolate", "Rush & Reez", "Sports Lab", "KAH", "Saloume", "Mirna Chalouhi", "Tarek Saida El Ademe", "Mousaitbeh", "Safra", "Adma", "Adonis", "Ballouneh", "Ghazir", "Jounieh", "Tabarja", "Zouk Mikail", "Zouk Mosbeh", "Awkar", "Rabwe", "Bsalim", "Ghadir", "Rabieh", "Kfarhbab", "Al Maten", "dhour chweir", "Al Houssein Ftou7 Keserwen", "elissar", "Bzemar", "New Sehayle", "okaiby", "Bkennaya", "Kaslik", "deir el haref", "Maameltein", "Beit Misk", "Biakout", "Bouar", "Abdelli", "Ajdabra", "Al Ali", "Al Hiri", "Andoula", "Artez", "Assia", "Awra", "Batroun", "Bchaaleh", "Bkesmaya", "Chatine", "Chekka", "Chibtine", "Dabra", "Dahr Abou-Yaghi", "Dail", "Deir Bella", "Deir Chwah", "Deria", "Douma", "Eddeh", "Fadous", "Ftahat", "Ghouma", "Hadtoune", "Hamat", "Harbouna", "Hardine", "Helta", "Hery", "Ibrine", "Jdabra", "Jeb La", "Jrabta", "Jrane", "Kesya", "Kfa Rabida", "Kfar Abida", "Kfar Chliman", "Kfar Halda", "Kfar Hatna", "Kfar Hay", "Kfifane", "Kfour el-Arabi", "Koubba", "Kour", "Mar Mema", "Marj (Batroun)", "Mehmarche", "Mrah Az-Zeyat", "Mrah Chdid", "Mrah el-Hajj", "Racha", "Rachana", "Rachkida", "Ras Nhache", "Ras Senhache", "Selaata", "Sghar", "Smar Jbeil", "Souret", "Tannourine", "Thoum", "Toula", "Wata Houb", "Zane", "Abdine", "Barhelyoun", "Bazoon", "Bcharre", "Beit Mounzer", "Bkerkacha", "Blawza", "Bolla", "Braissat", "Dimane", "Hadath E Jebbeh", "Hadchit", "Hasroun", "Ibdine", "Maghroubella", "Qnat", "Qnayer", "Tourza", "Minieh", "Mrah As-Sraje", "Mrah Sfaira", "Mrah Sraje", "Nabi Youchah", "Namrine", "Nimrine", "Rihanieh", "Sfaira", "Tarane", "Wadi Nahleh", "Watieh", "Zaghr Tighrine", "Midane (Zgharta)", "A'aba", "Afsdik", "Ain Akrine", "Ajad Ebrine", "Amioun", "Anfeh", "Dahr el-Ain", "Dar Baachtar", "Dar Chmezzine", "Deddeh", "Elhat", "Fesdick", "Fieh", "Haret el-Khassa", "Hmayreh (Koura)", "Kaftoun", "Kalhat", "Kboula (Kusba)", "Kefraya (Kusba)", "Keftine", "Kfar Akka", "Kfar Hata (Koura)", "Kfar Hazir", "Kfar Kahel", "Kfar Saroun", "Kousba", "Metrit", "Nakhleh", "Rachdebbine", "Ras-Meska", "Ta'aboura", "Wata Fares", "Zakrouk", "Zakroun", "Zakzouk", "Terbol (Danniyeh)", "Achach", "Ain Toubine", "Ain Tourine", "Aitou", "Alma", "Arabet Kozhaya", "Ardeh", "Arjess", "Aslout", "Asnoun", "Dar Aya", "Ehden", "Ejbeh", "Garabache", "Haret el-Fouar", "Harf Ardeh", "Harf Miziara", "Haylan", "Hmaiss", "Ia'al", "Kadriyeh", "Karm Saddeh", "Kfar Aya", "Kfar Bachit", "Kfar Chakhna", "Kfar Dlakous", "Kfar Fou", "Kfar Hatta (Zgharta)", "Kfar Houra", "Kfar Seghab", "Kfar Yachit", "Kfar Zina", "Maasser", "Majd Laya (Zgharta)", "Mazraat el-Fraydiss", "Mazraat el-Nahr", "Mazraat Houka", "Mazraat Hreikess", "Mazraat Touffah", "Meziara", "Miryata", "Rachiine", "Raskifa", "Salib", "Saydeh", "Sebhel", "Serhel", "Toula Jebbeh", "zgharta", "Koura", "NORTH", "Bahsas", "darbaachar", "Bnachii", "bakhoun", "Danniyeh", "kfar saddeh", "bejdarfel", "Little Darlings Store", "Bednayel", "Mrayteh", "Zaarour", "Hosrayel", "Other", "Al Haddadine", "Al Hadid", "Al Mahatra", "An Nouri", "Jisrain", "Kobbeh", "Mina", "Qalamoun", "Roummaneh", "Souwaika", "Tabbaneh", "Tal Mohammad", "Tripoli", "Zahrieh", "moula", "RoseBullet", "Clothing Brand", "Ur Style", "Abou Samra", "Baddawi", "Dam w Farez", "Her Closet", "Meiteen Street", "Cotton Lane Clothing", "Aitouli", "Al Rihan", "Aramta", "Aray", "Aychieh", "Azour", "Baissour (Jezzine)", "Barta", "Beba", "Benweteh", "Bisri", "Bkassine", "Boslaya", "Bteddine El Lekech", "Choualik", "Har", "Haytoura", "Homsiyeh", "Hsanieh", "Jarmak", "Jensnaya", "Jernaya", "Jezzine", "Karkha", "Kattine (Jezzine)", "Kfar Jarra", "Kfarfalous", "Kfarhouna", "Lebaa", "Louaizeh (Jezzine)", "Machmouche", "Maknounieh", "Mharabiyeh", "Mjeidel (Jezzine)", "Mlikh", "Mrah el-Hibas", "Rimat - Chkadif", "Roum", "Sabbah", "Saydoun", "Sfaray", "Snaya", "Sojod", "Teid", "Wadi Baankoudine", "Wadi el-Laymoun", "Wadi Jezzine", "Zhalta", "Abra", "Addoussiyeh", "Adloun", "Ain el-Delb", "Aktanit", "Al Saksakieh", "Ankoun", "Anssarieh", "Arab el-Jal", "Arkeh", "Arzeh", "Arzi", "Darbessim", "Derb el-Simme", "Gharayeb", "Ghassaniyeh", "Ghaziyeh", "Hageh", "Haret Saida", "Hlaliyeh", "Jenejleya", "Ka'a kayet Snoubar", "Kannarit", "Kariyeh", "Kawssariet Sayad", "Kefraya (Saida)", "Kfar Bit", "Kfar Chelal", "Kfar Hatta (Saida)", "Kfar Hitti", "Kfar Melki (Saida)", "Kharayeb", "Khartoum", "Khazize", "Knaytra", "Krayyeh", "Loubiyeh", "Maamariyeh", "Maghdoucheh", "Majd el-Youne", "Marwaniyeh", "MiyehWe Miyeh", "Nejjariyeh", "Saida", "Saksakiyeh", "Salhiyeh", "Sarafand", "Tabbaya", "Tanbourite", "Teffahta", "Zeghdraya", "Zitta", "Zrariyeh", "Kfar Houne", "Insariyeh", "babliye", "Msayleh", "Bayssarieh", "Midane (Jezzine)", "Karha (Baalback)", "Kala'a (Baalback)", "Tarchich", "Ain Baniyeh", "Ain Bourday", "Ain Joz", "Ain Saouda", "Akidiyeh", "Al Ain", "Chaet", "Cheaibi", "Chlifa", "Chmais", "Chmeis", "Chmestar", "Dar Wassiha", "Deir el-Ahmar", "Douriss", "el-Ain", "Ersal", "Fakiha", "Falaoui", "Geba'a", "Ghafra", "Hadeth Baalbeck", "Hame", "Hazin", "Hoch Nabi", "Hoch Rafika", "Hoch Sneid", "Hoch Tal Safiyeh", "Hoch Zahab", "Hor Tehla", "Hrebta", "Ia'at", "Jaba'a", "Jbaniyeh", "Jboula", "Jenta", "Ka'a", "Kaddam", "Kal Sabeh", "Kaled Sabeh", "Kasser Naba", "Kfar Dabach", "Kfar Dan", "Kfar Diche", "Khodr", "Khreybeh", "Kneisseh (Baalback)", "Laboueh", "Lebbaya", "Maaraboun", "Majd Aloun", "Makneh", "Makni", "Masnah Zahra", "Mazraat Abou Slaybi", "Mazraat Beit Matar", "Mazraat Beit Slaybi", "Mazraat Dalil", "Mazraat el-Soueidan", "Mazraat Sayed", "Mazraat Soueidan", "Mazraat Tout", "Mekrak", "Nabha Damdoum", "Nabha Harfouche", "Nabha Kleili", "Nabha Mahfara", "Nabi Chiit", "Nabi Inaam", "Nabi Osman", "Nabi Rachadeh", "Nabi Sbat", "Nahleh", "Nakra", "Nye Rachadeh", "Ram", "Ramassa", "Ras Baalbeck", "Rich", "Riha", "Sabbouba", "Sadiyeh", "Sarhine", "Sayaniyeh", "Sefri", "Soleh", "Talya", "Taraya", "Temnine", "Tfayel", "Tibeh", "Tmenin", "Toufikiyeh", "Wadi Fa'ara", "Wadi Mechmechi", "Wadi Safa Charki", "Wadi Zein (Baalback)", "Yahfoufa", "Yammouni", "Younine", "Younissiyeh", "Zaboud", "Zarazir", "Ain Zabad", "Aitanit", "Terbol (Zahle)", "Charbin", "Chawaghir", "Fissane", "Haret Maasser", "Harika", "Hermel", "Hmayreh (Hermel)", "Hoch Sayed", "Jawar Hachich", "Kasr-Fissane", "Kasser", "Khrayeb", "Knafez", "Kouwakh", "M'aysra", "Mazraat Beit Tacham", "Mazraat Fakih", "Mazraat Saged", "Mrah el-Ain", "Nayra", "Sahlat Ma'a", "Wadi Asse", "Wadi Bneit", "Wadi Karm", "Wadi Rattal", "Wadi Turkman", "Zaghrin", "Ablah", "Ain Kfarzabad", "Ali el-Nahri", "Anjar", "Chtaura", "Deir el-Ghazal", "Delhamiyeh", "Ferzol", "HajjehJbeili", "Hay el-Fikati", "Hazerta", "Hoch el-Oumara", "Hoch Ghanam", "Hoch Hala", "Hoch Zarahneh", "Horch Hala", "Jalala", "Jdita", "Ka'a el-Rim", "Kab Elias", "Kab Ousseh", "Kamel", "Karak", "Kfar Zabad", "Khodr Bey", "Koussaya", "Maalaka", "Majd el-Anjar", "Maksi", "Mar Antonios", "Massa", "Mreijat (Zahle)", "Nabi Aylla", "Nassiriyeh", "Niha (Zahle)", "Rahit", "Rassiyeh", "Rayak", "Saadnayel", "Taalabaya", "Taanayel", "Tal el-Akhdar", "Touweiti", "Wadi Arayech", "Wadi el-Delm", "Youghon Oloke", "Zahle", "Baalbak", "Bekaa", "Sawfar", "Barelias", "Ksara", "Manara (West Bekaa)", "Hasbaya", "Ain Ata (Baalbeck)", "Ain Zebdeh", "Ammik (Bekaa)", "Ana", "Dakkouh", "Deir el-'Achaer", "Ghazzeh", "Hoch el-Harimeh", "Jeb Jenine", "Kalya", "Kamed el-Loz", "Karaoun", "Kefraya (Bekaa)", "Kherbet Kanafar", "Lala", "Machghara", "Mansoura", "Marj (Bekaa)", "Racyay", "Rafid", "Saghbine", "Sohmor", "Souayra", "Sultan Yaacoub", "Tal Zanoub", "Yohmor", "Zlaya", "Kfeir", "Marj el-Zouhour", "Mimes", "Al Rawda West Bekaa", "West Bekaa", "Abey", "Aghmid", "Ain Anoub", "Ain Dara", "Ain El Saydeh", "Ain Enoub", "Ain Jdideh", "Ain Ksour", "Ain Trez", "Ainab", "Aitat", "Aley", "Aramoun", "Aytate (Aley)", "Baawerta", "Badghan", "Baissour (Aley)", "Bassatine", "Bchamoun", "Bdadoun", "Bemkine", "Bennieh", "Bhamdoun", "Bhamdoun El Mhatta", "Bkhechtey", "Bleibel", "Bmahray", "Bserrine", "Bsouss", "Btalloun", "Btater", "Chanay", "Charoun", "Chartoun", "Chatiyeh", "Chemlan", "Choueifat", "Deir Koubel", "Dfoun", "Doueir el-Remmane", "Habrmoun", "Houmal", "Ighmid", "Kahaleh", "Keyfoun", "Kfar Aamey", "Kfar Amya", "Kfar Matta", "Maasriti", "Majd el-Baana", "Majd el-Behna", "Majd Laya (Aley)", "Mecherfeh", "Rechmaya", "Remhala", "Roueisset el-Nehman", "Sofar", "Souk el-Gharb", "Ain Mouaffaq", "Araya", "Arbaniyeh", "Chebaniyeh", "Deir el-Harf", "el-Qarieh", "Falougha", "Hammana", "Haret Hamzeh", "Jouar el-Haouz", "Kfar Chima", "Kfar Selouan", "Khalouate", "Kneisseh (Baabda)", "Kornayel", "Kossaibeh", "Koubbayeh", "Qoubbei", "Qsaibeh", "Quorayeh", "Ras el-Harf", "Ras el-Metn", "Rouayset el-Ballout", "Salima", "Sebnay", "Wadi Chahrour", "Kala'a (Baabda)", "Ain Ba'al (Chouf)", "Ain Kani", "Ain We Zein", "Ain Zhalta", "Al Wardaniyeh", "Amatour", "Ammik (Chouf)", "Anout", "Atrine", "Baakline", "Baasir", "Baatharan", "Barja", "Barouk", "Bater", "Batloun", "Bchetfine", "Beiteddine", "Bireh", "Botme", "Bsaba El Chouf", "Chehim", "Chourite", "Daher Al Mghara", "Dalhoun", "Damour", "Daraya (Chouf)", "Debbieh", "Deir Baba", "Deir Dourit", "Deir el-Kamar", "Deir el-Moukhales", "Deir Koucheh", "Dmayt", "Fouara", "Freidis (Chouf)", "Gharifeh", "Haret Janbal", "Hasrout", "Jahlieh", "Jbaa (Chouf)", "Jdeidet el-Chouf", "Jidra", "Jiyeh", "Joun", "Kahlounieh", "Ketermaya", "Kfar Fakoud", "Kfar Katra", "Kfar Nabrakh", "Kfar Nis", "Kfarhim", "Khrabyeh", "Knayse", "Maasser Beit Eddine", "Maasser El Chouf", "Majd el-Meouch", "Marj Barja", "Marsati", "Mazboud", "Mazraat El Chouf", "Mazraet el-Dahr", "Mechref", "Mersty", "Mghayrie", "Moughairieh", "Mouhtakara", "Mreyjat (Chouf)", "Mtolleh", "Niha (Chouf)", "Rmeileh", "Semkaniyeh", "Wadi Bnehley", "Wadi el-Set", "Wadi el-Zineh (Chouf)", "Wardanieh", "Zaarourieh", "Sibline", "Khalde", "Chouf", "Mount Lebanon", "Nehme", "dohet el hoss", "Dohat aramoun", "haret el naameh", "eklim el kharoub", "Kmatiye", "borjen", "The Pavement Warehouse", "Bekaata Chouf", "Ain el Remmaneh (Aley)", "Jadra", "Sarahmoul", "Saadiyat", "Kayfoun", "Kabrechmoun", "Abadieh", "Klayaat (Kesserwan)", "Dlaibeh", "el-Qalaa", "Kortada", "Achkout", "Adra", "Ain el-Rihani", "Aintoura", "Ajaltoun", "Akaybeh", "Azra", "Batha", "Bekaatet Achkout", "Bezhel", "Bqaatouta", "Bwar", "Chahtoul", "Chnaniir", "Daphneh", "Daraoun", "Daraya (Kesserwan)", "Dlebta", "Faraya", "Fatqa", "Feytroun", "Ghebaleh", "Ghedrass", "Ghineh", "Ghosta", "Haret Sakhr", "Harissa", "Herhraya", "Hiyata", "Hrajel", "Hsein", "Jdeidet Ghazir", "Jeita", "Jouret Bedrane", "Jouret el-Tourmos", "Kfar Yassine", "Kfar Zebian", "Kfour", "Maayssra", "Mayrouba", "Mazraat Kfardebiane", "Qattin", "Raachine", "Reyfoun", "Sahel Alma", "Sarba (Kesserwan)", "Sehayleh", "Wata el Jawz", "Yahchouche", "Zaaytre", "Zeytoun'", "Ain Aar", "Ain Alak", "Ain el Kharroubeh", "Ain el-Safsaf", "Ain Saadeh", "Atchaneh", "Ayroune", "Baabdat", "Baskinta", "Beit Chabeb", "Beit Mery", "Bhanness", "Bhersaf", "Bikfaiya", "Bolonia", "Broumana", "Bteghrine", "Chawiya", "Choueir", "Chrine", "Dahr el-Hassin", "Dahr el-Souan", "Deychounieh", "Douar", "Ein Zeitouneh", "el-Kaakour", "el-Khalleh", "Freikeh", "Hbous", "Himlaya", "Jouar", "Jouret el-Ballout", "Ka'a Kour", "Kanabat", "Kfar Akab", "Kfar Tey", "Khonchara", "Koneitra", "Kornet Chehwane", "Majd el-Tarchich", "Majzoub", "Mar Moussa", "Marjaba", "Maska", "Mayassa", "Mazraat Yachouh", "Mchikha", "Moheidse (Maten)", "Mrouj", "Mtaileb", "Mtein", "Nabay", "Naccache", "Roumieh", "Sakiet el-Misk", "Sfeili", "Wata el-Mrouj", "Zabougha", "Zarhoun", "Zeghrine", "Zekrit", "Zouk el-Kharab", "Zouk Kharab", "Daychounieh", "Metn", "Beit el Chaar", "Monteverde", "dahr el bashik", "cornet el hamra", "Kesserwen", "Biyada", "Nammoura", "Ain Najem", "Tamich", "Naher el Kaleb", "Beit el Kiko", "Dik El Mehdi", "Maarab", "Faqra", "Telal Ain Saadeh", "Abboudiyeh", "Abdeh", "Aidamoun", "Ain Tanta", "Ain Yaacoub", "Ain Zaite", "Akkar el-Atika", "Akroum", "Al Abdeh", "Al Hid", "Al Hmayra", "Al Sahleh", "Ammar Bikat", "Andket", "Chadra", "Chakdouf", "Chane", "Charbila", "Cheikh Mohamad", "Cheikh Taba", "Cheikh Znad", "Chikhlar", "Chtaheh", "Daghla", "Daher", "Dahr Lisseineh", "Daousseh", "Darine", "Debabieh", "Deir Janine", "Doueir Adouieh", "Edbel", "Fneidek", "Freidess (Akkar)", "Gebrayel", "Ghowaya", "Ghreibeh", "Ghzaileh", "Habchit", "Haissa", "Haizouk", "Hakour", "Hakr Cheikh Taba", "Hakr Dahiri", "Halba", "Haysseh", "Hed", "Hitla", "Hmayreh (Akkar)", "Hneider", "Hocheb", "Hosniyeh", "Howeiche", "Hrar", "JdeidehJoumeh", "JdeidehKatih", "Kachlak", "Kantra", "Karm Asfour", "Katelbeh", "Kboula (Akkar)", "Kfar Harra", "Kfar Melki (Akkar)", "Kfar Noun", "Kfar Toun", "Kherbet Char", "Khorbet Daoud", "Khorbet Jrad", "Khorbet Jundi", "Kiniya", "Kloud Bakieh", "Kneisseh (Akkar)", "Kobayat", "Kobbet Chamra", "Korkef", "Korneh", "Koucha", "Krayat", "Kroum Arab", "Kwachra", "Machta Hammoud", "Machta Hassan", "Majd Ala", "Majd El (Akkar)", "Mar Touma", "Mart Moura", "Massoudieh", "Mazraat Baldeh", "Mechha", "Mechmech (Akkar)", "Mekhtlef", "Memneh", "Minyara", "Mkaibleh", "Mkaiteh", "Mounjez", "Mounsa", "Mrah el-Khokh", "Nahriyeh", "Nfeisseh", "Noura", "Oueinate", "Ouyoun", "Rahbeh", "Rammah", "Saadine", "Safinet el-Dreib", "Sayssouq", "Sehleh", "Seissouk", "Semakiyeh", "Sfeinet Katih", "Sindiyaneh", "Soueisseh", "Srar", "Tacheh", "Tal Abbas", "Tal Bibeh", "Tal Bireh", "Tal Hemayra", "Tal Mehyan", "Talleh", "Tekrit", "Tel Meyane", "Tleil", "Wadi el-Hour", "Wadi Jamous", "Wadih Khaled", "Zawarib", "Zouk", "Zouk el-Hossayni", "Zouk Hadareh", "Zouk Hassineh", "Zouk Hbalseh", "Zouk Mekacharine", "Karha (Akkar)", "Aazki", "Assoune", "Deir Ammar", "Deir Nbouh", "Dibiil", "Hakl el-Azimi", "Harf Siyad", "Hazmieh (Danniyeh)", "Houwara", "Izal", "Kahf el-Malloul", "Kammamine", "Karm el-Mehr", "Karsita", "Karsouna", "Kattine (Danniyeh)", "Kfar Bibnine", "Kfar Chellam", "Kfar Chellane", "Kfar Habou", "Kharnoub", "Korhaya", "Krin", "Limar", "Markabta", "Mazraet Artousa", "Sir Denniyeh", "Klayaat (Akkar)", "Akkar", "Cheikh Ayash", "Abbassiyeh", "Chaat", "Aita el-Zot", "Chacra", "Deir Antar", "Deir Kantar", "Doubiyeh", "Froun", "Ghandouriyeh", "Haddatha", "Haris", "Jmaijmeh", "Kafra", "Kfar Doubine", "Klaouiyeh", "Safad el-Batikh", "Sultanieh", "Tebnine", "Yater", "Ain Ba'al (Tyre)", "Ain Ebel", "Alma el-Chaab", "Arzoune", "Aytite (Tyre)", "Chabiyeh", "Chahour", "Cheaytieh", "Chehabiyeh", "Deb'al", "Deir Ames", "Deir Dghaya", "Deir Kanoun", "Deir Kifa", "Halloussiyeh", "Haniyeh", "Jbal Boutoum", "Jouwaya", "Klayleh", "Maarakeh", "Maaroub", "Maarouf", "Mahrouni", "Majd el-Zoun", "Malekyeh", "Mansouri", "Mazraat Mechref", "Mjadel (Tyre)", "Qana", "Rachkananey", "Ras el-Ain", "Rmadiyeh", "Sadikine", "Sal'a", "Smaeyeh", "Tyre", "Srifa", "Tayer Flisseh", "Tayr Debba", "Toura", "Ynouh", "Zabkine", "South", "Jnoub", "bint jbeil", "Rmeich", "bazouriyeh", "dewdieh", "Yaroun", "naqoura", "chaqra", "Hanaway", "Barich", "Aitroun", "Kounine", "Baraachit", "Bflay", "Hariss", "Adasyeh", "Adchit", "Bani Hayann", "Blat", "Blida", "Bourj El Moulouk", "Debbine", "Deir Mimas", "Deir Syriane", "Ebel El Saky", "Houla", "Jdeidet Marjeyoun", "Kab Rikha", "Kantara", "Kfarkila", "Khiam", "Klayaa", "Majd el-Sel", "Majdel Selem", "Markaba", "Mays el Jabal", "Rab Thalathine", "Rachaya el-Foukhar", "Sawaneh", "Souwaneh", "Tallousseh", "Taybeh", "Touline", "Wazzany", "A'aba", "Ain Boussouar", "Ain Qana", "Al Sharkiyeh", "Ansar", "Arab Salim", "Azzeh", "Charqiyeh", "Choukine", "Deir el-Zahrani", "Doueir", "Habbouche", "Harouf", "Houmine", "Jarjouh", "Jbaa (Nabatiyeh)", "Jeb Chite", "Kfar Fila", "Kfar Remmane", "Kfar Sir", "Kfar Tebnit", "Ksaybeh", "Mayfaidoun", "Nabatiyeh", "Nemayreh", "Nmeiriyeh", "Qaaqayiet el-Jisr", "Roumine", "Sarba (Nabatiyeh)", "Sinay", "Sir el-Gharibeh", "Zaoutar", "Zebdine", "Zefta", "Aiha", "Ain Arab", "Ain Ata (Rachaiya)", "Ain Harcha", "Aita el-Fakhar", "Akbeh", "Dahr el-Ahmar", "Deir Achayer", "Hawche", "Heloueh", "Kawkaba", "Kfar Dnisse", "Kfar Kouk", "Kfar Mechki", "Kherbet Rouha", "Majd el-Balhis", "Mdawkha", "Moheidseh (Rachaiya)", "Rachaya", "Tannoura", "Yanta", "Kfar Tibnit", "Marjayoun", "jibchit", "Chebaa", "Arnoun", "Kfarchuba", "Zoueitini", "Afka", "Ain el-Ghoaybeh", "Akoura", "Almat", "Assaouneh", "Chamat", "Chamout", "Eddeh", "Ehmej", "Fatreh", "Feghal", "Fidar", "Ghalboun", "Habil", "Halate", "Hjoula", "Hsoun", "Jadayel", "Jaj", "Jalisseh", "Janneh", "Jbeil", "Kartaba", "Kattara", "Kfar Keddeh", "Kfar Mashoun", "Kfoun", "Lassa", "Majd El (Jbeil)", "Mar Sarkis", "Mayfouk", "Mazra'at el-Syad", "Mchan", "Mechmech (Jbeil)", "Mghayri", "Mounsef", "Nahr Ibrahim", "Obeidad", "Ramout", "Ras Osta", "Saki Rechmaya", "Tartej", "Torzaya", "Amchit", "Berbara", "annaya", "mastita", "Byblos", "bchelleli", "Gherfine"];
    return cities;
}


//fire purchase order
function firePurchase(order, coupon, order_items, delivery_charge) {
    //total and fill products
    var products = [];
    var total = 0;
    $.each(order_items, function (index, item) {
        var color='';
        if(item.color!=null){
            color=item.color;
        }
       
        var product = {
            'name': item.description,     // Name or ID is required.
            'id': item.id,
            'price': item.price,
            'brand': ' ',
            'category': item.category,
            'variant': color,
            'quantity': parseInt(item.qty)
        };
        products.push(product);
        total += parseFloat(item.qty) * parseFloat(item.price);
    });
    var discount = 0;
    var coupon_code='';
    if (coupon) {
        if (coupon.discount_type == 1) {
            //discount money
            var discount = coupon.amount;
        } else {
            //discount %
            var discount = (total * parseFloat(coupon.amount)) / 100;
        }
        coupon_code=coupon.coupon;
    }
    total = total - discount;
    total = total + parseFloat(delivery_charge);

    // Send transaction data with a pageview if available
    // when the page loads. Otherwise, use an event when the transaction
    // data becomes available.
    dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
    dataLayer.push({
        'event': 'purchase',
        'ecommerce': {
            'purchase': {
                'actionField': {
                    'id': order.id,                         // Transaction ID. Required for purchases and refunds.
                    'affiliation': 'Online Store',
                    'revenue': total.toString(),                    // Total transaction value (incl. tax and shipping)
                    'tax': '',
                    'shipping': order.delivery_charge,
                    'coupon': coupon_code
                },
                'products': products
            }
        }
    });
    console.log({
        'event': 'purchase',
        'ecommerce': {
            'purchase': {
                'actionField': {
                    'id': order.id,                         // Transaction ID. Required for purchases and refunds.
                    'affiliation': 'Online Store',
                    'revenue': total.toString(),                    // Total transaction value (incl. tax and shipping)
                    'tax': '',
                    'shipping': order.delivery_charge,
                    'coupon': coupon_code
                },
                'products': products
            }
        }
    });
}


//fire on checkout order
function fireCheckout() {

    $.ajax({
        cache: false,
        type: 'POST',
        data: {},
        url: getAppURL('checkout/get_cart_products'),
        dataType: "json",
        success: function (res) {
            // console.log(res);
            if (res.result == true) {
                console.log(res.data);
                dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
                dataLayer.push({
                    'event': 'checkout',
                    'ecommerce': {
                        'checkout': {
                            'actionField': { 'step': 1, 'option': 'Cash' },
                            'products': res.data.products
                        }
                    }
                });
                
                // mohammad code 2024-12-13 pixels purchase start
                var prodTotal=res.data.total;
                var prodIDs=[];
                for(var i=0;i<res.data.products.length;i++){
                    prodIDs.push(res.data.products[i].id);
                }
                fbq('track', 'Purchase', {
                     content_ids: prodIDs, // 'REQUIRED': array of product IDs
                     value: prodTotal, // REQUIRED, up to 2 decimals optional
                     currency: 'USD', // REQUIRED
                     content_type: 'product', // RECOMMENDED: Either product or product_group based on the content_ids or contents being passed.
                });
                // mohammad code 2024-12-13 pixels purchase end
                
            }
        }
    });
}


jQuery(document).ready(function () {
    fireCheckout();
});
//fire on checkout end