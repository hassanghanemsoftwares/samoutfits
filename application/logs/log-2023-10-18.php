<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-18 00:02:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 00:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 00:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 01:27:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 01:49:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 01:49:28 --> Could not find the language line "Home"
ERROR - 2023-10-18 01:52:23 --> Could not find the language line "Home"
ERROR - 2023-10-18 01:56:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 01:57:39 --> Could not find the language line "Home"
ERROR - 2023-10-18 02:12:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 02:17:51 --> Could not find the language line "Home"
ERROR - 2023-10-18 02:47:54 --> Could not find the language line "Home"
ERROR - 2023-10-18 02:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-18 02:56:19 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-18 03:01:50 --> Could not find the language line "Home"
ERROR - 2023-10-18 03:02:41 --> Could not find the language line "Home"
ERROR - 2023-10-18 03:09:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 03:38:02 --> 404 Page Not Found: Env/index
ERROR - 2023-10-18 03:38:08 --> 404 Page Not Found: Env/index
ERROR - 2023-10-18 03:43:59 --> Could not find the language line "Home"
ERROR - 2023-10-18 03:53:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 03:56:38 --> Could not find the language line "Home"
ERROR - 2023-10-18 04:08:54 --> Could not find the language line "Home"
ERROR - 2023-10-18 04:09:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 04:14:18 --> Could not find the language line "Home"
ERROR - 2023-10-18 04:14:18 --> Could not find the language line "Home"
ERROR - 2023-10-18 04:16:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 04:16:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 04:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 04:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 04:30:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 04:34:38 --> Could not find the language line "Home"
ERROR - 2023-10-18 04:56:39 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:00:20 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 05:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 05:02:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 05:03:34 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 05:15:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:33:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 05:36:59 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 05:38:12 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:42:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 05:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 05:49:44 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 05:50:51 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:52:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 05:55:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:03:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 06:11:50 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:12:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:13:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:13:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:15:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 06:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:15:53 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:16:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-18 06:16:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 06:16:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 06:25:54 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:26:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 06:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '22'
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-18 06:26:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 06:27:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 06:27:32 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 06:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 06:38:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:43:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 06:45:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:46:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:47:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 06:56:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 06:57:51 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 06:58:34 --> Could not find the language line "Home"
ERROR - 2023-10-18 06:58:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:03:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-18 07:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 07:13:52 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:14:55 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:24:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 07:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:26:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:27:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:43:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 07:49:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:49:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 07:51:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:51:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:52:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:52:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:52:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 07:52:36 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:54:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 07:59:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 07:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:00:06 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:06:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 08:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:12:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 08:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:13:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 08:13:31 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:14:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 08:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:15:35 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:19:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:22:31 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:22:35 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:28:35 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:29:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:29:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:29:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:29:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:29:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:33:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 08:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:38:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 08:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:39:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 08:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-18 08:39:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 08:39:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 08:39:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '20'
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-18 08:39:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 08:43:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 08:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 08:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:50:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:12 --> Could not find the language line "Home"
ERROR - 2023-10-18 08:50:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:50:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 08:54:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:54:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:54:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:54:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:55:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 08:59:50 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:00:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 09:00:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:00:44 --> Could not find the language line "Socks"
ERROR - 2023-10-18 09:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:07:37 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:09:08 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:11:42 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:12:10 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:15:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:17:03 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:19:32 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:20:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:20:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:21:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:22:41 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:22:41 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:22:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:22:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:23:02 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:23:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:23:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 09:24:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:25:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 09:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:26:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 09:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:26:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 09:28:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:28:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:28:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:28:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:28:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:28:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 09:29:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:30:58 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:41:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 09:41:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 09:44:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 09:51:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:51:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:51:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-18 09:54:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 09:54:50 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 10:02:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-18 10:12:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 10:12:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 10:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 10:16:20 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 10:20:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 10:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 10:21:28 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:28:55 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 10:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 10:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 10:37:52 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:41:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:46:20 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:46:35 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:47:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:47:29 --> Could not find the language line "products"
ERROR - 2023-10-18 10:53:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 10:59:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:05:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 11:07:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 11:07:09 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:08:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 11:09:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:09:30 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:15:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:16:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:44:38 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:46:10 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:46:26 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:46:37 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:46:38 --> 404 Page Not Found: Feed/index
ERROR - 2023-10-18 11:47:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:53:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 11:54:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:54:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:54:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:54:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 11:57:26 --> Could not find the language line "Home"
ERROR - 2023-10-18 12:01:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 12:01:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 12:16:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 12:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 12:33:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 12:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-18 12:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 12:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 12:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 12:50:05 --> Could not find the language line "Home"
ERROR - 2023-10-18 12:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 12:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 12:55:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 12:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:09:52 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:10:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:13:48 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:16:38 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:16:57 --> Could not find the language line "Perfume"
ERROR - 2023-10-18 13:17:05 --> Could not find the language line "Perfume"
ERROR - 2023-10-18 13:17:06 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:23:00 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:23:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:27:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:29:59 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:32:25 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:33:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:33:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:34:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 13:34:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL', 'L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-18 13:34:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 13:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:35:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:35:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:36:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:36:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:38:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:39:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:39:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:39:45 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:39:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:41:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:43:51 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:46:24 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:49:44 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:50:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:51:31 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:53:10 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:55:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 13:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:55:51 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:56:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-18 13:58:53 --> Could not find the language line "Home"
ERROR - 2023-10-18 13:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 13:59:42 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:01:25 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-18 14:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:02:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 14:02:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-18 14:02:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 14:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:05:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-18 14:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:08:42 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:09:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:12:18 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:12:31 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 14:30:32 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:30:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 14:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:30:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 14:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:31:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 14:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:31:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:31:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 14:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:31:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 14:31:50 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:36:47 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:37:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 14:37:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 14:37:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 14:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:41:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:41:55 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:43:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:46:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:46:47 --> Could not find the language line "Home"
ERROR - 2023-10-18 14:46:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 14:47:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 14:47:14 --> Could not find the language line "Hair%20"
ERROR - 2023-10-18 14:47:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:47:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:47:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:47:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:47:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:47:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 303
ERROR - 2023-10-18 14:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-20, 20' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`stock_clearance` = 1
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC
 LIMIT -20, 20
