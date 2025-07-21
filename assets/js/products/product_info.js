jQuery(document).ready(function () {
  $("#add_to_cart").on("click", function (c) {
    // alert($('input[name="size"]:checked').val())
    // return false;
    var count = 0;
    // alert(count);
    if ($("#msg_qty").text() !== "") {
      count++;
    }
    if ($("#category").val() !== "Wallets" && $("#category").val() !== "Hats") {
      if (
        $('input[name="size"]').length > 0 &&
        $('input[name="size"]:checked').val() === undefined
      ) {
        $("#msg_size").html(_lang.Required).css("color", "red");
        count++;
      } else {
        $("#msg_size").html("");
      }
    }
    if (count == 0) {
      console.log($("#item_id").val());
      $.ajax({
        cache: false,
        type: "POST",
        data: {
          item_id: $("#item_id").val(),
          qty: $("#qty_value").val(),
          size: $('input[name="size"]:checked').val(),
        },
        url: getAppURL("cart/add_to_cart"),
        success: function (data) {
          console.log(data);
          if (data["res"] == "ok") {
            $("#cartCountNav").text(data["count_cart"]);
            $("#cartCountNavPhone").text(data["count_cart"]);
            $("#modal_text").text(_lang.Product_added_successfuly_to_Cart);
            $("#modal_image").attr("src", "assets/images/add_to_cart.png");
            $("#modal_image").width(50);
            $("#modal_image").height(50);
            $("#go_wishlist").hide();
            $("#product_modal").modal("show");

            //mohammad code 2024-11-22 start
            // alert($('#item_id').val());
            // fbq("track", "AddToCart", {
            //   content_ids: ["" + $("#item_id").val() + ""], // 'REQUIRED': array of product IDs
            //   content_type: "product", // RECOMMENDED: Either product or product_group based on the content_ids or contents being passed.
            // });
            //mohammad code 2024-11-22 end
            //fire data layer add to cart
            fireAddToCart($("#item_id").val(), $("#qty_value").val());
            //fire data layer add to cart end
          }
        },
      });
    }
  });

  //buy_now_btn action start
  // this button is add product to cart then redirect to checkout page
  $("#buy_now_btn").on("click", function (c) {
    // alert($('input[name="size"]:checked').val())
    // return false;
    var count = 0;
    // alert(count);
    if ($("#msg_qty").text() !== "") {
      count++;
    }

    if ($("#category").val() !== "Wallets" && $("#category").val() !== "Hats") {
      if (
        $('input[name="size"]').length > 0 &&
        $('input[name="size"]:checked').val() === undefined
      ) {
        $("#msg_size").html(_lang.Required).css("color", "red");
        count++;
      } else {
        $("#msg_size").html("");
      }
    }

    // alert(count);
    if (count == 0) {
      $.ajax({
        cache: false,
        type: "POST",
        data: {
          item_id: $("#item_id").val(),
          qty: $("#qty_value").val(),
          size: $('input[name="size"]:checked').val(),
        },
        url: getAppURL("cart/add_to_cart"),
        success: function (data) {
          console.log(data);
          if (data["res"] == "ok") {
            // $('#cartCountNav').text(data['count_cart']);
            // $('#cartCountNavPhone').text(data['count_cart']);
            // $('#modal_text').text(_lang.Product_added_successfuly_to_Cart);
            // $('#modal_image').attr("src", "assets/images/add_to_cart.png");
            // $('#modal_image').width(50);
            // $('#modal_image').height(50);
            // $('#go_wishlist').hide();
            // $('#product_modal').modal('show');
            // fbq("track", "AddToCart", {
            //   content_ids: ["" + $("#item_id").val() + ""], // 'REQUIRED': array of product IDs
            //   content_type: "product", // RECOMMENDED: Either product or product_group based on the content_ids or contents being passed.
            // });
            window.location.href = getAppURL("Checkout/direct_order");
          }
        },
      });
    }
  });
  //buy_now_btn end

  $("#wishlist").on("click", function (e) {
    // alert($('#item_id').val())
    // return false;
    $.ajax({
      cache: false,
      type: "POST",
      data: {
        item_id: $("#item_id").val(),
      },
      url: getAppURL("users/add_item_to_customer_wishlist"),
      success: function (data) {
        console.log($("#item_id").val(), data);
        if (data !== "0") {
          $("#go_wishlist").show();
          $("#modal_image").attr("src", "assets/images/wishlist.png");
          if (data === "1") {
            $("#modal_text").text(_lang.Product_added_successfuly_to_Wishlist);
            $.ajax({
              cache: false,
              type: "POST",
              url: getAppURL("accounts/get_user_wishlist_count"),
              success: function (data) {
                $("#WishlistCountNavPhone").text(data);
                $("#WishlistCountNav").text(data);
              },
            });
          }
          if (data === "2") {
            $("#modal_text").text(_lang.Product_already_exists_in_Wishlist);
          }
          $("#product_modal").modal("show");
        } else {
          $("#modal_image").attr("src", "assets/images/warning.png");
          $("#modal_text").text(
            _lang.sorry_you_must_be_logged_in_to_add_to_wishlist
          );
          $("#go_wishlist").hide();
          $("#product_modal").modal("show");
        }
      },
    });
  });
  $("#go_wishlist").on("click", function (e) {
    window.location.href = getAppURL("accounts/wishlist");
  });
  window.addEventListener("pageshow", function () {
    $('input[name="size"]').prop("checked", false);
  });
  $('input[name="size"]').on("change", function () {
    // alert()
    var maxQty = $(this).data("max");
    $("#qty_value").attr("max", maxQty);

    // Optional: reset value to 1 if it exceeds new max
    var currentVal = parseFloat($("#qty_value").val());
    if (currentVal > maxQty) {
      $("#qty_value").val(maxQty);
    }
  });
});

