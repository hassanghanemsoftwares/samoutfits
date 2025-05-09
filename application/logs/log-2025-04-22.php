<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-22 00:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:10:04 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 00:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:25:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 00:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:42:55 --> Could not find the language line "Home"
ERROR - 2025-04-22 00:45:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c907%' OR a.description LIKE '%c907%' OR a.color LIKE '%c907%' OR a.barcode LIKE '%c907%' OR a.category LIKE '%c907%' OR a.sub_category LIKE '%c907%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 00:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 00:55:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:05:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 01:07:24 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:16:35 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:21:39 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:23:15 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:25:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:38:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 01:44:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:44:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 01:44:07 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-22 01:44:09 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-22 01:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 01:44:13 --> 404 Page Not Found: Samoutfits/index
ERROR - 2025-04-22 01:44:14 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-22 01:44:22 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-22 01:44:24 --> 404 Page Not Found: New/index
ERROR - 2025-04-22 01:44:30 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-22 01:44:32 --> 404 Page Not Found: Temp/index
ERROR - 2025-04-22 01:44:34 --> 404 Page Not Found: Blog/index
ERROR - 2025-04-22 01:46:20 --> Could not find the language line "Home"
ERROR - 2025-04-22 01:55:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:16:16 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:21:37 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:22:49 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:24:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-22 02:24:20 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:25:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:31:13 --> Could not find the language line "Other"
ERROR - 2025-04-22 02:37:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 02:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:55:53 --> Could not find the language line "Home"
ERROR - 2025-04-22 02:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 02:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:03:23 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:06:30 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:14:24 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:15:33 --> Could not find the language line "Socks"
ERROR - 2025-04-22 03:25:35 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:27:12 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:27:50 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:31:53 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:33:08 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:34:27 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 03:46:44 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:46:52 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:46:56 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:46:57 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:55:13 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:56:49 --> Could not find the language line "Home"
ERROR - 2025-04-22 03:56:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 03:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:03:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 04:12:54 --> Could not find the language line "Home"
ERROR - 2025-04-22 04:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:17:08 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 04:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 04:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:45:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 04:52:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 04:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 04:54:38 --> Could not find the language line "Home"
ERROR - 2025-04-22 04:55:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 05:00:51 --> Could not find the language line "0"
ERROR - 2025-04-22 05:07:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-22 05:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 05:12:37 --> 404 Page Not Found: Wp-admin/css
ERROR - 2025-04-22 05:13:00 --> 404 Page Not Found: Sites/default
ERROR - 2025-04-22 05:13:12 --> 404 Page Not Found: Admin/controller
ERROR - 2025-04-22 05:13:22 --> 404 Page Not Found: Uploads/index
ERROR - 2025-04-22 05:13:42 --> 404 Page Not Found: Files/index
ERROR - 2025-04-22 05:17:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 05:18:28 --> Could not find the language line "Home"
ERROR - 2025-04-22 05:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:25:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 05:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 05:55:03 --> Could not find the language line "Home"
ERROR - 2025-04-22 05:55:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 06:01:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 06:07:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 06:12:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 06:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:18:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:20:39 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:20:44 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:21:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:21:37 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:21:38 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-04-22 06:21:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:22:17 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:23:40 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:26:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:26:26 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:26:28 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:27:22 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:27:30 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:28:18 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:28:42 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:29:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-22 06:29:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:33:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:33:30 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:36:39 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:36:44 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:37:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:42:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 06:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:45:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:45:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 06:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:46:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 06:46:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 06:49:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:50:41 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 06:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:55:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:55:08 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 06:57:00 --> Could not find the language line "Home"
ERROR - 2025-04-22 06:59:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 07:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:08:57 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:09:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-22 07:09:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-22 07:09:53 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:10:18 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:10:25 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:12:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:12:18 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:13:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:14:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:22:55 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:25:05 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 07:25:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:28:14 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:29:12 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:29:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-22 07:29:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-22 07:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:34:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 07:45:24 --> Could not find the language line "Other"
ERROR - 2025-04-22 07:47:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 07:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:51:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 07:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:54:48 --> Could not find the language line "Other"
ERROR - 2025-04-22 07:55:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 07:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 07:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:02:36 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:04:25 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-22 08:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:05:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 08:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:14:36 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:24:55 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:25:06 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 08:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:26:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 08:27:04 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:31:21 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:32:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 08:33:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:43:33 --> Could not find the language line "Other"
ERROR - 2025-04-22 08:43:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 08:44:30 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:44:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:47:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:47:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 08:48:29 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:52:50 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:53:04 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:53:09 --> 404 Page Not Found: Home/assets
ERROR - 2025-04-22 08:53:37 --> Could not find the language line "Other"
ERROR - 2025-04-22 08:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:55:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 08:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 08:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:12:07 --> 404 Page Not Found: Home/home
ERROR - 2025-04-22 09:14:54 --> Could not find the language line "Home"
ERROR - 2025-04-22 09:16:54 --> Could not find the language line "Other"
ERROR - 2025-04-22 09:18:16 --> Could not find the language line "Other"
ERROR - 2025-04-22 09:21:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 09:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:22:34 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 09:22:44 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 09:23:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 09:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 09:25:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 09:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:25:45 --> Could not find the language line "Socks"
ERROR - 2025-04-22 09:26:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 09:26:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 09:30:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 09:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:32:52 --> Could not find the language line "Home"
ERROR - 2025-04-22 09:36:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 09:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:39:15 --> Could not find the language line "Home"
ERROR - 2025-04-22 09:43:26 --> Could not find the language line "Other"
ERROR - 2025-04-22 09:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:51:33 --> Could not find the language line "Other"
ERROR - 2025-04-22 09:52:30 --> Could not find the language line "Other"
ERROR - 2025-04-22 09:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:54:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-22 09:54:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-22 09:54:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-22 09:54:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-22 09:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 09:54:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-22 09:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 09:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 09:54:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-22 09:54:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-22 09:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 09:54:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-22 09:55:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 09:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 09:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:01:37 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:02:32 --> Could not find the language line "Other"
ERROR - 2025-04-22 10:02:48 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 10:03:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 10:09:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:10:51 --> Could not find the language line "Perfume"
ERROR - 2025-04-22 10:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:16:45 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:22:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 10:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 10:25:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:25:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 10:25:14 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:25:16 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:29:13 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:30:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 10:33:51 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-22 10:33:51 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:33:52 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:33:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 10:37:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:55:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:57:26 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:58:29 --> Could not find the language line "Home"
ERROR - 2025-04-22 10:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:00:42 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:04:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 11:05:04 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:08:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:09:42 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:10:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-22 11:11:17 --> Could not find the language line "Other"
ERROR - 2025-04-22 11:11:39 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:11:49 --> Could not find the language line "Socks"
ERROR - 2025-04-22 11:12:03 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:15:07 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-22 11:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 11:17:17 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:20:33 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:25:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 11:26:16 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:26:26 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-22 11:37:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 11:39:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:39:42 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:45:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 11:46:54 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:49:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 11:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:49:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 11:50:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 11:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 11:55:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:55:52 --> Could not find the language line "Home"
ERROR - 2025-04-22 11:56:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:06:18 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:19:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 12:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:22:17 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:22:21 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:23:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 12:25:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:27:59 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:35:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:44:35 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 12:47:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:49:38 --> 404 Page Not Found: My-account/add-payment-method
ERROR - 2025-04-22 12:49:39 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:51:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:55:12 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:58:33 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:59:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 12:59:15 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 12:59:48 --> Could not find the language line "Home"
ERROR - 2025-04-22 12:59:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-22 13:06:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 13:08:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 13:09:03 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:17:39 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:18:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 13:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:18:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:19:30 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:19:53 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:22:25 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:24:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 13:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:25:19 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:29:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:35:20 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:36:33 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:41:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 13:41:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 13:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:43:36 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:45:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 13:46:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 13:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:51:48 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:52:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:53:13 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:53:13 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:53:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 13:54:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:54:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:55:05 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:55:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:56:33 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:56:37 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:57:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:57:37 --> Could not find the language line "Home"
ERROR - 2025-04-22 13:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 13:59:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:00:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:07:06 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-22 14:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:07:50 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-22 14:07:56 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-22 14:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:08:15 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:11:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:11:49 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:12:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 14:12:58 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:13:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:15:44 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:17:22 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:18:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:18:13 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:18:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:18:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 14:18:56 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:19:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:19:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:20:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:20:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 14:21:08 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:24:38 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-22 14:24:38 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:25:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:25:28 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:27:49 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:28:24 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:28:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 14:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:29:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 14:30:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 14:30:51 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:35:27 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:41:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 14:41:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-22 14:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:46:19 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:51:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 14:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 14:55:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:57:40 --> Could not find the language line "Home"
ERROR - 2025-04-22 14:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:04:30 --> Could not find the language line "Home"
ERROR - 2025-04-22 15:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:08:55 --> Could not find the language line "Home"
ERROR - 2025-04-22 15:10:40 --> Could not find the language line "Perfume"
ERROR - 2025-04-22 15:21:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 15:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:25:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 15:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:29:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 15:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 15:55:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:11:14 --> Could not find the language line "accounts"
ERROR - 2025-04-22 16:14:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 16:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:23:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:25:09 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:30:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 16:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:31:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:37:33 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:43:45 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:45:53 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 16:46:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:46:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:47:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:47:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:47:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 16:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:51:51 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:54:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:54:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:54:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 16:54:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 16:55:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:57:38 --> Could not find the language line "Home"
ERROR - 2025-04-22 16:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 16:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:00:20 --> Could not find the language line "accounts"
ERROR - 2025-04-22 17:00:43 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:11:36 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 17:13:09 --> Could not find the language line "accounts"
ERROR - 2025-04-22 17:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:16:14 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:18:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 17:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:24:18 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:25:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:42:59 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:51:22 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:55:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 17:57:22 --> Could not find the language line "Home"
ERROR - 2025-04-22 17:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:04:57 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:21:47 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:22:20 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:23:31 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:25:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:29:01 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:29:01 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:29:03 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:29:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:34:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:38:56 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:53:58 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:55:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 18:55:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 18:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 18:56:47 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 18:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:07:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:07:31 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:12:15 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:13:55 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:13:56 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:14:33 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:21:59 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:25:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:30:04 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:47:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 19:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:55:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:55:23 --> Could not find the language line "Home"
ERROR - 2025-04-22 19:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:55:48 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 19:56:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 19:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 19:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:03:08 --> Could not find the language line "Home"
ERROR - 2025-04-22 20:05:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 20:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:06:04 --> Could not find the language line "Home"
ERROR - 2025-04-22 20:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:14:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-22 20:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:25:12 --> Could not find the language line "Home"
ERROR - 2025-04-22 20:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 20:50:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-22 20:53:59 --> Could not find the language line "Home"
ERROR - 2025-04-22 20:55:11 --> Could not find the language line "Home"
ERROR - 2025-04-22 20:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:00:14 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:07:25 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:10:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:11:24 --> Could not find the language line "Other"
ERROR - 2025-04-22 21:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:17:44 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:20:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c907%' OR a.description LIKE '%c907%' OR a.color LIKE '%c907%' OR a.barcode LIKE '%c907%' OR a.category LIKE '%c907%' OR a.sub_category LIKE '%c907%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 21:23:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:25:17 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:26:21 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:38:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 21:40:54 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:41:33 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 21:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 21:48:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 21:50:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 21:51:26 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:55:30 --> Could not find the language line "Home"
ERROR - 2025-04-22 21:56:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 22:00:55 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:00:58 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:01:02 --> Could not find the language line "Socks"
ERROR - 2025-04-22 22:03:24 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 22:16:32 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-22 22:16:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:16:32 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:18:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 22:20:41 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:22:29 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:25:17 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:38:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 22:45:10 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:53:12 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 22:55:17 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:58:12 --> Could not find the language line "Home"
ERROR - 2025-04-22 22:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:01:48 --> Could not find the language line "accounts"
ERROR - 2025-04-22 23:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:02:40 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:13:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 23:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:16:01 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:17:06 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:19:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-22 23:19:20 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:19:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 23:20:02 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:20:04 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:25:15 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:29:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:34:00 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:38:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-22 23:40:34 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:41:16 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 23:43:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-22 23:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-22 23:49:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-22 23:55:19 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:57:26 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:58:56 --> Could not find the language line "Home"
ERROR - 2025-04-22 23:59:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-22 23:59:24 --> Could not find the language line "accounts"
