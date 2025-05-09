<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-11 00:13:36 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:17:20 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:17:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:18:59 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:22:49 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:30:55 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-11 00:30:55 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:30:55 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:38:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 00:44:16 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:47:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:52:09 --> Could not find the language line "Home"
ERROR - 2025-04-11 00:53:53 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-04-11 01:01:47 --> Could not find the language line "Other"
ERROR - 2025-04-11 01:17:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 01:20:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-11 01:20:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-11 01:20:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-11 01:30:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 01:47:26 --> Could not find the language line "Home"
ERROR - 2025-04-11 01:48:36 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-11 01:52:29 --> Could not find the language line "Other"
ERROR - 2025-04-11 01:55:47 --> Could not find the language line "Home"
ERROR - 2025-04-11 02:11:34 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-11 02:11:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 02:11:34 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-11 02:11:35 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-11 02:11:35 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-11 02:11:35 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-11 02:11:36 --> 404 Page Not Found: New/index
ERROR - 2025-04-11 02:11:36 --> 404 Page Not Found: Main/index
ERROR - 2025-04-11 02:11:36 --> Could not find the language line "Home"
ERROR - 2025-04-11 02:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-11 02:21:28 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-04-11 02:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 02:32:30 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 02:47:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 03:00:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-11 03:00:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-11 03:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-11 03:27:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-11 03:33:33 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-11 03:33:33 --> Could not find the language line "Home"
ERROR - 2025-04-11 03:39:57 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-04-11 03:47:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:00:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:08:50 --> Could not find the language line "accounts"
ERROR - 2025-04-11 04:11:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 04:17:26 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:24:55 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:44:55 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:44:55 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:47:26 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:48:22 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:50:05 --> Could not find the language line "Home"
ERROR - 2025-04-11 04:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 05:01:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-11 05:04:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 05:13:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 05:17:35 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:28:44 --> Could not find the language line "Other"
ERROR - 2025-04-11 05:30:07 --> Could not find the language line "Other"
ERROR - 2025-04-11 05:34:50 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:38:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 05:39:11 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:40:41 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 05:42:00 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:43:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:47:24 --> Could not find the language line "Home"
ERROR - 2025-04-11 05:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 06:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 06:03:00 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:10:48 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:13:45 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 06:14:04 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 06:17:24 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 06:20:47 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 06:30:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:47:24 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:47:46 --> Could not find the language line "Home"
ERROR - 2025-04-11 06:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 06:57:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 07:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:03:31 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:12:10 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:17:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:22:17 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:31:23 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:35:50 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:36:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 07:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:36:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 07:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:36:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 07:37:11 --> Could not find the language line "hats"
ERROR - 2025-04-11 07:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:38:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 07:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:42:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:42:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-11 07:43:13 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:43:13 --> Could not find the language line "Socks"
ERROR - 2025-04-11 07:44:02 --> Could not find the language line "Socks"
ERROR - 2025-04-11 07:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:44:31 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:45:03 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:45:05 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 07:45:19 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:45:20 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-11 07:45:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 07:45:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 07:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 07:47:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 07:55:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:07:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 08:10:06 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:13:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-11 08:17:27 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:22:35 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:22:36 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:25:45 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:25:47 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:35:39 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-11 08:50:40 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-11 08:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 08:52:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:07:37 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:08:19 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:11:02 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:14:46 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:16:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-11 09:17:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-11 09:17:27 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:23:20 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 09:26:54 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:27:19 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:31:33 --> Could not find the language line "Other"
ERROR - 2025-04-11 09:32:40 --> Could not find the language line "Other"
ERROR - 2025-04-11 09:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:34:01 --> Could not find the language line "Perfume"
ERROR - 2025-04-11 09:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:47:36 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-11 09:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:50:48 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 09:52:39 --> Could not find the language line "Home"
ERROR - 2025-04-11 09:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 09:57:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 09:58:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 09:59:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 10:01:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 10:01:53 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:06:53 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:06:53 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-11 10:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-11 10:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:17:27 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:27:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 10:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:33:01 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:36:04 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:39:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 10:41:10 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:46:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:47:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:47:27 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:49:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:49:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:49:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:49:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:49:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-11 10:49:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 10:49:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 10:49:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 10:49:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 10:49:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 10:50:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 10:50:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 10:50:35 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:55:25 --> Could not find the language line "Home"
ERROR - 2025-04-11 10:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 10:58:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 10:59:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 11:02:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 11:03:12 --> Could not find the language line "Home"
ERROR - 2025-04-11 11:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 11:09:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 11:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-11 11:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 11:26:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 11:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 11:39:08 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 11:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 11:43:31 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-11 11:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 11:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 11:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:03:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-11 12:11:51 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:12:01 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-11 12:12:19 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:12:22 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:12:56 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:13:28 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:13:39 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:14:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:14:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:14:06 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:14:07 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-11 12:14:10 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:16:10 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:22:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:22:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-11 12:23:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-11 12:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:26:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 12:26:06 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 12:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 12:56:35 --> Could not find the language line "Socks"
ERROR - 2025-04-11 12:57:13 --> Could not find the language line "Home"
ERROR - 2025-04-11 12:57:13 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:09:43 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:17:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:24:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-11 13:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:24:44 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 13:37:43 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:39:52 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:44:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 13:46:12 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:47:30 --> Could not find the language line "Home"
ERROR - 2025-04-11 13:51:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-11 13:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 14:00:03 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:01:19 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:01:22 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:01:27 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:01:28 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:01:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 14:12:30 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:16:14 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 14:16:35 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 14:17:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:17:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 14:18:09 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:36:30 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:39:06 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:39:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 14:45:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:50:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:54:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 14:58:47 --> Could not find the language line "Home"
ERROR - 2025-04-11 14:58:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 15:10:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-11 15:11:21 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:17:30 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:28:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 15:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:32:53 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:34:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:34:36 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:34:40 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:35:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-11 15:42:16 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:47:30 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:57:17 --> Could not find the language line "Home"
ERROR - 2025-04-11 15:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 15:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:07:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 16:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:17:30 --> Could not find the language line "Home"
ERROR - 2025-04-11 16:20:55 --> Could not find the language line "Home"
ERROR - 2025-04-11 16:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:28:23 --> Could not find the language line "Home"
ERROR - 2025-04-11 16:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:42:05 --> Could not find the language line "Home"
ERROR - 2025-04-11 16:42:21 --> Could not find the language line "products"
ERROR - 2025-04-11 16:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 16:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:06:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 17:06:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 17:09:34 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-11 17:09:35 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:09:35 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-11 17:09:35 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-11 17:09:35 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-11 17:09:35 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-11 17:09:36 --> 404 Page Not Found: New/index
ERROR - 2025-04-11 17:09:36 --> 404 Page Not Found: Main/index
ERROR - 2025-04-11 17:09:36 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:15:47 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:17:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:21:13 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-11 17:21:13 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:21:15 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-11 17:21:15 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-11 17:21:16 --> 404 Page Not Found: Blog/index
ERROR - 2025-04-11 17:21:17 --> 404 Page Not Found: New/index
ERROR - 2025-04-11 17:21:21 --> 404 Page Not Found: Main/index
ERROR - 2025-04-11 17:21:22 --> 404 Page Not Found: Testing/index
ERROR - 2025-04-11 17:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 17:40:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 17:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:47:32 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-11 17:47:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 17:47:34 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-11 17:47:34 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-11 17:47:35 --> 404 Page Not Found: Blog/index
ERROR - 2025-04-11 17:47:35 --> 404 Page Not Found: New/index
ERROR - 2025-04-11 17:47:39 --> 404 Page Not Found: Main/index
ERROR - 2025-04-11 17:47:40 --> 404 Page Not Found: Testing/index
ERROR - 2025-04-11 17:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 17:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 18:07:44 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:08:37 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 18:10:08 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:11:57 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 18:16:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:16:38 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-11 18:16:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:17:31 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 18:32:58 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:37:01 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-11 18:37:01 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:38:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-11 18:45:12 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:47:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:56:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 18:56:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 18:57:20 --> Could not find the language line "Home"
ERROR - 2025-04-11 18:58:54 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:02:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-11 19:17:33 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:22:41 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:23:56 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:29:05 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:31:23 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:32:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 19:32:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-11 19:32:40 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 19:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 19:37:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-11 19:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 19:43:17 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:47:32 --> Could not find the language line "Home"
ERROR - 2025-04-11 19:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 20:04:39 --> Could not find the language line "Home"
ERROR - 2025-04-11 20:11:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 20:11:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 20:17:33 --> Could not find the language line "Home"
ERROR - 2025-04-11 20:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 20:29:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-11 20:29:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-11 20:29:52 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-04-11 20:29:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-04-11 20:29:52 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-11 20:29:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-11 20:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 20:47:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 20:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 20:52:44 --> Could not find the language line "Home"
ERROR - 2025-04-11 20:55:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-11 20:56:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-11 20:56:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-11 20:57:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-11 20:57:26 --> Could not find the language line "Home"
ERROR - 2025-04-11 20:59:13 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 21:02:07 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:16:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:17:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 21:25:32 --> Could not find the language line "Bracelets"
ERROR - 2025-04-11 21:27:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-11 21:36:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-11 21:42:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:47:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:55:46 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 21:57:44 --> Could not find the language line "Home"
ERROR - 2025-04-11 21:58:58 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:00:15 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:01:52 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 22:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 22:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 22:06:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-11 22:07:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-11 22:17:38 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:18:02 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:31:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:31:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:34:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:35:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:35:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:35:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:36:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:37:33 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:37:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:47:37 --> Could not find the language line "Home"
ERROR - 2025-04-11 22:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 22:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 22:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 22:53:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 22:54:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 23:17:32 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-11 23:17:33 --> Could not find the language line "Home"
ERROR - 2025-04-11 23:17:33 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-11 23:17:33 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-11 23:17:33 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-11 23:17:33 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-11 23:17:33 --> 404 Page Not Found: New/index
ERROR - 2025-04-11 23:17:33 --> 404 Page Not Found: Main/index
ERROR - 2025-04-11 23:17:34 --> Could not find the language line "Home"
ERROR - 2025-04-11 23:17:37 --> Could not find the language line "Home"
ERROR - 2025-04-11 23:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-11 23:27:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-11 23:41:29 --> Could not find the language line "Home"
ERROR - 2025-04-11 23:47:59 --> Could not find the language line "Home"
ERROR - 2025-04-11 23:48:42 --> 404 Page Not Found: Assets/css
