<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-13 00:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 00:17:48 --> Could not find the language line "Home"
ERROR - 2024-12-13 00:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 00:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 00:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 00:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 00:47:39 --> Could not find the language line "Home"
ERROR - 2024-12-13 00:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 01:17:43 --> Could not find the language line "Home"
ERROR - 2024-12-13 01:47:44 --> Could not find the language line "Home"
ERROR - 2024-12-13 02:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 02:06:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-13 02:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 02:08:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-13 02:09:17 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-13 02:11:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-13 02:14:09 --> Could not find the language line "Home"
ERROR - 2024-12-13 02:15:32 --> Could not find the language line "Home"
ERROR - 2024-12-13 02:17:49 --> Could not find the language line "Home"
ERROR - 2024-12-13 02:47:57 --> Could not find the language line "Home"
ERROR - 2024-12-13 02:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 03:16:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-13 03:17:46 --> Could not find the language line "Home"
ERROR - 2024-12-13 03:27:20 --> Could not find the language line "Home"
ERROR - 2024-12-13 03:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 03:47:43 --> Could not find the language line "Home"
ERROR - 2024-12-13 03:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 03:54:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-13 03:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-13 03:54:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 04:17:44 --> Could not find the language line "Home"
ERROR - 2024-12-13 04:23:52 --> Could not find the language line "Home"
ERROR - 2024-12-13 04:47:58 --> Could not find the language line "Home"
ERROR - 2024-12-13 04:50:23 --> Could not find the language line "Home"
ERROR - 2024-12-13 04:55:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-13 04:57:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-13 04:58:41 --> Could not find the language line "Home"
ERROR - 2024-12-13 05:12:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-13 05:17:41 --> Could not find the language line "Home"
ERROR - 2024-12-13 05:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 05:47:42 --> Could not find the language line "Home"
ERROR - 2024-12-13 05:48:54 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-13 05:48:54 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:00:08 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:02:26 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:04:12 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:09:16 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:17:43 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:20:41 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:20:41 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:47:42 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:50:35 --> Could not find the language line "Home"
ERROR - 2024-12-13 06:58:53 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:00:57 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:02:58 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:07:50 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:08:57 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:17:43 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:33:55 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:34:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:34:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:35:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:35:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:35:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:35:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:36:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:36:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 07:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:36:19 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:37:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:47:42 --> Could not find the language line "Home"
ERROR - 2024-12-13 07:56:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-13 07:56:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-13 07:56:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 07:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 07:58:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-13 07:59:43 --> Could not find the language line "Home"
ERROR - 2024-12-13 08:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:03:53 --> Could not find the language line "Home"
ERROR - 2024-12-13 08:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:12:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 08:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:17:44 --> Could not find the language line "Home"
ERROR - 2024-12-13 08:23:04 --> Could not find the language line "Home"
ERROR - 2024-12-13 08:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:47:44 --> Could not find the language line "Home"
ERROR - 2024-12-13 08:48:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 08:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:50:39 --> Could not find the language line "Home"
ERROR - 2024-12-13 08:50:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 08:50:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 08:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:51:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 08:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:01:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 09:08:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-13 09:17:44 --> Could not find the language line "Home"
ERROR - 2024-12-13 09:25:15 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-13 09:29:56 --> Could not find the language line "Home"
ERROR - 2024-12-13 09:29:56 --> Could not find the language line "Home"
ERROR - 2024-12-13 09:30:26 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 09:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:33:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 09:33:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 09:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:35:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 09:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:46:18 --> Could not find the language line "Other"
ERROR - 2024-12-13 09:47:44 --> Could not find the language line "Home"
ERROR - 2024-12-13 09:48:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 09:48:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 09:50:57 --> Could not find the language line "Home"
ERROR - 2024-12-13 09:51:14 --> Could not find the language line "Home"
ERROR - 2024-12-13 09:52:55 --> Could not find the language line "Other"
ERROR - 2024-12-13 09:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 09:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 10:00:54 --> Could not find the language line "Perfume"
ERROR - 2024-12-13 10:07:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 10:09:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 10:17:45 --> Could not find the language line "Home"
ERROR - 2024-12-13 10:25:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 10:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 10:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 10:36:59 --> Could not find the language line "Home"
ERROR - 2024-12-13 10:38:02 --> Could not find the language line "Home"
ERROR - 2024-12-13 10:44:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 10:47:40 --> Could not find the language line "Home"
ERROR - 2024-12-13 10:47:45 --> Could not find the language line "Home"
ERROR - 2024-12-13 10:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 10:55:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 10:56:22 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 11:17:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 11:17:46 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:22:45 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:32:59 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:33:15 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 11:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:43:57 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:47:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 11:58:51 --> Could not find the language line "Home"
ERROR - 2024-12-13 11:58:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 12:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 12:17:46 --> Could not find the language line "Home"
ERROR - 2024-12-13 12:20:58 --> Could not find the language line "Socks"
ERROR - 2024-12-13 12:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 12:23:53 --> Could not find the language line "Home"
ERROR - 2024-12-13 12:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 12:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 12:30:59 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-13 12:35:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-13 12:47:46 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:05:17 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 13:10:23 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:10:26 --> Could not find the language line "Other"
ERROR - 2024-12-13 13:17:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:20:40 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:26:09 --> Could not find the language line "Disclaimer"
ERROR - 2024-12-13 13:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:27:39 --> Could not find the language line "Socks"
ERROR - 2024-12-13 13:27:47 --> Could not find the language line "Socks"
ERROR - 2024-12-13 13:28:14 --> Could not find the language line "Socks"
ERROR - 2024-12-13 13:28:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-13 13:28:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Socks'
AND `items`.`price` <= '4'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-13 13:28:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 13:28:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:28:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 13:29:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 13:29:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 13:29:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 13:29:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:29:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:39:14 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:39:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:41:15 --> Could not find the language line "Socks"
ERROR - 2024-12-13 13:42:35 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:44:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:44:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:44:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:44:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:47:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 13:49:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:49:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:51:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:51:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:52:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:52:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-13 13:53:14 --> Could not find the language line "Socks"
ERROR - 2024-12-13 13:54:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:56:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 13:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:56:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:57:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:57:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-13 13:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:58:43 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-13 13:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 13:59:53 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:00:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-13 14:03:19 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:05:27 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:08:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-13 14:09:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-13 14:09:25 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:09:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-13 14:09:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-13 14:10:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-13 14:10:45 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:11:13 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:11:14 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:11:18 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:11:19 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:14:09 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:17:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:19:10 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 14:20:37 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:21:43 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:22:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-13 14:23:53 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-13 14:24:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 14:24:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 14:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 14:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 14:41:49 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:42:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 14:42:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 14:47:48 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:48:30 --> Could not find the language line "Home"
ERROR - 2024-12-13 14:49:19 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-13 14:54:55 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:17:48 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:19:25 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:24:06 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-13 15:33:39 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:40:08 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-13 15:44:58 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:47:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:48:40 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:50:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-13 15:50:57 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:51:03 --> Could not find the language line "Home"
ERROR - 2024-12-13 15:53:37 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:03:11 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 16:04:02 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:05:01 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:05:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-13 16:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 16:17:47 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:25:02 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:25:03 --> 404 Page Not Found: Wp-json/index
ERROR - 2024-12-13 16:29:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-13 16:29:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-13 16:29:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 16:47:48 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:51:42 --> Could not find the language line "Home"
ERROR - 2024-12-13 16:51:45 --> 404 Page Not Found: Wp-json/index
ERROR - 2024-12-13 17:02:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-13 17:09:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-13 17:12:03 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:17:49 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:25:18 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:33:23 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:45:29 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-13 17:47:48 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:49:41 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:50:08 --> Could not find the language line "Home"
ERROR - 2024-12-13 17:52:01 --> Could not find the language line "Home"
ERROR - 2024-12-13 18:00:46 --> Could not find the language line "Home"
ERROR - 2024-12-13 18:00:51 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-13 18:01:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-13 18:17:48 --> Could not find the language line "Home"
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-13 18:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-13 18:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-13 18:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-13 18:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 18:28:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-13 18:38:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-13 18:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 18:47:49 --> Could not find the language line "Home"
ERROR - 2024-12-13 18:53:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 18:53:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-13 19:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 19:17:49 --> Could not find the language line "Home"
ERROR - 2024-12-13 19:45:05 --> Could not find the language line "Home"
ERROR - 2024-12-13 19:46:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-13 19:47:49 --> Could not find the language line "Home"
ERROR - 2024-12-13 19:53:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-13 20:08:03 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:17:50 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:21:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-13 20:31:54 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 20:34:03 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 20:39:01 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:41:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 20:41:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 20:45:33 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:45:34 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-13 20:45:35 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:45:45 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:45:47 --> 404 Page Not Found: Humanstxt/index
ERROR - 2024-12-13 20:45:47 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-13 20:45:48 --> 404 Page Not Found: Securitytxt/index
ERROR - 2024-12-13 20:45:48 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-12-13 20:46:16 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:47:50 --> Could not find the language line "Home"
ERROR - 2024-12-13 20:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 20:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 21:17:51 --> Could not find the language line "Home"
ERROR - 2024-12-13 21:19:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-13 21:41:07 --> Could not find the language line "Home"
ERROR - 2024-12-13 21:42:59 --> Could not find the language line "Home"
ERROR - 2024-12-13 21:43:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-13 21:47:50 --> Could not find the language line "Home"
ERROR - 2024-12-13 21:51:04 --> Could not find the language line "Home"
ERROR - 2024-12-13 21:51:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-13 22:17:51 --> Could not find the language line "Home"
ERROR - 2024-12-13 22:19:33 --> Could not find the language line "Home"
ERROR - 2024-12-13 22:35:02 --> Could not find the language line "Home"
ERROR - 2024-12-13 22:40:12 --> Could not find the language line "Home"
ERROR - 2024-12-13 22:47:54 --> Could not find the language line "Home"
ERROR - 2024-12-13 22:50:32 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 23:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-13 23:00:27 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:02:06 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-12-13 23:02:07 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-12-13 23:12:34 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:16:23 --> Could not find the language line "Clothing"
ERROR - 2024-12-13 23:16:42 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:17:54 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:19:37 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:33:34 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:39:39 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:47:33 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:47:59 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:58:05 --> Could not find the language line "Home"
ERROR - 2024-12-13 23:58:06 --> Could not find the language line "Home"
