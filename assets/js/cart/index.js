jQuery(document).ready(function () {
  calculateTotal();
  $(".i-delete").on("click", function (c) {
    let x = $(this).parent();
    let itemId = parseInt($(this).data("product"));
    $.ajax({
      cache: false,
      type: "POST",
      data: {
        rowid: x.find("input").val(),
      },
      url: getAppURL("cart/remove_item"),
      success: function (data) {
        if (data === "1") {
          x.parent().remove();
          calculateTotal();

          fireRemoveFromCart(itemId, 1);
        }
      },
    });
  });
  $(".i-minus, .i-plus").on("click", function (c) {
    calculateTotal();
    let tr = $(this).parent().parent().parent();
    let qty_inp = $(this).parent().find("input").val();
    $.ajax({
      cache: false,
      type: "POST",
      data: {
        rowid: tr.find("td.i-row_id input").val(),
        qty: qty_inp,
      },
      url: getAppURL("cart/update_item_qty"),
      success: function (data) {
        calculateTotal();
      },
    });
  });
  // coupon
  $("#check_coupon").on("click", function (e) {
    if (
      $("#coupon").val() !== _lang.Enter_Coupon &&
      $("#coupon").val() !== ""
    ) {
      $.ajax({
        cache: false,
        type: "POST",
        data: {
          coupon: $("#coupon").val(),
        },
        url: getAppURL("checkout/check_coupon"),
        success: function (data) {
          if (data === null) {
            $("#discount").val(0);
            $("#coupon_id").val("");
            $("#discount_type").val(1);
            $("#disc_value").text("0");
            calculateTotal();
            $("#modal_text").text(_lang.Oops_Wrong_Coupon_Code);
            $("#coupon_modal").modal("show");
          } else {
            if (data["deactivate"] !== "1") {
              var today = new Date();
              var expiry_date = new Date(data["expiry_date"]);
              if (today < expiry_date) {
                if (data["limited"] === "1") {
                  $.ajax({
                    cache: false,
                    type: "POST",
                    data: {
                      coupon_id: data["id"],
                      usage_times: data["usage_times"],
                    },
                    url: getAppURL(
                      "checkout/check_customer_coupon_usage_times"
                    ),
                    success: function (res) {
                      console.log(res);
                      if (res === "1") {
                        $("#discount").val(data["amount"]);
                        $("#coupon_id").val(data["id"]);
                        $("#discount_type").val(data["discount_type"]);
                        var disc = data["amount"];
                        if (data["discount_type"] === "0") {
                          disc += "%";
                        } else {
                          disc += "";
                        }
                        calculateTotal();
                        console.log($("#coupon_id").val(), data["id"]);

                        $("#disc_value").text(disc);
                      } else {
                        $("#modal_text").text(
                          _lang.Oops_Coupon_Code_No_More_Active
                        );
                        $("#coupon_modal").modal("show");
                      }
                    },
                  });
                } else {
                  $("#discount").val(data["amount"]);
                  $("#coupon_id").val(data["id"]);
                  $("#discount_type").val(data["discount_type"]);
                  var disc = data["amount"];
                  if (data["discount_type"] === "0") {
                    disc += "%";
                  } else {
                    disc += "";
                  }
                  calculateTotal();
                  $("#disc_value").text(disc);
                }
              } else {
                $("#modal_text").text(_lang.Oops_Coupon_Code_Expired);
                $("#coupon_modal").modal("show");
              }
            } else {
              $("#modal_text").text(_lang.Oops_Coupon_Code_No_More_Active);
              $("#coupon_modal").modal("show");
            }
          }
        },
      });
    } else {
      $("#discount").val(0);
      $("#coupon_id").val("");
      $("#discount_type").val(1);
      $("#disc_value").text("0");
      calculateTotal();
      $("#modal_text").text(_lang.Please_Enter_Coupon_Code);
      $("#coupon_modal").modal("show");
    }
  });
  console.log($("#coupon_id").val());
});

