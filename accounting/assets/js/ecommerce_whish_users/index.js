jQuery(document).ready(function () {
  window.whish_usersDT = null;

  /***************************************************/
  var $dtTbl = $("#whish_usersTbl");
  BuildDataTableColumnSearch($dtTbl, "whish_usersDT");
  EnhanceDataTableSearch(
    (window.whish_usersDT = $dtTbl.DataTable({
      orderCellsTop: true,
      fixedHeader: { headerOffset: 0 },
      searchDelay: _GST,
      lengthMenu: _dtLengthMenu,
      serverSide: true,
      processing: true,
      scrollX: false,
      deferLoading: $dtTbl.attr("data-num-rows"),
      order: [[0, "asc"]],
      ajax: {
        url: getAppURL("ecommerce/whish_users"),
        type: "GET",
        searchDelay: _GST,
      },
      columns: [
        { data: "eco_user_name" },
        { data: "account_number" },
        { data: "birthdate" },
        { data: "phone" },
      ],
      columnDefs: [],
    })),
    2048
  );
});
