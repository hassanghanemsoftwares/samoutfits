<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-19 00:16:51 --> Could not find the language line "Home"
ERROR - 2024-07-19 00:21:08 --> Could not find the language line "Home"
ERROR - 2024-07-19 00:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 00:28:37 --> Could not find the language line "Home"
ERROR - 2024-07-19 00:46:49 --> Could not find the language line "Home"
ERROR - 2024-07-19 00:56:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 01:16:50 --> Could not find the language line "Home"
ERROR - 2024-07-19 01:46:51 --> Could not find the language line "Home"
ERROR - 2024-07-19 01:47:04 --> Could not find the language line "Socks"
ERROR - 2024-07-19 01:49:54 --> Could not find the language line "Home"
ERROR - 2024-07-19 01:58:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 02:11:52 --> Could not find the language line "Home"
ERROR - 2024-07-19 02:16:53 --> Could not find the language line "Home"
ERROR - 2024-07-19 02:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 02:46:53 --> Could not find the language line "Home"
ERROR - 2024-07-19 03:16:53 --> Could not find the language line "Home"
ERROR - 2024-07-19 03:46:52 --> Could not find the language line "Home"
ERROR - 2024-07-19 04:16:52 --> Could not find the language line "Home"
ERROR - 2024-07-19 04:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 04:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 04:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 04:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-19 04:51:57 --> Could not find the language line "Home"
ERROR - 2024-07-19 05:16:53 --> Could not find the language line "Home"
ERROR - 2024-07-19 05:46:57 --> Could not find the language line "Home"
ERROR - 2024-07-19 05:47:38 --> Could not find the language line "Other"
ERROR - 2024-07-19 05:50:52 --> Could not find the language line "Socks"
ERROR - 2024-07-19 06:08:16 --> Could not find the language line "Home"
ERROR - 2024-07-19 06:13:30 --> Could not find the language line "Home"
ERROR - 2024-07-19 06:16:53 --> Could not find the language line "Home"
ERROR - 2024-07-19 06:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-19 06:55:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-19 06:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 06:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:16:54 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:40:28 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:43:20 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:44:44 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:45:21 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-19 07:45:36 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:48:38 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:53:13 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:58:03 --> Could not find the language line "Home"
ERROR - 2024-07-19 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 07:59:00 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:01:35 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:03:22 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:04:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:06:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:06:20 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:06:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:06:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:07:28 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:09:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:09:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:10:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:10:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:10:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:11:07 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:11:28 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:11:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:11:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:12:18 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:13:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:13:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:14:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:14:49 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:15:50 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:15:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 08:16:55 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:18:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 08:18:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-19 08:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:20:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 08:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:33:45 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:34:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 08:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:37:34 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 08:46:56 --> Could not find the language line "Home"
ERROR - 2024-07-19 08:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:01:43 --> Could not find the language line "Other"
ERROR - 2024-07-19 09:01:58 --> Could not find the language line "Socks"
ERROR - 2024-07-19 09:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:11:43 --> 404 Page Not Found: Contact/index
ERROR - 2024-07-19 09:11:44 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:16:55 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:27:03 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:28:21 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:29:16 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:29:37 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:30:26 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:30:43 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:30:43 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:30:54 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:31:02 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:02 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:31:19 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:19 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:19 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:19 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:19 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-19 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:31:42 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:34:40 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:37:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-19 09:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:44:02 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:44:21 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:45:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 09:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:45:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 09:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:46:07 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 09:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:46:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:46:41 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:46:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 09:46:56 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:48:06 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:54:49 --> Could not find the language line "Home"
ERROR - 2024-07-19 09:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 09:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:01:00 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:03:36 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:15:38 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:16:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 10:16:22 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:16:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:16:56 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:17:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:17:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:17:40 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:18:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:18:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:18:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:19:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:19:32 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:20:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 10:22:08 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:24:10 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:26:17 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:31:43 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:34:08 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:34:46 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:38:44 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:46:57 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:47:48 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:48:10 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:48:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:50:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:50:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:50:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:50:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-19 10:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:51:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:51:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:51:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:51:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:51:51 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:52:15 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:52:23 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:53:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 10:53:29 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:54:29 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:55:18 --> Could not find the language line "Home"
ERROR - 2024-07-19 10:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 10:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:09:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 11:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:16:58 --> Could not find the language line "Home"
ERROR - 2024-07-19 11:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:23:02 --> Could not find the language line "Home"
ERROR - 2024-07-19 11:23:06 --> Could not find the language line "Bracelets"
ERROR - 2024-07-19 11:23:28 --> Could not find the language line "Bracelets"
ERROR - 2024-07-19 11:23:44 --> Could not find the language line "Bracelets"
ERROR - 2024-07-19 11:23:47 --> Could not find the language line "Home"
ERROR - 2024-07-19 11:24:38 --> Could not find the language line "Home"
ERROR - 2024-07-19 11:24:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-19 11:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 11:46:58 --> Could not find the language line "Home"
ERROR - 2024-07-19 11:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:04:46 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:16:57 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:17:03 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:17:03 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2024-07-19 12:17:03 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-07-19 12:17:04 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:17:04 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2024-07-19 12:17:04 --> 404 Page Not Found: Web/wp-includes
ERROR - 2024-07-19 12:17:04 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2024-07-19 12:17:04 --> 404 Page Not Found: Website/wp-includes
ERROR - 2024-07-19 12:17:04 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2024-07-19 12:17:04 --> 404 Page Not Found: News/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: Test/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: Media/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2024-07-19 12:17:05 --> 404 Page Not Found: Site/wp-includes
ERROR - 2024-07-19 12:17:06 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2024-07-19 12:17:06 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2024-07-19 12:18:20 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:28:35 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:43:05 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:46:58 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:52:37 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:52:55 --> Could not find the language line "Home"
ERROR - 2024-07-19 12:53:23 --> Could not find the language line "Bracelets"
ERROR - 2024-07-19 12:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 12:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 13:02:16 --> Could not find the language line "Home"
ERROR - 2024-07-19 13:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 13:06:01 --> Could not find the language line "Home"
ERROR - 2024-07-19 13:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 13:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 13:16:58 --> Could not find the language line "Home"
ERROR - 2024-07-19 13:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 13:26:23 --> Could not find the language line "Other"
ERROR - 2024-07-19 13:26:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-19 13:26:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-19 13:26:25 --> Could not find the language line "Bracelets"
ERROR - 2024-07-19 13:26:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 13:26:26 --> Could not find the language line "Perfume"
ERROR - 2024-07-19 13:26:27 --> Could not find the language line "Other"
ERROR - 2024-07-19 13:26:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 13:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 13:46:58 --> Could not find the language line "Home"
ERROR - 2024-07-19 14:16:59 --> Could not find the language line "Home"
ERROR - 2024-07-19 14:26:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 14:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 14:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 14:46:59 --> Could not find the language line "Home"
ERROR - 2024-07-19 14:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 15:16:59 --> Could not find the language line "Home"
ERROR - 2024-07-19 15:47:00 --> Could not find the language line "Home"
ERROR - 2024-07-19 16:17:00 --> Could not find the language line "Home"
ERROR - 2024-07-19 16:21:26 --> Could not find the language line "Home"
ERROR - 2024-07-19 16:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 16:47:00 --> Could not find the language line "Home"
ERROR - 2024-07-19 17:02:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 17:17:01 --> Could not find the language line "Home"
ERROR - 2024-07-19 17:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 17:31:14 --> Could not find the language line "Home"
ERROR - 2024-07-19 17:42:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 17:47:02 --> Could not find the language line "Home"
ERROR - 2024-07-19 18:01:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 18:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:17:02 --> Could not find the language line "Home"
ERROR - 2024-07-19 18:25:40 --> Could not find the language line "Other"
ERROR - 2024-07-19 18:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 18:47:02 --> Could not find the language line "Home"
ERROR - 2024-07-19 18:54:48 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 19:13:56 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:17:03 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:19:50 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:45:17 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:47:05 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:49:12 --> Could not find the language line "Home"
ERROR - 2024-07-19 19:49:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-19 19:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 20:02:28 --> Could not find the language line "Home"
ERROR - 2024-07-19 20:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 20:17:03 --> Could not find the language line "Home"
ERROR - 2024-07-19 20:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 20:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 20:47:04 --> Could not find the language line "Home"
ERROR - 2024-07-19 21:11:02 --> Could not find the language line "Socks"
ERROR - 2024-07-19 21:12:52 --> Could not find the language line "Other"
ERROR - 2024-07-19 21:17:04 --> Could not find the language line "Home"
ERROR - 2024-07-19 21:18:24 --> Could not find the language line "Home"
ERROR - 2024-07-19 21:47:05 --> Could not find the language line "Home"
ERROR - 2024-07-19 22:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-19 22:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:23:11 --> Could not find the language line "Home"
ERROR - 2024-07-19 22:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:26:57 --> Could not find the language line "Home"
ERROR - 2024-07-19 22:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 22:47:05 --> Could not find the language line "Home"
ERROR - 2024-07-19 22:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-19 23:10:56 --> Could not find the language line "Home"
ERROR - 2024-07-19 23:11:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-19 23:11:22 --> Could not find the language line "Home"
ERROR - 2024-07-19 23:17:06 --> Could not find the language line "Home"
ERROR - 2024-07-19 23:47:06 --> Could not find the language line "Home"
ERROR - 2024-07-19 23:50:26 --> Could not find the language line "Home"
ERROR - 2024-07-19 23:50:33 --> Could not find the language line "Home"
ERROR - 2024-07-19 23:50:54 --> Could not find the language line "Home"
