let $accountForm;
jQuery(document).ready(function ($) {
	$accountForm = $('form#accountForm');
	inputToDatepickerA($('#opening_date', $accountForm));
	$(function () {
		if (window.location.search.indexOf('TransAddAccount=1') != -1) {
			document.getElementById('navbardiv').style.display = "none";
			document.getElementById('listbtn').style.display = "none";
			var navimage = document.createElement("div");
			navimage.className="navbar-header";
			var img = document.createElement('img');
			img.src = getAppURL('assets/images/logo.png');
			img.id="logo";
			navimage.appendChild(img);
			document.getElementById('navbar').appendChild(navimage);
		}
	})
	$('#accountForm').submit(function (e) {
		e.preventDefault(); // don't submit multiple times
		if(validation() == true){
			this.submit();
			setTimeout(function () { // Delay for Chrome
			window.close();
		}, 100);
		}
	});
});