function calculateTotal() {
  var total = 0;
  $("#cartLines")
    .find("tr")
    .each(function (index) {
      var qty = $(this).find("td.i-qty").find("input").val();
      var price = $(this).find("td.i-price").find("input").val();
      var item_total = parseFloat(qty) * parseFloat(price);
      $(this).find("td.i-total").find("p").text("$".concat(item_total));
      total += item_total;
    });
  $("#subtotal").text("$".concat(total));
  var disc = $("#discount").val();
  if ($("#discount_type").val() === "0") {
    disc += "%";
    tot = total * (1 - parseFloat($("#discount").val()) / 100);
  } else {
    disc += "";
    tot = total - parseFloat($("#discount").val());
    if (tot < 0) {
      tot = 0;
    }
  }
  var final_tot = tot + parseFloat($("#delivery_inp").val());
  $("#grand_total").text("$".concat(final_tot));
}
function redirectWithPost(url, data) {
  const form = document.createElement("form");
  form.method = "POST";
  form.action = url;

  for (const key in data) {
    if (data.hasOwnProperty(key)) {
      const input = document.createElement("input");
      input.type = "hidden";
      input.name = key;
      input.value = data[key];
      form.appendChild(input);
    }
  }

  document.body.appendChild(form);
  form.submit();
}

function validation() {
  // console.log(count);
  // return false;
  if ($("#loged_in_user").val() == "") {
    // $('#login_modal').modal('show');

    if ($("#coupon").val() != "" &&$("#coupon_id").val() != ""&&$("#discount_type").val() != ""&&$("#discount").val() != "") {
      const url = getAppURL("Checkout/direct_order");

      const postData = {
        coupon: $("#coupon").val(),
        coupon_id: $("#coupon_id").val(),
        discount_type: $("#discount_type").val(),
        discount: $("#discount").val(),
      };

      redirectWithPost(url, postData);
    } else {
      window.location.href = getAppURL("Checkout/direct_order");
    }

    return false;
  } else {
    const item_ids = [];
    const sizes = [];
    const qtys = [];
    var count = 0;
    // console.log(items);
    $("#cartLines")
      .find("tr")
      .each(function (index) {
        var qty = $(this).find("td.i-qty").find("input").val();
        if ($(this).find("td.i-size").text() == "") {
          var size = "No";
        } else {
          var size = $(this).find("td.i-size").text();
        }
        var item_id = $(this).find("td").find("input.r-item_id").val();
        item_ids[count] = item_id;
        qtys[count] = qty;
        if (size == "") {
          sizes[count] = "No";
        } else {
          sizes[count] = size;
        }
        count++;
      });
    var count1 = 0;
    $.ajax({
      async: false,
      cache: false,
      type: "POST",
      data: {
        item_ids: item_ids,
        qtys: qtys,
        sizes: sizes,
      },
      url: getAppURL("checkout/check_items_qty"),
      success: function (data) {
        $("#cartLines")
          .find("tr")
          .each(function (index) {
            var item_id = $(this).find("td").find("input.r-item_id").val();
            if (
              parseFloat(data[item_id]["av_qty"]) >=
              parseFloat(data[item_id]["qty"])
            ) {
              $(this).css("background-color", "white");
              $(this).find("td span.i-av_qty").html("");
            } else {
              $(this).css("background-color", "#ffcccb");
              $(this)
                .find("td span.i-av_qty")
                .html("Available Qty: " + data[item_id]["av_qty"]);
              count1++;
            }
          });
      },
    });
    if (count1 == 0) {
      return true;
    } else {
      return false;
    }
  }
}

//fire data layer add to cart function
function fireRemoveFromCart(item_id, qty) {
  $.ajax({
    cache: false,
    type: "POST",
    data: {
      item_id: item_id,
    },
    url: getAppURL("products/json_info"),
    dataType: "json",
    success: function (data) {
      console.log(data);
      if (data["result"]) {
        // console.log(data["data"]);
        var product = [
          {
            //  adding a product to a shopping cart.
            name: data["data"].description,
            id: data["data"].id,
            price: data["data"].price,
            brand: " ",
            category: data["data"].category,
            variant: data["data"].color,
            quantity: qty,
          },
        ];

        // Measure the removal of a product from a shopping cart.
        dataLayer.push({ ecommerce: null }); // Clear the previous ecommerce object.
        dataLayer.push({
          event: "removeFromCart",
          ecommerce: {
            remove: {
              // 'remove' actionFieldObject measures.
              products: product,
            },
          },
        });
      }
    },
  });
}
