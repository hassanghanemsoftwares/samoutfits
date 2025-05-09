<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-13 00:23:57 --> Could not find the language line "Home"
ERROR - 2024-09-13 00:53:53 --> Could not find the language line "Home"
ERROR - 2024-09-13 01:09:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-09-13 01:10:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 01:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 01:10:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 01:23:54 --> Could not find the language line "Home"
ERROR - 2024-09-13 01:53:54 --> Could not find the language line "Home"
ERROR - 2024-09-13 02:11:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 02:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 02:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 02:23:55 --> Could not find the language line "Home"
ERROR - 2024-09-13 02:53:56 --> Could not find the language line "Home"
ERROR - 2024-09-13 03:11:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 03:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 03:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 03:23:56 --> Could not find the language line "Home"
ERROR - 2024-09-13 03:49:42 --> Could not find the language line "Home"
ERROR - 2024-09-13 03:53:56 --> Could not find the language line "Home"
ERROR - 2024-09-13 04:21:13 --> Could not find the language line "Home"
ERROR - 2024-09-13 04:23:57 --> Could not find the language line "Home"
ERROR - 2024-09-13 04:32:46 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-09-13 04:53:57 --> Could not find the language line "Home"
ERROR - 2024-09-13 05:23:59 --> Could not find the language line "Home"
ERROR - 2024-09-13 05:50:53 --> Could not find the language line "Home"
ERROR - 2024-09-13 05:53:36 --> Could not find the language line "Home"
ERROR - 2024-09-13 05:53:59 --> Could not find the language line "Home"
ERROR - 2024-09-13 05:54:24 --> Could not find the language line "Home"
ERROR - 2024-09-13 05:56:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 05:57:20 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 06:00:41 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:04:16 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:10:12 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:10:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 06:10:38 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:10:42 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 06:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:10:57 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 06:11:30 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:11:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-13 06:12:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:12:09 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:12:16 --> Could not find the language line "Socks"
ERROR - 2024-09-13 06:12:31 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:12:38 --> Could not find the language line "Perfume"
ERROR - 2024-09-13 06:12:42 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:13:18 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:20:41 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:23:58 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:40:19 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:40:20 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:53:59 --> Could not find the language line "Home"
ERROR - 2024-09-13 06:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 06:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:03:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 07:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 07:03:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 07:13:49 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:13:57 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:15:19 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:15:20 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:15:21 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-09-13 07:15:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-09-13 07:15:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-09-13 07:15:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-09-13 07:15:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 07:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:15:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 07:16:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 07:16:15 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:17:58 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:23:43 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:23:59 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:33:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:38:07 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:43:24 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 07:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:47:38 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 07:54:00 --> Could not find the language line "Home"
ERROR - 2024-09-13 07:58:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 07:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 07:58:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 08:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:17:40 --> Could not find the language line "Home"
ERROR - 2024-09-13 08:23:59 --> Could not find the language line "Home"
ERROR - 2024-09-13 08:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:26:20 --> Could not find the language line "Home"
ERROR - 2024-09-13 08:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:28:32 --> Could not find the language line "Home"
ERROR - 2024-09-13 08:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 08:53:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 08:53:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-09-13 08:53:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 08:54:00 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:08:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 09:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:19:44 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:24:01 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:28:22 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:28:53 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:37:05 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 09:47:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 09:47:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 09:47:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 09:54:02 --> Could not find the language line "Home"
ERROR - 2024-09-13 09:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:04:45 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:19:00 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:19:57 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:24:01 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:26:58 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:31:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 10:31:56 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:32:45 --> Could not find the language line "Socks"
ERROR - 2024-09-13 10:33:06 --> Could not find the language line "Socks"
ERROR - 2024-09-13 10:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:34:40 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:35:56 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-13 10:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%W198%' OR a.description LIKE '%W198%' OR a.color LIKE '%W198%' OR a.barcode LIKE '%W198%' OR a.category LIKE '%W198%' OR a.sub_category LIKE '%W198%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-13 10:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%W198%' OR a.description LIKE '%W198%' OR a.color LIKE '%W198%' OR a.barcode LIKE '%W198%' OR a.category LIKE '%W198%' OR a.sub_category LIKE '%W198%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-13 10:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%W198%' OR a.description LIKE '%W198%' OR a.color LIKE '%W198%' OR a.barcode LIKE '%W198%' OR a.category LIKE '%W198%' OR a.sub_category LIKE '%W198%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-13 10:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%W198%' OR a.description LIKE '%W198%' OR a.color LIKE '%W198%' OR a.barcode LIKE '%W198%' OR a.category LIKE '%W198%' OR a.sub_category LIKE '%W198%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-13 10:47:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 10:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:39 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:51:40 --> 404 Page Not Found: Home/assets
ERROR - 2024-09-13 10:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:52:25 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:54:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 10:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 10:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 11:05:11 --> Could not find the language line "assets"
ERROR - 2024-09-13 11:05:11 --> Could not find the language line "assets"
ERROR - 2024-09-13 11:05:11 --> Could not find the language line "assets"
ERROR - 2024-09-13 11:05:11 --> Could not find the language line "assets"
ERROR - 2024-09-13 11:05:11 --> Could not find the language line "assets"
ERROR - 2024-09-13 11:13:27 --> Could not find the language line "Home"
ERROR - 2024-09-13 11:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 11:13:52 --> Could not find the language line "Home"
ERROR - 2024-09-13 11:24:02 --> Could not find the language line "Home"
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:36:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 11:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 11:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 11:42:27 --> Could not find the language line "Home"
ERROR - 2024-09-13 11:42:31 --> Could not find the language line "Socks"
ERROR - 2024-09-13 11:42:40 --> Could not find the language line "Socks"
ERROR - 2024-09-13 11:54:02 --> Could not find the language line "Home"
ERROR - 2024-09-13 11:54:46 --> Could not find the language line "Home"
ERROR - 2024-09-13 11:55:50 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:00:16 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:00:25 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 12:00:51 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 12:08:51 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:10:05 --> Could not find the language line "Socks"
ERROR - 2024-09-13 12:10:14 --> Could not find the language line "Socks"
ERROR - 2024-09-13 12:10:24 --> Could not find the language line "Socks"
ERROR - 2024-09-13 12:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:24:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 12:39:15 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:43:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-09-13 12:43:44 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:46:58 --> Could not find the language line "Home"
ERROR - 2024-09-13 12:47:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 12:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 12:47:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 12:54:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:05:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:05:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-13 13:06:30 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 13:07:00 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 13:07:41 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 13:08:02 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 13:08:23 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 13:11:40 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:15:57 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:23:48 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:24:02 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:25:26 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:35:25 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:36:07 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:36:21 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:36:44 --> Could not find the language line "Home"
ERROR - 2024-09-13 13:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 13:52:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 13:52:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 13:52:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 13:54:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:08:28 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 14:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:11:30 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:11:37 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:11:47 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:11:48 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 14:11:49 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:11:58 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:12:07 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:12:40 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:12:49 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:14:36 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 14:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:24:04 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:25:13 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 14:54:05 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:55:26 --> Could not find the language line "Home"
ERROR - 2024-09-13 14:55:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-09-13 14:55:27 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-09-13 14:55:27 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-09-13 14:55:27 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-09-13 15:06:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-09-13 15:10:01 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:10:20 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:12:17 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:13:20 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:14:09 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:16:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 15:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:17:30 --> Could not find the language line "Socks"
ERROR - 2024-09-13 15:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:18:42 --> Could not find the language line "Socks"
ERROR - 2024-09-13 15:19:12 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:19:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 15:19:27 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:19:30 --> Could not find the language line "Socks"
ERROR - 2024-09-13 15:19:31 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 15:19:48 --> Could not find the language line "Socks"
ERROR - 2024-09-13 15:19:50 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:19:51 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:24:04 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 15:49:00 --> Could not find the language line "Home"
ERROR - 2024-09-13 15:54:04 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:01:11 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:01:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 16:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:02:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 16:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:02:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 16:02:32 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:03:29 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:03:49 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:03:50 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:15:48 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:15:48 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:15:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-13 16:16:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-13 16:16:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-13 16:16:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-13 16:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 16:24:05 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:35:36 --> Could not find the language line "Home"
ERROR - 2024-09-13 16:54:05 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:10:23 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 17:24:05 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:26:45 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:26:49 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 17:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 17:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 17:38:39 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 17:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 17:39:53 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 17:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 17:40:06 --> Could not find the language line "Clothing"
ERROR - 2024-09-13 17:50:58 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:54:06 --> Could not find the language line "Home"
ERROR - 2024-09-13 17:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:07:00 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 18:07:22 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 18:07:28 --> Could not find the language line "Bracelets"
ERROR - 2024-09-13 18:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:08:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-13 18:09:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 18:10:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 18:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:11:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 18:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:11:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-13 18:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:16:08 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:24:06 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:24:13 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:24:53 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:29:45 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:33:03 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:35:11 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:37:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-13 18:39:10 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:41:37 --> Could not find the language line "Socks"
ERROR - 2024-09-13 18:42:42 --> Could not find the language line "Socks"
ERROR - 2024-09-13 18:43:23 --> Could not find the language line "Socks"
ERROR - 2024-09-13 18:43:59 --> Could not find the language line "Socks"
ERROR - 2024-09-13 18:44:02 --> Could not find the language line "Socks"
ERROR - 2024-09-13 18:44:18 --> Could not find the language line "Socks"
ERROR - 2024-09-13 18:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 18:46:52 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:47:32 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:54:08 --> Could not find the language line "Home"
ERROR - 2024-09-13 18:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 19:24:08 --> Could not find the language line "Home"
ERROR - 2024-09-13 19:32:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-13 19:32:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-13 19:32:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-13 19:54:08 --> Could not find the language line "Home"
ERROR - 2024-09-13 19:54:25 --> Could not find the language line "Home"
ERROR - 2024-09-13 19:54:34 --> Could not find the language line "Home"
ERROR - 2024-09-13 19:59:52 --> Could not find the language line "Home"
ERROR - 2024-09-13 20:00:30 --> Could not find the language line "Home"
ERROR - 2024-09-13 20:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:24:08 --> Could not find the language line "Home"
ERROR - 2024-09-13 20:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 20:53:25 --> Could not find the language line "Home"
ERROR - 2024-09-13 20:53:26 --> 404 Page Not Found: Wp-json/wp
ERROR - 2024-09-13 20:54:09 --> Could not find the language line "Home"
ERROR - 2024-09-13 21:16:41 --> Could not find the language line "Home"
ERROR - 2024-09-13 21:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 21:20:38 --> Could not find the language line "Home"
ERROR - 2024-09-13 21:24:11 --> Could not find the language line "Home"
ERROR - 2024-09-13 21:54:09 --> Could not find the language line "Home"
ERROR - 2024-09-13 22:24:13 --> Could not find the language line "Home"
ERROR - 2024-09-13 22:54:11 --> Could not find the language line "Home"
ERROR - 2024-09-13 23:24:10 --> Could not find the language line "Home"
ERROR - 2024-09-13 23:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-13 23:54:10 --> Could not find the language line "Home"
ERROR - 2024-09-13 23:55:08 --> Could not find the language line "Home"
