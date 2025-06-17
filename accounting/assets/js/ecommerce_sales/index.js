var temp;
jQuery(document).ready(function () {
  window.salesDT = null;
  let dtActionsHTML =
    '<a href="' +
    getAppURL("%t/edit/") +
    '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
    '<a href="javascript:void(0);" onclick="confirmDelete(\'' +
    getAppURL("sales/delete/") +
    '%d\')" class="btn bt-link btn-xs" title="Delete">' +
    '<i class="glyphicon glyphicon-trash text-danger"></i></a>' +
    '<a href="' +
    getAppURL("sales/check/") +
    '%d" class="btn bt-link btn-xs" title="View"><i style="color:#282828;" class="glyphicon glyphicon-search"></i></a>' +
    '<a href="' +
    getAppURL("sales/exchange/") +
    '%d" class="btn bt-link btn-xs" title="Exchange"><i style="color:#282828;" class="glyphicon glyphicon-transfer"></i></a>' +
    '<a href="' +
    getAppURL("%r/") +
    '%d" class="btn bt-link btn-xs" title="Return Sales"><i style="color:#282828;" class="glyphicon glyphicon-retweet"></i></a>' +
    // WhatsApp Copy Message button
    '<a href="javascript:void(0);" onclick="copyWhatsAppMsg(%d)" class="btn bt-link btn-xs" title="Copy WhatsApp Message">' +
    '<i style="color:#25D366;" class="glyphicon glyphicon-comment"></i></a>' +
    // Download Order Summary button
    '<a href="javascript:void(0);" onclick="download_summary(%d)"  class="btn bt-link btn-xs" title="Download Order Summary" download>' +
    '<i style="color:#282828;" class="glyphicon glyphicon-download-alt"></i></a>' +
    '<input type="text" value="%d" hidden>';

  let statusHTML = "<p>%s</p>";
  /***************************************************/
  var $dtTbl = $("#salesTbl");
  BuildDataTableColumnSearch($dtTbl, "salesDT");
  EnhanceDataTableSearch(
    (window.salesDT = $dtTbl.DataTable({
      orderCellsTop: true,
      fixedHeader: { headerOffset: 0 },
      searchDelay: _GST,
      lengthMenu: _dtLengthMenu,
      serverSide: true,
      processing: true,
      scrollX: true,
      scrollY: "350px",
      deferLoading: $dtTbl.attr("data-num-rows"),
      order: [[0, "asc"]],
      ajax: {
        url: getAppURL("ecommerce/sales"),
        type: "GET",
        searchDelay: _GST,
        data: function (params) {
          let formData = jQuery("#dtAdvFltrs").serializeArray();
          for (i in formData) {
            params[formData[i].name] = formData[i].value;
          }
        },
        complete: function () {
          calculate_total();
        },
      },
      columns: [
        { data: "account_nb1" },
        { data: "trans_date" },
        { data: "trans_type" },
        { data: "status" },
        { data: "auto_no" },
        { data: "account1" },
        { data: "payment_method_gateway" },
        { data: "payment_method_gateway_status" },
        { data: "subtotal" },
        { data: "delivery_charge" },
        { data: "total" },
        { data: "trans_qty" },
        { data: "status2" },
        { data: "value_date" },
        { data: "driver" },
        { data: "user" },
        { data: "id" },
      ],
      columnDefs: [
        {
          targets: 16,
          orderable: false,
          createdCell: (td, Id, row) => {
            let actions = dtActionsHTML
              .replace(/%d/g, parseInt(Id))
              .replace(/%t/g, get_controller_name(row.trans_type))
              .replace(/%r/g, get_return_url(row.trans_type));
            if (
              row.payment_method_gateway &&
              row.payment_method_gateway === "whish" &&
              row.payment_method_gateway_status &&
              row.payment_method_gateway_status === "Payment successful"
            ) {
              actions = actions.replace(
                /<a href="javascript:void\(0\);" onclick="confirmDelete\([^)]*\)" class="btn bt-link btn-xs" title="Delete">.*?<\/a>/,
                ""
              );
            }
            $(td).addClass("text-right").html(actions);
          },
        },
        {
          targets: 3,
          orderable: false,
          createdCell: (td, status, row) =>
            $(td)
              .addClass("text-right")
              .html(
                statusHTML.replace(/%s/g, get_status(row.trans_type, status))
              ),
        },
        {
          targets: 1,
          render: function (data, type, row, meta) {
            // console.log(type);
            if (
              type == "display" &&
              data !== null &&
              data !== "0000-00-00 00:00:00"
            ) {
              return moment(data).format("DD-MM-YYYY");
            } else if (type == "filter") {
              return moment(data).format("DD-MM-YYYY");
            } else {
              return "-";
            }
          },
        },
      ],
      stateSave: true,
      stateSaveCallback: function (settings, data) {
        localStorage.setItem(
          "DataTables_" + settings.sInstance,
          JSON.stringify(data)
        );
      },
      stateLoadCallback: function (settings) {
        return JSON.parse(
          localStorage.getItem("DataTables_" + settings.sInstance)
        );
      },
      stateSaveParams: function (settings, data) {
        temp = {};
        $("#salesTbl thead")
          .find("tr:eq(1)")
          .find("input")
          .each(function (n) {
            temp[$(this).attr("placeholder")] = document.getElementById(
              $(this).attr("id")
            ).value;
          });
        // $('reset_filters').on('click', function(){
        // 	$('#salesTbl thead').find("tr:eq(1)").find('input').each(function (n) {
        // 		temp[$(this).attr('placeholder')] = '';
        // 	});
        // });
        data.colsFilter = temp;
        // console.log(temp);
      },
      stateLoadParams: function (settings, data) {
        $.each(data.colsFilter, function (key, val) {
          $('#salesTbl thead input[placeholder="' + key + '"]').val(val);
        });
      },
      stateLoaded: function (settings, data) {
        $dtTbl.DataTable().ajax.reload();
      },
    })),
    2048
  );

  inputToDatepickerA($("#cash_date, #value_date, #return_date"));

  calculate_total();

  $("#bulk").on("click", function (e) {
    let table = document.getElementById("table_bulk");
    table.deleteTHead();
    for (var i = 1; i < table.rows.length; ) {
      table.deleteRow(i);
    }
    let table1 = document.getElementById("table_bulk_ids");
    table1.deleteTHead();
    for (var i = 1; i < table1.rows.length; ) {
      table1.deleteRow(i);
    }
    var rows = [];
    var ids = [];
    var all_ids = [];
    var count = 0;
    $("table > tbody#table_body > tr").each(function () {
      rows[count] = {
        "account nb": $(this).find("td").eq(0).text(),
        "trans date": $(this).find("td").eq(1).text(),
        "auto nb": $(this).find("td").eq(4).text(),
        "account name": $(this).find("td").eq(5).text(),
        "Payment method": $(this).find("td").eq(6).text(),
        "Payment status": $(this).find("td").eq(7).text(),

        subtotal: $(this).find("td").eq(8).text(),
        "delivery charge": $(this).find("td").eq(9).text(),
        total: $(this).find("td").eq(10).text(),
        qty: $(this).find("td").eq(11).text(),
        status: $(this).find("td").eq(12).text(),
        "dispatch date": $(this).find("td").eq(13).text(),
        delivery: $(this).find("td").eq(14).text(),
        User: $(this).find("td").eq(15).text(),
      };
      ids[count] = { id: $(this).find("td").eq(16).find("input").val() };
      all_ids[count] = ids[count].id;
      count++;
    });
    $("#all_ids").val(all_ids);
    let data = Object.keys(rows[0]);
    generateTableHead(table, data);
    generateTable(table, rows);
    let data1 = Object.keys(ids[0]);
    generateTableHead(table1, data1);
    generateTable(table1, ids);
    $("#bulk_modal").modal("show");
    // $('#all_ids').val(ids.toString());
  });

  $("#bulk_submit").on("click", function (e) {
    // var delivered = $('input[name="delivered"]:checked').val();
    var status = $("#status2").val();
    var driver = $("#driver").val();
    var value_date;
    if ($("#value_date").val() != "") {
      value_date = change_date_format($("#value_date").val());
    } else {
      value_date = 0;
    }
    var cash_date;
    if ($("#cash_date").val() != "") {
      var cash_date = change_date_format($("#cash_date").val());
    } else {
      cash_date = 0;
    }
    var return_date;
    if ($("#return_date").val() != "") {
      return_date = change_date_format($("#return_date").val());
    } else {
      return_date = 0;
    }
    var count = -1;
    var ids = [];
    $("#table_bulk_ids tr").each(function () {
      if (count != -1) {
        ids[count] = $(this).find("td:first").text();
      }
      count++;
    });
    count = -1;
    var customer_nbs = [];
    var totals = [];
    $("#table_bulk tr").each(function () {
      if (count != -1) {
        customer_nbs[count] = $(this).find("td").eq(0).text();
        totals[count] = $(this).find("td").eq(8).text();
      }
      count++;
    });
    var receipt = document.getElementById("receipt").checked;
    $.ajax({
      cache: false,
      type: "POST",
      async: true,
      data: {
        ids: ids,
        status: status,
        driver: driver,
        value_date: value_date,
        cash_date: cash_date,
        return_date: return_date,
        receipt: receipt,
        totals: totals,
        customer_nbs: customer_nbs,
      },
      url: getAppURL("sales/bulk_transaction_fields_update_in_sale"),
      success: function (data) {
        setTimeout(() => $("#bulk_modal").modal("hide"), 1000);
        location.reload();
      },
    });
  });
  jQuery("#dtAdvFltrs")
    .attr("onsubmit", "")
    .on("submit", triggerDTFiltersSearch);
  $("#reset_filters").on("click", function (e) {
    $("#salesTbl thead")
      .find("tr:eq(1)")
      .find("input")
      .each(function (n) {
        document.getElementById($(this).attr("id")).value = "";
      });
    var table = $("#salesTbl").DataTable();
    table.search("").columns().search("").draw();
  });
});

