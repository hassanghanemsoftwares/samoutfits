function validation() {
  var count = 0;
  if (window.location.href == getAppURL("items/add")) {
    $.ajax({
      cache: false,
      type: "POST",
      async: false,
      data: { barcode: document.itemsform.barcode.value },
      url: getAppURL("Items/check_if_barcode_exists"),
      success: function (data) {
        if (data != "0") {
          document.getElementById("error_barcode").innerHTML =
            _lang.unique_value;
          document.getElementById("error_barcode").className =
            "alert alert-danger";
          count++;
        }
      },
    });
  }
  var id = $("#id").val();
  if (id) {
    if (window.location.href == getAppURL("items/edit/") + id) {
      $.ajax({
        cache: false,
        type: "POST",
        async: false,
        data: { barcode: document.itemsform.barcode.value, id: id },
        url: getAppURL("Items/check_if_barcode_exists_on_item_update"),
        success: function (data) {
          if (data.barcode != document.itemsform.barcode.value) {
            if (data.count != "0") {
              document.getElementById("error_barcode").innerHTML =
                _lang.unique_value;
              document.getElementById("error_barcode").className =
                "alert alert-danger";
              count++;
            }
          }
        },
      });
    }
  }

  if (document.itemsform.barcode.value == "") {
    document.getElementById("error_barcode").innerHTML = _lang.barcode_required;
    document.getElementById("error_barcode").className = "alert alert-danger";
    count++;
  }
  if (document.itemsform.description.value == "") {
    document.getElementById("error_description").innerHTML =
      _lang.field_required;
    document.getElementById("error_description").className =
      "alert alert-danger";
    count++;
  }
  if (document.itemsform.category.value == "0") {
    document.getElementById("error_category").innerHTML = _lang.field_required;
    document.getElementById("error_category").className = "alert alert-danger";
    count++;
  }
  //   if (document.itemsform.color.value == "0") {
  //     document.getElementById("error_color").innerHTML = _lang.field_required;
  //     document.getElementById("error_color").className = "alert alert-danger";
  //     count++;
  //   }
  if (isNaN(document.itemsform.profit.value) == true) {
    document.getElementById("error_profit").innerHTML = _lang.numeric_nb;
    document.getElementById("error_profit").className = "alert alert-danger";
    count++;
  }
  var prof = $("#profit").val();
  // if (parseFloat(prof) < 0 || parseFloat(prof) > 100) {
  // 	document.getElementById('error_profit').innerHTML = "*Please enter a numeric value between 0 and 100*";
  // 	document.getElementById('error_profit').className = "alert alert-danger";
  // 	count++;
  // }
  //   if (isNaN(document.itemsform.price.value) == true) {
  //     document.getElementById("error_price").innerHTML = _lang.numeric_nb;
  //     document.getElementById("error_price").className = "alert alert-danger";
  //     count++;
  //   }
  if (isNaN(document.itemsform.price_ttc.value) == true) {
    document.getElementById("error_price_ttc").innerHTML = _lang.numeric_nb;
    document.getElementById("error_price_ttc").className = "alert alert-danger";
    count++;
  }
  if (isNaN(document.itemsform.cost.value) == true) {
    document.getElementById("error_cost").innerHTML = _lang.numeric_nb;
    document.getElementById("error_cost").className = "alert alert-danger";
    count++;
  }
  if (isNaN(document.itemsform.open_cost.value) == true) {
    document.getElementById("error_open_cost").innerHTML = _lang.numeric_nb;
    document.getElementById("error_open_cost").className = "alert alert-danger";
    count++;
  }
  if (isNaN(document.itemsform.purchase_cost.value) == true) {
    document.getElementById("error_purchase_cost").innerHTML = _lang.numeric_nb;
    document.getElementById("error_purchase_cost").className =
      "alert alert-danger";
    count++;
  }

  $("#variants-container .variant-item").each(function (index, el) {
    const price = $(el).find("input[name*='[price]']").val();
    const oldPrice = $(el).find("input[name*='[old_price]']").val();
    const filesInput = $(el).find("input[type='file']")[0];
    const files = filesInput ? filesInput.files : [];
    const hasId = $(el).find("input[name*='[id]']").val() || null;
    const hasExistingImages = $(el).find(".gallery img").length > 0;
    const filesCount = filesInput ? filesInput.files.length : 0;
    if (
      window.location.href == getAppURL("items/add") ||
      (!hasId && !hasExistingImages)
    ) {
      if (filesCount === 0) {
        console.log("Validation failed: Missing images on variant", index);
        $(el)
          .find("#error_files")
          .html(_lang.product_images_required)
          .addClass("alert alert-danger");
        count++;
      }
    }
    if (price === "" || isNaN(price)) {
      console.log(
        "Validation failed: Price invalid on variant",
        index,
        "value:",
        price
      );
      $(el)
        .find("#error_price")
        .html(_lang.numeric_nb)
        .addClass("alert alert-danger");
      count++;
    }

    if (oldPrice !== "" && isNaN(oldPrice)) {
      console.log(
        "Validation failed: Old price invalid on variant",
        index,
        "value:",
        oldPrice
      );
      $(el)
        .find("#error_old_price")
        .html(_lang.numeric_nb)
        .addClass("alert alert-danger");
      count++;
    }
  });

  if (count > 0) {
    return false;
  } else {
    return true;
  }
}
$("#itemsform").on("submit", function (e) {
  if (!validation()) {
    e.preventDefault(); // stop form from submitting
  }
});
// Helper function to show error
function setError(id, message) {
  const el = document.getElementById(id);
  if (el) {
    el.innerHTML = message;
    el.className = "alert alert-danger";
  }
}

$(document).ready(function () {
  let index = $("#variants-container .variant-item").length;

  $("#add-variant").click(function () {
    let template = $("#variant-template").html();
    template = template.replace(/__INDEX__/g, index);
    $("#variants-container").append(
      '<div class="variant-item mb-3">' + template + "</div>"
    );
    index++;
  });

  // Remove variant, but ensure at least one remains
  $("#variants-container").on("click", ".remove-variant", function () {
    if ($("#variants-container .variant-item").length > 1) {
      $(this).closest(".variant-item").remove();
    } else {
      alert("At least one variant is required.");
    }
  });
});
