<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-15 00:15:41 --> Could not find the language line "Home"
ERROR - 2024-07-15 00:45:41 --> Could not find the language line "Home"
ERROR - 2024-07-15 00:59:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-15 01:02:58 --> Could not find the language line "Socks"
ERROR - 2024-07-15 01:05:13 --> Could not find the language line "Other"
ERROR - 2024-07-15 01:15:42 --> Could not find the language line "Home"
ERROR - 2024-07-15 01:22:18 --> Could not find the language line "Home"
ERROR - 2024-07-15 01:22:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 01:27:50 --> Could not find the language line "Home"
ERROR - 2024-07-15 01:29:04 --> Could not find the language line "Home"
ERROR - 2024-07-15 01:29:07 --> Could not find the language line "Home"
ERROR - 2024-07-15 01:29:47 --> Could not find the language line "Other"
ERROR - 2024-07-15 01:30:22 --> Could not find the language line "Socks"
ERROR - 2024-07-15 01:30:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 01:30:55 --> Could not find the language line "Bracelets"
ERROR - 2024-07-15 01:45:43 --> Could not find the language line "Home"
ERROR - 2024-07-15 02:15:42 --> Could not find the language line "Home"
ERROR - 2024-07-15 02:43:51 --> Could not find the language line "hats"
ERROR - 2024-07-15 02:45:43 --> Could not find the language line "Home"
ERROR - 2024-07-15 02:59:32 --> Could not find the language line "Home"
ERROR - 2024-07-15 03:15:42 --> Could not find the language line "Home"
ERROR - 2024-07-15 03:45:44 --> Could not find the language line "Home"
ERROR - 2024-07-15 04:07:00 --> Could not find the language line "Home"
ERROR - 2024-07-15 04:15:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 04:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 04:45:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 05:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:07:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 05:07:55 --> Could not find the language line "Home"
ERROR - 2024-07-15 05:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:09:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 05:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:09:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 05:10:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 05:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:10:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 05:10:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 05:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:10:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 05:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:15:51 --> Could not find the language line "Home"
ERROR - 2024-07-15 05:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 05:28:13 --> Could not find the language line "Socks"
ERROR - 2024-07-15 05:45:44 --> Could not find the language line "Home"
ERROR - 2024-07-15 05:48:20 --> Could not find the language line "Home"
ERROR - 2024-07-15 05:48:33 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:06:33 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:08:28 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:09:06 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:09:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 06:15:02 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:15:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-15 06:15:48 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:24:19 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:30:18 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:37:09 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:45:44 --> Could not find the language line "Home"
ERROR - 2024-07-15 06:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 06:51:00 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:05:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 07:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:11:26 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:15:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:22:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-15 07:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:38:01 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-15 07:38:02 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-15 07:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:45:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:48:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-15 07:49:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-15 07:50:00 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:50:06 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 07:53:26 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:54:22 --> Could not find the language line "Perfume"
ERROR - 2024-07-15 07:54:26 --> Could not find the language line "Home"
ERROR - 2024-07-15 07:57:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-15 08:11:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 08:11:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 08:11:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 08:12:28 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:15:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:19:34 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:27:28 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:29:40 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:35:26 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:35:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:35:52 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:35:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-15 08:37:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 08:42:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-15 08:44:28 --> Could not find the language line "Bracelets"
ERROR - 2024-07-15 08:45:46 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:51:23 --> Could not find the language line "Other"
ERROR - 2024-07-15 08:52:24 --> Could not find the language line "Home"
ERROR - 2024-07-15 08:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 08:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 08:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 08:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 08:54:43 --> Could not find the language line "Socks"
ERROR - 2024-07-15 08:54:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 08:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 08:56:50 --> Could not find the language line "Home"
ERROR - 2024-07-15 09:10:09 --> Could not find the language line "Home"
ERROR - 2024-07-15 09:15:48 --> Could not find the language line "Home"
ERROR - 2024-07-15 09:16:09 --> Could not find the language line "Home"
ERROR - 2024-07-15 09:19:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 09:19:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 09:19:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 09:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 09:23:46 --> 404 Page Not Found: CMSModules/MediaLibrary
ERROR - 2024-07-15 09:45:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 09:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 09:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 09:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 09:58:58 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:06:29 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 10:09:26 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 10:15:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:24:23 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:25:30 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 10:40:16 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:45:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 10:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-15 10:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 10:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 10:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 10:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 10:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 11:08:12 --> Could not find the language line "Perfume"
ERROR - 2024-07-15 11:15:47 --> Could not find the language line "Home"
ERROR - 2024-07-15 11:25:16 --> Could not find the language line "Home"
ERROR - 2024-07-15 11:25:45 --> Could not find the language line "Socks"
ERROR - 2024-07-15 11:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 11:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 11:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 11:45:48 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:01:44 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:02:39 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:05:18 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:15:48 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:18:54 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:21:32 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:22:32 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:27:53 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:28:06 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:28:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:29:20 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:29:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-15 12:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:31:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 12:31:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 12:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:33:41 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:36:29 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:42:39 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:45:49 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:51:13 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:51:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 12:51:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 12:51:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 12:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 12:51:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 12:52:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 12:53:37 --> Could not find the language line "Home"
ERROR - 2024-07-15 12:58:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-15 12:58:44 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 12:58:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 12:58:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 12:59:00 --> Could not find the language line "Bracelets"
ERROR - 2024-07-15 13:03:13 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-07-15 13:03:14 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:03:14 --> 404 Page Not Found: Wp/index
ERROR - 2024-07-15 13:03:14 --> 404 Page Not Found: Bc/index
ERROR - 2024-07-15 13:03:14 --> 404 Page Not Found: Bk/index
ERROR - 2024-07-15 13:03:14 --> 404 Page Not Found: Backup/index
ERROR - 2024-07-15 13:03:15 --> 404 Page Not Found: New/index
ERROR - 2024-07-15 13:03:15 --> 404 Page Not Found: Main/index
ERROR - 2024-07-15 13:03:15 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:11:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 13:11:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 13:11:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 13:12:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 13:15:49 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:24:37 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:24:46 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:25:02 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:26:32 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:30:18 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:43:03 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:45:49 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:54:16 --> Could not find the language line "Home"
ERROR - 2024-07-15 13:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:54:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 13:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 13:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:04 --> Could not find the language line "Home"
ERROR - 2024-07-15 14:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:07:15 --> Could not find the language line "Home"
ERROR - 2024-07-15 14:15:50 --> Could not find the language line "Home"
ERROR - 2024-07-15 14:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:45:50 --> Could not find the language line "Home"
ERROR - 2024-07-15 14:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:55:22 --> Could not find the language line "Home"
ERROR - 2024-07-15 14:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 14:59:11 --> Could not find the language line "Home"
ERROR - 2024-07-15 14:59:19 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:00:44 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:00:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:00:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-07-15 15:00:47 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-07-15 15:00:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-07-15 15:00:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-15 15:01:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 15:01:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 15:01:15 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 15:01:53 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:01:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 15:01:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 15:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 15:02:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 15:02:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 15:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 15:07:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:15:50 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:16:30 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:34:44 --> Could not find the language line "Home"
ERROR - 2024-07-15 15:45:51 --> Could not find the language line "Home"
ERROR - 2024-07-15 16:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 16:15:51 --> Could not find the language line "Home"
ERROR - 2024-07-15 16:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 16:41:16 --> Could not find the language line "Home"
ERROR - 2024-07-15 16:45:51 --> Could not find the language line "Home"
ERROR - 2024-07-15 16:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 16:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 16:53:12 --> Could not find the language line "Other"
ERROR - 2024-07-15 17:09:58 --> Could not find the language line "Home"
ERROR - 2024-07-15 17:15:37 --> Could not find the language line "Socks"
ERROR - 2024-07-15 17:15:53 --> Could not find the language line "Home"
ERROR - 2024-07-15 17:33:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 17:45:52 --> Could not find the language line "Home"
ERROR - 2024-07-15 17:47:28 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-07-15 17:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:15:52 --> Could not find the language line "Home"
ERROR - 2024-07-15 18:20:12 --> Could not find the language line "Home"
ERROR - 2024-07-15 18:21:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 18:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:22:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 18:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:22:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 18:22:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 18:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:24:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 18:35:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-15 18:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:38:04 --> Could not find the language line "Home"
ERROR - 2024-07-15 18:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 18:45:53 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:15:53 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 19:29:09 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:43:52 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:45:53 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:56:01 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:56:15 --> Could not find the language line "Bracelets"
ERROR - 2024-07-15 19:56:31 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:57:30 --> Could not find the language line "Home"
ERROR - 2024-07-15 19:57:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 19:57:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 19:57:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 19:58:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 19:58:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 19:58:26 --> Could not find the language line "Home"
ERROR - 2024-07-15 20:01:48 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-15 20:01:48 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-15 20:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:14:36 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-15 20:14:36 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-15 20:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:15:54 --> Could not find the language line "Home"
ERROR - 2024-07-15 20:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 20:45:54 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:07:42 --> Could not find the language line "Socks"
ERROR - 2024-07-15 21:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 21:15:55 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:30:52 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:45:56 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:56:57 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:56:57 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 21:59:20 --> Could not find the language line "Home"
ERROR - 2024-07-15 21:59:56 --> Could not find the language line "Home"
ERROR - 2024-07-15 22:00:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:00:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 22:00:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:01:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:01:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:01:45 --> Could not find the language line "Home"
ERROR - 2024-07-15 22:02:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:02:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 22:02:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:02:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 22:02:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:03:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:03:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:03:31 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:03:49 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:03:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:04:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 22:04:56 --> Could not find the language line "Home"
ERROR - 2024-07-15 22:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:15:59 --> Could not find the language line "Home"
ERROR - 2024-07-15 22:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 22:44:48 --> Could not find the language line "Home"
ERROR - 2024-07-15 22:45:57 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:02:05 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:02:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:02:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:02:36 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:02:54 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:02:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:03:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:03:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 23:03:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 23:03:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:03:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:04:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:04:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:04:26 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:04:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:04:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:04:43 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:04:46 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:04:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:04:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:05:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:05:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:05:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:05:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:05:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:05:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:05:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:05:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:06:01 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:06:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-15 23:06:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:07:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:07:06 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:07:17 --> Could not find the language line "Bracelets"
ERROR - 2024-07-15 23:08:01 --> Could not find the language line "Bracelets"
ERROR - 2024-07-15 23:08:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:08:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-15 23:08:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:08:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:08:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:08:37 --> Could not find the language line "Other"
ERROR - 2024-07-15 23:08:45 --> Could not find the language line "Other"
ERROR - 2024-07-15 23:08:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 23:09:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 23:09:21 --> Could not find the language line "Socks"
ERROR - 2024-07-15 23:09:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 23:09:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 23:10:20 --> Could not find the language line "Perfume"
ERROR - 2024-07-15 23:10:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:10:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:10:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:10:43 --> Could not find the language line "Perfume"
ERROR - 2024-07-15 23:10:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 23:10:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-15 23:10:54 --> Could not find the language line "Socks"
ERROR - 2024-07-15 23:10:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 23:10:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-15 23:10:56 --> Could not find the language line "Other"
ERROR - 2024-07-15 23:10:57 --> Could not find the language line "Other"
ERROR - 2024-07-15 23:10:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-15 23:15:56 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-15 23:35:18 --> Could not find the language line "Home"
ERROR - 2024-07-15 23:46:03 --> Could not find the language line "Home"
