<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('send_admin_order_email')) {
  function send_admin_order_email($data)
  {
    $CI = &get_instance();
    $CI->load->library('email');
    $order = $data['order'];
    $order_items = $data['order_items'];
    $customer = $data['customer'];
    $emailConfig = [
      'protocol'     => 'smtp',
      'smtp_host'    => 'ssl://cloud2.lebstores.com',
      'smtp_port'    => 465,
      'smtp_user'    => 'orders@samoutfits.com',
      'smtp_pass'    => 'MyBusiness@2025',
      'mailtype'     => 'html',
      'charset'      => 'utf-8',
      'newline'      => "\r\n",
      'crlf'         => "\r\n",
      'wordwrap'     => TRUE,
      'priority'     => 1,
    ];

    $CI->email->initialize($emailConfig);
    $CI->email->from('orders@samoutfits.com', 'Samoutfits');

    $client_email = trim($customer['email'] ?? '');

    if (!empty($client_email)) {
        $CI->email->to($client_email);
        $CI->email->cc("orders@samoutfits.com");
    } else {
    $CI->email->to("orders@samoutfits.com");

    }

    // $CI->email->to("hassanghanemsoftwares@gmail.com");

    $CI->email->subject('🛒 Order Confirmation - #' . $order['auto_no']);


    $payment_color = ($order['payment_method'] === 'whish') ? 'red' : '#7f00ff';

    $message = '<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body style="margin:0;padding:0;font-family:Arial,sans-serif;background-color:#f7f7f7;">
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center" style="padding:20px;">
          <table width="600" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#ffffff;border-radius:8px;box-shadow:0 0 8px rgba(0,0,0,0.1);overflow:hidden;">
            <tr>
              <td style="padding:24px;">
                <h3 style="margin:0;text-align:center;font-size:24px;">Thank you.</h3>
                <p style="font-size:18px;text-align:center;margin:16px 0;">
                  Hello <strong style="font-weight:700;">' . htmlspecialchars($customer['account_name']) . '</strong> 👋 We have successfully received and confirmed your order.
                </p>
                <div style="text-align:center;margin-bottom:24px;">
                  <img src="' . base_url() . 'assets/img/order_summary_process.png"
                       alt="Order Process"
                       style="max-width:100%;height:auto;display:inline-block;" />
                </div>

                <div style="background-color:#d1a3ff;color:black;padding:16px;border-radius:6px;margin-bottom:24px;text-align:left;">
                  <ul style="list-style:none;padding:0;margin:0 auto;max-width:400px;">
                    <li style="margin-bottom:8px;">
                      <strong>Order Number:</strong>
                      <span style="color:#7f00ff;">' . htmlspecialchars($order['auto_no']) . '</span>
                    </li>
                    <li style="margin-bottom:8px;">
                      <strong>Order Value:</strong>
                      <span style="color:#7f00ff;">USD ' . number_format((float)$order['total'], 2) . '</span>
                    </li>
                    <li style="margin-bottom:8px;">
                      <strong>Status:</strong>
                      <span style="color:#7f00ff;">' . htmlspecialchars($order['status']) . '</span>
                    </li>
                    <li>
                      <strong>Payment Method:</strong>
                      <span style="color:' . $payment_color . ';">' . htmlspecialchars($order['payment_method']) . '</span>
                    </li>';

    if ($order['payment_method'] === "whish") {
      $message .= '<li>
                  <strong>Payment Status:</strong>
                  <span style="color:#7f00ff;">' . htmlspecialchars($order['payment_status']) . '</span>
                </li>';
    }

    $message .= '
                  </ul>
                </div>

                <div style="overflow-x:auto;margin-bottom:24px;">
                  <table width="100%" cellpadding="8" cellspacing="0" border="1" style="border-collapse:collapse;text-align:center;">
                    <thead style="background-color:#f0f0f0;">
                      <tr>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>';

    foreach ($order_items as $item) {
      $message .= '<tr>
                <td style="padding:8px;">
                  <img src="' . base_url() . 'accounting/assets/uploads/' . $item['image_name'] . '"
                       alt="Item Image"
                       style="height:80px;object-fit:contain;" />
                </td>
                <td style="padding:8px;">' . htmlspecialchars($item['description']) . '</td>
                <td style="padding:8px;">' . htmlspecialchars($item['size']) . '</td>
                <td style="padding:8px;">$' . number_format((float)$item['price'], 2) . '</td>
                <td style="padding:8px;">' . $item['qty'] . '</td>
                <td style="padding:8px;">$' . number_format((float)$item['price'] * $item['qty'], 2) . '</td>
              </tr>';
    }

    $message .= '</tbody>
                  </table>
                </div>

                <div style="height:20px;background-color:#d1a3ff;margin:24px 0;"></div>

                <p style="font-weight:700;text-align:center;margin:16px 0;">Your order will be packed and dispatched shortly. Expect it at your doorsteps within 2–3 working days.</p>
                <h3 style="text-align:center;margin:16px 0;">Rest assured.</h3>
                <p style="font-weight:700;text-align:center;margin:16px 0;">You will receive a call from the driver ahead of time.</p>

                <div style="height:20px;background-color:#d1a3ff;margin:24px 0;"></div>

                <h3 style="text-align:center;margin:16px 0;">Need Help?</h3>
                <p style="font-weight:700;text-align:center;margin:16px 0;">
                  For any assistance, feel free to contact our customer care Monday till Saturday, 8:00 am till 5:00 pm
                </p>
                <div style="text-align:center;margin:24px 0;">
                  <a href="tel:+96170615210">
                    <img src="' . base_url() . 'assets/img/order_summary_phone.png"
                         alt="Phone"
                         style="height:40px;max-width:100%;display:inline-block;" />
                  </a>
                </div>

                <div style="background-color:#d1a3ff;padding:16px;border-radius:6px;text-align:center;margin-bottom:24px;">
                  <a href="https://wa.me/96170615210">
                    <img src="' . base_url() . 'assets/img/order_summary_whatsapp.png"
                         alt="WhatsApp"
                         style="height:150px;max-width:100%;display:inline-block;" />
                  </a>
                </div>

                <div style="height:20px;background-color:#d1a3ff;margin:24px 0;"></div>

                <h3 style="text-align:center;margin:16px 0;">ON BEHALF OF SAM’S TEAM</h3>
                <p style="font-weight:700;text-align:center;margin:16px 0;">We truly appreciate your trust and support and are excited to get this order to you!</p>

                <div style="background-color:#d1a3ff;padding:24px;text-align:center;">
                  <img src="' . base_url() . 'assets/img/order_summary_happy.png"
                       alt=""
                       style="height:120px;max-width:100%;display:inline-block;margin-bottom:16px;" />
                  <div>
                    <a href="' . base_url() . '"
                       style="display:inline-block;padding:12px 30px;border:2px solid #7f00ff;border-radius:25px;color:#7f00ff;font-weight:700;font-size:14px;text-decoration:none;transition:all .3s;">
                      SHOP NOW
                    </a>
                  </div>
                  <div style="margin-top:10px;margin-bottom:20px;">
                    <a href="https://www.instagram.com/samoutfitslb" style="margin:0 5px;">
                      <img src="' . base_url() . 'assets/img/order_summary_insta.png" alt="Instagram" style="height:35px;">
                    </a>
                    <a href="https://www.facebook.com/samoutfits.lebanon" style="margin:0 5px;">
                      <img src="' . base_url() . 'assets/img/order_summary_facebook.png" alt="Facebook" style="height:35px;">
                    </a>
                    <a href="https://www.youtube.com/@SamOutfits" style="margin:0 5px;">
                      <img src="' . base_url() . 'assets/img/order_summary_youtube.png" alt="YouTube" style="height:35px;">
                    </a>
                  </div>
                </div>

              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>';


    // $CI->email->message($message);

    // if (!$CI->email->send()) {
    //   log_message('error', 'Order email failed: ' . $CI->email->print_debugger(['headers']));
    //   return false;
    // }

    return true;
  }
}
