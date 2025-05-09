<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-04 00:07:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 00:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 00:07:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 00:15:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 00:16:37 --> Could not find the language line "Home"
ERROR - 2024-12-04 00:19:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 00:23:12 --> Could not find the language line "Home"
ERROR - 2024-12-04 00:24:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 00:28:23 --> Could not find the language line "Home"
ERROR - 2024-12-04 00:45:04 --> Could not find the language line "Home"
ERROR - 2024-12-04 00:46:30 --> Could not find the language line "Home"
ERROR - 2024-12-04 01:15:50 --> Could not find the language line "Home"
ERROR - 2024-12-04 01:19:27 --> Could not find the language line "Home"
ERROR - 2024-12-04 01:22:17 --> Could not find the language line "Home"
ERROR - 2024-12-04 01:27:30 --> Could not find the language line "Home"
ERROR - 2024-12-04 01:45:44 --> Could not find the language line "Home"
ERROR - 2024-12-04 02:15:38 --> Could not find the language line "Home"
ERROR - 2024-12-04 02:38:28 --> Could not find the language line "Home"
ERROR - 2024-12-04 02:38:28 --> Could not find the language line "Home"
ERROR - 2024-12-04 02:38:29 --> Could not find the language line "Home"
ERROR - 2024-12-04 02:43:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 02:43:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 02:43:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 02:45:39 --> Could not find the language line "Home"
ERROR - 2024-12-04 03:15:51 --> Could not find the language line "Home"
ERROR - 2024-12-04 03:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 03:45:37 --> Could not find the language line "Home"
ERROR - 2024-12-04 04:00:23 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-04 04:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 04:15:41 --> Could not find the language line "Home"
ERROR - 2024-12-04 04:16:37 --> Could not find the language line "Home"
ERROR - 2024-12-04 04:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 04:18:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 04:18:28 --> Could not find the language line "Home"
ERROR - 2024-12-04 04:42:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:43:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:43:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:44:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:44:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:45:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:45:37 --> Could not find the language line "Home"
ERROR - 2024-12-04 04:45:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 04:45:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-04 04:46:23 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 04:47:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-04 04:47:35 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-04 04:48:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-04 04:48:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-04 04:48:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-04 04:49:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-04 05:15:44 --> Could not find the language line "Home"
ERROR - 2024-12-04 05:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 05:26:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 05:26:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 05:26:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 05:45:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 06:14:05 --> Could not find the language line "Home"
ERROR - 2024-12-04 06:15:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 06:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 06:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 06:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 06:32:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-04 06:45:41 --> Could not find the language line "Home"
ERROR - 2024-12-04 06:51:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 06:53:14 --> Could not find the language line "Home"
ERROR - 2024-12-04 07:04:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 07:06:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 07:07:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 07:07:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 07:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:15:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 07:20:25 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:20:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:21:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:43 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:29:23 --> Could not find the language line "Home"
ERROR - 2024-12-04 07:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:34:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-04 07:36:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:36:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 07:39:17 --> Could not find the language line "Home"
ERROR - 2024-12-04 07:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:45:39 --> Could not find the language line "Home"
ERROR - 2024-12-04 07:54:04 --> Could not find the language line "Home"
ERROR - 2024-12-04 08:02:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 08:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:04:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-04 08:07:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 08:07:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 08:07:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 08:08:04 --> Could not find the language line "Home"
ERROR - 2024-12-04 08:08:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-04 08:11:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-04 08:11:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-04 08:15:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 08:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:28:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 08:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:38:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 08:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:42:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 08:42:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 08:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:43:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 08:43:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 08:43:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 08:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:43:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-04 08:45:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 08:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:58:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:15:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:17:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:17:34 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:17:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-04 09:17:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-04 09:17:53 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:18:25 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:18:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 09:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:19:43 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 09:19:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:19:49 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 09:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:20:11 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:23:24 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 09:26:30 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:33:55 --> Could not find the language line "Home"
ERROR - 2024-12-04 09:45:41 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:15:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:17:05 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:21:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:24:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-04 10:27:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 10:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:29:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 10:29:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:31:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 10:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 10:33:33 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:36:35 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:36:35 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:36:35 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:37:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-04 10:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-12-04 10:37:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-04 10:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-12-04 10:38:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:42:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:43:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 10:43:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 10:43:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 10:44:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 10:44:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:44:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 10:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:44:43 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 10:45:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 10:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 10:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:08:36 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:10:27 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:15:41 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:15:54 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:16:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-04 11:16:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-04 11:16:16 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:16:21 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:16:28 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:16:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:16:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:16:54 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:17:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:17:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:17:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:18:26 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:18:34 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:18:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:19:22 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:19:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:45:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:50:19 --> Could not find the language line "Home"
ERROR - 2024-12-04 11:50:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:50:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:28 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 11:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:53:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-04 11:53:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-04 11:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/img
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/img
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 11:53:36 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-04 11:53:36 --> 404 Page Not Found: Assets/img
ERROR - 2024-12-04 11:53:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-04 12:04:04 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-04 12:15:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:15:48 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 12:34:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 12:45:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:48:12 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:48:21 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:48:37 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:48:48 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:48:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 12:49:06 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:49:25 --> Could not find the language line "Home"
ERROR - 2024-12-04 12:59:42 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:15:03 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:15:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:18:52 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:23:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 13:23:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 13:23:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:40:31 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-04 13:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:43:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 13:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:45:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:53:56 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:56:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 13:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 13:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 14:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 14:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 14:15:43 --> Could not find the language line "Home"
ERROR - 2024-12-04 14:45:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 14:50:04 --> Could not find the language line "Home"
ERROR - 2024-12-04 14:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 14:54:28 --> Could not find the language line "Home"
ERROR - 2024-12-04 14:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:15:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:18:59 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:21:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 15:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:25:08 --> Could not find the language line "Other"
ERROR - 2024-12-04 15:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:31:24 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:35:17 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:41:12 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:45:44 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:54:29 --> Could not find the language line "Home"
ERROR - 2024-12-04 15:56:54 --> Could not find the language line "Other"
ERROR - 2024-12-04 16:01:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:05:33 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 16:15:44 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:19:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-04 16:21:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-04 16:21:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:27:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:57 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:33:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:33:59 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:33:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 16:34:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 16:34:02 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:02 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:02 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:02 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:02 --> Could not find the language line "assets"
ERROR - 2024-12-04 16:34:02 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 16:34:08 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-04 16:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 16:45:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 16:48:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-04 16:48:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-04 16:48:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 16:55:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-04 16:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-04 16:55:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-04 17:15:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 17:17:54 --> Could not find the language line "Home"
ERROR - 2024-12-04 17:25:48 --> Could not find the language line "Home"
ERROR - 2024-12-04 17:26:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-04 17:26:26 --> Could not find the language line "Home"
ERROR - 2024-12-04 17:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:45:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 17:57:27 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:01:47 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-04 18:01:48 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:15:45 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 18:45:46 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:50:05 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:51:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:51:33 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:51:36 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:51:36 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:51:38 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:51:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 18:58:05 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:15:46 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:18:40 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:19:22 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:22:24 --> Could not find the language line "Other"
ERROR - 2024-12-04 19:35:29 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:35:41 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:36:14 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:39:33 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:41:17 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-04 19:41:17 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:41:17 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:44:46 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:45:46 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:51:35 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:51:36 --> Could not find the language line "Home"
ERROR - 2024-12-04 19:51:37 --> Could not find the language line "Home"
ERROR - 2024-12-04 20:01:34 --> Could not find the language line "Home"
ERROR - 2024-12-04 20:07:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-04 20:07:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-04 20:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 20:34:26 --> Could not find the language line "Home"
ERROR - 2024-12-04 20:45:48 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:00:13 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-04 21:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 21:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 21:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:33:28 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:41:52 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:41:52 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:45:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:51:56 --> Could not find the language line "Home"
ERROR - 2024-12-04 21:59:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:00:36 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:07:30 --> Could not find the language line "Other"
ERROR - 2024-12-04 22:15:51 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:21:35 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:29:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 22:31:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 22:32:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 22:32:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-04 22:45:48 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:48:47 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:54:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:54:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 22:54:31 --> Could not find the language line "Home"
ERROR - 2024-12-04 23:09:14 --> Could not find the language line "Home"
ERROR - 2024-12-04 23:09:29 --> Could not find the language line "Home"
ERROR - 2024-12-04 23:09:29 --> Could not find the language line "Home"
ERROR - 2024-12-04 23:15:55 --> Could not find the language line "Home"
ERROR - 2024-12-04 23:29:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-04 23:40:21 --> 404 Page Not Found: Media/system
ERROR - 2024-12-04 23:40:23 --> 404 Page Not Found: Wp-includes/js
ERROR - 2024-12-04 23:45:53 --> Could not find the language line "Home"
