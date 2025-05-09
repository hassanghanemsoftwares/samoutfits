<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-04 00:21:30 --> Could not find the language line "Home"
ERROR - 2024-10-04 00:35:08 --> 404 Page Not Found: Env/index
ERROR - 2024-10-04 00:51:24 --> Could not find the language line "Home"
ERROR - 2024-10-04 01:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 01:21:23 --> Could not find the language line "Home"
ERROR - 2024-10-04 01:51:34 --> Could not find the language line "Home"
ERROR - 2024-10-04 02:21:21 --> Could not find the language line "Home"
ERROR - 2024-10-04 02:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 02:51:20 --> Could not find the language line "Home"
ERROR - 2024-10-04 03:21:23 --> Could not find the language line "Home"
ERROR - 2024-10-04 03:51:23 --> Could not find the language line "Home"
ERROR - 2024-10-04 04:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 04:21:21 --> Could not find the language line "Home"
ERROR - 2024-10-04 04:51:22 --> Could not find the language line "Home"
ERROR - 2024-10-04 05:21:22 --> Could not find the language line "Home"
ERROR - 2024-10-04 05:51:22 --> Could not find the language line "Home"
ERROR - 2024-10-04 06:21:24 --> Could not find the language line "Home"
ERROR - 2024-10-04 06:51:22 --> Could not find the language line "Home"
ERROR - 2024-10-04 07:21:28 --> Could not find the language line "Home"
ERROR - 2024-10-04 07:29:14 --> Could not find the language line "Home"
ERROR - 2024-10-04 07:51:24 --> Could not find the language line "Home"
ERROR - 2024-10-04 08:21:24 --> Could not find the language line "Home"
ERROR - 2024-10-04 08:25:03 --> Could not find the language line "Clothing"
ERROR - 2024-10-04 08:26:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-04 08:26:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-04 08:26:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-04 08:26:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-04 08:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-04 08:26:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-04 08:26:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-04 08:26:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-04 08:26:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-04 08:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 08:29:50 --> Could not find the language line "Home"
ERROR - 2024-10-04 08:51:27 --> Could not find the language line "Home"
ERROR - 2024-10-04 09:00:58 --> Could not find the language line "Home"
ERROR - 2024-10-04 09:21:24 --> Could not find the language line "Home"
ERROR - 2024-10-04 09:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 09:51:25 --> Could not find the language line "Home"
ERROR - 2024-10-04 10:21:27 --> Could not find the language line "Home"
ERROR - 2024-10-04 10:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 10:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 10:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 10:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 10:51:26 --> Could not find the language line "Home"
ERROR - 2024-10-04 10:56:38 --> Could not find the language line "Home"
ERROR - 2024-10-04 10:58:27 --> Could not find the language line "Home"
ERROR - 2024-10-04 11:21:26 --> Could not find the language line "Home"
ERROR - 2024-10-04 11:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 11:27:12 --> Could not find the language line "Home"
ERROR - 2024-10-04 11:51:26 --> Could not find the language line "Home"
ERROR - 2024-10-04 12:10:36 --> Could not find the language line "Home"
ERROR - 2024-10-04 12:21:28 --> Could not find the language line "Home"
ERROR - 2024-10-04 12:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 12:51:27 --> Could not find the language line "Home"
ERROR - 2024-10-04 13:21:28 --> Could not find the language line "Home"
ERROR - 2024-10-04 13:51:32 --> Could not find the language line "Home"
ERROR - 2024-10-04 14:21:28 --> Could not find the language line "Home"
ERROR - 2024-10-04 14:51:29 --> Could not find the language line "Home"
ERROR - 2024-10-04 15:21:29 --> Could not find the language line "Home"
ERROR - 2024-10-04 15:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 15:34:30 --> Could not find the language line "Home"
ERROR - 2024-10-04 15:51:30 --> Could not find the language line "Home"
ERROR - 2024-10-04 16:13:43 --> Could not find the language line "Home"
ERROR - 2024-10-04 16:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:16:08 --> Could not find the language line "Home"
ERROR - 2024-10-04 16:16:10 --> Could not find the language line "Home"
ERROR - 2024-10-04 16:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:21:29 --> Could not find the language line "Home"
ERROR - 2024-10-04 16:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 16:51:29 --> Could not find the language line "Home"
ERROR - 2024-10-04 17:21:17 --> Could not find the language line "Home"
ERROR - 2024-10-04 17:21:30 --> Could not find the language line "Home"
ERROR - 2024-10-04 17:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 17:51:31 --> Could not find the language line "Home"
ERROR - 2024-10-04 18:21:31 --> Could not find the language line "Home"
ERROR - 2024-10-04 18:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 18:51:31 --> Could not find the language line "Home"
ERROR - 2024-10-04 19:21:33 --> Could not find the language line "Home"
ERROR - 2024-10-04 19:51:31 --> Could not find the language line "Home"
ERROR - 2024-10-04 20:21:32 --> Could not find the language line "Home"
ERROR - 2024-10-04 20:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 20:51:33 --> Could not find the language line "Home"
ERROR - 2024-10-04 21:21:33 --> Could not find the language line "Home"
ERROR - 2024-10-04 21:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 21:51:34 --> Could not find the language line "Home"
ERROR - 2024-10-04 21:54:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-04 22:11:35 --> Could not find the language line "Home"
ERROR - 2024-10-04 22:21:41 --> Could not find the language line "Home"
ERROR - 2024-10-04 22:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 22:51:39 --> Could not find the language line "Home"
ERROR - 2024-10-04 23:21:40 --> Could not find the language line "Home"
ERROR - 2024-10-04 23:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-04 23:51:46 --> Could not find the language line "Home"
