<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-24 00:18:16 --> Could not find the language line "Home"
ERROR - 2024-07-24 00:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 00:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 00:20:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-24 00:20:53 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-24 00:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 00:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 00:48:17 --> Could not find the language line "Home"
ERROR - 2024-07-24 01:09:02 --> Could not find the language line "Home"
ERROR - 2024-07-24 01:17:02 --> Could not find the language line "Other"
ERROR - 2024-07-24 01:17:37 --> Could not find the language line "Socks"
ERROR - 2024-07-24 01:18:16 --> Could not find the language line "Home"
ERROR - 2024-07-24 01:33:11 --> Could not find the language line "Home"
ERROR - 2024-07-24 01:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 01:48:16 --> Could not find the language line "Home"
ERROR - 2024-07-24 02:11:40 --> Could not find the language line "Home"
ERROR - 2024-07-24 02:18:17 --> Could not find the language line "Home"
ERROR - 2024-07-24 02:19:42 --> Could not find the language line "Home"
ERROR - 2024-07-24 02:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 02:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 02:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 02:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 02:48:18 --> Could not find the language line "Home"
ERROR - 2024-07-24 03:18:17 --> Could not find the language line "Home"
ERROR - 2024-07-24 03:19:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-24 03:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 03:48:18 --> Could not find the language line "Home"
ERROR - 2024-07-24 03:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 03:51:15 --> Could not find the language line "Home"
ERROR - 2024-07-24 04:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 04:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 04:18:18 --> Could not find the language line "Home"
ERROR - 2024-07-24 04:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 04:48:19 --> Could not find the language line "Home"
ERROR - 2024-07-24 05:01:08 --> Could not find the language line "Home"
ERROR - 2024-07-24 05:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 05:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 05:18:19 --> Could not find the language line "Home"
ERROR - 2024-07-24 05:24:45 --> Could not find the language line "Other"
ERROR - 2024-07-24 05:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 05:26:47 --> Could not find the language line "Socks"
ERROR - 2024-07-24 05:48:19 --> Could not find the language line "Home"
ERROR - 2024-07-24 05:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:03:46 --> Could not find the language line "Home"
ERROR - 2024-07-24 06:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:18:20 --> Could not find the language line "Home"
ERROR - 2024-07-24 06:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:26:56 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-24 06:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:42:14 --> Could not find the language line "Home"
ERROR - 2024-07-24 06:42:14 --> Could not find the language line "Perfume"
ERROR - 2024-07-24 06:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 06:48:20 --> Could not find the language line "Home"
ERROR - 2024-07-24 06:57:33 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:02:12 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:02:57 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:07:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 07:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:12:22 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:18:21 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:20:16 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:20:22 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:23:14 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:48:21 --> Could not find the language line "Home"
ERROR - 2024-07-24 07:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-24 07:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-24 07:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-24 07:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-24 07:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-24 07:52:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-24 08:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:18:21 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:19:06 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:32:31 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:39:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 08:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:41:13 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:47:01 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:47:15 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:47:45 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:48:21 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:49:08 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:49:47 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:50:45 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:51:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 08:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 08:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:52:50 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:52:55 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:53:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 08:53:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 08:53:31 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:56:11 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:56:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-24 08:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:57:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-24 08:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 08:58:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-24 08:59:30 --> Could not find the language line "Home"
ERROR - 2024-07-24 08:59:33 --> Could not find the language line "Socks"
ERROR - 2024-07-24 08:59:47 --> Could not find the language line "Perfume"
ERROR - 2024-07-24 08:59:59 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:00:00 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:02:17 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:02:35 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:03:49 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:05:03 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:05:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 09:05:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 09:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:05:57 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:18:22 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:48:22 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:51:26 --> Could not find the language line "Home"
ERROR - 2024-07-24 09:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 09:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:06:52 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:18:22 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:35:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 10:37:08 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:38:25 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:44:49 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:48:23 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:53:28 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:54:33 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:54:38 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:54:53 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:55:06 --> Could not find the language line "Home"
ERROR - 2024-07-24 10:55:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-24 10:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 10:56:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-24 10:56:10 --> Could not find the language line "Home"
ERROR - 2024-07-24 11:08:57 --> Could not find the language line "Home"
ERROR - 2024-07-24 11:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 11:13:06 --> Could not find the language line "Home"
ERROR - 2024-07-24 11:15:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-24 11:15:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 11:18:23 --> Could not find the language line "Home"
ERROR - 2024-07-24 11:33:19 --> Could not find the language line "Other"
ERROR - 2024-07-24 11:37:45 --> Could not find the language line "Home"
ERROR - 2024-07-24 11:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 11:48:23 --> Could not find the language line "Home"
ERROR - 2024-07-24 11:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 11:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 11:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 11:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 11:57:40 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-24 11:57:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-24 12:05:03 --> Could not find the language line "Home"
ERROR - 2024-07-24 12:05:47 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 12:06:56 --> Could not find the language line "Home"
ERROR - 2024-07-24 12:07:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 12:09:04 --> Could not find the language line "Home"
ERROR - 2024-07-24 12:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:18:25 --> Could not find the language line "Home"
ERROR - 2024-07-24 12:22:16 --> Could not find the language line "Home"
ERROR - 2024-07-24 12:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:39:34 --> Could not find the language line "Home"
ERROR - 2024-07-24 12:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 12:48:25 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:11:49 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:18:24 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:23:42 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:25:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 13:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:27:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 13:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:28:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 13:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:29:41 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:32:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 13:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 13:41:44 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:41:54 --> Could not find the language line "Home"
ERROR - 2024-07-24 13:48:25 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:18:25 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:21:13 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:21:15 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:21:20 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:22:35 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:43:44 --> Could not find the language line "Home"
ERROR - 2024-07-24 14:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 14:48:26 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:17:28 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:18:26 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:25:10 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:26:55 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:29:24 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:29:37 --> Could not find the language line "Socks"
ERROR - 2024-07-24 15:29:46 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:29:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 15:29:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-24 15:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:30:12 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:30:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 15:30:29 --> Could not find the language line "Home"
ERROR - 2024-07-24 15:31:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-24 15:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 15:48:26 --> Could not find the language line "Home"
ERROR - 2024-07-24 16:04:46 --> Could not find the language line "Home"
ERROR - 2024-07-24 16:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:18:27 --> Could not find the language line "Home"
ERROR - 2024-07-24 16:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:45:08 --> Could not find the language line "Home"
ERROR - 2024-07-24 16:45:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 16:45:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 16:45:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 16:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:46:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 16:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:46:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 16:48:27 --> Could not find the language line "Home"
ERROR - 2024-07-24 16:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 16:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 17:05:01 --> Could not find the language line "Perfume"
ERROR - 2024-07-24 17:09:03 --> Could not find the language line "Home"
ERROR - 2024-07-24 17:09:05 --> 404 Page Not Found: Wp-includes/css
ERROR - 2024-07-24 17:09:07 --> 404 Page Not Found: Media/system
ERROR - 2024-07-24 17:18:28 --> Could not find the language line "Home"
ERROR - 2024-07-24 17:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 17:42:59 --> Could not find the language line "Home"
ERROR - 2024-07-24 17:43:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 17:48:28 --> Could not find the language line "Home"
ERROR - 2024-07-24 17:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:02:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-24 18:18:28 --> Could not find the language line "Home"
ERROR - 2024-07-24 18:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:27:21 --> Could not find the language line "Home"
ERROR - 2024-07-24 18:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:48:28 --> Could not find the language line "Home"
ERROR - 2024-07-24 18:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 18:52:36 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-07-24 19:01:34 --> Could not find the language line "Home"
ERROR - 2024-07-24 19:10:34 --> Could not find the language line "Home"
ERROR - 2024-07-24 19:18:29 --> Could not find the language line "Home"
ERROR - 2024-07-24 19:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:48:29 --> Could not find the language line "Home"
ERROR - 2024-07-24 19:50:37 --> Could not find the language line "Home"
ERROR - 2024-07-24 19:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 19:57:27 --> Could not find the language line "Home"
ERROR - 2024-07-24 19:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 20:01:04 --> Could not find the language line "Socks"
ERROR - 2024-07-24 20:06:01 --> Could not find the language line "Home"
ERROR - 2024-07-24 20:06:07 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 20:06:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-24 20:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 20:18:29 --> Could not find the language line "Home"
ERROR - 2024-07-24 20:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 20:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 20:48:30 --> Could not find the language line "Home"
ERROR - 2024-07-24 20:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 20:55:13 --> Could not find the language line "Home"
ERROR - 2024-07-24 21:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 21:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 21:18:32 --> Could not find the language line "Home"
ERROR - 2024-07-24 21:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 21:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 21:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 21:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 21:48:31 --> Could not find the language line "Home"
ERROR - 2024-07-24 21:50:30 --> Could not find the language line "Home"
ERROR - 2024-07-24 21:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 22:07:48 --> Could not find the language line "Home"
ERROR - 2024-07-24 22:18:31 --> Could not find the language line "Home"
ERROR - 2024-07-24 22:28:53 --> Could not find the language line "Socks"
ERROR - 2024-07-24 22:29:42 --> Could not find the language line "Other"
ERROR - 2024-07-24 22:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 22:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 22:48:35 --> Could not find the language line "Home"
ERROR - 2024-07-24 22:49:24 --> Could not find the language line "Home"
ERROR - 2024-07-24 23:18:32 --> Could not find the language line "Home"
ERROR - 2024-07-24 23:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-24 23:48:34 --> Could not find the language line "Home"
