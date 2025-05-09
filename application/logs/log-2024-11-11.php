<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-11 00:13:34 --> Could not find the language line "Home"
ERROR - 2024-11-11 00:19:54 --> Could not find the language line "Home"
ERROR - 2024-11-11 00:49:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:03:49 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:06:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:06:29 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:06:35 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:06:35 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:08:14 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:08:20 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:10:10 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:13:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:15:10 --> 404 Page Not Found: Assets/images
ERROR - 2024-11-11 01:15:10 --> 404 Page Not Found: Assets/images
ERROR - 2024-11-11 01:15:15 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:15:25 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:15:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:16:05 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:16:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:16:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:16:36 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:16:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:16:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:16:54 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:17:12 --> Could not find the language line "Other"
ERROR - 2024-11-11 01:17:18 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:17:32 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:18:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:18:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 01:18:30 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:19:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 01:25:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-11 01:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 01:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 01:49:56 --> Could not find the language line "Home"
ERROR - 2024-11-11 02:19:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 02:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 02:49:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 02:53:18 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 02:53:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 02:54:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 02:54:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 03:19:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 03:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 03:49:57 --> Could not find the language line "Home"
ERROR - 2024-11-11 03:56:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 03:57:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 03:57:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 03:58:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 04:15:59 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-11 04:15:59 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:15:59 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:17:13 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:19:56 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:20:08 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 04:38:01 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:41:15 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:44:33 --> Could not find the language line "Home"
ERROR - 2024-11-11 04:49:27 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 04:49:56 --> Could not find the language line "Home"
ERROR - 2024-11-11 05:07:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-11 05:14:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-11 05:15:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 05:19:56 --> Could not find the language line "Home"
ERROR - 2024-11-11 05:49:56 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:09:45 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:09:48 --> Could not find the language line "Other"
ERROR - 2024-11-11 06:16:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:17:22 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:17:24 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:19:56 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 06:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 06:35:02 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-11 06:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 06:49:57 --> Could not find the language line "Home"
ERROR - 2024-11-11 06:59:01 --> Could not find the language line "Bracelets"
ERROR - 2024-11-11 06:59:01 --> Could not find the language line "Bracelets"
ERROR - 2024-11-11 07:12:41 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-11 07:12:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 07:12:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 07:16:09 --> Could not find the language line "Home"
ERROR - 2024-11-11 07:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 07:19:57 --> Could not find the language line "Home"
ERROR - 2024-11-11 07:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 07:49:57 --> Could not find the language line "Home"
ERROR - 2024-11-11 07:54:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 07:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:11:51 --> Could not find the language line "Home"
ERROR - 2024-11-11 08:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:19:58 --> Could not find the language line "Home"
ERROR - 2024-11-11 08:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:32:50 --> Could not find the language line "Home"
ERROR - 2024-11-11 08:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 08:45:18 --> Could not find the language line "Home"
ERROR - 2024-11-11 08:49:58 --> Could not find the language line "Home"
ERROR - 2024-11-11 08:55:57 --> Could not find the language line "Home"
ERROR - 2024-11-11 09:02:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 09:03:07 --> Could not find the language line "Home"
ERROR - 2024-11-11 09:11:07 --> Could not find the language line "Home"
ERROR - 2024-11-11 09:19:58 --> Could not find the language line "Home"
ERROR - 2024-11-11 09:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:49:59 --> Could not find the language line "Home"
ERROR - 2024-11-11 09:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 09:57:30 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:03:19 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:04:38 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:05:22 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:09:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:15:09 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:15:25 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:19:59 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:22:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:22:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:22:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:22:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:22:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:22:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:23:30 --> Could not find the language line "Socks"
ERROR - 2024-11-11 10:23:42 --> Could not find the language line "Socks"
ERROR - 2024-11-11 10:23:43 --> Could not find the language line "assets"
ERROR - 2024-11-11 10:24:45 --> Could not find the language line "Other"
ERROR - 2024-11-11 10:24:51 --> Could not find the language line "Other"
ERROR - 2024-11-11 10:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:25:17 --> Could not find the language line "Other"
ERROR - 2024-11-11 10:26:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:31:09 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:33:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:36:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:37:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:37:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:38:18 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:38:19 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-11 10:38:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:38:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:39:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:40:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:40:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-11 10:40:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:40:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-11 10:42:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:43:12 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:43:15 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:47:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 10:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:49:59 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:50:08 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:51:34 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:53:21 --> Could not find the language line "Home"
ERROR - 2024-11-11 10:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 10:59:31 --> Could not find the language line "Other"
ERROR - 2024-11-11 11:00:01 --> Could not find the language line "Socks"
ERROR - 2024-11-11 11:00:33 --> Could not find the language line "Socks"
ERROR - 2024-11-11 11:00:56 --> Could not find the language line "Socks"
ERROR - 2024-11-11 11:01:16 --> Could not find the language line "Home"
ERROR - 2024-11-11 11:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 11:01:38 --> Could not find the language line "Socks"
ERROR - 2024-11-11 11:02:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 11:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 11:02:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 11:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 11:04:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 11:13:15 --> Could not find the language line "Home"
ERROR - 2024-11-11 11:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 11:20:00 --> Could not find the language line "Home"
ERROR - 2024-11-11 11:22:47 --> Could not find the language line "Home"
ERROR - 2024-11-11 11:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 11:30:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-11 11:50:00 --> Could not find the language line "Home"
ERROR - 2024-11-11 11:54:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 12:00:07 --> Could not find the language line "Other"
ERROR - 2024-11-11 12:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 12:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 12:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 12:13:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 12:20:01 --> Could not find the language line "Home"
ERROR - 2024-11-11 12:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 12:46:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 12:50:00 --> Could not find the language line "Home"
ERROR - 2024-11-11 12:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 12:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 13:06:31 --> 404 Page Not Found: Storage/settings
ERROR - 2024-11-11 13:07:30 --> Could not find the language line "Home"
ERROR - 2024-11-11 13:16:32 --> Could not find the language line "Home"
ERROR - 2024-11-11 13:17:29 --> Could not find the language line "Home"
ERROR - 2024-11-11 13:20:00 --> Could not find the language line "Home"
ERROR - 2024-11-11 13:24:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-11 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 13:41:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 13:47:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 13:50:01 --> Could not find the language line "Home"
ERROR - 2024-11-11 14:20:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 14:41:46 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-11 14:50:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 14:53:29 --> Could not find the language line "Home"
ERROR - 2024-11-11 14:54:53 --> Could not find the language line "Home"
ERROR - 2024-11-11 14:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 15:08:07 --> Could not find the language line "Other"
ERROR - 2024-11-11 15:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 15:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-11 15:20:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:23:09 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:24:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 15:24:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 15:25:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 15:33:49 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-11 15:33:49 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:33:49 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:34:13 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 15:34:34 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 15:35:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 15:36:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-11 15:46:21 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 15:50:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:50:12 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:50:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 15:57:49 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:00:07 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:11:41 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-11 16:11:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:11:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 16:20:02 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:26:19 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:26:38 --> Could not find the language line "Home"
ERROR - 2024-11-11 16:34:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 16:34:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 16:35:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 16:35:16 --> Could not find the language line "products"
ERROR - 2024-11-11 16:35:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-11 16:50:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 17:12:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 17:20:03 --> Could not find the language line "Home"
ERROR - 2024-11-11 17:24:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-11 17:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 17:32:41 --> Could not find the language line "Home"
ERROR - 2024-11-11 17:44:32 --> Could not find the language line "Home"
ERROR - 2024-11-11 17:50:03 --> Could not find the language line "Home"
ERROR - 2024-11-11 17:50:13 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:07:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 18:14:01 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:16:51 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:16:54 --> 404 Page Not Found: Home/accounts
ERROR - 2024-11-11 18:16:54 --> 404 Page Not Found: Home/home
ERROR - 2024-11-11 18:16:54 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-11 18:20:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 18:29:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 18:50:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:52:20 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:52:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 18:54:11 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 18:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 18:54:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 18:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 18:55:00 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:55:25 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 18:55:26 --> Could not find the language line "Clothing"
ERROR - 2024-11-11 18:55:26 --> Could not find the language line "Home"
ERROR - 2024-11-11 18:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 19:12:52 --> Could not find the language line "Home"
ERROR - 2024-11-11 19:20:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 19:20:23 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-11 19:20:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 19:20:23 --> Could not find the language line "Home"
ERROR - 2024-11-11 19:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 19:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-11 19:29:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 19:47:31 --> Could not find the language line "Home"
ERROR - 2024-11-11 19:50:05 --> Could not find the language line "Home"
ERROR - 2024-11-11 20:20:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 20:25:30 --> Could not find the language line "Home"
ERROR - 2024-11-11 20:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 20:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 20:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 20:41:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-11 20:41:55 --> Could not find the language line "Home"
ERROR - 2024-11-11 20:49:09 --> Could not find the language line "Home"
ERROR - 2024-11-11 20:50:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 20:56:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-11 21:12:04 --> Could not find the language line "Home"
ERROR - 2024-11-11 21:18:22 --> Could not find the language line "Home"
ERROR - 2024-11-11 21:20:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 21:21:52 --> Could not find the language line "Home"
ERROR - 2024-11-11 21:26:24 --> Could not find the language line "Home"
ERROR - 2024-11-11 21:27:40 --> Could not find the language line "Home"
ERROR - 2024-11-11 21:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 21:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 21:50:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 22:20:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 22:20:39 --> Could not find the language line "Bracelets"
ERROR - 2024-11-11 22:50:09 --> Could not find the language line "Home"
ERROR - 2024-11-11 22:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 22:54:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-11 23:09:16 --> Could not find the language line "Home"
ERROR - 2024-11-11 23:09:16 --> Could not find the language line "Home"
ERROR - 2024-11-11 23:16:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-11 23:20:10 --> Could not find the language line "Home"
ERROR - 2024-11-11 23:22:06 --> Could not find the language line "Home"
ERROR - 2024-11-11 23:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 23:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 23:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 23:50:08 --> Could not find the language line "Home"
ERROR - 2024-11-11 23:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-11 23:58:05 --> 404 Page Not Found: Env/index
