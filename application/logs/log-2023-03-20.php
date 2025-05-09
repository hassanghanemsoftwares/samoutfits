<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-20 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 00:11:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-20 00:20:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 00:38:07 --> Could not find the language line "Home"
ERROR - 2023-03-20 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-20 01:03:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 01:03:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 01:03:17 --> Could not find the language line "Home"
ERROR - 2023-03-20 01:03:42 --> Could not find the language line "Bracelets"
ERROR - 2023-03-20 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 01:30:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 01:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-20 01:36:10 --> Could not find the language line "Home"
ERROR - 2023-03-20 01:39:15 --> Could not find the language line "Home"
ERROR - 2023-03-20 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 02:34:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 02:43:18 --> Could not find the language line "Home"
ERROR - 2023-03-20 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 03:00:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 03:24:41 --> Could not find the language line "Home"
ERROR - 2023-03-20 03:25:56 --> Could not find the language line "Home"
ERROR - 2023-03-20 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 03:44:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-20 03:44:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-20 03:49:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-20 03:59:44 --> Could not find the language line "Home"
ERROR - 2023-03-20 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 04:35:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 04:59:02 --> Could not find the language line "Home"
ERROR - 2023-03-20 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 05:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 05:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 05:48:22 --> Could not find the language line "Home"
ERROR - 2023-03-20 05:51:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 05:54:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 06:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 06:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 06:14:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-20 06:18:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 06:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 06:20:21 --> Could not find the language line "Home"
ERROR - 2023-03-20 06:20:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-20 06:20:22 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-20 06:20:23 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-20 06:20:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-20 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 06:36:16 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-20 06:47:54 --> Could not find the language line "Home"
ERROR - 2023-03-20 06:54:02 --> Could not find the language line "Home"
ERROR - 2023-03-20 06:58:49 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:11:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-20 07:14:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 07:18:33 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:21:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:27:00 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:27:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:28:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 07:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:43:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 07:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:48:54 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:53:26 --> Could not find the language line "Home"
ERROR - 2023-03-20 07:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 07:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:04:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 08:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:22:15 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:23:04 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:37:47 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:39:27 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:42:04 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:42:25 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:45:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:47:41 --> Could not find the language line "Home"
ERROR - 2023-03-20 08:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 08:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 08:54:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 08:59:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 09:08:26 --> Could not find the language line "Home"
ERROR - 2023-03-20 09:12:49 --> Could not find the language line "Home"
ERROR - 2023-03-20 09:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:13:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 09:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 09:32:02 --> Could not find the language line "Home"
ERROR - 2023-03-20 09:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 09:45:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 09:46:25 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:08:46 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:09:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:09:51 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-20 10:09:51 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-20 10:09:52 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:09:52 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-20 10:09:52 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-20 10:09:52 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-20 10:09:52 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-20 10:09:52 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-20 10:09:52 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-20 10:09:53 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-20 10:09:54 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-20 10:09:54 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-20 10:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:15:44 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:22:32 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:22:42 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:25:48 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:40:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 10:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:40:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 10:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:43:40 --> Could not find the language line "Home"
ERROR - 2023-03-20 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:51:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 10:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 10:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 11:02:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 11:09:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 11:11:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 11:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:21:43 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:23:07 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:23:21 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:24:21 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:30:52 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:32:37 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:34:53 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:36:20 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:37:16 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:37:35 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:45:00 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:45:18 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:45:58 --> Could not find the language line "Socks"
ERROR - 2023-03-20 11:46:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:50:32 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:55:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:56:07 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:56:50 --> Could not find the language line "Home"
ERROR - 2023-03-20 11:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 11:58:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 12:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 12:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:12:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 12:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:18:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-20 12:18:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-20 12:18:01 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-20 12:18:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-20 12:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:19:05 --> Could not find the language line "Socks"
ERROR - 2023-03-20 12:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:20:19 --> Could not find the language line "Bracelets"
ERROR - 2023-03-20 12:20:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:20:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:24:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-20 12:24:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-20 12:25:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-20 12:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:25:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:26:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:26:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:26:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 12:26:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-20 12:27:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 12:30:53 --> Could not find the language line "Home"
ERROR - 2023-03-20 12:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:37:09 --> Could not find the language line "Home"
ERROR - 2023-03-20 12:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 12:49:37 --> Could not find the language line "Hair%20"
ERROR - 2023-03-20 12:49:44 --> Could not find the language line "Home"
ERROR - 2023-03-20 12:51:07 --> Could not find the language line "Hair%20"
ERROR - 2023-03-20 12:51:08 --> Could not find the language line "Hair%20"
ERROR - 2023-03-20 12:51:09 --> Could not find the language line "Hair%20"
ERROR - 2023-03-20 12:51:12 --> Could not find the language line "Hair%20"
ERROR - 2023-03-20 12:53:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 12:53:56 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:06:52 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:06:52 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:09:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 13:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:12:10 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:16:48 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:20:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 13:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:29:57 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:30:28 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:33:34 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:38:56 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:42:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:43:54 --> Could not find the language line "Home"
ERROR - 2023-03-20 13:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:47:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 13:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 13:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:05:33 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:05:35 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:05:36 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:05:36 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:05:37 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:08:24 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:15:25 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:15:37 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:15:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 14:15:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:16:03 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:16:37 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:16:59 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:17:41 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:18:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:18:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:18:18 --> Could not find the language line "Bracelets"
ERROR - 2023-03-20 14:18:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:18:54 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:18:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 14:19:10 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 14:19:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 14:20:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 14:20:09 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:22:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 14:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:29:32 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:29:35 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:29:49 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:31:15 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:32:28 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:33:37 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:48:02 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:49:49 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:50:10 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:50:40 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 14:53:09 --> Could not find the language line "Home"
ERROR - 2023-03-20 14:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-20 14:56:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-20 15:05:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:21:47 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:22:01 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:22:12 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-20 15:22:12 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-20 15:22:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-20 15:22:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-20 15:22:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-20 15:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-20 15:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:24:54 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:25:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:25:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:25:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:26:15 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:26:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-20 15:26:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-20 15:27:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:27:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-20 15:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-20 15:27:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-20 15:27:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-20 15:27:23 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-20 15:27:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-20 15:27:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-20 15:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-20 15:27:35 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:27:41 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:28:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:33:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 15:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 15:39:09 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:40:18 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:41:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:41:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 15:52:16 --> Could not find the language line "Home"
ERROR - 2023-03-20 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 16:14:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 16:19:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 16:51:36 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:01:39 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 17:02:03 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:15:05 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:55:29 --> Could not find the language line "Home"
ERROR - 2023-03-20 17:59:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:03:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:09:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:09:44 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:18:22 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 18:20:58 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 18:43:39 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:47:56 --> Could not find the language line "Home"
ERROR - 2023-03-20 18:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:02:33 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:03:01 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:11:08 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:13:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 19:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:13:58 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:17:24 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:17:29 --> Could not find the language line "Perfume"
ERROR - 2023-03-20 19:17:35 --> Could not find the language line "Perfume"
ERROR - 2023-03-20 19:17:37 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:17:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 19:17:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 19:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:18:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-20 19:18:23 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:18:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:18:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 19:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:19:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:19:38 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:19:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:19:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:31:38 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:31:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-20 19:41:54 --> Could not find the language line "Home"
ERROR - 2023-03-20 19:44:45 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:10:32 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:10:43 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:15:31 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:15:58 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:16:23 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:23:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 20:28:51 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:29:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:34:19 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:36:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:40:58 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:44:31 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 20:46:11 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-20 20:47:53 --> Could not find the language line "Home"
ERROR - 2023-03-20 20:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 21:01:39 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 21:03:27 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:25:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:33:18 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 21:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 21:47:46 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 21:48:53 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:58:08 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:58:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 21:58:10 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-20 21:58:19 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-03-20 21:58:20 --> Could not find the language line "Home"
ERROR - 2023-03-20 21:58:43 --> Could not find the language line "Home"
ERROR - 2023-03-20 22:00:18 --> Could not find the language line "Home"
ERROR - 2023-03-20 22:08:09 --> Could not find the language line "Home"
ERROR - 2023-03-20 22:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 22:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 22:29:39 --> 404 Page Not Found: Wp-ccphp/index
ERROR - 2023-03-20 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 22:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-20 22:44:20 --> 404 Page Not Found: Theme/assets
ERROR - 2023-03-20 22:47:29 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-20 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-20 23:01:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 23:03:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-20 23:11:41 --> Could not find the language line "Home"
ERROR - 2023-03-20 23:15:47 --> Could not find the language line "Home"
ERROR - 2023-03-20 23:18:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-20 23:18:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-20 23:30:17 --> Could not find the language line "Home"
ERROR - 2023-03-20 23:34:15 --> 404 Page Not Found: Phpminiadminphp/index
ERROR - 2023-03-20 23:39:30 --> Could not find the language line "Home"
ERROR - 2023-03-20 23:51:34 --> 404 Page Not Found: Robotstxt/index
