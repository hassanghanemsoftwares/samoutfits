jQuery(document).ready(function () {
  window.preordersDT = null;
  let dtActionsHTML =
    '<a href="' +
    getAppURL("pre_orders/edit/") +
    '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
    '<a href="' +
    getAppURL("pre_orders/to_invoice/") +
    '%d" class="btn bt-link btn-xs" title="To invoice"><i style="color:#282828;" class="glyphicon glyphicon-check"></i></a>' +
    '<a href="' +
    getAppURL("sales/open_customer_whatsapp/") +
    '%d" class="btn bt-link btn-xs" target="_blank" title="Whatsapp"><img src="assets/images/whatsapp.png" width="20" height="20"></a>' +
    '<a href="javascript:void(0);" onclick="confirmDelete(\'' +
    getAppURL("pre_orders/delete/") +
    '%d\')"class="btn bt-link btn-xs" title="Delete">' +
    '<i class="glyphicon glyphicon-trash text-danger"></i></a>' +
    // Download Order Summary button
    '<a href="javascript:void(0);" onclick="download_summary(%d)"  class="btn bt-link btn-xs" title="Download Order Summary" download>' +
    '<i style="color:#282828;" class="glyphicon glyphicon-download-alt"></i></a>' +
    '<input type="text" value="%d" hidden>';
  let statusHTML = "<p>%s</p>";
  /***************************************************/
  // console.log($('#preordersTbl').find("td:last-child"))
  var $dtTbl = $("#preordersTbl");
  BuildDataTableColumnSearch($dtTbl, "preordersDT");
  EnhanceDataTableSearch(
    (window.preordersDT = $dtTbl.DataTable({
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
        url: getAppURL("pre_orders/index"),
        type: "GET",
        searchDelay: _GST,
        data: function (params) {
          let formData = jQuery("#dtAdvFltrs").serializeArray();
          for (i in formData) {
            params[formData[i].name] = formData[i].value;
          }
          var tags = $("#select_tracking_nb1").data("tags");
          var t = [];
          params["multi_auto_nos"] = "";
          if (tags !== undefined) {
            for (let i = 0; i < tags.length; i++) {
              t.push(tags[i].text);
            }
            params["multi_auto_nos"] = t.toString();
          }
        },
        complete: function () {
          // calculate_total();
        },
      },
      columns: [
        { data: "account_nb1" },
        { data: "trans_date" },
        { data: "trans_type" },
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
          targets: 15,
          orderable: false,
          createdCell: (td, Id, row) => {
            let actions = dtActionsHTML.replace(/%d/g, parseInt(Id));

            // Remove Delete button if payment method is 'whish'
            if (
              row.payment_method_gateway &&
              row.payment_method_gateway === "whish" &&
              row.payment_method_gateway_status &&
              row.payment_method_gateway_status === "Payment successful"
            ) {
              actions = actions.replace(
                new RegExp(
                  `<a href="javascript:void\\(0\\);" onclick="confirmDelete\\([^)]*\\)"class="btn bt-link btn-xs" title="Delete">.*?</a>`,
                  "g"
                ),
                ""
              );
            }

            $(td).addClass("text-right").html(actions);
          },
        },

        // { targets: 3, orderable: false, createdCell: (td, status, row) => $(td).addClass('text-right').html(statusHTML.replace(/%s/g, get_status(row.trans_type, status))) },
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
        $("#preordersTbl thead")
          .find("tr:eq(1)")
          .find("input")
          .each(function (n) {
            temp[$(this).attr("placeholder")] = document.getElementById(
              $(this).attr("id")
            ).value;
          });
        // $('reset_filters').on('click', function(){
        // 	$('#preordersTbl thead').find("tr:eq(1)").find('input').each(function (n) {
        // 		temp[$(this).attr('placeholder')] = '';
        // 	});
        // });
        data.colsFilter = temp;
        // console.log(temp);
      },
      stateLoadParams: function (settings, data) {
        $.each(data.colsFilter, function (key, val) {
          $('#preordersTbl thead input[placeholder="' + key + '"]').val(val);
        });
      },
      stateLoaded: function (settings, data) {
        $dtTbl.DataTable().ajax.reload();
      },
    })),
    2048
  );
  $("#reset_filters1").on("click", function (e) {
    $("#preordersTbl thead")
      .find("tr:eq(1)")
      .find("input")
      .each(function (n) {
        document.getElementById($(this).attr("id")).value = "";
      });
    $("#select_tracking_nb1").clearAllTags();
    var table = $("#preordersTbl").DataTable();
    table.search("").columns().search("").draw();
  });
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
        "auto nb": $(this).find("td").eq(3).text(),
        "account name": $(this).find("td").eq(4).text(),
        "Payment method": $(this).find("td").eq(5).text(),
        "Payment Status": $(this).find("td").eq(6).text(),

        subtotal: $(this).find("td").eq(7).text(),
        "delivery charge": $(this).find("td").eq(8).text(),
        total: $(this).find("td").eq(9).text(),
        qty: $(this).find("td").eq(10).text(),
        status: $(this).find("td").eq(11).text(),
        "dispatch date": $(this).find("td").eq(12).text(),
        delivery: $(this).find("td").eq(13).text(),
        User: $(this).find("td").eq(14).text(),
      };
      ids[count] = { id: $(this).find("td").eq(15).find("input").val() };
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
  $("#select_tracking_nb1").tagThis({
    noDuplicates: true,
  });
  jQuery("#dtAdvFltrs")
    .attr("onsubmit", "")
    .on("submit", triggerDTFiltersSearch);
});

function triggerDTFiltersSearch(e) {
  window.preordersDT.ajax.reload();
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
