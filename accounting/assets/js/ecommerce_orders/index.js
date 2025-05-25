jQuery(document).ready(function () {
  window.ecoordersDT = null;
  let dtActionsHTML =
    '<button type="button" class="btn bt-link btn-xs i-adjust" style="background-color: #333;" onclick="openStatusModal(%d, \'%a\', \'%t\', \'%s\')">' +
    '<i class="glyphicon glyphicon-edit text-yellow" title="Adjust"></i>' +
    "</button>";
  /***************************************************/
  var $dtTbl = $("#ecoordersTbl");
  BuildDataTableColumnSearch($dtTbl, "ecoordersDT");
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
      url: getAppURL("ecommerce/orders"),
      type: "GET",
      searchDelay: _GST,
    },
    columns: [
      { data: "auto_no" },
      { data: "tracking_nb" },
      { data: "customer_name" },
      { data: "order_date" },
      { data: "description" },
      { data: "total_qty" },
      { data: "percent_disc" },
      { data: "total" },
      { data: "status" },
      { data: "payment_method" },
      { data: "payment_status" },
      { data: "id" },
    ],
    columnDefs: [
      {
        targets: 11,
        orderable: false,
        createdCell: (td, Id, row) =>
          $(td)
            .addClass("text-right")
            .html(
              dtActionsHTML
                .replace(/%d/g, parseInt(Id))
                .replace(/%a/g, row.auto_no)
                .replace(/%t/g, row.tracking_nb)
                .replace(/%s/g, row.status)
            ),
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
      var temp = {};
      $("#ecoordersTbl thead")
        .find("tr:eq(1)")
        .find("input")
        .each(function (n) {
          temp[$(this).attr("placeholder")] = document.getElementById(
            $(this).attr("id")
          ).value;
        });
      data.colsFilter = temp;
      // console.log(temp);
    },
    stateLoadParams: function (settings, data) {
      $.each(data.colsFilter, function (key, val) {
        $('#ecoordersTbl thead input[placeholder="' + key + '"]').val(val);
      });
    },
    stateLoaded: function (settings, data) {
      $dtTbl.DataTable().ajax.reload();
    },
  });
  EnhanceDataTableSearch((window.ecoordersDT = table), 2048);
  $("#reset_filters").on("click", function (e) {
    $("#ecoordersTbl thead")
      .find("tr:eq(1)")
      .find("input")
      .each(function (n) {
        document.getElementById($(this).attr("id")).value = "";
      });
    var table = $("#ecoordersTbl").DataTable();
    table.search("").columns().search("").draw();
  });
  inputToDatepickerA($("#dispatch_date"));
});

