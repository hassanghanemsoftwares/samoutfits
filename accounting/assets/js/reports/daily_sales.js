jQuery(document).ready(function () {
    inputToDatepickerA($('#date'));
});

function validation(){
    var count = 0;
    var date1 = change_date_format(document.form.date.value);
	if (document.form.date.value == "" || isNaN(date1.getDate())) {
		document.getElementById('error_date').innerHTML = "*Please enter a valide date*";
		document.getElementById('error_date').className = "alert alert-danger";
		count++;
	}
    if (document.form.users.value == "") {
		document.getElementById('error_users').innerHTML = "*Please select user/users*";
		document.getElementById('error_users').className = "alert alert-danger";
		count++;
	}
    if (count > 0) {
		return false;
	}else{
        return true;
    }
}

function change_date_format(date) {
	var datearray = date.split("-");
	var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2]
	var date_new = new Date(new_date_format);
	return date_new;
}