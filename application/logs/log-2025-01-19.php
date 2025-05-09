<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-19 00:00:04 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:04:35 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:13:24 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:14:38 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:17:10 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:21:43 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:26:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:26:42 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:27:06 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:30:43 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:41:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 00:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:43:24 --> Could not find the language line "Home"
ERROR - 2025-01-19 00:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 00:59:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-19 01:03:44 --> Could not find the language line "Home"
ERROR - 2025-01-19 01:13:27 --> Could not find the language line "Home"
ERROR - 2025-01-19 01:43:25 --> Could not find the language line "Home"
ERROR - 2025-01-19 01:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 02:13:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 02:40:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-19 02:43:25 --> Could not find the language line "Home"
ERROR - 2025-01-19 02:46:58 --> Could not find the language line "Home"
ERROR - 2025-01-19 02:49:46 --> Could not find the language line "Home"
ERROR - 2025-01-19 03:09:10 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-19 03:13:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 03:43:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 03:52:05 --> 404 Page Not Found: Phpinfo/index
ERROR - 2025-01-19 03:52:33 --> Could not find the language line "Home"
ERROR - 2025-01-19 03:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 03:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:57:46 --> Could not find the language line "Home"
ERROR - 2025-01-19 03:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 03:58:50 --> Could not find the language line "Home"
ERROR - 2025-01-19 03:58:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-19 03:59:39 --> Could not find the language line "Home"
ERROR - 2025-01-19 04:08:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-19 04:12:37 --> Could not find the language line "Home"
ERROR - 2025-01-19 04:12:41 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-19 04:13:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 04:20:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-19 04:43:27 --> Could not find the language line "Home"
ERROR - 2025-01-19 04:52:39 --> Could not find the language line "Home"
ERROR - 2025-01-19 05:13:28 --> Could not find the language line "Home"
ERROR - 2025-01-19 05:34:18 --> Could not find the language line "Home"
ERROR - 2025-01-19 05:34:21 --> Could not find the language line "Other"
ERROR - 2025-01-19 05:43:29 --> Could not find the language line "Home"
ERROR - 2025-01-19 05:50:46 --> Could not find the language line "Socks"
ERROR - 2025-01-19 06:13:28 --> Could not find the language line "Home"
ERROR - 2025-01-19 06:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 06:43:27 --> Could not find the language line "Home"
ERROR - 2025-01-19 07:13:30 --> Could not find the language line "Home"
ERROR - 2025-01-19 07:19:31 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-19 07:19:31 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-19 07:19:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-19 07:19:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-19 07:43:29 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:03:37 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:07:04 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:10:22 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:13:29 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:30:43 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:35:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-19 08:43:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 08:53:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-19 09:02:46 --> Could not find the language line "Home"
ERROR - 2025-01-19 09:06:50 --> Could not find the language line "Home"
ERROR - 2025-01-19 09:08:47 --> Could not find the language line "Home"
ERROR - 2025-01-19 09:13:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 09:28:50 --> Could not find the language line "Home"
ERROR - 2025-01-19 09:43:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 10:05:45 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-19 10:13:30 --> Could not find the language line "Home"
ERROR - 2025-01-19 10:26:36 --> Could not find the language line "Other"
ERROR - 2025-01-19 10:35:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 10:36:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 10:40:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-19 10:43:30 --> Could not find the language line "Home"
ERROR - 2025-01-19 10:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-19 10:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-19 10:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-19 10:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-19 10:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 10:59:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-19 11:13:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 11:25:52 --> Could not find the language line "Home"
ERROR - 2025-01-19 11:43:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 11:56:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-19 11:58:19 --> Could not find the language line "Clothing"
ERROR - 2025-01-19 11:59:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 12:03:21 --> Could not find the language line "Clothing"
ERROR - 2025-01-19 12:13:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 12:16:00 --> Could not find the language line "Home"
ERROR - 2025-01-19 12:16:00 --> Could not find the language line "Home"
ERROR - 2025-01-19 12:16:00 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-19 12:23:27 --> Could not find the language line "Home"
ERROR - 2025-01-19 12:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 12:43:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 13:13:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 13:43:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 13:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 14:03:37 --> Could not find the language line "Home"
ERROR - 2025-01-19 14:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 14:13:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 14:38:13 --> Could not find the language line "Home"
ERROR - 2025-01-19 14:38:24 --> Could not find the language line "Clothing"
ERROR - 2025-01-19 14:43:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-19 14:43:31 --> Could not find the language line "Home"
ERROR - 2025-01-19 14:49:52 --> Could not find the language line "Home"
ERROR - 2025-01-19 14:51:53 --> Could not find the language line "Home"
ERROR - 2025-01-19 15:13:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 15:14:58 --> Could not find the language line "Home"
ERROR - 2025-01-19 15:33:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-19 15:33:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-19 15:33:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-19 15:39:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 15:43:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-19 15:43:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 15:58:58 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:07:35 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 16:13:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 16:15:26 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-19 16:15:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:15:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:34:44 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:35:42 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:37:20 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:43:33 --> Could not find the language line "Home"
ERROR - 2025-01-19 16:58:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 17:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 17:13:33 --> Could not find the language line "Home"
ERROR - 2025-01-19 17:23:23 --> Could not find the language line "Home"
ERROR - 2025-01-19 17:43:33 --> Could not find the language line "Home"
ERROR - 2025-01-19 17:48:14 --> Could not find the language line "Home"
ERROR - 2025-01-19 17:48:15 --> Could not find the language line "Home"
ERROR - 2025-01-19 18:13:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-19 18:13:35 --> Could not find the language line "Home"
ERROR - 2025-01-19 18:43:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 18:56:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-19 19:05:32 --> Could not find the language line "Home"
ERROR - 2025-01-19 19:07:10 --> Could not find the language line "Home"
ERROR - 2025-01-19 19:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 19:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 19:13:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 19:18:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-19 19:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 19:36:50 --> Could not find the language line "Home"
ERROR - 2025-01-19 19:36:50 --> Could not find the language line "Home"
ERROR - 2025-01-19 19:43:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 20:13:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 20:37:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-19 20:37:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-19 20:39:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-19 20:43:35 --> Could not find the language line "Home"
ERROR - 2025-01-19 20:47:34 --> Could not find the language line "Home"
ERROR - 2025-01-19 21:00:56 --> Could not find the language line "Home"
ERROR - 2025-01-19 21:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:12:50 --> Could not find the language line "Home"
ERROR - 2025-01-19 21:13:35 --> Could not find the language line "Home"
ERROR - 2025-01-19 21:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:28:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-19 21:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:43:35 --> Could not find the language line "Home"
ERROR - 2025-01-19 21:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 21:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-19 22:00:28 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-19 22:00:28 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:00:28 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:02:55 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:13:38 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:16:04 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-19 22:16:04 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:16:04 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:27:52 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-19 22:27:52 --> Could not find the language line "Home"
ERROR - 2025-01-19 22:43:39 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:13:37 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:13:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 23:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-19 23:23:36 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-19 23:24:22 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:26:43 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:43:26 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:43:43 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:52:23 --> Could not find the language line "Home"
ERROR - 2025-01-19 23:57:03 --> Could not find the language line "Home"
