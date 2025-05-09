<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-04 00:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 00:01:57 --> Could not find the language line "Home"
ERROR - 2025-03-04 00:02:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 00:02:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 00:14:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-04 00:15:42 --> Could not find the language line "Home"
ERROR - 2025-03-04 00:20:39 --> Could not find the language line "Home"
ERROR - 2025-03-04 00:20:42 --> 404 Page Not Found: Cart/accounts
ERROR - 2025-03-04 00:20:42 --> 404 Page Not Found: Cart/home
ERROR - 2025-03-04 00:20:42 --> 404 Page Not Found: Home/assets
ERROR - 2025-03-04 00:22:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 00:22:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 00:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 00:45:42 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:15:43 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:16:01 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:16:02 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:17:42 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 01:31:06 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:32:08 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:44:10 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:45:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:46:30 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:50:08 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:59:21 --> Could not find the language line "Home"
ERROR - 2025-03-04 01:59:30 --> 404 Page Not Found: Funky%20unisex%20socks/index
ERROR - 2025-03-04 02:15:44 --> Could not find the language line "Home"
ERROR - 2025-03-04 02:15:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 02:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 02:28:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 02:28:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 02:30:26 --> Could not find the language line "Home"
ERROR - 2025-03-04 02:32:33 --> Could not find the language line "Perfume"
ERROR - 2025-03-04 02:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 02:45:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 02:57:22 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-04 02:57:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 02:57:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:01:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-04 03:11:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:15:44 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 03:39:09 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 03:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 03:45:44 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:15 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:32 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:37 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:53:38 --> Could not find the language line "Home"
ERROR - 2025-03-04 03:56:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 04:06:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-04 04:06:54 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:15:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 04:33:20 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:38:13 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:40:54 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-04 04:40:54 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:40:54 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:45:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 04:56:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 05:03:41 --> Could not find the language line "Home"
ERROR - 2025-03-04 05:03:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 05:15:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 05:30:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 05:42:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 05:45:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 05:54:40 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:15:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:22:21 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-04 06:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 06:31:18 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:36:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-04 06:39:06 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:39:11 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:40:11 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 06:45:01 --> Could not find the language line "Home"
ERROR - 2025-03-04 06:45:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:10:48 --> Could not find the language line "Home"
ERROR - 2025-03-04 07:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:13:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 07:15:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 07:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:45:53 --> Could not find the language line "Home"
ERROR - 2025-03-04 07:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 07:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:01:23 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:14:26 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:15:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:21:30 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:21:32 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:40:24 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:40:35 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:45:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:50:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:54:00 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 08:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 08:54:36 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:54:45 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-04 08:55:05 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:55:09 --> Could not find the language line "Home"
ERROR - 2025-03-04 08:55:14 --> Could not find the language line "Socks"
ERROR - 2025-03-04 08:57:08 --> Could not find the language line "Socks"
ERROR - 2025-03-04 08:58:14 --> Could not find the language line "Socks"
ERROR - 2025-03-04 08:59:10 --> Could not find the language line "Socks"
ERROR - 2025-03-04 08:59:14 --> Could not find the language line "Socks"
ERROR - 2025-03-04 08:59:17 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:00:36 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:15:48 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:20:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:23:23 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:23:32 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:23:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:26:44 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:32:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-04 09:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 09:32:23 --> Could not find the language line "Other"
ERROR - 2025-03-04 09:36:48 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:37:02 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:44:53 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:45:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:46:20 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:48:45 --> Could not find the language line "Home"
ERROR - 2025-03-04 09:54:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-04 10:15:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 10:22:26 --> Could not find the language line "Home"
ERROR - 2025-03-04 10:29:19 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-03-04 10:29:19 --> Could not find the language line "Home"
ERROR - 2025-03-04 10:31:43 --> Could not find the language line "Home"
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:40:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:45:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 10:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 10:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-04 10:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 10:51:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-04 10:56:16 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 10:56:16 --> Could not find the language line "Home"
ERROR - 2025-03-04 10:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 11:15:48 --> Could not find the language line "Home"
ERROR - 2025-03-04 11:45:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 11:47:28 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 12:00:39 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:02:44 --> Could not find the language line "Perfume"
ERROR - 2025-03-04 12:04:21 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:04:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:05:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:05:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:05:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:05:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:05:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:05:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:06:33 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:06:42 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 12:06:43 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 12:06:58 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:07:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:07:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:07:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:07:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:07:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:07:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 12:07:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:07:25 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:11:03 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:11:52 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-04 12:11:56 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:13:10 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:13:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-04 12:15:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:45:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:49:33 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:56:42 --> Could not find the language line "Other"
ERROR - 2025-03-04 12:56:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:56:57 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-04 12:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:57:03 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-04 12:57:04 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:57:25 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 12:58:44 --> Could not find the language line "Home"
ERROR - 2025-03-04 12:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 12:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:00:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:00:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:00:33 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:00:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:00:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-04 13:01:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:01:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:01:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:01:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:01:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:02:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:02:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:02:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:02:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:02:21 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:02:26 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:02:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:03:23 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:03:38 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:03:38 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:03:54 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:03:55 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:04:42 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:05:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:05:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:05:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:05:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:05:46 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:06:27 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:07:56 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:08:28 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:08:48 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:08:51 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 13:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 13:12:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:12:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:12:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:12:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 13:15:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:23:39 --> Could not find the language line "Home"
ERROR - 2025-03-04 13:45:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:01:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:03:05 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:15:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:28:17 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:44:09 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:45:50 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:53:13 --> Could not find the language line "Home"
ERROR - 2025-03-04 14:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 14:56:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 15:05:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:07:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-04 15:08:33 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:15:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:15:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 15:15:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-04 15:17:41 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:17:46 --> Could not find the language line "Other"
ERROR - 2025-03-04 15:19:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-04 15:19:22 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:20:42 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:45:50 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:51:35 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:52:06 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:53:01 --> Could not find the language line "Home"
ERROR - 2025-03-04 15:59:09 --> Could not find the language line "Home"
ERROR - 2025-03-04 16:15:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 16:24:55 --> Could not find the language line "Home"
ERROR - 2025-03-04 16:25:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 16:31:37 --> Could not find the language line "Home"
ERROR - 2025-03-04 16:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 16:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 16:45:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 16:45:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 16:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 16:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 17:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 17:04:48 --> 404 Page Not Found: Storage/settings
ERROR - 2025-03-04 17:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 17:15:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 17:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 17:45:51 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:46:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:46:53 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:47:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-04 17:49:33 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:49:39 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 17:49:40 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 17:49:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-04 17:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 17:51:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-04 17:51:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-04 17:51:36 --> Could not find the language line "Clothing"
ERROR - 2025-03-04 17:51:38 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:51:42 --> Could not find the language line "Perfume"
ERROR - 2025-03-04 17:51:49 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:52:06 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:52:11 --> Could not find the language line "Socks"
ERROR - 2025-03-04 17:52:29 --> Could not find the language line "Home"
ERROR - 2025-03-04 17:57:00 --> Could not find the language line "Home"
ERROR - 2025-03-04 18:00:03 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-04 18:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:15:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 18:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:28:51 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-04 18:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:45:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 18:46:44 --> Could not find the language line "Home"
ERROR - 2025-03-04 18:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 18:58:42 --> Could not find the language line "Home"
ERROR - 2025-03-04 19:14:56 --> Could not find the language line "Home"
ERROR - 2025-03-04 19:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:15:54 --> Could not find the language line "Home"
ERROR - 2025-03-04 19:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:27:25 --> Could not find the language line "Home"
ERROR - 2025-03-04 19:32:42 --> Could not find the language line "Home"
ERROR - 2025-03-04 19:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:45:52 --> Could not find the language line "Home"
ERROR - 2025-03-04 19:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 19:47:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 20:15:53 --> Could not find the language line "Home"
ERROR - 2025-03-04 20:24:30 --> Could not find the language line "Home"
ERROR - 2025-03-04 20:28:24 --> Could not find the language line "Home"
ERROR - 2025-03-04 20:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 20:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 20:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 20:45:53 --> Could not find the language line "Home"
ERROR - 2025-03-04 20:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 20:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 20:46:59 --> Could not find the language line "Home"
ERROR - 2025-03-04 20:56:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 21:02:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 21:15:53 --> Could not find the language line "Home"
ERROR - 2025-03-04 21:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:30:46 --> Could not find the language line "Home"
ERROR - 2025-03-04 21:30:57 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 21:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:40:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 21:41:56 --> Could not find the language line "Home"
ERROR - 2025-03-04 21:45:54 --> Could not find the language line "Home"
ERROR - 2025-03-04 21:47:00 --> Could not find the language line "Home"
ERROR - 2025-03-04 21:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 21:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 22:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 22:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 22:03:00 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:15:54 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 22:19:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-04 22:30:43 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-04 22:30:43 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:30:43 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:31:59 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:34:24 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:45:55 --> Could not find the language line "Home"
ERROR - 2025-03-04 22:46:47 --> Could not find the language line "Home"
ERROR - 2025-03-04 23:06:29 --> Could not find the language line "Home"
ERROR - 2025-03-04 23:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 23:15:55 --> Could not find the language line "Home"
ERROR - 2025-03-04 23:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-04 23:45:58 --> Could not find the language line "Home"
ERROR - 2025-03-04 23:56:25 --> 404 Page Not Found: Well-known/traffic-advice
