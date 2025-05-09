<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-08 00:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:25:29 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:25:29 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:25:29 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:28:35 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:34:31 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:34:31 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:34:31 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:52:41 --> Could not find the language line "Home"
ERROR - 2023-09-08 00:58:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 01:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-08 01:43:14 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-09-08 01:43:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 01:43:15 --> 404 Page Not Found: Wp/index
ERROR - 2023-09-08 01:43:16 --> 404 Page Not Found: Bc/index
ERROR - 2023-09-08 01:43:16 --> 404 Page Not Found: Bk/index
ERROR - 2023-09-08 01:43:17 --> 404 Page Not Found: Backup/index
ERROR - 2023-09-08 01:43:18 --> 404 Page Not Found: New/index
ERROR - 2023-09-08 01:43:18 --> 404 Page Not Found: Main/index
ERROR - 2023-09-08 01:43:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 02:00:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 02:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 03:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 03:28:33 --> Could not find the language line "Home"
ERROR - 2023-09-08 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 03:42:38 --> Could not find the language line "Home"
ERROR - 2023-09-08 03:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 03:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 03:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 03:42:40 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-08 03:42:40 --> 404 Page Not Found: Home/home
ERROR - 2023-09-08 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 04:03:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 04:08:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 04:08:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 04:11:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 04:11:05 --> Could not find the language line "Home"
ERROR - 2023-09-08 04:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 04:42:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 04:58:19 --> Could not find the language line "Home"
ERROR - 2023-09-08 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 05:01:36 --> Could not find the language line "Home"
ERROR - 2023-09-08 05:13:58 --> Could not find the language line "Home"
ERROR - 2023-09-08 05:29:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 06:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:14:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 06:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 06:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 06:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 06:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 06:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 06:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 06:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 06:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 06:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 06:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 06:21:54 --> Could not find the language line "Home"
ERROR - 2023-09-08 06:30:09 --> Could not find the language line "Home"
ERROR - 2023-09-08 06:31:51 --> Could not find the language line "Home"
ERROR - 2023-09-08 06:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:44:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 06:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 06:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 07:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:11:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 07:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:13:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:28:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 07:28:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-08 07:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-08 07:36:07 --> Could not find the language line "Home"
ERROR - 2023-09-08 07:44:44 --> 404 Page Not Found: Server/php
ERROR - 2023-09-08 07:44:45 --> 404 Page Not Found: Admin/assets
ERROR - 2023-09-08 07:44:46 --> 404 Page Not Found: Admin/server
ERROR - 2023-09-08 07:44:47 --> 404 Page Not Found: Assets/global
ERROR - 2023-09-08 07:44:48 --> 404 Page Not Found: Plugins/jquery-file-upload
ERROR - 2023-09-08 07:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:45:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 07:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 07:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:00:30 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:01:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 08:01:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 08:04:45 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:09:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 08:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:13:49 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:16:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:16:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:26:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 08:26:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 08:31:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 08:33:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 08:33:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 08:33:29 --> Could not find the language line "assets"
ERROR - 2023-09-08 08:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:34:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 08:35:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 08:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 08:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:02:28 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:38 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:06:43 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:18:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:22:00 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:26:43 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:28:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 09:28:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 09:28:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:45:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 09:45:43 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:50:47 --> Could not find the language line "Home"
ERROR - 2023-09-08 09:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 09:59:48 --> Could not find the language line "Home"
ERROR - 2023-09-08 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 10:01:51 --> Could not find the language line "Home"
ERROR - 2023-09-08 10:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 10:20:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 10:20:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 10:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 10:27:09 --> Could not find the language line "Home"
ERROR - 2023-09-08 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 10:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 10:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 11:01:47 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:03:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 11:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 11:07:51 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:14:46 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-08 11:15:45 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:15:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 11:26:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 11:29:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 11:29:21 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:37:42 --> Could not find the language line "Home"
ERROR - 2023-09-08 11:52:28 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:04:08 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:10:45 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:10:47 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-08 12:10:50 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-08 12:10:53 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-08 12:10:54 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-08 12:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:19:43 --> Could not find the language line "Other"
ERROR - 2023-09-08 12:27:00 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:34:21 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:36:00 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:37:49 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:38:08 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:52:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 12:52:33 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:52:34 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:56:33 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 12:57:55 --> Could not find the language line "Home"
ERROR - 2023-09-08 12:59:39 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:01:55 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:07:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 13:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:09:58 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:10:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 13:10:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 13:12:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:12:15 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-08 13:12:16 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:12:16 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-08 13:12:22 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:13:34 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:14:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:14:40 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:14:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:15:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:15:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:16:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:16:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:17:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:17:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:17:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:18:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:19:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:19:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:20:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:20:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:21:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:21:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:21:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 13:21:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:21:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:24:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:24:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:25:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:25:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:26:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:26:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:26:31 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:26:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:26:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:27:06 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:27:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:27:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:27:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:27:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:27:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:28:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:28:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:28:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:32:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:32:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:35:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 13:35:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 13:38:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 13:38:20 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:38:33 --> Could not find the language line "Socks"
ERROR - 2023-09-08 13:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:50:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 13:50:02 --> Could not find the language line "Home"
ERROR - 2023-09-08 13:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 13:55:05 --> 404 Page Not Found: Env/index
ERROR - 2023-09-08 13:57:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 13:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:11:04 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:11:53 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:14:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 14:14:43 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:14:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 14:15:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 14:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 14:16:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 14:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:18:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:18:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:18:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:18:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:18:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:18:56 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:18:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:20:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 14:21:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-08 14:24:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:28:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:28:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:31:16 --> Could not find the language line "assets"
ERROR - 2023-09-08 14:32:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 14:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:41:23 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:45:20 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:45:43 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:48:16 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:48:38 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:51:04 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:53:02 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 14:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 14:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 14:54:49 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:55:16 --> Could not find the language line "Home"
ERROR - 2023-09-08 14:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:03:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 15:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 15:04:41 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:05:16 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:05:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:05:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:06:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:06:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:06:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:06:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:07:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:07:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 15:08:03 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:25:08 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:25:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:25:21 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:25:24 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:32:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-08 15:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:37:09 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:39:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:52:49 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:53:44 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:54:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 15:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 15:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:00:02 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:00:03 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:00:03 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:00:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:01:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 16:05:05 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:05:07 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:14:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 16:14:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 16:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:33:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 16:34:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 16:34:42 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:36:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:42:49 --> Could not find the language line "Home"
ERROR - 2023-09-08 16:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:49:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 16:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 16:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:14:24 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:22:49 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:28:21 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:34:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 17:34:51 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:35:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 17:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:49:59 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:52:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:57:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:59:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 17:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 17:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:00:42 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:02:19 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 18:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:05:51 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:06:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:06:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 18:06:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:06:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:06:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:06:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:07:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:07:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:07:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 18:07:47 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 18:07:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 18:08:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 18:08:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:08:18 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 18:08:47 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 18:19:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:19:21 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:21:47 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:22:25 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:24:09 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-08 18:24:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-08 18:24:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-08 18:25:35 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-08 18:25:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-08 18:25:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-08 18:25:36 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-08 18:29:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 18:33:42 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:41:28 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-08 18:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:42:00 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:42:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 18:46:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-08 18:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:55:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 18:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 18:57:55 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-08 18:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:02:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 19:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:09:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 19:11:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-08 19:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:13:04 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:14:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 19:17:01 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:31:28 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:31:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 19:31:45 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:32:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:32:42 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-09-08 19:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-08 19:35:35 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:36:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:37:03 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:39:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:39:50 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:39:53 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 19:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:45:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 19:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:45:28 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 19:55:52 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:55:52 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:55:52 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:55:53 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:55:53 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:55:53 --> Could not find the language line "Home"
ERROR - 2023-09-08 19:56:23 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:07:52 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:12:20 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:12:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 20:13:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 20:13:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 20:14:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-08 20:24:57 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:28:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-08 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:43:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:43:49 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 20:44:04 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:45:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 20:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:47:26 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:50:10 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:50:24 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 20:54:58 --> Could not find the language line "Home"
ERROR - 2023-09-08 20:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:06:19 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:21:41 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:25:31 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:28:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-08 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:38:58 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:42:02 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-08 21:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:53:23 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:54:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-08 21:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:56:32 --> Could not find the language line "Home"
ERROR - 2023-09-08 21:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:58:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 21:58:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 21:58:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 21:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 21:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 21:59:59 --> Could not find the language line "Home"
ERROR - 2023-09-08 22:00:05 --> Could not find the language line "Home"
ERROR - 2023-09-08 22:00:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 22:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:00:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:01:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 22:01:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:01:37 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:02:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-08 22:24:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-08 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 22:37:37 --> Could not find the language line "Home"
ERROR - 2023-09-08 22:50:20 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:16 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:17 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:13:24 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 23:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 23:20:40 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:26:46 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:26:47 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:26:47 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:29:22 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:36:29 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:36:37 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 23:36:50 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 23:36:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-08 23:37:01 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 23:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 23:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-08 23:43:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-08 23:45:58 --> Could not find the language line "Home"
ERROR - 2023-09-08 23:46:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 23:46:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-08 23:56:00 --> Could not find the language line "Home"
