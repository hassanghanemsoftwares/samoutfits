<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-11 00:00:27 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:08:45 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-11 00:18:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:23:27 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:30:24 --> Could not find the language line "Home"
ERROR - 2023-09-11 00:34:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 00:59:28 --> Could not find the language line "Home"
ERROR - 2023-09-11 01:00:26 --> Could not find the language line "Home"
ERROR - 2023-09-11 01:13:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 01:13:23 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-11 01:30:25 --> Could not find the language line "Home"
ERROR - 2023-09-11 01:58:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-11 02:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 02:30:27 --> Could not find the language line "Home"
ERROR - 2023-09-11 03:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 03:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 03:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 03:12:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-11 03:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 04:00:24 --> Could not find the language line "Home"
ERROR - 2023-09-11 04:01:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 04:25:22 --> Could not find the language line "Socks"
ERROR - 2023-09-11 04:29:09 --> Could not find the language line "Home"
ERROR - 2023-09-11 04:29:09 --> Could not find the language line "Home"
ERROR - 2023-09-11 04:30:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 04:35:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 04:56:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 04:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 04:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:03:03 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-09-11 05:03:04 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-11 05:03:04 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-11 05:03:05 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-09-11 05:08:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 05:15:52 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:22:49 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:24:35 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:30:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-11 05:30:23 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:36:34 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:37:09 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-11 05:37:09 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-11 05:37:10 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-11 05:37:10 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-11 05:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:39:34 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:42:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 05:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 05:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:00:03 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:01:03 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:02:38 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:04:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-11 06:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:15:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-11 06:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:18:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 06:18:53 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:18:54 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:21:44 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-11 06:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:31:45 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 06:34:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-11 06:51:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 06:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:00:24 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:09:10 --> Could not find the language line "assets"
ERROR - 2023-09-11 07:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:18:35 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:19:49 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:20:23 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:21:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 07:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:23:32 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:23:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 07:23:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 07:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:25:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 07:25:16 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 07:25:20 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:27:15 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 07:27:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:34:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-11 07:38:05 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:38:06 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:38:09 --> Could not find the language line "Home"
ERROR - 2023-09-11 07:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 07:53:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 07:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 08:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:14:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-11 08:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:21:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-11 08:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 08:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:34:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-11 08:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:53:13 --> Could not find the language line "Home"
ERROR - 2023-09-11 08:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 08:56:41 --> Could not find the language line "Home"
ERROR - 2023-09-11 08:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-11 08:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:00:43 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:11:36 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:12:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:14:11 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:17:28 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:21:11 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 09:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:30:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 09:34:50 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:39:02 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:39:16 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:39:26 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:43:59 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=78843257 &amp;text=6134%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-09-11 09:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 09:48:14 --> Could not find the language line "Home"
ERROR - 2023-09-11 09:57:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 09:57:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 09:57:07 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:00:23 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:13:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 10:13:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 10:13:12 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:18:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 10:18:25 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:18:33 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 10:53:50 --> Could not find the language line "Socks"
ERROR - 2023-09-11 10:56:56 --> Could not find the language line "Home"
ERROR - 2023-09-11 10:58:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-11 11:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:06:34 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 11:07:03 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:09:46 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:10:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:17:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-11 11:30:23 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:31:43 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:40:27 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 11:57:15 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:58:40 --> Could not find the language line "Home"
ERROR - 2023-09-11 11:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:10:37 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:18:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-11 12:21:49 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:21:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 12:21:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 12:21:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-11 12:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:22:33 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:22:38 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:23:02 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 12:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:24:38 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 12:24:49 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 12:24:49 --> Could not find the language line "assets"
ERROR - 2023-09-11 12:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:30:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:32:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 12:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:35:33 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 12:40:04 --> 404 Page Not Found: Js/file-uploader
ERROR - 2023-09-11 12:40:05 --> 404 Page Not Found: Assets/plugins
ERROR - 2023-09-11 12:40:05 --> 404 Page Not Found: Uploader/server
ERROR - 2023-09-11 12:40:06 --> 404 Page Not Found: Fileupload/server
ERROR - 2023-09-11 12:40:06 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-09-11 12:40:08 --> 404 Page Not Found: JQuery/server
ERROR - 2023-09-11 12:52:44 --> Could not find the language line "Home"
ERROR - 2023-09-11 12:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 13:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 13:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 13:09:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-11 13:30:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-11 13:30:20 --> Could not find the language line "Home"
ERROR - 2023-09-11 13:36:04 --> Could not find the language line "Home"
ERROR - 2023-09-11 13:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 13:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 13:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 13:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 14:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 14:00:25 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:26:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 14:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:34:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:40:08 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:47:15 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:55:11 --> Could not find the language line "Home"
ERROR - 2023-09-11 14:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 14:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 15:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 15:07:42 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 15:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 15:08:25 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 15:08:44 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 15:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 15:09:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 15:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 15:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 15:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 15:30:24 --> Could not find the language line "Home"
ERROR - 2023-09-11 15:50:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-11 15:55:40 --> Could not find the language line "Home"
ERROR - 2023-09-11 16:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-11 16:00:48 --> Could not find the language line "Home"
ERROR - 2023-09-11 16:01:46 --> Could not find the language line "Bracelets"
ERROR - 2023-09-11 16:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 16:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 16:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 16:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 16:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 16:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 16:56:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 17:00:23 --> Could not find the language line "Home"
ERROR - 2023-09-11 17:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 17:13:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 17:13:53 --> Could not find the language line "Home"
ERROR - 2023-09-11 17:17:16 --> Could not find the language line "Home"
ERROR - 2023-09-11 17:18:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 17:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 17:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 17:22:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 17:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 17:22:40 --> Could not find the language line "Home"
ERROR - 2023-09-11 17:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 17:37:57 --> Could not find the language line "Other"
ERROR - 2023-09-11 17:40:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-11 17:50:45 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:01:00 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:07:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 18:17:18 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:30:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:31:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 18:43:07 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:44:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 18:53:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 18:53:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 18:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 18:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 19:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 19:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 19:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 19:28:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 19:28:57 --> Could not find the language line "Home"
ERROR - 2023-09-11 19:30:23 --> Could not find the language line "Home"
ERROR - 2023-09-11 19:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 19:46:37 --> Could not find the language line "Home"
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-11 19:48:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:48:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-11 19:56:56 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:00:37 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:16:22 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:28:06 --> 404 Page Not Found: Admin/lib
ERROR - 2023-09-11 20:28:07 --> 404 Page Not Found: Lib/filemanager
ERROR - 2023-09-11 20:28:08 --> 404 Page Not Found: Plugins/tinymce
ERROR - 2023-09-11 20:28:09 --> 404 Page Not Found: Tinymce/plugins
ERROR - 2023-09-11 20:28:09 --> 404 Page Not Found: Js/tinymce
ERROR - 2023-09-11 20:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:38:42 --> Could not find the language line "Home"
ERROR - 2023-09-11 20:39:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-11 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-11 21:11:43 --> Could not find the language line "Home"
ERROR - 2023-09-11 21:12:55 --> Could not find the language line "Home"
ERROR - 2023-09-11 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-11 21:31:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-11 21:46:04 --> Could not find the language line "Home"
ERROR - 2023-09-11 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-11 22:12:42 --> Could not find the language line "Home"
ERROR - 2023-09-11 22:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-11 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-11 22:43:11 --> Could not find the language line "Home"
ERROR - 2023-09-11 22:43:15 --> Could not find the language line "Home"
ERROR - 2023-09-11 22:54:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-11 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-11 23:23:08 --> Could not find the language line "Home"
ERROR - 2023-09-11 23:23:48 --> Could not find the language line "Home"
ERROR - 2023-09-11 23:24:27 --> Could not find the language line "Crocs"
ERROR - 2023-09-11 23:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-11 23:43:56 --> Could not find the language line "Home"
