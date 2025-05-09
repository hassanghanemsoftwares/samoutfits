<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-11 00:23:18 --> Could not find the language line "Home"
ERROR - 2024-09-11 00:53:18 --> Could not find the language line "Home"
ERROR - 2024-09-11 01:23:17 --> Could not find the language line "Home"
ERROR - 2024-09-11 01:53:18 --> Could not find the language line "Home"
ERROR - 2024-09-11 02:23:18 --> Could not find the language line "Home"
ERROR - 2024-09-11 02:53:19 --> Could not find the language line "Home"
ERROR - 2024-09-11 03:23:19 --> Could not find the language line "Home"
ERROR - 2024-09-11 03:43:20 --> Could not find the language line "Home"
ERROR - 2024-09-11 03:53:20 --> Could not find the language line "Home"
ERROR - 2024-09-11 04:20:55 --> Could not find the language line "Home"
ERROR - 2024-09-11 04:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 04:23:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 04:53:20 --> Could not find the language line "Home"
ERROR - 2024-09-11 05:04:15 --> Could not find the language line "Home"
ERROR - 2024-09-11 05:23:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 05:30:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 05:42:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 05:53:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:06:53 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:23:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:28:54 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:32:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-11 06:32:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-11 06:32:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-11 06:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:49:52 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:50:19 --> Could not find the language line "Bracelets"
ERROR - 2024-09-11 06:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:50:30 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:50:37 --> Could not find the language line "Perfume"
ERROR - 2024-09-11 06:50:52 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:53:23 --> Could not find the language line "Home"
ERROR - 2024-09-11 06:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 06:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:11:46 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:15:39 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:17:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:23:22 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:33:37 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 07:51:48 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:53:22 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:58:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 07:58:56 --> Could not find the language line "Home"
ERROR - 2024-09-11 08:04:40 --> Could not find the language line "Home"
ERROR - 2024-09-11 08:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:23:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 08:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:25:52 --> Could not find the language line "Home"
ERROR - 2024-09-11 08:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:42:19 --> Could not find the language line "Home"
ERROR - 2024-09-11 08:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:53:24 --> Could not find the language line "Home"
ERROR - 2024-09-11 08:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 08:58:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-11 08:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-11 08:58:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-11 09:05:24 --> Could not find the language line "Home"
ERROR - 2024-09-11 09:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:23:24 --> Could not find the language line "Home"
ERROR - 2024-09-11 09:25:18 --> Could not find the language line "Home"
ERROR - 2024-09-11 09:40:07 --> Could not find the language line "Home"
ERROR - 2024-09-11 09:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:53:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 09:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 09:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:12:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-11 10:12:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-11 10:12:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-11 10:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:16:04 --> Could not find the language line "Home"
ERROR - 2024-09-11 10:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:23:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 10:23:54 --> Could not find the language line "Home"
ERROR - 2024-09-11 10:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:50:00 --> Could not find the language line "Home"
ERROR - 2024-09-11 10:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:53:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 10:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 10:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 11:10:17 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:10:19 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:10:20 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:10:20 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:10:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:10:22 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:10:56 --> Could not find the language line "Perfume"
ERROR - 2024-09-11 11:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 11:22:50 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:22:53 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 11:23:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 11:26:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 11:26:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 11:27:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 11:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 11:33:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 11:53:26 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:03:10 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:04:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-11 12:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:06:31 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:14:34 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:20:46 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:21:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:22:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:22:32 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:22:40 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:23:25 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:33:10 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:36:49 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:36:57 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:15 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:44 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:42:46 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:46:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-11 12:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-11 12:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-11 12:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 12:53:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 12:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:04:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-11 13:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:23:27 --> Could not find the language line "Home"
ERROR - 2024-09-11 13:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:25:11 --> Could not find the language line "Home"
ERROR - 2024-09-11 13:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 13:27:12 --> Could not find the language line "Home"
ERROR - 2024-09-11 13:53:28 --> Could not find the language line "Home"
ERROR - 2024-09-11 13:58:49 --> Could not find the language line "Home"
ERROR - 2024-09-11 14:10:55 --> Could not find the language line "Home"
ERROR - 2024-09-11 14:14:16 --> Could not find the language line "Home"
ERROR - 2024-09-11 14:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:23:28 --> Could not find the language line "Home"
ERROR - 2024-09-11 14:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 14:53:28 --> Could not find the language line "Home"
ERROR - 2024-09-11 15:03:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-11 15:03:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-11 15:03:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-11 15:23:28 --> Could not find the language line "Home"
ERROR - 2024-09-11 15:53:30 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:00:34 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:01:10 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:23:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:34:51 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 16:35:43 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:36:45 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:36:57 --> Could not find the language line "Socks"
ERROR - 2024-09-11 16:37:22 --> Could not find the language line "Socks"
ERROR - 2024-09-11 16:37:23 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:40:20 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:40:56 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:40:56 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:41:30 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:44:33 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:53:30 --> Could not find the language line "Home"
ERROR - 2024-09-11 16:53:38 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:08:07 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:08:16 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:08:34 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:10:16 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:10:16 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:23:30 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:45:24 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 17:50:38 --> Could not find the language line "Home"
ERROR - 2024-09-11 17:53:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:06:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-11 18:06:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-11 18:06:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-11 18:14:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:14:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:20:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:21:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:21:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:21:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:21:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:22:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:22:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:23:30 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:36:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:37:52 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:37:53 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:37:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:38:53 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:53:31 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:54:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:56:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-11 18:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 18:56:42 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:56:50 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:58:44 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:58:44 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:58:44 --> Could not find the language line "Home"
ERROR - 2024-09-11 18:58:44 --> Could not find the language line "Home"
ERROR - 2024-09-11 19:06:21 --> Could not find the language line "Home"
ERROR - 2024-09-11 19:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 19:23:31 --> Could not find the language line "Home"
ERROR - 2024-09-11 19:53:33 --> Could not find the language line "Home"
ERROR - 2024-09-11 20:11:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-09-11 20:23:32 --> Could not find the language line "Home"
ERROR - 2024-09-11 20:53:32 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:15:15 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 21:15:53 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-11 21:16:29 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:16:32 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:23:34 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:29:03 --> 404 Page Not Found: Storage/settings
ERROR - 2024-09-11 21:46:37 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-09-11 21:51:08 --> Could not find the language line "Home"
ERROR - 2024-09-11 21:53:35 --> Could not find the language line "Home"
ERROR - 2024-09-11 22:23:36 --> Could not find the language line "Home"
ERROR - 2024-09-11 22:53:38 --> Could not find the language line "Home"
ERROR - 2024-09-11 23:23:34 --> Could not find the language line "Home"
ERROR - 2024-09-11 23:30:23 --> 404 Page Not Found: Home/users
ERROR - 2024-09-11 23:53:35 --> Could not find the language line "Home"
