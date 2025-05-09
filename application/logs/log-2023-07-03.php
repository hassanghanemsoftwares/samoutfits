<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-03 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:03:40 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:12:48 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:12:59 --> Could not find the language line "Socks"
ERROR - 2023-07-03 00:13:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 00:14:43 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:16:46 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:17:10 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-03 00:17:10 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-03 00:17:10 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-03 00:17:10 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-03 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 00:57:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 00:57:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 00:57:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 00:57:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 00:57:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 00:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 00:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 00:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 00:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 00:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 00:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:04:32 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 01:06:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 01:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 01:07:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 01:07:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 01:08:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 01:08:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 01:08:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 01:29:42 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:31:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 01:32:55 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 01:33:24 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 01:33:48 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 01:33:57 --> Could not find the language line "Home"
ERROR - 2023-07-03 01:36:23 --> Could not find the language line "Home"
ERROR - 2023-07-03 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 02:20:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 02:20:08 --> Could not find the language line "Home"
ERROR - 2023-07-03 02:22:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 02:44:59 --> Could not find the language line "Home"
ERROR - 2023-07-03 02:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 02:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 02:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:10:00 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:10:00 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:10:01 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:38:52 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:54:39 --> Could not find the language line "Home"
ERROR - 2023-07-03 03:56:11 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-03 03:57:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 04:03:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 04:04:25 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 04:04:47 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:08:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 04:08:43 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:09:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 04:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 04:09:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 04:10:30 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:10:34 --> Could not find the language line "Perfume"
ERROR - 2023-07-03 04:11:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:33:12 --> 404 Page Not Found: Env/index
ERROR - 2023-07-03 04:33:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:50:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 04:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 05:03:33 --> Could not find the language line "Perfume"
ERROR - 2023-07-03 05:05:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 05:12:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 05:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:24:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 05:25:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 05:25:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-03 05:26:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 05:26:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 05:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 05:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 05:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:28:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 05:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 05:32:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 05:32:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 05:44:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 05:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 05:44:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 05:44:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 05:49:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:01:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 06:01:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 06:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:05:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 06:05:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 06:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:06:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-03 06:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:10:59 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:17:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:24:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 06:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:27:33 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:31:26 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:34:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 06:34:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 06:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:36:42 --> Could not find the language line "Bracelets"
ERROR - 2023-07-03 06:38:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:54:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 06:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 06:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:02:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:02:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 07:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:04:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:05:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:05:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 07:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 07:05:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:11:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 07:11:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 07:12:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:12:12 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-03 07:12:12 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-03 07:12:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-03 07:12:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-03 07:13:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 07:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:15:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:15:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:30:22 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:32:28 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:37:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:38:52 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:39:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:39:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:40:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:40:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:40:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:41:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:41:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:41:55 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:42:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:42:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:42:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 07:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 07:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:44:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 07:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:47:21 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:49:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 07:49:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 07:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:50:19 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-03 07:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 07:54:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 07:56:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 07:56:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 07:58:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 07:58:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:01:08 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:01:57 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:02:34 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:04:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 08:04:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 08:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:09:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:09:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 08:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 08:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:10:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:16:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:16:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:16:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:16:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 08:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 08:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:17:22 --> Could not find the language line "Bracelets"
ERROR - 2023-07-03 08:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:20:59 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-03 08:20:59 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-03 08:20:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-03 08:20:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-03 08:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:21:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:22:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:23:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:28:04 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:30:42 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:30:51 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:30:52 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-03 08:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:34:17 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:35:37 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:38:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 08:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:49:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:52:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:52:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:52:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:52:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 08:52:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 08:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:57:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:57:21 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:57:21 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:57:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:57:51 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:58:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-03 08:58:44 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:59:00 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:59:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 08:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 08:59:41 --> Could not find the language line "Home"
ERROR - 2023-07-03 08:59:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-03 08:59:51 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:00:02 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:02:31 --> Could not find the language line "assets"
ERROR - 2023-07-03 09:03:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:03:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:05:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:06:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:13:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:22:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:25:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:25:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:26:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:28:46 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:36:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:36:41 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:40:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:43:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:43:52 --> Could not find the language line "Home"
ERROR - 2023-07-03 09:45:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:45:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:45:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 09:52:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 09:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:01:33 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:01:34 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:02:36 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:03:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:05:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:08:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:12:53 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:18:26 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:19:08 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:19:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:20:54 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:23:00 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:23:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:23:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 10:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 16 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`gender` IN('Unisex', 'Female')
AND `items`.`price` <= '8'
AND `items`.`color` IN('Blue', 'Black', 'Red', 'Navy', 'Grey', 'Yellow', 'N')
AND `transaction_item_sizes`.`size` IN('A')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 10:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 10:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 16 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`gender` IN('Unisex', 'Female')
AND `items`.`price` <= '8'
AND `items`.`color` IN('Blue', 'Black', 'Red', 'Navy', 'Grey', 'Yellow', 'N')
AND `transaction_item_sizes`.`size` IN('A')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 10:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:23:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 10:23:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 16 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`gender` IN('Unisex', 'Female')
AND `items`.`price` <= '8'
AND `items`.`color` IN('Blue', 'Black', 'Red', 'Navy', 'Grey', 'Yellow', 'N')
AND `transaction_item_sizes`.`size` IN('A', 'Off White')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 10:24:01 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:24:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 10:24:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 16 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`gender` IN('Unisex', 'Female')
AND `items`.`price` <= '8'
AND `items`.`color` IN('Blue', 'Black', 'Red', 'Navy', 'Grey', 'Yellow', 'N')
AND `transaction_item_sizes`.`size` IN('A', 'Off White', 'Brown')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 10:24:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:24:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 10:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 16 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`gender` IN('Unisex', 'Female')
AND `items`.`price` <= '8'
AND `items`.`color` IN('Blue', 'Black', 'Red', 'Navy', 'Grey', 'Yellow', 'N')
AND `transaction_item_sizes`.`size` IN('A', 'Off White', 'Brown')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 10:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:24:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:24:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:24:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:26:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:27:40 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:28:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:28:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:28:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 10:28:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 10:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:29:00 --> Could not find the language line "Bracelets"
ERROR - 2023-07-03 10:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:29:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:30:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:33:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-03 10:33:54 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:34:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:34:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 10:36:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:49:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:50:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:50:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:51:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:57:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:58:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 10:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 10:59:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:01:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 11:02:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 11:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:20:45 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:21:01 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:21:20 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:21:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:21:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:22:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:29:34 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:30:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:30:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:32:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:43:21 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:46:36 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 11:57:57 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-03 11:57:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-03 11:57:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-03 11:57:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-03 11:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 11:58:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 11:59:03 --> Could not find the language line "Home"
ERROR - 2023-07-03 11:59:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:00:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:02:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:04:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 12:04:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 12:04:38 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:08:24 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:09:05 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:09:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:09:13 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-03 12:09:37 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:09:47 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:09:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-03 12:09:49 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-03 12:09:49 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-03 12:09:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-03 12:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:10:32 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:11:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:12:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-03 12:13:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 12:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
AND `items`.`color` IN('Navy')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 12:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-03 12:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-03 12:21:09 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:21:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:29:02 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:30:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:30:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 12:30:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 12:31:27 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:32:54 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:35:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 12:39:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:45:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 12:46:38 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:47:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 12:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:50:58 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:50:59 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:51:29 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:51:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:53:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:54:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 12:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 12:56:44 --> Could not find the language line "Home"
ERROR - 2023-07-03 12:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 12:59:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:00:09 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:02:44 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:03:54 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:05:29 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:06:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:06:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:07:36 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:09:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:09:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:09:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:09:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 13:09:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 13:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:12:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 13:12:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 13:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:12:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 13:12:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 13:13:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 13:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 13:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:16:24 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:17:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:19:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:21:10 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:24:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 13:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:40:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:43:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:43:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 13:43:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 13:44:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:45:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:45:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:46:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:47:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:48:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:49:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:50:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 13:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:53:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-03 13:54:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:54:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 13:55:08 --> Could not find the language line "Home"
ERROR - 2023-07-03 13:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 13:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:01:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:01:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 14:01:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 14:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:03:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:05:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:08:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-03 14:11:01 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:11:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:12:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:14:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-03 14:24:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:24:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 14:24:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 14:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:24:32 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:24:43 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:25:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:25:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:27:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:27:33 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:28:25 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:28:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:29:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:31:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:32:30 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:34:57 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:37:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:47:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:47:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:48:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:48:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 14:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 14:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:49:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:50:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:52:44 --> Could not find the language line "Home"
ERROR - 2023-07-03 14:52:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:53:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 14:55:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:55:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:56:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:58:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:58:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 14:58:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:00:43 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:18:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:33:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:33:52 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:34:26 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:35:10 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:36:31 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 15:41:39 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-03 15:43:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:44:32 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:45:53 --> Could not find the language line "Home"
ERROR - 2023-07-03 15:50:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 15:59:38 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:03:10 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:03:17 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:13:39 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:13:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-03 16:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:15:38 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:15:39 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:21:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:22:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:22:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:22:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 16:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:23:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:23:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:23:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 16:23:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 16:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:43:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 16:43:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 16:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:46:33 --> Could not find the language line "Home"
ERROR - 2023-07-03 16:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:49:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 16:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 16:53:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 16:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 16:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:00:09 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:05:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:07:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:08:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:08:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 17:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 17:09:56 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:13:02 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:18:55 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:20:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:20:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:21:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:21:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:22:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:22:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:23:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:23:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:23:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:23:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:23:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:24:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 17:29:03 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:29:39 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:29:40 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-03 17:29:46 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:29:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-03 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:30:42 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:30:47 --> Could not find the language line "Perfume"
ERROR - 2023-07-03 17:30:53 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:33:58 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 17:53:47 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:57:27 --> Could not find the language line "Home"
ERROR - 2023-07-03 17:58:27 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:00:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 18:00:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 18:03:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 18:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:07:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:07:56 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:08:10 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:08:35 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:08:37 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:11:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:11:47 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:12:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:15:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:15:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:15:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:16:46 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:16:51 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:17:41 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:33:44 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:41:24 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:42:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:42:37 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:43:30 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:44:02 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:49:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:50:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:50:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:51:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:52:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:52:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:52:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:54:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:54:43 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:54:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-03 18:56:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-03 18:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:56:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 18:56:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 18:56:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:56:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:56:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:56:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:57:00 --> Could not find the language line "assets"
ERROR - 2023-07-03 18:57:00 --> Could not find the language line "assets"
ERROR - 2023-07-03 18:57:00 --> Could not find the language line "assets"
ERROR - 2023-07-03 18:57:01 --> Could not find the language line "assets"
ERROR - 2023-07-03 18:57:01 --> Could not find the language line "assets"
ERROR - 2023-07-03 18:57:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 18:57:04 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "accounting"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "accounting"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "accounting"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "accounting"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "accounting"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "accounting"
ERROR - 2023-07-03 18:57:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:59:26 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 18:59:52 --> Could not find the language line "Home"
ERROR - 2023-07-03 18:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:00:36 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:05:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:05:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 19:05:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 19:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:06:11 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:06:35 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:06:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-03 19:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:06:59 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:08:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:12:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:15:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 19:19:18 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:20:32 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:23:57 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:26:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:37:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:38:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:38:31 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:39:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:40:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 19:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:40:57 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:41:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 19:41:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '5'
AND `items`.`price` <= '19'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-03 19:45:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 19:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 19:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:53:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:54:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:56:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:58:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 19:58:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 19:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 19:59:56 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 20:01:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 20:01:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 20:03:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-03 20:03:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-03 20:13:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:23:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:27:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 20:27:22 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:29:31 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:33:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-03 20:34:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 20:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 20:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 20:35:34 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 20:37:41 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:38:39 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 20:40:07 --> Could not find the language line "Home"
ERROR - 2023-07-03 20:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 20:46:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-03 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:23:41 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:30:28 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:33:29 --> 404 Page Not Found: Assets/admin
ERROR - 2023-07-03 21:47:04 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:47:21 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:47:34 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 21:48:40 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:57:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 21:58:20 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 21:59:54 --> Could not find the language line "Home"
ERROR - 2023-07-03 21:59:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 22:00:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 22:00:08 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:00:23 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:01:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 22:01:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 22:01:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-03 22:01:31 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:01:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:01:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 22:01:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:01:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 22:02:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:02:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:02:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:02:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:02:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:02:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 22:03:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:03:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:03:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:03:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-03 22:03:26 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 22:04:36 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:04:59 --> Could not find the language line "Bracelets"
ERROR - 2023-07-03 22:05:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 22:05:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 22:05:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 22:05:54 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:06:00 --> Could not find the language line "Perfume"
ERROR - 2023-07-03 22:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 22:06:17 --> Could not find the language line "Perfume"
ERROR - 2023-07-03 22:06:19 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:11:11 --> Could not find the language line "Hair%20%and%20Body%20Care"
ERROR - 2023-07-03 22:12:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:29:20 --> Could not find the language line "Perfume"
ERROR - 2023-07-03 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:41:51 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:49:59 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:53:40 --> Could not find the language line "Home"
ERROR - 2023-07-03 22:54:56 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-07-03 22:54:57 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-07-03 23:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-03 23:01:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-03 23:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-03 23:27:43 --> Could not find the language line "Home"
ERROR - 2023-07-03 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-03 23:32:28 --> Could not find the language line "Home"
ERROR - 2023-07-03 23:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-03 23:47:50 --> Could not find the language line "Home"
ERROR - 2023-07-03 23:47:52 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-03 23:47:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-03 23:47:53 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-03 23:47:53 --> 404 Page Not Found: Apple-touch-iconpng/index
