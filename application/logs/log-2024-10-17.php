<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-17 00:10:53 --> Could not find the language line "Home"
ERROR - 2024-10-17 00:12:51 --> Could not find the language line "Home"
ERROR - 2024-10-17 00:16:20 --> Could not find the language line "Home"
ERROR - 2024-10-17 00:16:22 --> Could not find the language line "Home"
ERROR - 2024-10-17 00:42:50 --> Could not find the language line "Home"
ERROR - 2024-10-17 00:51:27 --> Could not find the language line "Home"
ERROR - 2024-10-17 01:08:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-17 01:12:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 01:23:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-17 01:42:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 01:48:41 --> Could not find the language line "Home"
ERROR - 2024-10-17 01:49:33 --> Could not find the language line "Home"
ERROR - 2024-10-17 01:51:41 --> Could not find the language line "Home"
ERROR - 2024-10-17 01:58:18 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:12:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:23:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:42:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:50:16 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:51:10 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:52:04 --> Could not find the language line "Home"
ERROR - 2024-10-17 02:57:49 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:12:56 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:16:11 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:21:48 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 03:42:21 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:43:06 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:50:23 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:57:40 --> Could not find the language line "Home"
ERROR - 2024-10-17 03:57:43 --> 404 Page Not Found: Wp-includes/css
ERROR - 2024-10-17 03:57:45 --> 404 Page Not Found: Media/system
ERROR - 2024-10-17 04:02:57 --> Could not find the language line "Other"
ERROR - 2024-10-17 04:12:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 04:15:17 --> Could not find the language line "Home"
ERROR - 2024-10-17 04:21:18 --> Could not find the language line "Home"
ERROR - 2024-10-17 04:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 04:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 04:42:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 05:04:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-17 05:12:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 05:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 05:42:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 05:51:44 --> Could not find the language line "Home"
ERROR - 2024-10-17 05:53:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 06:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:06:24 --> Could not find the language line "Home"
ERROR - 2024-10-17 06:12:53 --> Could not find the language line "Home"
ERROR - 2024-10-17 06:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 06:42:53 --> Could not find the language line "Home"
ERROR - 2024-10-17 06:54:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-17 07:12:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 07:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 07:42:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 07:50:42 --> Could not find the language line "Other"
ERROR - 2024-10-17 07:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 08:12:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:13:25 --> 404 Page Not Found: Rw_common/plugins
ERROR - 2024-10-17 08:16:02 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:20:03 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:20:11 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:24:15 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:36:53 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:42:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:46:17 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:49:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-17 08:53:18 --> Could not find the language line "Home"
ERROR - 2024-10-17 08:53:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-17 08:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 08:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 08:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 09:10:16 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:12:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:18:56 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:18:59 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:19:03 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:19:04 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:19:05 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:20:43 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:36:21 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:40:23 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:42:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:44:38 --> Could not find the language line "Home"
ERROR - 2024-10-17 09:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 09:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 10:03:59 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:04:19 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:09:57 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:12:12 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 10:12:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:31:19 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 10:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 10:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 10:42:54 --> Could not find the language line "Home"
ERROR - 2024-10-17 10:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 10:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:00:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:00:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:00:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:00:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:00:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:00:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:05:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-17 11:12:56 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:21:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:21:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:21:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:21:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:21:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 11:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:35:10 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:36:05 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:37:01 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:37:26 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:42:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 11:46:08 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:46:51 --> Could not find the language line "Home"
ERROR - 2024-10-17 11:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:03:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 12:03:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 12:03:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 12:03:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 12:03:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 12:03:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 12:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:05:42 --> Could not find the language line "Bracelets"
ERROR - 2024-10-17 12:05:42 --> Could not find the language line "Bracelets"
ERROR - 2024-10-17 12:06:41 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-10-17 12:12:56 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:20:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:20:59 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:21:00 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:21:00 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:23:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:36:49 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:42:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:45:08 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:45:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:46:04 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:46:26 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:46:57 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:47:00 --> Could not find the language line "Home"
ERROR - 2024-10-17 12:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:47:04 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:47:46 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:47:50 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:48:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:48:12 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:48:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:48:33 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:48:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:49:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 12:49:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:49:31 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:49:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 12:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-17 13:12:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:16:31 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:29:04 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:31:51 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:31:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:37:37 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:42:56 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 13:44:04 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:44:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:51:02 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:55:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:56:02 --> Could not find the language line "Home"
ERROR - 2024-10-17 13:58:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-17 13:58:21 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:00:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:11:46 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:12:57 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:15:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:28:53 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 14:42:57 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:56:28 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:58:34 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-17 14:58:34 --> Could not find the language line "Home"
ERROR - 2024-10-17 14:58:37 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:00:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 15:00:12 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:12:51 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:12:59 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:13:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-17 15:15:18 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:16:20 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:21:03 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:21:50 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:25:26 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:28:17 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:35:13 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:36:05 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:36:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:42:57 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:05 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:05 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:14 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:14 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:19 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:19 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:19 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:21 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:23 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:25 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:52:27 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:56:25 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:56:48 --> Could not find the language line "Home"
ERROR - 2024-10-17 15:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 15:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:12:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:15:07 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:15:31 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:22:15 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:28:38 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:40:41 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:41:55 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:42:16 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:42:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:52:43 --> Could not find the language line "Home"
ERROR - 2024-10-17 16:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:54:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-17 16:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 16:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:01:29 --> Could not find the language line "Home"
ERROR - 2024-10-17 17:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:04:58 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:06:18 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:06:57 --> Could not find the language line "Home"
ERROR - 2024-10-17 17:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:08:12 --> Could not find the language line "Home"
ERROR - 2024-10-17 17:08:15 --> Could not find the language line "Home"
ERROR - 2024-10-17 17:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:08:42 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:09:21 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:09:24 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:09:55 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:12:59 --> Could not find the language line "Home"
ERROR - 2024-10-17 17:13:18 --> Could not find the language line "Socks"
ERROR - 2024-10-17 17:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:28:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-17 17:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 17:37:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-17 17:37:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-17 17:42:58 --> Could not find the language line "Home"
ERROR - 2024-10-17 17:48:03 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 17:50:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 17:52:37 --> 404 Page Not Found: Users/products
ERROR - 2024-10-17 18:07:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-17 18:07:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-17 18:07:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-17 18:07:29 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:13:01 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 18:17:05 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:17:37 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:20:15 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-17 18:21:09 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:23:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 18:23:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 18:23:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 18:23:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 18:23:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 18:23:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 18:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 18:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 18:42:59 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 18:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 18:51:39 --> Could not find the language line "Clothing"
ERROR - 2024-10-17 18:55:00 --> Could not find the language line "Home"
ERROR - 2024-10-17 18:58:47 --> 404 Page Not Found: Products/products
ERROR - 2024-10-17 18:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 19:13:00 --> Could not find the language line "Home"
ERROR - 2024-10-17 19:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 19:43:03 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:02:32 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:08:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-17 20:13:02 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:18:21 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:20:23 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 20:28:03 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:43:00 --> Could not find the language line "Home"
ERROR - 2024-10-17 20:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 21:02:47 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:10:27 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:13:02 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:27:52 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:32:44 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:34:02 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 21:43:14 --> Could not find the language line "Home"
ERROR - 2024-10-17 21:59:12 --> Could not find the language line "Home"
ERROR - 2024-10-17 22:13:03 --> Could not find the language line "Home"
ERROR - 2024-10-17 22:15:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-17 22:16:47 --> Could not find the language line "Home"
ERROR - 2024-10-17 22:25:32 --> Could not find the language line "products"
ERROR - 2024-10-17 22:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 22:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 22:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-17 22:37:15 --> Could not find the language line "Home"
ERROR - 2024-10-17 22:43:07 --> Could not find the language line "Home"
ERROR - 2024-10-17 22:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-17 23:13:06 --> Could not find the language line "Home"
ERROR - 2024-10-17 23:14:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 23:14:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 23:14:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 23:14:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 23:14:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 23:14:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-17 23:43:10 --> Could not find the language line "Home"
ERROR - 2024-10-17 23:43:43 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-17 23:55:06 --> Could not find the language line "Other"
ERROR - 2024-10-17 23:58:23 --> Could not find the language line "Socks"
