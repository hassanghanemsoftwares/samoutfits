<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-26 00:13:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 00:19:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 00:20:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 00:21:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 00:21:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 00:25:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 00:36:49 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-26 00:36:49 --> Could not find the language line "Home"
ERROR - 2024-11-26 00:36:49 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-26 00:36:49 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-26 00:36:50 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-26 00:36:50 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-26 00:36:50 --> 404 Page Not Found: New/index
ERROR - 2024-11-26 00:36:51 --> 404 Page Not Found: Main/index
ERROR - 2024-11-26 00:36:51 --> Could not find the language line "Home"
ERROR - 2024-11-26 00:43:34 --> Could not find the language line "Home"
ERROR - 2024-11-26 00:45:40 --> Could not find the language line "Home"
ERROR - 2024-11-26 00:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 00:58:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-26 01:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 01:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 01:05:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-26 01:05:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 01:09:47 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-26 01:13:40 --> Could not find the language line "Home"
ERROR - 2024-11-26 01:39:05 --> Could not find the language line "Home"
ERROR - 2024-11-26 01:43:34 --> Could not find the language line "Home"
ERROR - 2024-11-26 01:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 02:05:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 02:13:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 02:17:35 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-26 02:17:36 --> Could not find the language line "Home"
ERROR - 2024-11-26 02:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 02:28:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-26 02:43:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 02:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-26 03:13:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 03:22:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 03:22:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-26 03:25:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 03:28:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-26 03:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 03:43:55 --> Could not find the language line "Home"
ERROR - 2024-11-26 03:45:36 --> Could not find the language line "Home"
ERROR - 2024-11-26 04:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 04:13:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 04:25:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 04:43:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 04:45:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 05:13:52 --> Could not find the language line "Home"
ERROR - 2024-11-26 05:43:28 --> Could not find the language line "Home"
ERROR - 2024-11-26 05:43:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 05:51:59 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:05:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:13:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:13:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 06:18:26 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 06:37:16 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:37:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-26 06:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 06:39:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-26 06:39:17 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:39:40 --> Could not find the language line "Socks"
ERROR - 2024-11-26 06:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 06:40:05 --> Could not find the language line "Socks"
ERROR - 2024-11-26 06:40:10 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:40:17 --> Could not find the language line "Perfume"
ERROR - 2024-11-26 06:40:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-26 06:40:32 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:40:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-26 06:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 06:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 06:41:04 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:41:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-26 06:41:47 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:41:50 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:43:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 06:50:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-26 07:04:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-26 07:05:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 07:05:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-26 07:06:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-26 07:08:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-26 07:13:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 07:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 07:19:08 --> Could not find the language line "Home"
ERROR - 2024-11-26 07:25:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 07:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 07:43:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 07:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 07:45:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 07:46:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 07:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 07:52:17 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 07:52:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:00:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-26 08:04:22 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:04:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:04:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:04:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:05:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:05:17 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:05:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:13:04 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:13:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:13:30 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:13:35 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:13:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 08:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:13:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:13:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:13:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:14:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:26 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:39 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:14:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:15:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:15:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-26 08:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:17:43 --> Could not find the language line "Home"
ERROR - 2024-11-26 08:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 08:36:06 --> Could not find the language line "Home"
ERROR - 2024-11-26 08:36:06 --> Could not find the language line "Home"
ERROR - 2024-11-26 08:42:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-26 08:43:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 08:45:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 08:57:17 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-26 09:13:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 09:20:46 --> Could not find the language line "Other"
ERROR - 2024-11-26 09:43:12 --> Could not find the language line "Home"
ERROR - 2024-11-26 09:43:38 --> Could not find the language line "Home"
ERROR - 2024-11-26 10:07:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-26 10:13:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 10:29:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 10:43:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 10:46:03 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-11-26 10:55:51 --> 404 Page Not Found: Storage/settings
ERROR - 2024-11-26 11:13:40 --> Could not find the language line "Home"
ERROR - 2024-11-26 11:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 11:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 11:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 11:25:08 --> Could not find the language line "Home"
ERROR - 2024-11-26 11:43:39 --> Could not find the language line "Home"
ERROR - 2024-11-26 11:59:28 --> Could not find the language line "Home"
ERROR - 2024-11-26 12:06:24 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-11-26 12:13:40 --> Could not find the language line "Home"
ERROR - 2024-11-26 12:19:20 --> Could not find the language line "Home"
ERROR - 2024-11-26 12:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-26 12:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 12:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 12:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 12:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-26 12:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-26 12:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 12:43:40 --> Could not find the language line "Home"
ERROR - 2024-11-26 12:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 13:13:40 --> Could not find the language line "Home"
ERROR - 2024-11-26 13:13:50 --> Could not find the language line "Home"
ERROR - 2024-11-26 13:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 13:25:04 --> Could not find the language line "Home"
ERROR - 2024-11-26 13:25:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 13:26:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 13:28:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 13:30:07 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-26 13:30:43 --> Could not find the language line "Home"
ERROR - 2024-11-26 13:43:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 14:01:30 --> Could not find the language line "Home"
ERROR - 2024-11-26 14:05:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-26 14:13:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 14:33:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-26 14:43:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 14:48:05 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-11-26 15:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 15:13:42 --> Could not find the language line "Home"
ERROR - 2024-11-26 15:20:37 --> Could not find the language line "Home"
ERROR - 2024-11-26 15:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 15:43:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 16:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-26 16:13:41 --> Could not find the language line "Home"
ERROR - 2024-11-26 16:43:42 --> Could not find the language line "Home"
ERROR - 2024-11-26 17:13:42 --> Could not find the language line "Home"
ERROR - 2024-11-26 17:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 17:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 17:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-26 17:43:43 --> Could not find the language line "Home"
ERROR - 2024-11-26 18:13:43 --> Could not find the language line "Home"
ERROR - 2024-11-26 18:20:46 --> Could not find the language line "Home"
ERROR - 2024-11-26 18:20:48 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2024-11-26 18:20:50 --> 404 Page Not Found: Contact_us/index
ERROR - 2024-11-26 18:32:42 --> Could not find the language line "Home"
ERROR - 2024-11-26 18:43:43 --> Could not find the language line "Home"
ERROR - 2024-11-26 18:55:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-26 18:55:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-26 19:05:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-26 19:05:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-26 19:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 19:13:43 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:26:33 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:30:32 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:32:08 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:37:44 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:43:47 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:58:36 --> Could not find the language line "Home"
ERROR - 2024-11-26 19:58:50 --> Could not find the language line "Home"
ERROR - 2024-11-26 20:13:44 --> Could not find the language line "Home"
ERROR - 2024-11-26 20:26:36 --> Could not find the language line "Home"
ERROR - 2024-11-26 20:43:46 --> Could not find the language line "Home"
ERROR - 2024-11-26 20:59:03 --> Could not find the language line "Home"
ERROR - 2024-11-26 21:13:45 --> Could not find the language line "Home"
ERROR - 2024-11-26 21:43:45 --> Could not find the language line "Home"
ERROR - 2024-11-26 22:13:47 --> Could not find the language line "Home"
ERROR - 2024-11-26 22:37:17 --> Could not find the language line "products"
ERROR - 2024-11-26 22:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 22:40:47 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-26 22:40:48 --> Could not find the language line "Home"
ERROR - 2024-11-26 22:40:48 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-26 22:40:48 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-26 22:40:48 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-26 22:40:49 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-26 22:40:49 --> 404 Page Not Found: New/index
ERROR - 2024-11-26 22:40:49 --> 404 Page Not Found: Main/index
ERROR - 2024-11-26 22:40:50 --> Could not find the language line "Home"
ERROR - 2024-11-26 22:43:48 --> Could not find the language line "Home"
ERROR - 2024-11-26 22:44:16 --> Could not find the language line "Home"
ERROR - 2024-11-26 23:13:50 --> Could not find the language line "Home"
ERROR - 2024-11-26 23:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-26 23:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 23:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-26 23:36:02 --> Could not find the language line "Home"
ERROR - 2024-11-26 23:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-26 23:43:51 --> Could not find the language line "Home"
ERROR - 2024-11-26 23:46:41 --> 404 Page Not Found: Assets/css