//fire data layer add to cart function
function fireAddToCart(item_id, qty) {
  $.ajax({
    cache: false,
    type: "POST",
    data: {
      item_id: $("#item_id").val(),
    },
    url: getAppURL("products/json_info"),
    dataType: "json",
    success: function (data) {
      // console.log(data)
      if (data["result"]) {
        // console.log(data['data']);
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

        // Measure adding a product to a shopping cart by using an 'add' actionFieldObject
        // and a list of productFieldObjects.
        window.dataLayer.push({ ecommerce: null }); // Clear the previous ecommerce object.
        window.dataLayer.push({
          event: "addToCart",
          ecommerce: {
            currencyCode: "USD",
            add: {
              // 'add' actionFieldObject measures.
              products: product,
            },
          },
        });
      }
    },
  });
}

function fireWhatsAppClick() {}

jQuery(document).ready(function () {
  //mohammad code 2024-11-22 start
  // fbq("track", "ViewContent", {
  //   content_ids: ["" + $("#item_id").val() + ""], // 'REQUIRED': array of product IDs
  //   content_type: "product", // RECOMMENDED: Either product or product_group based on the content_ids or contents being passed.
  //   value: parseFloat($("#fbp_product_price").val()), // Product price (numeric)
  //   currency: "USD",
  // });
  // console.log('true');
  //mohammad code 2024-11-22 end
  //when enter product page
  $.ajax({
    cache: false,
    type: "POST",
    data: {
      item_id: $("#item_id").val(),
    },
    url: getAppURL("products/json_info"),
    dataType: "json",
    success: function (data) {
      // console.log(data)
      if (data["result"]) {
        // console.log(data['data']);
        var product = [
          {
            //  adding a product to a shopping cart.
            name: data["data"].description,
            id: data["data"].id,
            price: data["data"].price,
            brand: " ",
            category: data["data"].category,
            variant: data["data"].color,
          },
        ];

        // Measure a view of product details. This example assumes the detail view occurs on pageload,
        // and also tracks a standard pageview of the details page.
        dataLayer.push({ ecommerce: null }); // Clear the previous ecommerce object.
        dataLayer.push({
          ecommerce: {
            detail: {
              actionField: { list: "Apparel Gallery" }, // 'detail' actions have an optional list property.
              products: product,
            },
          },
        });
      }
    },
  });
});
$(document).ready(function () {
  // Initialize main carousel
  $(".main-carousel").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".thumbnail-carousel",
  });

  // Initialize thumbnail carousel
  $(".thumbnail-carousel").slick({
    slidesToShow: 6, // Show more thumbnails by default since they're smaller
    slidesToScroll: 1,
    asNavFor: ".main-carousel",
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 6, // Show even more on tablets
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 6, // Show the most on mobile
        },
      },
    ],
  });

     const pageUrl = window.location.href;
    const customMessage = `Check out this item from Sam Outfits\n${pageUrl}`;
    const encodedText = encodeURIComponent(customMessage);

    // Update WhatsApp share link with custom message
    $("#whatsappShare").attr("href", `https://wa.me/?text=${encodedText}`);

    // Handle Copy Link click
    $("#copyLinkBtn").on("click", function () {
        const link = window.location.href;

        // Using the Clipboard API for modern browsers
        if (navigator.clipboard) {
            navigator.clipboard.writeText(link).then(() => {
                alert("Link copied to clipboard!");
            }).catch(() => {
                fallbackCopyText(link); // Fallback for older browsers
            });
        } else {
            fallbackCopyText(link); // Fallback for older browsers
        }
    });

    // Fallback function for copying text when Clipboard API is not available
    function fallbackCopyText(text) {
        const tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(text).select();
        try {
            document.execCommand("copy");
            alert("Link copied to clipboard!");
        } catch (err) {
            alert("Failed to copy the link.");
        }
        tempInput.remove();
    }
});