function openStatusModal(order_id, auto_no, tracking_nb, status) {
  // $('#order_items_table').find('tbody').empty();
  $.ajax({
    cache: false,
    type: "POST",
    data: { order_id: order_id },
    url: getAppURL("ecommerce/get_order_data_and_items"),
    success: function (result) {
      $("#waybil_preview").attr(
        "href",
        "ecommerce/preview_order_private_waybil/" + order_id
      );
      for (let i = 0; i < 7; i++) {
        $("#order_address" + i).text("");
      }
      for (let i = 0; i < result["order_data"]["address_details"].length; i++) {
        $("#order_address" + i).text(
          result["order_data"]["address_details"][i]
        );
      }
      $("#order_items_table_body").empty();
      for (let i = 0; i < result["items"].length; i++) {
        let row =
          "<tr><td>" +
          result["items"][i]["barcode"] +
          "</td><td>" +
          result["items"][i]["size"] +
          "</td><td>" +
          result["items"][i]["qty"] +
          "</td></tr>";
        $("#order_items_table_body").append(row);
      }
      const customer_phone = result["customer"]["phone"].replace("+", "");
      const customer_name = result["customer"]["account_name"];
      const order_number = result["order_data"]["auto_no"];
      const order_value = result["order_data"]["total"];

      const rawMessage = `*This is an automated message from samoutfits.com confirming your order*

Hello ${customer_name},

We have successfully received and confirmed your order:

• Order Number: ${order_number}  
• Order Value: USD ${order_value}  
• Status: Getting ready

Your order will be packed and dispatched shortly. Expect it at your doorstep within 2–3 working days.

For any assistance, feel free to contact our customer care from Monday to Saturday, 9:00 AM to 6:00 PM, at +961 70 615 210.

We truly appreciate your support and are excited to get this order to you!

*HAPPY SHOPPING*`;

      const encodedMessage = encodeURIComponent(rawMessage);
      const formattedPhone = customer_phone.replace(/\D/g, "");
      const whatsappUrl = `https://wa.me/${formattedPhone}?text=${encodedMessage}`;

      $("#whatsapp_btn")
        .off("click")
        .on("click", function () {
          // Ensure phone number is properly formatted (digits only)
          window.open(whatsappUrl, "_blank");
        });
      $("#order_summery")
        .off("click")
        .on("click", async function () {
          await renderOrderSummary(result["items"], result["order_data"]);
        });

      $("#modal_order_id").val(order_id);
      $("#modal_old_status").val(status);
      $("#modal_order_data").text(
        "Order# " + auto_no + " - Tracking# " + tracking_nb
      );
      $("#statusModalForm").modal("show");

      $("#accept_order")
        .off("click")
        .on("click", async function (e) {
          e.preventDefault();
          if (confirm("Are You Sure?")) {
            const $form = $("#statusModalForm").find("form");
            $form.find("#status").val("Accepted & Preparing");

            await renderOrderSummary(result["items"], result["order_data"]);
            window.open(whatsappUrl, "_blank");

            // Call validation manually with false
            if (orderValidate(false)) {
              // Temporarily remove onsubmit to prevent interference
              $form.off("submit");

              // Submit the form manually
              $form[0].submit();
            }
          }
        });
    },
  });
}

function orderValidate(isneedValidation = true) {
  if (!isneedValidation) {
    return true; // <- this was missing!
  }

  var count = 0;
  if ($("#dispatch_date").val() != "") {
    var date = change_date_format($("#dispatch_date").val());
    if (isNaN(date.getDate())) {
      document.getElementById("error_dispatch_date").innerHTML =
        "*Please enter a valid date*";
      document.getElementById("error_dispatch_date").className =
        "alert alert-danger";
      count++;
    }
  }

  if (count == 0) {
    if (confirm("Are You Sure?")) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

function change_date_format(date) {
  var datearray = date.split("-");
  var new_date_format = datearray[1] + "/" + datearray[0] + "/" + datearray[2];
  var date_new = new Date(new_date_format);
  return date_new;
}

async function renderOrderSummary(cartItems, order) {
  // Create a hidden container dynamically
  const container = document.createElement("div");
  container.style.position = "fixed";
  container.style.top = "-9999px";
  container.style.left = "-9999px";
  container.id = "order-summary-root-hidden";
  document.body.appendChild(container);

  container.innerHTML = ""; // Clear previous content if any

  const wrapper = document.createElement("div");
  wrapper.className = "container";
  wrapper.style.fontSize = "12px"; // smaller font
  wrapper.style.maxWidth = "600px"; // smaller max width

  const header = document.createElement("h3");
  header.className = "mb-4";
  header.textContent = "Order Summary";
  header.style.fontSize = "16px"; // smaller header
  wrapper.appendChild(header);

  const tableWrapper = document.createElement("div");
  tableWrapper.className = "table-responsive mb-4";
  tableWrapper.id = "order-summary";

  const table = document.createElement("table");
  table.className = "table table-bordered table-hover text-center bg-white";
  table.style.width = "100%";
  table.style.fontSize = "12px"; // smaller text
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
  <img src="${item.image_name}" width="80" style="object-fit: contain;"><br>
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

  // Wait for images to load before calling html2canvas
  await new Promise((resolve) => setTimeout(resolve, 500));

  try {
    const canvas = await html2canvas(tableWrapper, {
      scale: 3,
      useCORS: true,
    });
    const link = document.createElement("a");
    link.download = order["auto_no"] + "_order-summary.png";
    link.href = canvas.toDataURL();
    link.click();
  } catch (error) {
    console.error("Error generating image:", error);
  } finally {
    document.body.removeChild(container);
  }
}
