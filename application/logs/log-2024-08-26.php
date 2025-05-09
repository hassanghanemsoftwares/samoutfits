<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-26 00:19:19 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-08-26 00:19:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 00:40:59 --> Could not find the language line "Home"
ERROR - 2024-08-26 00:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 00:42:56 --> Could not find the language line "Home"
ERROR - 2024-08-26 00:43:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-26 00:43:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-26 00:44:01 --> Could not find the language line "Home"
ERROR - 2024-08-26 00:44:07 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:44:33 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:44:59 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:45:03 --> Could not find the language line "Home"
ERROR - 2024-08-26 00:45:08 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:45:55 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-08-26 00:46:13 --> Could not find the language line "Home"
ERROR - 2024-08-26 00:46:14 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:46:15 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:46:16 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 00:49:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 01:19:49 --> Could not find the language line "Home"
ERROR - 2024-08-26 01:32:26 --> Could not find the language line "Other"
ERROR - 2024-08-26 01:49:49 --> Could not find the language line "Home"
ERROR - 2024-08-26 01:55:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-26 02:11:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 02:19:49 --> Could not find the language line "Home"
ERROR - 2024-08-26 02:49:50 --> Could not find the language line "Home"
ERROR - 2024-08-26 03:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 03:19:51 --> Could not find the language line "Home"
ERROR - 2024-08-26 03:49:50 --> Could not find the language line "Home"
ERROR - 2024-08-26 03:59:43 --> Could not find the language line "Home"
ERROR - 2024-08-26 04:19:51 --> Could not find the language line "Home"
ERROR - 2024-08-26 04:49:51 --> Could not find the language line "Home"
ERROR - 2024-08-26 05:19:52 --> Could not find the language line "Home"
ERROR - 2024-08-26 05:22:02 --> Could not find the language line "Home"
ERROR - 2024-08-26 05:22:56 --> Could not find the language line "Home"
ERROR - 2024-08-26 05:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 05:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 05:49:52 --> Could not find the language line "Home"
ERROR - 2024-08-26 05:59:10 --> Could not find the language line "Home"
ERROR - 2024-08-26 05:59:25 --> Could not find the language line "Home"
ERROR - 2024-08-26 06:07:55 --> Could not find the language line "Home"
ERROR - 2024-08-26 06:19:52 --> Could not find the language line "Home"
ERROR - 2024-08-26 06:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:30:22 --> Could not find the language line "Disclaimer"
ERROR - 2024-08-26 06:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:49:53 --> Could not find the language line "Home"
ERROR - 2024-08-26 06:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 06:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:19:27 --> Could not find the language line "Other"
ERROR - 2024-08-26 07:19:54 --> Could not find the language line "Home"
ERROR - 2024-08-26 07:20:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 07:20:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 07:20:01 --> Could not find the language line "Home"
ERROR - 2024-08-26 07:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:23:21 --> Could not find the language line "Home"
ERROR - 2024-08-26 07:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:49:54 --> Could not find the language line "Home"
ERROR - 2024-08-26 07:56:28 --> Could not find the language line "Home"
ERROR - 2024-08-26 07:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 07:59:13 --> Could not find the language line "Home"
ERROR - 2024-08-26 08:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:19:54 --> Could not find the language line "Home"
ERROR - 2024-08-26 08:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:32:21 --> Could not find the language line "Home"
ERROR - 2024-08-26 08:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 08:49:54 --> Could not find the language line "Home"
ERROR - 2024-08-26 08:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:05:50 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 09:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 09:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 09:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 09:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 09:08:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 09:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:18:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:19:55 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:21:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:31:23 --> Could not find the language line "Socks"
ERROR - 2024-08-26 09:32:29 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:34:28 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:35:11 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:36:10 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:36:50 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:37:01 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:41:40 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:41:55 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:43:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 09:43:56 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:44:10 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:44:11 --> Could not find the language line "Bracelets"
ERROR - 2024-08-26 09:44:24 --> Could not find the language line "Bracelets"
ERROR - 2024-08-26 09:44:33 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:44:34 --> Could not find the language line "Bracelets"
ERROR - 2024-08-26 09:44:36 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:44:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 09:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:45:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 09:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:45:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 09:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:45:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 09:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:46:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 09:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:46:51 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:47:59 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:48:01 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 09:48:14 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:48:31 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:48:49 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:49:14 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:49:33 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 09:49:55 --> Could not find the language line "Home"
ERROR - 2024-08-26 09:50:14 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:50:17 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:53:15 --> Could not find the language line "Bracelets"
ERROR - 2024-08-26 09:53:17 --> Could not find the language line "Other"
ERROR - 2024-08-26 09:53:18 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 09:53:20 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 09:53:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 09:53:48 --> Could not find the language line "Other"
ERROR - 2024-08-26 10:01:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 10:07:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 10:07:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 10:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:15:20 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:15:38 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 10:15:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 10:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:18:02 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:18:19 --> Could not find the language line "Bracelets"
ERROR - 2024-08-26 10:18:23 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:18:30 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:18:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 10:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:18:52 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:19:08 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-26 10:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 10:19:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-26 10:19:44 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:19:55 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:33:06 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:35:16 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:35:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 10:35:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 10:35:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-26 10:35:45 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:46:58 --> Could not find the language line "Home"
ERROR - 2024-08-26 10:47:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 10:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 10:49:57 --> Could not find the language line "Home"
ERROR - 2024-08-26 11:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 11:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 11:19:56 --> Could not find the language line "Home"
ERROR - 2024-08-26 11:22:28 --> Could not find the language line "Home"
ERROR - 2024-08-26 11:49:56 --> Could not find the language line "Home"
ERROR - 2024-08-26 11:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 11:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 11:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:05:41 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:12:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:18:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:18:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:19:57 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:20:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:20:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:25:42 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:49:58 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:54:22 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:55:13 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:55:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:55:28 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:55:29 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 12:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:55:45 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 12:55:47 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:55:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:55:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:56:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:56:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 12:56:18 --> Could not find the language line "Home"
ERROR - 2024-08-26 12:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 12:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:02:19 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:02:21 --> 404 Page Not Found: Home/accounts
ERROR - 2024-08-26 13:02:21 --> 404 Page Not Found: Home/home
ERROR - 2024-08-26 13:02:21 --> 404 Page Not Found: Home/assets
ERROR - 2024-08-26 13:05:24 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:08:50 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:19:58 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:29:32 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:29:47 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:31:45 --> Could not find the language line "Socks"
ERROR - 2024-08-26 13:35:14 --> Could not find the language line "Other"
ERROR - 2024-08-26 13:49:58 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:53:05 --> Could not find the language line "Home"
ERROR - 2024-08-26 13:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 13:59:24 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:00:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-26 14:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:16:07 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:18:34 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:19:58 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:22:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 14:22:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 14:22:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:30:27 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:31:06 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:31:35 --> Could not find the language line "Home"
ERROR - 2024-08-26 14:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 14:49:59 --> Could not find the language line "Home"
ERROR - 2024-08-26 15:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 15:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 15:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 15:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 15:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 15:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 15:19:59 --> Could not find the language line "Home"
ERROR - 2024-08-26 15:20:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 15:20:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 15:49:59 --> Could not find the language line "Home"
ERROR - 2024-08-26 16:20:00 --> Could not find the language line "Home"
ERROR - 2024-08-26 16:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 16:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 16:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 16:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 16:47:21 --> Could not find the language line "Home"
ERROR - 2024-08-26 16:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 16:50:00 --> Could not find the language line "Home"
ERROR - 2024-08-26 17:20:01 --> Could not find the language line "Home"
ERROR - 2024-08-26 17:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:41:26 --> Could not find the language line "Home"
ERROR - 2024-08-26 17:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:45:54 --> Could not find the language line "Home"
ERROR - 2024-08-26 17:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 17:50:01 --> Could not find the language line "Home"
ERROR - 2024-08-26 17:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:00:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 18:09:29 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:20:01 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:30:51 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:33:04 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:35:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 18:38:15 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 18:38:44 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:38:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 18:39:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 18:39:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 18:39:28 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:39:34 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:39:38 --> Could not find the language line "Socks"
ERROR - 2024-08-26 18:39:55 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:39:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-26 18:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-26 18:40:10 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:45:45 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:45:54 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 18:46:19 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:46:23 --> Could not find the language line "Bracelets"
ERROR - 2024-08-26 18:50:02 --> Could not find the language line "Home"
ERROR - 2024-08-26 18:59:43 --> Could not find the language line "Home"
ERROR - 2024-08-26 19:20:03 --> Could not find the language line "Home"
ERROR - 2024-08-26 19:34:08 --> Could not find the language line "Home"
ERROR - 2024-08-26 19:34:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-26 19:41:14 --> Could not find the language line "Other"
ERROR - 2024-08-26 19:43:27 --> Could not find the language line "Socks"
ERROR - 2024-08-26 19:50:03 --> Could not find the language line "Home"
ERROR - 2024-08-26 20:20:04 --> Could not find the language line "Home"
ERROR - 2024-08-26 20:50:03 --> Could not find the language line "Home"
ERROR - 2024-08-26 21:20:09 --> Could not find the language line "Home"
ERROR - 2024-08-26 21:45:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 21:45:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 21:45:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 21:45:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-26 21:50:07 --> Could not find the language line "Home"
ERROR - 2024-08-26 21:53:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-26 22:20:08 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:44:32 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:45:15 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:45:50 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:50:06 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:50:12 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:50:16 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 22:50:21 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:50:21 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 22:50:21 --> Could not find the language line "Perfume"
ERROR - 2024-08-26 22:50:22 --> Could not find the language line "Socks"
ERROR - 2024-08-26 22:50:25 --> Could not find the language line "Socks"
ERROR - 2024-08-26 22:50:25 --> Could not find the language line "Socks"
ERROR - 2024-08-26 22:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 22:50:48 --> Could not find the language line "Home"
ERROR - 2024-08-26 22:51:06 --> Could not find the language line "Clothing"
ERROR - 2024-08-26 22:51:43 --> Could not find the language line "Home"
ERROR - 2024-08-26 23:20:05 --> Could not find the language line "Home"
ERROR - 2024-08-26 23:50:06 --> Could not find the language line "Home"
ERROR - 2024-08-26 23:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-26 23:59:44 --> 404 Page Not Found: Assets/css
