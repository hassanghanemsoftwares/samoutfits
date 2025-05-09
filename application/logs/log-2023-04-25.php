<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-25 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:06:50 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 00:08:24 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 00:08:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:09:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 00:09:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:10:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 00:10:18 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:12:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:17:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 00:17:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:17:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:32:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:32:55 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-04-25 00:32:55 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-04-25 00:32:56 --> Could not find the language line "Home"
ERROR - 2023-04-25 00:32:56 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-04-25 00:32:58 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-04-25 00:32:58 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-04-25 00:32:58 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-04-25 00:32:59 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-04-25 00:32:59 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-04-25 00:32:59 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-04-25 00:32:59 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-04-25 00:32:59 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-04-25 00:33:00 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-04-25 00:33:01 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-04-25 00:33:02 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-04-25 00:33:02 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-04-25 00:33:02 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-04-25 00:33:02 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-04-25 00:33:02 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-04-25 00:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 01:25:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 01:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 01:57:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 01:57:36 --> Could not find the language line "Home"
ERROR - 2023-04-25 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-25 02:02:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 02:26:53 --> Could not find the language line "Home"
ERROR - 2023-04-25 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 02:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 02:44:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 02:56:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:01:58 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:05:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:30:16 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:47:52 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:48:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:53:48 --> Could not find the language line "Home"
ERROR - 2023-04-25 03:58:39 --> Could not find the language line "Home"
ERROR - 2023-04-25 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 04:31:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 04:51:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 04:59:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-25 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:00:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-25 05:11:19 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:12:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:12:27 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:13:55 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:14:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 05:14:34 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:14:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:14:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 05:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 05:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 05:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:16:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 05:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 05:17:01 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:17:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:18:16 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:21:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:21:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:22:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:36:42 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:37:03 --> Could not find the language line "Home"
ERROR - 2023-04-25 05:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 05:59:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:01:27 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:01:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:02:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:03:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:03:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 06:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:20:21 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:26:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:29:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:35:55 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:50:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:52:28 --> Could not find the language line "Other"
ERROR - 2023-04-25 06:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:52:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 06:54:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:55:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 06:59:34 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:05:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:05:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 07:05:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 07:05:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 07:05:28 --> 404 Page Not Found: Home/accounts
ERROR - 2023-04-25 07:06:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:07:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:08:05 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:08:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:08:22 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:10:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:10:33 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:10:35 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:13:46 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-25 07:16:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:16:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:19:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:19:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:19:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 07:20:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:20:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:20:31 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 07:20:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:21:05 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:21:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:21:28 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:29:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:31:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:31:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 07:32:52 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:34:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:35:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:36:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:39:19 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:45:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:45:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:46:39 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:47:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:48:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:49:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:49:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:49:17 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:51:28 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 07:52:13 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 07:53:05 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 07:53:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 07:54:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 07:54:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 07:55:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:56:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 07:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 07:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:01:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:02:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 08:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:03:36 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:21:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 08:21:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 08:21:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:21:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:22:01 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 08:22:34 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:28:18 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:28:36 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:29:21 --> Could not find the language line "Perfume"
ERROR - 2023-04-25 08:29:24 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:29:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 08:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:29:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 08:29:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:30:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:30:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:32:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:42:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:42:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 08:43:35 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:44:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 08:44:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:45:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 08:45:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 08:46:24 --> Could not find the language line "Other"
ERROR - 2023-04-25 08:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 08:46:58 --> Could not find the language line "Other"
ERROR - 2023-04-25 08:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:50:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:50:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:50:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:51:01 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:57:15 --> Could not find the language line "Home"
ERROR - 2023-04-25 08:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 08:59:24 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:00:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:01:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:07:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:16:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:17:30 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:17:33 --> Could not find the language line "accounting"
ERROR - 2023-04-25 09:17:33 --> Could not find the language line "accounting"
ERROR - 2023-04-25 09:17:33 --> Could not find the language line "accounting"
ERROR - 2023-04-25 09:17:33 --> Could not find the language line "accounting"
ERROR - 2023-04-25 09:17:34 --> Could not find the language line "accounting"
ERROR - 2023-04-25 09:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:18:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:18:52 --> Could not find the language line "Other"
ERROR - 2023-04-25 09:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 09:19:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 09:21:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 09:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:30:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 09:30:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 09:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:38:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:38:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 09:38:42 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-04-25 09:38:52 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-04-25 09:38:53 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:38:53 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-04-25 09:38:54 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-04-25 09:38:54 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-04-25 09:39:22 --> Could not find the language line "Home"
ERROR - 2023-04-25 09:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 09:49:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 09:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 09:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:09:57 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:10:24 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:10:30 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:10:34 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:10:35 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:10:35 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:10:35 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:10:35 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:10:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:19:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:19:32 --> Could not find the language line "Other"
ERROR - 2023-04-25 10:19:35 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:20:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 10:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:21:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 10:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:24:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:24:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:24:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:24:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:24:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:25:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 10:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 10:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:28:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:28:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:38:56 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:38:57 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:38:57 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:38:57 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:38:57 --> Could not find the language line "accounting"
ERROR - 2023-04-25 10:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:39:56 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:43:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 10:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:44:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:44:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:45:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:45:33 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:47:05 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 10:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:52:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:53:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 10:53:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 10:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:14:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:18:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:20:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 11:20:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 11:20:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 11:21:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 11:21:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:22:33 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:29:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:40:25 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:40:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:40:58 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:45:57 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:46:09 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:56:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 11:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 11:58:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:06:35 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:06:56 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 12:07:14 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 12:07:25 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 12:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:11:55 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:15:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:15:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:15:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:31:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 12:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:33:21 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:34:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:34:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:34:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:34:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 12:34:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 12:34:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:34:22 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:34:27 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:35:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:35:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:37:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:38:01 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:38:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:38:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-25 12:38:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-25 12:38:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-25 12:38:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-25 12:38:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:38:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:43:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 12:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:44:18 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:46:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:47:22 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:47:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:48:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:49:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:50:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:51:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:54:37 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:54:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:54:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:55:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:55:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:55:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:55:59 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:56:19 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:56:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:56:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:56:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:56:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:57:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:57:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:57:25 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:58:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:58:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:58:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:58:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 12:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 12:59:52 --> Could not find the language line "Home"
ERROR - 2023-04-25 12:59:58 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:00:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:00:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:00:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:01:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:01:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:02:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:08:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:09:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 13:09:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 13:09:56 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-25 13:10:03 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-25 13:10:04 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:10:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 13:10:09 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-25 13:10:14 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-25 13:10:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-25 13:10:26 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-25 13:10:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 13:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:11:07 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:11:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:11:43 --> Could not find the language line "Perfume"
ERROR - 2023-04-25 13:11:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-25 13:14:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:14:55 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:16:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:18:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:19:27 --> Could not find the language line "Other"
ERROR - 2023-04-25 13:19:33 --> Could not find the language line "Other"
ERROR - 2023-04-25 13:21:49 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:25:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:25:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 13:25:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 13:26:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:26:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:26:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:26:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:27:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:27:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 13:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:30:57 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:32:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 13:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:35:31 --> 404 Page Not Found: Wp-22php/index
ERROR - 2023-04-25 13:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:38:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:39:16 --> 404 Page Not Found: Wp-22php/index
ERROR - 2023-04-25 13:41:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 13:41:27 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:42:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 13:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:43:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:46:52 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:46:53 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:47:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 13:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:49:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 13:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:53:56 --> Could not find the language line "Home"
ERROR - 2023-04-25 13:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 13:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:02:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:02:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:04:58 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:06:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:06:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:07:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:07:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:08:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:08:28 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:12:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:12:57 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:18:07 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:23:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:23:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:25:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:41:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 14:41:06 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:45:12 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-25 14:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:50:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 14:50:03 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:50:28 --> Could not find the language line "Socks"
ERROR - 2023-04-25 14:50:52 --> Could not find the language line "Socks"
ERROR - 2023-04-25 14:50:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:52:46 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:52:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:53:44 --> Could not find the language line "Socks"
ERROR - 2023-04-25 14:53:59 --> Could not find the language line "Socks"
ERROR - 2023-04-25 14:54:07 --> Could not find the language line "Socks"
ERROR - 2023-04-25 14:56:50 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 14:59:15 --> Could not find the language line "Home"
ERROR - 2023-04-25 14:59:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:59:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 14:59:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:01:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:02:00 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:05:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:06:16 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:06:31 --> Could not find the language line "Socks"
ERROR - 2023-04-25 15:06:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:07:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:07:25 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:07:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:07:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:09:42 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:13:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:13:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:13:52 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:14:36 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:14:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-25 15:14:46 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 15:15:09 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:15:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:28:16 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:29:25 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:31:50 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:31:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:32:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:33:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:33:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:35:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:35:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:36:22 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:36:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:36:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 15:41:33 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:46:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:52:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:53:15 --> Could not find the language line "Home"
ERROR - 2023-04-25 15:53:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:54:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 15:54:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:55:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:55:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:55:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-25 15:56:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:56:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 15:56:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:03:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:03:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 16:08:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:09:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:09:47 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:10:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:10:42 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:11:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:11:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:24:08 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:25:15 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 16:25:57 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:26:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 16:27:30 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:27:56 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:28:00 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:28:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 16:28:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 16:29:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 16:29:09 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:29:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 16:29:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 16:29:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:29:47 --> Could not find the language line "Perfume"
ERROR - 2023-04-25 16:29:53 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:29:57 --> Could not find the language line "Socks"
ERROR - 2023-04-25 16:30:02 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:30:03 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:30:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:30:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:30:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:30:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:31:19 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:31:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:31:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:31:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:31:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:32:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:32:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:32:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:32:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:33:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:33:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:33:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:33:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:33:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:33:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:34:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:34:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:35:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:35:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:35:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:35:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:35:19 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:36:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:36:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:36:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:36:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:36:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:36:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-25 16:36:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:38:03 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:38:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 16:38:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:40:25 --> Could not find the language line "Home"
ERROR - 2023-04-25 16:44:58 --> Could not find the language line "Disclaimer"
ERROR - 2023-04-25 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:02:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:10:32 --> Could not find the language line "Perfume"
ERROR - 2023-04-25 17:10:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-25 17:11:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:13:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:23:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:29:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:32:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:33:33 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:33:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:37:31 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:37:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-25 17:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:38:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:38:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 17:39:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:39:28 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 17:56:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 17:58:57 --> Could not find the language line "Home"
ERROR - 2023-04-25 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 18:09:12 --> Could not find the language line "Home"
ERROR - 2023-04-25 18:16:30 --> Could not find the language line "Home"
ERROR - 2023-04-25 18:22:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 18:22:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 18:22:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-25 18:22:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-25 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:03:34 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:04:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:04:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:04:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-25 19:04:19 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:04:36 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:06:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:08:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:08:29 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:09:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:09:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:10:02 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:16:30 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:25:07 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:26:43 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:27:52 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:30:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:30:53 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:31:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:31:13 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:32:10 --> Could not find the language line "Perfume"
ERROR - 2023-04-25 19:32:18 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:32:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:43:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 19:43:58 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:52:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:55:39 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:55:49 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:55:56 --> Could not find the language line "Perfume"
ERROR - 2023-04-25 19:56:02 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:56:23 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:56:51 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:56:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:57:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 19:57:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:57:25 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:57:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:58:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:58:35 --> Could not find the language line "Home"
ERROR - 2023-04-25 19:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:58:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:59:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 19:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 19:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 20:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:00:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:05:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 20:06:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:06:21 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:06:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:06:41 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:06:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 20:07:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 20:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:07:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-25 20:07:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:07:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:08:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:08:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:10:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:10:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:10:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:10:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-25 20:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:32:21 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:34:45 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 20:57:15 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:57:22 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:58:06 --> Could not find the language line "Bracelets"
ERROR - 2023-04-25 20:58:20 --> Could not find the language line "Home"
ERROR - 2023-04-25 20:58:54 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:12:50 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 21:17:01 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 21:28:44 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 21:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 21:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-25 21:47:26 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:57:32 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:57:34 --> Could not find the language line "Home"
ERROR - 2023-04-25 21:57:40 --> Could not find the language line "Home"
ERROR - 2023-04-25 22:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:05:53 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:06:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:07:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:13:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:16:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:22:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:27:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 22:30:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 23:00:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 23:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-04-25 23:39:50 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
