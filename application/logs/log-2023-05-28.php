<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-28 00:00:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 00:08:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 00:14:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-28 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 00:46:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-28 01:07:23 --> Could not find the language line "Home"
ERROR - 2023-05-28 01:18:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-28 01:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 01:57:27 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:04:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:04:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:04:04 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 02:05:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:29:45 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 02:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 02:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 03:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 03:22:43 --> 404 Page Not Found: Env/index
ERROR - 2023-05-28 03:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 03:27:44 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:31:06 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:48:36 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 03:54:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:54:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:54:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:54:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:56:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:56:18 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 03:56:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 03:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:19:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 04:19:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 04:19:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 04:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 04:22:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:25:10 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:56:27 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 04:57:52 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:57:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:58:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 04:58:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 04:58:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 04:58:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 04:58:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 04:58:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 04:58:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 04:59:23 --> Could not find the language line "Home"
ERROR - 2023-05-28 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 05:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:30:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 05:33:28 --> Could not find the language line "Home"
ERROR - 2023-05-28 05:36:08 --> Could not find the language line "Home"
ERROR - 2023-05-28 05:36:10 --> Could not find the language line "Home"
ERROR - 2023-05-28 05:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 05:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:00:53 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:04:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:08:45 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:09:22 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:09:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 06:10:31 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:11:23 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:11:26 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 06:11:28 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 06:12:17 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:12:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:12:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:12:46 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:12:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:12:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:12:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:13:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:13:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:16:52 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:19:42 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:20:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:20:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:20:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:20:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 06:23:19 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:24:35 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:33:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-05-28 06:33:59 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:34:00 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:34:00 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:44:17 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 06:45:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 06:45:29 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:48:29 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:48:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:56:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 06:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 06:59:46 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:01:17 --> Could not find the language line "Perfume"
ERROR - 2023-05-28 07:01:25 --> Could not find the language line "Socks"
ERROR - 2023-05-28 07:01:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 07:01:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 07:01:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 07:02:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 07:02:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 07:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:18:19 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:18:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 07:18:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 07:18:58 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:19:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 07:19:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:21:48 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:26:25 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:28:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:32:09 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:36:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:38:51 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:38:52 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:38:52 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:39:39 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:41:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:41:50 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:42:32 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:43:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:43:31 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:57:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:57:11 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-28 07:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 07:59:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 07:59:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:06 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:00:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:00:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:32 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:00:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:02:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 08:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:07:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-28 08:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:10:18 --> Could not find the language line "hats"
ERROR - 2023-05-28 08:10:19 --> Could not find the language line "hats"
ERROR - 2023-05-28 08:12:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 08:15:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 08:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:25:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 08:25:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 08:25:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 08:25:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 08:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 08:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 08:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 08:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 08:25:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 08:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 08:26:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:26:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 08:26:45 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-28 08:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:52:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 08:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 09:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:11:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 09:11:58 --> Could not find the language line "Home"
ERROR - 2023-05-28 09:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:23:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:24:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:24:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 09:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 09:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:26:22 --> Could not find the language line "Home"
ERROR - 2023-05-28 09:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 09:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:41:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 09:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:43:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 09:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:44:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 09:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:45:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 09:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:45:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 09:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:45:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 09:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:48:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 09:48:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 09:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 09:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:01:46 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:01:48 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:02:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:02:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:02:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:03:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:03:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:03:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 10:03:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 10:03:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:03:42 --> Could not find the language line "Perfume"
ERROR - 2023-05-28 10:03:47 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:04:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:04:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:04:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:04:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 10:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:10:21 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:10:58 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:15:42 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:15:47 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:16:02 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:20:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:26:59 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:28:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:40:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 10:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:45:32 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:45:45 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:49:40 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:50:05 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:50:36 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:50:38 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:50:40 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:50:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 10:58:41 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:58:43 --> Could not find the language line "Home"
ERROR - 2023-05-28 10:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 10:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 11:05:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 11:24:05 --> Could not find the language line "Home"
ERROR - 2023-05-28 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 11:31:51 --> Could not find the language line "Home"
ERROR - 2023-05-28 11:38:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 11:38:49 --> Could not find the language line "clothing"
ERROR - 2023-05-28 11:38:49 --> Could not find the language line "clothing"
ERROR - 2023-05-28 11:38:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 11:39:07 --> Could not find the language line "Home"
ERROR - 2023-05-28 11:57:10 --> Could not find the language line "clothing"
ERROR - 2023-05-28 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:04:43 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:05:19 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:07:57 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:08:58 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:14:19 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:22:28 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:25:28 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:36:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:36:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:36:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:37:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:37:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:38:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:40:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:40:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:42:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:43:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 12:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:44:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:44:26 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:44:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 12:44:48 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:44:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:44:57 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:45:24 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:46:26 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:47:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 12:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 12:56:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:02:51 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:04:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:05:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:06:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:19:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:23:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 13:24:57 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:26:43 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:27:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:28:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:32:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 13:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:49:36 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:50:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:50:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:50:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:51:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:51:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:51:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:51:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 13:51:44 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:51:48 --> Could not find the language line "Socks"
ERROR - 2023-05-28 13:52:04 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:52:06 --> Could not find the language line "Perfume"
ERROR - 2023-05-28 13:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:52:19 --> Could not find the language line "Perfume"
ERROR - 2023-05-28 13:52:21 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:52:31 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:52:50 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:52:53 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 13:53:16 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 13:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:54:39 --> Could not find the language line "Home"
ERROR - 2023-05-28 13:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 13:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:17:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:19:39 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:21:45 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:24:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:28:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:30:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:30:34 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:31:43 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:32:41 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:35:08 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:45:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 14:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:46:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 14:50:22 --> Could not find the language line "Home"
ERROR - 2023-05-28 14:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 14:54:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 15:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 15:03:11 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-28 15:03:17 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-28 15:03:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 15:03:25 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-28 15:03:28 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-28 15:03:33 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-28 15:03:36 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-28 15:09:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 15:09:31 --> Could not find the language line "Other"
ERROR - 2023-05-28 15:09:35 --> Could not find the language line "Other"
ERROR - 2023-05-28 15:23:28 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:39:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:40:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:40:27 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-28 15:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:42:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:46:41 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:54:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:55:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:56:06 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:56:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 15:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 15:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:12:31 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:13:37 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:18:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:26:36 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:27:47 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:28:05 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:32:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:35:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:36:47 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:41:12 --> Could not find the language line "Perfume"
ERROR - 2023-05-28 16:41:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:47:23 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:49:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:49:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:50:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 16:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 16:50:51 --> 404 Page Not Found: Env/index
ERROR - 2023-05-28 16:50:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 16:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:00:39 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:00:44 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:03:50 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:03:51 --> Could not find the language line "hats"
ERROR - 2023-05-28 17:05:32 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:05:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 17:08:40 --> 404 Page Not Found: Installphp/index
ERROR - 2023-05-28 17:10:23 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:21:47 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:22:30 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-28 17:25:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:43:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-28 17:43:08 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-28 17:43:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-28 17:43:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-28 17:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:45:25 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:45:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 17:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 17:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:12:51 --> Could not find the language line "Perfume"
ERROR - 2023-05-28 18:14:50 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:18:03 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:21:08 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:21:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-28 18:22:22 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:23:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:31:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 18:38:59 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:40:01 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:49:06 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:54:41 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:55:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-28 18:55:36 --> Could not find the language line "Home"
ERROR - 2023-05-28 18:57:44 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:03:04 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:08:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:08:55 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:14:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 19:14:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 19:14:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 19:14:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 19:15:26 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:21:47 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:31:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-28 19:33:23 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:39:16 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:39:19 --> Could not find the language line "Home"
ERROR - 2023-05-28 19:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 19:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:00:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:09:16 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:10:26 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:11:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 20:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 20:11:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 20:11:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 20:11:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:12:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:12:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:13:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 20:13:46 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:13:51 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 20:14:40 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:14:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:15:35 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:16:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:17:04 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:17:09 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:17:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 20:17:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 20:17:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 20:17:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 20:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:18:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 20:18:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 20:18:30 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:20:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:22:41 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:22:46 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:23:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 20:23:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 20:24:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 20:24:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:24:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:24:24 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 20:24:48 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:25:34 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-28 20:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:40:04 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 20:40:18 --> Could not find the language line "Bracelets"
ERROR - 2023-05-28 20:40:47 --> Could not find the language line "Socks"
ERROR - 2023-05-28 20:41:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:41:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:41:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:42:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 20:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 20:42:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-28 20:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-28 20:42:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:42:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:42:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:42:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-28 20:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 20:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:08:06 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 21:10:33 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:17:54 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:18:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 21:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-28 21:18:15 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:18:50 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:28:20 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-28 21:30:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-28 21:39:08 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:11:18 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-28 22:11:32 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:35:25 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:44:41 --> Could not find the language line "Home"
ERROR - 2023-05-28 22:54:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-28 23:00:19 --> Could not find the language line "Home"
ERROR - 2023-05-28 23:05:27 --> Could not find the language line "Home"
ERROR - 2023-05-28 23:06:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 23:08:56 --> Could not find the language line "Home"
ERROR - 2023-05-28 23:30:12 --> Could not find the language line "Home"
