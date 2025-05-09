<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-09 00:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 00:19:26 --> Could not find the language line "Home"
ERROR - 2024-11-09 00:21:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 00:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 00:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 00:39:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-09 00:49:26 --> Could not find the language line "Home"
ERROR - 2024-11-09 00:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 01:00:40 --> Could not find the language line "Home"
ERROR - 2024-11-09 01:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 01:13:49 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 01:14:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 01:15:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 01:16:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 01:19:28 --> Could not find the language line "Home"
ERROR - 2024-11-09 01:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 01:49:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 01:59:18 --> Could not find the language line "Home"
ERROR - 2024-11-09 01:59:25 --> Could not find the language line "Other"
ERROR - 2024-11-09 02:12:26 --> Could not find the language line "Home"
ERROR - 2024-11-09 02:16:39 --> Could not find the language line "Home"
ERROR - 2024-11-09 02:19:29 --> Could not find the language line "Home"
ERROR - 2024-11-09 02:26:06 --> Could not find the language line "Home"
ERROR - 2024-11-09 02:31:36 --> Could not find the language line "Home"
ERROR - 2024-11-09 02:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 02:49:29 --> Could not find the language line "Home"
ERROR - 2024-11-09 03:16:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 03:17:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-09 03:19:35 --> Could not find the language line "Home"
ERROR - 2024-11-09 03:34:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 03:35:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 03:36:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 03:37:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 03:49:29 --> Could not find the language line "Home"
ERROR - 2024-11-09 04:12:19 --> Could not find the language line "Home"
ERROR - 2024-11-09 04:15:15 --> Could not find the language line "Home"
ERROR - 2024-11-09 04:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 04:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 04:19:28 --> Could not find the language line "Home"
ERROR - 2024-11-09 04:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 04:32:18 --> Could not find the language line "Home"
ERROR - 2024-11-09 04:38:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-11-09 04:49:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 05:19:29 --> Could not find the language line "Home"
ERROR - 2024-11-09 05:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 05:34:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-09 05:41:13 --> Could not find the language line "Home"
ERROR - 2024-11-09 05:49:29 --> Could not find the language line "Home"
ERROR - 2024-11-09 05:57:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-09 06:05:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-09 06:19:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 06:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 06:33:22 --> Could not find the language line "Home"
ERROR - 2024-11-09 06:33:57 --> Could not find the language line "Home"
ERROR - 2024-11-09 06:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 06:46:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 06:49:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:05:29 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:12:36 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:13:14 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:13:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-09 07:13:40 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-09 07:19:31 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 07:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 07:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 07:48:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 07:49:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:51:15 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:54:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 07:59:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-09 07:59:58 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:00:02 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:01:13 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:01:13 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:01:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:01:17 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:03:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 08:07:50 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:08:16 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 08:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 08:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 08:19:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 08:31:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 08:35:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 08:42:24 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:42:56 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:43:51 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:44:11 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:47:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:49:31 --> Could not find the language line "Home"
ERROR - 2024-11-09 08:56:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:56:58 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:57:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:58:39 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 08:58:46 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:03:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:03:29 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:05:11 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:05:37 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:10:22 --> Could not find the language line "Home"
ERROR - 2024-11-09 09:11:12 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:11:24 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:19:31 --> Could not find the language line "Home"
ERROR - 2024-11-09 09:23:18 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:23:24 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:26:42 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:26:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-09 09:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 09:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:42:50 --> Could not find the language line "Home"
ERROR - 2024-11-09 09:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 09:49:31 --> Could not find the language line "Home"
ERROR - 2024-11-09 10:19:32 --> Could not find the language line "Home"
ERROR - 2024-11-09 10:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 10:31:07 --> Could not find the language line "Home"
ERROR - 2024-11-09 10:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 10:44:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 10:49:32 --> Could not find the language line "Home"
ERROR - 2024-11-09 10:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 10:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 10:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 10:57:24 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:08:45 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:09:01 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:10:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 11:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:18:50 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:19:32 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:23:55 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 11:49:33 --> Could not find the language line "Home"
ERROR - 2024-11-09 11:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 12:09:13 --> Could not find the language line "Home"
ERROR - 2024-11-09 12:13:26 --> Could not find the language line "Home"
ERROR - 2024-11-09 12:19:32 --> Could not find the language line "Home"
ERROR - 2024-11-09 12:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 12:49:33 --> Could not find the language line "Home"
ERROR - 2024-11-09 12:59:20 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:05:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 13:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:06:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 13:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:07:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 13:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:07:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 13:08:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 13:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:13:22 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:17:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 13:19:33 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:20:40 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:24:11 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:34:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:36:50 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 13:49:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:54:09 --> Could not find the language line "Home"
ERROR - 2024-11-09 13:58:05 --> Could not find the language line "Home"
ERROR - 2024-11-09 14:03:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 14:04:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 14:04:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 14:05:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-09 14:06:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 14:14:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-09 14:19:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 14:22:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 14:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 14:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 14:29:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 14:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 14:42:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 14:43:05 --> Could not find the language line "Home"
ERROR - 2024-11-09 14:49:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 14:53:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-09 14:56:28 --> Could not find the language line "Home"
ERROR - 2024-11-09 14:58:48 --> Could not find the language line "Home"
ERROR - 2024-11-09 14:58:55 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:02:30 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:02:50 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:03:51 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:12:58 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:14:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-09 15:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:15:19 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:16:05 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:16:42 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:17:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-09 15:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:19:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 15:41:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 15:42:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 15:43:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 15:43:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-09 15:48:04 --> Could not find the language line "Home"
ERROR - 2024-11-09 15:49:35 --> Could not find the language line "Home"
ERROR - 2024-11-09 16:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 16:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 16:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 16:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 16:19:35 --> Could not find the language line "Home"
ERROR - 2024-11-09 16:49:35 --> Could not find the language line "Home"
ERROR - 2024-11-09 17:16:58 --> Could not find the language line "Home"
ERROR - 2024-11-09 17:19:35 --> Could not find the language line "Home"
ERROR - 2024-11-09 17:27:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 17:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 17:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 17:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 17:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 17:45:00 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-11-09 17:45:00 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-11-09 17:49:36 --> Could not find the language line "Home"
ERROR - 2024-11-09 17:50:25 --> 404 Page Not Found: Env/index
ERROR - 2024-11-09 17:50:26 --> Could not find the language line "Home"
ERROR - 2024-11-09 17:51:18 --> Could not find the language line "Home"
ERROR - 2024-11-09 17:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 17:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 18:19:36 --> Could not find the language line "Home"
ERROR - 2024-11-09 18:26:14 --> Could not find the language line "Home"
ERROR - 2024-11-09 18:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 18:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 18:35:07 --> Could not find the language line "Home"
ERROR - 2024-11-09 18:38:14 --> Could not find the language line "Home"
ERROR - 2024-11-09 18:45:46 --> Could not find the language line "Home"
ERROR - 2024-11-09 18:49:36 --> Could not find the language line "Home"
ERROR - 2024-11-09 19:19:36 --> Could not find the language line "Home"
ERROR - 2024-11-09 19:24:28 --> Could not find the language line "Home"
ERROR - 2024-11-09 19:34:25 --> Could not find the language line "Home"
ERROR - 2024-11-09 19:39:26 --> Could not find the language line "Home"
ERROR - 2024-11-09 19:44:51 --> Could not find the language line "Home"
ERROR - 2024-11-09 19:45:02 --> Could not find the language line "Other"
ERROR - 2024-11-09 19:49:37 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 20:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 20:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 20:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-09 20:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 20:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 20:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-09 20:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 20:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-09 20:09:55 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:16:18 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:16:37 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:16:46 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:18:34 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:19:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-09 20:19:37 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:30:31 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-09 20:30:31 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:30:31 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:49:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 20:59:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-09 21:19:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 21:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 21:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 21:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-09 21:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-09 21:49:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 21:55:55 --> Could not find the language line "Home"
ERROR - 2024-11-09 22:19:38 --> Could not find the language line "Home"
ERROR - 2024-11-09 22:49:39 --> Could not find the language line "Home"
ERROR - 2024-11-09 23:19:40 --> Could not find the language line "Home"
ERROR - 2024-11-09 23:31:05 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-09 23:31:05 --> Could not find the language line "Home"
ERROR - 2024-11-09 23:31:05 --> Could not find the language line "Home"
ERROR - 2024-11-09 23:49:43 --> Could not find the language line "Home"
ERROR - 2024-11-09 23:54:25 --> Could not find the language line "Home"
