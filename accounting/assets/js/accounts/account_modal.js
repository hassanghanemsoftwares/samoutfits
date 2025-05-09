var $input;
$(document).ready(function () {

    var getselected = $("#account_type option:selected").text();
    $.ajax({
        cache: false,
        type: 'POST',
        data: {
            'whatselected': getselected
        },
        url: getAppURL('Accounts/fetchaccountnumberfromDatabase'),
        success: function (data) {
            $('#account_number').val(data);

        }
    });

    $('#account_type').change(function (e) {
        var getselected = $("#account_type option:selected").text();
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'whatselected': getselected
            },
            url: getAppURL('Accounts/fetchaccountnumberfromDatabase'),
            success: function (data) {
                $('#account_number').val(data);
            }
        });
    });



    get_city_data();
    $('#country').on('change', function () {

        document.getElementById('city').value = '';
        document.getElementById('place').value = '';
        document.getElementById('street').value = '';
        document.getElementById('building').value = '';
        document.getElementById('floor').value = '';
        document.getElementById('description').value = '';
    });

    $('#save_acc').on('click', function () {
        $("#accountForm").each(function () {
            $input = $(this).serializeArray();
        });
        var acc_number = $("#account_number").val();
        var acc_name = $("#account_name").val();
        var account_info = acc_number + " - " + acc_name;
        if (AccountModalValidation() == true) {
            var exitstphone = 0;
            if ($(".form_type").val() == "edit") {

                $.ajax({
                    cache: false,
                    type: 'POST',
                    async: false,
                    data: {
                        'phone': "+" + $('#country_phone').val() + $('#phone').val(),
                        type: 1,
                        id: $("#acc_id").val()

                    },
                    url: getAppURL('Accounts/check_phone'),
                    success: function (data) {
                        exitstphone = data
                    },
                });
            } else {
                $.ajax({
                    cache: false,
                    type: 'POST',
                    async: false,
                    data: {
                        'phone': "+" + $('#country_phone').val() + $('#phone').val(),
                        type: 0
                    },
                    url: getAppURL('Accounts/check_phone'),
                    success: function (data) {
                        exitstphone = data
                    }
                });
            }
            if (exitstphone == 1) {

                document.getElementById('error_phone').innerHTML = _lang.phone_exist;
                document.getElementById('error_phone').className = "alert alert-danger";
                return false;
            }
            $.ajax({
                cache: false,
                type: 'POST',
                data: {
                    'form_data': $input
                },
                url: getAppURL('Accounts/add_edit_account_by_modal'),
                success: function (res) {
                    if (res !== 'error') {
                        acc_number = res['account_number'];
                        account_info = acc_number + " - " + acc_name;
                    }
                    // alert(acc_number)
                    $("#acctLkupTo").val(account_info);
                    $.ajax({
                        cache: false,
                        type: 'POST',
                        data: {
                            'account_number': acc_number
                        },
                        url: getAppURL('Accounts/get_account_id'),
                        success: function (data) {
                            $("#account_id").val(data);
                            var id = data;
                            $.ajax({
                                cache: false,
                                type: 'POST',
                                data: {
                                    'whatselected': id
                                },
                                url: getAppURL('purchases/get_account_currency'),
                                success: function (data) {
                                    $('#currency_id_list').val(data);
                                    $('#currency_id').val(data);
                                    $.ajax({
                                        cache: false,
                                        type: 'POST',
                                        data: {
                                            'whatselected': data
                                        },
                                        url: getAppURL('sales/get_sales_account_with_the_same_currency'),
                                        success: function (data) {
                                            $('#acctLkupFrom').val(JSON.stringify(data["description"]).replace(/"/g, ""));
                                            $('#account2_id').val(JSON.stringify(data["id"]).replace(/"/g, ""));
                                        }
                                    });
                                    $.ajax({
                                        cache: false,
                                        type: 'POST',
                                        data: {
                                            'whatselected': data
                                        },
                                        url: getAppURL('currencies/get_currency_rate'),
                                        success: function (data) {
                                            var result = data.split('-');
                                            var cur_rate = result[0];
                                            var cur_read = result[1];
                                            $('#currency_id_list').prop('disabled', true).trigger("chosen:updated");
                                            $('#currency_rate').val(cur_rate);
                                            if (cur_read == "readonly") {
                                                document.getElementById('currency_rate').setAttribute("readonly", true);
                                            } else {
                                                document.getElementById('currency_rate').removeAttribute("readonly");
                                            }
                                        }
                                    });
                                }
                            });
                        }
                    });
                    setTimeout(() => $('div#AccountFormModal').modal('hide'), 1000);
                }
            });
        }
    });
    let $body = jQuery('div.modal-body', $('div#AccountFormModal'));
    inputToDatepickerA($('#opening_date', $body));
    $('#edit_acc_modal').on('click', function () {
        $(".form_type").val("edit")

        $('#country').on('change', function () {
            if ($("#phone2").val() == "") {
                $("#country_phone2").val(get_mobile_country_code_BY_letter($(this).val()));
                $("#country_phone2").selectpicker('refresh')
            }
        })
        if ($('#account_id').val() != '') {
            $.ajax({
                cache: false,
                type: 'POST',
                data: {
                    'acc_id': $('#account_id').val()
                },
                url: getAppURL('Accounts/get_account_edit_modal_data'),
                success: function (data) {
                    // alert(data.opening_date);
                    // jQuery('div.modal-body', $('div#AccountFormModal'))         
                    $("#accModalLabel").html("Edit Account");
                    $("#acc_id").val(data.id);
                    $("#account_type").val(data.account_type);
                    $("#account_number").val(data.account_number);
                    $("#account_name").val(data.account_name);
                    $("#acc_currency_id").val(data.currency_id);
                    $("#phone").val(data.phone);
                    $("#phone2").val(data.phone2);
                    var datearray = (data.opening_date).split("-");
                    var new_date_format = datearray[2] + "-" + datearray[1] + "-" + datearray[0]
                    $("#opening_date").val(new_date_format);

                    function getCountryCode(phoneNumber) {


                        const countryCodes = AllCounties();

                        const firstThreeDigits = phoneNumber.substring(0, 3);
                        const firstTwoDigits = phoneNumber.substring(0, 2);
                        const firstOneDigits = phoneNumber.substring(0, 1);

                        // console.log(phoneNumber)
                        for (const country of AllCounties()) {
                            if (firstThreeDigits === country.phone) {
                                return [country.code, country.phone];
                            } else if (firstTwoDigits === country.phone) {
                                return [country.code, country.phone];
                            } else if (firstOneDigits === country.phone) {
                                return [country.code, country.phone];
                            }
                        }
                        return null;
                    }
                    $("#phone").val($("#phone").val().replace("+", ""))
                    const phoneNumber = $("#phone").val();
                    // console.log(getCountryCode(phoneNumber))
                    if (Array.isArray(getCountryCode(phoneNumber))) {
                        const countryName = getCountryCode(phoneNumber)[0];

                        const countryCode = getCountryCode(phoneNumber)[1];
                        // alert(countryCode)
                        $("#phone").val(phoneNumber.replace(countryCode, ""));

                        $("#country_phone").val(get_mobile_country_code_BY_letter(countryName));
                        $("#country_phone").selectpicker('refresh')

                    } else {

                        $("#country_phone").val(get_mobile_country_code_BY_letter("LB"));
                        $("#country_phone").selectpicker('refresh')
                    }



                    if ($("#phone2").val() == "") {
                        // $("#country_phone4").attr("data-default", "LB")
                        // $('#country_phone4').countrypicker('setCountry', "LB");
                    } else {
                        $("#phone2").val($("#phone2").val().replace("+", ""))
                        const phoneNumber2 = $("#phone2").val();
                        // console.log(phoneNumber2)
                        const countryName2 = getCountryCode(phoneNumber2)[0];
                        const countryCode2 = getCountryCode(phoneNumber2)[1];
                        $("#phone2").val(phoneNumber2.replace(countryCode2, ""));
                        $("#country_phone2").val(get_mobile_country_code_BY_letter(countryName2));
                        $("#country_phone2").selectpicker('refresh')

                    }

                    $("#email").val(data.email);
                    $("#country").val(data.country);
                    $("#city").val(data.city);
                    $('.selectpicker').selectpicker('refresh');
                    $("#place").val(data.place);
                    $("#street").val(data.street);
                    $("#building").val(data.building);
                    $("#floor").val(data.floor);
                    $("#description1").val(data.description);
                    $("#open_balance").val(data.open_balance);
                    $('div#AccountFormModal').modal('show');
                }
            });
        }
    });
    $('#country_phone option').each(function () {
        $(this).text(get_mobile_country_code_BY_letter($(this).val()))
        $(this).attr("value", get_mobile_country_code_BY_letter($(this).val()))
    });
    $('#country_phone2 option').each(function () {
        $(this).text(get_mobile_country_code_BY_letter($(this).val()))
        $(this).attr("value", get_mobile_country_code_BY_letter($(this).val()))
    });
    $("#country_phone").val(get_mobile_country_code_BY_letter($("#country").val()));
    $("#country_phone2").val(get_mobile_country_code_BY_letter($("#country").val()));

    $('#add_acc_modal').on('click', function () {
        $(".form_type").val("add")
        $('#country').on('change', function () {
            $("#country_phone").val(get_mobile_country_code_BY_letter($(this).val()));
            $("#country_phone").selectpicker('refresh')
            $("#country_phone2").val(get_mobile_country_code_BY_letter($(this).val()));
            $("#country_phone2").selectpicker('refresh')
        })

        $("#accModalLabel").html("Add Account");
        $("#acc_id").val('');
        $("#account_type").val('Customer');
        var getselected = $("#account_type option:selected").text();
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'whatselected': getselected
            },
            url: getAppURL('Accounts/fetchaccountnumberfromDatabase'),
            success: function (data) {
                $('#account_number').val(data);
            }
        });
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'code': "USD"
            },
            url: getAppURL('currencies/get_currency_id_by_code'),
            success: function (data) {
                $("#acc_currency_id").val(data);
            }
        });
        $("#account_name").val('');
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = dd + '-' + mm + '-' + yyyy;
        $("#opening_date").val(today);
        var code = get_mobile_country_code($('#country').val());
        $("#phone").val(code);
        $("#phone2").val(code);
        $("#email").val('');
        $("#address").val('');
        $("#open_balance").val(0);
        $('div#AccountFormModal').modal('show');
    });

    $('.selectpicker').selectpicker();
});

function AccountModalValidation() {
    var count = 0;
    if (document.accountForm.currency_id.value == "") {
        document.getElementById('error_acc_currency_id').innerHTML = _lang.field_required;
        document.getElementById('error_acc_currency_id').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.country.value == "") {
        document.getElementById('error_country').innerHTML = _lang.field_required;
        document.getElementById('error_country').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.account_name.value == "") {
        document.getElementById('error_account_name').innerHTML = _lang.field_required;
        document.getElementById('error_account_name').className = "alert alert-danger";
        count++;
    }

    if (document.accountForm.city.value == "") {
        document.getElementById('error_city').innerHTML = _lang.field_required;
        document.getElementById('error_city').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.place.value == "") {
        document.getElementById('error_place').innerHTML = _lang.field_required;
        document.getElementById('error_place').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.street.value == "") {
        document.getElementById('error_street').innerHTML = _lang.field_required;
        document.getElementById('error_street').className = "alert alert-danger";
        count++;
    }
    var date1 = change_date_format(document.accountForm.opening_date.value);
    if (document.accountForm.opening_date.value == "" || isNaN(date1.getDate())) {
        document.getElementById('error_date').innerHTML = _lang.valid_date;
        document.getElementById('error_date').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.phone.value.trim() == "") {
        document.getElementById('error_phone').innerHTML = _lang.field_required;
        document.getElementById('error_phone').className = "alert alert-danger";
        count = 6;
    } else {
        var coutcountry = 0

        var code = get_mobile_country_code($('#country_phone').val());
        var lenthofcountry = getPhoneLengthByCountryCode(code);
        if (Array.isArray(lenthofcountry)) {
            coutcountry = 1
            lenthofcountry.forEach(element => {

                if (document.accountForm.phone.value.length == element) {
                    coutcountry = 0;

                }
            });
        } else {
            coutcountry = 1
            // console.log(document.accountForm.phone.value.length, lenthofcountry)
            if (document.accountForm.phone.value.length == lenthofcountry) {
                coutcountry = 0
            }
        }

        if (coutcountry != 0) {
            count = 6;
            document.getElementById('error_phone').innerHTML = _lang.check_phone_length;
            document.getElementById('error_phone').className = "alert alert-danger";
        }
    }
    if (document.accountForm.phone2.value.trim() != "") {
        var coutcountry2 = 0
        var code2 = get_mobile_country_code($('#country_phone2').val());
        var lenthofcountry2 = getPhoneLengthByCountryCode(code2);

        if (Array.isArray(lenthofcountry2)) {
            coutcountry2 = 1
            lenthofcountry2.forEach(element => {
                if ($('#phone2').val().length == element) {
                    coutcountry2 = 0;
                }
            });
        } else {
            coutcountry2 = 1
            if (document.accountForm.phone2.value.length == lenthofcountry2) {
                coutcountry2 = 0
            }
        }
        if (coutcountry2 != 0) {
            count = 6;
            document.getElementById('error_phone2').innerHTML = _lang.check_phone_length;
            document.getElementById('error_phone2').className = "alert alert-danger";
        }
    }
    if (count > 0) {
        return false;
    } else {
        return true;
    }
}

