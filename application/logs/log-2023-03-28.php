<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-28 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:04:48 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 00:06:30 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:06:37 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:07:25 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:11:54 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:19:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 00:21:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 00:25:22 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:32:25 --> Could not find the language line "Home"
ERROR - 2023-03-28 00:32:50 --> 404 Page Not Found: Storage/settings
ERROR - 2023-03-28 00:46:57 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-28 00:48:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-28 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 01:14:07 --> Could not find the language line "Home"
ERROR - 2023-03-28 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 01:37:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 01:43:22 --> Could not find the language line "Home"
ERROR - 2023-03-28 01:43:44 --> Could not find the language line "Home"
ERROR - 2023-03-28 01:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 01:44:39 --> Could not find the language line "Home"
ERROR - 2023-03-28 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 02:14:40 --> Could not find the language line "Home"
ERROR - 2023-03-28 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 02:31:45 --> Could not find the language line "Home"
ERROR - 2023-03-28 02:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 03:03:16 --> Could not find the language line "Home"
ERROR - 2023-03-28 03:17:01 --> Could not find the language line "Home"
ERROR - 2023-03-28 03:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 03:54:17 --> Could not find the language line "Home"
ERROR - 2023-03-28 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 04:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 04:10:19 --> 404 Page Not Found: Env/index
ERROR - 2023-03-28 04:11:46 --> Could not find the language line "Home"
ERROR - 2023-03-28 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 04:41:02 --> Could not find the language line "Home"
ERROR - 2023-03-28 04:44:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 04:51:29 --> Could not find the language line "Home"
ERROR - 2023-03-28 04:59:21 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-28 05:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-28 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 05:51:48 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:05:19 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-28 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:32:28 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:39:55 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:39:57 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:57:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-28 06:58:26 --> Could not find the language line "Home"
ERROR - 2023-03-28 06:58:42 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:03:40 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:06:11 --> 404 Page Not Found: 1sql/index
ERROR - 2023-03-28 07:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-28 07:19:30 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:40:48 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:44:50 --> Could not find the language line "Home"
ERROR - 2023-03-28 07:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-28 07:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 07:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:03:58 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:05:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:31:03 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:34:32 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:34:49 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:35:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:35:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 08:35:24 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:35:35 --> Could not find the language line "Socks"
ERROR - 2023-03-28 08:35:51 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:35:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-28 08:36:06 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:36:09 --> Could not find the language line "Bracelets"
ERROR - 2023-03-28 08:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:36:43 --> Could not find the language line "Bracelets"
ERROR - 2023-03-28 08:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:38:28 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:39:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 08:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 08:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:43:10 --> Could not find the language line "Home"
ERROR - 2023-03-28 08:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 08:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:23:40 --> Could not find the language line "Socks"
ERROR - 2023-03-28 09:26:00 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:26:19 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:26:38 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:27:00 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:28:20 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:28:38 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:28:58 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:29:48 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:29:48 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:32:43 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:34:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 09:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:23 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:36:38 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:37:39 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:37:51 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:37:58 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:38:51 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:39:35 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:43:24 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:43:31 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:44:58 --> Could not find the language line "Home"
ERROR - 2023-03-28 09:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 09:59:06 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:02:44 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:04:10 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:10:55 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:18:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 10:18:59 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:20:49 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:22:33 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:23:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:26:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:27:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-28 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-28 10:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:44:45 --> Could not find the language line "0"
ERROR - 2023-03-28 10:46:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-28 10:46:53 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-28 10:46:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-28 10:46:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-28 10:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 10:59:38 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:12:47 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:26:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:26:59 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:27:39 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:28:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:28:44 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:45:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:45:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:46:43 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:46:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 11:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:47:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 11:47:16 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:47:24 --> Could not find the language line "Perfume"
ERROR - 2023-03-28 11:48:24 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:51:49 --> Could not find the language line "Home"
ERROR - 2023-03-28 11:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 11:59:37 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:12:22 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:12:51 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 12:13:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 12:13:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:13:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 12:17:25 --> Could not find the language line "Socks"
ERROR - 2023-03-28 12:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 12:19:53 --> 404 Page Not Found: Products/index
ERROR - 2023-03-28 12:26:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-28 12:27:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:50:56 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:51:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 12:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:01:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:01:39 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:02:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:03:07 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:04:02 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:28:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:30:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 13:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:31:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 13:31:51 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:31:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 13:31:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:36:31 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:46:42 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:46:58 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:49:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:50:24 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 13:52:06 --> Could not find the language line "Home"
ERROR - 2023-03-28 13:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:06:25 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:26 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:28 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:29 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:38 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:39 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:09:04 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:22:19 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:24:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:26:17 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:26:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 14:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:28:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 14:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:31:59 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 14:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:34:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:34:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 14:34:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 14:34:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 14:34:17 --> 404 Page Not Found: Home/home
ERROR - 2023-03-28 14:34:17 --> 404 Page Not Found: Home/accounts
ERROR - 2023-03-28 14:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:35:31 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:36:23 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:37:06 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:37:07 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:45:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 14:45:21 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:45:38 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:46:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 14:47:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:47:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:47:20 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:47:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-28 14:47:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-28 14:47:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-28 14:47:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-28 14:47:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 14:48:39 --> Could not find the language line "Home"
ERROR - 2023-03-28 14:55:44 --> Could not find the language line "Crocs"
ERROR - 2023-03-28 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 15:02:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 15:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:12:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 15:12:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 15:12:41 --> Could not find the language line "Home"
ERROR - 2023-03-28 15:13:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 15:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 15:40:20 --> Could not find the language line "Home"
ERROR - 2023-03-28 15:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 15:50:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 15:52:11 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:01:46 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:01:48 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-28 16:01:48 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-28 16:01:49 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-28 16:01:49 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-28 16:08:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 16:09:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-28 16:09:56 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:11:50 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:18:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:19:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 16:19:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 16:19:33 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 16:33:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 16:33:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 16:33:15 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:33:25 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:34:05 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:34:58 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 16:39:40 --> Could not find the language line "Home"
ERROR - 2023-03-28 16:58:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 17:36:07 --> Could not find the language line "Home"
ERROR - 2023-03-28 17:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:38:18 --> Could not find the language line "Home"
ERROR - 2023-03-28 17:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:41:25 --> Could not find the language line "Home"
ERROR - 2023-03-28 17:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 17:52:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 17:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-28 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:00:50 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:03:29 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:24:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 18:25:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 18:25:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 18:25:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 18:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 18:25:54 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:25:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 18:25:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 18:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:27:42 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:27:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 18:27:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 18:27:50 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:28:52 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:31:06 --> Could not find the language line "Perfume"
ERROR - 2023-03-28 18:31:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-28 18:31:31 --> Could not find the language line "Perfume"
ERROR - 2023-03-28 18:31:54 --> Could not find the language line "Perfume"
ERROR - 2023-03-28 18:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:32:07 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:44:04 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:44:54 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:46:43 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:56:18 --> Could not find the language line "Home"
ERROR - 2023-03-28 18:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 18:59:01 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 19:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 19:07:47 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:08:43 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:17:44 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 19:31:20 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:32:55 --> Could not find the language line "Home"
ERROR - 2023-03-28 19:34:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-28 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:05:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:05:50 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:05:50 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:06:45 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:07:54 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:08:45 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:09:19 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:09:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:09:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:10:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:10:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:11:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-28 20:11:27 --> Could not find the language line "Bracelets"
ERROR - 2023-03-28 20:12:22 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:14:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:14:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:14:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:14:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:14:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 20:14:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:14:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:15:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:15:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:15:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:15:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:15:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:15:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:16:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:16:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:16:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:16:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:17:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 20:18:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:18:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:18:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:18:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-28 20:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:32:30 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 20:51:18 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:57:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 20:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 21:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 21:07:15 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:25:07 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:27:27 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:27:28 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:29:49 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:35:49 --> Could not find the language line "Home"
ERROR - 2023-03-28 21:37:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-28 22:00:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:03:37 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:14:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:26:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:27:24 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:31:46 --> 404 Page Not Found: Assets/jQuery-File-Upload
ERROR - 2023-03-28 22:36:37 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 22:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 22:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 22:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 22:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 22:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 22:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 23:00:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:01:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:01:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:01:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:06:35 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:06:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:11:55 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:13:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:30:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:38:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-28 23:48:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:48:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-28 23:48:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
