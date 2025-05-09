<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-17 00:13:25 --> Could not find the language line "Home"
ERROR - 2024-07-17 00:16:15 --> Could not find the language line "Home"
ERROR - 2024-07-17 00:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 00:46:15 --> Could not find the language line "Home"
ERROR - 2024-07-17 01:16:15 --> Could not find the language line "Home"
ERROR - 2024-07-17 01:23:07 --> Could not find the language line "Other"
ERROR - 2024-07-17 01:46:17 --> Could not find the language line "Home"
ERROR - 2024-07-17 02:16:17 --> Could not find the language line "Home"
ERROR - 2024-07-17 02:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 02:46:17 --> Could not find the language line "Home"
ERROR - 2024-07-17 02:49:20 --> Could not find the language line "Socks"
ERROR - 2024-07-17 02:49:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 02:49:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 02:49:20 --> Could not find the language line "Socks"
ERROR - 2024-07-17 02:49:20 --> Could not find the language line "assets"
ERROR - 2024-07-17 02:49:21 --> Could not find the language line "assets"
ERROR - 2024-07-17 02:49:21 --> Could not find the language line "assets"
ERROR - 2024-07-17 02:49:21 --> Could not find the language line "assets"
ERROR - 2024-07-17 02:49:21 --> Could not find the language line "assets"
ERROR - 2024-07-17 02:49:21 --> Could not find the language line "assets"
ERROR - 2024-07-17 03:16:24 --> Could not find the language line "Home"
ERROR - 2024-07-17 03:46:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 03:56:49 --> Could not find the language line "Home"
ERROR - 2024-07-17 04:16:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 04:46:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 04:55:09 --> Could not find the language line "Home"
ERROR - 2024-07-17 04:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 05:13:44 --> Could not find the language line "Socks"
ERROR - 2024-07-17 05:16:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 05:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 05:25:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-17 05:29:43 --> Could not find the language line "Home"
ERROR - 2024-07-17 05:29:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 05:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 05:46:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 06:13:26 --> Could not find the language line "Home"
ERROR - 2024-07-17 06:13:57 --> Could not find the language line "Home"
ERROR - 2024-07-17 06:14:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 06:16:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 06:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 06:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 06:46:19 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:07:53 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:08:06 --> Could not find the language line "Bracelets"
ERROR - 2024-07-17 07:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 07:14:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-17 07:16:19 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:20:11 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 07:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 07:39:26 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:39:51 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:40:01 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:40:11 --> Could not find the language line "Home"
ERROR - 2024-07-17 07:46:20 --> Could not find the language line "Home"
ERROR - 2024-07-17 08:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:16:20 --> Could not find the language line "Home"
ERROR - 2024-07-17 08:21:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 08:23:27 --> Could not find the language line "Home"
ERROR - 2024-07-17 08:28:43 --> Could not find the language line "Home"
ERROR - 2024-07-17 08:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:46:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-17 08:46:21 --> Could not find the language line "Home"
ERROR - 2024-07-17 08:46:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-17 08:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 08:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:16:21 --> Could not find the language line "Home"
ERROR - 2024-07-17 09:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:23:24 --> Could not find the language line "Home"
ERROR - 2024-07-17 09:23:24 --> Could not find the language line "Home"
ERROR - 2024-07-17 09:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:35:47 --> Could not find the language line "Home"
ERROR - 2024-07-17 09:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:42:02 --> Could not find the language line "Other"
ERROR - 2024-07-17 09:46:22 --> Could not find the language line "Home"
ERROR - 2024-07-17 09:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 09:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:11:52 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:16:21 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:18:38 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:18:56 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:26:37 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:35:20 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:43:17 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:46:22 --> Could not find the language line "Home"
ERROR - 2024-07-17 10:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 10:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 11:05:28 --> Could not find the language line "Home"
ERROR - 2024-07-17 11:16:22 --> Could not find the language line "Home"
ERROR - 2024-07-17 11:23:17 --> Could not find the language line "Home"
ERROR - 2024-07-17 11:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 11:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 11:42:32 --> Could not find the language line "Home"
ERROR - 2024-07-17 11:46:23 --> Could not find the language line "Home"
ERROR - 2024-07-17 11:55:33 --> 404 Page Not Found: Wp-infophp/index
ERROR - 2024-07-17 11:55:33 --> 404 Page Not Found: Alfanewphp7/index
ERROR - 2024-07-17 12:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:16:23 --> Could not find the language line "Home"
ERROR - 2024-07-17 12:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:20:39 --> Could not find the language line "Home"
ERROR - 2024-07-17 12:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:36:31 --> Could not find the language line "Home"
ERROR - 2024-07-17 12:39:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 12:39:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-17 12:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:44:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 12:44:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-17 12:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:45:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 12:45:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 12:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:45:36 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 12:45:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 12:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 12:46:23 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:02:48 --> Could not find the language line "Other"
ERROR - 2024-07-17 13:02:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 13:02:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 13:02:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 13:02:50 --> Could not find the language line "Perfume"
ERROR - 2024-07-17 13:02:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 13:02:52 --> Could not find the language line "Other"
ERROR - 2024-07-17 13:02:54 --> Could not find the language line "Other"
ERROR - 2024-07-17 13:02:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-17 13:02:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-17 13:03:11 --> Could not find the language line "Bracelets"
ERROR - 2024-07-17 13:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:08:15 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:08:53 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:08:59 --> Could not find the language line "Socks"
ERROR - 2024-07-17 13:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:16:24 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:22:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 13:22:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 13:22:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 13:22:13 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:26:28 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:46:24 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:54:11 --> Could not find the language line "Home"
ERROR - 2024-07-17 13:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 13:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:08:34 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:15:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 14:15:49 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:16:24 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:16:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 14:17:11 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:31:56 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 14:46:25 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:48:54 --> Could not find the language line "Home"
ERROR - 2024-07-17 14:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:06:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:06:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:06:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:07:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:07:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-17 15:07:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:07:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:07:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:08:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:08:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:09:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:09:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:09:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:09:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:09:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-17 15:10:07 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:10:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:10:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:11:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:12:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:12:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 15:16:26 --> Could not find the language line "Home"
ERROR - 2024-07-17 15:22:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-17 15:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:33:17 --> Could not find the language line "Home"
ERROR - 2024-07-17 15:46:25 --> Could not find the language line "Home"
ERROR - 2024-07-17 15:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 15:58:18 --> Could not find the language line "Home"
ERROR - 2024-07-17 16:13:31 --> Could not find the language line "Home"
ERROR - 2024-07-17 16:14:28 --> Could not find the language line "Home"
ERROR - 2024-07-17 16:16:25 --> Could not find the language line "Home"
ERROR - 2024-07-17 16:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 16:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 16:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 16:46:27 --> Could not find the language line "Home"
ERROR - 2024-07-17 17:16:26 --> Could not find the language line "Home"
ERROR - 2024-07-17 17:22:23 --> Could not find the language line "Home"
ERROR - 2024-07-17 17:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 17:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 17:42:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 17:42:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-17 17:42:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 17:42:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 17:42:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-17 17:42:26 --> Could not find the language line "Home"
ERROR - 2024-07-17 17:46:27 --> Could not find the language line "Home"
ERROR - 2024-07-17 17:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 17:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 17:51:45 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-17 17:53:47 --> Could not find the language line "Other"
ERROR - 2024-07-17 17:57:53 --> Could not find the language line "Socks"
ERROR - 2024-07-17 18:16:27 --> Could not find the language line "Home"
ERROR - 2024-07-17 18:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 18:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 18:40:42 --> Could not find the language line "Bracelets"
ERROR - 2024-07-17 18:41:23 --> Could not find the language line "Bracelets"
ERROR - 2024-07-17 18:46:28 --> Could not find the language line "Home"
ERROR - 2024-07-17 18:47:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 18:47:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-17 18:47:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 18:47:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 18:48:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 18:48:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 18:52:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-17 18:52:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 18:53:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:07:12 --> Could not find the language line "Home"
ERROR - 2024-07-17 19:10:22 --> Could not find the language line "Home"
ERROR - 2024-07-17 19:16:28 --> Could not find the language line "Home"
ERROR - 2024-07-17 19:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 19:43:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:44:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:45:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:45:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:46:29 --> Could not find the language line "Home"
ERROR - 2024-07-17 19:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 19:47:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 19:48:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 19:49:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 19:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 20:16:28 --> Could not find the language line "Home"
ERROR - 2024-07-17 20:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 20:46:29 --> Could not find the language line "Home"
ERROR - 2024-07-17 20:55:06 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:55:13 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:55:13 --> Could not find the language line "assets"
ERROR - 2024-07-17 20:55:16 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:56:27 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:56:54 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:57:11 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:57:25 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:57:34 --> Could not find the language line "Socks"
ERROR - 2024-07-17 20:57:49 --> Could not find the language line "Socks"
ERROR - 2024-07-17 21:01:15 --> Could not find the language line "Home"
ERROR - 2024-07-17 21:16:29 --> Could not find the language line "Home"
ERROR - 2024-07-17 21:17:44 --> Could not find the language line "Home"
ERROR - 2024-07-17 21:18:00 --> Could not find the language line "Home"
ERROR - 2024-07-17 21:23:25 --> Could not find the language line "Home"
ERROR - 2024-07-17 21:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 21:39:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-17 21:46:32 --> Could not find the language line "Home"
ERROR - 2024-07-17 21:55:35 --> Could not find the language line "Other"
ERROR - 2024-07-17 22:00:42 --> Could not find the language line "Home"
ERROR - 2024-07-17 22:16:31 --> Could not find the language line "Home"
ERROR - 2024-07-17 22:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 22:34:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-17 22:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 22:46:30 --> Could not find the language line "Home"
ERROR - 2024-07-17 23:16:31 --> Could not find the language line "Home"
ERROR - 2024-07-17 23:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-17 23:43:30 --> Could not find the language line "Home"
ERROR - 2024-07-17 23:43:36 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-07-17 23:45:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-17 23:46:34 --> Could not find the language line "Home"
ERROR - 2024-07-17 23:59:38 --> Could not find the language line "Home"
