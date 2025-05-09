<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-17 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-17 00:02:24 --> Could not find the language line "Home"
ERROR - 2023-07-17 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 00:34:36 --> Could not find the language line "Home"
ERROR - 2023-07-17 00:37:41 --> Could not find the language line "Home"
ERROR - 2023-07-17 00:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 00:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-17 01:48:27 --> Could not find the language line "Home"
ERROR - 2023-07-17 01:50:19 --> Could not find the language line "Home"
ERROR - 2023-07-17 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 02:17:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 02:17:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 02:49:04 --> Could not find the language line "Home"
ERROR - 2023-07-17 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 03:24:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 03:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 03:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 04:29:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 04:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:03:06 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:08:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 05:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-17 05:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:24:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 05:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 05:27:42 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:49:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 05:49:39 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:49:50 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:49:51 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-17 05:51:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 05:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-17 05:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:56:53 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:58:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:58:38 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:58:55 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:59:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 05:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 05:59:28 --> Could not find the language line "Home"
ERROR - 2023-07-17 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-17 06:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 06:18:06 --> Could not find the language line "Home"
ERROR - 2023-07-17 06:20:47 --> Could not find the language line "Home"
ERROR - 2023-07-17 06:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 06:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 06:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 06:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 06:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 06:45:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 06:45:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 06:47:19 --> Could not find the language line "Home"
ERROR - 2023-07-17 06:49:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-17 06:58:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 06:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:00:37 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:14:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 07:15:43 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:16:19 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:17:45 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:33:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 07:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 07:47:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 07:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-17 07:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:57:59 --> Could not find the language line "Home"
ERROR - 2023-07-17 07:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:58:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:58:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:59:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 07:59:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 07:59:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:00:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:00:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:00:02 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:00:26 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:00:38 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:00:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-17 08:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:02:55 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:06:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 08:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-17 08:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:13:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 08:13:07 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:19:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 08:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 08:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:21:24 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:21:32 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:22:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 08:22:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 08:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:27:21 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:27:23 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:36:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 08:36:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-17 08:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:38:31 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:41:53 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:42:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:42:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:42:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:42:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:43:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:43:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-17 08:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:44:58 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:45:22 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:45:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 08:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:46:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 08:46:54 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 08:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:47:09 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:48:39 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:49:27 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:49:52 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:50:09 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:51:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 08:51:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 08:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 08:56:26 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:01:07 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 09:12:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 09:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:22:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 09:22:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 09:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:25:05 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:25:26 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:29:24 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:30:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 09:30:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 09:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:39:25 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:43:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-17 09:44:25 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 09:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-17 09:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 09:54:33 --> Could not find the language line "Home"
ERROR - 2023-07-17 09:59:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 10:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:15:10 --> Could not find the language line "Home"
ERROR - 2023-07-17 10:23:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 10:25:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 10:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-17 10:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:29:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 10:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-17 10:30:21 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-17 10:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 10:46:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 10:49:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 10:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 11:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:27:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 11:27:39 --> Could not find the language line "Home"
ERROR - 2023-07-17 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 11:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:45:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-17 11:45:55 --> Could not find the language line "Other"
ERROR - 2023-07-17 11:46:09 --> Could not find the language line "Home"
ERROR - 2023-07-17 11:46:22 --> Could not find the language line "Socks"
ERROR - 2023-07-17 11:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:46:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-17 11:47:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-17 11:47:18 --> Could not find the language line "Bracelets"
ERROR - 2023-07-17 11:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 11:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 12:15:16 --> Could not find the language line "Socks"
ERROR - 2023-07-17 12:18:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 12:23:04 --> Could not find the language line "Home"
ERROR - 2023-07-17 12:25:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-17 12:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-17 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 12:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 12:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 12:39:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-17 12:45:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 12:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 12:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 12:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 12:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:01:58 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:03:09 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:03:47 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:11:34 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:26:08 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 13:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:42:40 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-07-17 13:50:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 13:51:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 13:51:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 13:52:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-17 13:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 13:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 14:02:58 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:06:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 14:06:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 14:06:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 14:06:57 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-17 14:07:02 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-17 14:07:07 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-17 14:07:12 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-17 14:07:18 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-17 14:07:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-17 14:10:08 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 14:11:04 --> Could not find the language line "Other"
ERROR - 2023-07-17 14:11:08 --> Could not find the language line "Other"
ERROR - 2023-07-17 14:20:49 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:20:50 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:20:54 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-17 14:20:55 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-17 14:20:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-17 14:20:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-17 14:23:32 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:23:47 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:23:50 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:24:01 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-17 14:24:01 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-17 14:24:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-17 14:24:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-17 14:26:57 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 14:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 14:50:40 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:50:55 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:51:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:51:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:51:31 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:51:31 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:51:50 --> Could not find the language line "Home"
ERROR - 2023-07-17 14:56:51 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:04:41 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:17:10 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:17:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 15:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 15:20:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 15:20:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 15:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:21:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:21:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:46:09 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-07-17 15:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-17 15:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 15:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 15:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:04:05 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:14:52 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:18:51 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:18:59 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:20:24 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:22:31 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:33:20 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:33:21 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:33:36 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 16:38:21 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:49:19 --> Could not find the language line "Home"
ERROR - 2023-07-17 16:57:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-17 16:59:24 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:00:32 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:03:49 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:04:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 17:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 17:05:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 17:05:09 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:11:25 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 17:33:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-17 17:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:05:02 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:19:29 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:19:34 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:19:53 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:33:38 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:40:02 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:42:05 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:43:10 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:43:25 --> Could not find the language line "Perfume"
ERROR - 2023-07-17 18:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:43:37 --> Could not find the language line "Perfume"
ERROR - 2023-07-17 18:43:38 --> Could not find the language line "Home"
ERROR - 2023-07-17 18:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 18:58:27 --> Could not find the language line "Home"
ERROR - 2023-07-17 19:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-17 19:05:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-17 19:10:56 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-07-17 19:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 19:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 19:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 19:28:18 --> Could not find the language line "Home"
ERROR - 2023-07-17 19:28:58 --> Could not find the language line "Home"
ERROR - 2023-07-17 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 19:38:57 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-17 19:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 19:49:57 --> Could not find the language line "Home"
ERROR - 2023-07-17 19:57:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 20:07:31 --> Could not find the language line "Home"
ERROR - 2023-07-17 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 20:47:32 --> Could not find the language line "Home"
ERROR - 2023-07-17 20:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 20:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 20:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 20:58:30 --> Could not find the language line "Home"
ERROR - 2023-07-17 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 21:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 21:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-17 22:04:16 --> Could not find the language line "Home"
ERROR - 2023-07-17 22:27:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-17 22:34:26 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-07-17 22:42:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-17 22:45:49 --> Could not find the language line "Home"
ERROR - 2023-07-17 22:47:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 22:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-17 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:01:37 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:13:01 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 23:14:47 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 23:15:02 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:15:06 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 23:16:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 23:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:16:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:17:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:17:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:17:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:17:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:17:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-17 23:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-17 23:19:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-17 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:50:11 --> Could not find the language line "Home"
ERROR - 2023-07-17 23:53:25 --> 404 Page Not Found: Assets/css
