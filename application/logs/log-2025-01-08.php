<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-08 00:08:19 --> Could not find the language line "Home"
ERROR - 2025-01-08 00:12:25 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-08 00:12:25 --> Could not find the language line "Home"
ERROR - 2025-01-08 00:12:26 --> Could not find the language line "Home"
ERROR - 2025-01-08 00:17:57 --> Could not find the language line "Home"
ERROR - 2025-01-08 00:48:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 00:48:12 --> Could not find the language line "Home"
ERROR - 2025-01-08 01:17:59 --> Could not find the language line "Home"
ERROR - 2025-01-08 01:28:13 --> Could not find the language line "Other"
ERROR - 2025-01-08 01:32:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-08 01:32:34 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 01:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 01:48:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 01:49:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 01:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 02:18:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 02:18:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 02:28:49 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-08 02:47:43 --> Could not find the language line "Home"
ERROR - 2025-01-08 02:47:58 --> Could not find the language line "Home"
ERROR - 2025-01-08 03:18:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 03:29:27 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-08 03:39:27 --> Could not find the language line "Other"
ERROR - 2025-01-08 03:40:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-08 03:48:00 --> Could not find the language line "Home"
ERROR - 2025-01-08 03:54:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-08 03:55:05 --> Could not find the language line "Home"
ERROR - 2025-01-08 04:18:00 --> Could not find the language line "Home"
ERROR - 2025-01-08 04:19:30 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 04:35:03 --> Could not find the language line "Home"
ERROR - 2025-01-08 04:48:04 --> Could not find the language line "Home"
ERROR - 2025-01-08 05:17:59 --> Could not find the language line "Home"
ERROR - 2025-01-08 05:27:39 --> Could not find the language line "Home"
ERROR - 2025-01-08 05:27:40 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-08 05:27:40 --> Could not find the language line "Home"
ERROR - 2025-01-08 05:29:32 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-08 05:48:01 --> Could not find the language line "Home"
ERROR - 2025-01-08 06:18:01 --> Could not find the language line "Home"
ERROR - 2025-01-08 06:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-08 06:48:00 --> Could not find the language line "Home"
ERROR - 2025-01-08 07:01:52 --> Could not find the language line "Home"
ERROR - 2025-01-08 07:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 07:18:00 --> Could not find the language line "Home"
ERROR - 2025-01-08 07:27:24 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 07:34:34 --> Could not find the language line "Bracelets"
ERROR - 2025-01-08 07:48:00 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:05:15 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:16:34 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:17:13 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:18:03 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:22:16 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:24:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-08 08:33:27 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:48:01 --> Could not find the language line "Home"
ERROR - 2025-01-08 08:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 09:06:13 --> Could not find the language line "Home"
ERROR - 2025-01-08 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 09:18:01 --> Could not find the language line "Home"
ERROR - 2025-01-08 09:18:27 --> Could not find the language line "Home"
ERROR - 2025-01-08 09:44:19 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-08 09:45:43 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 09:45:47 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 09:48:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 09:54:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-08 10:02:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-08 10:02:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-08 10:07:06 --> Could not find the language line "Other"
ERROR - 2025-01-08 10:07:07 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 10:11:44 --> Could not find the language line "Home"
ERROR - 2025-01-08 10:18:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 10:23:08 --> Could not find the language line "Home"
ERROR - 2025-01-08 10:24:20 --> Could not find the language line "products"
ERROR - 2025-01-08 10:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 10:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 10:43:27 --> Could not find the language line "Other"
ERROR - 2025-01-08 10:44:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-08 10:44:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 10:48:03 --> Could not find the language line "Home"
ERROR - 2025-01-08 10:59:17 --> Could not find the language line "Home"
ERROR - 2025-01-08 11:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 11:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 11:18:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 11:29:13 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-08 11:29:13 --> Could not find the language line "Home"
ERROR - 2025-01-08 11:29:14 --> Could not find the language line "Home"
ERROR - 2025-01-08 11:48:04 --> Could not find the language line "Home"
ERROR - 2025-01-08 12:18:07 --> Could not find the language line "Home"
ERROR - 2025-01-08 12:24:10 --> Could not find the language line "Home"
ERROR - 2025-01-08 12:28:14 --> Could not find the language line "Home"
ERROR - 2025-01-08 12:36:03 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-08 12:44:05 --> Could not find the language line "Home"
ERROR - 2025-01-08 12:48:03 --> Could not find the language line "Home"
ERROR - 2025-01-08 12:54:07 --> Could not find the language line "Home"
ERROR - 2025-01-08 13:03:41 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 13:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 13:06:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 13:18:04 --> Could not find the language line "Home"
ERROR - 2025-01-08 13:27:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-08 13:48:04 --> Could not find the language line "Home"
ERROR - 2025-01-08 14:06:35 --> Could not find the language line "Home"
ERROR - 2025-01-08 14:18:05 --> Could not find the language line "Home"
ERROR - 2025-01-08 14:24:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-08 14:48:05 --> Could not find the language line "Home"
ERROR - 2025-01-08 15:09:38 --> Could not find the language line "Home"
ERROR - 2025-01-08 15:18:05 --> Could not find the language line "Home"
ERROR - 2025-01-08 15:36:48 --> Could not find the language line "Home"
ERROR - 2025-01-08 15:48:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 15:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:54:31 --> Could not find the language line "Home"
ERROR - 2025-01-08 15:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 15:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:01:37 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:03:48 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:04:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:04:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:04:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:04:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:04:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:04:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:05:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:05:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:22 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:05:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:05:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:05:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:05:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:06:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:06:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:06:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:06:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:06:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:06:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:07:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:07:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:07:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:07:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 16:07:39 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:18:05 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:18:09 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:26:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-08 16:26:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-08 16:26:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-08 16:45:35 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:48:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 16:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 16:59:53 --> Could not find the language line "Home"
ERROR - 2025-01-08 17:00:51 --> Could not find the language line "Home"
ERROR - 2025-01-08 17:18:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 17:30:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 17:30:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-08 17:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:36:18 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-08 17:37:05 --> Could not find the language line "Other"
ERROR - 2025-01-08 17:37:52 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 17:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 17:48:06 --> Could not find the language line "Home"
ERROR - 2025-01-08 17:55:02 --> Could not find the language line "Home"
ERROR - 2025-01-08 18:18:08 --> Could not find the language line "Home"
ERROR - 2025-01-08 18:39:00 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-08 18:48:08 --> Could not find the language line "Home"
ERROR - 2025-01-08 18:56:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 19:18:08 --> Could not find the language line "Home"
ERROR - 2025-01-08 19:23:52 --> Could not find the language line "Home"
ERROR - 2025-01-08 19:27:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-08 19:27:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-08 19:32:28 --> Could not find the language line "Home"
ERROR - 2025-01-08 19:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 19:48:08 --> Could not find the language line "Home"
ERROR - 2025-01-08 20:00:08 --> Could not find the language line "Other"
ERROR - 2025-01-08 20:03:32 --> Could not find the language line "Other"
ERROR - 2025-01-08 20:05:14 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-08 20:05:14 --> Could not find the language line "Home"
ERROR - 2025-01-08 20:05:14 --> Could not find the language line "Home"
ERROR - 2025-01-08 20:05:37 --> Could not find the language line "Perfume"
ERROR - 2025-01-08 20:14:34 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-08 20:18:08 --> Could not find the language line "Home"
ERROR - 2025-01-08 20:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 20:37:23 --> Could not find the language line "Home"
ERROR - 2025-01-08 20:48:09 --> Could not find the language line "Home"
ERROR - 2025-01-08 21:18:09 --> Could not find the language line "Home"
ERROR - 2025-01-08 21:30:03 --> Could not find the language line "Socks"
ERROR - 2025-01-08 21:48:09 --> Could not find the language line "Home"
ERROR - 2025-01-08 21:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 21:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 21:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 22:18:11 --> Could not find the language line "Home"
ERROR - 2025-01-08 22:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-08 22:48:10 --> Could not find the language line "Home"
ERROR - 2025-01-08 22:52:15 --> Could not find the language line "Home"
ERROR - 2025-01-08 22:53:09 --> Could not find the language line "Home"
ERROR - 2025-01-08 22:55:21 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 23:00:12 --> Could not find the language line "Clothing"
ERROR - 2025-01-08 23:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-08 23:18:11 --> Could not find the language line "Home"
ERROR - 2025-01-08 23:28:26 --> Could not find the language line "Home"
ERROR - 2025-01-08 23:32:19 --> Could not find the language line "Home"
ERROR - 2025-01-08 23:37:48 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-08 23:47:47 --> Could not find the language line "Home"
ERROR - 2025-01-08 23:48:12 --> Could not find the language line "Home"
ERROR - 2025-01-08 23:57:20 --> Could not find the language line "Home"
ERROR - 2025-01-08 23:59:13 --> Could not find the language line "Home"
