<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-27 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-27 00:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 00:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-27 00:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 00:31:59 --> Could not find the language line "Home"
ERROR - 2023-03-27 00:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 00:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 00:33:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 00:33:25 --> Could not find the language line "Home"
ERROR - 2023-03-27 00:52:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 00:52:31 --> Could not find the language line "Home"
ERROR - 2023-03-27 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 01:27:35 --> Could not find the language line "Home"
ERROR - 2023-03-27 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 01:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 01:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-27 01:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 02:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 02:24:20 --> Could not find the language line "Home"
ERROR - 2023-03-27 02:24:25 --> Could not find the language line "Home"
ERROR - 2023-03-27 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 02:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 02:36:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 02:36:20 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-27 02:36:20 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-27 02:36:20 --> Could not find the language line "Home"
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-03-27 02:36:21 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-27 02:36:22 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-27 02:36:23 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-27 02:48:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 03:00:02 --> Could not find the language line "Home"
ERROR - 2023-03-27 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-27 03:15:09 --> Could not find the language line "Home"
ERROR - 2023-03-27 03:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 03:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 03:16:25 --> Could not find the language line "Home"
ERROR - 2023-03-27 03:26:45 --> Could not find the language line "Home"
ERROR - 2023-03-27 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 04:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 04:24:57 --> Could not find the language line "Home"
ERROR - 2023-03-27 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 04:43:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 05:22:28 --> Could not find the language line "Home"
ERROR - 2023-03-27 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 05:32:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-27 05:50:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 05:50:20 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-27 05:50:21 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-03-27 05:50:22 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-03-27 05:50:23 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-03-27 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 06:16:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:26:16 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 06:27:18 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 06:27:58 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:28:10 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 06:29:04 --> Could not find the language line "Socks"
ERROR - 2023-03-27 06:29:09 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:29:13 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 06:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:30:23 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:45:06 --> Could not find the language line "Home"
ERROR - 2023-03-27 06:45:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-27 06:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 06:49:52 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:00:20 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:09:31 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:10:00 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-03-27 07:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:15:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 07:15:29 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:40:00 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:40:01 --> Could not find the language line "Home"
ERROR - 2023-03-27 07:40:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-27 07:40:05 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-27 07:40:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-27 07:40:05 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-27 07:42:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-27 07:42:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-27 07:42:52 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-27 07:42:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-27 07:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 07:57:09 --> Could not find the language line "Home"
ERROR - 2023-03-27 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 08:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:08:31 --> Could not find the language line "Home"
ERROR - 2023-03-27 08:08:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 08:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:25:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 08:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 08:26:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 08:26:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 08:26:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 08:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 08:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:43:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 08:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:48:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 08:48:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 08:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:52:05 --> Could not find the language line "Home"
ERROR - 2023-03-27 08:55:50 --> Could not find the language line "Home"
ERROR - 2023-03-27 08:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 08:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:06:51 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:26:25 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:38:39 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:39:02 --> Could not find the language line "Perfume"
ERROR - 2023-03-27 09:39:09 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:41:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 09:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:53:23 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-27 09:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:55:30 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:55:50 --> Could not find the language line "Home"
ERROR - 2023-03-27 09:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 09:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:03:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 10:03:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 10:03:11 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-27 10:03:15 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-27 10:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:03:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 10:03:22 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-27 10:03:27 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-27 10:03:31 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-27 10:03:36 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-27 10:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:04:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:04:18 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:04:29 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:04:39 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:05:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-27 10:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:07:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:08:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-27 10:09:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:12:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 10:14:51 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:14:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-27 10:15:07 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:15:11 --> Could not find the language line "Perfume"
ERROR - 2023-03-27 10:15:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:15:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 10:15:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 10:15:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:15:39 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:15:55 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:16:06 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:16:10 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:17:16 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:17:18 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:17:19 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:17:20 --> Could not find the language line "Socks"
ERROR - 2023-03-27 10:17:22 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:17:25 --> Could not find the language line "Bracelets"
ERROR - 2023-03-27 10:17:38 --> Could not find the language line "Bracelets"
ERROR - 2023-03-27 10:17:45 --> Could not find the language line "Bracelets"
ERROR - 2023-03-27 10:17:48 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:18:03 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:19:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:19:58 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:21:35 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:27:51 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:30:27 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:30:41 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:31:03 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:31:10 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:40:04 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:42:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:43:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 10:43:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 10:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:44:53 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:45:09 --> Could not find the language line "Home"
ERROR - 2023-03-27 10:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 10:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 10:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-27 10:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 10:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-27 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-27 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-27 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-27 10:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 10:59:08 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:07:00 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:18:29 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:18:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 11:19:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 11:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:40:26 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:41:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 11:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 11:57:50 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:58:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:58:22 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:59:52 --> Could not find the language line "Home"
ERROR - 2023-03-27 11:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:00:04 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:02:45 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:03:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:03:58 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:37:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 12:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:42:44 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:43:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 12:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:43:16 --> Could not find the language line "Home"
ERROR - 2023-03-27 12:45:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 12:45:56 --> 404 Page Not Found: Storage/settings
ERROR - 2023-03-27 12:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 12:54:05 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:01:35 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:02:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-27 13:05:34 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 13:06:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 13:07:05 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:11:56 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:11:56 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:11:56 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:12:06 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:12:07 --> Could not find the language line "Bracelets"
ERROR - 2023-03-27 13:13:02 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:13:45 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:16:09 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:32:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:45:22 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:47:51 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:47:51 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:48:33 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:48:54 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:50:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 13:50:30 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:50:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 13:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 13:51:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 13:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 13:54:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 13:58:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 13:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:00:42 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:11:40 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:19:16 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:24:53 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:25:27 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:26:46 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:28:17 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:32:10 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:32:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 14:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:33:17 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:34:15 --> 404 Page Not Found: Admin/jQuery-File-Upload
ERROR - 2023-03-27 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:37:49 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:39:45 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:39:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 14:39:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 14:41:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 14:41:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 14:41:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 14:41:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 14:41:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 14:41:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 14:41:55 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:42:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:42:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:42:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:42:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:42:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:42:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 14:43:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 14:43:39 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:44:02 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:44:48 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:45:22 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:53:17 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:53:39 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:53:55 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:53:56 --> Could not find the language line "Home"
ERROR - 2023-03-27 14:54:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:13:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 15:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:25:08 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:25:59 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:35:30 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:35:40 --> Could not find the language line "Bracelets"
ERROR - 2023-03-27 15:35:59 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:36:39 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:36:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:37:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:37:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 15:37:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:38:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:38:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:38:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:38:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:39:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:39:08 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:39:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 15:39:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 15:39:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 15:39:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 15:40:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:51:59 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:56:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 15:56:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-27 15:56:25 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:56:48 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:58:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:58:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 15:58:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 15:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:05:29 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:06:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:06:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 16:14:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:14:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:14:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:14:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:14:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-27 16:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-27 16:18:04 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:35:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-27 16:35:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-27 16:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:37:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 16:39:33 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:40:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:40:47 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:41:31 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:41:59 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 16:42:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:42:46 --> Could not find the language line "Home"
ERROR - 2023-03-27 16:43:50 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:11:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:24:16 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:24:57 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:25:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:26:07 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:27:57 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:28:06 --> 404 Page Not Found: Home/accounting
ERROR - 2023-03-27 17:28:06 --> 404 Page Not Found: Home/accounting
ERROR - 2023-03-27 17:28:07 --> 404 Page Not Found: Home/accounting
ERROR - 2023-03-27 17:28:07 --> 404 Page Not Found: Home/accounting
ERROR - 2023-03-27 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 17:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 17:48:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 18:10:30 --> Could not find the language line "Home"
ERROR - 2023-03-27 18:17:28 --> Could not find the language line "Home"
ERROR - 2023-03-27 18:17:48 --> Could not find the language line "Home"
ERROR - 2023-03-27 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 18:38:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 18:38:46 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-03-27 18:38:46 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-03-27 18:38:48 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:17:21 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:17:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 19:18:32 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:26:28 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:43:03 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 19:44:20 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 19:58:42 --> Could not find the language line "Home"
ERROR - 2023-03-27 19:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 19:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:04:08 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:06:17 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:08:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:08:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-27 20:09:27 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:16:52 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:29:45 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:30:04 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 20:32:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:06:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 21:06:59 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:11:22 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:13:51 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:14:41 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:15:13 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:22:24 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:23:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:40:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 21:46:15 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:53:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:55:01 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 21:57:52 --> Could not find the language line "Home"
ERROR - 2023-03-27 21:58:05 --> 404 Page Not Found: Assets/images
ERROR - 2023-03-27 21:58:05 --> 404 Page Not Found: Assets/images
ERROR - 2023-03-27 21:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-27 22:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 22:16:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 22:18:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-27 22:26:05 --> Could not find the language line "Home"
ERROR - 2023-03-27 22:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-27 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 22:30:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 22:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-27 23:08:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 23:11:19 --> Could not find the language line "Home"
ERROR - 2023-03-27 23:22:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-27 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-03-27 23:29:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-27 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-27 23:47:18 --> 404 Page Not Found: Mysqlsql/index
ERROR - 2023-03-27 23:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
