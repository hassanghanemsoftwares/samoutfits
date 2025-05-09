<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-12 00:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:02:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:02:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:04:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:05:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 00:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:05:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 00:05:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-12 00:05:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 00:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:06:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 00:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:08:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 00:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:08:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 00:08:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-12 00:08:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 00:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:10:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:11:16 --> Could not find the language line "products"
ERROR - 2024-04-12 00:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:13:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 00:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:13:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:16:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 00:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:18:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 00:18:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 00:18:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:20:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:22:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:24:03 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:24:47 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-04-12 00:24:47 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-04-12 00:24:47 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-04-12 00:24:48 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-12 00:24:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-12 00:25:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 00:25:02 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-12 00:25:03 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-12 00:25:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 00:25:03 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-04-12 00:25:03 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-04-12 00:25:03 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-04-12 00:25:03 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-04-12 00:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:25:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:25:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:26:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:28:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:28:57 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:29:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:29:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:30:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:30:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:30:42 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:30:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 00:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:31:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:32:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:33:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:34:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:35:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:37:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:37:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:38:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:43:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:44:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:44:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:44:28 --> 404 Page Not Found: Products/products
ERROR - 2024-04-12 00:44:52 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:45:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:45:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:46:24 --> Could not find the language line "Home"
ERROR - 2024-04-12 00:47:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 00:47:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:48:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:49:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 00:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:49:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:50:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:50:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:52:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 00:52:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 00:52:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 00:53:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:54:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:54:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:57:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:57:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 00:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 00:58:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 00:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 00:58:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 00:59:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:00:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:00:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:00:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:01:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:01:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:01:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:02:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:02:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:02:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:03:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:04:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:04:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:05:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:05:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:05:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:05:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:05:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:06:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:07:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:07:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:09:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:09:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:09:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:10:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 01:11:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:12:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 01:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:12:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 01:13:00 --> Could not find the language line "products"
ERROR - 2024-04-12 01:13:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:13:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 01:13:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:13:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:14:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:14:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:16:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:16:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:16:58 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:17:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:17:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:20:41 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:20:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:21:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:21:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:21:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:21:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:21:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:22:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:24:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:25:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:25:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:29:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:30:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:30:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:30:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:31:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:31:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:33:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:34:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:35:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 01:35:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 01:35:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 01:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:37:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:38:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:41:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:41:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:46:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:47:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:47:30 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:50:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:50:29 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:51:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:52:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:53:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:53:41 --> Could not find the language line "Home"
ERROR - 2024-04-12 01:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:56:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:57:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:57:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 01:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 01:59:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 01:59:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:00:24 --> Could not find the language line "Home"
ERROR - 2024-04-12 02:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:02:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:02:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 02:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:03:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:07:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:08:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:09:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:09:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 02:09:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:13:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:14:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:14:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:14:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:15:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:15:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:18:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:19:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 02:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:19:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:19:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 02:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:20:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 02:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 02:20:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 02:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:23:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 02:23:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 02:23:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 02:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:26:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:26:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 02:27:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:30:21 --> Could not find the language line "Home"
ERROR - 2024-04-12 02:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:32:30 --> Could not find the language line "Perfume"
ERROR - 2024-04-12 02:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:34:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:34:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:35:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:35:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:36:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:36:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:37:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:37:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:38:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:38:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 02:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 02:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 02:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:45:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:46:10 --> Could not find the language line "Home"
ERROR - 2024-04-12 02:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:46:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 02:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:50:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:50:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:50:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:51:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 02:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:54:46 --> Could not find the language line "Home"
ERROR - 2024-04-12 02:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:55:21 --> Could not find the language line "Home"
ERROR - 2024-04-12 02:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:57:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-12 02:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:57:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:57:37 --> Could not find the language line "Home"
ERROR - 2024-04-12 02:59:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:59:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 02:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 02:59:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:03:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-12 03:03:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-12 03:03:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 03:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:04:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:04:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:04:33 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:05:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:05:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:05:54 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:08:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:08:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:08:08 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:09:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:09:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:09:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:09:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 03:09:33 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:12:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:12:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:12:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:12:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:13:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:13:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:13:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:13:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:14:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:14:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:15:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:15:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:15:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:16:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:16:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:17:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-12 03:17:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-12 03:17:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 03:18:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:18:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:19:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:19:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:20:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:22:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:23:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:24:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:24:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:24:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:25:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:25:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:26:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:27:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:27:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:36:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:36:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:36:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 03:36:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 03:36:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 03:36:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 03:36:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 03:36:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 03:37:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:38:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:38:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:38:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:39:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:39:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:40:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 03:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:40:38 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:42:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:44:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:44:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:46:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:46:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:48:07 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:48:55 --> Could not find the language line "products"
ERROR - 2024-04-12 03:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:49:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:49:28 --> Could not find the language line "Home"
ERROR - 2024-04-12 03:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:50:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:50:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:52:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:52:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:53:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:53:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:53:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 03:54:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 03:54:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 03:54:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 03:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:57:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 03:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 03:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:00:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 04:00:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 04:00:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 04:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:00:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:00:22 --> Could not find the language line "Home"
ERROR - 2024-04-12 04:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:01:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:01:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:02:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:02:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:02:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:03:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:03:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:03:47 --> Could not find the language line "Home"
ERROR - 2024-04-12 04:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:04:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:04:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:07:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:07:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:08:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:09:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:10:28 --> Could not find the language line "Home"
ERROR - 2024-04-12 04:10:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 04:11:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:11:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:13:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:14:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 04:14:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 04:14:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 04:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:15:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:17:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:21:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:22:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:24:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:24:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:26:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:27:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:27:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:29:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:29:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:29:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:30:22 --> Could not find the language line "Home"
ERROR - 2024-04-12 04:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:30:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:31:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:31:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:32:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 04:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:33:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:33:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:34:36 --> Could not find the language line "Other"
ERROR - 2024-04-12 04:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:34:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:34:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:34:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:35:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:35:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:36:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:37:09 --> Could not find the language line "Home"
ERROR - 2024-04-12 04:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:38:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 04:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:38:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:38:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:38:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:40:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:41:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 04:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:41:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:44:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:44:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:47:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:47:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:49:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:49:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:51:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:53:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:55:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:55:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:56:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 04:59:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:59:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 04:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:00:23 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:04:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:04:14 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:04:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 05:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 05:04:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 05:04:52 --> Could not find the language line "products"
ERROR - 2024-04-12 05:05:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:05:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 05:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:05:37 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:06:07 --> Could not find the language line "Other"
ERROR - 2024-04-12 05:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:07:04 --> Could not find the language line "Other"
ERROR - 2024-04-12 05:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:08:10 --> Could not find the language line "Other"
ERROR - 2024-04-12 05:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:08:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:08:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:08:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 05:08:26 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:09:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 05:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:10:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 05:10:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:11:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:11:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:12:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:12:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 05:12:36 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:13:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:15:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:16:01 --> Could not find the language line "products"
ERROR - 2024-04-12 05:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:16:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 05:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:20:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 05:20:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 05:20:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 05:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:21:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:23:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 05:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 05:23:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 05:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:27:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:29:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:29:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:30:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:30:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:30:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:34:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 05:34:45 --> Could not find the language line "Home"
ERROR - 2024-04-12 05:35:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 05:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:36:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:36:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:38:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:39:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:39:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:40:31 --> Could not find the language line "Bracelets"
ERROR - 2024-04-12 05:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:42:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:46:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:47:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 05:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:48:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:48:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 05:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:50:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:54:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:54:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 05:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 05:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-12 06:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:01:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 06:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 06:01:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 06:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:03:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:03:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:04:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:07:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:08:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:08:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:09:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:10:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:10:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:12:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:12:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:14:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:14:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:15:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:15:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:16:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 06:16:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:16:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:17:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:18:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:20:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:21:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:21:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:25:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:28:45 --> Could not find the language line "Other"
ERROR - 2024-04-12 06:28:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 06:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:31:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:33:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:33:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:34:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:34:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:36:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 06:36:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 06:36:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 06:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:40:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:42:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:42:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:44:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:44:42 --> Could not find the language line "Bracelets"
ERROR - 2024-04-12 06:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:46:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:46:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:47:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:47:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:48:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:48:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:48:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 06:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:49:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 06:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 06:49:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 06:50:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:51:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 06:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:53:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:54:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:54:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:55:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 06:55:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 06:55:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 06:56:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 06:56:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 06:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:56:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 06:57:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 06:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 06:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 06:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-12 07:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:02:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:02:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:04:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:04:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:04:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:04:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:04:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:05:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:09:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 07:09:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:10:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 07:10:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 07:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:11:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:12:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:16:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:16:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:16:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 07:17:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-12 07:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:17:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 07:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:18:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 07:19:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:19:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:19:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:19:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:20:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:22:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 07:23:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:24:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:24:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:25:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:26:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:26:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:28:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 07:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 07:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:41:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 07:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:41:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 07:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:41:33 --> Could not find the language line "Home"
ERROR - 2024-04-12 07:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:42:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:44:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:47:29 --> Could not find the language line "Home"
ERROR - 2024-04-12 07:47:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:47:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:48:36 --> Could not find the language line "Home"
ERROR - 2024-04-12 07:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:49:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:51:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:51:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 07:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:51:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:53:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:53:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:55:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:55:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:57:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 07:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 07:58:58 --> Could not find the language line "Home"
ERROR - 2024-04-12 07:59:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 07:59:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 08:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 08:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:06:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:06:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:07:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:08:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:09:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 08:10:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 08:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:15:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:15:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:15:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:20:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 08:20:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 08:20:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 08:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:21:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 08:21:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 08:21:27 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 08:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:21:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:21:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:23:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 08:23:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:23:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:27:02 --> Could not find the language line "products"
ERROR - 2024-04-12 08:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:28:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:29:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:29:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:29:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:30:11 --> Could not find the language line "Home"
ERROR - 2024-04-12 08:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:34:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 08:34:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 08:34:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 08:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:37:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:38:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:42:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:42:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:42:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 08:42:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 08:42:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 08:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:44:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:48:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:48:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:48:31 --> Could not find the language line "Home"
ERROR - 2024-04-12 08:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:49:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:49:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:50:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-12 08:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 08:53:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 08:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 08:56:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:00:23 --> Could not find the language line "products"
ERROR - 2024-04-12 09:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:02:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-12 09:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:03:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 09:03:26 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:04:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:04:22 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:05:47 --> Could not find the language line "products"
ERROR - 2024-04-12 09:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:08:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:09:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 09:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 09:09:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 09:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:13:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:14:23 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:16:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:16:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:16:54 --> 404 Page Not Found: Products/products
ERROR - 2024-04-12 09:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:20:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:23:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 09:23:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 09:23:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 09:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:33:32 --> Could not find the language line "products"
ERROR - 2024-04-12 09:33:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 09:33:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 09:33:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 09:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 09:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:41:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:46:39 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:48:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 09:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:50:09 --> Could not find the language line "products"
ERROR - 2024-04-12 09:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:51:09 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:52:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 09:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:54:33 --> Could not find the language line "Home"
ERROR - 2024-04-12 09:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:55:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 09:55:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 09:55:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 09:55:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 09:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:58:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 09:58:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 09:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 09:59:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 09:59:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:02:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 10:02:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 10:02:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 10:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:05:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 10:05:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 10:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:06:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 10:06:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 10:06:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 10:06:47 --> Could not find the language line "products"
ERROR - 2024-04-12 10:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:07:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 10:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:07:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:07:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 10:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:07:55 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:12:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:16:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:16:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:17:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:17:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:18:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:18:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:21:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 10:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 10:21:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 10:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:22:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:25:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:26:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 10:26:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 10:26:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 10:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:28:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:28:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:31:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:32:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:34:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 10:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:35:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:39:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:39:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 10:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 10:40:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 10:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:45:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:46:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 10:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:46:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 10:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:47:18 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:47:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 10:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 10:47:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 10:47:23 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:47:37 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:47:49 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:47:54 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:47:57 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:47:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:48:00 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:48:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 10:48:07 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:48:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:49:03 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:49:54 --> Could not find the language line "Home"
ERROR - 2024-04-12 10:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:52:35 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-04-12 10:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:52:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:52:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:52:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:53:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 10:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:53:57 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-12 10:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 10:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 10:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 11:01:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:01:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:01:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:01:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:01:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 11:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:02:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:02:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:02:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 11:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:02:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:02:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:05:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:05:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:05:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:05:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:06:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:08:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:08:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:10:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:10:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:10:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:10:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:11:10 --> Could not find the language line "products"
ERROR - 2024-04-12 11:17:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:19:53 --> Could not find the language line "products"
ERROR - 2024-04-12 11:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:20:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:20:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:22:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:22:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:23:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:23:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:23:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:23:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:27:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:27:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:28:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:29:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 11:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:31:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:31:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:32:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:32:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:32:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:33:03 --> Could not find the language line "Socks"
ERROR - 2024-04-12 11:33:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:33:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:33:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:34:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:34:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:34:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:34:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:34:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:36:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:36:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:36:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:36:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:36:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:36:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:37:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:38:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:38:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:38:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:41:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:41:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:41:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:41:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:46:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:48:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:48:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:48:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:48:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:49:09 --> Could not find the language line "Home"
ERROR - 2024-04-12 11:49:32 --> Could not find the language line "products"
ERROR - 2024-04-12 11:49:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:49:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:49:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:52:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:52:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:53:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 11:53:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 11:53:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 11:54:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:59:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 11:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:59:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 11:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 11:59:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 12:01:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:02:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:04:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:05:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 12:05:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:05:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:06:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:07:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 12:08:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 12:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:08:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 12:08:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 12:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:08:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:13:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:15:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 12:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:20:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:21:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:21:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:22:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:22:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:22:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:24:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:24:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:24:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:28:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:28:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-12 12:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:30:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:30:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 12:31:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:31:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:31:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:33:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:35:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:36:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:36:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:36:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:37:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:38:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:39:17 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2024-04-12 12:39:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:40:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:41:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:42:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:43:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:43:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:44:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:45:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:47:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:49:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:49:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:49:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:49:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:50:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:50:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:51:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:52:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:53:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:54:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:55:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:56:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 12:57:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:57:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:58:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 12:58:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 12:58:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 12:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 12:59:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 13:00:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-12 13:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:02:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:03:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:03:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:05:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:06:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:07:21 --> Could not find the language line "Home"
ERROR - 2024-04-12 13:07:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:09:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:10:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:11:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:11:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:12:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:12:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:12:53 --> Could not find the language line "Home"
ERROR - 2024-04-12 13:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:14:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:15:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:15:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:16:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:18:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:19:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:19:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:19:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:21:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:23:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 13:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 13:24:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 13:24:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:25:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:26:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 13:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:35:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:35:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 13:35:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 13:35:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 13:36:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:36:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:37:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:37:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:38:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:39:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:39:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:44:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:44:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:44:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 13:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:45:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:45:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:46:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:46:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:49:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:49:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:51:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:51:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:52:30 --> Could not find the language line "Home"
ERROR - 2024-04-12 13:53:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:57:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 13:57:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:58:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 13:59:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 14:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:01:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:06:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:06:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:08:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:08:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:09:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:09:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:10:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:11:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:13:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:14:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:14:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:15:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:16:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:17:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:17:49 --> Could not find the language line "Other"
ERROR - 2024-04-12 14:18:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:19:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:20:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:20:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:21:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 14:21:10 --> Could not find the language line "Home"
ERROR - 2024-04-12 14:21:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:21:39 --> Could not find the language line "Home"
ERROR - 2024-04-12 14:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:22:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:22:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:23:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:23:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:24:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:25:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:25:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:25:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 14:26:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:27:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:28:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:28:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:28:26 --> Could not find the language line "Home"
ERROR - 2024-04-12 14:28:53 --> Could not find the language line "Home"
ERROR - 2024-04-12 14:29:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:29:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:30:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 14:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:31:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:31:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:35:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:37:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:38:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:39:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:39:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:41:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:44:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 14:44:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 14:44:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 14:46:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 14:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:47:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:47:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:48:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:49:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:50:05 --> Could not find the language line "products"
ERROR - 2024-04-12 14:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:52:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:57:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 14:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 14:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:00:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 15:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:01:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 15:01:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 15:01:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:02:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:03:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 15:03:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 15:03:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:04:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:06:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:07:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:09:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:10:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:11:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:12:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:13:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:14:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:15:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 15:15:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 15:15:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:15:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:16:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:17:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:17:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 15:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:19:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:21:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:22:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:23:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:24:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:25:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:27:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 15:27:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 15:27:27 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 15:27:35 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-12 15:27:35 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-12 15:27:35 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-12 15:27:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-12 15:28:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 15:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 15:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:29:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 15:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 15:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:30:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 15:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:31:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:32:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:33:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:34:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:35:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:36:04 --> Could not find the language line "Home"
ERROR - 2024-04-12 15:36:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:37:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:38:13 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-12 15:38:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:39:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:40:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:41:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:42:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 15:42:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:43:34 --> Could not find the language line "products"
ERROR - 2024-04-12 15:43:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:44:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 15:44:37 --> Could not find the language line "Home"
ERROR - 2024-04-12 15:44:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:45:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:46:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:47:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 15:47:17 --> Could not find the language line "Home"
ERROR - 2024-04-12 15:47:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:47:59 --> Could not find the language line "products"
ERROR - 2024-04-12 15:48:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:49:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:50:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:50:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 15:50:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 15:50:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:51:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:52:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:52:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:52:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:52:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 15:52:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 15:53:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-12 15:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-12 15:53:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 15:54:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:55:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:56:08 --> Could not find the language line "Home"
ERROR - 2024-04-12 15:56:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:57:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:58:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:58:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 15:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 16:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:00:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 16:01:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:04:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:05:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:06:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:07:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:08:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:08:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:08:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 16:08:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 16:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 16:08:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 16:09:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 16:10:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:10:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-12 16:11:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:14:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:16:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:20:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 16:20:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 16:20:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 16:23:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:24:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 16:27:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:29:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 16:31:39 --> Could not find the language line "Home"
ERROR - 2024-04-12 16:31:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:32:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:39:44 --> Could not find the language line "products"
ERROR - 2024-04-12 16:39:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 16:39:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 16:39:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 16:40:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:43:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:44:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:45:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:46:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:47:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:48:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:50:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:51:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:52:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:53:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:54:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 16:54:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:56:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:57:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:57:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 16:58:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 16:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 17:00:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:01:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:07:36 --> Could not find the language line "Home"
ERROR - 2024-04-12 17:08:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:08:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 17:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 17:16:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 17:17:30 --> Could not find the language line "Home"
ERROR - 2024-04-12 17:20:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 17:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:33:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:38:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:40:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:43:37 --> Could not find the language line "Home"
ERROR - 2024-04-12 17:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 17:46:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:47:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 17:47:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:51:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:52:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 17:59:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 18:00:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:01:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:02:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:03:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:03:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:04:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:05:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:06:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:07:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:08:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:09:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:10:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:11:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:12:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:13:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:14:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:15:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:16:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:17:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:18:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:19:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:20:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:21:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:22:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:22:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 18:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 18:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 18:23:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:24:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:27:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:28:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:29:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:29:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-12 18:30:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:31:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:32:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:33:14 --> Could not find the language line "Home"
ERROR - 2024-04-12 18:33:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:34:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:35:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:36:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:37:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:38:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:39:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:40:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 18:40:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 18:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 18:40:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:41:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:42:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 18:42:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 18:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:43:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:44:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:44:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 18:44:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 18:44:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 18:45:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:46:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:47:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:47:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 18:48:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:49:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:50:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:51:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:52:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:53:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 18:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 18:54:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 18:54:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-12 18:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-12 18:54:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 18:55:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:56:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 18:57:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 18:59:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 19:00:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:00:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:01:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:02:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:03:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:03:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 19:04:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 19:04:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 19:04:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 19:04:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:05:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:06:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:07:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:08:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:08:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 19:08:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 19:08:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 19:09:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:10:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:11:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:12:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:13:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:15:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:16:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:16:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:18:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:19:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:20:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:21:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:22:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:23:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:24:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:25:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:25:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:26:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:28:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:28:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:28:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:29:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 19:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:31:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 19:32:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:33:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:33:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:34:48 --> Could not find the language line "Home"
ERROR - 2024-04-12 19:34:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:35:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:36:20 --> 404 Page Not Found: Aboutphp/index
ERROR - 2024-04-12 19:36:31 --> 404 Page Not Found: Adminphp/index
ERROR - 2024-04-12 19:36:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:37:16 --> Could not find the language line "Home"
ERROR - 2024-04-12 19:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:37:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:38:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:39:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:40:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:41:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:42:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:43:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:44:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 19:44:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 19:44:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 19:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:45:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:46:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:47:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 19:47:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:48:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:49:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:50:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:51:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:52:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:53:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:54:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:54:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:55:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 19:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 19:56:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:57:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:58:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 19:59:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 20:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-12 20:00:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 20:01:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:01:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:02:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:02:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:03:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:03:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:04:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 20:05:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 20:06:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:07:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:08:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:08:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:09:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:10:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:11:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:11:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:12:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:13:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:13:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 20:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:15:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:16:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:16:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-12 20:17:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:18:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:19:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:22:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:23:36 --> Could not find the language line "products"
ERROR - 2024-04-12 20:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:25:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:25:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:26:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:28:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:29:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-12 20:30:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:33:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 20:33:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 20:33:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 20:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:34:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:36:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:37:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 20:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 20:37:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 20:37:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:38:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:39:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:39:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 20:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 20:39:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 20:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:41:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:41:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:43:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:43:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 20:43:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 20:43:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 20:44:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:45:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:47:07 --> Could not find the language line "Home"
ERROR - 2024-04-12 20:47:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 20:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 20:47:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 20:47:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:48:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 20:51:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:52:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:53:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:54:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:55:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:56:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:57:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:58:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 20:59:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:00:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:01:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:02:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:02:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:02:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:02:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:03:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:04:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:05:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:06:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:06:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:07:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:08:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:09:06 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:09:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 21:10:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 21:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 21:11:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:12:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:13:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:14:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:14:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:14:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:14:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:14:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:15:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:16:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:17:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:18:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:19:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 21:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 21:21:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:22:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:23:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 21:23:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:24:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:24:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:24:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:25:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:26:20 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:26:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:27:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:28:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:29:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:30:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:31:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:32:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 21:33:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:33:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 21:33:52 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:34:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:35:31 --> Could not find the language line "products"
ERROR - 2024-04-12 21:35:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:37:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:38:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:39:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:40:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:41:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:42:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:42:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:42:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:43:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:44:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:45:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:46:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:47:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:48:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:49:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:50:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:50:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:50:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:50:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:51:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:52:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:53:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:54:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:54:43 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:55:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:55:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:56:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:56:37 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:56:53 --> Could not find the language line "Home"
ERROR - 2024-04-12 21:57:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 21:57:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 21:57:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 21:57:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 21:58:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 21:59:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:00:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:00:43 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:01:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:02:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 22:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 22:03:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 22:03:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:03:43 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:04:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:05:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:06:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:06:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-12 22:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 22:07:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:08:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:09:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:09:14 --> Could not find the language line "Other"
ERROR - 2024-04-12 22:10:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:11:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:12:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:13:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 22:14:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:15:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:15:45 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:16:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:17:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:17:29 --> 404 Page Not Found: Products/products
ERROR - 2024-04-12 22:18:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:18:46 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:19:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:19:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:20:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:21:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:22:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:23:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:25:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:25:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:26:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:27:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:28:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:28:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 22:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:30:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:32:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 22:33:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:34:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:35:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:36:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:37:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:38:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:38:55 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:39:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:39:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 22:40:36 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:40:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:41:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:42:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:43:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 22:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 22:43:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:43:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 22:43:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-12 22:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-12 22:44:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:45:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:46:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:47:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:48:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:49:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 22:50:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:51:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:52:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:53:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:53:57 --> Could not find the language line "Home"
ERROR - 2024-04-12 22:54:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:55:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:56:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:57:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:58:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 22:59:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-12 23:00:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:01:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:02:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:02:31 --> Could not find the language line "Home"
ERROR - 2024-04-12 23:03:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:04:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:05:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:06:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:07:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:08:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-12 23:09:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:09:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 23:09:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 23:09:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 23:09:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 23:10:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:11:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:12:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:12:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 23:13:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:15:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:16:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:17:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:18:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:18:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:19:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 23:19:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:21:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:21:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 23:21:33 --> Could not find the language line "Home"
ERROR - 2024-04-12 23:21:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:22:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:24:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:24:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:25:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:26:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:27:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:28:48 --> Could not find the language line "products"
ERROR - 2024-04-12 23:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:29:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:30:26 --> Could not find the language line "Home"
ERROR - 2024-04-12 23:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:31:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 23:31:40 --> Could not find the language line "products"
ERROR - 2024-04-12 23:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:32:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:33:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:34:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:35:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:36:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:36:48 --> Could not find the language line "products"
ERROR - 2024-04-12 23:37:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:38:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:39:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:40:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:41:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:42:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-12 23:42:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:43:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:44:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:46:03 --> Could not find the language line "Home"
ERROR - 2024-04-12 23:46:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:47:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:48:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:49:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 23:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 23:49:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-12 23:49:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:50:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:51:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:52:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:53:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 23:53:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-12 23:53:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:53:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-12 23:54:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:55:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:56:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:57:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:58:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:59:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-12 23:59:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-12 23:59:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-12 23:59:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
