<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-09 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 00:00:44 --> Could not find the language line "Home"
ERROR - 2023-08-09 00:02:01 --> Could not find the language line "Home"
ERROR - 2023-08-09 00:08:51 --> Could not find the language line "Socks"
ERROR - 2023-08-09 00:13:41 --> Could not find the language line "Home"
ERROR - 2023-08-09 00:13:42 --> Could not find the language line "Home"
ERROR - 2023-08-09 00:14:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-09 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-09 00:43:13 --> Could not find the language line "Home"
ERROR - 2023-08-09 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-09 01:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-09 01:18:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-09 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-09 01:39:53 --> Could not find the language line "Hair%20"
ERROR - 2023-08-09 01:39:57 --> Could not find the language line "Hair%20"
ERROR - 2023-08-09 01:42:55 --> Could not find the language line "Home"
ERROR - 2023-08-09 01:49:41 --> Could not find the language line "Hair%20"
ERROR - 2023-08-09 01:49:43 --> Could not find the language line "Hair%20"
ERROR - 2023-08-09 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:08:50 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:14:41 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:14:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 02:16:55 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:36:25 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:40:45 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:40:46 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:40:47 --> Could not find the language line "Home"
ERROR - 2023-08-09 02:59:59 --> Could not find the language line "Socks"
ERROR - 2023-08-09 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 03:26:26 --> Could not find the language line "Home"
ERROR - 2023-08-09 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 03:31:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 03:32:00 --> Could not find the language line "Home"
ERROR - 2023-08-09 03:47:13 --> Could not find the language line "Home"
ERROR - 2023-08-09 03:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 03:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 04:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-09 04:20:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 04:24:41 --> Could not find the language line "Home"
ERROR - 2023-08-09 04:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:25:17 --> Could not find the language line "Home"
ERROR - 2023-08-09 04:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:29:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:29:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:30:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-09 04:30:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-09 04:31:04 --> Could not find the language line "Socks"
ERROR - 2023-08-09 04:31:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:31:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:31:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:31:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 04:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:33:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:33:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 04:33:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:34:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:34:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:35:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:36:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:36:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 04:36:14 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2023-08-09 04:36:16 --> 404 Page Not Found: Feed/index
ERROR - 2023-08-09 04:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:36:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 04:36:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 04:37:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:37:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:37:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:38:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:38:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 04:38:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:38:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-09 04:40:29 --> Could not find the language line "Home"
ERROR - 2023-08-09 04:40:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 04:41:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:41:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:42:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 04:42:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 04:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-09 04:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 05:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:01:10 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:01:53 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:29:30 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:46:08 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 05:55:46 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:57:55 --> Could not find the language line "Home"
ERROR - 2023-08-09 05:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 06:01:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:01:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:04:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:05:34 --> Could not find the language line "Home"
ERROR - 2023-08-09 06:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:07:32 --> Could not find the language line "Home"
ERROR - 2023-08-09 06:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:09:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:09:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:26:46 --> Could not find the language line "Home"
ERROR - 2023-08-09 06:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 06:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:33:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:34:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:47:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:47:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 06:48:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-09 06:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:54:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:55:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:57:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 06:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 06:59:19 --> Could not find the language line "Home"
ERROR - 2023-08-09 06:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:01:23 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:03:59 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:10:24 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:17:03 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:20:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 07:20:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-09 07:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:24:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 07:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:30:40 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:34:43 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:38:50 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:38:51 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:45:07 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:51:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:53:13 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:55:34 --> Could not find the language line "Home"
ERROR - 2023-08-09 07:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 07:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 07:59:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 07:59:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:03:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:13:05 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:15:17 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:17:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:17:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:17:39 --> 404 Page Not Found: Env/index
ERROR - 2023-08-09 08:17:42 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:17:51 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2023-08-09 08:29:47 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:34:35 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:35:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:35:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:41:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:41:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 08:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-09 08:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:42:16 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-09 08:42:16 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-09 08:42:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-09 08:42:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-09 08:42:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 08:42:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-09 08:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 08:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:01:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 09:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:05:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 09:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:08:18 --> Could not find the language line "Other"
ERROR - 2023-08-09 09:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:17:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 09:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:32:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 09:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:32:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:32:15 --> Could not find the language line "Other"
ERROR - 2023-08-09 09:32:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:32:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:32:36 --> Could not find the language line "Other"
ERROR - 2023-08-09 09:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:34:21 --> Could not find the language line "Other"
ERROR - 2023-08-09 09:35:01 --> Could not find the language line "Other"
ERROR - 2023-08-09 09:35:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 09:36:22 --> Could not find the language line "Other"
ERROR - 2023-08-09 09:36:33 --> Could not find the language line "Home"
ERROR - 2023-08-09 09:47:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 09:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 09:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 10:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 10:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-09 10:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:10:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 10:10:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-09 10:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:27:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 10:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:30:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 10:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:34:48 --> Could not find the language line "Home"
ERROR - 2023-08-09 10:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 10:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:39:10 --> Could not find the language line "Home"
ERROR - 2023-08-09 10:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:44:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 10:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:52:54 --> Could not find the language line "Home"
ERROR - 2023-08-09 10:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 10:56:38 --> Could not find the language line "Other"
ERROR - 2023-08-09 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-09 11:12:08 --> Could not find the language line "Home"
ERROR - 2023-08-09 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 11:57:43 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:03:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 12:03:22 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:22:39 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:22:56 --> Could not find the language line "Other"
ERROR - 2023-08-09 12:28:22 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:35:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 12:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:37:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:38:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:39:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:39:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:48:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:48:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:51:38 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:52:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 12:52:21 --> Could not find the language line "assets"
ERROR - 2023-08-09 12:52:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 12:54:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 12:54:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 12:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:54:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 12:54:53 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:55:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 12:55:53 --> Could not find the language line "Home"
ERROR - 2023-08-09 12:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 12:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:08:03 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:08:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 13:08:32 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:08:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 13:08:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 13:09:04 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:10:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:10:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:10:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:10:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:11:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:11:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:11:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:16:29 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-09 13:16:29 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-09 13:16:30 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-09 13:16:30 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-09 13:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:21:01 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:27:31 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:29:49 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:39:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:39:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:41:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:41:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:41:39 --> Could not find the language line "assets"
ERROR - 2023-08-09 13:42:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 13:42:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 13:42:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-09 13:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:43:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:43:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:43:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 13:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:48:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-09 13:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-09 13:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 13:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:00:47 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:05:01 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:17:30 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:17:32 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:17:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 14:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:21:54 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:22:48 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:23:15 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:29:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 14:29:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 14:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:32:08 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:33:55 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:34:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:35:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 14:35:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 14:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 14:43:07 --> Could not find the language line "Home"
ERROR - 2023-08-09 14:43:18 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:10:00 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:10:21 --> Could not find the language line "Socks"
ERROR - 2023-08-09 15:10:35 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:22:44 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:28:23 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:28:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 15:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:29:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-09 15:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 15:30:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 15:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 15:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 15:47:59 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-09 15:52:56 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:01:03 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:14:28 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:20:59 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:24:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 16:25:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:32:38 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:35:37 --> Could not find the language line "Home"
ERROR - 2023-08-09 16:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:43:56 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-09 16:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 16:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 17:05:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 17:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 17:29:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 17:30:53 --> Could not find the language line "Home"
ERROR - 2023-08-09 17:31:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 17:31:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 17:32:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 17:32:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 17:36:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 17:42:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 17:42:26 --> Could not find the language line "Home"
ERROR - 2023-08-09 17:54:42 --> Could not find the language line "Home"
ERROR - 2023-08-09 18:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-09 18:06:01 --> Could not find the language line "Home"
ERROR - 2023-08-09 18:18:50 --> Could not find the language line "Home"
ERROR - 2023-08-09 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 18:39:10 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-08-09 18:39:10 --> 404 Page Not Found: Wp-includes/js
ERROR - 2023-08-09 18:49:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-09 18:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-09 18:57:07 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-09 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 19:12:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 19:12:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-09 19:13:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-09 19:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 19:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 19:23:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:42:16 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:42:17 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:42:18 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:42:20 --> Could not find the language line "Home"
ERROR - 2023-08-09 19:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 19:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:00:38 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:02:48 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:03:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 20:03:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 20:03:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 20:03:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-09 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:18:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-09 20:18:42 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-08-09 20:18:43 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-08-09 20:18:44 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:39:07 --> Could not find the language line "Home"
ERROR - 2023-08-09 20:50:00 --> Could not find the language line "Home"
ERROR - 2023-08-09 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-09 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 21:38:26 --> Could not find the language line "Home"
ERROR - 2023-08-09 21:38:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-09 21:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 21:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 21:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 21:42:32 --> Could not find the language line "Home"
ERROR - 2023-08-09 21:42:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 21:43:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 21:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 21:43:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 21:43:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 21:45:02 --> Could not find the language line "Home"
ERROR - 2023-08-09 21:56:19 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:27:43 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:27:45 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:42:02 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:59:42 --> Could not find the language line "Home"
ERROR - 2023-08-09 22:59:56 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:00:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 23:00:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 23:00:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 23:00:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-09 23:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:01:45 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:02:30 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:27:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-09 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-09 23:33:37 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-09 23:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 23:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-09 23:48:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
