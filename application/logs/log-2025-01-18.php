<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-18 00:13:17 --> Could not find the language line "Home"
ERROR - 2025-01-18 00:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 00:43:15 --> Could not find the language line "Home"
ERROR - 2025-01-18 01:13:13 --> Could not find the language line "Home"
ERROR - 2025-01-18 01:43:14 --> Could not find the language line "Home"
ERROR - 2025-01-18 01:53:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 02:12:53 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-18 02:13:13 --> Could not find the language line "Home"
ERROR - 2025-01-18 02:33:10 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-01-18 02:43:13 --> Could not find the language line "Home"
ERROR - 2025-01-18 02:59:34 --> Could not find the language line "Other"
ERROR - 2025-01-18 03:03:19 --> Could not find the language line "Home"
ERROR - 2025-01-18 03:03:27 --> Could not find the language line "Home"
ERROR - 2025-01-18 03:12:57 --> Could not find the language line "Home"
ERROR - 2025-01-18 03:13:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 03:43:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 03:52:31 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-18 03:52:32 --> Could not find the language line "Home"
ERROR - 2025-01-18 04:13:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 04:13:31 --> Could not find the language line "Home"
ERROR - 2025-01-18 04:13:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 04:36:30 --> Could not find the language line "Home"
ERROR - 2025-01-18 04:43:23 --> Could not find the language line "Home"
ERROR - 2025-01-18 05:07:26 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-18 05:12:27 --> Could not find the language line "Clothing"
ERROR - 2025-01-18 05:13:19 --> Could not find the language line "Home"
ERROR - 2025-01-18 05:13:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-18 05:43:14 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:01:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:04:47 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:07:06 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:13:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:15:10 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:16:03 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 06:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 06:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 06:43:13 --> Could not find the language line "Home"
ERROR - 2025-01-18 06:43:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-18 07:00:55 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:03:52 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:05:53 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:08:00 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:08:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-18 07:08:59 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:09:29 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:10:24 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:10:39 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:10:44 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 07:11:19 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:11:23 --> Could not find the language line "Clothing"
ERROR - 2025-01-18 07:11:56 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:12:00 --> Could not find the language line "Perfume"
ERROR - 2025-01-18 07:12:05 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:12:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-18 07:12:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-18 07:13:14 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:14:22 --> Could not find the language line "Other"
ERROR - 2025-01-18 07:14:55 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-18 07:23:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-18 07:43:14 --> Could not find the language line "Home"
ERROR - 2025-01-18 07:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 07:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 07:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 07:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:01:02 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:02:56 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:02:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-18 08:02:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-18 08:02:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 08:04:07 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:08:39 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:13:16 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:14:11 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:14:12 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:14:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-18 08:14:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-18 08:14:35 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:14:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-18 08:14:57 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:15:00 --> Could not find the language line "Socks"
ERROR - 2025-01-18 08:15:32 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:15:34 --> Could not find the language line "Perfume"
ERROR - 2025-01-18 08:15:44 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:15:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 08:16:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 08:16:05 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 08:16:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 08:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:16:19 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 08:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:17:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 08:19:03 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-01-18 08:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:22:47 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:29:32 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 08:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:43:15 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:46:01 --> Could not find the language line "Home"
ERROR - 2025-01-18 08:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 08:48:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 09:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:06:36 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:13:17 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:28:54 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:36:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-18 09:36:07 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:38:17 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:38:47 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:43:15 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:47:03 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:52:40 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:52:40 --> Could not find the language line "Home"
ERROR - 2025-01-18 09:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 09:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 10:13:15 --> Could not find the language line "Home"
ERROR - 2025-01-18 10:22:01 --> Could not find the language line "Home"
ERROR - 2025-01-18 10:30:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-18 10:32:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-18 10:32:12 --> Could not find the language line "Socks"
ERROR - 2025-01-18 10:32:33 --> Could not find the language line "Socks"
ERROR - 2025-01-18 10:32:36 --> Could not find the language line "Socks"
ERROR - 2025-01-18 10:34:19 --> Could not find the language line "Socks"
ERROR - 2025-01-18 10:43:15 --> Could not find the language line "Home"
ERROR - 2025-01-18 10:43:22 --> Could not find the language line "Home"
ERROR - 2025-01-18 11:00:30 --> Could not find the language line "Home"
ERROR - 2025-01-18 11:00:54 --> Could not find the language line "Socks"
ERROR - 2025-01-18 11:01:24 --> Could not find the language line "Socks"
ERROR - 2025-01-18 11:01:49 --> Could not find the language line "Socks"
ERROR - 2025-01-18 11:01:52 --> Could not find the language line "Home"
ERROR - 2025-01-18 11:13:16 --> Could not find the language line "Home"
ERROR - 2025-01-18 11:18:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-18 11:20:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 11:22:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 11:30:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-18 11:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:40:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-18 11:40:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-18 11:40:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 11:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:43:16 --> Could not find the language line "Home"
ERROR - 2025-01-18 11:52:38 --> Could not find the language line "Perfume"
ERROR - 2025-01-18 11:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 11:56:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-18 11:57:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-18 12:13:16 --> Could not find the language line "Home"
ERROR - 2025-01-18 12:13:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 12:16:03 --> Could not find the language line "Home"
ERROR - 2025-01-18 12:30:17 --> Could not find the language line "Home"
ERROR - 2025-01-18 12:30:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 12:43:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 12:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 12:59:33 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:01:06 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:01:16 --> Could not find the language line "Perfume"
ERROR - 2025-01-18 13:01:24 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:01:36 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 13:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:02:09 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-18 13:02:16 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:02:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:02:27 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 13:13:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:16:16 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:16:17 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:17:51 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:18:38 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:19:44 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:26:26 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:26:55 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:29:23 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:36:40 --> 404 Page Not Found: Stylephp/index
ERROR - 2025-01-18 13:37:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-18 13:43:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 13:51:27 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-18 14:02:51 --> Could not find the language line "Home"
ERROR - 2025-01-18 14:13:17 --> Could not find the language line "Home"
ERROR - 2025-01-18 14:19:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-18 14:19:57 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-01-18 14:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 14:43:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 14:57:23 --> Could not find the language line "Home"
ERROR - 2025-01-18 14:57:23 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:13:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:19:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-18 15:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:19:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-18 15:19:50 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:20:01 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-01-18 15:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:34:04 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:38:42 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:39:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-18 15:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:41:03 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:43:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:45:40 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:53:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:54:39 --> Could not find the language line "Home"
ERROR - 2025-01-18 15:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:55:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-18 15:55:37 --> Could not find the language line "Other"
ERROR - 2025-01-18 15:55:47 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:55:47 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:55:47 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:55:47 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:55:47 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:55:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:55:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:55:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:55:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:55:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:55:54 --> Could not find the language line "Clothing"
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:07 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-18 15:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-18 15:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 15:56:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-18 15:56:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-18 15:56:18 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:56:18 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:56:18 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:56:18 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:56:18 --> Could not find the language line "assets"
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 15:56:18 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-18 16:01:46 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 16:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 16:13:19 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 16:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 16:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 16:38:07 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:38:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h515%' OR a.description LIKE '%h515%' OR a.color LIKE '%h515%' OR a.barcode LIKE '%h515%' OR a.category LIKE '%h515%' OR a.sub_category LIKE '%h515%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 16:39:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:43:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h515%' OR a.description LIKE '%h515%' OR a.color LIKE '%h515%' OR a.barcode LIKE '%h515%' OR a.category LIKE '%h515%' OR a.sub_category LIKE '%h515%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 16:43:19 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:43:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-18 16:45:41 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:47:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h515%' OR a.description LIKE '%h515%' OR a.color LIKE '%h515%' OR a.barcode LIKE '%h515%' OR a.category LIKE '%h515%' OR a.sub_category LIKE '%h515%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-18 16:48:10 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:48:56 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:51:26 --> Could not find the language line "Home"
ERROR - 2025-01-18 16:58:07 --> Could not find the language line "Home"
ERROR - 2025-01-18 17:07:18 --> Could not find the language line "Home"
ERROR - 2025-01-18 17:11:24 --> Could not find the language line "Home"
ERROR - 2025-01-18 17:13:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 17:19:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-18 17:43:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 18:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 18:13:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 18:36:55 --> Could not find the language line "Home"
ERROR - 2025-01-18 18:39:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-18 18:43:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 19:13:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 19:34:46 --> Could not find the language line "Home"
ERROR - 2025-01-18 19:40:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-18 19:43:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 20:11:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-18 20:13:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 20:17:20 --> Could not find the language line "Home"
ERROR - 2025-01-18 20:26:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-18 20:28:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-18 20:43:24 --> Could not find the language line "Home"
ERROR - 2025-01-18 21:13:21 --> Could not find the language line "Home"
ERROR - 2025-01-18 21:26:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 21:31:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-18 21:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 21:43:22 --> Could not find the language line "Home"
ERROR - 2025-01-18 22:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 22:13:24 --> Could not find the language line "Home"
ERROR - 2025-01-18 22:43:22 --> Could not find the language line "Home"
ERROR - 2025-01-18 22:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-18 23:13:25 --> Could not find the language line "Home"
ERROR - 2025-01-18 23:29:11 --> Could not find the language line "Home"
ERROR - 2025-01-18 23:40:41 --> Could not find the language line "Home"
ERROR - 2025-01-18 23:43:25 --> Could not find the language line "Home"
ERROR - 2025-01-18 23:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