function triggerDTFiltersSearch(e) {
  window.salesDT.ajax.reload();
  e.preventDefault();
  e.stopPropagation();
  return false;
}

function generateTableHead(table, data) {
  let thead = table.createTHead();
  let row = thead.insertRow();
  for (let key of data) {
    let th = document.createElement("th");
    let text = document.createTextNode(key);
    th.appendChild(text);
    row.appendChild(th);
  }
}

function generateTable(table, data) {
  for (let element of data) {
    let row = table.insertRow();
    for (key in element) {
      let cell = row.insertCell();
      let text = document.createTextNode(element[key]);
      cell.appendChild(text);
    }
  }
}

function change_date_format(date) {
  var datearray = date.split("-");
  var new_date_format = datearray[2] + "-" + datearray[1] + "-" + datearray[0];
  return new_date_format;
}

function calculate_total() {
  var tot = 0;
  var subtot = 0;
  var dc = 0;
  var qty = 0;
  var count = 0;
  var total, subtotal, delivery_charge, total_qty;
  $("table > tbody > tr").each(function () {
    subtotal = $(this).find("td").eq(8).text();
    delivery_charge = $(this).find("td").eq(9).text();
    total = $(this).find("td").eq(10).text();
    total_qty = $(this).find("td").eq(11).text();
    if (subtotal != "") {
      subtot = subtot + parseFloat(subtotal);
    }
    if (delivery_charge != "") {
      dc = dc + parseFloat(delivery_charge);
    }
    if (total != "") {
      tot = tot + parseFloat(total);
    }
    if (total_qty != "") {
      qty = qty + parseFloat(total_qty);
    }
    count++;
  });
  $("#subtotal").text(subtot.toFixed(2));
  $("#delivery_charge").text(dc);
  $("#total").text(tot.toFixed(2));
  // $('#qty').val(qty);
}

