<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-14 00:17:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-14 00:18:48 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:29:04 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:29:05 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:29:12 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:29:37 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:29:46 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:37:48 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-14 00:48:52 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:52:48 --> Could not find the language line "Home"
ERROR - 2025-03-14 00:53:14 --> Could not find the language line "Socks"
ERROR - 2025-03-14 01:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 01:09:56 --> Could not find the language line "Clothing"
ERROR - 2025-03-14 01:11:43 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:14:35 --> Could not find the language line "Clothing"
ERROR - 2025-03-14 01:17:02 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:18:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:21:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-14 01:26:48 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:26:50 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-14 01:26:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:26:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:33:01 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-14 01:33:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 01:38:04 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:48:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 01:58:39 --> Could not find the language line "Disclaimer"
ERROR - 2025-03-14 02:00:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-14 02:07:24 --> Could not find the language line "Home"
ERROR - 2025-03-14 02:10:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 02:16:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 02:18:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 02:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 02:26:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 02:48:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 03:18:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 03:24:15 --> Could not find the language line "Home"
ERROR - 2025-03-14 03:33:12 --> Could not find the language line "0"
ERROR - 2025-03-14 03:48:49 --> Could not find the language line "Home"
ERROR - 2025-03-14 04:06:53 --> Could not find the language line "users"
ERROR - 2025-03-14 04:13:57 --> Could not find the language line "Socks"
ERROR - 2025-03-14 04:18:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 04:23:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 04:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-14 04:48:54 --> Could not find the language line "Home"
ERROR - 2025-03-14 05:01:22 --> Could not find the language line "Home"
ERROR - 2025-03-14 05:01:24 --> Could not find the language line "Home"
ERROR - 2025-03-14 05:16:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-14 05:18:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 05:34:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-14 05:34:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-14 05:36:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-14 05:48:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 05:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 06:18:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 06:48:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 07:18:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 07:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 07:32:32 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-14 07:48:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 07:52:28 --> Could not find the language line "Home"
ERROR - 2025-03-14 08:18:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 08:48:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:07:38 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:12:19 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:15:22 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:18:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:23:39 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:26:47 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:27:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 09:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:48:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 09:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 09:53:50 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:08:22 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:11:24 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:17:02 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:17:04 --> Could not find the language line "Other"
ERROR - 2025-03-14 10:18:52 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:22:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-14 10:22:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-14 10:34:11 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:34:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 10:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 10:39:20 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:39:21 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 10:48:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:54:19 --> Could not find the language line "Home"
ERROR - 2025-03-14 10:56:02 --> Could not find the language line "Other"
ERROR - 2025-03-14 11:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 11:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 11:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 11:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 11:16:13 --> Could not find the language line "Home"
ERROR - 2025-03-14 11:18:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 11:24:26 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-14 11:36:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-14 11:45:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 11:48:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 11:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 12:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-14 12:12:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 12:18:54 --> Could not find the language line "Home"
ERROR - 2025-03-14 12:23:39 --> Could not find the language line "Home"
ERROR - 2025-03-14 12:23:57 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-14 12:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 12:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 12:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 12:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-14 12:48:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 12:49:16 --> Could not find the language line "Home"
ERROR - 2025-03-14 12:50:26 --> Could not find the language line "Home"
ERROR - 2025-03-14 12:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 12:57:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:04:34 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:08:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-14 13:08:18 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:08:18 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:18:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:24:08 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-14 13:24:08 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:24:08 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:28:10 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:34:05 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:34:12 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:35:12 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:36:45 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:36:59 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:37:00 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:37:01 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:39:00 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:39:03 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:39:33 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:39:59 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:40:31 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:40:32 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:41:04 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:41:26 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:42:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:42:02 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:42:26 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:42:27 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:42:49 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:42:50 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:44:36 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:44:37 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:45:07 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:45:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-14 13:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:46:14 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:46:34 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:46:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:48:48 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:48:55 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:51:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:52:59 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 13:55:50 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:55:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 13:59:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:02:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 14:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 14:04:35 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:04:43 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:04:48 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:04:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:05 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:06 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:06 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:06 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:06 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:09 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:13 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:15 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:15 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:05:16 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:06:12 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:06:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 14:18:26 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:18:54 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 14:19:27 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-14 14:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 14:19:38 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:19:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:19:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:19:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:19:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 14:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 14:20:53 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:20:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:21:20 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:25:15 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:25:23 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:25:29 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-14 14:25:38 --> Could not find the language line "Home"
ERROR - 2025-03-14 14:29:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 14:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 14:48:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:08:14 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:08:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 15:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:08:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 15:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:08:59 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:09:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:18:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:25:16 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:25:20 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:25:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 15:26:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 15:43:08 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:43:54 --> Could not find the language line "Home"
ERROR - 2025-03-14 15:48:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:03:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:03:09 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:06:08 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:16:39 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:18:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 16:29:07 --> Could not find the language line "Other"
ERROR - 2025-03-14 16:30:13 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-14 16:30:13 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 16:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 16:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 16:31:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 16:34:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:48:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-14 16:48:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-14 16:48:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-14 16:48:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:53:05 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:53:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 16:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 16:54:12 --> Could not find the language line "Home"
ERROR - 2025-03-14 16:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:02:19 --> Could not find the language line "Home"
ERROR - 2025-03-14 17:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:18:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 17:20:30 --> Could not find the language line "Home"
ERROR - 2025-03-14 17:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:43:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-14 17:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 17:48:38 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-14 17:48:38 --> Could not find the language line "Home"
ERROR - 2025-03-14 17:48:39 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-14 17:48:39 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-14 17:48:39 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-14 17:48:39 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-14 17:48:39 --> 404 Page Not Found: New/index
ERROR - 2025-03-14 17:48:39 --> 404 Page Not Found: Main/index
ERROR - 2025-03-14 17:48:40 --> Could not find the language line "Home"
ERROR - 2025-03-14 17:48:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 18:17:02 --> Could not find the language line "Home"
ERROR - 2025-03-14 18:18:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 18:20:16 --> Could not find the language line "Home"
ERROR - 2025-03-14 18:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 18:37:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 18:47:11 --> Could not find the language line "Home"
ERROR - 2025-03-14 18:48:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 19:12:29 --> Could not find the language line "Home"
ERROR - 2025-03-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 19:20:21 --> 404 Page Not Found: Git/config
ERROR - 2025-03-14 19:40:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-14 19:45:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 19:47:23 --> Could not find the language line "Clothing"
ERROR - 2025-03-14 19:48:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 19:58:57 --> Could not find the language line "Perfume"
ERROR - 2025-03-14 20:01:45 --> 404 Page Not Found: Git/config
ERROR - 2025-03-14 20:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 20:13:52 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:19:00 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:37:44 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:38:20 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:41:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 20:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 20:46:19 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 20:48:59 --> Could not find the language line "Home"
ERROR - 2025-03-14 20:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 21:08:39 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:08:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-14 21:09:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-14 21:10:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-14 21:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 21:10:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-14 21:12:50 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:18:59 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:20:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-14 21:20:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-14 21:21:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-14 21:21:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-14 21:24:00 --> Could not find the language line "Other"
ERROR - 2025-03-14 21:31:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:35:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-14 21:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 21:39:07 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:39:33 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:40:39 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 21:41:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 21:48:59 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:02:52 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:05:33 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:08:49 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:08:58 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 22:14:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 22:19:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:20:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-14 22:21:51 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:31:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:31:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:31:43 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:31:49 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:43:16 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:43:36 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:43:57 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:49:01 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:51:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-14 22:54:06 --> Could not find the language line "Home"
ERROR - 2025-03-14 22:56:41 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:01:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:05:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:09:29 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:19:04 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:21:34 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:31:02 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:31:56 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:32:34 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:34:20 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:35:18 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:36:32 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:37:31 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:38:22 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:38:25 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:41:31 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-14 23:49:03 --> Could not find the language line "Home"
ERROR - 2025-03-14 23:59:11 --> Could not find the language line "Home"
