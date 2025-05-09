<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-10 00:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 00:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-10 00:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-10 00:06:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-10 00:18:26 --> Could not find the language line "Home"
ERROR - 2025-01-10 00:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 00:48:27 --> Could not find the language line "Home"
ERROR - 2025-01-10 00:58:38 --> Could not find the language line "Home"
ERROR - 2025-01-10 01:18:29 --> Could not find the language line "Home"
ERROR - 2025-01-10 01:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 01:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 01:48:35 --> Could not find the language line "Home"
ERROR - 2025-01-10 01:49:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 01:50:48 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:11:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 02:14:15 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 02:18:30 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:23:24 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:24:39 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:25:57 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:27:11 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:40:25 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 02:40:26 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:48:29 --> Could not find the language line "Home"
ERROR - 2025-01-10 02:50:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 03:18:27 --> Could not find the language line "Home"
ERROR - 2025-01-10 03:23:30 --> Could not find the language line "Home"
ERROR - 2025-01-10 03:26:03 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 03:29:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-10 03:48:27 --> Could not find the language line "Home"
ERROR - 2025-01-10 04:14:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 04:18:28 --> Could not find the language line "Home"
ERROR - 2025-01-10 04:24:49 --> Could not find the language line "Home"
ERROR - 2025-01-10 04:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 04:36:04 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 04:48:27 --> Could not find the language line "Home"
ERROR - 2025-01-10 05:18:28 --> Could not find the language line "Home"
ERROR - 2025-01-10 05:48:28 --> Could not find the language line "Home"
ERROR - 2025-01-10 06:18:30 --> Could not find the language line "Home"
ERROR - 2025-01-10 06:19:26 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-10 06:34:59 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-01-10 06:48:28 --> Could not find the language line "Home"
ERROR - 2025-01-10 07:04:38 --> Could not find the language line "Home"
ERROR - 2025-01-10 07:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:18:29 --> Could not find the language line "Home"
ERROR - 2025-01-10 07:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:46:56 --> Could not find the language line "Home"
ERROR - 2025-01-10 07:48:28 --> Could not find the language line "Home"
ERROR - 2025-01-10 07:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 07:56:12 --> Could not find the language line "Home"
ERROR - 2025-01-10 08:06:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-10 08:06:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-10 08:06:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-10 08:18:29 --> Could not find the language line "Home"
ERROR - 2025-01-10 08:48:30 --> Could not find the language line "Home"
ERROR - 2025-01-10 09:04:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-10 09:18:31 --> Could not find the language line "Home"
ERROR - 2025-01-10 09:44:13 --> Could not find the language line "Home"
ERROR - 2025-01-10 09:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 09:46:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-10 09:46:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-10 09:48:30 --> Could not find the language line "Home"
ERROR - 2025-01-10 09:54:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-10 10:00:31 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 10:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 10:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 10:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 10:05:35 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:07:34 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:07:55 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:14:59 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:15:50 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:15:51 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:15:52 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:15:53 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:18:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:19:55 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:23:49 --> Could not find the language line "Other"
ERROR - 2025-01-10 10:24:16 --> Could not find the language line "Home"
ERROR - 2025-01-10 10:48:32 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:05:44 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:09:45 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:17:16 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:18:31 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 11:25:42 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:32:01 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:48:31 --> Could not find the language line "Home"
ERROR - 2025-01-10 11:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:03:10 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:06:12 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:08:41 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:10:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-10 12:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:18:31 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:36:15 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:44:48 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:44:51 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:44:52 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:48:31 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:50:21 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:53:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:13 --> Could not find the language line "Perfume"
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-10 12:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-10 12:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-10 12:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-10 12:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-10 12:53:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-10 12:53:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:21 --> Could not find the language line "Perfume"
ERROR - 2025-01-10 12:53:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "Perfume"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "assets"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "assets"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "assets"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "assets"
ERROR - 2025-01-10 12:53:22 --> Could not find the language line "assets"
ERROR - 2025-01-10 12:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:57:19 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:59:03 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:59:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-10 12:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 12:59:12 --> Could not find the language line "Home"
ERROR - 2025-01-10 12:59:23 --> Could not find the language line "Other"
ERROR - 2025-01-10 13:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:03:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-10 13:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:05:54 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-10 13:06:50 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-10 13:07:28 --> Could not find the language line "Home"
ERROR - 2025-01-10 13:07:51 --> Could not find the language line "Home"
ERROR - 2025-01-10 13:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:08:48 --> Could not find the language line "Other"
ERROR - 2025-01-10 13:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:08:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 13:08:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 13:08:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 13:08:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 13:08:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 13:08:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 13:18:32 --> Could not find the language line "Home"
ERROR - 2025-01-10 13:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:37:48 --> Could not find the language line "Home"
ERROR - 2025-01-10 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 13:48:32 --> Could not find the language line "Home"
ERROR - 2025-01-10 14:18:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 14:42:55 --> Could not find the language line "Home"
ERROR - 2025-01-10 14:48:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 15:14:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-10 15:18:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 15:20:12 --> Could not find the language line "Home"
ERROR - 2025-01-10 15:26:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-10 15:46:45 --> Could not find the language line "Home"
ERROR - 2025-01-10 15:48:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 15:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 15:51:55 --> Could not find the language line "Home"
ERROR - 2025-01-10 15:52:47 --> Could not find the language line "Home"
ERROR - 2025-01-10 16:03:10 --> 404 Page Not Found: Assets/js
ERROR - 2025-01-10 16:18:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 16:21:36 --> Could not find the language line "Home"
ERROR - 2025-01-10 16:22:15 --> Could not find the language line "Home"
ERROR - 2025-01-10 16:30:44 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-10 16:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 16:48:34 --> Could not find the language line "Home"
ERROR - 2025-01-10 16:54:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 16:56:12 --> Could not find the language line "Home"
ERROR - 2025-01-10 17:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 17:14:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-10 17:18:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 17:35:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-10 17:37:48 --> Could not find the language line "Home"
ERROR - 2025-01-10 17:43:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-10 17:48:34 --> Could not find the language line "Home"
ERROR - 2025-01-10 17:56:07 --> Could not find the language line "Home"
ERROR - 2025-01-10 17:56:13 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-10 17:56:13 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-10 17:56:42 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-10 17:56:51 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-10 17:57:08 --> Could not find the language line "Home"
ERROR - 2025-01-10 18:04:38 --> Could not find the language line "Home"
ERROR - 2025-01-10 18:07:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-10 18:18:34 --> Could not find the language line "Home"
ERROR - 2025-01-10 18:26:27 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-10 18:26:27 --> Could not find the language line "Home"
ERROR - 2025-01-10 18:41:18 --> Could not find the language line "Home"
ERROR - 2025-01-10 18:48:35 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:02:41 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:07:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-10 19:12:59 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:14:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 19:18:36 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-10 19:48:36 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:49:07 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:49:14 --> Could not find the language line "Other"
ERROR - 2025-01-10 19:52:39 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:55:10 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:55:10 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:55:10 --> Could not find the language line "Home"
ERROR - 2025-01-10 19:56:31 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 20:01:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-10 20:03:44 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:18:36 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:38:59 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:41:05 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:41:11 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:48:36 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:49:48 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:50:13 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:51:17 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:54:56 --> Could not find the language line "Home"
ERROR - 2025-01-10 20:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 20:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:01:07 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:05:36 --> Could not find the language line "Perfume"
ERROR - 2025-01-10 21:05:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-10 21:06:06 --> Could not find the language line "Perfume"
ERROR - 2025-01-10 21:06:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:06:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:07:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:07:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:07:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:08:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:08:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:09:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:09:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:10:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:10:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-10 21:10:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:11:17 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:11:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:12:25 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:12:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-10 21:13:04 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:13:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-10 21:18:36 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:20:52 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:20:53 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:20:53 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:24:00 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:25:15 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:25:16 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:25:33 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:48:37 --> Could not find the language line "Home"
ERROR - 2025-01-10 21:54:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-10 22:18:38 --> Could not find the language line "Home"
ERROR - 2025-01-10 22:48:37 --> Could not find the language line "Home"
ERROR - 2025-01-10 23:10:48 --> Could not find the language line "Home"
ERROR - 2025-01-10 23:18:40 --> Could not find the language line "Home"
ERROR - 2025-01-10 23:48:40 --> Could not find the language line "Home"