function get_controller_name(trans_type) {
  if (trans_type === "EX") {
    return "exchanges";
  } else {
    return "sales";
  }
}

function get_status(trans_type, status) {
  if (trans_type === "SA") {
    return "";
  } else {
    if (status === "0") {
      return "No";
    } else {
      return "Yes";
    }
  }
}

function get_return_url(trans_type) {
  if (trans_type === "EX") {
    return "exchanges/return_exchange";
  } else {
    return "sales/return_sales";
  }
}

function copyWhatsAppMsg(trans_id) {
  $.ajax({
    cache: false,
    type: "POST",
    data: { trans_id: trans_id },
    url: getAppURL("sales/copy_whatsapp_msg"),
    success: function (result) {
      navigator.clipboard
        .writeText(result["message"])
        .then(() => {
          $("#copyToast").fadeIn(300).delay(4000).fadeOut(300);
        })
        .catch((err) => {
          console.error("Clipboard error:", err);
          alert("Failed to copy WhatsApp message.");
        });
    },
    error: function () {
      alert("Failed to copy WhatsApp message.");
    },
  });
}

function download_summary(trans_id) {
  $.ajax({
    cache: false,
    type: "POST",
    data: { trans_id: trans_id },
    url: getAppURL("sales/download_summary"),
    success: function (result) {
      renderOrderSummary(result["cartItems"], result["order"]);
    },
    error: function () {
      alert("Failed to copy WhatsApp message.");
    },
  });
}

