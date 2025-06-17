jQuery(document).ready(function () {
  window.returnsalesDT = null;
  let dtActionsHTML =
    '<a href="' +
    getAppURL("return_sales/edit/") +
    '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
    '<a href="javascript:void(0);" onclick="confirmDelete(\'' +
    getAppURL("return_sales/delete/") +
    '%d\')"class="btn bt-link btn-xs" title="Delete">' +
     '<i class="glyphicon glyphicon-trash text-danger"></i></a>' +
    // Download Order Summary button
    '<a href="javascript:void(0);" onclick="download_summary(%d)"  class="btn bt-link btn-xs" title="Download Order Summary" download>' +
    '<i style="color:#282828;" class="glyphicon glyphicon-download-alt"></i></a>' +
    '<input type="text" value="%d" hidden>';
  /***************************************************/
  var $dtTbl = $("#returnsalesTbl");
  EnhanceDataTableSearch(
    (window.returnsalessDT = $dtTbl.DataTable({
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
        url: getAppURL("return_sales/index"),
        type: "GET",
        searchDelay: _GST,
      },
      columns: [
        { data: "auto_no" },
        { data: "trans_date" },
        { data: "value_date" },
        { data: "account1" },
        { data: "account2" },
        { data: "currency_code" },
        { data: "currency_rate" },
        { data: "discount" },
        { data: "total" },
        { data: "payment_method_gateway" },
        { data: "payment_method_gateway_status" },
        { data: "id" },
      ],
      columnDefs: [
        {
          targets: 11,
          orderable: false,
          createdCell: (td, accId, row) => {
            let actions = dtActionsHTML.replace(/%d/g, parseInt(accId));

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

        {
          targets: 1,
          render: $.fn.dataTable.render.moment("YYYY-MM-DD", "DD-MM-YYYY"),
        },
        {
          targets: 2,
          render: $.fn.dataTable.render.moment("YYYY-MM-DD", "DD-MM-YYYY"),
        },
      ],
    })),
    2048
  );
});



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
