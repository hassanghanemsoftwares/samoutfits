var $input;
$(document).ready(function () {

    var getselected = $("#account_type option:selected").text();
    $.ajax({
        cache: false,
        type: 'POST',
        data: { 'whatselected': getselected },
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
            data: { 'whatselected': getselected },
            url: getAppURL('Accounts/fetchaccountnumberfromDatabase'),
            success: function (data) {
                $('#account_number').val(data);
            }
        });
    });

    get_city_data();
    $('#country').on('change', function () {
        get_city_data();
        code = get_mobile_country_code($('#country').val());
        document.getElementById('phone').value = code;
        document.getElementById('phone2').value = code;
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
            $.ajax({
                cache: false,
                type: 'POST',
                data: { 'form_data': $input },
                url: getAppURL('Accounts/add_edit_account_by_modal'),
                success: function (res) {
                    if (res !== 'error') {
                        acc_number = res['account_number'];
                        account_info = acc_number + " - " + acc_name;
                    }
                    alert(acc_number)
                    $("#acctLkupTo").val(account_info);
                    $.ajax({
                        cache: false,
                        type: 'POST',
                        data: { 'account_number': acc_number },
                        url: getAppURL('Accounts/get_account_id'),
                        success: function (data) {
                            $("#account_id").val(data);
                            var id = data;
                            $.ajax({
                                cache: false,
                                type: 'POST',
                                data: { 'whatselected': id },
                                url: getAppURL('purchases/get_account_currency'),
                                success: function (data) {
                                    $('#currency_id_list').val(data);
                                    $('#currency_id').val(data);
                                    $.ajax({
                                        cache: false,
                                        type: 'POST',
                                        data: { 'whatselected': data },
                                        url: getAppURL('sales/get_sales_account_with_the_same_currency'),
                                        success: function (data) {
                                            $('#acctLkupFrom').val(JSON.stringify(data["description"]).replace(/"/g, ""));
                                            $('#account2_id').val(JSON.stringify(data["id"]).replace(/"/g, ""));
                                        }
                                    });
                                    $.ajax({
                                        cache: false,
                                        type: 'POST',
                                        data: { 'whatselected': data },
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
        if ($('#account_id').val() != '') {
            $.ajax({
                cache: false,
                type: 'POST',
                data: { 'acc_id': $('#account_id').val() },
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
                    var datearray = (data.opening_date).split("-");
                    var new_date_format = datearray[2] + "-" + datearray[1] + "-" + datearray[0]
                    $("#opening_date").val(new_date_format);
                    $("#phone").val(data.phone);
                    $("#phone2").val(data.phone2);
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
    $('#add_acc_modal').on('click', function () {
        $("#accModalLabel").html("Add Account");
        $("#acc_id").val('');
        $("#account_type").val('Customer');
        var getselected = $("#account_type option:selected").text();
        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'whatselected': getselected },
            url: getAppURL('Accounts/fetchaccountnumberfromDatabase'),
            success: function (data) {
                $('#account_number').val(data);
            }
        });
        $.ajax({
            cache: false,
            type: 'POST',
            data: { 'code': "USD" },
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
        document.getElementById('error_acc_currency_id').innerHTML = "*Please select a cuurency*";
        document.getElementById('error_acc_currency_id').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.country.value == "") {
        document.getElementById('error_country').innerHTML = "*Please enter a country*";
        document.getElementById('error_country').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.city.value == "") {
        document.getElementById('error_city').innerHTML = "*Please enter a city*";
        document.getElementById('error_city').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.place.value == "") {
        document.getElementById('error_place').innerHTML = "*Please enter a place*";
        document.getElementById('error_place').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.street.value == "") {
        document.getElementById('error_street').innerHTML = "*Please enter a street*";
        document.getElementById('error_street').className = "alert alert-danger";
        count++;
    }
    var date1 = change_date_format(document.accountForm.opening_date.value);
    if (document.accountForm.opening_date.value == "" || isNaN(date1.getDate())) {
        document.getElementById('error_date').innerHTML = "*Please enter a valide date*";
        document.getElementById('error_date').className = "alert alert-danger";
        count++;
    }
    if (document.accountForm.phone.value == "") {
        document.getElementById('error_phone').innerHTML = "*Please enter a mobile number*";
        document.getElementById('error_phone').className = "alert alert-danger";
        count++;
    } else {
        if (document.accountForm.phone.value.trim() == "+961") {
            document.getElementById('error_phone').innerHTML = "*Please enter a mobile number*";
            document.getElementById('error_phone').className = "alert alert-danger";
            count++;
        } else {
            let phone_rep = document.accountForm.phone.value.trim().replace(" ", "");
            let first4 = phone_rep.slice(0, 4); // +961
            if (first4 == '+961') {
                let phone_nbs = phone_rep.replace("+961", "");
                if (parseInt(phone_nbs.length) < 7) {
                    document.getElementById('error_phone').innerHTML = "*mobile number must be at least 7 numbers after +961*";
                    document.getElementById('error_phone').className = "alert alert-danger";
                    count++;
                }
            } else {
                document.getElementById('error_phone').innerHTML = "*mobile number must start with +961*";
                document.getElementById('error_phone').className = "alert alert-danger";
                count++;
            }
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

function get_lebanese_cities() {
    var cities = ["Wakilni Beirut Office (Self Pickup)", "Dawra", "Hamra", "Ain el Remmaneh (Beirut)", "Baabda", "Bourj El Brajneh", "Chiyah", "Fayadieh", "Furn el-Chebbak", "Ghobeiry", "Hadath", "Haret Hreik", "Hazmieh (Baabda)", "Leilaky", "Louaizeh (Baabda)", "Mreijeh", "Tahweitat", "Jdeideh", "Achrafieh", "Ain el-Mreisseh", "Ain el Tineh", "Bab Idriss", "Bachoura", "Badaro", "Barbir", "Basta Fawka", "Basta Tahta", "Batrakiyi", "Beirut", "Bourj Abi Haidar", "Down Town", "Mathaf", "Medawar", "Minet el-Hosn", "Mousseitbeh", "Port of Beirut", "Ramle El Baida", "Ras-Beyrouth", "Rmeil", "Saifi", "Snoubra", "Verdun", "Wata Al Mousaitbe", "Zokak el-Blat", "Manara (Beirut)", "Rawda", "Amaret Chalhoub", "Antelias", "Bouchrieh", "Bourj Hammoud", "Dawra", "Dbayeh", "Dekouaneh", "Fanar", "Jal el-Dib", "Mansourieh", "Mar Mikhael", "Mar Roukoz", "Mezher", "Mkalles", "Nahr El Mot", "Sad el-Baouchrieh", "Sin el-Fil", "Zalka", "Hay el-Sellom", "Karantina", "Tarik Jdideh", "Bir Hasan", "Raouche", "Zarif", "Gemmayzeh", "Tallet El Khayyat", "Dahieh", "Mar Elias", "cola", "Sabtieh", "Jisr el Bacha", "Sanayeh", "hay madi", "Jnah", "Mcharafiyeh", "Zaydenieh", "cornich el mazeraa", "Madine Riyadiye", "New Rawda", "Tayouneh", "Sfeir", "noueiry", "kafaat", "Beirut Central District", "Mouawad", "Koraytem", "Beirut Digital District", "Clemenceau", "Sioufi", "Adlieh", "Jamhour", "Rweissat", "Karakol Druze", "Kaskas", "New Jdeideh", "betchay", "Airport Road", "Horch Tabet", "Bechara El Khoury", "Salim Slem", "kantari", "Sodeco", "Sakiet El Janzir", "Wetwat", "Sami El Solh", "Al Marfa'a", "Karakas", "Geitawi", "Galerie Semaan", "Aicha Bakkar", "Yarzeh", "Jisr El Wati", "Mar Takla", "Ras Al Nabeh", "Cornish el Naher", "Bourj Al Barajneh", "Ouzai", "Sassine", "Unesco", "Rweiss", "Malla", "Ras Beirut", "Barbour", "Sabra", "Quello Chocolate", "Rush & Reez", "Sports Lab", "KAH", "Saloume", "Mirna Chalouhi", "Tarek Saida El Ademe", "Mousaitbeh", "Safra", "Adma", "Adonis", "Ballouneh", "Ghazir", "Jounieh", "Tabarja", "Zouk Mikail", "Zouk Mosbeh", "Awkar", "Rabwe", "Bsalim", "Ghadir", "Rabieh", "Kfarhbab", "Al Maten", "dhour chweir", "Al Houssein Ftou7 Keserwen", "elissar", "Bzemar", "New Sehayle", "okaiby", "Bkennaya", "Kaslik", "deir el haref", "Maameltein", "Beit Misk", "Biakout", "Bouar", "Abdelli", "Ajdabra", "Al Ali", "Al Hiri", "Andoula", "Artez", "Assia", "Awra", "Batroun", "Bchaaleh", "Bkesmaya", "Chatine", "Chekka", "Chibtine", "Dabra", "Dahr Abou-Yaghi", "Dail", "Deir Bella", "Deir Chwah", "Deria", "Douma", "Eddeh", "Fadous", "Ftahat", "Ghouma", "Hadtoune", "Hamat", "Harbouna", "Hardine", "Helta", "Hery", "Ibrine", "Jdabra", "Jeb La", "Jrabta", "Jrane", "Kesya", "Kfa Rabida", "Kfar Abida", "Kfar Chliman", "Kfar Halda", "Kfar Hatna", "Kfar Hay", "Kfifane", "Kfour el-Arabi", "Koubba", "Kour", "Mar Mema", "Marj (Batroun)", "Mehmarche", "Mrah Az-Zeyat", "Mrah Chdid", "Mrah el-Hajj", "Racha", "Rachana", "Rachkida", "Ras Nhache", "Ras Senhache", "Selaata", "Sghar", "Smar Jbeil", "Souret", "Tannourine", "Thoum", "Toula", "Wata Houb", "Zane", "Abdine", "Barhelyoun", "Bazoon", "Bcharre", "Beit Mounzer", "Bkerkacha", "Blawza", "Bolla", "Braissat", "Dimane", "Hadath E Jebbeh", "Hadchit", "Hasroun", "Ibdine", "Maghroubella", "Qnat", "Qnayer", "Tourza", "Minieh", "Mrah As-Sraje", "Mrah Sfaira", "Mrah Sraje", "Nabi Youchah", "Namrine", "Nimrine", "Rihanieh", "Sfaira", "Tarane", "Wadi Nahleh", "Watieh", "Zaghr Tighrine", "Midane (Zgharta)", "A'aba", "Afsdik", "Ain Akrine", "Ajad Ebrine", "Amioun", "Anfeh", "Dahr el-Ain", "Dar Baachtar", "Dar Chmezzine", "Deddeh", "Elhat", "Fesdick", "Fieh", "Haret el-Khassa", "Hmayreh (Koura)", "Kaftoun", "Kalhat", "Kboula (Kusba)", "Kefraya (Kusba)", "Keftine", "Kfar Akka", "Kfar Hata (Koura)", "Kfar Hazir", "Kfar Kahel", "Kfar Saroun", "Kousba", "Metrit", "Nakhleh", "Rachdebbine", "Ras-Meska", "Ta'aboura", "Wata Fares", "Zakrouk", "Zakroun", "Zakzouk", "Terbol (Danniyeh)", "Achach", "Ain Toubine", "Ain Tourine", "Aitou", "Alma", "Arabet Kozhaya", "Ardeh", "Arjess", "Aslout", "Asnoun", "Dar Aya", "Ehden", "Ejbeh", "Garabache", "Haret el-Fouar", "Harf Ardeh", "Harf Miziara", "Haylan", "Hmaiss", "Ia'al", "Kadriyeh", "Karm Saddeh", "Kfar Aya", "Kfar Bachit", "Kfar Chakhna", "Kfar Dlakous", "Kfar Fou", "Kfar Hatta (Zgharta)", "Kfar Houra", "Kfar Seghab", "Kfar Yachit", "Kfar Zina", "Maasser", "Majd Laya (Zgharta)", "Mazraat el-Fraydiss", "Mazraat el-Nahr", "Mazraat Houka", "Mazraat Hreikess", "Mazraat Touffah", "Meziara", "Miryata", "Rachiine", "Raskifa", "Salib", "Saydeh", "Sebhel", "Serhel", "Toula Jebbeh", "zgharta", "Koura", "NORTH", "Bahsas", "darbaachar", "Bnachii", "bakhoun", "Danniyeh", "kfar saddeh", "bejdarfel", "Little Darlings Store", "Bednayel", "Mrayteh", "Zaarour", "Hosrayel", "Other", "Al Haddadine", "Al Hadid", "Al Mahatra", "An Nouri", "Jisrain", "Kobbeh", "Mina", "Qalamoun", "Roummaneh", "Souwaika", "Tabbaneh", "Tal Mohammad", "Tripoli", "Zahrieh", "moula", "RoseBullet", "Clothing Brand", "Ur Style", "Abou Samra", "Baddawi", "Dam w Farez", "Her Closet", "Meiteen Street", "Cotton Lane Clothing", "Aitouli", "Al Rihan", "Aramta", "Aray", "Aychieh", "Azour", "Baissour (Jezzine)", "Barta", "Beba", "Benweteh", "Bisri", "Bkassine", "Boslaya", "Bteddine El Lekech", "Choualik", "Har", "Haytoura", "Homsiyeh", "Hsanieh", "Jarmak", "Jensnaya", "Jernaya", "Jezzine", "Karkha", "Kattine (Jezzine)", "Kfar Jarra", "Kfarfalous", "Kfarhouna", "Lebaa", "Louaizeh (Jezzine)", "Machmouche", "Maknounieh", "Mharabiyeh", "Mjeidel (Jezzine)", "Mlikh", "Mrah el-Hibas", "Rimat - Chkadif", "Roum", "Sabbah", "Saydoun", "Sfaray", "Snaya", "Sojod", "Teid", "Wadi Baankoudine", "Wadi el-Laymoun", "Wadi Jezzine", "Zhalta", "Abra", "Addoussiyeh", "Adloun", "Ain el-Delb", "Aktanit", "Al Saksakieh", "Ankoun", "Anssarieh", "Arab el-Jal", "Arkeh", "Arzeh", "Arzi", "Darbessim", "Derb el-Simme", "Gharayeb", "Ghassaniyeh", "Ghaziyeh", "Hageh", "Haret Saida", "Hlaliyeh", "Jenejleya", "Ka'a kayet Snoubar", "Kannarit", "Kariyeh", "Kawssariet Sayad", "Kefraya (Saida)", "Kfar Bit", "Kfar Chelal", "Kfar Hatta (Saida)", "Kfar Hitti", "Kfar Melki (Saida)", "Kharayeb", "Khartoum", "Khazize", "Knaytra", "Krayyeh", "Loubiyeh", "Maamariyeh", "Maghdoucheh", "Majd el-Youne", "Marwaniyeh", "MiyehWe Miyeh", "Nejjariyeh", "Saida", "Saksakiyeh", "Salhiyeh", "Sarafand", "Tabbaya", "Tanbourite", "Teffahta", "Zeghdraya", "Zitta", "Zrariyeh", "Kfar Houne", "Insariyeh", "babliye", "Msayleh", "Bayssarieh", "Midane (Jezzine)", "Karha (Baalback)", "Kala'a (Baalback)", "Tarchich", "Ain Baniyeh", "Ain Bourday", "Ain Joz", "Ain Saouda", "Akidiyeh", "Al Ain", "Chaet", "Cheaibi", "Chlifa", "Chmais", "Chmeis", "Chmestar", "Dar Wassiha", "Deir el-Ahmar", "Douriss", "el-Ain", "Ersal", "Fakiha", "Falaoui", "Geba'a", "Ghafra", "Hadeth Baalbeck", "Hame", "Hazin", "Hoch Nabi", "Hoch Rafika", "Hoch Sneid", "Hoch Tal Safiyeh", "Hoch Zahab", "Hor Tehla", "Hrebta", "Ia'at", "Jaba'a", "Jbaniyeh", "Jboula", "Jenta", "Ka'a", "Kaddam", "Kal Sabeh", "Kaled Sabeh", "Kasser Naba", "Kfar Dabach", "Kfar Dan", "Kfar Diche", "Khodr", "Khreybeh", "Kneisseh (Baalback)", "Laboueh", "Lebbaya", "Maaraboun", "Majd Aloun", "Makneh", "Makni", "Masnah Zahra", "Mazraat Abou Slaybi", "Mazraat Beit Matar", "Mazraat Beit Slaybi", "Mazraat Dalil", "Mazraat el-Soueidan", "Mazraat Sayed", "Mazraat Soueidan", "Mazraat Tout", "Mekrak", "Nabha Damdoum", "Nabha Harfouche", "Nabha Kleili", "Nabha Mahfara", "Nabi Chiit", "Nabi Inaam", "Nabi Osman", "Nabi Rachadeh", "Nabi Sbat", "Nahleh", "Nakra", "Nye Rachadeh", "Ram", "Ramassa", "Ras Baalbeck", "Rich", "Riha", "Sabbouba", "Sadiyeh", "Sarhine", "Sayaniyeh", "Sefri", "Soleh", "Talya", "Taraya", "Temnine", "Tfayel", "Tibeh", "Tmenin", "Toufikiyeh", "Wadi Fa'ara", "Wadi Mechmechi", "Wadi Safa Charki", "Wadi Zein (Baalback)", "Yahfoufa", "Yammouni", "Younine", "Younissiyeh", "Zaboud", "Zarazir", "Ain Zabad", "Aitanit", "Terbol (Zahle)", "Charbin", "Chawaghir", "Fissane", "Haret Maasser", "Harika", "Hermel", "Hmayreh (Hermel)", "Hoch Sayed", "Jawar Hachich", "Kasr-Fissane", "Kasser", "Khrayeb", "Knafez", "Kouwakh", "M'aysra", "Mazraat Beit Tacham", "Mazraat Fakih", "Mazraat Saged", "Mrah el-Ain", "Nayra", "Sahlat Ma'a", "Wadi Asse", "Wadi Bneit", "Wadi Karm", "Wadi Rattal", "Wadi Turkman", "Zaghrin", "Ablah", "Ain Kfarzabad", "Ali el-Nahri", "Anjar", "Chtaura", "Deir el-Ghazal", "Delhamiyeh", "Ferzol", "HajjehJbeili", "Hay el-Fikati", "Hazerta", "Hoch el-Oumara", "Hoch Ghanam", "Hoch Hala", "Hoch Zarahneh", "Horch Hala", "Jalala", "Jdita", "Ka'a el-Rim", "Kab Elias", "Kab Ousseh", "Kamel", "Karak", "Kfar Zabad", "Khodr Bey", "Koussaya", "Maalaka", "Majd el-Anjar", "Maksi", "Mar Antonios", "Massa", "Mreijat (Zahle)", "Nabi Aylla", "Nassiriyeh", "Niha (Zahle)", "Rahit", "Rassiyeh", "Rayak", "Saadnayel", "Taalabaya", "Taanayel", "Tal el-Akhdar", "Touweiti", "Wadi Arayech", "Wadi el-Delm", "Youghon Oloke", "Zahle", "Baalbak", "Bekaa", "Sawfar", "Barelias", "Ksara", "Manara (West Bekaa)", "Hasbaya", "Ain Ata (Baalbeck)", "Ain Zebdeh", "Ammik (Bekaa)", "Ana", "Dakkouh", "Deir el-'Achaer", "Ghazzeh", "Hoch el-Harimeh", "Jeb Jenine", "Kalya", "Kamed el-Loz", "Karaoun", "Kefraya (Bekaa)", "Kherbet Kanafar", "Lala", "Machghara", "Mansoura", "Marj (Bekaa)", "Racyay", "Rafid", "Saghbine", "Sohmor", "Souayra", "Sultan Yaacoub", "Tal Zanoub", "Yohmor", "Zlaya", "Kfeir", "Marj el-Zouhour", "Mimes", "Al Rawda West Bekaa", "West Bekaa", "Abey", "Aghmid", "Ain Anoub", "Ain Dara", "Ain El Saydeh", "Ain Enoub", "Ain Jdideh", "Ain Ksour", "Ain Trez", "Ainab", "Aitat", "Aley", "Aramoun", "Aytate (Aley)", "Baawerta", "Badghan", "Baissour (Aley)", "Bassatine", "Bchamoun", "Bdadoun", "Bemkine", "Bennieh", "Bhamdoun", "Bhamdoun El Mhatta", "Bkhechtey", "Bleibel", "Bmahray", "Bserrine", "Bsouss", "Btalloun", "Btater", "Chanay", "Charoun", "Chartoun", "Chatiyeh", "Chemlan", "Choueifat", "Deir Koubel", "Dfoun", "Doueir el-Remmane", "Habrmoun", "Houmal", "Ighmid", "Kahaleh", "Keyfoun", "Kfar Aamey", "Kfar Amya", "Kfar Matta", "Maasriti", "Majd el-Baana", "Majd el-Behna", "Majd Laya (Aley)", "Mecherfeh", "Rechmaya", "Remhala", "Roueisset el-Nehman", "Sofar", "Souk el-Gharb", "Ain Mouaffaq", "Araya", "Arbaniyeh", "Chebaniyeh", "Deir el-Harf", "el-Qarieh", "Falougha", "Hammana", "Haret Hamzeh", "Jouar el-Haouz", "Kfar Chima", "Kfar Selouan", "Khalouate", "Kneisseh (Baabda)", "Kornayel", "Kossaibeh", "Koubbayeh", "Qoubbei", "Qsaibeh", "Quorayeh", "Ras el-Harf", "Ras el-Metn", "Rouayset el-Ballout", "Salima", "Sebnay", "Wadi Chahrour", "Kala'a (Baabda)", "Ain Ba'al (Chouf)", "Ain Kani", "Ain We Zein", "Ain Zhalta", "Al Wardaniyeh", "Amatour", "Ammik (Chouf)", "Anout", "Atrine", "Baakline", "Baasir", "Baatharan", "Barja", "Barouk", "Bater", "Batloun", "Bchetfine", "Beiteddine", "Bireh", "Botme", "Bsaba El Chouf", "Chehim", "Chourite", "Daher Al Mghara", "Dalhoun", "Damour", "Daraya (Chouf)", "Debbieh", "Deir Baba", "Deir Dourit", "Deir el-Kamar", "Deir el-Moukhales", "Deir Koucheh", "Dmayt", "Fouara", "Freidis (Chouf)", "Gharifeh", "Haret Janbal", "Hasrout", "Jahlieh", "Jbaa (Chouf)", "Jdeidet el-Chouf", "Jidra", "Jiyeh", "Joun", "Kahlounieh", "Ketermaya", "Kfar Fakoud", "Kfar Katra", "Kfar Nabrakh", "Kfar Nis", "Kfarhim", "Khrabyeh", "Knayse", "Maasser Beit Eddine", "Maasser El Chouf", "Majd el-Meouch", "Marj Barja", "Marsati", "Mazboud", "Mazraat El Chouf", "Mazraet el-Dahr", "Mechref", "Mersty", "Mghayrie", "Moughairieh", "Mouhtakara", "Mreyjat (Chouf)", "Mtolleh", "Niha (Chouf)", "Rmeileh", "Semkaniyeh", "Wadi Bnehley", "Wadi el-Set", "Wadi el-Zineh (Chouf)", "Wardanieh", "Zaarourieh", "Sibline", "Khalde", "Chouf", "Mount Lebanon", "Nehme", "dohet el hoss", "Dohat aramoun", "haret el naameh", "eklim el kharoub", "Kmatiye", "borjen", "The Pavement Warehouse", "Bekaata Chouf", "Ain el Remmaneh (Aley)", "Jadra", "Sarahmoul", "Saadiyat", "Kayfoun", "Kabrechmoun", "Abadieh", "Klayaat (Kesserwan)", "Dlaibeh", "el-Qalaa", "Kortada", "Achkout", "Adra", "Ain el-Rihani", "Aintoura", "Ajaltoun", "Akaybeh", "Azra", "Batha", "Bekaatet Achkout", "Bezhel", "Bqaatouta", "Bwar", "Chahtoul", "Chnaniir", "Daphneh", "Daraoun", "Daraya (Kesserwan)", "Dlebta", "Faraya", "Fatqa", "Feytroun", "Ghebaleh", "Ghedrass", "Ghineh", "Ghosta", "Haret Sakhr", "Harissa", "Herhraya", "Hiyata", "Hrajel", "Hsein", "Jdeidet Ghazir", "Jeita", "Jouret Bedrane", "Jouret el-Tourmos", "Kfar Yassine", "Kfar Zebian", "Kfour", "Maayssra", "Mayrouba", "Mazraat Kfardebiane", "Qattin", "Raachine", "Reyfoun", "Sahel Alma", "Sarba (Kesserwan)", "Sehayleh", "Wata el Jawz", "Yahchouche", "Zaaytre", "Zeytoun'", "Ain Aar", "Ain Alak", "Ain el Kharroubeh", "Ain el-Safsaf", "Ain Saadeh", "Atchaneh", "Ayroune", "Baabdat", "Baskinta", "Beit Chabeb", "Beit Mery", "Bhanness", "Bhersaf", "Bikfaiya", "Bolonia", "Broumana", "Bteghrine", "Chawiya", "Choueir", "Chrine", "Dahr el-Hassin", "Dahr el-Souan", "Deychounieh", "Douar", "Ein Zeitouneh", "el-Kaakour", "el-Khalleh", "Freikeh", "Hbous", "Himlaya", "Jouar", "Jouret el-Ballout", "Ka'a Kour", "Kanabat", "Kfar Akab", "Kfar Tey", "Khonchara", "Koneitra", "Kornet Chehwane", "Majd el-Tarchich", "Majzoub", "Mar Moussa", "Marjaba", "Maska", "Mayassa", "Mazraat Yachouh", "Mchikha", "Moheidse (Maten)", "Mrouj", "Mtaileb", "Mtein", "Nabay", "Naccache", "Roumieh", "Sakiet el-Misk", "Sfeili", "Wata el-Mrouj", "Zabougha", "Zarhoun", "Zeghrine", "Zekrit", "Zouk el-Kharab", "Zouk Kharab", "Daychounieh", "Metn", "Beit el Chaar", "Monteverde", "dahr el bashik", "cornet el hamra", "Kesserwen", "Biyada", "Nammoura", "Ain Najem", "Tamich", "Naher el Kaleb", "Beit el Kiko", "Dik El Mehdi", "Maarab", "Faqra", "Telal Ain Saadeh", "Abboudiyeh", "Abdeh", "Aidamoun", "Ain Tanta", "Ain Yaacoub", "Ain Zaite", "Akkar el-Atika", "Akroum", "Al Abdeh", "Al Hid", "Al Hmayra", "Al Sahleh", "Ammar Bikat", "Andket", "Chadra", "Chakdouf", "Chane", "Charbila", "Cheikh Mohamad", "Cheikh Taba", "Cheikh Znad", "Chikhlar", "Chtaheh", "Daghla", "Daher", "Dahr Lisseineh", "Daousseh", "Darine", "Debabieh", "Deir Janine", "Doueir Adouieh", "Edbel", "Fneidek", "Freidess (Akkar)", "Gebrayel", "Ghowaya", "Ghreibeh", "Ghzaileh", "Habchit", "Haissa", "Haizouk", "Hakour", "Hakr Cheikh Taba", "Hakr Dahiri", "Halba", "Haysseh", "Hed", "Hitla", "Hmayreh (Akkar)", "Hneider", "Hocheb", "Hosniyeh", "Howeiche", "Hrar", "JdeidehJoumeh", "JdeidehKatih", "Kachlak", "Kantra", "Karm Asfour", "Katelbeh", "Kboula (Akkar)", "Kfar Harra", "Kfar Melki (Akkar)", "Kfar Noun", "Kfar Toun", "Kherbet Char", "Khorbet Daoud", "Khorbet Jrad", "Khorbet Jundi", "Kiniya", "Kloud Bakieh", "Kneisseh (Akkar)", "Kobayat", "Kobbet Chamra", "Korkef", "Korneh", "Koucha", "Krayat", "Kroum Arab", "Kwachra", "Machta Hammoud", "Machta Hassan", "Majd Ala", "Majd El (Akkar)", "Mar Touma", "Mart Moura", "Massoudieh", "Mazraat Baldeh", "Mechha", "Mechmech (Akkar)", "Mekhtlef", "Memneh", "Minyara", "Mkaibleh", "Mkaiteh", "Mounjez", "Mounsa", "Mrah el-Khokh", "Nahriyeh", "Nfeisseh", "Noura", "Oueinate", "Ouyoun", "Rahbeh", "Rammah", "Saadine", "Safinet el-Dreib", "Sayssouq", "Sehleh", "Seissouk", "Semakiyeh", "Sfeinet Katih", "Sindiyaneh", "Soueisseh", "Srar", "Tacheh", "Tal Abbas", "Tal Bibeh", "Tal Bireh", "Tal Hemayra", "Tal Mehyan", "Talleh", "Tekrit", "Tel Meyane", "Tleil", "Wadi el-Hour", "Wadi Jamous", "Wadih Khaled", "Zawarib", "Zouk", "Zouk el-Hossayni", "Zouk Hadareh", "Zouk Hassineh", "Zouk Hbalseh", "Zouk Mekacharine", "Karha (Akkar)", "Aazki", "Assoune", "Deir Ammar", "Deir Nbouh", "Dibiil", "Hakl el-Azimi", "Harf Siyad", "Hazmieh (Danniyeh)", "Houwara", "Izal", "Kahf el-Malloul", "Kammamine", "Karm el-Mehr", "Karsita", "Karsouna", "Kattine (Danniyeh)", "Kfar Bibnine", "Kfar Chellam", "Kfar Chellane", "Kfar Habou", "Kharnoub", "Korhaya", "Krin", "Limar", "Markabta", "Mazraet Artousa", "Sir Denniyeh", "Klayaat (Akkar)", "Akkar", "Cheikh Ayash", "Abbassiyeh", "Chaat", "Aita el-Zot", "Chacra", "Deir Antar", "Deir Kantar", "Doubiyeh", "Froun", "Ghandouriyeh", "Haddatha", "Haris", "Jmaijmeh", "Kafra", "Kfar Doubine", "Klaouiyeh", "Safad el-Batikh", "Sultanieh", "Tebnine", "Yater", "Ain Ba'al (Tyre)", "Ain Ebel", "Alma el-Chaab", "Arzoune", "Aytite (Tyre)", "Chabiyeh", "Chahour", "Cheaytieh", "Chehabiyeh", "Deb'al", "Deir Ames", "Deir Dghaya", "Deir Kanoun", "Deir Kifa", "Halloussiyeh", "Haniyeh", "Jbal Boutoum", "Jouwaya", "Klayleh", "Maarakeh", "Maaroub", "Maarouf", "Mahrouni", "Majd el-Zoun", "Malekyeh", "Mansouri", "Mazraat Mechref", "Mjadel (Tyre)", "Qana", "Rachkananey", "Ras el-Ain", "Rmadiyeh", "Sadikine", "Sal'a", "Smaeyeh", "Tyre", "Srifa", "Tayer Flisseh", "Tayr Debba", "Toura", "Ynouh", "Zabkine", "South", "Jnoub", "bint jbeil", "Rmeich", "bazouriyeh", "dewdieh", "Yaroun", "naqoura", "chaqra", "Hanaway", "Barich", "Aitroun", "Kounine", "Baraachit", "Bflay", "Hariss", "Adasyeh", "Adchit", "Bani Hayann", "Blat", "Blida", "Bourj El Moulouk", "Debbine", "Deir Mimas", "Deir Syriane", "Ebel El Saky", "Houla", "Jdeidet Marjeyoun", "Kab Rikha", "Kantara", "Kfarkila", "Khiam", "Klayaa", "Majd el-Sel", "Majdel Selem", "Markaba", "Mays el Jabal", "Rab Thalathine", "Rachaya el-Foukhar", "Sawaneh", "Souwaneh", "Tallousseh", "Taybeh", "Touline", "Wazzany", "A'aba", "Ain Boussouar", "Ain Qana", "Al Sharkiyeh", "Ansar", "Arab Salim", "Azzeh", "Charqiyeh", "Choukine", "Deir el-Zahrani", "Doueir", "Habbouche", "Harouf", "Houmine", "Jarjouh", "Jbaa (Nabatiyeh)", "Jeb Chite", "Kfar Fila", "Kfar Remmane", "Kfar Sir", "Kfar Tebnit", "Ksaybeh", "Mayfaidoun", "Nabatiyeh", "Nemayreh", "Nmeiriyeh", "Qaaqayiet el-Jisr", "Roumine", "Sarba (Nabatiyeh)", "Sinay", "Sir el-Gharibeh", "Zaoutar", "Zebdine", "Zefta", "Aiha", "Ain Arab", "Ain Ata (Rachaiya)", "Ain Harcha", "Aita el-Fakhar", "Akbeh", "Dahr el-Ahmar", "Deir Achayer", "Hawche", "Heloueh", "Kawkaba", "Kfar Dnisse", "Kfar Kouk", "Kfar Mechki", "Kherbet Rouha", "Majd el-Balhis", "Mdawkha", "Moheidseh (Rachaiya)", "Rachaya", "Tannoura", "Yanta", "Kfar Tibnit", "Marjayoun", "jibchit", "Chebaa", "Arnoun", "Kfarchuba", "Zoueitini", "Afka", "Ain el-Ghoaybeh", "Akoura", "Almat", "Assaouneh", "Chamat", "Chamout", "Eddeh", "Ehmej", "Fatreh", "Feghal", "Fidar", "Ghalboun", "Habil", "Halate", "Hjoula", "Hsoun", "Jadayel", "Jaj", "Jalisseh", "Janneh", "Jbeil", "Kartaba", "Kattara", "Kfar Keddeh", "Kfar Mashoun", "Kfoun", "Lassa", "Majd El (Jbeil)", "Mar Sarkis", "Mayfouk", "Mazra'at el-Syad", "Mchan", "Mechmech (Jbeil)", "Mghayri", "Mounsef", "Nahr Ibrahim", "Obeidad", "Ramout", "Ras Osta", "Saki Rechmaya", "Tartej", "Torzaya", "Amchit", "Berbara", "annaya", "mastita", "Byblos", "bchelleli", "Gherfine"];
    return cities;
}

function get_mobile_country_code(country) {
    var mobile_codes = { "BD": "880", "BE": "32", "BF": "226", "BG": "359", "BA": "387", "BB": "+1-246", "WF": "681", "BL": "590", "BM": "+1-441", "BN": "673", "BO": "591", "BH": "973", "BI": "257", "BJ": "229", "BT": "975", "JM": "+1-876", "BV": "", "BW": "267", "WS": "685", "BQ": "599", "BR": "55", "BS": "+1-242", "JE": "+44-1534", "BY": "375", "BZ": "501", "RU": "7", "RW": "250", "RS": "381", "TL": "670", "RE": "262", "TM": "993", "TJ": "992", "RO": "40", "TK": "690", "GW": "245", "GU": "+1-671", "GT": "502", "GS": "", "GR": "30", "GQ": "240", "GP": "590", "JP": "81", "GY": "592", "GG": "+44-1481", "GF": "594", "GE": "995", "GD": "+1-473", "GB": "44", "GA": "241", "SV": "503", "GN": "224", "GM": "220", "GL": "299", "GI": "350", "GH": "233", "OM": "968", "TN": "216", "JO": "962", "HR": "385", "HT": "509", "HU": "36", "HK": "852", "HN": "504", "HM": " ", "VE": "58", "PR": "+1-787 and 1-939", "PS": "970", "PW": "680", "PT": "351", "SJ": "47", "PY": "595", "IQ": "964", "PA": "507", "PF": "689", "PG": "675", "PE": "51", "PK": "92", "PH": "63", "PN": "870", "PL": "48", "PM": "508", "ZM": "260", "EH": "212", "EE": "372", "EG": "20", "ZA": "27", "EC": "593", "IT": "39", "VN": "84", "SB": "677", "ET": "251", "SO": "252", "ZW": "263", "SA": "966", "ES": "34", "ER": "291", "ME": "382", "MD": "373", "MG": "261", "MF": "590", "MA": "212", "MC": "377", "UZ": "998", "MM": "95", "ML": "223", "MO": "853", "MN": "976", "MH": "692", "MK": "389", "MU": "230", "MT": "356", "MW": "265", "MV": "960", "MQ": "596", "MP": "+1-670", "MS": "+1-664", "MR": "222", "IM": "+44-1624", "UG": "256", "TZ": "255", "MY": "60", "MX": "52", "IL": "972", "FR": "33", "IO": "246", "SH": "290", "FI": "358", "FJ": "679", "FK": "500", "FM": "691", "FO": "298", "NI": "505", "NL": "31", "NO": "47", "NA": "264", "VU": "678", "NC": "687", "NE": "227", "NF": "672", "NG": "234", "NZ": "64", "NP": "977", "NR": "674", "NU": "683", "CK": "682", "XK": "", "CI": "225", "CH": "41", "CO": "57", "CN": "86", "CM": "237", "CL": "56", "CC": "61", "CA": "1", "CG": "242", "CF": "236", "CD": "243", "CZ": "420", "CY": "357", "CX": "61", "CR": "506", "CW": "599", "CV": "238", "CU": "53", "SZ": "268", "SY": "963", "SX": "599", "KG": "996", "KE": "254", "SS": "211", "SR": "597", "KI": "686", "KH": "855", "KN": "+1-869", "KM": "269", "ST": "239", "SK": "421", "KR": "82", "SI": "386", "KP": "850", "KW": "965", "SN": "221", "SM": "378", "SL": "232", "SC": "248", "KZ": "7", "KY": "+1-345", "SG": "65", "SE": "46", "SD": "249", "DO": "+1-809 and 1-829", "DM": "+1-767", "DJ": "253", "DK": "45", "VG": "+1-284", "DE": "49", "YE": "967", "DZ": "213", "US": "1", "UY": "598", "YT": "262", "UM": "1", "LB": "961", "LC": "+1-758", "LA": "856", "TV": "688", "TW": "886", "TT": "+1-868", "TR": "90", "LK": "94", "LI": "423", "LV": "371", "TO": "676", "LT": "370", "LU": "352", "LR": "231", "LS": "266", "TH": "66", "TF": "", "TG": "228", "TD": "235", "TC": "+1-649", "LY": "218", "VA": "379", "VC": "+1-784", "AE": "971", "AD": "376", "AG": "+1-268", "AF": "93", "AI": "+1-264", "VI": "+1-340", "IS": "354", "IR": "98", "AM": "374", "AL": "355", "AO": "244", "AQ": "", "AS": "+1-684", "AR": "54", "AU": "61", "AT": "43", "AW": "297", "IN": "91", "AX": "+358-18", "AZ": "994", "IE": "353", "ID": "62", "UA": "380", "QA": "974", "MZ": "258" };
    var code = mobile_codes[country];
    if (code[0] != "+") {
        code = "+".concat(code);
    }
    return code;
}
