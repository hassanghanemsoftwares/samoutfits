<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-05 00:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 00:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 00:11:53 --> Could not find the language line "Home"
ERROR - 2025-02-05 00:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 00:27:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-05 00:28:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-05 00:29:23 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-05 00:31:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 00:41:50 --> Could not find the language line "Home"
ERROR - 2025-02-05 00:46:03 --> Could not find the language line "Home"
ERROR - 2025-02-05 01:05:17 --> Could not find the language line "Home"
ERROR - 2025-02-05 01:12:00 --> Could not find the language line "Home"
ERROR - 2025-02-05 01:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 01:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 01:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 01:39:48 --> Could not find the language line "Home"
ERROR - 2025-02-05 01:41:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 02:11:54 --> Could not find the language line "Home"
ERROR - 2025-02-05 02:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 02:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 02:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 02:41:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 02:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 02:45:28 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-05 02:45:28 --> Could not find the language line "Home"
ERROR - 2025-02-05 02:45:28 --> Could not find the language line "Home"
ERROR - 2025-02-05 02:49:04 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:05:34 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:05:36 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:12:00 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:37:41 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:41:07 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:41:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:53:33 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:55:07 --> Could not find the language line "Home"
ERROR - 2025-02-05 03:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 03:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 04:10:15 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:10:47 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:11:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 04:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 04:11:43 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:11:56 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:13:36 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 04:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 04:15:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 04:16:23 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:22:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:29:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:41:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:53:37 --> Could not find the language line "Home"
ERROR - 2025-02-05 04:56:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 04:56:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 05:11:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 05:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 05:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 05:37:35 --> Could not find the language line "Home"
ERROR - 2025-02-05 05:37:42 --> Could not find the language line "Home"
ERROR - 2025-02-05 05:37:48 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-05 05:38:02 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-05 05:38:09 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-05 05:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 05:41:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 05:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-05 06:06:34 --> Could not find the language line "Home"
ERROR - 2025-02-05 06:11:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 06:14:10 --> Could not find the language line "Home"
ERROR - 2025-02-05 06:15:43 --> Could not find the language line "Home"
ERROR - 2025-02-05 06:23:05 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-05 06:24:53 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 06:24:56 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 06:25:08 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 06:29:18 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 06:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 06:39:38 --> 404 Page Not Found: Media/system
ERROR - 2025-02-05 06:39:41 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-05 06:41:53 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:07:15 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:11:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:30:17 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:30:19 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:41:54 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 07:52:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 07:52:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:55:32 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:56:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-05 07:56:19 --> Could not find the language line "Home"
ERROR - 2025-02-05 07:56:26 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 08:02:27 --> Could not find the language line "Home"
ERROR - 2025-02-05 08:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:11:54 --> Could not find the language line "Home"
ERROR - 2025-02-05 08:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 08:24:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-05 08:25:26 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-05 08:25:26 --> Could not find the language line "Home"
ERROR - 2025-02-05 08:25:26 --> Could not find the language line "Home"
ERROR - 2025-02-05 08:28:37 --> Could not find the language line "Home"
ERROR - 2025-02-05 08:34:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-05 08:41:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 08:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:07:40 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:11:54 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:15:09 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:17:57 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:18:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:26:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:26:02 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:26:59 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:41:54 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:44:23 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:44:23 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:45:29 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 09:49:51 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:55:07 --> Could not find the language line "Home"
ERROR - 2025-02-05 09:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 09:59:02 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 10:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:09:51 --> 404 Page Not Found: Plugins/function.php
ERROR - 2025-02-05 10:09:57 --> 404 Page Not Found: File/function.php
ERROR - 2025-02-05 10:10:04 --> 404 Page Not Found: As/function
ERROR - 2025-02-05 10:10:18 --> 404 Page Not Found: Mah/function.php
ERROR - 2025-02-05 10:10:25 --> 404 Page Not Found: Admin/function.php
ERROR - 2025-02-05 10:10:29 --> 404 Page Not Found: Doc/function.php
ERROR - 2025-02-05 10:10:32 --> 404 Page Not Found: About/function.php
ERROR - 2025-02-05 10:10:38 --> 404 Page Not Found: Index/function.php
ERROR - 2025-02-05 10:11:13 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:11:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:13:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 10:13:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 10:21:46 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:27:41 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:28:25 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:30:14 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:41:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 10:51:14 --> Could not find the language line "Home"
ERROR - 2025-02-05 10:58:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-05 10:59:29 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 10:59:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-05 10:59:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:01:42 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:06:53 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:11:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:13:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:17:22 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:22:34 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:34:45 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:35:56 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:41:55 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:42:26 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-05 11:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 11:53:19 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:55:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-05 11:58:20 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-05 11:58:22 --> Could not find the language line "Home"
ERROR - 2025-02-05 11:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 12:00:05 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 12:11:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:12:02 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:16:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:21:59 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 12:32:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 12:41:56 --> Could not find the language line "Home"
ERROR - 2025-02-05 12:51:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-05 12:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 13:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 13:11:57 --> Could not find the language line "Home"
ERROR - 2025-02-05 13:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 13:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 13:33:15 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-05 13:41:57 --> Could not find the language line "Home"
ERROR - 2025-02-05 13:53:34 --> Could not find the language line "Home"
ERROR - 2025-02-05 13:56:42 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 13:57:20 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 13:57:31 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 13:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 13:59:10 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 13:59:17 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 13:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:01:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 14:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:02:45 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:03:40 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:04:01 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:04:09 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:04:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:11:56 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:14:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:15:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:18:24 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:21:06 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:21:39 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:40 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:40 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:40 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:40 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:40 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:21:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:21:52 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:21:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:21:53 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-05 14:21:53 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-05 14:21:53 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-05 14:21:53 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-05 14:21:53 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:26:23 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:28:09 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:28:38 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:31:06 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:33:04 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:38:37 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:38:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:38:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:39:03 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:39:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:39:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:39:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:39:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:40:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:40:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:40:13 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:40:50 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:40:58 --> Could not find the language line "Perfume"
ERROR - 2025-02-05 14:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:41:56 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:43:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:14 --> Could not find the language line "Home"
ERROR - 2025-02-05 14:43:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:23 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 14:43:25 --> Could not find the language line "assets"
ERROR - 2025-02-05 14:43:25 --> Could not find the language line "assets"
ERROR - 2025-02-05 14:43:25 --> Could not find the language line "assets"
ERROR - 2025-02-05 14:43:25 --> Could not find the language line "assets"
ERROR - 2025-02-05 14:43:25 --> Could not find the language line "assets"
ERROR - 2025-02-05 14:43:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-05 14:43:38 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:38 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:39 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:39 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:39 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:39 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:39 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-02-05 14:43:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:43:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-05 14:44:01 --> Could not find the language line "Socks"
ERROR - 2025-02-05 14:44:33 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:44:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 14:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:45:04 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:45:32 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:46:13 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:46:57 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 14:47:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 14:47:15 --> Could not find the language line "Other"
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-05 14:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 14:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m129%' OR a.description LIKE '%m129%' OR a.color LIKE '%m129%' OR a.barcode LIKE '%m129%' OR a.category LIKE '%m129%' OR a.sub_category LIKE '%m129%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-05 14:47:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-05 15:00:54 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-05 15:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:11:57 --> Could not find the language line "Home"
ERROR - 2025-02-05 15:13:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 15:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 15:34:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-05 15:41:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 15:45:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-05 15:50:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 16:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:07:23 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-05 16:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:11:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 16:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:25:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-05 16:25:46 --> 404 Page Not Found: 403shtml/wp-login.php
ERROR - 2025-02-05 16:25:46 --> 404 Page Not Found: 403shtml/wp-admin
ERROR - 2025-02-05 16:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:32:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 16:39:36 --> Could not find the language line "Home"
ERROR - 2025-02-05 16:41:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 16:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 16:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 17:11:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 17:19:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 17:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 17:34:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 17:39:48 --> Could not find the language line "Home"
ERROR - 2025-02-05 17:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 17:40:30 --> Could not find the language line "Home"
ERROR - 2025-02-05 17:40:32 --> Could not find the language line "Home"
ERROR - 2025-02-05 17:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 17:41:59 --> Could not find the language line "Home"
ERROR - 2025-02-05 18:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 18:11:59 --> Could not find the language line "Home"
ERROR - 2025-02-05 18:24:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 18:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 18:32:46 --> Could not find the language line "Home"
ERROR - 2025-02-05 18:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 18:35:44 --> Could not find the language line "Home"
ERROR - 2025-02-05 18:42:00 --> Could not find the language line "Home"
ERROR - 2025-02-05 18:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 18:44:52 --> 404 Page Not Found: Storage/settings
ERROR - 2025-02-05 18:44:53 --> Could not find the language line "Home"
ERROR - 2025-02-05 18:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 18:54:54 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:07:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:10:47 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 19:12:00 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:12:27 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:15:46 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 19:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 19:28:05 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:28:17 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:28:27 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2025-02-05 19:28:27 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2025-02-05 19:28:27 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2025-02-05 19:28:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2025-02-05 19:34:43 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:42:00 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:44:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 19:44:51 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:04:11 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:04:17 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:04:17 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:12:00 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:14:55 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-05 20:20:39 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 20:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 20:40:56 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 20:42:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 20:44:31 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-05 20:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 21:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 21:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 21:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 21:12:02 --> Could not find the language line "Home"
ERROR - 2025-02-05 21:15:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 21:15:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-05 21:18:09 --> Could not find the language line "Home"
ERROR - 2025-02-05 21:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 21:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 21:42:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:01:35 --> 404 Page Not Found: Env/index
ERROR - 2025-02-05 22:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:12:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:16:15 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:16:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-05 22:16:52 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:17:01 --> Could not find the language line "Socks"
ERROR - 2025-02-05 22:17:50 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:18:13 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:25:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-05 22:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:26:49 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:26:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:06 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:24 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:32 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:38 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:38 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:27:44 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:47 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:56 --> Could not find the language line "Clothing"
ERROR - 2025-02-05 22:27:58 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:28:32 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:28:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-05 22:29:06 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:29:16 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:42:01 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-05 22:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 22:47:53 --> Could not find the language line "Home"
ERROR - 2025-02-05 22:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:12:07 --> Could not find the language line "Home"
ERROR - 2025-02-05 23:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:42:03 --> Could not find the language line "Home"
ERROR - 2025-02-05 23:44:48 --> Could not find the language line "Home"
ERROR - 2025-02-05 23:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-05 23:51:22 --> 404 Page Not Found: Well-known/traffic-advice
