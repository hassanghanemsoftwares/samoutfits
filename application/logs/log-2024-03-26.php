<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-03-26 08:47:18 --> Could not find the language line "Home"
ERROR - 2024-03-26 08:50:08 --> Could not find the language line "Home"
ERROR - 2024-03-26 08:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 08:50:26 --> Could not find the language line "Home"
ERROR - 2024-03-26 08:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 08:50:45 --> Query error: Column 'otp' cannot be null - Invalid query: INSERT INTO `orders` (`auto_no`, `customer_id`, `order_date`, `value_date`, `currency_id`, `currency_rate`, `description`, `status`, `coupon_id`, `discount`, `address`, `delivery_charge`, `otp`, `gest`) VALUES (25, '10', '2024-03-26', NULL, '8', 1, NULL, 'Received & Pending Approval', NULL, '0', 'LB-Tyre-new-s-b-f-Lebanon / Tyre', '3.5', NULL, NULL)
ERROR - 2024-03-26 08:52:06 --> Could not find the language line "Home"
ERROR - 2024-03-26 08:53:03 --> Could not find the language line "Home"
ERROR - 2024-03-26 08:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 08:54:22 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:11:44 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:12:28 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:12:53 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:13:47 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:14:30 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:15:07 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:15:48 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:28:19 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:28:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 09:29:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:29:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:29:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:29:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:29:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:29:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:29:25 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:29:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:29:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:29:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:31:11 --> Could not find the language line "products"
ERROR - 2024-03-26 09:32:15 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:32:49 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:33:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:33:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:38:06 --> Could not find the language line "Home"
ERROR - 2024-03-26 09:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:38:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:38:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:38:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 09:48:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:48:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 09:51:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 09:51:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:51:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 09:53:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 09:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 09:53:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 09:58:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 09:59:11 --> Could not find the language line "products"
ERROR - 2024-03-26 09:59:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 10:00:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:02:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:02:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:02:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:09:04 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:09:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:09:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:09:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:09:32 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:10:03 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:10:06 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:11:29 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 10:11:36 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 10:11:42 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 10:11:44 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 10:11:45 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:12:03 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 10:14:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 10:15:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 10:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:15:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 10:20:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:20:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:20:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:21:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 10:21:33 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:22:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:25:54 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 10:25:55 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:26:15 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:26:15 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 10:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 10:30:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:34:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:34:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:34:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:36:55 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 10:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:43:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-03-26 10:46:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:46:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:46:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:52:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:52:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:52:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:52:17 --> Could not find the language line "products"
ERROR - 2024-03-26 10:52:45 --> Could not find the language line "products"
ERROR - 2024-03-26 10:53:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 10:53:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 10:53:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:55:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 10:56:49 --> Could not find the language line "Home"
ERROR - 2024-03-26 10:59:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 10:59:09 --> Could not find the language line "products"
ERROR - 2024-03-26 11:00:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:01:14 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:02:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:02:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:02:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:06:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:06:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:06:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:08:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:08:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:09:23 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:09:41 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:13:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:13:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:13:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:13:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:13:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:13:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 11:16:08 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:19:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:19:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:19:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:20:26 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:20:48 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:21:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:21:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:21:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:23:55 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 11:24:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 11:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 11:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 11:29:10 --> Could not find the language line "products"
ERROR - 2024-03-26 11:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:30:51 --> Could not find the language line "products"
ERROR - 2024-03-26 11:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:33:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:33:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:33:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:34:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:34:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:39:35 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:39:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:39:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:42:33 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:43:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:43:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:43:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:44:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:51:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-03-26 11:51:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-03-26 11:51:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:51:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:51:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:52:31 --> Could not find the language line "Home"
ERROR - 2024-03-26 11:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 11:58:00 --> Could not find the language line "Other"
ERROR - 2024-03-26 11:58:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 11:58:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 11:58:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 11:59:36 --> Could not find the language line "Other"
ERROR - 2024-03-26 12:00:18 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:00:34 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:00:56 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 12:01:13 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 12:02:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:02:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:02:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:02:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 12:03:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-03-26 12:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:03:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-03-26 12:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:03:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-03-26 12:03:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-03-26 12:04:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 12:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:05:04 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 12:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-03-26 12:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-03-26 12:07:56 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:08:07 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:09:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:11:32 --> Could not find the language line "products"
ERROR - 2024-03-26 12:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:12:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:12:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:21:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 12:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:22:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:23:08 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:23:50 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:23:52 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 12:24:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 12:24:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 12:24:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:24:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:24:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:24:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 12:24:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 12:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:25:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 12:25:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 12:25:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:25:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:26:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:26:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:27:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:27:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:27:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:27:27 --> Could not find the language line "Other"
ERROR - 2024-03-26 12:27:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:28:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:28:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:29:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:29:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:29:11 --> Could not find the language line "products"
ERROR - 2024-03-26 12:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:29:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 12:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:30:16 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:30:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:30:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:30:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:33:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 12:36:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:36:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:36:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:43:20 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 12:46:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:46:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:46:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:49:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:49:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:49:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:49:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:49:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 12:50:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 12:54:00 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:54:50 --> Could not find the language line "Home"
ERROR - 2024-03-26 12:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 12:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 12:56:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:00:19 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:03:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 13:04:45 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:06:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:06:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:06:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:07:36 --> Could not find the language line "products"
ERROR - 2024-03-26 13:14:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 13:14:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 13:14:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:14:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:14:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:15:50 --> Could not find the language line "products"
ERROR - 2024-03-26 13:16:10 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:16:26 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:18:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:18:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:18:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:19:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:19:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:19:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:26:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:26:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:27:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 13:27:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 13:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:28:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:28:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:30:19 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:32:56 --> Could not find the language line "Other"
ERROR - 2024-03-26 13:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 13:35:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:35:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:35:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:37:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:37:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:38:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 13:38:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 13:38:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 13:41:39 --> Could not find the language line "Other"
ERROR - 2024-03-26 13:43:47 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 13:56:08 --> Could not find the language line "Home"
ERROR - 2024-03-26 13:56:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 13:56:12 --> Could not find the language line "products"
ERROR - 2024-03-26 14:00:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:03:00 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:06:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 14:06:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 14:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:17:44 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:17:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:17:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:20:34 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:21:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:21:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:21:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:22:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:22:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:22:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:23:56 --> Could not find the language line "products"
ERROR - 2024-03-26 14:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:26:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:26:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:26:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:31:43 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:31:44 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:32:06 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:32:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:32:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:32:29 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:32:33 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:33:01 --> Could not find the language line "users"
ERROR - 2024-03-26 14:33:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-03-26 14:33:30 --> Could not find the language line "Perfume"
ERROR - 2024-03-26 14:33:33 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 14:33:35 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:38 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:41 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:43 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:46 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:48 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:51 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:53 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:55 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:33:57 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:34:00 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:02 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:04 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:07 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:10 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:13 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:16 --> Could not find the language line "Other"
ERROR - 2024-03-26 14:34:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:34:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:34:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:34:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:34:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:34:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:34:33 --> Could not find the language line "Socks"
ERROR - 2024-03-26 14:34:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 14:34:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 14:34:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 14:36:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-03-26 14:36:10 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:37:07 --> Could not find the language line "products"
ERROR - 2024-03-26 14:37:12 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:37:33 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:37:34 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:39:22 --> Could not find the language line "Disclaimer"
ERROR - 2024-03-26 14:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:41:27 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:42:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-03-26 14:42:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-03-26 14:43:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-03-26 14:43:05 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:43:09 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:43:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:43:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:44:58 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-03-26 14:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:48:24 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:48:31 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:49:08 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:49:18 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:49:48 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:50:11 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:50:48 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:51:05 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:51:15 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:51:47 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:51:50 --> Could not find the language line "products"
ERROR - 2024-03-26 14:51:52 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:51:54 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:51:58 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 14:52:02 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:54:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:54:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:54:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:55:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:55:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:55:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:55:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 14:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 14:56:24 --> Could not find the language line "Home"
ERROR - 2024-03-26 14:57:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-03-26 14:59:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 14:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 14:59:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:00:19 --> Could not find the language line "Home"
ERROR - 2024-03-26 15:08:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:08:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:14:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:14:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:14:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:17:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 15:18:32 --> Could not find the language line "Other"
ERROR - 2024-03-26 15:19:25 --> Could not find the language line "products"
ERROR - 2024-03-26 15:24:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:24:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:25:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 15:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:29:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:29:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:29:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 15:30:45 --> Could not find the language line "Home"
ERROR - 2024-03-26 15:32:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:32:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:32:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:38:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:38:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:38:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 15:41:58 --> Could not find the language line "Home"
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 15:42:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 15:42:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:42:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 15:43:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 15:43:23 --> Could not find the language line "Home"
ERROR - 2024-03-26 15:44:14 --> Could not find the language line "products"
ERROR - 2024-03-26 15:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 15:47:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 15:47:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 15:47:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 16:00:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 16:00:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 16:00:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 16:00:22 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:14:54 --> Could not find the language line "products"
ERROR - 2024-03-26 16:27:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 16:27:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 16:27:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 16:27:10 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-03-26 16:27:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 16:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:32:12 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:38:35 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:39:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:39:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-03-26 16:40:54 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:43:21 --> Could not find the language line "products"
ERROR - 2024-03-26 16:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:44:03 --> Could not find the language line "products"
ERROR - 2024-03-26 16:44:45 --> Could not find the language line "products"
ERROR - 2024-03-26 16:45:06 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:45:24 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:46:09 --> Could not find the language line "products"
ERROR - 2024-03-26 16:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:46:51 --> Could not find the language line "products"
ERROR - 2024-03-26 16:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:48:16 --> Could not find the language line "products"
ERROR - 2024-03-26 16:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:49:18 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:49:40 --> Could not find the language line "products"
ERROR - 2024-03-26 16:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:52:32 --> Could not find the language line "Home"
ERROR - 2024-03-26 16:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 16:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 16:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 16:58:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 17:00:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:02:18 --> Could not find the language line "products"
ERROR - 2024-03-26 17:02:57 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:02:58 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:10:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 17:10:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 17:10:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 17:14:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 17:16:30 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:16:49 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 17:16:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 17:16:59 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:18:31 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:25:32 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:27:45 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:29:52 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:29:57 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:32:55 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 17:37:19 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:37:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 17:37:35 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:38:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 17:38:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 17:38:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 17:40:51 --> Could not find the language line "Home"
ERROR - 2024-03-26 17:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:55:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 17:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 17:59:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 17:59:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 17:59:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 18:00:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:12:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 18:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:17:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 18:17:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 18:17:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 18:19:27 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:20:42 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 18:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:21:19 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 18:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:21:36 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 18:21:49 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 18:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:22:07 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 18:22:27 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 18:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:24:24 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:26:27 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:26:28 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:26:36 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:26:48 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:29:32 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:30:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:31:34 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:31:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-03-26 18:33:46 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:43:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 18:46:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 18:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:51:22 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:51:24 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:53:52 --> Could not find the language line "Home"
ERROR - 2024-03-26 18:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:57:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 18:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 18:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:00:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 19:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:15:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 19:15:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 19:15:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 19:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:28:39 --> Could not find the language line "Home"
ERROR - 2024-03-26 19:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:29:31 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-03-26 19:29:31 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-03-26 19:30:19 --> Could not find the language line "Home"
ERROR - 2024-03-26 19:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:32:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 19:32:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 19:32:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 19:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:35:06 --> Could not find the language line "Home"
ERROR - 2024-03-26 19:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:45:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 19:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 19:45:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 19:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:51:01 --> Could not find the language line "products"
ERROR - 2024-03-26 19:51:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 19:51:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 19:51:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 19:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 19:52:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-03-26 19:53:41 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 19:53:52 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 19:53:57 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 20:00:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:05:24 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:05:31 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:06:24 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:06:58 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:07:14 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:07:47 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:08:02 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:08:20 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:08:30 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:09:11 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:09:28 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:10:13 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:10:56 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:02 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:06 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:08 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:11 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:14 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:17 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:26:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 20:26:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 20:26:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 20:26:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 20:28:52 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:29:51 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:30:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:31:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-03-26 20:31:07 --> Unable to connect to the database
ERROR - 2024-03-26 20:31:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 20:31:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-03-26 20:32:32 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:37:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 20:38:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 20:38:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 20:38:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 20:39:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 20:39:50 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:40:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 20:40:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 20:40:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 20:40:08 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:40:42 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:40:55 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:41:05 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:41:18 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:41:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 20:41:23 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:41:30 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:42:15 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:42:43 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 20:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 20:43:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 20:43:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 20:43:28 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:43:57 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:44:07 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:44:26 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:44:36 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:45:32 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:47:28 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-03-26 20:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:49:12 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:49:13 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:49:15 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:49:16 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:49:16 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:49:17 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:49:38 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:50:27 --> Could not find the language line "Clothing"
ERROR - 2024-03-26 20:50:47 --> Could not find the language line "Home"
ERROR - 2024-03-26 20:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:54:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 20:54:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 20:54:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 20:57:31 --> Could not find the language line "Bracelets"
ERROR - 2024-03-26 20:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 20:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:00:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:09:05 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 21:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 21:10:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 21:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:11:42 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:17:41 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:18:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 21:18:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 21:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:21:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 21:21:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 21:21:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 21:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:25:53 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:30:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:30:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 21:30:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 21:30:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 21:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:31:02 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:37:24 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:40:13 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:42:11 --> 404 Page Not Found: Storage/settings
ERROR - 2024-03-26 21:44:01 --> Could not find the language line "Home"
ERROR - 2024-03-26 21:44:02 --> 404 Page Not Found: Assets/mail
ERROR - 2024-03-26 21:46:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 21:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 21:46:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 21:48:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 21:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:52:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 21:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:00:23 --> Could not find the language line "Home"
ERROR - 2024-03-26 22:02:57 --> Could not find the language line "Home"
ERROR - 2024-03-26 22:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:09:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 22:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:18:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:30:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 22:36:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 22:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 22:36:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 22:40:25 --> Could not find the language line "Home"
ERROR - 2024-03-26 22:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 22:51:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 22:51:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 22:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 22:53:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 22:53:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 22:53:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 23:00:20 --> Could not find the language line "Home"
ERROR - 2024-03-26 23:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:12:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 23:20:17 --> Could not find the language line "Home"
ERROR - 2024-03-26 23:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-03-26 23:30:21 --> Could not find the language line "Home"
ERROR - 2024-03-26 23:37:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:50:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-03-26 23:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-03-26 23:50:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 100
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 102
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 109
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 113
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 114
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 120
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 128
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 184
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 220
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
ERROR - 2024-03-26 23:54:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 259