function change_date_format(date) {
    var datearray = date.split("-");
    var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2]
    var date_new = new Date(new_date_format);
    return date_new;
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

function getPhoneLengthByCountryCode(countryCode) {
    for (const country of AllCounties()) {
        if (country.phone === countryCode) {
            return country.phoneLength;
        }
    }

    return null;
}

function get_mobile_country_code_BY_letter(countryletter) {
    for (const country of AllCounties()) {
        // console.log(country.code,countryletter)
        if (country.code === countryletter) {
            return country.phone;
        }
    }
    return null;
    // var mobile_codes = AllCounties();
    // var code = mobile_codes[country];
    // // if (code[0] != "+") {
    // //     code = "+".concat(code);
    // // }
    // return code;
}

function get_mobile_country_code(countryCode) {
    for (const country of AllCounties()) {
        if (country.phone === countryCode) {
            return country.phone;
        }
    }
    return null;
    // var mobile_codes = AllCounties();
    // var code = mobile_codes[country];
    // // if (code[0] != "+") {
    // //     code = "+".concat(code);
    // // }
    // return code;
}

function get_lebanese_cities() {
    var cities = ["Wakilni Beirut Office (Self Pickup)", "Abboudiyeh - عبودية", "Abdeh - العبدة", "Aidamoun - عيدمون", "Ain Tanta - عين طنطا", "Ain Yaacoub - عين يعقوب", "Ain Zaite - عين الزيت", "Akkar el-Atika - عكار العتيقة", "Akroum - عكروم", "Al Abdeh - العبدة", "Al Hid - الحد", "Al Hmayra - الحميرة", "Al Sahleh - السهلة", "Ammar Bikat - عمارة البيكات", "Andket - عندقت", "Chadra - شدرا", "Chakdouf - شقدوف", "Chane - شانة", "Charbila - شربيلا", "Cheikh Mohamad - الشيخ محمد", "Cheikh Taba - الشيخ طابا", "Cheikh Znad - الشيخ زناد", "Chikhlar - شيخلار", "Chtaheh - شطاحة", "Daghla - دغلة", "Daher - ضاهر", "Dahr Lisseineh - ضهر ليسينه", "Daousseh - دعوسة", "Darine - دارين", "Dawra - الدورة", "Debabieh - دبابية", "Deir Janine - دير جنين", "Doueir Adouieh - دوير عدوية", "Edbel - عبدل", "Fneidek - فنيدق", "Freidess (Akkar) - فريديس (عكار)", "Gebrayel - جبرايل", "Ghowaya - غواية", "Ghreibeh - خريبة", "Ghzaileh - غزيلة", "Habchit - حبشيت", "Haissa - حيصا", "Haizouk - حيزوق", "Hakour - حاكور", "Hakr Cheikh Taba - حكر الشيخ طابا", "Hakr Dahiri - حكر الضهري", "Halba - حلبا", "Hamra - حمرا", "Haysseh - حيصا", "Hed - حد", "Hitla - حيتلا", "Hmayreh (Akkar) - حميرة (عكار)", "Hneider - حنيدر", "Hocheb - حوشب", "Hosniyeh - الحصنية", "Howeiche - حويش", "Hrar - حرار", "JdeidehJoumeh - جديدة الجومة", "JdeidehKatih - جديدة القيطة", "Kachlak - قشلق", "Kantra - قنطرة", "Karha (Baalback) - قرحا (بعلبك)", "Karm Asfour - كرم عصفور", "Katelbeh - قطلبة", "Kboula (Akkar) - قبولا (عكار)", "Kfar Harra - كفر حرا", "Kfar Melki (Akkar) - كفرملكي (عكار)", "Kfar Noun - كفر نون", "Kfar Toun - كفر تون", "Kherbet Char - خربة شار", "Khorbet Daoud - خربة داوود", "Khorbet Jrad - خربة جرد", "Khorbet Jundi - خريبة الجندي", "Kiniya - قنية", "Klayaat (Kesserwan) - القليعات (كسروان)", "Kloud Bakieh - قلود الباكرية", "Kneisseh (Akkar) - كنيسة (عكار)", "Kobayat - القبيات", "Kobbet Chamra - قبة شمرا", "Korkef - القرقف", "Korneh - قرنة عكّار", "Koucha - خوشة", "Krayat - قريات", "Kroum Arab - كروم عرب", "Kwachra - كواشرة", "Machta Hammoud - مشتى حمود", "Machta Hassan - مشتى حسن", "Majd Ala - مجدلا", "Majd El (Akkar) - مجدلا", "Mar Touma - مار توما", "Mart Moura - مارت مورا", "Massoudieh - المسعودية", "Mazraat Baldeh - مزرعة بلده", "Mechha - مشحا", "Mechmech (Akkar) - مشمش (عكار)", "Mekhtlef - مختلف", "Memneh - ممنع", "Minyara - منيارة", "Mkaibleh - مقيبله", "Mkaiteh - المقيطع", "Mounjez - منجز", "Mounsa - مونسا", "Mrah el-Khokh - مراح الخوخ", "Nahriyeh - النهرية", "Nfeisseh - نفيسة", "Noura - نورة", "Oueinate - العوينات", "Ouyoun - عيون", "Rahbeh - رحبة", "Rmah - رماح", "Saadine - سعدين", "Safinet el Dreib - سفينة الدريب", "Sayssouq - سيسوق", "Sehleh - سهله", "Seissouk - سيسوق", "Semakiyeh - سماقية", "Sfeinet Katih - سفينة القيطع", "Sindiyaneh - سنديانة زيدان", "Soueisseh - سويسة", "Srar - سرار", "Tacheh - تاشع", "Tal Abbas - تل عباس", "Tal Bibeh - تل بيبي", "Bireh (Akkar) - تل البيرة (عكار)", "Tal Hemayra - تل حميرة", "Tal Mehyan - تلمعيان", "Talleh - تليلة", "Tekrit - تكريت", "Tel Meyane - تلمعيان", "Tleil - تليلة", "Wadi el-Hour - وادي الحور", "Wadi Jamous - وادي جاموس", "Wadih Khaled - وادي  خالد", "Zawarib - زواريب", "Zouk (Akkar) - ذوق (عكار)", "Zouk el-Hossayni - زوق الحصنية", "Zouk Hadareh - ذوق حدارة", "Zouk Hassineh - زوق الحصنية", "Zouk Hbalseh - ذوق الحبالصة", "Zouk Mekacharine - زوق المكشرين", "Abey - عبي", "Aghmid - اغميد", "Ain Anoub - عين عنوب", "Ain Dara - عين دارا", "Ain El Saydeh - عين السيدة", "Ain Enoub - عين عنوب", "Ain Jdideh - عين الجديدة", "Ain Ksour - عين كسور", "Ain el Remmaneh (Baabda) - عين الرمانة (بعبدا)", "Ain Trez - عين تريز", "Ainab - عيناب", "Aitat - عيتات", "Aley - عاليه", "Aramoun - عرمون", "Aytate (Aley) - عيتات (عاليه)", "Baawerta - بعورتا", "Badghan - بدغان", "Baissour (Aley) - بيصور (عاليه)", "Bassatine - البساتين", "Bchamoun - بشامون", "Bdadoun - بدادون", "Bemkine - بمكين", "Bennieh - بني", "Bhamdoun - بحمدون", "Bhamdoun El Mhatta - بحمدون المحطة", "Bkhechtey - بخشتاي", "Bleibel - بليبل", "Bmahray - بمهري", "Bserrine - بسرين", "Bsouss - بسوس", "Btalloun - بتلون", "Btater - بتاتر", "Chanay - شاناي", "Charoun - شارون", "Chartoun - شرتون", "Chatiyeh - شاتية", "Chemlan - شملان", "Choueifat - الشويفات", "Deir Koubel - ديرقوبل", "Dfoun - دفون", "Doueir el-Remmane - دوير الرمان", "Habrmoun - حبرمون", "Houmal - حومال", "Ighmid - إغمد", "Kahaleh - كحالة", "Keyfoun - كيفون", "Kfar Aamey - كفار عمي", "Kfar Amay - كفار عمي", "Kfar Matta - كفر متا", "Maasriti - معصريتي", "Majd el Baana - مجدل بعنا", "Majd el Behna - مجدل بعنا", "Majd Laya (Aley) - مجدلايا (عاليه)", "Mecherfeh - مشرفة", "Rechmaya - رشميا", "Remhala - رمحالا", "Roueisset el-Nehman - رويسة النعمان", "Sofar - صوفر", "Souk el-Gharb - سوق الغرب", "Ain Mouaffaq - عين موفق", "Araya - عاريا", "Arbaniyeh - العربانية", "Baabda - ", "Bourj El Brajneh - برج البراجنة", "Chebaniyeh - شبانية", "Chiyah - الشياح", "Deir el-Harf - دير الحرف", "Dlaibeh - الدليبة", "el-Qalaa - قلعة", "Qraiyeh (Baabda) - قرية (بعبدا)", "Falougha - فالوغا", "Fayadieh - الفياضية", "Furn el-Chebbak - فرن الشباك", "Ghobeiry - غبيري", "Hadath - ", "Hammana - حمانا", "Haret Hamzeh - حارة حمزة", "Haret Hreik - حارة حريك", "Hasbaya - حاصبيا", "Hazmieh - الحازمية", "Jouar el-Haouz - جوار الحوز", "Kala'a (Baalback) - القلعة (بعلبك)", "Kfarchima - كفرشيما", "Kfar Selouan - كفار سلوان", "Khalouate - خلوات", "Kneisseh (Baabda) - كنيسة (بعبدا)", "Kornayel - قرناييل", "Kortada - قرطادا", "Qsaybeh (Baabda) - قصيبة (بعبدا)", "Koubbayeh - قبّيع", "Leilaky - ليلكي", "Louaizeh (Baabda) - لويزة (بعبدا)", "Mreijeh - مريجة", "Qoubbei - قبّيع - قبّيع", "Qsaibeh - قصيبة (بعبدا)", "Qraiyeh (Saida) - قرية (صيدا)", "Ras el-Harf - رأس الحرف", "Ras el-Metn - رأس المتن", "Rouayset el-Ballout - رويسة البلوط", "Salima - صاليما", "Sebnay - بسناي", "Tahweitat - تحويطة الغدير", "Tarchich - ترشيش", "Wadi Chahrour - وادي شحرور", "Abbassiyeh - عباسية", "Ain Ata (Baalbeck) - عين عطا (راشيا)", "Ain Baniyeh - عين البنيّة", "Ain Bourday - عين بورضاي", "Ain Joz - عين الجوزة", "Ain Saouda - عين سعدة", "Akidiyeh - عكيدية", "Al Ain - العين", "Chaat - شعط", "Chaet - شعط", "Chlifa - شليفا", "Chmaisssa - شميصا", "Chmayseh - شميسة", "Chmestar - شمسطار", "Dar El Wasaah - دار الواسعة", "Deir el-Ahmar - دير الأحمر", "Douriss - دوريس", "el-Ain - العين", "Ersal - عرسال", "Fakiha - فاكهة", "Falaoui - فلوية", "Geba'a - جبعا", "Ghafra - غفرة", "Hadeth Baalbeck - حدث (بعلبك)", "Hame - هام", "Hazin - حزين", "Hoch Nabi - حوش النبي", "Hoch Rafika - حوش الرافقة", "Hoch Sneid - حوش سنيد", "Hoch Tal Safiyeh - حوش تل صافي", "Hoch Zahab - حوش الذهب", "Hor Tehla - حورتعلا", "Hrebta - حربتا", "Ia'at - إيعات", "Jaba'a - جبعا", "Jbaniyeh - الجبانية", "Jabboule - جبولة", "Jdeideh - جديدة", "Jenta - جنطة", "Ka'a - قاع", "Kaddam - القدام", "Kala'a (Baabda) - قلعة (بعبدا)", "Karha (Akkar) - قرحا (عكار)", "Ksarnaba - قصرنبا", "Kfar Dabach - كفردبش", "Kfar Dan - كفر دان", "Kfar Diche - كفار ديشي", "Khodr - خضر", "Khreybeh (Baalbeck) - خريبة (بعلبك)", "Kneisseh (Baalback) - كنيسة (بعلبك)", "Laboueh - لبوة", "Lebbaya - لبايا", "Maaraboun - معربون", "Majdaloun - مجدلون", "Makneh - مكنة", "Makni - مكنة", "Masnah el dahr - مصنع الظهر", "Mazraat Abou Slaybi - مزرعة ابو صليبي", "Mazraat Beit Matar - مزرعة بيت مطر", "Mazraat Beit Slaybi - مزرعة بيت صليبي", "Mazraat Dalil - مزرعة الدليل", "Mazraat el-Soueidan - مزرعة السويدان", "Mazraat Sayed - مزرعة السيد", "Mazraat Soueidan - مزرعة سويدان", "Mazraat Tout - مزرعة توت", "Mekrak - مكراك", "Nabha Damdoum - نبحا دمدوم", "Nabha Harfouche - نبحا حرفوش", "Nabha Kleili - نبحا القليلة", "Nabha Mahfara - نبها محفارة", "Nabi Chiit - نبي شيت", "Nabi Inaam - نبي أنعام", "Nabi Osman - نبي عثمان", "Nabi Rachad - نبي رشاد", "Nabi Sbat - نبي صبات", "Nahleh - نحلة", "Nakra - نقرة", "Nye Rachadeh - ناي رشادة", "Ram - رام ", "Ramassa - راماسا", "Ras Baalbeck - رأس بعلبك", "Rich - ريش", "Riha - ريحا", "Sabbouba - سبوبا", "Sadiyeh - سعدية", "Safra - صفرا", "Sarhine - سرعين", "Sayaniyeh - سيانية", "Sefri - سفري", "Soleh - صلح", "Talya - طليا", "Taraya - طاريا", "Temnine - تمنين", "Tfail - طفيل", "Tibeh - طيبة", "Temnin - تمنين", "Toufikiyeh - توفيقية", "Wadi Fa'ara - وادي فعرا", "Wadi Mechmechi - وادي المشمشى", "Wadi Safa Charki - وادي الصفا شرقي", "Wadi Zein (Baalback) - وادي الزين (بعلبك)", "Yahfoufa - يحفوفا", "Yammouni - يمونة", "Younine - يونين", "Younissiyeh - يونسيّة", "Zaboud - زبود", "Zarazir - زرازير", "Abdelli - عبدللي", "Ajdabra - اجدبرا", "Al Ali - علالي", "Al Hiri - الهري", "Andoula - عندولا", "Artez - عرطز", "Assia - عاصيا", "Awra - عرورا", "Batroun - بترون", "Bchaaleh - بشعلة", "Bkesmaya - بقصميا", "Chatine - شاطين", "Chekka - شكا", "Chibtine - شبطين", "Dabra - اجدبرا", "Dahr Abou-Yaghi - ضهر ابي ياغي", "Dail - دعيل", "Deir Bella - ديربلا", "Deir Chwah - دير شواه", "Deria - دريا", "Douma - دوما", "Eddeh - إده", "Fadous - فدعوس", "Ftahat - فتحات", "Ghouma - غوما", "Hadtoune - حدطون", "Hamat - حامات", "Harbouna - هربونة", "Hardine - حردين", "Helta - حلتا", "Hery - الهري", "Ibrine - عبرين", "Jdabra - اجدبرا", "Jeb La - جبلا", "Jrabta - جرابتا", "Jrane - جرانة", "Kesya - كيسيا", "Kfa Rabida - كفر عبيدا", "Kfar Abida - كفر عبيدا", "Kfar Chliman - كفار شليمان", "Kfar Halda - كفر حلدا", "Kfar Hatna - كفرحتنا", "Kfar Hay - كفر حي", "Kfifane - كفيفان", "Kfour el-Arabi - كفور العربي", "Koubba - كوبّا", "Kour - كور", "Mar Mema - مار ميما", "Marj (Batroun) - المرج (البترون)", "Mehmarche - مهمرش", "Mrah Az-Zeyat - مراح الزيات", "Mrah Chdid - مراح شديد", "Mrah el-Hajj - مراح الحج", "Racha - راشا", "Rachana - راشانا", "Rachkida - رشكيدا", "Ras Nhache - رأس نحاش", "Ras Senhache - رأس سنحاش", "Selaata - سلعاتا", "Sghar - صغار", "Smar Jbeil - سمار جبيل", "Souret - صورات", "Tannourine - تنورين", "Thoum - ثوم", "Toula - تولا", "Wata Houb - وطى حب", "Zane - زانة", "Abdine - عبدين", "Barhelyoun - برحليون", "Bazoon - بزعون", "Bcharre - بشري", "Beit Mounzer - بيت منزر", "Bkerkacha - بقرقاش", "Blawza - بلوزا", "Bolla - بللا", "Braissat - بريسات", "Dimane - ديمان", "Hadath E Jebbeh - حدث الجبة", "Hadchit - حدشيت", "Hasroun - حصرون", "Ibdine - عبدين", "Maghroubella - مغربية", "Qnat - قنات", "Qnaywer - قنيور", "Tourza - طورظا", "Achrafieh - أشرفية", "Ain el-Mreisseh - عين المريسة", "Ain el Tineh - عين التينة", "Bab Idriss - باب ادريس", "Bachoura - الباشورة", "Badaro - بدارو", "Barbir - بربير", "Basta Fawka - بسطة الفوقى", "Basta Tahta - بسطة التحتا", "Batrakiyi - بطركية", "Beirut - ", "Bourj Abi Haidar - برج ابي حيدر", "Down Town - وسط بيروت", "Mathaf - المتحف", "Medawar - مدور", "Minet el-Hosn - ميناء الحصن", "Mousseitbeh - مصيطبة", "Port of Beirut - مرفأ بيروت", "Ramle El Baida - رملة البيضاء", "Ras-Beyrouth - رأس بيروت", "Rmeil - الرميل", "Saifi - الصيفي", "Snoubra - صنوبرة", "Verdun - فردان", "Wata Al Mousaitbe - وطى المصيطبة", "Zokak el-Blat - زقاق البلاط", "Ain Zabad - عين كفر زبد", "Ain Zebdeh - عين زبدة", "Aitanit - عيتنيت", "Ammik (Beqaa) - عميق (البقاع الغربي)", "Ana - عانا", "Dakkouh - دكوة", "Deir el-'Achaer - دير العشائر", "Ghazzeh - غزة", "Hoch el-Harimeh - حوش الحريمه", "Jeb Jenine - جب جنين", "Kalya - قليعة", "Kamed el-Loz - كامد اللوز", "Karaoun - قرعون", "Kefraya - كفريا (البقاع الغربي)", "Kherbet Kanafar - خربة قنفار", "Lala - لالا", "Machghara - مشغرة", "Manara (Beirut) - منارة (بيروت)", "Mansoura - المنصورة", "Marj - المرج (البقاع الغربي)", "Racyay - راسياي", "Rafid - رافد", "Rawda - روضة", "Saghbine - صغبين", "Sohmor - سحمر", "Souairi - الصويري", "Sultan Yaacoub - سلطان يعقوب", "Tal Zanoub - تل زنوب", "Yohmor (Nabatieh) - يحمر (النبطية)", "Zlaya - زلايا", "Aita el-Zot - عيتا الجبل الزط", "Chacra - شقرا", "Deir Antar - دير نطار", "Deir Kantar - دير القنطار", "Doubiyeh - دوبية", "Froun - فرون", "Ghandouriyeh - غندورية", "Haddatha - حداتا", "Haris - حاريص", "Jmaijmeh - جميجمة", "Kafra - كفرا", "Kfar Doubine - كفردونين", "Klaouiyeh - قلويه", "Safad el-Batikh - صفد البطيخ", "Sultanieh - سلطانية", "Tebnine - تبنين", "Yater - ياطر", "Ain Baal (Tyre) - عين بعال (صور)", "Ain Kani - عين قني", "Ain We Zein - عين وزين", "Ain Zhalta - عين زحلتا", "Al Wardaniyeh - الوردانية", "Amatour - عماطور", "Ammik (Chouf) - عميق (الشوف)", "Anout - عانوت", "Atrine - عطرين", "Baakline - بعقلين", "Baasir - بعاصير", "Baatharan - بعدران", "Barja - برجا", "Barouk - باروك", "Bater - باتر", "Batloun - بتلون", "Bchetfine - بشتفين", "Beiteddine - بيت الدين", "Bireh (Chouf) - بيرة (الشوف)", "Botme - بطمة", "Bsaba El Chouf - بسابا (الشوف)", "Chehim - شحيم", "Chouite - شويت", "Daher Al Mghara - ضهر المغارة", "Dalhoun - دلهون", "Damour - الدامور", "Daraya (Chouf) - داريا (الشوف)", "Debbieh - دبية", "Deir Baba - دير بابا", "Deir Dourit - دير دوريت", "Deir el-Kamar - دير القمر", "Deir el-Moukhales - دير المخلص", "Deir Koucheh - دير كوشة", "Dmayt - دميت", "Fouara - فوارة", "Freidis (Chouf) - فريديس (الشوف)", "Gharifeh - غريفة", "Haret Jandal - حارة جندل", "Hasrout - حصروت", "Jahlieh - جاهلية", "Jbaa (Chouf) - جباع (الشوف)", "Jdeidet el-Chouf - جديدة (الشوف)", "Jidra - جدرا", "Jiyeh - جية", "Joun - جون", "Kahlounieh - كحلونية", "Ketermaya - كترمايا", "Kfar Fakoud - كفر فاقود", "Kfar Katra - كفر قطرا", "Kfar Nabrakh - كفرنبرخ", "Kfar Nis - كفر نيس", "Kfarhim - كفرحيم", "Khraybeh - الخريبة", "Kneisseh (Chouf) - كنيسة (الشوف)", "Maasser Beit Eddine - معاصر بيت الدين", "Maasser El Chouf - معاصر الشوف", "Majd el-Meouch - مجد المعوش", "Marj Barja - مرج برجا", "Mresty - مرستي", "Mazboud - مزبود", "Mazraat El Chouf - مزرعة الشوف", "Mazraet el-Dahr - مزرعة الظهر", "Mechref - مشرف", "Mresty - مرستي", "Mghayrie - مغيرة (جبيل)", "Moughairieh - مغيرية (الشوف)", "Moukhtara - مختارة", "Mreyjat (Chouf) - المريجات ​​(الشوف)", "Mtolleh - مطلة", "Niha (Chouf) - نيحا (الشوف)", "Rmeileh - رميلة", "Semkaniyeh - سمقانية", "Wadi Bnehley - وادي بنهلة", "Wadi el-Set - وادي الست", "Wadi el-Zineh (Chouf) - وادي الزينة (الشوف)", "Zaarourieh - زعرورية", "Aazki - عزقي", "Assoune - عاصون", "Deir Ammar - دير عمار", "Deir Nbouh - دير نبوح", "Dibiil - دبل", "Hakl el-Azimi - حقل العزيمة", "Harf Siyad - حرف السياد", "Danniyeh - الضنية", "Houwara - حوارة", "Izal - ازال", "Kahf el-Malloul - كهف الملولة", "Kammamine - قمامين", "Karm el-Mehr - كرم المهر", "Karsita - قرصيتا", "Karsouna - بقرصونا", "Kattine (Danniyeh) - قطين (منية الضنية)", "Kfar Bibnine - كفرببنين", "Kfar Chellam - كفر شلان", "Kfar Chellan - كفر شلان", "Kfar Habou - كفار حبو", "Kharnoub - خرنوب", "Korhaya - قرحا", "Krin - قرين", "Limar - ليمار", "Markabta - مركبتا", "Mazraet Artousa - مزرعة عرطوسي", "Minieh - المنية", "Mrah As-Sraje - مراح السراج", "Mrah Sfaira - مراح الصفيرة", "Mrah Sraje - مراح السراج", "Nabi Youchah - النبي يوشع", "Namrine - نمرين", "Nimrine - نمرين", "Rihanieh (Koura) - الريحانية", "Sfaira - السفيرة", "Sir Denniyeh - سير الضنية", "Tarane - طاران", "Terbol (Zahle) - تربل (زحلة)", "Wadi Nahleh - نحلة (البترون)", "Watieh - واطية", "Zaghr Tighrine - زغرتغرين", "Kfeir - كفير", "Marj el-Zouhour - مرج الزهور", "Mimes - ميمس", "Charbin - شربين", "Chawaghir - شواغير", "Fissane - فيسان", "Haret Maasser - حارة المعاصر", "Harika - حريقة", "Hermel - هرمل", "Hmayreh (Hermel) - حميرة (الهرمل)", "Hoch Sayed - حوش سيد", "Jawar Hachich - جوار الحشيش", "Kasr-Fissane - فيسان", "Kasser - القصر", "Khrayeb - خرايب (كسروان)", "Knafez - قنافز", "Kouwakh - كواخ", "M'aysra - المعيصرة", "Mazraat Beit Tacham - مزرعة بيت الطشم", "Mazraat Fakih - مزرعة الفقيه", "Mazraat Saged - مزرعة حكيم", "Mrah el-Ain - مراح العين", "Nayra - وادي النيرة", "Sahlat Ma'a - سهلت ماع", "Wadi Asse - وادي عيسي", "Wadi Bneit - وادي بنيته", "Wadi Karm - وادي الكرم", "Wadi Rattal - وادي رطال", "Wadi Turkman - وادي تركمان", "Zaghrin - زغرين", "Zoueitini - ", "Afka - أفقا", "Ain el-Ghoaybeh - عين الغويبة", "Akoura - عاقورة", "Almat - علمات", "Assaouneh - الصوانة", "Chamat - شامات", "Chamout - شموت", "Eddeh - إده", "Ehmej - اهمج", "Fatreh - فتري", "Feghal - فغال", "Fidar - فيدار", "Ghalboun - غلبون", "Habil - هابيل", "Halate - حالات", "Hjoula - حجولا", "Hsoun - الحسون", "Jadayel - جدايل", "Jaj - جاج", "Jalisseh - جليسة", "Janneh - جنة", "Jbeil - جبيل", "Kartaba - قرطبا", "Kattara - القطارة", "Kfar Keddeh - كفر قدا", "Kfar Mashoun - كفر ماشون", "Kfoun - كفون", "Lassa - لاسا", "Majd El (Jbeil) - مجدل (جبيل)", "Mar Sarkis - مار سركيس", "Mayfouk - ميفوق", "Mazra'at el-Syad - مزرعة السياد", "Mchan - مشان", "Mechmech (Jbeil) - مشمش (جبيل)", "Mghayri - مغاير", "Mounsef - منصف", "Nahr Ibrahim - نهر ابراهيم", "Obeidat - عبيدات", "Ramout - راموت", "Ras Osta - رأس أسطا", "Saki Rechmaya - سقي رشميا", "Tartej - ترتيج", "Torzaya - طورزيا", "Aitouli - عيتولي", "Al Rihan - الريحان", "Aramta - عرمتا", "Aray - عارية", "Aychieh - عيشية", "Azour - عازور", "Baissour (Jezzine) - بيصور (جزين)", "Barty - برتي", "Beba - بيبا", "Benweteh - بنواتي", "Bisri - بسري", "Bkassine - بكاسين", "Bouslaiya - بصلايا", "Bteddine El Lekech - بتدين اللقش", "Choualik - شواليق", "Har - حار", "Haytoura - حيطورة", "Homsiyeh - حمصية", "Hsanieh - الحسينية", "Jarmak - جرمق", "Jensnaya - جنسنايا", "Jernaya - جرنايا", "Jezzine - جزين", "Karkha - كرخا", "Kattine (Jezzine) - قطين (كسروان)", "Kfar Jarra - كفر جرة", "Kfarfalous - كفر فالوس", "Kfarhouna - كفر حونة", "Lebaa (Jezzine) - (لبعا (جزين - لبعا", "Louaizeh (Jezzine) - لويزة (جزين)", "Machmouche - مشموشة", "Maknounieh - مكنونية", "Mharabiyeh - محاربية", "Midane (Zgharta) - ميدان (زغرتا)", "Mjeidel (Jezzine) - مجادل (جزين)", "Mlikh - مليخ", "Mrah el-Hibas - مراح الحباس", "Rimat - Chkadif - ريمات", "Roum - روم", "Sabbah - صباح", "Saydoun - صيدون", "Sfaray - صفاري", "Snaya - سنية", "Sojod - سجد", "Teid - تعيد", "Wadi Baankoudine - وادي بعنقودين", "Wadi el-Laymoun - وادي الايمون", "Wadi Jezzine - وادي جزين", "Zhalta - زحلتا", "Achkout - عشقوت", "Adma - أدما", "Adonis - أدونيس", "Adra - عدرا", "Ain el-Rihani - عين الريحان", "Aintoura (Metn) - عينطورة (المتن)", "Ajaltoun - عجلتون", "Akaybeh - عقيبة", "Azra - العذرا", "Ballouneh - بلونة", "Batha - بطحا", "Bekaatet Achkout - بقعاتة عشقوت", "Bezhel - بزعل", "Bqaatouta - بقعتوتة", "Bwar - بوار", "Chahtoul - شحتول", "Chnaniir - شننعير", "Daphneh - الدفنه", "Daraoun - درعون", "Daraya (Kesserwan) - داريا (كسروان)", "Dlebta - دلبتا", "Faraya - فاريا", "Fatqa - فتقا", "Feytroun - فيترون", "Ghazir - غزير", "Ghebaleh - غبالة", "Ghedrass - غدراس", "Ghineh - غينة", "Ghosta - غوسطا", "Haret Sakhr - حارة صخر", "Harissa - حريصا", "Herhraya - حرحريرا", "Hiyata - حاياتا", "Hrajel - حراجل", "Hsein - حصين", "Jdeidet Ghazir - جديدة غزير", "Jeita - جعيتا", "Jounieh - جونيه", "Jouret Bedrane - جورة بدران", "Jouret el-Tourmos - جورة الترمس", "Kfar Yassine - كفر ياسين", "Kfar Zebian - كفرذبيان", "Kfour (kesserwan) - كفور (كسروان)", "Klayaat (Akkar) - قليعات (عكار)", "Maayssra - معيصرة", "Mayrouba - ميروبا", "Mazraat Kfardebiane - مزرعة كفرذبيان", "Qattin - قطين (كسروان)", "Raachine - رعشين", "Reyfoun - ريفون", "Sahel Alma - ساحل علما", "Sarba (Kesserwan) - صربا (كسروان)", "Sehayleh - سهيل", "Tabarja - طبرجا", "Wata el Jawz - وطى الجوز", "Yahchouche - يحشوش", "Zaaytra - زعيترة", "Zeytoun' - زيتون", "Zouk Mikail - ذوق مكايل", "Zouk Mosbeh - ذوق مصبح", "A'aba - عابا", "Afsdik - عفصديق", "Ain Akrine - عين عقرين", "Ajad Ebrine - عبرين", "Amioun - أميون", "Anfeh - انفة", "Dahr el-Ain - ضهر العين", "Dar Baachtar - دار بعشتار", "Dar Chmezzine - دار شمزين", "Deddeh - دده", "Elhat - قلحات", "Fesdick - عفصديق", "Fieh - فيع", "Haret el-Khalssa - حارة الخالصة", "Hmayreh (Koura) - حميرة (الكورة)", "Kaftoun - كفتون", "Kalhat - قلحات", "Kboula (Kusba) - كبولة (كوسبا)", "Kefraya (Kusba) - كفريا (الكورة)", "Bkeftine - بكفتين", "Kfar Akka - كفر عقا", "Kfar Hata (Koura) - كفرحتا (الكورة)", "Kfar Hazir - كفر حزير", "Kfar Kahel - كفر قاحل", "Kfar Saroun - كفار صارون", "Kousba - كوسبا", "Metrit - متريت", "Nakhleh - النخلة", "Rachdebbine - رشدبين", "Ras-Meska - رأس مسقا", "Ta'aboura - بتعبورة", "Wata Fares - وطى فارس", "Zakrouk - زقزوق", "Zakroun - زكرون", "Zakzouk - زقزوق", "Adayseh - عديسة مرجعيون", "Adchit - عدشيت الشقيف", "Bani Hayann - بني حيان", "Blat - بلاط", "Blida - بليدا", "Bourj El Moulouk - برج الملوك", "Debbine - دبين", "Deir Mimas - دير ميماس", "Deir Syriane - دير سريان", "Ebel El Saky - إبل السقي", "Houla - حولا", "Jdeidet Marjeyoun - جديدة مرجعيون", "Kab Rikha - قبريخة", "Kantara - قنطرة", "Kfarkila - كفركلا", "Khiam - الخيام", "Klayaa - قليعة", "Majd el-Sel - مجد السيل", "Majdel Selem - مجدل سلم", "Markaba - مركبا", "Mays el Jabal - ميس الجبل", "Rab Thalathine - رب الثلاثين", "Rachaya el-Foukhar - راشيا الفخار", "Sawaneh - صوانة", "Souwaneh - صوانة", "Tallousseh - طلوسة", "Taybeh - طيبة", "Touline - تولين", "Wazzany - الوزاني", "Ain Aar - عين عار", "Ain Alak - عين علق", "Ain el Kharroubeh - عين الخروبة", "Ain el-Safsaf - عين الصفصاف", "Ain Saadeh - عين سعادة", "Amaret Chalhoub - عمارة شلهوب", "Antelias - انطلياس", "Atchaneh - عطشانة", "Awkar - عوكر", "Ayroune - عيرون", "Baabdat - بعبدات", "Baskinta - بسكنتا", "Beit Chabeb - بيت شباب", "Beit Mery - بيت مري", "Bhanness - بحنس", "Bhersaf - بحرصاف", "Bikfaya - بكفيا", "Bolonia - بولونيا", "Bouchrieh - بوشرية", "Bourj Hammoud - برج حمود", "Broumana - برمانا", "Bteghrine - بتغرين", "Chawiya - شويا", "Choueir - شوير", "Chrine - شرين", "Dahr el-Hassin - ضهر الحصين", "Dahr el-Souan - ضهر الصوان", "Dawra - دورة", "Dbayeh - ضبية", "Dekouaneh - دكوانة", "Deychounieh - ديشونية", "Douar - دوار", "Ein Zeitouneh - عين الزيتونة", "el-Kaakour - قعقور", "el-Khalleh - خلة", "Fanar - فنار", "Freikeh - فريكة", "Hbous - حبوس", "Himlaya - حملايا", "Jal el-Dib - جل الديب", "Jouar - جوار", "Jouret el-Ballout - جورة البلوط", "Ka'a Kour - قعقور", "Kanabat - قنابة برمانا", "Kfar Aqab - كفر عقاب", "Kfar Tey - كفر تيه", "Khonchara - خنشارة", "Knaytra (Metn) - قنيطرة", "Kornet Chehwane - قرنة شهوان", "Majd el-Tarchich - مجدل ترشيش", "Majzoub - مجذوب", "Mansourieh - منصورية", "Mar Mikhael - مار مخايل", "Mar Moussa - مار موسى", "Mar Roukoz - مار روكز", "Marjaba - مرجبا", "Maska - مسقا", "Mayassa - مياسة", "Mazraat Yachouh - مزرعة يشوع", "Mchikha - مشيخا", "Mezher - مزهر", "Mkalles - مكلس", "Moheidse (Maten) - محيدسة (المتن)", "Mrouj - مروج", "Mtaileb - مطيلب", "Mtein - متين", "Nabay - نابيه", "Naccache - النقاش", "Nahr El Mot - نهر الموت", "Roumieh - رومية", "Sad el-Baouchrieh - سد البوشرية", "Sakiet el-Misk - ساقية المسك", "Sfayleh - سفيلة", "Sin el-Fil - سن الفيل", "Wata el-Mrouj - وطى المروج", "Zabougha - زبوغة", "Zalka - زلقا", "Zaroun - زرعون", "Zeghrine - زغرين", "Zekrit - زكريت", "Zouk el-Kharab - زوق الخراب", "Zouk Kharab - زوق الخراب", "Ebba - عبا", "Ain Boussouar - عين بوسوار", "Ain Qana - عين قانا", "Al Sharkiyeh - الشرقية", "Ansar - إنصار", "Arab Salim - عرب صاليم", "Azzeh - عزة", "Charqiyeh - الشرقية", "Choukine - شوكين", "Deir el-Zahrani - دير الزهراني", "Doueir - دوير", "Habbouche - حبوش", "Harouf - حاروف", "Houmine - حومين", "Jarjouh - جرجوع", "Jbaa (Nabatiyeh) - جباع (النبطية)", "Jeb Chite - جبشيت", "Kfar Fila - كفر فيلا", "Kfar Remmane - كفر رمان", "Kfar Sir - كفر صير", "Kfar Tebnit - كفر تبنيت", "Ksaybeh - قصيبة", "Mayfaidoun - ميفدون", "Nabatiyeh - النبطية", "Nemayreh - النميرية", "Nmeiriyeh - النميرية", "Qaaqayiet el-Jisr - قعقعية الجسر", "Roumine - رومين", "Sarba (Nabatiyeh) - صربا (النبطية)", "Sinay - سيناي", "Sir el-Gharibeh - صير الغربية", "Zaoutar - زوطر", "Zebdine - زبدين", "Zefta - زفتا", "Aiha - عيحا", "Ain Arab - عين عرب", "Ain Ata (Rachaiya) - عين عطا (راشيا)", "Ain Harcha - عين حرشا", "Aita el-Fakhar - عيتا الفخار", "Akbeh - عقبة", "Dahr el-Ahmar - ضهر الأحمر", "Deir Achayer - دير العشاير", "Hoch - حوش", "Heloueh - حلوة", "Kawkaba - كوكبا", "Kfar Dnisse (West Bekaa) - كفر دنيس (راشيا)", "Kfar Kouk - كفر قوق", "Kfar Mechki - كفر مشكي", "Kherbet Rouha - خربة روحا", "Majdel Balhis - مجدل بلحيص", "Mdoukha - مدوخة", "Moheidseh (Rachaiya) - محيدثة (راشيا)", "Rachaya - راشيا", "Tannoura - تنورة", "Yanta - ينطا", "Abra - عبرا", "Addoussiyeh - عدوسية", "Adloun - عدلون", "Ain el-Delb - عين الدلب", "Aktanit - عقتنيت", "Al Saksakieh - سكسكية", "Ankoun - عنقون", "Anssarieh - أنصارية", "Arab el-Jal - عرب الجل", "Erkay - اركي", "Arzeh - عزة", "Arzi - عزة", "Darbessim - درب السيم", "Derb el-Simme - درب السيم", "Gharayeb - غرايب", "Ghassaniyeh - الغسانية", "Ghaziyeh - غازية", "Hageh - حجة", "Haret Saida - حارة صيدا", "Hlaliyeh - هلالية", "Jenejleya - جنجلايا", "Ka'a kayet Snoubar - قعقعية صنوبر", "Kannarit - قناريت", "Kariyeh - قرية", "Kawssariet Sayad - كوثرية السياد", "Kefraya (Saida) - كفريا صيدا", "Kfar Bit - كفر بيت", "Kfar Chelal - كفار شلال", "Kfar Hatta (Nabatieh) - كفرحتا", "Kfar hatta - كفرحتا", "Kfar Melki (Nabatieh) - كفر ملكي", "Kharayeb - خرايب", "Khartoum - خرطوم", "Khazize - خزيز", "Knaytra (South) - قنيطرة (صيدا)", "Krayyeh - قرية", "Loubiyeh - لوبية", "Maamariyeh - معمارية", "Maghdoucheh - مغدوشة", "Majdelyoun - مجدليون", "Marwaniyeh - مروانية", "MiyehWe Miyeh - مية ومية", "Nejjariyeh - نجارية", "Saida - صيدا", "Saksakiyeh - سكسكية", "Salhiyeh - صالحية", "Sarafand - صرفند", "Tabbaya - طبايا", "Tanbourite - طنبوريت", "Teffahta - تفاحتا", "Zeghdraya - زغدريا", "Zitta - زيتا", "Zrariyeh - زرارية", "Al Haddadine - الحدادين", "Al Hadid - الحديد", "Al Mahatra - المهاترة", "An Nouri - نوري", "Jisrain - جسرين", "Kobbeh (Tripoli) - قبة (طرابلس)", "Mina - مينا", "Qalamoun - قلمون", "Roummaneh - رمانة", "Souwaika - سويقة", "Tabbaneh - تبانة", "Tal Mohammad - التل", "Tripoli - طرابلس", "Zahrieh - زاهرية", "Ain Ba'al (Tyre) - عين بعل (صور)", "Ain Ebel - عين إبل", "Alma el-Chaab - علما الشعب", "Arzoune - أرزون", "Aytite (Tyre) - عيتيت (صور)", "Chehabiyeh - شهابية", "Chhour - شحور", "Cheaytieh - شعيتية", "Chehabiyeh - الشهابية", "Debaal - دبعال", "Deir Ames - دير عامس", "Deir Dghaya - دير دغيا", "Deir Kanoun - دير قانون", "Deir Kifa - دير كيفا", "Halloussiyeh - حلوسية", "Haniyeh - حنية", "Jbal Boutoum - جبال البطم", "Jouwaya - جويا", "Klayleh - القليلة", "Maarakeh - معركة", "Maaroub - معروب", "Maarouf - معروف", "Mahrouni - محرونة", "Majd el-Zoun - مجدل زون", "Malekyeh - مالكية", "Mansouri - منصوري", "Mazraat Mechref - مزرعة مشرف", "Mjadel (Tyre) - مجادل (صور)", "Qana - قانا", "Rachkananey - رشكنانيه", "Ras el-Ain ( Baalbak ) - رأس العين (بعلبك)", "Rmadiyeh - رمادية", "Sadikine - صديقين", "Salaa - سلعا", "Semmaeyeh - سماعية", "Tyre - صور", "Srifa - صريفا", "Tayr Felsay - طير فلساي", "Tayr Debba - طير دبا", "Toura - طورا", "Yanouh (Sour) - يانوح (صور)", "Zabkine - زبقين", "Ablah - أبلح", "Ain Kfarzabad - عين كفر زبد", "Ali el-Nahri - علي النهري", "Anjar - عنجر", "Chtaura - شتورة", "Deir el-Ghazal - دير الغزال", "Delhamiyeh - دلهمية", "Ferzol - فرزل", "Hajjeh - حجة", "Hay el-Fikati - حي الفيكاني", "Hay el-Sellom - حي السلم", "Hazerta - حزرتا", "Hoch el-Oumara - حوش الأمراء", "Hoch Ghanam - حوش الغنم", "Hoch Hala - حوش حالا", "Hoch Zarahneh - حوش الزرعني", "Horch Hala - حوش حالا", "Jalala - جلالا", "Jdita - جديتا", "Ka'a el-Rim - قاع الريم", "Kab Elias - قب الياس", "Kab Ousseh - كاب عوسة", "Kamel - كامل", "Karak - كرك نوح", "Kfar Zabad - كفر زبد", "Khodr Bey - خضر", "Koussaya - قوسايا", "Maalaka - معلقة", "Majd el-Anjar - مجدل عنجر", "Mekseh - مكسه", "Mar Antonios - مار انطونيوس", "Massa - ماسا", "Mreijat (Chtaura) - مريجات (زحلة)", "Nabi Aylla - نبي ايلا", "Nassiriyeh - الناصرية", "Niha (Zahle) - نيحا (زحلة)", "Rahit - راهيت", "Rassiyeh - راسية", "Rayak - رياق", "Saadnayel - سعدنايل", "Taalabaya - تعلبايا", "Taanayel - تعنايل", "Tal el-Akhdar - تل الأخضر", "Terbol (Danniyeh) - تربل (منية الضنية)", "Touweiti - تويتي", "Wadi Arayech - وادي العرايش", "Wadi el-Delm - وادي الدوم", "Youghon Oloke - يوغون أولوك", "Zahle - زحلة", "Achach - عشاش", "Ain Toubine - عين طورين", "Ain Tourine - عين طورين", "Aitou - أيطو", "Alma - علما", "Arabet Kozhaya - عربة قزحيا", "Ardeh - أرده", "Arjess - عرجس", "Aslout - أصلوت", "Asnoun - اصنون", "Dar Aya - داريا", "Ehden - اهدن", "Ejbeh - إجبع", "Garabache - جاراباشي", "Haret el-Fouar - حارة الفوار", "Harf Ardeh - حرف ارده", "Harf Miziara - حرف مزيارة", "Haylan - حيلان", "Hmaiss - حميص", "Ia'al - ايعال", "Kadriyeh - قادرية", "Karm Saddeh - كرم سادة", "Kfar Aya - كفريا (البقاع الغربي)", "Kfar Bachit - كفر بخيت", "Kfar Chakhna - كفار شخنا", "Kfar Dlakous - كفر دلاقوس", "Kfar Fou - كفر فو", "Kfar Hatta (Zgharta) - كفرحتا (زغرتا)", "Kfar Houra - كفر حورا", "Kfar Seghab - كفر صغاب", "Kfar Yachit - كفر ياشيت", "Kfar Zina - كفر زينة", "Maasser - معاصر الشوف", "Majd Laya (Zgharta) - مجدليا (زغرتا)", "Mazraat el-Fraydiss - فريديس (زغرتا)", "Mazraat el-Nahr - مزرعة النهر", "Mazraat Houka - حوقا", "Mazraat Hreikess - مزرعة حريقص", "Mazraat Touffah - مزرعة التفاح", "Meziara - مزيارة", "Miryata - مرياطا", "Rachiine - رشعين", "Raskifa - راس كيفا", "Salib - صليب", "Saydeh - ", "Sebhel - سبعل", "Serhel - سرعل", "Toula Jebbeh - تولا", "zgharta - زغرتا", "Karantina - الكرنتينا", "Tarik Jdideh - طريق الجديدة", "Bir Hasan - بئر حسن", "Rabwe - الربوة", "Raouche - الروشة", "Zarif - ظريف", "Daychounieh - ديشونية", "Gemmayzeh - جميزة", "Bsalim - بصاليم", "Sibline - سبلين", "Ghadir - غدير", "Rabieh - الرابية", "Koura - كورة", "Tallet El Khayyat - تلة الخياط", "Khalde - خلدة", "NORTH - ", "Kfar Houne - كفرحونة", "Kfar Tibnit - كفر تبنيت", "Metn - ", "Dahieh - ", "Baalbak - ", "Marjayoun - مرجعيون", "Chouf - ", "Mount Lebanon - ", "Bahsas - بحصاص", "Beit el Chaar - بيت الشعار", "Mar Elias - مار الياس", "Amchit - عمشيت", "Bekaa - ", "Nehme - ناعمة", "Akkar - عكار", "darbaachar - درب الشعار", "dohet el hoss - دوحة", "Berbara - بربارة", "Bnachii - بنشعي", "Kfarhbab - كفرحباب", "South - ", "Dohat aramoun - دوحة عرمون", "Monteverde - مونتيفردي", "Sawfar - صوفر", "cola - الكولا", "Jnoub - ", "Sabtieh - سبتية", "bakhoun - بخعون", "annaya - عنايا", "haret el naameh - ناعمة", "bint jbeil - بنت جبيل", "Rmeich - رميش", "Jisr el Bacha - جسر الباشا", "dahr el bashik - ضهر الباشق", "Danniyeh - الضنية", "cornet el hamra - قرنة الحمرا", "eklim el kharoub - اقليم الخروب", "Barelias - بر الياس", "Sanayeh - صنائع", "Kesserwen - ", "hay madi - حي ماضي", "Jnah - جناح", "bazouriyeh - البازورية", "Mcharafiyeh - المشرفية", "Daoudieh - داودية", "Yaroun - يارون", "Zaydenieh - الزيدانية", "cornich el mazeraa - كورنيش المزرعة", "Biyada - البياضة", "mastita - مستيتا", "Madine Riyadiye - مدينة رياضية", "New Rawda - نيو روضة", "Tayouneh - الطيونة", "Sfeir - صفير", "Insariyeh - انصارية", "Kmatiye - قماطية", "noueiry - نويري", "kafaat (Dahieh) - كفاءات (بعبدا)", "Beirut Central District - وسط بيروت", "Mouawad - معوض", "naqoura - الناقورة", "Al Maten - المتن", "dhour chweir - ضهور شوير", "Koraytem - قريطم", "Beirut Digital District - مركز بيروت الرقمي", "Al Houssein Ftou7 Keserwen - نهر الحسين", "Clemenceau - كليمنصو", "elissar - اليسار", "Al Rawda West Bekaa - الروضة (البقاع الغربي)", "moula - مولا", "Sioufi - سيوفي", "Adlieh - عدلية", "Jamhour - جمهور", "Bzemar - بزمار", "Sehayleh - سهيلة", "Rweissat Saoufar - رويسات صوفر", "Byblos - جبيل", "Karakol Druze - كراكول الدروز", "Kaskas - قصقص", "New Jdeideh - نيو  جديدة", "okaiby - العاقبية", "betchay - بطشاي", "Nammoura - نمورة", "bchelleli - بشللي", "Airport Road - طريق المطار", "Bkennaya - بقنايا ", "Horch Tabet - حرش تابت", "Bechara El Khoury - بشارة الخوري", "karem saddah - كرم سادة", "Salim Slem - سليم سلام", "Kaslik - كسليك", "kantari - القنطاري", "Sodeco - سوديكو", "Sakiet El Janzir - ساقية الجنزير", "Wetwat - الوتوات", "Sami El Solh - سامي الصلح", "Ain Najem - عين نجم", "chaqra - شقرا", "Al Marfa'a - المرفأ", "Karakas - كركاس", "babliye - بابلية", "Geitawi - جعيتاوي", "borjen - برجين", "Galerie Semaan - غاليري سمعان", "jibchit - جبشيت", "bejdarfel - بجدرفيل", "Tamich - دير طاميش", "Aicha Bakkar - عائشة بكار", "Yarzeh - اليرزة", "deir el haref - دير الحرف", "Jisr El Wati - جسر الواطي", "The Pavement Warehouse - مستودع الرصيف", "Mar Takla - مار تقلا", "Ras Al Nabeh - رأس النبع", "Cornish el Naher - كورنيش النهر", "Naher el Kaleb - نهر الكلب", "Bourj Al Barajneh - برج البراجنة", "Ouzai - الأوزاعي", "Sassine - ساسين", "Maameltein - معاملتين", "Unesco - الاونيسكو", "Rweiss - الرويس", "Bekaata Chouf - بقعاتا", "Beit el Kiko - بيت الكوكو", "Malla - الملا", "Ras Beirut - رأس بيروت", "Dik El Mehdi - ديك المحدي", "Maarab - معراب", "Dubai - دبي", "Faqra - فقرا", "Ain el Remmaneh (Aley) - عين الرمانة (عاليه)", "Barbour - بربور", "West Bekaa - ", "Hanaway - حناويه", "Sabra - صبرا", "Jadra - جدرا", "Quello Chocolate - ", "Gherfine - غرفين", "Msayleh - مصيلح", "Beit Misk - بيت مسك", "Sarahmoul - سرحمول", "RoseBullet - ", "Clothing Brand - ", "Ur Style - ", "Rush & Reez - ", "Biakout - بياقوت", "Barich - باريش", "Saadiyat - سعديات", "Ksara - كسارا", "Aitroun - عيترون", "Little Darlings Store - ", "Chebaa - شبعا", "Bouar - بوار", "Kayfoun - كيفون", "Bayssarieh - بيسارية", "Telal Ain Saadeh - تلال عين سعادة", "Bednayel (Koura) - بدنايل (الكورة)", "Cheikh Ayash - الشيخ عياش", "Arnoun - ارنون", "Kfarchuba - كفرشوبا", "Midane (Jezzine) - ميدان (جزين)", "Abou Samra - ابو سمرا", "Baddawi - البداوي", "Dam w Farez - ضم و فرز", "Her Closet - ", "Kabrechmoun - قبر شمون", "Kounine - كونين", "Sports Lab - ", "KAH - ", "Saloume - صالومي", "Mirna Chalouhi - ميرنا الشالوحي", "Tarek Saida El Ademe - طريق صيدا القديمة", "Meiteen Street - شارع متين", "Baraachit - برعشيت", "Mousaitbeh - المصيطبة", "Mryatah - مرياطا", "Abadieh - العبادية", "Cotton Lane Clothing - ", "Zaarour - زعرور", "Baflay - بافليه", "Hariss - حاريص", "Manara (West Bekaa) - المنارة (البقاع الغربي)", "Hosrayel - حصرايل", "Dmeet - دميت", "Bsaba (Baabda) - بسابا (بعبدا)", "Bir Al Abed - بئر العبد", "Mahmra - محمرة", "Borj Rahal - برج رحال", "Laklouk - لقلوق", "Bwerij (Chtaura) - البوراج (زحلة)", "Hebbariyeh - هبارية", "Bend the Trend - ", "Aramoun (Kesserwen) - عرمون (كسروان)", "Kobbeh (Aley) - القبة (عاليه)", "Btouratig - Koura - بتوراتيج (الكورة)", "Bourj Kalaway - برج قلويه", "Bnaafoul - بنعفول", "Tamnine El Tahta - تمنين التحتا", "Zaitoun - زيتون", "Zeitoun - زيتون", "Sirijbeil - سيرجبال", "Chouit - شويت", "Riit - رعيت", "Zandouka - زندوقة", "Baaloul - بعلول", "Kfardebian - كفردبيان", "Kaser Debba - قصر دبا", "Chebanieh - شبانية", "Khandaa Al Ghamii - خندق الغميق", "Nahr El Kalb - نهر الكلب", "El Mouhamara - المحمرة", "Baalchmay - Mont Lebanon - بعلشمي", "Old Saida Road - طريق صيدا القديمة", "Arsoun - ارصون", "Ghaboun - الغبون", "Mouhaidseh - محيدثة", "Mekse - مكسه", "Alman Chouf - علمان الشوف", "Arbet Kozhaya - عربة قزحيا", "Bakifa ( Rachaya - West Bekaa ) - بكيفا", "Britel - بريتال", "Fardiss ( Hasbaya - Nabatiyeh ) - فرديس (حاصبيا)", "Btormaz - بطرماز", "Ain Aata - عين عطا", "Batoulay - باتوليه", "Berkayel - برقايل", "Zaita - زيتا", "Dmit - دميت", "Bzebdine ( Maten ) - بزبدين (بعبدا)", "Bidyas - بدياس", "Btedhi ( Deir el-Ahmar ) - بتدعي", "Ain Jarfa - عين جرفا", "Wakilni Dekwaneh Office (Self Pickup) - مكتب وكيلني دكوانة (الاستلام الذاتي)", "Tohwitet Al Ghadeer - تحويطة الغدير", "Maamoura - المعمورة", "Aana ( West Bekaa ) - عانا", "Mejdlaya ( Zgharta ) - مجدليا", "Bsarma ( Koura ) - بصرما", "Bkarzella ( Akkar ) - بكرزالا", "Aitha Chaab - عيتا الشعب", "Khaizaran - خيزران", "Tiri - طيري", "Arzay - أرزاي", "kaki3iyet l sanawbar - قعقعية صنوبر", "Ansar(baalback) - انصار (بعلبك)", "Akbieh (saida) - العاقبية", "Bazbina - بزبينا", "Wakilni Tripoli Office (Self Pickup) - مكتب وكيلني طرابلس (الاستلام الذاتي)", "Wakilni Sarafand  Office (Self Pickup) - مكتب وكيلني الصرفند (الاستلام الذاتي)", "Ajaltoun (Metn) - عجلتون", "Hellaniyeh - الحلانية", "Beit El Faks - بيت الفقس", "Khreybeh (Metn) - الخريبة", "Khreybeh (Chouf) - الخريبة (الشوف)", "Qasmieh - القاسمية", "Borghlieh - البرغلية", "Chrawneh - شراونة", "Beit Chama - بيت شاما", "Noumairieh - نميرية", "Myasseh - مياسة", "Matariyet Choumar - مطرية الشومار", "kawsariyet rez - مزرعة كوثرية الرز", "Arnaoun - قرنعون", "Aintoura (Kesserwan) - عينطورة", "Ainbal - عينبال", "katrane - قطراني", "Qartaboun - قرطبون", "Aitaroun - عيترون", "Ain el tineh (West Bekaa) - عين التينة (البقاع الغربي)", "Hasbaya (metn Aley) - حاصبيا المتن", "Sammaayieh - السماعية", "Sriri - سريري", "Beit Lif - بيت ليف", "Kherbet Selem - خربة سلم", "Chabriha - شبريحا", "Aytanieh - عيتنيت", "Debel - دبل", "Borj Chemali - برج الشمالي", "Derdghaya - دردغيا", "Zahrani - دير الزهراني", "Yellow Store - Beirut - متاجر وكّلني الصفراء - بيروت", "Sebaal - سبعل", "kfour (nabatiyeh) - كفور (النبطية)", "Harbata - حربتا", "Jabboule - ", "Hadath (Baabda) - حدث (بعبدا)", "Hadath (Dahieh) - حدث (ضاحية)", "Deir Chamra - دير شمرا", "Qennarit - قناريت", "Sour - صور", "Yohmor (West Bekaa) - يحمر (البقاع الغربي)", "Beqaa Kafra - بقاع كفرا", "Kfar El Jouz - مزرعة كفر جوز", "Toul - تول", "Brih - بريح", "Argentina - ", "Bednayel (Bekaa) - بدنايل (بعلبك)", "Allaq - علق", "Bodai - بوداي", "Qsaybeh (Nabatieh) - قصيبة", "Rihanieh (Baabda) - الريحانية", "kafaat (fanar) - كفاءات", "Al Azzounieh - عزونية", "Mreijat (Bekaa) - ", "Amroussieh (Choueifat) - ", "Warhaniyeh - ورهانية", "Hay Osseyra - حي العسيرة", "Nabi Rashad - ", "Sfaylet Baabdat - سفيلة بعبدات", "Chehabiyat Al Faour - شهابية الفاعور", "Haqel - حاقل", "Bejjeh - بجه", "Zalloutiyeh - الزلوطية", "Yarine - يارين", "Tayr Harfa - طير حرفا", "Tabaris - تباريس", "Taazaniyeh - تعزانية", "Srebbine - صربين", "Sakhra - صخرة", "Rmoul - رمول", "Rejmeh - رجمة", "Ramliyeh - رملية", "Ramyeh - رامية", "Rachidiyeh - رشيدية", "Rachaf - رشاف", "Qoubbei - قبيع", "Qennabet Broummana - قنابة برمانا", "Qouzah - قوزح", "Qabaait - قبعيت", "Qaabrine - قعبرين", "Aayoun El Siman - عيون السيمان", "Warhaniyeh - ورهانية", "Nasra - ناصرة", "Nafakhiyeh - نفاخية", "Nabaa El Safa - نبع الصفا", "Nabaah (Jezzine) - (جزّين) نبعة", "Mzayreb - مزيرب", "Mzaki - مزكة", "Marwahin - مروحين", "Merdacheh - مرداشة", "Mazraat El Hdaira - مزرعة الحضيرة", "Meidoun - ميدون", "Masnaa - المصنع", "Maroun El Ras - مارون الرأس", "Marjiyat - مرجيات", "Mar Shaaya - مار شعيا", "Mansouriyet Bhamdoun - منصورية بحمدون", "Malkiyet El Sahel - مالكية السهل", "Madfoun - مدفون", "Lehfed - لحفد", "Kouaikhat - الكويخات", "Karahbache - قره باش", "Kherbeh - خربة", "Khiara - خيارة", "Petrol Line - خط البترول", "Kfar Jrif - كفر جريف", "Kfarhamam - كفر حمام", "Kfar Chellal - كفر شلال", "Kfar Baal - كفر بعال", "Jibbayn - جبين", "Jabal Mohsen - جبل محسن", "Ijdabrine - اجدبرين", "Hsarat - حصارات", "Haidab - حيداب", "Harharira - هرهريرة", "Haret El Sett - حارة الست", "Haouch El Qenaabeh - حوش القنعبة", "Haouch Barada - حوش بردى", "Hanine - حنين", "Ghabeh - غابة", "Fsiqine - فسيقين", "Fouaret Jaafar - فوارة جعفر", "Dhour El Aabadiyeh - ضهور العبادية", "Dhayra - ضهيرة", "Deir Qanoun En Nahr - دير قانون النهر", "Deir Dalloum - دير دلوم", "Daqqoun - دقون", "Dahr El Qanbar - ضهر القنبر", "Chihine - شيحين", "Chama - شاما", "Bziza - بزيزا", "Bzina - بزينا", "Bzal - بزال", "Btorram - بطرام", "Btekhnay - بتخني", "Bramiyeh - برامية", "Braikeh - بريقع", "Bqosta - بقسطا", "Bqaa Safrin - بقاع صفرين", "Boustane - بستان", "Borj El Yahoudiyeh - برج اليهودية", "Boqsmaiyya - بقسميا", "Bqosta - بقسطا", "Biyad - بياض", "Bechtelida - بشتليدا", "Bhannine - بحنين", "Beqaatet Kanaan - بقعاتة كنعان", "Beit Younes - بيت يونس", "Beit Yahoun - بيت ياحون", "Beit Aaoukar - بيت عوكر", "Beit Mellat - بيت ملات", "Beit Lahia - بيت لاهيا", "Beit Kassab - بيت كسّاب", "Ain Abou Abdallah - عين أبو عبدالله", "Ain Drafil - عين درافيل", "Ain el Haour - عين الحور", "Ain Al Marj - عين المرج", "Ain El Mir - عين المير", "Ain El Sindiane - عين السنديان", "Beit Chlala - بيت شلالا", "Beit Ayoub - بيت أيوب", "Beino - بينو", "Behouaita - بحويتا", "Bechouat - بشوات", "Bechmizzine - بشمزين", "Bebnine - ببنين", "Bdebba - بدبا", "Bchernata - بشرناطا", "Bchannine - بشنين", "Batroumine - بترومين", "Basloukit - بسلوقيط", "Barsa - برسا", "Barqa - برقا", "Mazraat El Barghoutiyeh - مزرعة البرغوتية", "Bane - بان", "Balamand - البلمند", "Bakka - بكا", "Baghdadi - بغدادي", "Bab Maraa - باب مرعا", "Bab ElRamel - باب الرمل", "Al Azounie - العزونية", "Aayoun El Ghezlan - عيون الغزلان", "Aanan - عنان", "Chouaifet El Aamroussieh - شويفات العمروسية", "Yanouh (Jbeil) - يانوح (جبيل)", "Rweissat Jdeideh - رويسات الجديدة", "Nabaah (Metn) - النبعة (المتن)", ""]
    return cities;
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
        phoneLength: 10
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
        phoneLength: [8, 9, 10]
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

// var cities = ["Dawra", "Hamra", "Ain el Remmaneh (Beirut)", "Baabda", "Bourj El Brajneh", "Chiyah", "Fayadieh", "Furn el-Chebbak", "Ghobeiry", "Hadath", "Haret Hreik", "Hazmieh (Baabda)", "Leilaky", "Louaizeh (Baabda)", "Mreijeh", "Tahweitat", "Jdeideh", "Achrafieh", "Ain el-Mreisseh", "Ain el Tineh", "Bab Idriss", "Bachoura", "Badaro", "Barbir", "Basta Fawka", "Basta Tahta", "Batrakiyi", "Beirut", "Bourj Abi Haidar", "Down Town", "Mathaf", "Medawar", "Minet el-Hosn", "Mousseitbeh", "Port of Beirut", "Ramle El Baida", "Ras-Beyrouth", "Rmeil", "Saifi", "Snoubra", "Verdun", "Wata Al Mousaitbe", "Zokak el-Blat", "Manara (Beirut)", "Rawda", "Amaret Chalhoub", "Antelias", "Bouchrieh", "Bourj Hammoud", "Dawra", "Dbayeh", "Dekouaneh", "Fanar", "Jal el-Dib", "Mansourieh", "Mar Mikhael", "Mar Roukoz", "Mezher", "Mkalles", "Nahr El Mot", "Sad el-Baouchrieh", "Sin el-Fil", "Zalka", "Hay el-Sellom", "Karantina", "Tarik Jdideh", "Bir Hasan", "Raouche", "Zarif", "Gemmayzeh", "Tallet El Khayyat", "Dahieh", "Mar Elias", "cola", "Sabtieh", "Jisr el Bacha", "Sanayeh", "hay madi", "Jnah", "Mcharafiyeh", "Zaydenieh", "cornich el mazeraa", "Madine Riyadiye", "New Rawda", "Tayouneh", "Sfeir", "noueiry", "kafaat", "Beirut Central District", "Mouawad", "Koraytem", "Beirut Digital District", "Clemenceau", "Sioufi", "Adlieh", "Jamhour", "Rweissat", "Karakol Druze", "Kaskas", "New Jdeideh", "betchay", "Airport Road", "Horch Tabet", "Bechara El Khoury", "Salim Slem", "kantari", "Sodeco", "Sakiet El Janzir", "Wetwat", "Sami El Solh", "Al Marfa'a", "Karakas", "Geitawi", "Galerie Semaan", "Aicha Bakkar", "Yarzeh", "Jisr El Wati", "Mar Takla", "Ras Al Nabeh", "Cornish el Naher", "Bourj Al Barajneh", "Ouzai", "Sassine", "Unesco", "Rweiss", "Malla", "Ras Beirut", "Barbour", "Sabra", "Quello Chocolate", "Rush & Reez", "Sports Lab", "KAH", "Saloume", "Mirna Chalouhi", "Tarek Saida El Ademe", "Mousaitbeh", "Safra", "Adma", "Adonis", "Ballouneh", "Ghazir", "Jounieh", "Tabarja", "Zouk Mikail", "Zouk Mosbeh", "Awkar", "Rabwe", "Bsalim", "Ghadir", "Rabieh", "Kfarhbab", "Al Maten", "dhour chweir", "Al Houssein Ftou7 Keserwen", "elissar", "Bzemar", "New Sehayle", "okaiby", "Bkennaya", "Kaslik", "deir el haref", "Maameltein", "Beit Misk", "Biakout", "Bouar", "Abdelli", "Ajdabra", "Al Ali", "Al Hiri", "Andoula", "Artez", "Assia", "Awra", "Batroun", "Bchaaleh", "Bkesmaya", "Chatine", "Chekka", "Chibtine", "Dabra", "Dahr Abou-Yaghi", "Dail", "Deir Bella", "Deir Chwah", "Deria", "Douma", "Eddeh", "Fadous", "Ftahat", "Ghouma", "Hadtoune", "Hamat", "Harbouna", "Hardine", "Helta", "Hery", "Ibrine", "Jdabra", "Jeb La", "Jrabta", "Jrane", "Kesya", "Kfa Rabida", "Kfar Abida", "Kfar Chliman", "Kfar Halda", "Kfar Hatna", "Kfar Hay", "Kfifane", "Kfour el-Arabi", "Koubba", "Kour", "Mar Mema", "Marj (Batroun)", "Mehmarche", "Mrah Az-Zeyat", "Mrah Chdid", "Mrah el-Hajj", "Racha", "Rachana", "Rachkida", "Ras Nhache", "Ras Senhache", "Selaata", "Sghar", "Smar Jbeil", "Souret", "Tannourine", "Thoum", "Toula", "Wata Houb", "Zane", "Abdine", "Barhelyoun", "Bazoon", "Bcharre", "Beit Mounzer", "Bkerkacha", "Blawza", "Bolla", "Braissat", "Dimane", "Hadath E Jebbeh", "Hadchit", "Hasroun", "Ibdine", "Maghroubella", "Qnat", "Qnayer", "Tourza", "Minieh", "Mrah As-Sraje", "Mrah Sfaira", "Mrah Sraje", "Nabi Youchah", "Namrine", "Nimrine", "Rihanieh", "Sfaira", "Tarane", "Wadi Nahleh", "Watieh", "Zaghr Tighrine", "Midane (Zgharta)", "A'aba", "Afsdik", "Ain Akrine", "Ajad Ebrine", "Amioun", "Anfeh", "Dahr el-Ain", "Dar Baachtar", "Dar Chmezzine", "Deddeh", "Elhat", "Fesdick", "Fieh", "Haret el-Khassa", "Hmayreh (Koura)", "Kaftoun", "Kalhat", "Kboula (Kusba)", "Kefraya (Kusba)", "Keftine", "Kfar Akka", "Kfar Hata (Koura)", "Kfar Hazir", "Kfar Kahel", "Kfar Saroun", "Kousba", "Metrit", "Nakhleh", "Rachdebbine", "Ras-Meska", "Ta'aboura", "Wata Fares", "Zakrouk", "Zakroun", "Zakzouk", "Terbol (Danniyeh)", "Achach", "Ain Toubine", "Ain Tourine", "Aitou", "Alma", "Arabet Kozhaya", "Ardeh", "Arjess", "Aslout", "Asnoun", "Dar Aya", "Ehden", "Ejbeh", "Garabache", "Haret el-Fouar", "Harf Ardeh", "Harf Miziara", "Haylan", "Hmaiss", "Ia'al", "Kadriyeh", "Karm Saddeh", "Kfar Aya", "Kfar Bachit", "Kfar Chakhna", "Kfar Dlakous", "Kfar Fou", "Kfar Hatta (Zgharta)", "Kfar Houra", "Kfar Seghab", "Kfar Yachit", "Kfar Zina", "Maasser", "Majd Laya (Zgharta)", "Mazraat el-Fraydiss", "Mazraat el-Nahr", "Mazraat Houka", "Mazraat Hreikess", "Mazraat Touffah", "Meziara", "Miryata", "Rachiine", "Raskifa", "Salib", "Saydeh", "Sebhel", "Serhel", "Toula Jebbeh", "zgharta", "Koura", "NORTH", "Bahsas", "darbaachar", "Bnachii", "bakhoun", "Danniyeh", "kfar saddeh", "bejdarfel", "Little Darlings Store", "Bednayel", "Mrayteh", "Zaarour", "Hosrayel", "Other", "Al Haddadine", "Al Hadid", "Al Mahatra", "An Nouri", "Jisrain", "Kobbeh", "Mina", "Qalamoun", "Roummaneh", "Souwaika", "Tabbaneh", "Tal Mohammad", "Tripoli", "Zahrieh", "moula", "RoseBullet", "Clothing Brand", "Ur Style", "Abou Samra", "Baddawi", "Dam w Farez", "Her Closet", "Meiteen Street", "Cotton Lane Clothing", "Aitouli", "Al Rihan", "Aramta", "Aray", "Aychieh", "Azour", "Baissour (Jezzine)", "Barta", "Beba", "Benweteh", "Bisri", "Bkassine", "Boslaya", "Bteddine El Lekech", "Choualik", "Har", "Haytoura", "Homsiyeh", "Hsanieh", "Jarmak", "Jensnaya", "Jernaya", "Jezzine", "Karkha", "Kattine (Jezzine)", "Kfar Jarra", "Kfarfalous", "Kfarhouna", "Lebaa", "Louaizeh (Jezzine)", "Machmouche", "Maknounieh", "Mharabiyeh", "Mjeidel (Jezzine)", "Mlikh", "Mrah el-Hibas", "Rimat - Chkadif", "Roum", "Sabbah", "Saydoun", "Sfaray", "Snaya", "Sojod", "Teid", "Wadi Baankoudine", "Wadi el-Laymoun", "Wadi Jezzine", "Zhalta", "Abra", "Addoussiyeh", "Adloun", "Ain el-Delb", "Aktanit", "Al Saksakieh", "Ankoun", "Anssarieh", "Arab el-Jal", "Arkeh", "Arzeh", "Arzi", "Darbessim", "Derb el-Simme", "Gharayeb", "Ghassaniyeh", "Ghaziyeh", "Hageh", "Haret Saida", "Hlaliyeh", "Jenejleya", "Ka'a kayet Snoubar", "Kannarit", "Kariyeh", "Kawssariet Sayad", "Kefraya (Saida)", "Kfar Bit", "Kfar Chelal", "Kfar Hatta (Saida)", "Kfar Hitti", "Kfar Melki (Saida)", "Kharayeb", "Khartoum", "Khazize", "Knaytra", "Krayyeh", "Loubiyeh", "Maamariyeh", "Maghdoucheh", "Majd el-Youne", "Marwaniyeh", "MiyehWe Miyeh", "Nejjariyeh", "Saida", "Saksakiyeh", "Salhiyeh", "Sarafand", "Tabbaya", "Tanbourite", "Teffahta", "Zeghdraya", "Zitta", "Zrariyeh", "Kfar Houne", "Insariyeh", "babliye", "Msayleh", "Bayssarieh", "Midane (Jezzine)", "Karha (Baalback)", "Kala'a (Baalback)", "Tarchich", "Ain Baniyeh", "Ain Bourday", "Ain Joz", "Ain Saouda", "Akidiyeh", "Al Ain", "Chaet", "Cheaibi", "Chlifa", "Chmais", "Chmeis", "Chmestar", "Dar Wassiha", "Deir el-Ahmar", "Douriss", "el-Ain", "Ersal", "Fakiha", "Falaoui", "Geba'a", "Ghafra", "Hadeth Baalbeck", "Hame", "Hazin", "Hoch Nabi", "Hoch Rafika", "Hoch Sneid", "Hoch Tal Safiyeh", "Hoch Zahab", "Hor Tehla", "Hrebta", "Ia'at", "Jaba'a", "Jbaniyeh", "Jboula", "Jenta", "Ka'a", "Kaddam", "Kal Sabeh", "Kaled Sabeh", "Kasser Naba", "Kfar Dabach", "Kfar Dan", "Kfar Diche", "Khodr", "Khreybeh", "Kneisseh (Baalback)", "Laboueh", "Lebbaya", "Maaraboun", "Majd Aloun", "Makneh", "Makni", "Masnah Zahra", "Mazraat Abou Slaybi", "Mazraat Beit Matar", "Mazraat Beit Slaybi", "Mazraat Dalil", "Mazraat el-Soueidan", "Mazraat Sayed", "Mazraat Soueidan", "Mazraat Tout", "Mekrak", "Nabha Damdoum", "Nabha Harfouche", "Nabha Kleili", "Nabha Mahfara", "Nabi Chiit", "Nabi Inaam", "Nabi Osman", "Nabi Rachadeh", "Nabi Sbat", "Nahleh", "Nakra", "Nye Rachadeh", "Ram", "Ramassa", "Ras Baalbeck", "Rich", "Riha", "Sabbouba", "Sadiyeh", "Sarhine", "Sayaniyeh", "Sefri", "Soleh", "Talya", "Taraya", "Temnine", "Tfayel", "Tibeh", "Tmenin", "Toufikiyeh", "Wadi Fa'ara", "Wadi Mechmechi", "Wadi Safa Charki", "Wadi Zein (Baalback)", "Yahfoufa", "Yammouni", "Younine", "Younissiyeh", "Zaboud", "Zarazir", "Ain Zabad", "Aitanit", "Terbol (Zahle)", "Charbin", "Chawaghir", "Fissane", "Haret Maasser", "Harika", "Hermel", "Hmayreh (Hermel)", "Hoch Sayed", "Jawar Hachich", "Kasr-Fissane", "Kasser", "Khrayeb", "Knafez", "Kouwakh", "M'aysra", "Mazraat Beit Tacham", "Mazraat Fakih", "Mazraat Saged", "Mrah el-Ain", "Nayra", "Sahlat Ma'a", "Wadi Asse", "Wadi Bneit", "Wadi Karm", "Wadi Rattal", "Wadi Turkman", "Zaghrin", "Ablah", "Ain Kfarzabad", "Ali el-Nahri", "Anjar", "Chtaura", "Deir el-Ghazal", "Delhamiyeh", "Ferzol", "HajjehJbeili", "Hay el-Fikati", "Hazerta", "Hoch el-Oumara", "Hoch Ghanam", "Hoch Hala", "Hoch Zarahneh", "Horch Hala", "Jalala", "Jdita", "Ka'a el-Rim", "Kab Elias", "Kab Ousseh", "Kamel", "Karak", "Kfar Zabad", "Khodr Bey", "Koussaya", "Maalaka", "Majd el-Anjar", "Maksi", "Mar Antonios", "Massa", "Mreijat (Zahle)", "Nabi Aylla", "Nassiriyeh", "Niha (Zahle)", "Rahit", "Rassiyeh", "Rayak", "Saadnayel", "Taalabaya", "Taanayel", "Tal el-Akhdar", "Touweiti", "Wadi Arayech", "Wadi el-Delm", "Youghon Oloke", "Zahle", "Baalbak", "Bekaa", "Sawfar", "Barelias", "Ksara", "Manara (West Bekaa)", "Hasbaya", "Ain Ata (Baalbeck)", "Ain Zebdeh", "Ammik (Bekaa)", "Ana", "Dakkouh", "Deir el-'Achaer", "Ghazzeh", "Hoch el-Harimeh", "Jeb Jenine", "Kalya", "Kamed el-Loz", "Karaoun", "Kefraya (Bekaa)", "Kherbet Kanafar", "Lala", "Machghara", "Mansoura", "Marj (Bekaa)", "Racyay", "Rafid", "Saghbine", "Sohmor", "Souayra", "Sultan Yaacoub", "Tal Zanoub", "Yohmor", "Zlaya", "Kfeir", "Marj el-Zouhour", "Mimes", "Al Rawda West Bekaa", "West Bekaa", "Abey", "Aghmid", "Ain Anoub", "Ain Dara", "Ain El Saydeh", "Ain Enoub", "Ain Jdideh", "Ain Ksour", "Ain Trez", "Ainab", "Aitat", "Aley", "Aramoun", "Aytate (Aley)", "Baawerta", "Badghan", "Baissour (Aley)", "Bassatine", "Bchamoun", "Bdadoun", "Bemkine", "Bennieh", "Bhamdoun", "Bhamdoun El Mhatta", "Bkhechtey", "Bleibel", "Bmahray", "Bserrine", "Bsouss", "Btalloun", "Btater", "Chanay", "Charoun", "Chartoun", "Chatiyeh", "Chemlan", "Choueifat", "Deir Koubel", "Dfoun", "Doueir el-Remmane", "Habrmoun", "Houmal", "Ighmid", "Kahaleh", "Keyfoun", "Kfar Aamey", "Kfar Amya", "Kfar Matta", "Maasriti", "Majd el-Baana", "Majd el-Behna", "Majd Laya (Aley)", "Mecherfeh", "Rechmaya", "Remhala", "Roueisset el-Nehman", "Sofar", "Souk el-Gharb", "Ain Mouaffaq", "Araya", "Arbaniyeh", "Chebaniyeh", "Deir el-Harf", "el-Qarieh", "Falougha", "Hammana", "Haret Hamzeh", "Jouar el-Haouz", "Kfar Chima", "Kfar Selouan", "Khalouate", "Kneisseh (Baabda)", "Kornayel", "Kossaibeh", "Koubbayeh", "Qoubbei", "Qsaibeh", "Quorayeh", "Ras el-Harf", "Ras el-Metn", "Rouayset el-Ballout", "Salima", "Sebnay", "Wadi Chahrour", "Kala'a (Baabda)", "Ain Ba'al (Chouf)", "Ain Kani", "Ain We Zein", "Ain Zhalta", "Al Wardaniyeh", "Amatour", "Ammik (Chouf)", "Anout", "Atrine", "Baakline", "Baasir", "Baatharan", "Barja", "Barouk", "Bater", "Batloun", "Bchetfine", "Beiteddine", "Bireh", "Botme", "Bsaba El Chouf", "Chehim", "Chourite", "Daher Al Mghara", "Dalhoun", "Damour", "Daraya (Chouf)", "Debbieh", "Deir Baba", "Deir Dourit", "Deir el-Kamar", "Deir el-Moukhales", "Deir Koucheh", "Dmayt", "Fouara", "Freidis (Chouf)", "Gharifeh", "Haret Janbal", "Hasrout", "Jahlieh", "Jbaa (Chouf)", "Jdeidet el-Chouf", "Jidra", "Jiyeh", "Joun", "Kahlounieh", "Ketermaya", "Kfar Fakoud", "Kfar Katra", "Kfar Nabrakh", "Kfar Nis", "Kfarhim", "Khrabyeh", "Knayse", "Maasser Beit Eddine", "Maasser El Chouf", "Majd el-Meouch", "Marj Barja", "Marsati", "Mazboud", "Mazraat El Chouf", "Mazraet el-Dahr", "Mechref", "Mersty", "Mghayrie", "Moughairieh", "Mouhtakara", "Mreyjat (Chouf)", "Mtolleh", "Niha (Chouf)", "Rmeileh", "Semkaniyeh", "Wadi Bnehley", "Wadi el-Set", "Wadi el-Zineh (Chouf)", "Wardanieh", "Zaarourieh", "Sibline", "Khalde", "Chouf", "Mount Lebanon", "Nehme", "dohet el hoss", "Dohat aramoun", "haret el naameh", "eklim el kharoub", "Kmatiye", "borjen", "The Pavement Warehouse", "Bekaata Chouf", "Ain el Remmaneh (Aley)", "Jadra", "Sarahmoul", "Saadiyat", "Kayfoun", "Kabrechmoun", "Abadieh", "Klayaat (Kesserwan)", "Dlaibeh", "el-Qalaa", "Kortada", "Achkout", "Adra", "Ain el-Rihani", "Aintoura", "Ajaltoun", "Akaybeh", "Azra", "Batha", "Bekaatet Achkout", "Bezhel", "Bqaatouta", "Bwar", "Chahtoul", "Chnaniir", "Daphneh", "Daraoun", "Daraya (Kesserwan)", "Dlebta", "Faraya", "Fatqa", "Feytroun", "Ghebaleh", "Ghedrass", "Ghineh", "Ghosta", "Haret Sakhr", "Harissa", "Herhraya", "Hiyata", "Hrajel", "Hsein", "Jdeidet Ghazir", "Jeita", "Jouret Bedrane", "Jouret el-Tourmos", "Kfar Yassine", "Kfar Zebian", "Kfour", "Maayssra", "Mayrouba", "Mazraat Kfardebiane", "Qattin", "Raachine", "Reyfoun", "Sahel Alma", "Sarba (Kesserwan)", "Sehayleh", "Wata el Jawz", "Yahchouche", "Zaaytre", "Zeytoun'", "Ain Aar", "Ain Alak", "Ain el Kharroubeh", "Ain el-Safsaf", "Ain Saadeh", "Atchaneh", "Ayroune", "Baabdat", "Baskinta", "Beit Chabeb", "Beit Mery", "Bhanness", "Bhersaf", "Bikfaiya", "Bolonia", "Broumana", "Bteghrine", "Chawiya", "Choueir", "Chrine", "Dahr el-Hassin", "Dahr el-Souan", "Deychounieh", "Douar", "Ein Zeitouneh", "el-Kaakour", "el-Khalleh", "Freikeh", "Hbous", "Himlaya", "Jouar", "Jouret el-Ballout", "Ka'a Kour", "Kanabat", "Kfar Akab", "Kfar Tey", "Khonchara", "Koneitra", "Kornet Chehwane", "Majd el-Tarchich", "Majzoub", "Mar Moussa", "Marjaba", "Maska", "Mayassa", "Mazraat Yachouh", "Mchikha", "Moheidse (Maten)", "Mrouj", "Mtaileb", "Mtein", "Nabay", "Naccache", "Roumieh", "Sakiet el-Misk", "Sfeili", "Wata el-Mrouj", "Zabougha", "Zarhoun", "Zeghrine", "Zekrit", "Zouk el-Kharab", "Zouk Kharab", "Daychounieh", "Metn", "Beit el Chaar", "Monteverde", "dahr el bashik", "cornet el hamra", "Kesserwen", "Biyada", "Nammoura", "Ain Najem", "Tamich", "Naher el Kaleb", "Beit el Kiko", "Dik El Mehdi", "Maarab", "Faqra", "Telal Ain Saadeh", "Abboudiyeh", "Abdeh", "Aidamoun", "Ain Tanta", "Ain Yaacoub", "Ain Zaite", "Akkar el-Atika", "Akroum", "Al Abdeh", "Al Hid", "Al Hmayra", "Al Sahleh", "Ammar Bikat", "Andket", "Chadra", "Chakdouf", "Chane", "Charbila", "Cheikh Mohamad", "Cheikh Taba", "Cheikh Znad", "Chikhlar", "Chtaheh", "Daghla", "Daher", "Dahr Lisseineh", "Daousseh", "Darine", "Debabieh", "Deir Janine", "Doueir Adouieh", "Edbel", "Fneidek", "Freidess (Akkar)", "Gebrayel", "Ghowaya", "Ghreibeh", "Ghzaileh", "Habchit", "Haissa", "Haizouk", "Hakour", "Hakr Cheikh Taba", "Hakr Dahiri", "Halba", "Haysseh", "Hed", "Hitla", "Hmayreh (Akkar)", "Hneider", "Hocheb", "Hosniyeh", "Howeiche", "Hrar", "JdeidehJoumeh", "JdeidehKatih", "Kachlak", "Kantra", "Karm Asfour", "Katelbeh", "Kboula (Akkar)", "Kfar Harra", "Kfar Melki (Akkar)", "Kfar Noun", "Kfar Toun", "Kherbet Char", "Khorbet Daoud", "Khorbet Jrad", "Khorbet Jundi", "Kiniya", "Kloud Bakieh", "Kneisseh (Akkar)", "Kobayat", "Kobbet Chamra", "Korkef", "Korneh", "Koucha", "Krayat", "Kroum Arab", "Kwachra", "Machta Hammoud", "Machta Hassan", "Majd Ala", "Majd El (Akkar)", "Mar Touma", "Mart Moura", "Massoudieh", "Mazraat Baldeh", "Mechha", "Mechmech (Akkar)", "Mekhtlef", "Memneh", "Minyara", "Mkaibleh", "Mkaiteh", "Mounjez", "Mounsa", "Mrah el-Khokh", "Nahriyeh", "Nfeisseh", "Noura", "Oueinate", "Ouyoun", "Rahbeh", "Rammah", "Saadine", "Safinet el-Dreib", "Sayssouq", "Sehleh", "Seissouk", "Semakiyeh", "Sfeinet Katih", "Sindiyaneh", "Soueisseh", "Srar", "Tacheh", "Tal Abbas", "Tal Bibeh", "Tal Bireh", "Tal Hemayra", "Tal Mehyan", "Talleh", "Tekrit", "Tel Meyane", "Tleil", "Wadi el-Hour", "Wadi Jamous", "Wadih Khaled", "Zawarib", "Zouk", "Zouk el-Hossayni", "Zouk Hadareh", "Zouk Hassineh", "Zouk Hbalseh", "Zouk Mekacharine", "Karha (Akkar)", "Aazki", "Assoune", "Deir Ammar", "Deir Nbouh", "Dibiil", "Hakl el-Azimi", "Harf Siyad", "Hazmieh (Danniyeh)", "Houwara", "Izal", "Kahf el-Malloul", "Kammamine", "Karm el-Mehr", "Karsita", "Karsouna", "Kattine (Danniyeh)", "Kfar Bibnine", "Kfar Chellam", "Kfar Chellane", "Kfar Habou", "Kharnoub", "Korhaya", "Krin", "Limar", "Markabta", "Mazraet Artousa", "Sir Denniyeh", "Klayaat (Akkar)", "Akkar", "Cheikh Ayash", "Abbassiyeh", "Chaat", "Aita el-Zot", "Chacra", "Deir Antar", "Deir Kantar", "Doubiyeh", "Froun", "Ghandouriyeh", "Haddatha", "Haris", "Jmaijmeh", "Kafra", "Kfar Doubine", "Klaouiyeh", "Safad el-Batikh", "Sultanieh", "Tebnine", "Yater", "Ain Ba'al (Tyre)", "Ain Ebel", "Alma el-Chaab", "Arzoune", "Aytite (Tyre)", "Chabiyeh", "Chahour", "Cheaytieh", "Chehabiyeh", "Deb'al", "Deir Ames", "Deir Dghaya", "Deir Kanoun", "Deir Kifa", "Halloussiyeh", "Haniyeh", "Jbal Boutoum", "Jouwaya", "Klayleh", "Maarakeh", "Maaroub", "Maarouf", "Mahrouni", "Majd el-Zoun", "Malekyeh", "Mansouri", "Mazraat Mechref", "Mjadel (Tyre)", "Qana", "Rachkananey", "Ras el-Ain", "Rmadiyeh", "Sadikine", "Sal'a", "Smaeyeh", "Tyre", "Srifa", "Tayer Flisseh", "Tayr Debba", "Toura", "Ynouh", "Zabkine", "South", "Jnoub", "bint jbeil", "Rmeich", "bazouriyeh", "dewdieh", "Yaroun", "naqoura", "chaqra", "Hanaway", "Barich", "Aitroun", "Kounine", "Baraachit", "Bflay", "Hariss", "Adasyeh", "Adchit", "Bani Hayann", "Blat", "Blida", "Bourj El Moulouk", "Debbine", "Deir Mimas", "Deir Syriane", "Ebel El Saky", "Houla", "Jdeidet Marjeyoun", "Kab Rikha", "Kantara", "Kfarkila", "Khiam", "Klayaa", "Majd el-Sel", "Majdel Selem", "Markaba", "Mays el Jabal", "Rab Thalathine", "Rachaya el-Foukhar", "Sawaneh", "Souwaneh", "Tallousseh", "Taybeh", "Touline", "Wazzany", "A'aba", "Ain Boussouar", "Ain Qana", "Al Sharkiyeh", "Ansar", "Arab Salim", "Azzeh", "Charqiyeh", "Choukine", "Deir el-Zahrani", "Doueir", "Habbouche", "Harouf", "Houmine", "Jarjouh", "Jbaa (Nabatiyeh)", "Jeb Chite", "Kfar Fila", "Kfar Remmane", "Kfar Sir", "Kfar Tebnit", "Ksaybeh", "Mayfaidoun", "Nabatiyeh", "Nemayreh", "Nmeiriyeh", "Qaaqayiet el-Jisr", "Roumine", "Sarba (Nabatiyeh)", "Sinay", "Sir el-Gharibeh", "Zaoutar", "Zebdine", "Zefta", "Aiha", "Ain Arab", "Ain Ata (Rachaiya)", "Ain Harcha", "Aita el-Fakhar", "Akbeh", "Dahr el-Ahmar", "Deir Achayer", "Hawche", "Heloueh", "Kawkaba", "Kfar Dnisse", "Kfar Kouk", "Kfar Mechki", "Kherbet Rouha", "Majd el-Balhis", "Mdawkha", "Moheidseh (Rachaiya)", "Rachaya", "Tannoura", "Yanta", "Kfar Tibnit", "Marjayoun", "jibchit", "Chebaa", "Arnoun", "Kfarchuba", "Zoueitini", "Afka", "Ain el-Ghoaybeh", "Akoura", "Almat", "Assaouneh", "Chamat", "Chamout", "Eddeh", "Ehmej", "Fatreh", "Feghal", "Fidar", "Ghalboun", "Habil", "Halate", "Hjoula", "Hsoun", "Jadayel", "Jaj", "Jalisseh", "Janneh", "Jbeil", "Kartaba", "Kattara", "Kfar Keddeh", "Kfar Mashoun", "Kfoun", "Lassa", "Majd El (Jbeil)", "Mar Sarkis", "Mayfouk", "Mazra'at el-Syad", "Mchan", "Mechmech (Jbeil)", "Mghayri", "Mounsef", "Nahr Ibrahim", "Obeidad", "Ramout", "Ras Osta", "Saki Rechmaya", "Tartej", "Torzaya", "Amchit", "Berbara", "annaya", "mastita", "Byblos", "bchelleli", "Gherfine"];