async function renderOrderSummary(cartItems, order) {
  // Create hidden container
  const container = document.createElement("div");
  container.style.position = "fixed";
  container.style.top = "-9999px";
  container.style.left = "-9999px";
  container.style.zIndex = "-1";
  container.style.width = "fit-content";
  container.id = "order-summary-root-hidden";
  document.body.appendChild(container);
  container.innerHTML = "";

  const wrapper = document.createElement("div");
  wrapper.className = "container";
  wrapper.style.fontSize = "12px";
  wrapper.style.maxWidth = "600px";
  wrapper.style.backgroundColor = "#fff";
  wrapper.style.padding = "16px";
  wrapper.style.border = "1px solid #ccc";
  wrapper.style.boxShadow = "0 0 5px rgba(0,0,0,0.1)";
  wrapper.style.minHeight = "100px"; // Ensures height is never too short

  const header = document.createElement("h3");
  header.className = "mb-4";
  header.textContent = "Order Summary";
  header.style.fontSize = "16px";
  header.style.marginBottom = "16px";
  wrapper.appendChild(header);

  const tableWrapper = document.createElement("div");
  tableWrapper.className = "table-responsive mb-4";
  tableWrapper.id = "order-summary";

  const table = document.createElement("table");
  table.className = "table table-bordered table-hover text-center bg-white";
  table.style.width = "100%";
  table.style.fontSize = "12px";
  table.style.borderCollapse = "collapse";

  const thead = `
    <thead class="thead-dark" style="font-size: 12px;">
      <tr>
        <th style="padding: 4px;">Product</th>
        <th style="padding: 4px;">Code</th>
        <th style="padding: 4px;">Size</th>
        <th style="padding: 4px;">Price</th>
        <th style="padding: 4px;">Quantity</th>
        <th style="padding: 4px;">Total</th>
      </tr>
    </thead>
  `;

  const tbody = `
    <tbody>
      ${cartItems
        .map(
          (item) => `
        <tr>
          <td style="padding: 4px;">
            <img src="${item.image_name}" width="60" style="object-fit: contain; max-height: 60px;"><br>
          </td>
          <td style="padding: 4px;">${item.barcode}</td>
          <td style="padding: 4px;">${item.size}</td>
          <td style="padding: 4px;">$${item.price}</td>
          <td style="padding: 4px;">${item.qty}</td>
          <td style="padding: 4px;">$${item.subtotal}</td>
        </tr>
      `
        )
        .join("")}
    </tbody>
  `;

  table.innerHTML = thead + tbody;
  tableWrapper.appendChild(table);
  wrapper.appendChild(tableWrapper);
  container.appendChild(wrapper);

  // Wait for all images to load
  const images = container.querySelectorAll("img");
  await Promise.all(
    Array.from(images).map((img) => {
      return new Promise((resolve) => {
        if (img.complete) resolve();
        else {
          img.onload = resolve;
          img.onerror = resolve;
        }
      });
    })
  );

  try {
    const canvas = await html2canvas(tableWrapper, {
      scale: 3,
      useCORS: true,
      scrollY: 0,
      scrollX: 0,
      windowWidth: document.body.scrollWidth,
      windowHeight: document.body.scrollHeight,
    });

    const dataUrl = canvas.toDataURL("image/png");
    const fileName = `${order.auto_no}_order-summary.png`;

    // Detect iPhone/iPad
    const isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);

    if (isIOS) {
      // iOS workaround — open in new tab
      const response = await fetch(dataUrl);
      const blob = await response.blob();
      const blobUrl = URL.createObjectURL(blob);

      const win = window.open(blobUrl, "_blank");
      if (!win) {
        alert("Please allow popups to view or save the order summary image.");
      } else {
        alert("On iPhone, long-press the image and choose 'Save Image'.");
      }

      setTimeout(() => URL.revokeObjectURL(blobUrl), 10000);
    } else {
      // Other devices: force download
      const link = document.createElement("a");
      link.href = dataUrl;
      link.download = fileName;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  } catch (error) {
    console.error("Error generating or downloading image:", error);
    alert("An error occurred while generating the order summary image.");
  } finally {
    // Clean up
    document.body.removeChild(container);
  }
}
