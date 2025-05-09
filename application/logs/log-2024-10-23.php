<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-23 00:14:41 --> Could not find the language line "Home"
ERROR - 2024-10-23 00:17:22 --> Could not find the language line "Home"
ERROR - 2024-10-23 00:44:17 --> Could not find the language line "Home"
ERROR - 2024-10-23 00:53:46 --> Could not find the language line "Home"
ERROR - 2024-10-23 00:54:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 00:54:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 00:54:56 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 01:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 01:18:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-23 01:44:14 --> Could not find the language line "Home"
ERROR - 2024-10-23 01:55:07 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 02:06:53 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-23 02:14:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 02:23:18 --> Could not find the language line "products"
ERROR - 2024-10-23 02:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 02:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 02:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 02:44:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 02:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 03:02:00 --> Could not find the language line "Home"
ERROR - 2024-10-23 03:10:31 --> Could not find the language line "Home"
ERROR - 2024-10-23 03:12:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-23 03:14:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 03:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 03:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 03:44:17 --> Could not find the language line "Home"
ERROR - 2024-10-23 04:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 04:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:23:46 --> Could not find the language line "Home"
ERROR - 2024-10-23 04:24:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:24:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:24:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:24:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:24:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-23 04:24:56 --> Could not find the language line "Home"
ERROR - 2024-10-23 04:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:27:07 --> Could not find the language line "Home"
ERROR - 2024-10-23 04:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:29:56 --> Could not find the language line "Home"
ERROR - 2024-10-23 04:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 04:44:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 05:14:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:28:42 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:33:21 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:38:27 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:41:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-23 05:44:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:49:43 --> Could not find the language line "Home"
ERROR - 2024-10-23 05:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 06:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-23 06:06:40 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:08:12 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 06:14:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:18:43 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:29:48 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:30:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:32:06 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 06:33:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:35:24 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:42:21 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:44:23 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:52:05 --> Could not find the language line "Home"
ERROR - 2024-10-23 06:56:59 --> Could not find the language line "Other"
ERROR - 2024-10-23 07:00:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 07:08:39 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 07:14:17 --> Could not find the language line "Home"
ERROR - 2024-10-23 07:16:49 --> Could not find the language line "Home"
ERROR - 2024-10-23 07:32:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 07:44:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 07:55:28 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-23 08:05:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-23 08:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 08:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 08:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 08:14:17 --> Could not find the language line "Home"
ERROR - 2024-10-23 08:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 08:24:55 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-23 08:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 08:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 08:44:19 --> Could not find the language line "Home"
ERROR - 2024-10-23 08:49:41 --> Could not find the language line "Home"
ERROR - 2024-10-23 08:50:03 --> 404 Page Not Found: About/index
ERROR - 2024-10-23 08:50:03 --> 404 Page Not Found: FAQs/index
ERROR - 2024-10-23 08:50:03 --> Could not find the language line "Home"
ERROR - 2024-10-23 08:50:10 --> Could not find the language line "Home"
ERROR - 2024-10-23 08:50:10 --> 404 Page Not Found: Navbar-vertical/index
ERROR - 2024-10-23 08:50:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-23 08:59:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-23 09:11:38 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-23 09:11:38 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:11:38 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:16:47 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:26:15 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:26:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:41:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-23 09:44:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 09:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 10:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 10:14:45 --> Could not find the language line "products"
ERROR - 2024-10-23 10:21:01 --> Could not find the language line "Home"
ERROR - 2024-10-23 10:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 10:44:19 --> Could not find the language line "Home"
ERROR - 2024-10-23 10:50:49 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-23 10:50:49 --> Could not find the language line "Home"
ERROR - 2024-10-23 10:51:40 --> Could not find the language line "Home"
ERROR - 2024-10-23 10:52:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-23 11:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 11:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 11:33:46 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 11:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 11:34:31 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 11:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 11:44:19 --> Could not find the language line "Home"
ERROR - 2024-10-23 11:54:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-23 11:54:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-23 11:54:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-23 11:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 11:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:06:51 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:10:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-23 12:10:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:12:58 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:14:19 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:16:13 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:16:37 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:16:41 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:18:30 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:29:29 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:44:19 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 12:52:46 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:57:41 --> Could not find the language line "Home"
ERROR - 2024-10-23 12:58:42 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 13:03:35 --> Could not find the language line "Home"
ERROR - 2024-10-23 13:14:20 --> Could not find the language line "Home"
ERROR - 2024-10-23 13:15:12 --> Could not find the language line "Home"
ERROR - 2024-10-23 13:17:25 --> Could not find the language line "Home"
ERROR - 2024-10-23 13:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 13:26:43 --> Could not find the language line "Home"
ERROR - 2024-10-23 13:44:20 --> Could not find the language line "Home"
ERROR - 2024-10-23 13:52:05 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-23 14:14:20 --> Could not find the language line "Home"
ERROR - 2024-10-23 14:17:55 --> Could not find the language line "Home"
ERROR - 2024-10-23 14:25:18 --> Could not find the language line "Home"
ERROR - 2024-10-23 14:38:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 14:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 14:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 14:44:21 --> Could not find the language line "Home"
ERROR - 2024-10-23 14:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 14:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 14:49:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 14:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:06:40 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:14:21 --> Could not find the language line "Home"
ERROR - 2024-10-23 15:19:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:19:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:20:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:20:27 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:20:28 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:20:28 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 15:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:44:21 --> Could not find the language line "Home"
ERROR - 2024-10-23 15:49:42 --> Could not find the language line "Home"
ERROR - 2024-10-23 15:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:52:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 15:52:16 --> Could not find the language line "Home"
ERROR - 2024-10-23 15:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 15:55:41 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-23 16:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 16:04:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 16:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 16:04:57 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 16:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 16:05:26 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 16:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 16:05:33 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 16:13:19 --> 404 Page Not Found: Ssphp/index
ERROR - 2024-10-23 16:14:22 --> Could not find the language line "Home"
ERROR - 2024-10-23 16:21:55 --> Could not find the language line "Home"
ERROR - 2024-10-23 16:24:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-23 16:31:17 --> Could not find the language line "Home"
ERROR - 2024-10-23 16:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 16:44:21 --> Could not find the language line "Home"
ERROR - 2024-10-23 16:51:25 --> Could not find the language line "Home"
ERROR - 2024-10-23 16:59:17 --> 404 Page Not Found: Products/products
ERROR - 2024-10-23 17:14:23 --> Could not find the language line "Home"
ERROR - 2024-10-23 17:23:27 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 17:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 17:43:14 --> Could not find the language line "Home"
ERROR - 2024-10-23 17:44:22 --> Could not find the language line "Home"
ERROR - 2024-10-23 17:48:10 --> Could not find the language line "Home"
ERROR - 2024-10-23 18:00:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-23 18:00:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-23 18:00:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-23 18:14:22 --> Could not find the language line "Home"
ERROR - 2024-10-23 18:27:07 --> Could not find the language line "Home"
ERROR - 2024-10-23 18:42:17 --> Could not find the language line "Home"
ERROR - 2024-10-23 18:43:44 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:44:23 --> Could not find the language line "Home"
ERROR - 2024-10-23 18:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 18:47:24 --> Could not find the language line "Home"
ERROR - 2024-10-23 18:47:49 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:50:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:50:52 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 18:51:28 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:51:30 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:51:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 18:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 19:14:23 --> Could not find the language line "Home"
ERROR - 2024-10-23 19:20:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-23 19:44:27 --> Could not find the language line "Home"
ERROR - 2024-10-23 20:14:24 --> Could not find the language line "Home"
ERROR - 2024-10-23 20:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 20:25:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-23 20:33:54 --> Could not find the language line "Home"
ERROR - 2024-10-23 20:44:24 --> Could not find the language line "Home"
ERROR - 2024-10-23 20:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 21:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 21:14:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-23 21:14:25 --> Could not find the language line "Home"
ERROR - 2024-10-23 21:16:30 --> Could not find the language line "products"
ERROR - 2024-10-23 21:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 21:44:25 --> Could not find the language line "Home"
ERROR - 2024-10-23 21:45:32 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 21:45:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-23 21:45:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-23 21:45:37 --> Could not find the language line "Other"
ERROR - 2024-10-23 21:45:38 --> Could not find the language line "Other"
ERROR - 2024-10-23 21:45:40 --> Could not find the language line "Other"
ERROR - 2024-10-23 21:45:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-23 21:45:48 --> Could not find the language line "Other"
ERROR - 2024-10-23 21:49:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-23 21:49:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 21:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 21:56:30 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 21:56:30 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 21:56:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-23 21:56:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 21:56:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 22:04:37 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:06:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-23 22:09:36 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 22:14:29 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:14:58 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:19:45 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:22:26 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:24:38 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 22:29:39 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:31:52 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-23 22:31:52 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:44:27 --> Could not find the language line "Home"
ERROR - 2024-10-23 22:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-23 22:51:32 --> Could not find the language line "Home"
ERROR - 2024-10-23 23:14:31 --> Could not find the language line "Home"
ERROR - 2024-10-23 23:15:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-23 23:24:46 --> Could not find the language line "products"
ERROR - 2024-10-23 23:34:08 --> Could not find the language line "Clothing"
ERROR - 2024-10-23 23:38:24 --> Could not find the language line "Home"
ERROR - 2024-10-23 23:44:28 --> Could not find the language line "Home"
ERROR - 2024-10-23 23:51:47 --> Could not find the language line "Home"
ERROR - 2024-10-23 23:58:32 --> Could not find the language line "Home"
