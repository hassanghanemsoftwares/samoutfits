<style>
    body,
    html {
        font-family: Arial, sans-serif;
    }

    .bg-purple {
        background-color: #d1a3ff;
        color: black;
    }

    .text-purple {
        color: #7f00ff !important;
    }

    .outlined-button {
        color: #7f00ff;
        border: 2px solid #7f00ff;
        border-radius: 25px;
        font-weight: 700;
        padding: 12px 30px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .outlined-button:hover {
        background-color: #7f00ff;
        color: white;
        text-decoration: none;
    }

    .divider {
        height: 20px;
        background-color: #d1a3ff;
        margin: 1rem 0;
    }

    .icon-large {
        height: 120px;
        max-width: 100%;
    }

    .icon-medium {
        height: 40px;
        max-width: 100%;
    }

    .icon-tall {
        height: 150px;
        max-width: 100%;
    }

    .thank-you {
        padding: 15px;
        margin: 15px 0;
        background-color: #d1a3ff;
        text-align: center;
    }

    .outlined-button {
        padding: 10px 20px;
        font-size: 14px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    @media (min-width: 768px) {
        .order_summary_process {
            padding: 0 150px;
        }
    }

    @media (max-width: 768px) {
        .icon-large {
            height: 100px;
        }

        .icon-medium {
            height: 30px;
        }

        .icon-tall {
            height: 120px;
        }

        .divider {
            height: 15px;
        }
    }

    @media (max-width: 480px) {
        .icon-large {
            height: 80px;
        }

        .icon-tall {
            height: 100px;
        }
    }
</style>
<div class="container my-3" style="max-width: 1000px;">

    <div class="bg-white p-3 rounded shadow-sm">
        <h3 class="text-center mt-3">Thank you.</h3>
        <p class="fs-5 text-center">Hello <strong><?php echo htmlspecialchars($customer['account_name']); ?></strong> 👋 We have successfully received and confirmed your order.</p>

        <img src="<?php echo base_url(); ?>assets/img/order_summary_process.png" alt="Order Process" class="img-fluid d-block mx-auto mb-3 order_summary_process" />

        <div class="bg-purple p-3 rounded mb-4">
            <ul class="list-unstyled mb-0 mx-auto" style="max-width: 400px;">
                <li class="d-flex justify-content-start mb-2"><strong class="mr-1">Order Number: </strong> <span class="text-purple"> <?php echo htmlspecialchars($order['auto_no']); ?></span></li>
                <li class="d-flex justify-content-start mb-2"><strong class="mr-1">Order Value: </strong> <span class="text-purple"> USD <?php echo number_format((float) $order['total'], 2); ?></span></li>
                <li class="d-flex justify-content-start mb-2"><strong class="mr-1">Status: </strong> <span class="text-purple"> <?php echo htmlspecialchars($order['status']); ?></span></li>
                <li class="d-flex justify-content-start"><strong class="mr-1">Payment Method: </strong> <span class=" <?php echo $order['payment_method'] == "whish" ? "text-danger" : "text-purple"  ?>"> <?php echo htmlspecialchars($order['payment_method']); ?></span></li>
                <?php
                if ($order['payment_method'] == "whish") {
                ?>
                    <li class="d-flex justify-content-start"><strong class="mr-1">Payment Status: </strong> <span class="text-purple"> <?php echo htmlspecialchars($order['payment_status']); ?></span></li>
                <?php
                }
                ?>
            </ul>
        </div>

        <div class="table-responsive mb-4">
            <table class="table table-bordered text-center align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order_items as $item): ?>
                        <tr>
                            <td><img src="<?php echo 'accounting/assets/uploads/' . $item['image_name']; ?>" alt="" style="height: 80px; object-fit: contain;"></td>
                            <td><?php echo htmlspecialchars($item['description']); ?></td>
                            <td><?php echo htmlspecialchars($item['size']); ?></td>
                            <td>$<?php echo number_format((float)$item['price'], 2); ?></td>
                            <td><?php echo $item['qty']; ?></td>
                            <td>$<?php echo number_format((float)$item['price'] * $item['qty'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="divider"></div>

        <p class="fw-bold text-center mb-1">Your order will be packed and dispatched shortly. Expect it at your doorsteps within 2–3 working days.</p>
        <h3 class="text-center">Rest assured.</h3>
        <p class="fw-bold text-center mb-4">You will receive a call from the driver ahead of time.</p>

        <div class="divider"></div>

        <h3 class="text-center mb-3">Need Help?</h3>
        <p class="fw-bold text-center mb-2">For any assistance, feel free to contact our customer care Monday till Saturday, 8:00am till 5:00pm</p>
        <div class="text-center mb-4">
            <a href="tel:96170615210">
                <img src="<?php echo base_url(); ?>assets/img/order_summary_phone.png" alt="Phone" class="icon-medium mx-auto" />
            </a>
        </div>

        <div class="bg-purple p-3 rounded text-center mb-4">
            <a href="https://wa.me/96170615210">
                <img src="<?php echo base_url(); ?>assets/img/order_summary_whatsapp.png" alt="WhatsApp" class="icon-tall mx-auto" />

            </a>
        </div>

        <div class="divider"></div>

        <h3 class="text-center">ON BEHALF OF SAM’S TEAM</h3>
        <p class="fw-bold text-center mb-4">We truly appreciate your trust and support and are excited to get this order to you!</p>
        <div class="thank-you">
            <img src="<?php echo base_url(); ?>assets/img/order_summary_happy.png" class="icon-large" alt="">
            <div>
                <a href="<?php echo base_url(); ?>" class="outlined-button">SHOP NOW</a>
            </div>
            <div class="socials" style="margin-top: 10px; margin-bottom: 20px;">
                <a href="https://www.instagram.com/samoutfitslb">
                    <img src="<?php echo base_url(); ?>assets/img/order_summary_insta.png" alt="Instagram" style="height: 35px;">
                </a>
                <a href="https://www.facebook.com/samoutfits.lebanon">
                    <img src="<?php echo base_url(); ?>assets/img/order_summary_facebook.png" alt="Facebook" style="height: 35px;">
                </a>
                <a href="https://www.youtube.com/@SamOutfits">
                    <img src="<?php echo base_url(); ?>assets/img/order_summary_youtube.png" alt="YouTube" style="height: 35px;">
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    function sendFacebookEvent(eventType, eventData = {}) {
        const accessToken =
            "EAA4QFAVFUSABPCAXUqZCCDFVcAxhSEkkZBxHECEwbFYzGURDzotpE9K2fVu5piEKxlN8jLFS7nsdULxTwcLWYv6aPmQHVZBBwu3ZAXlZCihdcmitayCFE6Hy0WE2Alm8dKrgEw5fDRvsnZAl18X8IJArazTHmT1rrJUDA69haWEZB2oR98QLaNSR55ZCBABK2gZDZD";
        const datasetId = "101417382894987"; // Replace this
        const apiVersion = "v18.0"; // Current API version
        const url = `https://graph.facebook.com/${apiVersion}/${datasetId}/events?access_token=${accessToken}`;

        const payload = {
            data: [{
                event_name: eventType,
                event_time: Math.floor(Date.now() / 1000),
                action_source: "website",
                user_data: {
                    em: eventData.email ? [sha256(eventData.email)] : [],
                    ph: eventData.phone ? [sha256(eventData.phone)] : [],
                    client_user_agent: navigator.userAgent,
                },
                custom_data: {
                    currency: eventData.currency || "USD",
                    value: eventData.value || 0,
                    content_type: eventData.content_type || undefined,
                    content_ids: eventData.content_ids || undefined,
                },
            }, ],
        };

        $.ajax({
            url: url,
            method: "POST",
            contentType: "application/json",
            data: JSON.stringify(payload),
            success: function(response) {
                console.log(`${eventType} event sent successfully:`, response);
            },
            error: function(xhr) {
                console.error(`Error sending ${eventType} event:`, xhr.responseText);
            },
        });
    }

    // SHA256 hash function (for emails and phones)
    function sha256(input) {
        return CryptoJS.SHA256(input.trim().toLowerCase()).toString();
    }

    window.addEventListener("DOMContentLoaded", function() {
        dataLayer = window.dataLayer || [];
        dataLayer.push({
            event: "purchase",
            ecommerce: {
                purchase: {
                    actionField: {
                        id: "<?php echo htmlspecialchars($order['auto_no']); ?>", // Transaction ID
                        affiliation: "Online Store",
                        revenue: "<?php echo number_format((float)$order['total'], 2, '.', ''); ?>",
                        tax: "", // add if available
                        shipping: "<?php echo number_format((float)$order['delivery_charge'], 2, '.', ''); ?>",
                        coupon: "<?php echo htmlspecialchars($order['coupon_code'] ?? ''); ?>"
                    },
                    products: [
                        <?php foreach ($order_items as $item): ?> {
                                name: "<?php echo htmlspecialchars($item['description']); ?>",
                                id: "<?php echo htmlspecialchars($item['item_id']); ?>",
                                price: "<?php echo number_format((float)$item['price'], 2, '.', ''); ?>",
                                quantity: <?php echo (int)$item['qty']; ?>,
                                variant: "<?php echo htmlspecialchars($item['size']); ?>"
                            },
                        <?php endforeach; ?>
                    ]
                }
            }
        });
        sendFacebookEvent("Purchase", {
            email: "<?php echo htmlspecialchars($customer['email']); ?>",
            phone: "<?php echo htmlspecialchars($customer['phone']); ?>",
            currency: "USD",
            value: <?php echo number_format((float)$order['total'], 2, '.', ''); ?>,
            content_type: "product",
            content_ids: [
                <?php
                $ids = array_map(function ($item) {
                    return '"' . $item['item_id'] . '"';
                }, $order_items);
                echo implode(',', $ids);
                ?>
            ],
            order_id: "<?php echo htmlspecialchars($order['auto_no']); ?>"
        });
    });
</script>