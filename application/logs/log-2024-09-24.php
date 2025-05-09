<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-24 00:17:09 --> Could not find the language line "Home"
ERROR - 2024-09-24 00:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 00:27:10 --> Could not find the language line "Home"
ERROR - 2024-09-24 00:57:11 --> Could not find the language line "Home"
ERROR - 2024-09-24 01:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 01:27:13 --> Could not find the language line "Home"
ERROR - 2024-09-24 01:57:14 --> Could not find the language line "Home"
ERROR - 2024-09-24 02:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 02:27:12 --> Could not find the language line "Home"
ERROR - 2024-09-24 02:30:06 --> Could not find the language line "Home"
ERROR - 2024-09-24 02:57:13 --> Could not find the language line "Home"
ERROR - 2024-09-24 03:27:13 --> Could not find the language line "Home"
ERROR - 2024-09-24 03:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 03:57:16 --> Could not find the language line "Home"
ERROR - 2024-09-24 04:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 04:27:14 --> Could not find the language line "Home"
ERROR - 2024-09-24 04:57:15 --> Could not find the language line "Home"
ERROR - 2024-09-24 05:27:15 --> Could not find the language line "Home"
ERROR - 2024-09-24 05:57:14 --> Could not find the language line "Home"
ERROR - 2024-09-24 06:27:15 --> Could not find the language line "Home"
ERROR - 2024-09-24 06:45:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-24 06:45:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-24 06:45:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-24 06:57:18 --> Could not find the language line "Home"
ERROR - 2024-09-24 07:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 07:27:16 --> Could not find the language line "Home"
ERROR - 2024-09-24 07:29:56 --> Could not find the language line "Home"
ERROR - 2024-09-24 07:57:16 --> Could not find the language line "Home"
ERROR - 2024-09-24 08:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 08:27:16 --> Could not find the language line "Home"
ERROR - 2024-09-24 08:56:54 --> Could not find the language line "Home"
ERROR - 2024-09-24 08:57:16 --> Could not find the language line "Home"
ERROR - 2024-09-24 08:57:21 --> Could not find the language line "Home"
ERROR - 2024-09-24 09:17:24 --> Could not find the language line "Home"
ERROR - 2024-09-24 09:27:18 --> Could not find the language line "Home"
ERROR - 2024-09-24 09:57:24 --> Could not find the language line "Home"
ERROR - 2024-09-24 10:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 10:27:17 --> Could not find the language line "Home"
ERROR - 2024-09-24 10:57:18 --> Could not find the language line "Home"
ERROR - 2024-09-24 11:21:38 --> Could not find the language line "Home"
ERROR - 2024-09-24 11:21:40 --> 404 Page Not Found: Cart/accounts
ERROR - 2024-09-24 11:21:40 --> 404 Page Not Found: Cart/home
ERROR - 2024-09-24 11:21:40 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-24 11:27:18 --> Could not find the language line "Home"
ERROR - 2024-09-24 11:57:19 --> Could not find the language line "Home"
ERROR - 2024-09-24 12:27:19 --> Could not find the language line "Home"
ERROR - 2024-09-24 12:34:01 --> Could not find the language line "Home"
ERROR - 2024-09-24 12:34:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-24 12:34:57 --> Could not find the language line "Home"
ERROR - 2024-09-24 12:57:19 --> Could not find the language line "Home"
ERROR - 2024-09-24 13:27:20 --> Could not find the language line "Home"
ERROR - 2024-09-24 13:57:20 --> Could not find the language line "Home"
ERROR - 2024-09-24 14:21:27 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-24 14:27:21 --> Could not find the language line "Home"
ERROR - 2024-09-24 14:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 14:57:21 --> Could not find the language line "Home"
ERROR - 2024-09-24 15:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 15:27:21 --> Could not find the language line "Home"
ERROR - 2024-09-24 15:29:31 --> Could not find the language line "Home"
ERROR - 2024-09-24 15:57:21 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:26:08 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:26:20 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:26:26 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:27:22 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:35:09 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 16:44:56 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 16:49:55 --> Could not find the language line "Home"
ERROR - 2024-09-24 16:57:22 --> Could not find the language line "Home"
ERROR - 2024-09-24 17:00:22 --> Could not find the language line "Home"
ERROR - 2024-09-24 17:00:25 --> Could not find the language line "Home"
ERROR - 2024-09-24 17:27:23 --> Could not find the language line "Home"
ERROR - 2024-09-24 17:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 17:57:23 --> Could not find the language line "Home"
ERROR - 2024-09-24 18:27:24 --> Could not find the language line "Home"
ERROR - 2024-09-24 18:56:04 --> Could not find the language line "Home"
ERROR - 2024-09-24 18:56:08 --> Could not find the language line "Home"
ERROR - 2024-09-24 18:57:04 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 18:57:24 --> Could not find the language line "Home"
ERROR - 2024-09-24 18:58:00 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 18:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 18:58:41 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 18:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 18:59:13 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 18:59:20 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:00:08 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 19:01:16 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:01:27 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:01:45 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:02:09 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:02:21 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 19:03:14 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 19:03:49 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 19:04:11 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 19:04:44 --> Could not find the language line "Clothing"
ERROR - 2024-09-24 19:27:24 --> Could not find the language line "Home"
ERROR - 2024-09-24 19:57:24 --> Could not find the language line "Home"
ERROR - 2024-09-24 20:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 20:27:26 --> Could not find the language line "Home"
ERROR - 2024-09-24 20:57:25 --> Could not find the language line "Home"
ERROR - 2024-09-24 21:03:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-24 21:03:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-24 21:03:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-24 21:27:27 --> Could not find the language line "Home"
ERROR - 2024-09-24 21:57:28 --> Could not find the language line "Home"
ERROR - 2024-09-24 22:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-24 22:27:35 --> Could not find the language line "Home"
ERROR - 2024-09-24 22:57:27 --> Could not find the language line "Home"
ERROR - 2024-09-24 23:00:09 --> Could not find the language line "Home"
ERROR - 2024-09-24 23:27:31 --> Could not find the language line "Home"
ERROR - 2024-09-24 23:57:29 --> Could not find the language line "Home"
