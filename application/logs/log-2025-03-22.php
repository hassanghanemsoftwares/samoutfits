<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-22 00:07:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 00:12:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 00:20:38 --> Could not find the language line "Home"
ERROR - 2025-03-22 00:42:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 01:12:36 --> Could not find the language line "Home"
ERROR - 2025-03-22 01:12:49 --> Could not find the language line "Home"
ERROR - 2025-03-22 01:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 01:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 01:39:09 --> Could not find the language line "Home"
ERROR - 2025-03-22 01:40:13 --> Could not find the language line "Home"
ERROR - 2025-03-22 01:42:49 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:10:05 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:10:05 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:12:37 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:12:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:24:17 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:25:13 --> Could not find the language line "Home"
ERROR - 2025-03-22 02:42:45 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:08:03 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:12:51 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:28:39 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:35:32 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:42:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:42:51 --> Could not find the language line "Home"
ERROR - 2025-03-22 03:46:20 --> Could not find the language line "Home"
ERROR - 2025-03-22 04:00:54 --> Could not find the language line "Home"
ERROR - 2025-03-22 04:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 04:12:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 04:34:14 --> Could not find the language line "Home"
ERROR - 2025-03-22 04:40:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-22 04:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 04:42:16 --> Could not find the language line "Home"
ERROR - 2025-03-22 04:42:50 --> Could not find the language line "Home"
ERROR - 2025-03-22 04:46:17 --> Could not find the language line "Home"
ERROR - 2025-03-22 05:00:18 --> Could not find the language line "Home"
ERROR - 2025-03-22 05:11:12 --> Could not find the language line "Home"
ERROR - 2025-03-22 05:12:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 05:42:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 06:12:43 --> Could not find the language line "Home"
ERROR - 2025-03-22 06:26:24 --> Could not find the language line "Home"
ERROR - 2025-03-22 06:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 06:42:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 06:53:00 --> Could not find the language line "Home"
ERROR - 2025-03-22 06:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 06:56:17 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:00:12 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:01:10 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:01:13 --> Could not find the language line "Other"
ERROR - 2025-03-22 07:11:07 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:12:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:13:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-22 07:14:22 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-22 07:15:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-22 07:20:27 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:24:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 07:27:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 07:42:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 07:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-22 07:55:54 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:05:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-22 08:12:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 08:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 08:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 08:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 08:25:00 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-22 08:25:00 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:25:00 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:42:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:58:22 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:58:23 --> Could not find the language line "Home"
ERROR - 2025-03-22 08:58:23 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-22 09:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:09:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-22 09:12:45 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:27:13 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:27:27 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:30:30 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:40:00 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:40:07 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:40:23 --> Could not find the language line "Clothing"
ERROR - 2025-03-22 09:40:47 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:42:45 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:43:17 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 09:48:00 --> Could not find the language line "Home"
ERROR - 2025-03-22 09:48:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 10:11:39 --> Could not find the language line "Home"
ERROR - 2025-03-22 10:12:45 --> Could not find the language line "Home"
ERROR - 2025-03-22 10:37:56 --> Could not find the language line "Home"
ERROR - 2025-03-22 10:42:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 10:54:14 --> Could not find the language line "Home"
ERROR - 2025-03-22 10:54:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:26 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-22 10:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:44 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-03-22 10:54:45 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-03-22 10:54:45 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-03-22 10:54:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:54:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 10:56:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 10:57:12 --> Could not find the language line "Home"
ERROR - 2025-03-22 10:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:03:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 11:05:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 11:05:17 --> Could not find the language line "Home"
ERROR - 2025-03-22 11:05:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 11:10:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 11:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:12:45 --> Could not find the language line "Home"
ERROR - 2025-03-22 11:19:35 --> Could not find the language line "Other"
ERROR - 2025-03-22 11:25:42 --> Could not find the language line "Other"
ERROR - 2025-03-22 11:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:27:20 --> Could not find the language line "Other"
ERROR - 2025-03-22 11:31:15 --> Could not find the language line "Home"
ERROR - 2025-03-22 11:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 11:35:57 --> Could not find the language line "Home"
ERROR - 2025-03-22 11:37:22 --> Could not find the language line "Other"
ERROR - 2025-03-22 11:37:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 11:37:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 11:42:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 11:55:07 --> Could not find the language line "Home"
ERROR - 2025-03-22 11:55:43 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:03:41 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:06:25 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:12:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:19:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-22 12:24:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 12:31:09 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:41:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:42:11 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-22 12:42:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 12:46:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 13:01:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-22 13:02:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 13:05:05 --> Could not find the language line "Clothing"
ERROR - 2025-03-22 13:06:37 --> Could not find the language line "Home"
ERROR - 2025-03-22 13:12:47 --> Could not find the language line "Home"
ERROR - 2025-03-22 13:42:47 --> Could not find the language line "Home"
ERROR - 2025-03-22 13:47:18 --> Could not find the language line "Home"
ERROR - 2025-03-22 13:50:42 --> Could not find the language line "Socks"
ERROR - 2025-03-22 13:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 14:12:47 --> Could not find the language line "Home"
ERROR - 2025-03-22 14:23:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-22 14:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 14:23:29 --> Could not find the language line "Home"
ERROR - 2025-03-22 14:41:12 --> Could not find the language line "Home"
ERROR - 2025-03-22 14:42:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 14:55:25 --> Could not find the language line "Other"
ERROR - 2025-03-22 15:06:56 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:07:04 --> Could not find the language line "Clothing"
ERROR - 2025-03-22 15:07:12 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 15:12:32 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:12:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:15:01 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-03-22 15:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 15:34:13 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-22 15:34:13 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:34:13 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:42:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 15:51:19 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-03-22 15:55:30 --> Could not find the language line "Home"
ERROR - 2025-03-22 16:12:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 16:15:19 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-03-22 16:16:21 --> Could not find the language line "users"
ERROR - 2025-03-22 16:42:49 --> Could not find the language line "Home"
ERROR - 2025-03-22 16:47:43 --> Could not find the language line "Home"
ERROR - 2025-03-22 16:48:35 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-03-22 17:03:49 --> Could not find the language line "Home"
ERROR - 2025-03-22 17:12:50 --> Could not find the language line "Home"
ERROR - 2025-03-22 17:22:43 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 17:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-22 17:35:45 --> Could not find the language line "Home"
ERROR - 2025-03-22 17:42:49 --> Could not find the language line "Home"
ERROR - 2025-03-22 17:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 17:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 18:07:09 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:08:04 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:12:50 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:17:44 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:17:44 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-22 18:18:33 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:21:46 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:31:59 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:42:51 --> Could not find the language line "Home"
ERROR - 2025-03-22 18:46:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 18:56:21 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 19:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 19:08:39 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:12:50 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:13:24 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:24:40 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:34:37 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:39:38 --> 404 Page Not Found: Wp-content/themes
ERROR - 2025-03-22 19:39:38 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2025-03-22 19:39:39 --> 404 Page Not Found: Wp-includes/SimplePie
ERROR - 2025-03-22 19:39:39 --> 404 Page Not Found: Wp-includes/SimplePie
ERROR - 2025-03-22 19:39:39 --> 404 Page Not Found: Packedphp/index
ERROR - 2025-03-22 19:39:39 --> 404 Page Not Found: Wp-content/packed.php
ERROR - 2025-03-22 19:42:50 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:43:15 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:55:21 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:58:26 --> Could not find the language line "Home"
ERROR - 2025-03-22 19:58:48 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:00:17 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:08:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-22 20:08:55 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-22 20:11:06 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:11:17 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:11:21 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:12:52 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:14:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 20:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:15:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:15:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:15:47 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:15:57 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:16:00 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:16:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:16:19 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:16:26 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:16:34 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 20:16:42 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 20:16:46 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 20:16:51 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 20:16:51 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 20:16:52 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:16:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-22 20:17:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:17:16 --> Could not find the language line "Clothing"
ERROR - 2025-03-22 20:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:17:22 --> Could not find the language line "Clothing"
ERROR - 2025-03-22 20:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:17:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-22 20:17:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:17:46 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:17:50 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-22 20:17:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:18:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:18:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:18:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:18:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:18:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:19:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:19:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:19:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:19:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:19:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:20:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:20:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:20:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:20:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:20:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-22 20:20:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:21:01 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:21:20 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:21:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-22 20:21:39 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:22:00 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:22:02 --> Could not find the language line "Socks"
ERROR - 2025-03-22 20:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:22:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-22 20:22:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-22 20:22:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-22 20:22:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-22 20:22:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-22 20:22:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-22 20:25:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-22 20:36:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-22 20:42:51 --> Could not find the language line "Home"
ERROR - 2025-03-22 20:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 20:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 21:03:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c897%' OR a.description LIKE '%c897%' OR a.color LIKE '%c897%' OR a.barcode LIKE '%c897%' OR a.category LIKE '%c897%' OR a.sub_category LIKE '%c897%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-22 21:12:52 --> Could not find the language line "Home"
ERROR - 2025-03-22 21:42:52 --> Could not find the language line "Home"
ERROR - 2025-03-22 21:50:27 --> Could not find the language line "Home"
ERROR - 2025-03-22 21:50:33 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-22 21:50:35 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-22 21:50:40 --> 404 Page Not Found: Samoutfits/index
ERROR - 2025-03-22 21:50:47 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-22 21:50:58 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-22 21:51:07 --> 404 Page Not Found: New/index
ERROR - 2025-03-22 21:51:14 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-22 21:51:21 --> 404 Page Not Found: Temp/index
ERROR - 2025-03-22 21:51:27 --> 404 Page Not Found: Blog/index
ERROR - 2025-03-22 22:02:22 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-22 22:07:27 --> Could not find the language line "Home"
ERROR - 2025-03-22 22:12:55 --> Could not find the language line "Home"
ERROR - 2025-03-22 22:16:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-22 22:16:56 --> Could not find the language line "Home"
ERROR - 2025-03-22 22:17:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-22 22:17:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-22 22:38:21 --> Could not find the language line "Home"
ERROR - 2025-03-22 22:42:53 --> Could not find the language line "Home"
ERROR - 2025-03-22 22:44:07 --> Could not find the language line "Home"
ERROR - 2025-03-22 22:45:40 --> Could not find the language line "Home"
ERROR - 2025-03-22 23:09:40 --> Could not find the language line "Home"
ERROR - 2025-03-22 23:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-22 23:12:55 --> Could not find the language line "Home"
ERROR - 2025-03-22 23:42:54 --> Could not find the language line "Home"
