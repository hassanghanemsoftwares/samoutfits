<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-16 00:00:28 --> Could not find the language line "Home"
ERROR - 2024-04-16 00:08:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:12:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:13:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 00:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:23:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 00:24:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 00:24:24 --> Could not find the language line "Home"
ERROR - 2024-04-16 00:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:24:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:24:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:25:01 --> Could not find the language line "Other"
ERROR - 2024-04-16 00:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-16 00:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:32:33 --> Could not find the language line "products"
ERROR - 2024-04-16 00:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:36:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 00:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:39:06 --> Could not find the language line "Home"
ERROR - 2024-04-16 00:40:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:41:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 00:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:45:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 00:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:46:45 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-16 00:47:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 00:47:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 00:47:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 00:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:49:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 00:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:56:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:56:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 00:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 00:59:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 01:00:25 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:06:38 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:07:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:07:26 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:08:23 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:08:45 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:08:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 01:08:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 01:09:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:09:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:09:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:09:39 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:09:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:09:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:10:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:10:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:11:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:11:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:11:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:12:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:12:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:12:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:12:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:12:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:12:54 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:16:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:19:31 --> Could not find the language line "products"
ERROR - 2024-04-16 01:19:34 --> Could not find the language line "Other"
ERROR - 2024-04-16 01:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:25:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:26:01 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 01:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:26:13 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 01:26:25 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:26:38 --> Could not find the language line "Socks"
ERROR - 2024-04-16 01:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:26:53 --> Could not find the language line "Socks"
ERROR - 2024-04-16 01:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:26:59 --> Could not find the language line "Socks"
ERROR - 2024-04-16 01:27:02 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:27:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:27:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:27:32 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:27:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 01:27:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 01:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:28:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 01:28:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:28:37 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:29:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:29:23 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:32:23 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:32:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 01:32:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 01:32:40 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:37:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 01:37:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 01:37:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:40:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:40:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:41:31 --> Could not find the language line "Socks"
ERROR - 2024-04-16 01:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:44:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 01:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:47:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 01:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 01:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:48:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 01:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:50:25 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:50:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:50:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:50:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:50:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:51:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 01:51:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:51:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:51:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:51:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:51:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 01:51:44 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:51:47 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 01:52:14 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 01:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:52:27 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 01:52:30 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:52:38 --> Could not find the language line "Perfume"
ERROR - 2024-04-16 01:52:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 01:52:51 --> Could not find the language line "Perfume"
ERROR - 2024-04-16 01:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:52:58 --> Could not find the language line "Perfume"
ERROR - 2024-04-16 01:53:00 --> Could not find the language line "Perfume"
ERROR - 2024-04-16 01:53:01 --> Could not find the language line "Home"
ERROR - 2024-04-16 01:56:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:56:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:56:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 01:56:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 01:59:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 02:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-16 02:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:00:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:00:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:00:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:06:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 02:08:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 02:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:13:08 --> Could not find the language line "Home"
ERROR - 2024-04-16 02:15:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 02:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:20:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 02:24:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 02:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:28:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:28:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:30:43 --> Could not find the language line "Home"
ERROR - 2024-04-16 02:32:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 02:37:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 02:39:23 --> Could not find the language line "Socks"
ERROR - 2024-04-16 02:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:39:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 02:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:40:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 02:44:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:47:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 02:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:51:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 02:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 02:53:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:53:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 02:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-16 02:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-16 02:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 03:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 03:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:02:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 03:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:04:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:05:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:05:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:09:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:09:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:13:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:13:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:17:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:17:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:21:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:25:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:25:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:30:32 --> Could not find the language line "Home"
ERROR - 2024-04-16 03:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:33:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:34:53 --> Could not find the language line "products"
ERROR - 2024-04-16 03:37:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 03:37:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 03:37:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 03:40:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 03:41:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:41:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:45:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:45:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:45:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:45:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:45:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:45:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:49:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:49:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:49:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:49:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:50:40 --> Could not find the language line "Home"
ERROR - 2024-04-16 03:51:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 03:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 03:55:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 03:55:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 03:57:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:57:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:57:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 03:57:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 03:57:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 04:00:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:01:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 04:01:12 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-04-16 04:01:12 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-04-16 04:01:13 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-04-16 04:01:14 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-04-16 04:03:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 04:04:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 04:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:05:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 04:07:04 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-04-16 04:07:06 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:07:07 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2024-04-16 04:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:14:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 04:14:13 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-16 04:14:18 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 04:14:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 04:14:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:14:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 04:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:23:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 04:25:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 04:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:25:42 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:30:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:37:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 04:39:24 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:51:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 04:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:52:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 04:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:57:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 04:57:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 04:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 04:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:00:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 05:04:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 05:04:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 05:04:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:04:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:05:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:05:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:05:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:06:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:06:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-16 05:06:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 05:07:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-16 05:07:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 05:07:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 05:07:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 05:07:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 05:07:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-16 05:07:39 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-16 05:07:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-16 05:08:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-16 05:08:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-16 05:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:09:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:09:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:10:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 05:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:13:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:13:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:17:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:20:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 05:20:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 05:20:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 05:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:21:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:21:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:25:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 05:25:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:29:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:29:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:29:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 05:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:29:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 05:30:23 --> Could not find the language line "Home"
ERROR - 2024-04-16 05:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 05:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 05:34:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 05:34:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 05:34:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 05:34:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 05:39:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 05:40:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 05:40:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 05:40:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 05:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 05:54:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 05:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:00:56 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:01:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:01:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:05:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:05:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:05:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 06:06:38 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:07:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:09:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:13:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:15:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 06:15:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 06:15:34 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:16:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 06:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 06:16:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 06:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:25:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:25:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:27:08 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:27:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 06:27:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 06:27:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 06:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:29:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:33:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:34:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 06:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:37:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:41:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:45:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 06:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:49:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:49:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 06:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:55:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 06:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 06:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-16 07:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:01:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:01:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:01:37 --> Could not find the language line "Home"
ERROR - 2024-04-16 07:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 07:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:05:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:09:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:09:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:13:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 07:13:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:13:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:14:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 07:17:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-16 07:30:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-16 07:31:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 07:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:37:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:37:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:38:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 07:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:38:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 07:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:41:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:41:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:47:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-16 07:48:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 07:49:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:49:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:53:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:53:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:55:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 07:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:56:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 07:57:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:57:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 07:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 07:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:08:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 08:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:17:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:17:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 08:17:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 08:17:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 08:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:20:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:21:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:21:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:28:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:29:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 08:29:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 08:29:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 08:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:44:43 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:46:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 08:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 08:46:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 08:47:20 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:47:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 08:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:54:04 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 08:57:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 08:57:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 08:59:08 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:59:11 --> Could not find the language line "Home"
ERROR - 2024-04-16 08:59:39 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:01:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 09:01:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 09:01:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 09:01:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 09:01:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 09:01:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 09:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:02:55 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:02:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 09:02:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 09:02:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 09:02:58 --> 404 Page Not Found: Home/accounts
ERROR - 2024-04-16 09:02:58 --> 404 Page Not Found: Home/home
ERROR - 2024-04-16 09:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:03:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 09:03:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 09:03:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 09:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:04:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 09:04:43 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:04:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:05:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:09:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 09:09:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 09:09:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 09:09:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 09:09:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:09:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:13:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 09:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:14:30 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:19:18 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:19:20 --> 404 Page Not Found: Wp-includes/css
ERROR - 2024-04-16 09:19:24 --> 404 Page Not Found: Media/system
ERROR - 2024-04-16 09:19:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:19:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:25:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:29:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:29:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:29:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:30:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:30:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:30:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:31:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:31:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:31:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:31:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:31:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:31:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 09:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:40:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 09:40:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 09:40:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 09:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:41:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:44:39 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:46:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 09:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:49:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:53:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:57:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:57:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 09:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:57:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 09:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 09:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:01:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 10:01:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 10:01:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 10:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:01:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:01:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 10:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:05:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:07:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:07:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:07:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:07:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:10:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 10:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:20:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 10:20:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 10:20:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 10:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:25:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:26:29 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:28:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:32:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:33:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:33:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:34:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 10:34:53 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 10:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:37:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:37:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 10:37:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:37:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:39:56 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:42:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:42:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:43:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:43:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 10:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:47:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 10:47:28 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:47:32 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:49:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:51:29 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:51:29 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:53:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 10:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:56:39 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:56:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:56:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 10:57:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:57:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:58:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 10:59:18 --> Could not find the language line "Home"
ERROR - 2024-04-16 10:59:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 11:00:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 11:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:07:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 11:07:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:07:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 11:07:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-16 11:07:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 11:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:09:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:09:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:09:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:18:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 11:18:04 --> Could not find the language line "accounts"
ERROR - 2024-04-16 11:20:39 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:22:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:22:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:26:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:26:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:26:25 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:27:27 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:30:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:35:20 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:38:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:38:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:41:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:08 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:28 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:30 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:32 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:32 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:36 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:38 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:41 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:55 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:55 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:41:55 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:42:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:42:20 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:42:28 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:42:29 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:42:42 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:45:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 11:45:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 11:45:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 11:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:46:31 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:48:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:53:02 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:53:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:53:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:53:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:53:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:53:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 11:53:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 11:53:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 11:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:54:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:54:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:57:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 11:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:58:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 11:58:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 11:58:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 11:59:27 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:00:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:01:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 12:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:02:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:03:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 12:03:33 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:03:33 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:03:34 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:03:53 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:04:09 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:04:09 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:04:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 12:04:36 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:05:35 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:05:40 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:06:40 --> Could not find the language line "products"
ERROR - 2024-04-16 12:07:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 12:07:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 12:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 12:07:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 12:10:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:10:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 12:10:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:14:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 12:14:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:14:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:15:01 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:15:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:15:18 --> Could not find the language line "Perfume"
ERROR - 2024-04-16 12:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:20:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 12:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:26:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:30:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 12:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:38:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:38:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:39:31 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:39:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:40:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:42:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:42:35 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-04-16 12:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:56:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 12:58:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:58:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:58:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 12:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 12:59:34 --> Could not find the language line "users"
ERROR - 2024-04-16 13:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:02:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:06:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 13:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:08:23 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:10:33 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:11:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 13:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:18:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:18:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:19:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 13:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:21:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 13:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:32:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 13:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:41:40 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:42:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 13:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:43:45 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:45:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 13:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 13:46:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 13:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:47:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 13:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 13:47:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 13:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:52:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 13:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:56:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:56:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 13:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:57:17 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:57:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 13:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 13:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 14:02:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 15 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '10'
AND `items`.`color` IN('N')
AND `transaction_item_sizes`.`size` IN('A')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 14:02:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 14:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 14:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 15 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '10'
AND `items`.`color` IN('N')
AND `transaction_item_sizes`.`size` IN('A')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 14:02:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 14:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:11:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 14:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:17:41 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:18:15 --> 404 Page Not Found: Products/products
ERROR - 2024-04-16 14:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:18:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:18:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:19:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:19:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:20:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:20:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:20:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 14:21:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:23:29 --> Could not find the language line "products"
ERROR - 2024-04-16 14:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:27:04 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:27:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 14:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:30:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:30:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:30:51 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:34:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 14:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:38:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:41:42 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:42:00 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:42:09 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:43:53 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:49:37 --> Could not find the language line "products"
ERROR - 2024-04-16 14:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:50:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:51:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 14:51:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:51:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:51:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:52:30 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 14:55:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 14:55:34 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:55:37 --> Could not find the language line "Home"
ERROR - 2024-04-16 14:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:57:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 14:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 14:58:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:01:08 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:06:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:09:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:14:08 --> Could not find the language line "Socks"
ERROR - 2024-04-16 15:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:20:58 --> Could not find the language line "products"
ERROR - 2024-04-16 15:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:22:01 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-16 15:22:02 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:22:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 15:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:22:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:26:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:28:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 15:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:30:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:36:00 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:36:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:36:39 --> Could not find the language line "products"
ERROR - 2024-04-16 15:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:38:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:42:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:42:42 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:46:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 15:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:46:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:47:25 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:47:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:48:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 15:48:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:58:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 15:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 15:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 16:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:02:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 16:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:09:26 --> Could not find the language line "Home"
ERROR - 2024-04-16 16:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:18:47 --> 404 Page Not Found: Products/products
ERROR - 2024-04-16 16:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:25:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 16:26:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 16:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 16:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 16:33:10 --> Could not find the language line "Other"
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 16:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:42:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 16:42:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 16:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:48:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-16 16:50:05 --> Could not find the language line "Home"
ERROR - 2024-04-16 16:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:53:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-16 16:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:55:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 16:57:21 --> Could not find the language line "Other"
ERROR - 2024-04-16 16:58:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 16:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 16:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:00:19 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:00:35 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:01:04 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:02:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 17:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:02:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:06:07 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:07:01 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:09:57 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:14:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:16:48 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:18:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:20:04 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:22:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:25:03 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:26:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 17:26:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 17:26:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 17:26:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 17:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:28:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:33:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 17:33:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 17:33:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 17:34:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 17:34:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 17:34:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:35:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 17:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:39:39 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:41:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 17:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:44:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:50:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 17:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:54:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:54:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 17:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 17:55:07 --> Could not find the language line "Other"
ERROR - 2024-04-16 17:55:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 17:57:08 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:03:12 --> Could not find the language line "Socks"
ERROR - 2024-04-16 18:03:28 --> Could not find the language line "Other"
ERROR - 2024-04-16 18:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:06:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:08:51 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:09:36 --> Could not find the language line "Other"
ERROR - 2024-04-16 18:10:06 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:12:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 18:17:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 18:17:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 18:17:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 18:18:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:29:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 18:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 18:29:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 18:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 18:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 18:33:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 18:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:37:04 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:37:26 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:37:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 18:37:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 18:37:47 --> Could not find the language line "Home"
ERROR - 2024-04-16 18:37:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 18:38:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-16 18:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:42:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:42:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:42:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:46:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 18:46:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 18:46:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 18:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:46:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:54:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 18:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 18:58:29 --> Could not find the language line "Other"
ERROR - 2024-04-16 19:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:05:37 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:06:02 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:06:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:06:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:10:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:13:13 --> Could not find the language line "Other"
ERROR - 2024-04-16 19:14:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 19:14:57 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:18:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 19:18:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 19:20:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-16 19:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:26:58 --> Could not find the language line "Perfume"
ERROR - 2024-04-16 19:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:30:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:33:31 --> Could not find the language line "Bracelets"
ERROR - 2024-04-16 19:34:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:35:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 19:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:38:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 19:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:38:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:38:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:40:06 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:44:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 19:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:45:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 19:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:46:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:52:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-04-16 19:54:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 19:54:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 19:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 19:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 19:59:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 20:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-16 20:02:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 20:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:11:49 --> Could not find the language line "Home"
ERROR - 2024-04-16 20:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:14:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 20:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:19:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 20:19:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 20:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 20:19:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 20:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:27:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 20:27:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 20:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 20:27:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 20:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-16 20:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 20:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:32:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 20:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:39:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 20:41:42 --> Could not find the language line "products"
ERROR - 2024-04-16 20:42:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 20:43:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 20:43:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 20:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:43:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 20:46:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 20:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:51:36 --> Could not find the language line "Home"
ERROR - 2024-04-16 20:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 20:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:03:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 21:03:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 21:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:07:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 21:07:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 21:10:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 21:11:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 21:12:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-16 21:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:15:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 21:16:58 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:19:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 21:19:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 21:19:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 21:19:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 21:21:12 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:21:27 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:24:42 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:27:08 --> Could not find the language line "Other"
ERROR - 2024-04-16 21:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:28:53 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:29:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 21:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:31:54 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 21:32:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 21:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:35:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 21:35:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 21:35:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 21:35:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 21:35:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 21:37:50 --> Could not find the language line "Home"
ERROR - 2024-04-16 21:39:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 21:42:02 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-16 21:43:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-16 21:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-16 21:43:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 21:43:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 21:46:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 21:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 21:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 21:55:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 21:57:40 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-16 21:57:43 --> Severity: error --> Exception: Too few arguments to function Home::search(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Home.php 108
ERROR - 2024-04-16 21:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:00:25 --> Could not find the language line "Home"
ERROR - 2024-04-16 22:02:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 22:02:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 22:02:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 22:03:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:19:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 22:19:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 22:19:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 22:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:25:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 22:25:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 22:25:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 22:25:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 22:25:59 --> Could not find the language line "Home"
ERROR - 2024-04-16 22:26:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 22:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-16 22:31:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:31:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 22:35:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:39:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:39:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:39:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-16 22:39:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 22:39:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 22:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-16 22:44:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 22:47:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 22:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 22:47:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 22:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:52:21 --> Could not find the language line "products"
ERROR - 2024-04-16 22:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:58:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 22:58:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 22:58:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 22:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 22:59:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:59:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 22:59:40 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:00:22 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:02:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 23:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 23:02:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 23:03:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:03:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:03:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:03:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:03:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:03:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:03:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:03:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:10:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 23:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:11:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:11:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:11:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 23:11:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-16 23:13:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 23:13:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:15:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:15:23 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:19:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:23:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:23:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:28:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 23:29:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 23:29:44 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:30:38 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:31:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:33:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-16 23:35:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:38:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-16 23:39:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-16 23:39:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-16 23:39:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-16 23:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:43:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:46:38 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:47:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 23:47:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:47:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:49:15 --> Could not find the language line "Home"
ERROR - 2024-04-16 23:51:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:51:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-16 23:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-16 23:58:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-16 23:59:22 --> 404 Page Not Found: Assets/css
