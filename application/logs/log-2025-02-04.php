<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-04 00:11:38 --> Could not find the language line "Home"
ERROR - 2025-02-04 00:41:36 --> Could not find the language line "Home"
ERROR - 2025-02-04 01:08:56 --> Could not find the language line "Home"
ERROR - 2025-02-04 01:11:35 --> Could not find the language line "Home"
ERROR - 2025-02-04 01:15:29 --> Could not find the language line "Perfume"
ERROR - 2025-02-04 01:20:30 --> Could not find the language line "Clothing"
ERROR - 2025-02-04 01:41:37 --> Could not find the language line "Home"
ERROR - 2025-02-04 01:47:06 --> Could not find the language line "Home"
ERROR - 2025-02-04 01:47:08 --> 404 Page Not Found: Cart/accounts
ERROR - 2025-02-04 01:47:08 --> 404 Page Not Found: Cart/home
ERROR - 2025-02-04 01:47:08 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-04 01:49:51 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:05:32 --> Could not find the language line "Clothing"
ERROR - 2025-02-04 02:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 02:11:37 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:16:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-04 02:25:49 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:31:11 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:31:11 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:31:12 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:31:12 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:31:15 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:31:18 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:34:06 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:34:09 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:34:10 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:34:22 --> 404 Page Not Found: Assets/mail
ERROR - 2025-02-04 02:34:25 --> 404 Page Not Found: Assets/mail
ERROR - 2025-02-04 02:37:31 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:37:56 --> 404 Page Not Found: Assets/mail
ERROR - 2025-02-04 02:41:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-04 02:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-04 03:11:38 --> Could not find the language line "Home"
ERROR - 2025-02-04 03:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 03:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 03:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 03:29:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 03:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 03:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 03:41:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:06:46 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:08:34 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:09:37 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:11:59 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:14:21 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:15:16 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:18:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:19:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 04:33:07 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 04:33:07 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 04:33:07 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 04:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:41:41 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:41:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-04 04:45:14 --> Could not find the language line "Home"
ERROR - 2025-02-04 04:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 04:56:29 --> Could not find the language line "Home"
ERROR - 2025-02-04 05:00:04 --> Could not find the language line "Home"
ERROR - 2025-02-04 05:01:15 --> Could not find the language line "Home"
ERROR - 2025-02-04 05:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 05:05:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 05:10:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 05:11:38 --> Could not find the language line "Home"
ERROR - 2025-02-04 05:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 05:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 05:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 05:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 05:41:38 --> Could not find the language line "Home"
ERROR - 2025-02-04 05:58:16 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:01:29 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:08:17 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:11:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:33:18 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:41:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:43:15 --> Could not find the language line "Home"
ERROR - 2025-02-04 06:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 06:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:02:03 --> Could not find the language line "Home"
ERROR - 2025-02-04 07:11:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 07:11:50 --> Could not find the language line "Home"
ERROR - 2025-02-04 07:12:07 --> Could not find the language line "Home"
ERROR - 2025-02-04 07:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:13:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 07:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:33:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 07:33:21 --> Could not find the language line "Home"
ERROR - 2025-02-04 07:41:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 07:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:52:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 07:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 07:53:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 08:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:11:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 08:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:19:30 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-04 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:22:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 08:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:34:11 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-04 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:41:43 --> Could not find the language line "Home"
ERROR - 2025-02-04 08:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 08:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:06:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-04 09:07:28 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:09:44 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:09:53 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:10:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:11:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:38:33 --> 404 Page Not Found: Filemanager/dialog.php
ERROR - 2025-02-04 09:41:41 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:49:18 --> 404 Page Not Found: Admin/filemanager
ERROR - 2025-02-04 09:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:05 --> Could not find the language line "Home"
ERROR - 2025-02-04 09:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 09:59:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-04 10:03:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 10:11:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 10:28:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 10:32:21 --> Could not find the language line "Home"
ERROR - 2025-02-04 10:33:17 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-04 10:33:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 10:33:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 10:41:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 10:48:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-04 10:48:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-04 10:50:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-04 10:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 11:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 11:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 11:11:44 --> Could not find the language line "Home"
ERROR - 2025-02-04 11:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 11:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 11:41:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 11:44:48 --> Could not find the language line "Home"
ERROR - 2025-02-04 11:49:19 --> Could not find the language line "Home"
ERROR - 2025-02-04 11:50:12 --> Could not find the language line "Home"
ERROR - 2025-02-04 11:54:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-04 11:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:05:06 --> Could not find the language line "Socks"
ERROR - 2025-02-04 12:05:15 --> Could not find the language line "Home"
ERROR - 2025-02-04 12:11:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 12:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:19:31 --> Could not find the language line "Home"
ERROR - 2025-02-04 12:19:43 --> Could not find the language line "Other"
ERROR - 2025-02-04 12:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:30:13 --> Could not find the language line "Home"
ERROR - 2025-02-04 12:31:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 12:36:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 12:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:41:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 12:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 12:59:06 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:02:10 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:03:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 13:04:04 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:05:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 13:07:00 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:11:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:19:39 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 13:19:50 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 13:19:50 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 13:21:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-04 13:34:50 --> Could not find the language line "Home"
ERROR - 2025-02-04 13:41:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:02:32 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:05:58 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:07:37 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:11:43 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:32 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Pagead2googlesyndicationcom/pagead
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Wwwgoogletagmanagercom/gtm.js
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Js/main.js
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Lib/easing
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Js/common.js
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Lib/swiper
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Mail/contact.js
ERROR - 2025-02-04 14:17:23 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2025-02-04 14:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:25:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 14:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:41:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:51:04 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:56:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 14:57:59 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:58:09 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:58:25 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:26 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:29 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:33 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:38 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:59:02 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:59:02 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:59:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 14:59:02 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:59:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 14:59:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 14:59:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 14:59:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 14:59:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 14:59:06 --> Could not find the language line "Home"
ERROR - 2025-02-04 14:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 14:59:32 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:00:58 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:00:59 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:00:59 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:01:00 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:10:15 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2025-02-04 15:10:15 --> 404 Page Not Found: Wordpress/wp-admin
ERROR - 2025-02-04 15:11:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:13:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:20:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 15:38:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 15:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 15:41:44 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:52:03 --> Could not find the language line "Home"
ERROR - 2025-02-04 15:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 16:11:44 --> Could not find the language line "Home"
ERROR - 2025-02-04 16:17:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-04 16:20:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 16:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 16:41:44 --> Could not find the language line "Home"
ERROR - 2025-02-04 16:48:06 --> Could not find the language line "Home"
ERROR - 2025-02-04 16:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 16:49:29 --> Could not find the language line "Home"
ERROR - 2025-02-04 16:58:19 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-04 16:58:19 --> Could not find the language line "Home"
ERROR - 2025-02-04 16:58:19 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:00:14 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 17:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 17:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 17:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 17:11:46 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:33:12 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 17:34:00 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:34:06 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:34:47 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 17:41:44 --> Could not find the language line "Home"
ERROR - 2025-02-04 17:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:11:45 --> Could not find the language line "Home"
ERROR - 2025-02-04 18:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:20:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-04 18:25:16 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-04 18:25:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-04 18:29:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-04 18:41:45 --> Could not find the language line "Home"
ERROR - 2025-02-04 18:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 18:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:11:45 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:29:07 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:29:13 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:30:58 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:31:04 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:31:05 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:31:45 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:40:17 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:41:46 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:49:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-04 19:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 19:54:41 --> Could not find the language line "Home"
ERROR - 2025-02-04 19:57:45 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:02:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-04 20:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:11:45 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:17:33 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:20:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:21:31 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:26:40 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:26:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:26:42 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:29:39 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:29:53 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:30:00 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-04 20:30:09 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:30:21 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:30:21 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:30:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:30:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:30:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-04 20:30:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-04 20:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:32:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:33:17 --> Could not find the language line "Perfume"
ERROR - 2025-02-04 20:33:30 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-04 20:34:08 --> Could not find the language line "Clothing"
ERROR - 2025-02-04 20:41:48 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:44:48 --> Could not find the language line "Home"
ERROR - 2025-02-04 20:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 20:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 21:11:46 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:17:15 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:17:23 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:31:21 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:36:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-04 21:41:46 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:45:15 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:50:19 --> Could not find the language line "Home"
ERROR - 2025-02-04 21:53:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 21:59:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-04 22:05:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-04 22:05:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-04 22:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 22:11:47 --> Could not find the language line "Home"
ERROR - 2025-02-04 22:21:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-04 22:23:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-04 22:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 22:41:48 --> Could not find the language line "Home"
ERROR - 2025-02-04 22:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 22:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 22:46:52 --> Could not find the language line "Home"
ERROR - 2025-02-04 23:00:04 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-04 23:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 23:11:50 --> Could not find the language line "Home"
ERROR - 2025-02-04 23:13:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-04 23:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 23:34:25 --> Could not find the language line "Home"
ERROR - 2025-02-04 23:38:16 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-04 23:38:16 --> Could not find the language line "Home"
ERROR - 2025-02-04 23:41:48 --> Could not find the language line "Home"
ERROR - 2025-02-04 23:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 23:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-04 23:47:53 --> Could not find the language line "Clothing"
ERROR - 2025-02-04 23:49:46 --> Could not find the language line "Home"
ERROR - 2025-02-04 23:53:12 --> Could not find the language line "Home"
