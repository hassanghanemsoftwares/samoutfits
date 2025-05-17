jQuery(document).ready(function () {
  window.newsletterDT = null;

  var $dtTbl = $("#newsletterTbl");
  BuildDataTableColumnSearch($dtTbl, "newsletterDT");

  var table = $dtTbl.DataTable({
    fixedHeader: true,
    orderCellsTop: true,
    searchDelay: _GST,
    lengthMenu: _dtLengthMenu,
    serverSide: true,
    processing: true,
    scrollX: true,
    scrollY: "400px",
    deferLoading: $dtTbl.attr("data-num-rows"),
    order: [[0, "asc"]],
    ajax: {
      url: getAppURL("ecommerce/newsletter_subscribers"),
      type: "GET",
      searchDelay: _GST,

    },
    columns: [
      { data: "email" },
      { data: "created_at" }
    ],
    stateSave: true,
    stateSaveCallback: function (settings, data) {
      localStorage.setItem("DataTables_" + settings.sInstance, JSON.stringify(data));
    },
    stateLoadCallback: function (settings) {
      return JSON.parse(localStorage.getItem("DataTables_" + settings.sInstance));
    },
    stateSaveParams: function (settings, data) {
      var temp = {};
      $("#newsletterTbl thead").find("tr:eq(1)").find("input").each(function () {
        temp[$(this).attr("placeholder")] = document.getElementById($(this).attr("id")).value;
      });
      data.colsFilter = temp;
      console.log(temp);
    },
    stateLoadParams: function (settings, data) {
      $.each(data.colsFilter, function (key, val) {
        $('#newsletterTbl thead input[placeholder="' + key + '"]').val(val);
      });
    },
    stateLoaded: function () {
      $dtTbl.DataTable().ajax.reload();
    },
  });

  EnhanceDataTableSearch((window.newsletterDT = table), 2048);

  $("#reset_filters").on("click", function () {
    $("#newsletterTbl thead").find("tr:eq(0)").find("input").each(function () {
      document.getElementById($(this).attr("id")).value = "";
    });
    var table = $("#newsletterTbl").DataTable();
    table.search("").columns().search("").draw();
  });

  inputToDatepickerA($("#dispatch_date"));
});
