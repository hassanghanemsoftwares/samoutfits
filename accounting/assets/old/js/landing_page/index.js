jQuery(document).ready(function () {
  $("#category_filter").on("change", function (e) {
    window.location.href = "ecommerce/landing_page/" + $(this).val();
  });
  $("#body_rows tr").each(function (index, tr) {
    autoCompleteItem($(this).find("input.r-select_item"));
  });
});

function autoCompleteItem($itemLookup) {
  let category = $("#category_filter").val();
  $itemLookup
    .on("keydown", function (e) {
      if (e.keyCode == 13) {
        // do not submit form on press of return key
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        return false;
      }
    })
    .autocomplete({
      serviceUrl: getAppURL("items/lookup_items_by_category_landing_page_editor/"+category),
      appendTo: $itemLookup.parent()[0],
      noCache: true,
      showNoSuggestionNotice: true,
      triggerSelectOnValidInput: false,
      minChars: 2,
      autoSelectFirst: true,
      preventBadQueries: false,
      noSuggestionNotice: "Sorry, no matching results",
      type: "GET",
      dataType: "JSON",
      deferRequestBy: 480,
      onSearchStart: function (params) {},
      onSelect: function (result) {
        // alert(result.row.id);
        $itemLookup.parent().find("input.r-item_id").val(result.row.id);
      },
      transformResult: function (response) {
        return {
          suggestions: jQuery.map(response, function (item) {
            return { value: item.suggestion, row: item };
          }),
        };
      },
    });
}
