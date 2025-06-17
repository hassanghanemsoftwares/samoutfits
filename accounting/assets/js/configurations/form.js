jQuery(document).ready(function ($) {
  if ($("#user_id").text() != "1") {
    $("#SystemCurrency").prop("disabled", true).trigger("chosen:updated");
  }
  $("#sizes_tags").tagThis({
    noDuplicates: true,
  });
  $("#categories_tags").tagThis({
    noDuplicates: true,
  });
  $("#status_tags").tagThis({
    noDuplicates: true,
  });
  $("#source_tags").tagThis({
    noDuplicates: true,
  });
  $("#delivery_charge_tags").tagThis({
    noDuplicates: true,
  });
  $("#colors_tags").tagThis({
    noDuplicates: true,
  });
  $("#sub_categories_tags").tagThis({
    noDuplicates: true,
  });
  document.getElementById("div-sizes").style.display = "none";
  document.getElementById("div-categories").style.display = "none";
  document.getElementById("div-status").style.display = "none";
  document.getElementById("div-source").style.display = "none";
  document.getElementById("div-delivery_charge").style.display = "none";
  document.getElementById("div-colors").style.display = "none";
  document.getElementById("div-sub_categories").style.display = "none";

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_sizes"),
    success: function (data) {
      var sizes = data.split(",");
      if (sizes != "") {
        for (let i = 0; i < sizes.length; i++) {
          $("#sizes_tags").addTag({
            id: sizes[i],
            text: sizes[i],
          });
        }
      }
    },
  });

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_categories"),
    success: function (data) {
      var categories = data.split(",");
      if (categories != "") {
        for (let i = 0; i < categories.length; i++) {
          $("#categories_tags").addTag({
            id: categories[i],
            text: categories[i],
          });
        }
      }
    },
  });

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_sub_categories"),
    success: function (data) {
      var sub_categories = data.split(",");
      if (sub_categories != "") {
        for (let i = 0; i < sub_categories.length; i++) {
          $("#sub_categories_tags").addTag({
            id: sub_categories[i],
            text: sub_categories[i],
          });
        }
      }
    },
  });

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_status"),
    success: function (data) {
      var status = data.split(",");
      if (status != "") {
        for (let i = 0; i < status.length; i++) {
          $("#status_tags").addTag({
            id: status[i],
            text: status[i],
          });
        }
      }
    },
  });

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_source"),
    success: function (data) {
      var source = data.split(",");
      if (source != "") {
        for (let i = 0; i < source.length; i++) {
          $("#source_tags").addTag({
            id: source[i],
            text: source[i],
          });
        }
      }
    },
  });

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_delivery_charge"),
    success: function (data) {
      var delivery_charge = data.split(",");
      if (delivery_charge != "") {
        for (let i = 0; i < delivery_charge.length; i++) {
          $("#delivery_charge_tags").addTag({
            id: delivery_charge[i],
            text: delivery_charge[i],
          });
        }
      }
    },
  });

  $.ajax({
    cache: false,
    type: "POST",
    url: getAppURL("configurations/get_colors"),
    success: function (data) {
      var colors = data.split(",");
      if (colors != "") {
        for (let i = 0; i < colors.length; i++) {
          $("#colors_tags").addTag({
            id: colors[i],
            text: colors[i],
          });
        }
      }
    },
  });

  $("#bgsave").on("click", function () {
    //sizes
    var tags = $("#sizes_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#sizes").val(t.toString());
    //categories
    var tags = $("#categories_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#categories").val(t.toString());
    //sub_categories
    var tags = $("#sub_categories_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#sub_categories").val(t.toString());
    //status
    var tags = $("#status_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#status").val(t.toString());
    //source
    var tags = $("#source_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#source").val(t.toString());
    //delivery_charge
    var tags = $("#delivery_charge_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#delivery_charge").val(t.toString());
    //colors
    var tags = $("#colors_tags").data("tags");
    var t = [];
    for (let i = 0; i < tags.length; i++) {
      t.push(tags[i].text);
    }
    $("#colors").val(t.toString());
  });

  const messageTemplate = `*This is an automated message from samoutfits.com confirming your order*

Hello {{customer_name}} 👋,

We have successfully received and confirmed your order:

* Order Number: {{tracking_nb}}  
* Order Value: USD {{order_value}}  
* Status: Getting ready

Your order will be packed and dispatched shortly. Expect it at your doorstep within 2-3 working days.

For any assistance, feel free to contact our customer care from Monday to Saturday, 9:00 AM to 6:00 PM, at +961 70 615 210.

We truly appreciate your support and are excited to get this order to you!

*HAPPY SHOPPING* 🛒

*You may also like*
*https://samoutfits.com/products/view/2333*`;

  document.getElementById("copyBtn").addEventListener("click", () => {
    navigator.clipboard
      .writeText(messageTemplate)
      .then(() =>  $("#copyToast").fadeIn(300).delay(4000).fadeOut(300))
      .catch((err) => alert("Failed to copy text: ", err));
  });
});
