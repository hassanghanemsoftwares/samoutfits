<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-24 00:05:06 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:14:31 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-24 00:31:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:32:41 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:38:43 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:45:02 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:49:48 --> Could not find the language line "Home"
ERROR - 2024-10-24 00:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 00:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 01:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 01:14:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 01:23:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 01:44:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 01:48:49 --> Could not find the language line "Home"
ERROR - 2024-10-24 02:14:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 02:16:58 --> Could not find the language line "Home"
ERROR - 2024-10-24 02:44:28 --> Could not find the language line "Home"
ERROR - 2024-10-24 02:51:16 --> Could not find the language line "Home"
ERROR - 2024-10-24 02:51:17 --> Could not find the language line "Home"
ERROR - 2024-10-24 03:13:00 --> Could not find the language line "Home"
ERROR - 2024-10-24 03:14:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 03:44:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 04:04:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-24 04:14:28 --> Could not find the language line "Home"
ERROR - 2024-10-24 04:22:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-24 04:26:21 --> Could not find the language line "Home"
ERROR - 2024-10-24 04:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 04:44:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 04:58:38 --> Could not find the language line "Home"
ERROR - 2024-10-24 05:01:13 --> Could not find the language line "Home"
ERROR - 2024-10-24 05:03:01 --> Could not find the language line "Home"
ERROR - 2024-10-24 05:04:25 --> Could not find the language line "Home"
ERROR - 2024-10-24 05:14:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 05:38:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 05:44:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 06:14:32 --> Could not find the language line "Home"
ERROR - 2024-10-24 06:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 06:44:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 06:44:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-24 06:52:41 --> Could not find the language line "Home"
ERROR - 2024-10-24 06:52:51 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 06:52:56 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:09:14 --> Could not find the language line "Home"
ERROR - 2024-10-24 07:14:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 07:26:49 --> Could not find the language line "Home"
ERROR - 2024-10-24 07:27:18 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:27:23 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:27:23 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:27:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:28:15 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:28:20 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:28:21 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:28:21 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:28:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:28:42 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:29:06 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 07:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:31:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-24 07:31:33 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-24 07:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:32:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-24 07:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 07:44:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 08:14:30 --> Could not find the language line "Home"
ERROR - 2024-10-24 08:44:32 --> Could not find the language line "Home"
ERROR - 2024-10-24 08:56:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-24 09:14:31 --> Could not find the language line "Home"
ERROR - 2024-10-24 09:16:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 09:22:48 --> Could not find the language line "Home"
ERROR - 2024-10-24 09:34:49 --> Could not find the language line "Home"
ERROR - 2024-10-24 09:44:31 --> Could not find the language line "Home"
ERROR - 2024-10-24 09:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 09:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 09:53:26 --> Could not find the language line "Home"
ERROR - 2024-10-24 09:55:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-24 09:58:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-24 10:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 10:14:31 --> Could not find the language line "Home"
ERROR - 2024-10-24 10:17:31 --> Could not find the language line "Home"
ERROR - 2024-10-24 10:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 10:44:32 --> Could not find the language line "Home"
ERROR - 2024-10-24 10:44:33 --> Could not find the language line "Home"
ERROR - 2024-10-24 10:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 10:48:15 --> Could not find the language line "Home"
ERROR - 2024-10-24 10:49:37 --> Could not find the language line "Home"
ERROR - 2024-10-24 10:50:58 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:01:51 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:14:33 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:29:28 --> Could not find the language line "Other"
ERROR - 2024-10-24 11:43:19 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 11:43:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 11:44:33 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:47:21 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:50:26 --> Could not find the language line "Home"
ERROR - 2024-10-24 11:51:24 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:14:33 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:24:41 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:43:52 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:44:33 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:51:55 --> Could not find the language line "Home"
ERROR - 2024-10-24 12:52:57 --> Could not find the language line "Home"
ERROR - 2024-10-24 13:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 13:14:33 --> Could not find the language line "Home"
ERROR - 2024-10-24 13:16:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-24 13:16:37 --> Could not find the language line "Home"
ERROR - 2024-10-24 13:18:24 --> Could not find the language line "Home"
ERROR - 2024-10-24 13:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-24 13:44:34 --> Could not find the language line "Home"
ERROR - 2024-10-24 14:14:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 14:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 14:20:51 --> Could not find the language line "Home"
ERROR - 2024-10-24 14:25:49 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 14:44:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 15:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:09:51 --> Could not find the language line "Home"
ERROR - 2024-10-24 15:12:37 --> Could not find the language line "Home"
ERROR - 2024-10-24 15:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:14:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 15:34:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 15:35:37 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 15:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:44:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 15:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 15:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 16:14:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 16:19:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 16:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 16:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 16:44:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 17:14:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 17:23:49 --> Could not find the language line "Home"
ERROR - 2024-10-24 17:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 17:42:49 --> Could not find the language line "Home"
ERROR - 2024-10-24 17:44:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 17:51:28 --> Could not find the language line "Home"
ERROR - 2024-10-24 17:54:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-24 17:59:04 --> Could not find the language line "Home"
ERROR - 2024-10-24 18:03:04 --> Could not find the language line "Home"
ERROR - 2024-10-24 18:14:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 18:25:54 --> Could not find the language line "Clothing"
ERROR - 2024-10-24 18:41:03 --> Could not find the language line "Home"
ERROR - 2024-10-24 18:44:36 --> Could not find the language line "Home"
ERROR - 2024-10-24 19:08:43 --> Could not find the language line "Home"
ERROR - 2024-10-24 19:08:56 --> Could not find the language line "Home"
ERROR - 2024-10-24 19:14:37 --> Could not find the language line "Home"
ERROR - 2024-10-24 19:33:29 --> Could not find the language line "Home"
ERROR - 2024-10-24 19:44:40 --> Could not find the language line "Home"
ERROR - 2024-10-24 20:14:37 --> Could not find the language line "Home"
ERROR - 2024-10-24 20:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 20:44:37 --> Could not find the language line "Home"
ERROR - 2024-10-24 20:55:35 --> Could not find the language line "Home"
ERROR - 2024-10-24 21:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 21:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-24 21:14:40 --> Could not find the language line "Home"
ERROR - 2024-10-24 21:44:38 --> Could not find the language line "Home"
ERROR - 2024-10-24 21:52:10 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-24 21:52:10 --> Could not find the language line "Home"
ERROR - 2024-10-24 21:52:10 --> Could not find the language line "Home"
ERROR - 2024-10-24 22:14:45 --> Could not find the language line "Home"
ERROR - 2024-10-24 22:35:02 --> Could not find the language line "Home"
ERROR - 2024-10-24 22:44:42 --> Could not find the language line "Home"
ERROR - 2024-10-24 22:53:40 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:02:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-24 23:02:56 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:06:22 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:12:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-24 23:14:48 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:15:55 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:33:54 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:37:26 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:44:44 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:49:43 --> Could not find the language line "Home"
ERROR - 2024-10-24 23:52:41 --> Could not find the language line "Home"
