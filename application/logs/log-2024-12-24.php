<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-24 00:14:31 --> Could not find the language line "Home"
ERROR - 2024-12-24 00:42:40 --> Could not find the language line "Home"
ERROR - 2024-12-24 00:44:32 --> Could not find the language line "Home"
ERROR - 2024-12-24 01:10:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 01:10:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 01:10:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 01:10:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 01:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 01:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 01:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 01:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 01:10:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 01:10:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 01:10:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 01:10:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 01:14:33 --> Could not find the language line "Home"
ERROR - 2024-12-24 01:34:11 --> Could not find the language line "Home"
ERROR - 2024-12-24 01:44:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 02:01:01 --> Could not find the language line "Home"
ERROR - 2024-12-24 02:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 02:03:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 02:03:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 02:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 02:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 02:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 02:14:33 --> Could not find the language line "Home"
ERROR - 2024-12-24 02:28:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-24 02:29:30 --> Could not find the language line "Home"
ERROR - 2024-12-24 02:33:17 --> Could not find the language line "Home"
ERROR - 2024-12-24 02:41:46 --> Could not find the language line "Home"
ERROR - 2024-12-24 02:44:33 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:06:32 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:07:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 03:07:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 03:08:10 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:09:16 --> Could not find the language line "Other"
ERROR - 2024-12-24 03:09:31 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:09:45 --> Could not find the language line "Socks"
ERROR - 2024-12-24 03:10:32 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 03:13:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:14:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:29:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:29:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 03:44:38 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:46:56 --> Could not find the language line "Home"
ERROR - 2024-12-24 03:49:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-24 03:54:58 --> Could not find the language line "Home"
ERROR - 2024-12-24 04:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 04:14:41 --> Could not find the language line "Home"
ERROR - 2024-12-24 04:44:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 05:14:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 05:22:42 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-24 05:30:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 05:30:49 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-24 05:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 05:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 05:44:33 --> Could not find the language line "Home"
ERROR - 2024-12-24 06:09:37 --> Could not find the language line "Other"
ERROR - 2024-12-24 06:14:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 06:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 06:24:20 --> Could not find the language line "Home"
ERROR - 2024-12-24 06:34:19 --> Could not find the language line "Home"
ERROR - 2024-12-24 06:44:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 06:49:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:00:07 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:00:18 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:00:30 --> Could not find the language line "Socks"
ERROR - 2024-12-24 07:00:50 --> Could not find the language line "Socks"
ERROR - 2024-12-24 07:01:04 --> Could not find the language line "Socks"
ERROR - 2024-12-24 07:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 07:03:04 --> Could not find the language line "Socks"
ERROR - 2024-12-24 07:03:13 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:06:06 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:10:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-24 07:14:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 07:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 07:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 07:24:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 07:26:43 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:30:42 --> Could not find the language line "Socks"
ERROR - 2024-12-24 07:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 07:37:18 --> Could not find the language line "Home"
ERROR - 2024-12-24 07:44:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 08:14:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 08:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:34:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 08:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:34:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 08:34:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 08:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:44:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 08:44:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 08:45:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 08:45:12 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 08:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 08:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 08:54:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 09:09:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 09:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 09:10:35 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-12-24 09:10:36 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-24 09:10:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-12-24 09:10:39 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-24 09:14:36 --> Could not find the language line "Home"
ERROR - 2024-12-24 09:18:54 --> Could not find the language line "Home"
ERROR - 2024-12-24 09:25:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-24 09:25:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-24 09:25:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 09:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 09:36:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 09:44:35 --> Could not find the language line "Home"
ERROR - 2024-12-24 09:49:52 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:08:23 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 10:14:36 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:22:22 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:23:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 10:23:12 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 10:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 10:23:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 10:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 10:24:43 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:25:09 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:26:02 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:30:09 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 10:36:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-24 10:36:30 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:38:10 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:40:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-24 10:44:36 --> Could not find the language line "Home"
ERROR - 2024-12-24 10:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:04:46 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-24 11:05:09 --> 404 Page Not Found: Sitemap/index
ERROR - 2024-12-24 11:14:36 --> Could not find the language line "Home"
ERROR - 2024-12-24 11:15:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 11:15:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 11:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:21:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 11:22:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 11:22:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 11:22:55 --> Could not find the language line "Clothing"
ERROR - 2024-12-24 11:24:59 --> Could not find the language line "Home"
ERROR - 2024-12-24 11:25:50 --> Could not find the language line "Home"
ERROR - 2024-12-24 11:27:01 --> Could not find the language line "Home"
ERROR - 2024-12-24 11:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 11:44:37 --> Could not find the language line "Home"
ERROR - 2024-12-24 12:14:37 --> Could not find the language line "Home"
ERROR - 2024-12-24 12:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 12:44:37 --> Could not find the language line "Home"
ERROR - 2024-12-24 12:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 12:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 13:14:38 --> Could not find the language line "Home"
ERROR - 2024-12-24 13:17:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:17:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:17:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:17:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:20:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:20:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:21:21 --> Could not find the language line "Home"
ERROR - 2024-12-24 13:21:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:21:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:26:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:26:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:28:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:28:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:28:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:31:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:31:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:32:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:33:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:33:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:34:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 13:42:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:42:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:43:10 --> Could not find the language line "Home"
ERROR - 2024-12-24 13:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:43:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:44:38 --> Could not find the language line "Home"
ERROR - 2024-12-24 13:44:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:45:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:45:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:46:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:46:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:46:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:48:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:49:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 13:56:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 13:58:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 13:59:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 14:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:01:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 14:01:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:01:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:01:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:01:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 14:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:03:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 14:04:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-24 14:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:08:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:11:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:14:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:20:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:21:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:21:07 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-24 14:22:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:23:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:23:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 14:32:50 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:33:15 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:34:11 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:34:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:36:06 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:38:51 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-24 14:39:49 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:44:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 14:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 14:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:12:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-24 15:14:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-24 15:14:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 15:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:17:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-24 15:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:26:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:28:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:28:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:28:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:29:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:29:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:29:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:29:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:30:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:30:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:30:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:32:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:32:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 15:44:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 15:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 15:51:29 --> Could not find the language line "Socks"
ERROR - 2024-12-24 16:02:29 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-24 16:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:09:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-24 16:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:14:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 16:16:26 --> Could not find the language line "Home"
ERROR - 2024-12-24 16:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:24:57 --> Could not find the language line "Home"
ERROR - 2024-12-24 16:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:32:36 --> Could not find the language line "Home"
ERROR - 2024-12-24 16:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:44:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-24 16:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-24 16:44:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-24 16:44:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 16:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 16:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 17:14:39 --> Could not find the language line "Home"
ERROR - 2024-12-24 17:40:54 --> Could not find the language line "Home"
ERROR - 2024-12-24 17:41:27 --> Could not find the language line "Home"
ERROR - 2024-12-24 17:44:40 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:14:40 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:22:00 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:22:09 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:24:31 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:32:11 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:42:16 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:44:41 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:45:08 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:45:59 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:46:40 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:47:40 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:47:49 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:48:47 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 18:51:09 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:52:22 --> Could not find the language line "Home"
ERROR - 2024-12-24 18:52:39 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-24 18:52:39 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-24 18:53:48 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:14:41 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:18:01 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:26:40 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-24 19:28:04 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:35:01 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:44:41 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:52:38 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:55:13 --> Could not find the language line "Home"
ERROR - 2024-12-24 19:59:27 --> Could not find the language line "Home"
ERROR - 2024-12-24 20:02:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 20:14:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 20:31:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-24 20:41:26 --> Could not find the language line "Home"
ERROR - 2024-12-24 20:44:43 --> Could not find the language line "Home"
ERROR - 2024-12-24 21:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 21:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 21:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 21:14:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 21:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 21:37:00 --> Could not find the language line "Home"
ERROR - 2024-12-24 21:37:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 21:38:47 --> Could not find the language line "Home"
ERROR - 2024-12-24 21:44:42 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:00:57 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:11:34 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:14:43 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 22:44:43 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:44:57 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:45:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:45:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 22:45:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:45:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:45:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:46:11 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 22:46:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:46:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-24 22:46:26 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 22:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-24 22:49:05 --> Could not find the language line "Home"
ERROR - 2024-12-24 22:49:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:49:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:50:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:50:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:50:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:50:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:50:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 22:50:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-24 23:14:51 --> Could not find the language line "Home"
ERROR - 2024-12-24 23:44:45 --> Could not find the language line "Home"
