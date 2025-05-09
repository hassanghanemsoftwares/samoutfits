<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-21 00:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 00:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 00:26:17 --> Could not find the language line "Home"
ERROR - 2024-09-21 00:56:18 --> Could not find the language line "Home"
ERROR - 2024-09-21 01:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 01:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 01:26:18 --> Could not find the language line "Home"
ERROR - 2024-09-21 01:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 01:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 01:56:18 --> Could not find the language line "Home"
ERROR - 2024-09-21 02:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 02:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 02:22:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-21 02:22:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-21 02:22:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-21 02:26:19 --> Could not find the language line "Home"
ERROR - 2024-09-21 02:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 02:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 02:56:20 --> Could not find the language line "Home"
ERROR - 2024-09-21 02:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 03:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 03:26:21 --> Could not find the language line "Home"
ERROR - 2024-09-21 03:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 03:56:22 --> Could not find the language line "Home"
ERROR - 2024-09-21 04:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 04:26:20 --> Could not find the language line "Home"
ERROR - 2024-09-21 04:56:20 --> Could not find the language line "Home"
ERROR - 2024-09-21 04:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 05:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 05:26:21 --> Could not find the language line "Home"
ERROR - 2024-09-21 05:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 05:35:22 --> Could not find the language line "Home"
ERROR - 2024-09-21 05:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 05:56:21 --> Could not find the language line "Home"
ERROR - 2024-09-21 06:09:08 --> Could not find the language line "Home"
ERROR - 2024-09-21 06:13:52 --> Could not find the language line "Home"
ERROR - 2024-09-21 06:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 06:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 06:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 06:26:22 --> Could not find the language line "Home"
ERROR - 2024-09-21 06:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 06:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 06:55:48 --> Could not find the language line "Home"
ERROR - 2024-09-21 06:55:49 --> Could not find the language line "Home"
ERROR - 2024-09-21 06:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 06:56:24 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:12:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 07:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:26:23 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:37:05 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:39:20 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:39:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 07:39:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 07:40:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 07:40:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 07:40:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 07:40:57 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:41:00 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:41:14 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:42:30 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:42:40 --> Could not find the language line "Perfume"
ERROR - 2024-09-21 07:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:42:55 --> Could not find the language line "Perfume"
ERROR - 2024-09-21 07:42:57 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:43:01 --> Could not find the language line "Socks"
ERROR - 2024-09-21 07:43:19 --> Could not find the language line "Socks"
ERROR - 2024-09-21 07:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:56:23 --> Could not find the language line "Home"
ERROR - 2024-09-21 07:56:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-21 07:56:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-21 07:56:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-21 07:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 07:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:04:25 --> Could not find the language line "Home"
ERROR - 2024-09-21 08:04:25 --> Could not find the language line "Home"
ERROR - 2024-09-21 08:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:26:24 --> Could not find the language line "Home"
ERROR - 2024-09-21 08:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 08:56:25 --> Could not find the language line "Home"
ERROR - 2024-09-21 08:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:15:07 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:26:25 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:26:26 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:32:49 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:38:27 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:46:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-21 09:46:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-21 09:46:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-21 09:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:54:57 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:55:13 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:55:32 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:55:37 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:55:37 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:55:37 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:55:49 --> Could not find the language line "Socks"
ERROR - 2024-09-21 09:55:56 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:56:08 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 09:56:26 --> Could not find the language line "Home"
ERROR - 2024-09-21 09:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 09:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 10:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 10:26:26 --> Could not find the language line "Home"
ERROR - 2024-09-21 10:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 10:56:25 --> Could not find the language line "Home"
ERROR - 2024-09-21 10:59:25 --> Could not find the language line "Home"
ERROR - 2024-09-21 11:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 11:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 11:05:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 11:05:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 11:05:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 11:18:32 --> Could not find the language line "Home"
ERROR - 2024-09-21 11:26:26 --> Could not find the language line "Home"
ERROR - 2024-09-21 11:56:26 --> Could not find the language line "Home"
ERROR - 2024-09-21 12:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:26:26 --> Could not find the language line "Home"
ERROR - 2024-09-21 12:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 12:56:27 --> Could not find the language line "Home"
ERROR - 2024-09-21 13:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:26:27 --> Could not find the language line "Home"
ERROR - 2024-09-21 13:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 13:56:29 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:10:58 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:10:59 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:11:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:11:34 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:11:35 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-21 14:11:35 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-21 14:11:35 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-21 14:11:35 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-21 14:11:35 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-21 14:11:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:12:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:12:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:12:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:13:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:13:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:13:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-21 14:13:03 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 14:19:37 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:19:46 --> Could not find the language line "Clothing"
ERROR - 2024-09-21 14:26:28 --> Could not find the language line "Home"
ERROR - 2024-09-21 14:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 14:56:28 --> Could not find the language line "Home"
ERROR - 2024-09-21 15:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 15:20:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-21 15:26:29 --> Could not find the language line "Home"
ERROR - 2024-09-21 15:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 15:56:29 --> Could not find the language line "Home"
ERROR - 2024-09-21 16:26:06 --> Could not find the language line "Home"
ERROR - 2024-09-21 16:26:29 --> Could not find the language line "Home"
ERROR - 2024-09-21 16:26:32 --> Could not find the language line "Other"
ERROR - 2024-09-21 16:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 16:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 16:56:29 --> Could not find the language line "Home"
ERROR - 2024-09-21 17:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 17:00:34 --> Could not find the language line "Home"
ERROR - 2024-09-21 17:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 17:26:30 --> Could not find the language line "Home"
ERROR - 2024-09-21 17:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-21 17:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 17:56:30 --> Could not find the language line "Home"
ERROR - 2024-09-21 18:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 18:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 18:26:30 --> Could not find the language line "Home"
ERROR - 2024-09-21 18:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 18:56:31 --> Could not find the language line "Home"
ERROR - 2024-09-21 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-21 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-21 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-21 19:23:15 --> Could not find the language line "Home"
ERROR - 2024-09-21 19:26:31 --> Could not find the language line "Home"
ERROR - 2024-09-21 19:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 19:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 19:56:34 --> Could not find the language line "Home"
ERROR - 2024-09-21 19:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 20:11:57 --> Could not find the language line "Home"
ERROR - 2024-09-21 20:26:33 --> Could not find the language line "Home"
ERROR - 2024-09-21 20:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 20:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 20:56:35 --> Could not find the language line "Home"
ERROR - 2024-09-21 21:26:33 --> Could not find the language line "Home"
ERROR - 2024-09-21 21:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 21:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 21:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 21:56:32 --> Could not find the language line "Home"
ERROR - 2024-09-21 22:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 22:26:39 --> Could not find the language line "Home"
ERROR - 2024-09-21 22:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-21 22:56:33 --> Could not find the language line "Home"
ERROR - 2024-09-21 23:26:33 --> Could not find the language line "Home"
ERROR - 2024-09-21 23:56:33 --> Could not find the language line "Home"
ERROR - 2024-09-21 23:57:09 --> Could not find the language line "Home"
