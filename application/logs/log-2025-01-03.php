<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-03 00:16:51 --> Could not find the language line "Home"
ERROR - 2025-01-03 00:46:49 --> Could not find the language line "Home"
ERROR - 2025-01-03 00:49:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-03 00:49:59 --> Could not find the language line "Home"
ERROR - 2025-01-03 01:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-03 01:16:49 --> Could not find the language line "Home"
ERROR - 2025-01-03 01:27:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-03 01:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 01:46:51 --> Could not find the language line "Home"
ERROR - 2025-01-03 02:03:47 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-03 02:05:57 --> Could not find the language line "Home"
ERROR - 2025-01-03 02:16:49 --> Could not find the language line "Home"
ERROR - 2025-01-03 02:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 02:46:52 --> Could not find the language line "Home"
ERROR - 2025-01-03 02:53:06 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-03 02:53:07 --> Could not find the language line "Home"
ERROR - 2025-01-03 02:53:07 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-03 02:53:07 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-03 02:53:07 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-03 02:53:07 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-03 02:53:08 --> 404 Page Not Found: New/index
ERROR - 2025-01-03 02:53:08 --> 404 Page Not Found: Main/index
ERROR - 2025-01-03 02:53:09 --> Could not find the language line "Home"
ERROR - 2025-01-03 03:16:52 --> Could not find the language line "Home"
ERROR - 2025-01-03 03:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 03:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 03:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 03:42:24 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2025-01-03 03:46:51 --> Could not find the language line "Home"
ERROR - 2025-01-03 04:16:55 --> Could not find the language line "Home"
ERROR - 2025-01-03 04:21:09 --> Could not find the language line "Home"
ERROR - 2025-01-03 04:21:10 --> Could not find the language line "products"
ERROR - 2025-01-03 04:33:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 04:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 04:42:12 --> Could not find the language line "Home"
ERROR - 2025-01-03 04:43:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 04:46:54 --> Could not find the language line "Home"
ERROR - 2025-01-03 05:16:57 --> Could not find the language line "Home"
ERROR - 2025-01-03 05:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 05:29:20 --> Could not find the language line "Home"
ERROR - 2025-01-03 05:46:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 05:59:18 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:09:21 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:12:25 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:16:52 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:25:32 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 06:31:37 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:46:55 --> Could not find the language line "Home"
ERROR - 2025-01-03 06:58:35 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:08:38 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:12:36 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:14:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:16:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 07:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 07:21:02 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:21:14 --> Could not find the language line "Perfume"
ERROR - 2025-01-03 07:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 07:21:16 --> Could not find the language line "Perfume"
ERROR - 2025-01-03 07:21:19 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 07:21:24 --> Could not find the language line "Home"
ERROR - 2025-01-03 07:39:43 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-03 07:46:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 08:16:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 08:18:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-03 08:46:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 08:48:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-03 08:48:03 --> Could not find the language line "Home"
ERROR - 2025-01-03 08:51:17 --> Could not find the language line "Home"
ERROR - 2025-01-03 08:52:49 --> Could not find the language line "Home"
ERROR - 2025-01-03 09:16:54 --> Could not find the language line "Home"
ERROR - 2025-01-03 09:20:25 --> Could not find the language line "Home"
ERROR - 2025-01-03 09:20:48 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 09:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 09:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 09:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 09:46:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 09:47:05 --> Could not find the language line "Home"
ERROR - 2025-01-03 09:49:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 09:50:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 09:51:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 09:57:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 10:16:53 --> Could not find the language line "Home"
ERROR - 2025-01-03 10:32:47 --> Could not find the language line "Home"
ERROR - 2025-01-03 10:40:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-03 10:40:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-03 10:41:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-03 10:42:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-03 10:46:54 --> Could not find the language line "Home"
ERROR - 2025-01-03 10:51:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-03 11:16:54 --> Could not find the language line "Home"
ERROR - 2025-01-03 11:46:55 --> Could not find the language line "Home"
ERROR - 2025-01-03 12:16:55 --> Could not find the language line "Home"
ERROR - 2025-01-03 12:34:13 --> Could not find the language line "Home"
ERROR - 2025-01-03 12:46:55 --> Could not find the language line "Home"
ERROR - 2025-01-03 13:16:56 --> Could not find the language line "Home"
ERROR - 2025-01-03 13:22:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-03 13:32:59 --> Could not find the language line "Home"
ERROR - 2025-01-03 13:46:56 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:12:27 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-03 14:12:27 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:16:55 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:20:32 --> 404 Page Not Found: Media/system
ERROR - 2025-01-03 14:20:34 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-01-03 14:24:22 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:26:50 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:31:41 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:34:46 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-03 14:34:46 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:34:46 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 14:46:11 --> Could not find the language line "Home"
ERROR - 2025-01-03 14:46:56 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:13:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-03 15:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-03 15:16:56 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:23:01 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:25:04 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:31:06 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:46:56 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 15:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 15:53:15 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-03 15:53:15 --> Could not find the language line "Home"
ERROR - 2025-01-03 15:53:15 --> Could not find the language line "Home"
ERROR - 2025-01-03 16:16:56 --> Could not find the language line "Home"
ERROR - 2025-01-03 16:33:51 --> Could not find the language line "Home"
ERROR - 2025-01-03 16:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 16:46:57 --> Could not find the language line "Home"
ERROR - 2025-01-03 16:53:22 --> Could not find the language line "Home"
ERROR - 2025-01-03 17:01:50 --> Could not find the language line "Home"
ERROR - 2025-01-03 17:12:57 --> Could not find the language line "Home"
ERROR - 2025-01-03 17:16:57 --> Could not find the language line "Home"
ERROR - 2025-01-03 17:46:58 --> Could not find the language line "Home"
ERROR - 2025-01-03 18:16:58 --> Could not find the language line "Home"
ERROR - 2025-01-03 18:27:32 --> Could not find the language line "Home"
ERROR - 2025-01-03 18:33:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 18:34:50 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 18:36:02 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 18:37:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 18:41:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 18:42:19 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 18:46:43 --> Could not find the language line "Home"
ERROR - 2025-01-03 18:46:58 --> Could not find the language line "Home"
ERROR - 2025-01-03 18:49:12 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 18:55:56 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 19:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 19:16:59 --> Could not find the language line "Home"
ERROR - 2025-01-03 19:46:59 --> Could not find the language line "Home"
ERROR - 2025-01-03 20:16:59 --> Could not find the language line "Home"
ERROR - 2025-01-03 20:18:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-03 20:38:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 20:41:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-03 20:46:59 --> Could not find the language line "Home"
ERROR - 2025-01-03 20:56:57 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-03 21:17:00 --> Could not find the language line "Home"
ERROR - 2025-01-03 21:18:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-03 21:47:00 --> Could not find the language line "Home"
ERROR - 2025-01-03 21:47:58 --> Could not find the language line "Home"
ERROR - 2025-01-03 22:17:01 --> Could not find the language line "Home"
ERROR - 2025-01-03 22:18:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 22:20:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 22:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 22:21:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 22:22:03 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-03 22:25:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:16 --> Could not find the language line "Home"
ERROR - 2025-01-03 22:25:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-03 22:25:37 --> Could not find the language line "Clothing"
ERROR - 2025-01-03 22:25:42 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 22:25:47 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 22:25:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 22:25:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 22:26:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 22:26:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-03 22:41:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-03 22:42:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-03 22:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 22:45:00 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-03 22:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 22:46:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-03 22:47:01 --> Could not find the language line "Home"
ERROR - 2025-01-03 22:51:32 --> Could not find the language line "Home"
ERROR - 2025-01-03 22:59:05 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 23:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-03 23:17:05 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:17:30 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:24:21 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-03 23:27:57 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:28:30 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:41:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-03 23:47:02 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:50:52 --> Could not find the language line "Home"
ERROR - 2025-01-03 23:58:56 --> Could not find the language line "Home"
