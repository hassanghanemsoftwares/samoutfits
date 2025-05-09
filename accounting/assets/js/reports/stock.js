jQuery(document).ready(function ($) {
    autoCompleteItem();
    inputToDatepickerA($('#from_date, #to_date'));
});

function autoCompleteItem() {
	$('#select_item').on('keydown', function (e) {
		if (e.keyCode == 13) {
			// do not submit form on press of return key
			e.preventDefault();
			e.stopPropagation();
			e.stopImmediatePropagation();
			return false;
		}
	}).autocomplete({
		serviceUrl: getAppURL('purchases/lookup_items'), appendTo: $('#select_item').parent()[0],
		noCache: true, showNoSuggestionNotice: true, triggerSelectOnValidInput: false, minChars: 2, autoSelectFirst: true, preventBadQueries: false,
		noSuggestionNotice: 'Sorry, no matching results', type: 'GET', dataType: 'JSON', deferRequestBy: 480,
		onSearchStart: function (params) {
		}, onSelect: function (result) {
            $('#item_id').val(result.row.id);
		}, transformResult: function (response) {
			return {
				suggestions: jQuery.map(response, function (item) {
					return { value: item.suggestion, row: item };
				})
			};
		}
	});
}

function validation(){
    var count =0;
    if($('#item_id').val() == ''){
        document.getElementById('error_item_id').innerHTML = "*Please select an item*";
		document.getElementById('error_item_id').className = "alert alert-danger";
		count++;
	}
    if ($('#from_date').val() != '') {
		var date1 = change_date_format($('#from_date').val());
		if (isNaN(date1.getDate())) {
			document.getElementById('error_from_date').innerHTML = "*Please enter a valide date*";
			document.getElementById('error_from_date').className = "alert alert-danger";
			count++;
		}
	}
    if ($('#to_date').val() != '') {
		var date2 = change_date_format($('#to_date').val());
		if (isNaN(date2.getDate())) {
			document.getElementById('error_to_date').innerHTML = "*Please enter a valide date*";
			document.getElementById('error_to_date').className = "alert alert-danger";
			count++;
		}
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