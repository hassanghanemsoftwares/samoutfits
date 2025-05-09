<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-19 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-19 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-19 00:48:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 01:09:43 --> Could not find the language line "Home"
ERROR - 2023-05-19 01:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 01:49:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 02:13:25 --> Could not find the language line "Crocs"
ERROR - 2023-05-19 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 02:33:50 --> Could not find the language line "Home"
ERROR - 2023-05-19 02:36:48 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:06:27 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:08:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 03:26:51 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:26:51 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:26:51 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 03:27:30 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:35:00 --> Could not find the language line "Home"
ERROR - 2023-05-19 03:44:15 --> Could not find the language line "Home"
ERROR - 2023-05-19 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 04:04:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 04:09:23 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-19 04:20:17 --> Could not find the language line "Home"
ERROR - 2023-05-19 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:05:19 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:11:17 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:12:05 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 05:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 05:19:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 05:22:46 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:22:57 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 05:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 06:00:18 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:08:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 06:09:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:09:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:11:49 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:20:41 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:25:18 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:33:54 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:33:55 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:36:07 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:38:19 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:46:53 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 06:54:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 06:54:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 06:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 06:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 06:58:02 --> Could not find the language line "Home"
ERROR - 2023-05-19 06:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 06:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 06:59:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 06:59:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-19 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 07:00:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:00:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:03:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:04:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:15:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 07:20:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:21:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:21:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 07:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:31:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-19 07:34:05 --> Could not find the language line "Home"
ERROR - 2023-05-19 07:42:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:43:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:50:17 --> Could not find the language line "Home"
ERROR - 2023-05-19 07:51:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:51:16 --> Could not find the language line "Home"
ERROR - 2023-05-19 07:52:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:52:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:53:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 07:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 07:58:29 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:02:27 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:06:34 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:06:35 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:43:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:44:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:45:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:45:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:45:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:45:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:45:35 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-19 08:45:35 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-19 08:45:35 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-19 08:45:36 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-19 08:45:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:46:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:46:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:47:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:47:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 08:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:50:25 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:51:05 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:56:07 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:56:47 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:57:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 08:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 08:59:35 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 09:10:56 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:10:56 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:10:56 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:10:56 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:10:56 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:10:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 09:11:02 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:11:06 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-19 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:35:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 09:37:39 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 09:44:28 --> Could not find the language line "Home"
ERROR - 2023-05-19 09:44:43 --> 404 Page Not Found: Assets/img
ERROR - 2023-05-19 09:44:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-19 09:44:59 --> 404 Page Not Found: Assets/mail
ERROR - 2023-05-19 09:45:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-19 09:48:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 09:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 09:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 09:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 09:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 09:54:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:07:36 --> Could not find the language line "Other"
ERROR - 2023-05-19 10:19:02 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:19:07 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:19:23 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 10:19:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 10:19:38 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:19:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 10:19:51 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:20:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 10:20:23 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:20:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 10:20:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 10:20:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-19 10:21:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 10:21:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 10:21:14 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:21:50 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:22:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:37:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-19 10:37:51 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-19 10:37:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-19 10:37:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-19 10:41:46 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:46:25 --> Could not find the language line "Home"
ERROR - 2023-05-19 10:54:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 11:02:49 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 11:19:31 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 11:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 11:21:18 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 11:22:03 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:22:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 11:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 11:22:29 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:22:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 11:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 11:22:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 11:22:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 11:22:57 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:23:23 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 11:24:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 11:45:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:02:28 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:13:54 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 12:14:54 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 12:15:59 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 12:18:22 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 12:20:24 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 12:22:36 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 12:32:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 12:44:07 --> Could not find the language line "Home"
ERROR - 2023-05-19 12:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-19 13:18:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 13:18:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 13:19:31 --> Could not find the language line "Home"
ERROR - 2023-05-19 13:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 13:21:36 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-19 13:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 13:23:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 13:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 13:24:17 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-19 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 13:46:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 13:47:55 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-19 13:57:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 14:01:43 --> Could not find the language line "Home"
ERROR - 2023-05-19 14:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:07:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 14:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:13:43 --> Could not find the language line "Home"
ERROR - 2023-05-19 14:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:23:23 --> Could not find the language line "Home"
ERROR - 2023-05-19 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-19 14:39:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 14:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:39:37 --> Could not find the language line "Home"
ERROR - 2023-05-19 14:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:45:12 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-19 14:45:12 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-19 14:45:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-19 14:45:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-19 14:45:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-19 14:45:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-19 14:45:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-19 14:45:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-19 14:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 14:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-19 15:16:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 15:16:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 15:16:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 15:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 15:36:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 15:37:06 --> Could not find the language line "Home"
ERROR - 2023-05-19 15:37:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-19 15:37:07 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-05-19 15:37:08 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-05-19 15:37:09 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-05-19 15:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:31:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 16:32:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:42:53 --> 404 Page Not Found: Assets/plugins
ERROR - 2023-05-19 16:45:01 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 16:50:49 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:54:09 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:54:41 --> Could not find the language line "Home"
ERROR - 2023-05-19 16:55:06 --> Could not find the language line "Perfume"
ERROR - 2023-05-19 16:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 16:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:00:32 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:31:37 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 17:33:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-19 17:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 17:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 17:33:52 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:33:53 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:33:57 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-19 17:33:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-19 17:33:57 --> Could not find the language line "Home"
ERROR - 2023-05-19 17:34:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-19 17:34:01 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-19 17:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 17:34:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 17:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 17:35:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 17:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 17:43:13 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 17:43:18 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 17:43:20 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 17:43:21 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 17:43:34 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 17:43:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-19 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:00:47 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 18:05:09 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:05:52 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:05:54 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:07:41 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:09:07 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:28:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:43:01 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:44:17 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 18:44:22 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 18:48:49 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:49:06 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 18:49:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:50:42 --> Could not find the language line "Home"
ERROR - 2023-05-19 18:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:51:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:52:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:53:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:53:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:54:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:54:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:55:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 18:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:57:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 18:58:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 18:58:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-19 18:59:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 19:00:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 19:01:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 19:01:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-19 19:01:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 19:01:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-19 19:01:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-19 19:01:57 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 19:03:21 --> Could not find the language line "Perfume"
ERROR - 2023-05-19 19:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 19:22:28 --> Could not find the language line "Socks"
ERROR - 2023-05-19 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 19:54:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 19:54:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 19:54:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 19:54:48 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-19 19:54:52 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-19 19:54:54 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-19 19:54:58 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-19 19:55:01 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-19 19:55:07 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-19 19:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:55:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:55:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:55:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:56:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:56:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:57:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:57:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:57:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:58:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:58:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 19:59:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:59:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:59:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 19:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:00:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:00:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:00:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 20:01:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:01:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:01:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:02:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:02:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-19 20:02:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-19 20:02:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 20:03:12 --> Could not find the language line "Other"
ERROR - 2023-05-19 20:03:23 --> Could not find the language line "Other"
ERROR - 2023-05-19 20:07:02 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:08:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 20:13:03 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 20:13:34 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:20:48 --> 404 Page Not Found: Git/config
ERROR - 2023-05-19 20:28:25 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 20:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:33:38 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 20:34:23 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:35:34 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-19 20:42:37 --> Could not find the language line "Home"
ERROR - 2023-05-19 20:42:37 --> Could not find the language line "Home"
ERROR - 2023-05-19 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-19 21:21:05 --> Could not find the language line "Home"
ERROR - 2023-05-19 21:24:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 21:26:05 --> Could not find the language line "Home"
ERROR - 2023-05-19 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-19 21:31:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:05:15 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:05:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:06:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:07:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:07:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:08:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 22:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-19 22:08:58 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:09:18 --> Could not find the language line "Socks"
ERROR - 2023-05-19 22:10:31 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:10:43 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 22:11:20 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 22:11:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 22:11:54 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:11:58 --> Could not find the language line "Socks"
ERROR - 2023-05-19 22:12:00 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:18:49 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:21:52 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:22:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:30:49 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:33:21 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:33:26 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:34:47 --> Could not find the language line "Home"
ERROR - 2023-05-19 22:37:00 --> 404 Page Not Found: 19837437_notfoundhtml/index
ERROR - 2023-05-19 22:40:49 --> Could not find the language line "Home"
ERROR - 2023-05-19 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-19 23:10:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 23:13:25 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-05-19 23:13:26 --> Could not find the language line "Home"
ERROR - 2023-05-19 23:13:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-19 23:16:38 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-05-19 23:20:26 --> Could not find the language line "Home"
ERROR - 2023-05-19 23:20:35 --> Could not find the language line "Other"
ERROR - 2023-05-19 23:20:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 23:20:40 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-19 23:20:48 --> Could not find the language line "Bracelets"
ERROR - 2023-05-19 23:20:54 --> Could not find the language line "Home"
ERROR - 2023-05-19 23:21:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 23:21:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 23:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 23:21:33 --> Could not find the language line "Other"
ERROR - 2023-05-19 23:21:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 23:21:39 --> Could not find the language line "Perfume"
ERROR - 2023-05-19 23:21:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-19 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-19 23:32:12 --> 404 Page Not Found: Robotstxt/index
