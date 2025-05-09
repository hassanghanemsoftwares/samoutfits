<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-22 00:07:36 --> Could not find the language line "Home"
ERROR - 2024-08-22 00:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 00:18:38 --> Could not find the language line "Home"
ERROR - 2024-08-22 00:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 00:48:44 --> Could not find the language line "Home"
ERROR - 2024-08-22 00:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 01:05:51 --> Could not find the language line "Home"
ERROR - 2024-08-22 01:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 01:18:37 --> Could not find the language line "Home"
ERROR - 2024-08-22 01:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 01:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 01:48:38 --> Could not find the language line "Home"
ERROR - 2024-08-22 01:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 02:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 02:18:38 --> Could not find the language line "Home"
ERROR - 2024-08-22 02:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 02:29:47 --> Could not find the language line "Home"
ERROR - 2024-08-22 02:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 02:41:37 --> Could not find the language line "Other"
ERROR - 2024-08-22 02:48:38 --> Could not find the language line "Home"
ERROR - 2024-08-22 02:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 03:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 03:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 03:18:41 --> Could not find the language line "Home"
ERROR - 2024-08-22 03:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 03:33:10 --> Could not find the language line "Home"
ERROR - 2024-08-22 03:48:39 --> Could not find the language line "Home"
ERROR - 2024-08-22 04:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 04:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 04:18:40 --> Could not find the language line "Home"
ERROR - 2024-08-22 04:28:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-22 04:28:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-22 04:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 04:48:41 --> Could not find the language line "Home"
ERROR - 2024-08-22 05:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:02:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 05:02:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 05:02:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 05:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:18:41 --> Could not find the language line "Home"
ERROR - 2024-08-22 05:20:41 --> Could not find the language line "Home"
ERROR - 2024-08-22 05:20:48 --> Could not find the language line "Bracelets"
ERROR - 2024-08-22 05:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:22:01 --> Could not find the language line "Home"
ERROR - 2024-08-22 05:22:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-22 05:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 05:33:27 --> Could not find the language line "Home"
ERROR - 2024-08-22 05:48:41 --> Could not find the language line "Home"
ERROR - 2024-08-22 05:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:04:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-22 06:04:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-22 06:06:23 --> Could not find the language line "Home"
ERROR - 2024-08-22 06:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:12:14 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 06:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:14:59 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 06:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:18:42 --> Could not find the language line "Home"
ERROR - 2024-08-22 06:25:38 --> Could not find the language line "Other"
ERROR - 2024-08-22 06:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:37:42 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-08-22 06:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 06:48:41 --> Could not find the language line "Home"
ERROR - 2024-08-22 06:54:34 --> Could not find the language line "Home"
ERROR - 2024-08-22 07:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:08:34 --> Could not find the language line "Home"
ERROR - 2024-08-22 07:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:15:10 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 07:15:10 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 07:15:10 --> Could not find the language line "Perfume"
ERROR - 2024-08-22 07:15:11 --> Could not find the language line "Other"
ERROR - 2024-08-22 07:15:11 --> Could not find the language line "Other"
ERROR - 2024-08-22 07:15:12 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-08-22 07:15:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-22 07:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:18:42 --> Could not find the language line "Home"
ERROR - 2024-08-22 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:19:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 07:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 07:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 07:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:33:58 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-22 07:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 07:48:43 --> Could not find the language line "Home"
ERROR - 2024-08-22 07:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:13:10 --> Could not find the language line "Socks"
ERROR - 2024-08-22 08:18:42 --> Could not find the language line "Home"
ERROR - 2024-08-22 08:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:45:21 --> Could not find the language line "Home"
ERROR - 2024-08-22 08:45:26 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 08:48:43 --> Could not find the language line "Home"
ERROR - 2024-08-22 08:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:58:04 --> Could not find the language line "Home"
ERROR - 2024-08-22 08:58:57 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 08:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 08:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:01:02 --> Could not find the language line "Home"
ERROR - 2024-08-22 09:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:02:09 --> 404 Page Not Found: Assets/images
ERROR - 2024-08-22 09:02:09 --> 404 Page Not Found: Assets/images
ERROR - 2024-08-22 09:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:03:49 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 09:03:53 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 09:04:01 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 09:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:04:18 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 09:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:18:43 --> Could not find the language line "Home"
ERROR - 2024-08-22 09:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 09:47:49 --> Could not find the language line "Home"
ERROR - 2024-08-22 09:48:43 --> Could not find the language line "Home"
ERROR - 2024-08-22 09:53:30 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-08-22 10:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:07:52 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:07:52 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 10:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:07:53 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:08:03 --> Could not find the language line "products"
ERROR - 2024-08-22 10:10:18 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:14:06 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:18:44 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:28:57 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:28:58 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:29:02 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 10:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 10:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 10:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:48:45 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:51:48 --> Could not find the language line "Home"
ERROR - 2024-08-22 10:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 10:57:56 --> Could not find the language line "Other"
ERROR - 2024-08-22 11:00:11 --> Could not find the language line "Home"
ERROR - 2024-08-22 11:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 11:00:43 --> Could not find the language line "Home"
ERROR - 2024-08-22 11:02:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-22 11:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 11:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 11:07:16 --> Could not find the language line "Home"
ERROR - 2024-08-22 11:16:56 --> Could not find the language line "Home"
ERROR - 2024-08-22 11:18:46 --> Could not find the language line "Home"
ERROR - 2024-08-22 11:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 11:48:45 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:01:13 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:02:00 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:10:24 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:18:45 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:27:48 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:48:46 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:54:38 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:54:42 --> Could not find the language line "Bracelets"
ERROR - 2024-08-22 12:55:02 --> Could not find the language line "Bracelets"
ERROR - 2024-08-22 12:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 12:55:20 --> Could not find the language line "Bracelets"
ERROR - 2024-08-22 12:55:25 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:55:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-22 12:55:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-22 12:55:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-22 12:55:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-22 12:55:42 --> Could not find the language line "Home"
ERROR - 2024-08-22 12:56:10 --> Could not find the language line "Home"
ERROR - 2024-08-22 13:18:46 --> Could not find the language line "Home"
ERROR - 2024-08-22 13:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:48:46 --> Could not find the language line "Home"
ERROR - 2024-08-22 13:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 13:51:58 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:18:47 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:21:33 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:27:57 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 14:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:31:24 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:35:26 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:35:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-22 14:35:35 --> Could not find the language line "Socks"
ERROR - 2024-08-22 14:36:16 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:36:27 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:36:35 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:37:38 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:46:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-22 14:46:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-22 14:46:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-22 14:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 14:48:47 --> Could not find the language line "Home"
ERROR - 2024-08-22 14:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 15:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 15:18:48 --> Could not find the language line "Home"
ERROR - 2024-08-22 15:29:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-22 15:30:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 15:30:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 15:30:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 15:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 15:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 15:43:47 --> Could not find the language line "Home"
ERROR - 2024-08-22 15:44:13 --> Could not find the language line "Home"
ERROR - 2024-08-22 15:48:49 --> Could not find the language line "Home"
ERROR - 2024-08-22 16:03:02 --> Could not find the language line "Home"
ERROR - 2024-08-22 16:10:53 --> Could not find the language line "Other"
ERROR - 2024-08-22 16:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 16:13:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 16:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 16:13:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 16:13:21 --> Could not find the language line "Socks"
ERROR - 2024-08-22 16:18:49 --> Could not find the language line "Home"
ERROR - 2024-08-22 16:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 16:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 16:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 16:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 16:48:49 --> Could not find the language line "Home"
ERROR - 2024-08-22 16:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 17:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 17:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 17:04:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 17:04:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 17:04:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 17:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 17:18:49 --> Could not find the language line "Home"
ERROR - 2024-08-22 17:48:50 --> Could not find the language line "Home"
ERROR - 2024-08-22 17:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:18:50 --> Could not find the language line "Home"
ERROR - 2024-08-22 18:40:46 --> Could not find the language line "Home"
ERROR - 2024-08-22 18:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:47:02 --> Could not find the language line "Home"
ERROR - 2024-08-22 18:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:48:50 --> Could not find the language line "Home"
ERROR - 2024-08-22 18:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:50:10 --> Could not find the language line "Home"
ERROR - 2024-08-22 18:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:50:20 --> Could not find the language line "Socks"
ERROR - 2024-08-22 18:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:50:24 --> Could not find the language line "Socks"
ERROR - 2024-08-22 18:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:50:48 --> Could not find the language line "Socks"
ERROR - 2024-08-22 18:51:07 --> Could not find the language line "Socks"
ERROR - 2024-08-22 18:51:26 --> Could not find the language line "Socks"
ERROR - 2024-08-22 18:51:32 --> Could not find the language line "Socks"
ERROR - 2024-08-22 18:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 18:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 19:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 19:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 19:18:51 --> Could not find the language line "Home"
ERROR - 2024-08-22 19:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 19:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 19:27:21 --> Could not find the language line "Home"
ERROR - 2024-08-22 19:35:45 --> Could not find the language line "Home"
ERROR - 2024-08-22 19:42:27 --> Could not find the language line "Other"
ERROR - 2024-08-22 19:45:06 --> Could not find the language line "Socks"
ERROR - 2024-08-22 19:48:51 --> Could not find the language line "Home"
ERROR - 2024-08-22 20:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 20:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 20:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 20:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 20:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-22 20:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 20:16:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:18:51 --> Could not find the language line "Home"
ERROR - 2024-08-22 20:32:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-22 20:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-22 20:32:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-22 20:48:52 --> Could not find the language line "Home"
ERROR - 2024-08-22 20:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 21:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 21:18:52 --> Could not find the language line "Home"
ERROR - 2024-08-22 21:25:23 --> Could not find the language line "Home"
ERROR - 2024-08-22 21:32:14 --> Could not find the language line "Home"
ERROR - 2024-08-22 21:34:39 --> Could not find the language line "Home"
ERROR - 2024-08-22 21:35:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-22 21:46:04 --> Could not find the language line "Socks"
ERROR - 2024-08-22 21:48:53 --> Could not find the language line "Home"
ERROR - 2024-08-22 21:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:11:40 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:12:27 --> Could not find the language line "Home"
ERROR - 2024-08-22 22:13:13 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:13:28 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:14:51 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:15:10 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:15:37 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:16:13 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:16:53 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:17:02 --> Could not find the language line "Home"
ERROR - 2024-08-22 22:17:53 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:18:11 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:18:39 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:18:56 --> Could not find the language line "Home"
ERROR - 2024-08-22 22:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:19:59 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:20:26 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:20:50 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:21:02 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:21:22 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:21:36 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:22:06 --> Could not find the language line "Clothing"
ERROR - 2024-08-22 22:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:24:26 --> Could not find the language line "Home"
ERROR - 2024-08-22 22:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:25:29 --> Could not find the language line "Home"
ERROR - 2024-08-22 22:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:45:16 --> 404 Page Not Found: Ssphp/index
ERROR - 2024-08-22 22:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 22:48:53 --> Could not find the language line "Home"
ERROR - 2024-08-22 23:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 23:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 23:18:54 --> Could not find the language line "Home"
ERROR - 2024-08-22 23:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 23:33:58 --> Could not find the language line "products"
ERROR - 2024-08-22 23:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-22 23:48:54 --> Could not find the language line "Home"
ERROR - 2024-08-22 23:57:09 --> 404 Page Not Found: Assets/css
