<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-20 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-20 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 00:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 00:58:27 --> Could not find the language line "Home"
ERROR - 2023-08-20 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 01:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 01:48:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-20 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 02:02:20 --> Could not find the language line "Home"
ERROR - 2023-08-20 02:13:56 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-08-20 02:14:38 --> Could not find the language line "Home"
ERROR - 2023-08-20 02:23:35 --> Could not find the language line "Home"
ERROR - 2023-08-20 02:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 02:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 03:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-20 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 03:46:19 --> Could not find the language line "Home"
ERROR - 2023-08-20 03:58:18 --> Could not find the language line "Home"
ERROR - 2023-08-20 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 04:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 04:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 04:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 04:57:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-20 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:08:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:08:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:09:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:10:53 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:15:07 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:15:23 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-20 05:15:28 --> Could not find the language line "Bracelets"
ERROR - 2023-08-20 05:16:03 --> Could not find the language line "Bracelets"
ERROR - 2023-08-20 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:38:24 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:39:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-20 05:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:41:55 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:42:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:42:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:42:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:42:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:42:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:42:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:42:59 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:43:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:43:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:43:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:44:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:44:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 05:45:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 05:45:43 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:45:53 --> Could not find the language line "Socks"
ERROR - 2023-08-20 05:46:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 05:46:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:46:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:46:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:47:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 05:47:09 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:00:44 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:07:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:07:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:07:58 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 06:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 06:11:56 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:16:07 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:19:06 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:21:40 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:23:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 06:23:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 06:25:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 06:29:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 06:29:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:39:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 06:39:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:41:09 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:41:10 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:42:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:42:38 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:43:05 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:46:59 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:49:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:49:39 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:49:44 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:50:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 06:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:53:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 06:53:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 06:53:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 06:53:44 --> Could not find the language line "Home"
ERROR - 2023-08-20 06:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 06:55:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 06:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:02:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 07:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 07:04:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 07:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:06:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 07:06:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 07:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:09:31 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:09:34 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:14:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:15:21 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:16:42 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:17:21 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:17:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:17:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:17:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:17:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:22:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 07:22:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 07:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:25:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:31:16 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:32:02 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:37:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 07:39:33 --> Could not find the language line "Home"
ERROR - 2023-08-20 07:47:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 07:47:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 07:52:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 07:52:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 07:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 07:56:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:56:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 07:58:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 07:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:09:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:09:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:09:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:09:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:09:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:12:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 08:12:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 08:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:13:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 08:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:19:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:19:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:20:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:25:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 08:25:24 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-20 08:30:01 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:39:09 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:44:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 08:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:46:01 --> Could not find the language line "Home"
ERROR - 2023-08-20 08:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 08:49:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-20 08:50:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:50:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:00:25 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-20 09:10:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 09:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 09:10:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 09:12:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 09:16:43 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-20 09:18:38 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:30:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 09:35:29 --> Could not find the language line "Perfume"
ERROR - 2023-08-20 09:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:51:30 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:56:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:56:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 09:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 10:01:18 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-20 10:01:19 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-20 10:01:19 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-20 10:01:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-20 10:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:02:42 --> Could not find the language line "Home"
ERROR - 2023-08-20 10:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:12:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-20 10:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:28:08 --> Could not find the language line "Home"
ERROR - 2023-08-20 10:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 10:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:47:58 --> Could not find the language line "Home"
ERROR - 2023-08-20 10:49:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-20 10:49:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-20 10:49:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-20 10:49:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-20 10:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:51:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 10:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 10:53:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 10:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 11:11:28 --> Could not find the language line "Home"
ERROR - 2023-08-20 11:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 11:40:23 --> Could not find the language line "Home"
ERROR - 2023-08-20 11:41:40 --> Could not find the language line "Home"
ERROR - 2023-08-20 11:54:16 --> Could not find the language line "Home"
ERROR - 2023-08-20 11:57:43 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:01:44 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:04:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 12:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 12:05:57 --> Could not find the language line "Socks"
ERROR - 2023-08-20 12:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:13:22 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:19:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 12:19:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 12:20:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 12:20:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-20 12:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:22:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 12:22:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 12:25:38 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:34:10 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:40:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:43:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:49:43 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-20 12:49:43 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-20 12:49:43 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-20 12:49:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-20 12:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 12:56:16 --> Could not find the language line "Home"
ERROR - 2023-08-20 12:59:07 --> 404 Page Not Found: Api/index.php
ERROR - 2023-08-20 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 13:02:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-20 13:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:12:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 13:12:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 13:14:04 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-20 13:14:05 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-20 13:14:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-20 13:14:05 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-20 13:23:35 --> Could not find the language line "Home"
ERROR - 2023-08-20 13:24:04 --> Could not find the language line "Bracelets"
ERROR - 2023-08-20 13:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:28:02 --> Could not find the language line "Home"
ERROR - 2023-08-20 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 13:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:55:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 13:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 13:57:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-20 13:57:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-20 13:57:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-20 13:57:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-20 13:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 13:59:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-20 13:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-20 14:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 14:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 14:02:50 --> Could not find the language line "Home"
ERROR - 2023-08-20 14:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 14:16:40 --> Could not find the language line "Home"
ERROR - 2023-08-20 14:21:54 --> Could not find the language line "Home"
ERROR - 2023-08-20 14:21:54 --> Could not find the language line "Home"
ERROR - 2023-08-20 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 14:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 15:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-20 15:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 15:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 15:30:36 --> Could not find the language line "Home"
ERROR - 2023-08-20 15:34:28 --> Could not find the language line "Home"
ERROR - 2023-08-20 15:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-20 15:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 15:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:00:37 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:02:32 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:13:09 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:23:37 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:33:15 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-20 16:33:40 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:40:21 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:41:49 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-08-20 16:42:00 --> 404 Page Not Found: Sites/default
ERROR - 2023-08-20 16:42:07 --> 404 Page Not Found: Admin/controller
ERROR - 2023-08-20 16:42:28 --> 404 Page Not Found: Uploads/index
ERROR - 2023-08-20 16:42:45 --> 404 Page Not Found: Files/index
ERROR - 2023-08-20 16:54:44 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 16:55:58 --> Could not find the language line "Home"
ERROR - 2023-08-20 16:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 16:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 16:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 17:09:41 --> Could not find the language line "Home"
ERROR - 2023-08-20 17:10:26 --> Could not find the language line "Home"
ERROR - 2023-08-20 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 17:41:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 17:41:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 17:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:03:41 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:11:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-20 18:12:57 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:18:15 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:21:59 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:33:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:40:59 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:56:19 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:56:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 18:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 18:57:09 --> Could not find the language line "Home"
ERROR - 2023-08-20 18:58:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 18:58:48 --> Could not find the language line "Home"
ERROR - 2023-08-20 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 19:15:08 --> Could not find the language line "Home"
ERROR - 2023-08-20 19:21:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 19:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-20 19:34:08 --> Could not find the language line "Home"
ERROR - 2023-08-20 19:34:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 19:51:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-20 19:53:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-20 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:00:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-20 20:09:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 20:10:38 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:17:18 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:23:00 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:23:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:23:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-20 20:25:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:25:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:32:29 --> Could not find the language line "Home"
ERROR - 2023-08-20 20:35:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-20 21:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-20 21:16:50 --> Could not find the language line "Home"
ERROR - 2023-08-20 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:12:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:12:31 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:13:13 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:13:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 22:13:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-20 22:13:17 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:22:31 --> 404 Page Not Found: Env/index
ERROR - 2023-08-20 22:23:04 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-20 22:29:41 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:33:25 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:45:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-20 22:48:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 22:48:32 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:51:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 22:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-20 22:53:07 --> Could not find the language line "Home"
ERROR - 2023-08-20 22:55:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-20 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-20 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-20 23:37:27 --> Could not find the language line "Home"
ERROR - 2023-08-20 23:37:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-20 23:38:08 --> Could not find the language line "Home"
ERROR - 2023-08-20 23:38:12 --> Could not find the language line "Home"