ERROR - 2023-10-18 14:47:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 14:48:18 --> Could not find the language line "Hair%20"
ERROR - 2023-10-18 14:48:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:48:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:49:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:49:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:49:24 --> Could not find the language line "Hair%20"
ERROR - 2023-10-18 14:49:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:49:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 14:49:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:49:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 14:51:21 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-18 14:51:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-18 14:51:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-18 14:51:22 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-18 14:54:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 15:02:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:02:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:06:20 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-18 15:06:20 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-18 15:06:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-18 15:06:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-18 15:06:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:07:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:07:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:08:09 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:09:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:11:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:11:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:11:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:11:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:11:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:12:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:13:18 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:16:37 --> Could not find the language line "Perfume"
ERROR - 2023-10-18 15:20:45 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:23:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:27:54 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-18 15:27:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-18 15:27:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-18 15:27:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-18 15:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:29:28 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:29:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 15:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:31:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:31:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:32:25 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:32:27 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:32:55 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:33:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:33:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:34:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:34:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:34:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:34:41 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:35:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:35:26 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:36:01 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:36:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:36:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:36:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 15:37:00 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:37:10 --> Could not find the language line "Socks"
ERROR - 2023-10-18 15:37:28 --> Could not find the language line "Socks"
ERROR - 2023-10-18 15:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:39:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:48:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:48:41 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:48:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 15:49:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:49:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 15:50:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:50:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 15:50:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 15:50:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 15:51:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-18 15:51:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-18 15:51:25 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-18 15:51:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-18 15:51:29 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:52:40 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 15:53:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:01:37 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:02:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:02:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:04:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 16:04:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:09:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 16:09:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 16:09:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 16:13:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 16:13:16 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:17:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:18:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 16:18:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 16:18:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 16:18:53 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:20:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 16:20:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 16:20:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 16:20:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:22:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:22:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:24:30 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:25:58 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:26:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:26:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:27:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:27:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:28:02 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:28:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:28:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:28:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:37:28 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:38:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 16:38:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 16:38:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 16:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:41:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 16:41:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 16:41:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 16:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-18 16:47:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 16:50:27 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:51:03 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:52:40 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:53:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:53:29 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:53:30 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-18 16:53:30 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-18 16:53:30 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:53:30 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-10-18 16:53:31 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-18 16:53:32 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-18 16:54:03 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:55:41 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:57:03 --> Could not find the language line "Home"
ERROR - 2023-10-18 16:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:57:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:58:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:58:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:59:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 16:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:02:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:03:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:04:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:04:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:05:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:15:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 17:16:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:17:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:18:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:18:23 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:18:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:19:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:19:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:22:36 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:22:45 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:23:22 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:23:37 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:24:17 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:24:21 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:25:31 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:26:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 17:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:26:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:27:49 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:33:24 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 17:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-18 17:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 17:37:48 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:39:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:39:20 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:39:42 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:44:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:44:52 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:48:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:51:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:51:29 --> Could not find the language line "Home"
ERROR - 2023-10-18 17:52:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:52:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:53:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:53:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:53:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:54:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:54:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 17:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 17:55:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 17:58:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-18 17:59:39 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:03:20 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:06:14 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:08:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:10:48 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:11:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:11:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-18 18:12:42 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:12:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-18 18:13:02 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:14:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:14:10 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:14:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:14:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:15:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:15:15 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:15:31 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:15:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:16:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:16:01 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:16:18 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:16:25 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:16:54 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:16:55 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:22:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 18:22:24 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:22:27 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:23:13 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:23:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-18 18:23:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-18 18:23:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-18 18:23:59 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:25:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-18 18:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:27:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:28:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:29:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-18 18:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-18 18:29:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-18 18:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:30:53 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:31:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:31:07 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-18 18:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:31:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:31:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:32:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:32:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:32:15 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:37:10 --> Could not find the language line "Home"
ERROR - 2023-10-18 18:39:58 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-18 18:40:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 18:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 18:57:44 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:06:49 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:11:45 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:11:46 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:13:38 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:19:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:19:07 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:21:29 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:22:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-18 19:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:23:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 19:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:26:15 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:27:02 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 19:34:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-18 19:45:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 19:49:15 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:52:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 19:57:08 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:58:27 --> Could not find the language line "Home"
ERROR - 2023-10-18 19:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:00:33 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:00:59 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:01:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:03:55 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:07:02 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:07:40 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:08:19 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:14:24 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:16:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:16:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:30:23 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 20:35:42 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:43:39 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:57:03 --> Could not find the language line "Home"
ERROR - 2023-10-18 20:59:32 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:09:58 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:12:04 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:17:02 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:21:47 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:28:35 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:56:39 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:56:54 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:56:56 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 21:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 21:58:09 --> Could not find the language line "Home"
ERROR - 2023-10-18 21:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 21:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-18 22:13:53 --> 404 Page Not Found: Env/index
ERROR - 2023-10-18 22:13:53 --> Could not find the language line "Home"
ERROR - 2023-10-18 22:16:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 22:29:23 --> Could not find the language line "Home"
ERROR - 2023-10-18 22:29:23 --> Could not find the language line "Home"
ERROR - 2023-10-18 22:29:24 --> Could not find the language line "Home"
ERROR - 2023-10-18 22:42:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-18 22:44:43 --> Could not find the language line "Home"
ERROR - 2023-10-18 22:45:27 --> Could not find the language line "Home"
ERROR - 2023-10-18 22:52:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 23:00:34 --> Could not find the language line "Socks"
ERROR - 2023-10-18 23:04:11 --> Could not find the language line "Home"
ERROR - 2023-10-18 23:04:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-18 23:05:57 --> Could not find the language line "Home"
