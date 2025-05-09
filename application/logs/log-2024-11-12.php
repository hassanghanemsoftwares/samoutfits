<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-12 00:02:31 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-12 00:20:08 --> Could not find the language line "Home"
ERROR - 2024-11-12 00:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 00:50:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 01:20:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 01:24:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-12 01:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 01:33:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-12 01:50:10 --> Could not find the language line "Home"
ERROR - 2024-11-12 01:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 01:58:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 02:11:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-12 02:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 02:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 02:20:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 02:26:46 --> Could not find the language line "Home"
ERROR - 2024-11-12 02:38:06 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-12 02:40:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 02:50:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 03:00:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-12 03:04:40 --> Could not find the language line "Home"
ERROR - 2024-11-12 03:07:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 03:09:42 --> Could not find the language line "Home"
ERROR - 2024-11-12 03:20:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 03:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 03:39:25 --> Could not find the language line "Home"
ERROR - 2024-11-12 03:50:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:06:37 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:14:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 04:15:23 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 04:16:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 04:20:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:20:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 04:33:15 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:33:16 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:33:16 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:33:19 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:38:46 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:44:28 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:44:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 04:44:52 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:50:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:53:58 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:55:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 04:55:59 --> Could not find the language line "Home"
ERROR - 2024-11-12 04:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 04:59:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 04:59:56 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:00:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 05:15:52 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:15:52 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:15:53 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:15:53 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:15:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:15:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:20:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 05:25:22 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 05:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 05:50:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 06:20:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 06:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 06:31:55 --> Could not find the language line "products"
ERROR - 2024-11-12 06:50:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:05:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-12 07:07:56 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:08:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-12 07:08:50 --> Could not find the language line "Bracelets"
ERROR - 2024-11-12 07:10:31 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 07:20:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:22:41 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-12 07:22:41 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:22:41 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 07:41:10 --> Could not find the language line "Home"
ERROR - 2024-11-12 07:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 07:50:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:03:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:06:34 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:06:36 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-12 08:06:36 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-12 08:06:36 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-12 08:06:36 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-12 08:06:36 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-12 08:07:32 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:07:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:08:32 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:14:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:16:21 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:16:43 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:20:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:20:45 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 08:36:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 08:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 08:45:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 08:45:49 --> Could not find the language line "Home"
ERROR - 2024-11-12 08:46:28 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-12 08:50:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:07:07 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 09:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 09:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 09:16:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:18:44 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:20:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:28:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:28:15 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:30:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:32:21 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:32:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:37:32 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:38:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:39:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:39:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:42:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:45:00 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:45:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:46:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:46:06 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:47:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:47:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:47:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:48:46 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:48:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:50:00 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:50:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 09:53:26 --> Could not find the language line "Home"
ERROR - 2024-11-12 09:56:06 --> Could not find the language line "Bracelets"
ERROR - 2024-11-12 09:56:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 09:56:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 09:56:19 --> Could not find the language line "Perfume"
ERROR - 2024-11-12 09:56:21 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:06:59 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:06:59 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-12 10:07:33 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:08:01 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:09:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:09:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:11:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 10:33:58 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:34:23 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:34:47 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:47:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 10:52:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 10:52:10 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:52:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 10:57:09 --> Could not find the language line "Home"
ERROR - 2024-11-12 10:59:39 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:01:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:02:02 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:02:49 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:03:06 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:03:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:03:14 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:03:26 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:04:40 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:04:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:05:39 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:05:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:06:01 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:06:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:08:52 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:08:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:13:31 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:13:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:13:43 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:14:07 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:16:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:16:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:17:00 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:17:45 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:19:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:19:07 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:22:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:23:31 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:23:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:23:54 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:32:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:33:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:33:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:33:54 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:33:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:34:07 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:35:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:35:44 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:37:44 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:46:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:52:47 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:52:56 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:56:39 --> Could not find the language line "Home"
ERROR - 2024-11-12 11:56:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 11:59:58 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 12:00:52 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:02:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 12:02:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:03:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:03:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 12:12:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 12:15:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:17:53 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:18:01 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:20:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:21:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:23:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:27:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:29:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:30:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:31:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:32:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-12 12:40:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 12:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 12:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 12:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 12:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 12:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 12:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 12:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:03:26 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:21:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:53:42 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:54:48 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 13:57:53 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:58:12 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:58:27 --> Could not find the language line "Home"
ERROR - 2024-11-12 13:58:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:00:45 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:00:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-12 14:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:06:38 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:06:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 14:08:08 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:08:55 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:11:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 14:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:17:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-12 14:20:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:27:58 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:28:08 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:28:59 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:34:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 14:41:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:44:19 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:50:06 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:50:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:53:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 14:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 14:56:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:00:41 --> Could not find the language line "Home"
ERROR - 2024-11-12 15:02:09 --> Could not find the language line "Home"
ERROR - 2024-11-12 15:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:12:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:20:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:20:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 15:20:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:27:06 --> Could not find the language line "Home"
ERROR - 2024-11-12 15:30:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:30:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:31:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:41:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 15:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 15:43:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:45:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:49:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 15:50:17 --> Could not find the language line "Home"
ERROR - 2024-11-12 15:50:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 16:04:06 --> Could not find the language line "Home"
ERROR - 2024-11-12 16:04:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 16:05:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-12 16:06:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 16:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 16:11:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-12 16:13:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 16:15:06 --> Could not find the language line "Home"
ERROR - 2024-11-12 16:15:25 --> Could not find the language line "Home"
ERROR - 2024-11-12 16:20:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 16:33:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 16:45:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 16:50:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:00:41 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-12 17:05:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-12 17:07:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 17:07:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 17:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:12:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 17:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:20:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:25:38 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:26:18 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 17:33:11 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:33:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 17:33:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 17:33:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 17:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:33:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 17:34:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 17:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:34:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 17:34:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-12 17:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:34:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 17:35:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-12 17:35:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-12 17:37:37 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:38:40 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-12 17:38:40 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:41:01 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:41:03 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:41:10 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 17:43:29 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:45:49 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:45:50 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:45:51 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:50:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 17:56:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 18:12:41 --> Could not find the language line "Home"
ERROR - 2024-11-12 18:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 18:14:15 --> Could not find the language line "Home"
ERROR - 2024-11-12 18:14:27 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 18:14:40 --> Could not find the language line "Home"
ERROR - 2024-11-12 18:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 18:14:57 --> Could not find the language line "Home"
ERROR - 2024-11-12 18:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 18:15:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 18:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 18:16:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 18:20:19 --> Could not find the language line "Home"
ERROR - 2024-11-12 18:23:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 18:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 18:37:10 --> Could not find the language line "Home"
ERROR - 2024-11-12 18:37:56 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 18:40:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 18:50:19 --> Could not find the language line "Home"
ERROR - 2024-11-12 19:13:37 --> Could not find the language line "Home"
ERROR - 2024-11-12 19:14:26 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 19:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 19:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 19:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 19:20:19 --> Could not find the language line "Home"
ERROR - 2024-11-12 19:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-12 19:50:20 --> Could not find the language line "Home"
ERROR - 2024-11-12 19:54:38 --> 404 Page Not Found: Storage/settings
ERROR - 2024-11-12 20:00:22 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-12 20:10:51 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:11:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 20:11:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 20:12:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 20:12:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 20:12:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 20:12:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-12 20:12:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:12:27 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 20:12:46 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 20:13:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 20:13:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 20:14:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 20:20:20 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 20:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 20:47:18 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:50:20 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:51:34 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:52:22 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-12 20:52:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:52:23 --> Could not find the language line "Home"
ERROR - 2024-11-12 20:52:47 --> Could not find the language line "Home"
ERROR - 2024-11-12 21:05:25 --> Could not find the language line "Home"
ERROR - 2024-11-12 21:20:20 --> Could not find the language line "Home"
ERROR - 2024-11-12 21:24:51 --> Could not find the language line "Home"
ERROR - 2024-11-12 21:24:51 --> Could not find the language line "Home"
ERROR - 2024-11-12 21:41:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-12 21:50:20 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:20:21 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:23:08 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:34:41 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:50:23 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:50:48 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:52:13 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:53:40 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:56:07 --> Could not find the language line "Home"
ERROR - 2024-11-12 22:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 22:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 23:11:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-12 23:20:23 --> Could not find the language line "Home"
ERROR - 2024-11-12 23:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-12 23:50:24 --> Could not find the language line "Home"
ERROR - 2024-11-12 23:52:22 --> Could not find the language line "Home"
ERROR - 2024-11-12 23:58:21 --> Could not find the language line "Home"
