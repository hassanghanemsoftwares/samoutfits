<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-25 00:14:46 --> Could not find the language line "Home"
ERROR - 2024-10-25 00:14:55 --> Could not find the language line "Home"
ERROR - 2024-10-25 00:28:40 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 00:30:41 --> Could not find the language line "Bracelets"
ERROR - 2024-10-25 00:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 00:44:41 --> Could not find the language line "Home"
ERROR - 2024-10-25 00:47:24 --> Could not find the language line "products"
ERROR - 2024-10-25 00:56:14 --> Could not find the language line "Home"
ERROR - 2024-10-25 01:14:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 01:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 01:44:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 02:12:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 02:14:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 02:44:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 02:45:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-25 02:45:10 --> Could not find the language line "Home"
ERROR - 2024-10-25 02:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 03:14:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 03:44:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 04:14:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 04:22:40 --> Could not find the language line "Home"
ERROR - 2024-10-25 04:44:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 04:56:49 --> Could not find the language line "Home"
ERROR - 2024-10-25 04:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 04:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 04:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 05:00:32 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:02:11 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 05:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 05:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 05:11:19 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:12:53 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:14:30 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:14:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:33:17 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 05:44:42 --> Could not find the language line "Home"
ERROR - 2024-10-25 05:58:42 --> Could not find the language line "Home"
ERROR - 2024-10-25 06:07:16 --> Could not find the language line "Home"
ERROR - 2024-10-25 06:07:38 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 06:14:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 06:18:42 --> Could not find the language line "Home"
ERROR - 2024-10-25 06:44:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 06:51:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 07:14:43 --> Could not find the language line "Home"
ERROR - 2024-10-25 07:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 07:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 07:44:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 08:04:28 --> Could not find the language line "Home"
ERROR - 2024-10-25 08:04:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-25 08:04:40 --> Could not find the language line "Home"
ERROR - 2024-10-25 08:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 08:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 08:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 08:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 08:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 08:14:45 --> Could not find the language line "Home"
ERROR - 2024-10-25 08:44:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 09:14:45 --> Could not find the language line "Home"
ERROR - 2024-10-25 09:19:42 --> Could not find the language line "Home"
ERROR - 2024-10-25 09:21:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 09:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 09:26:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-25 09:31:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:32:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:32:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-25 09:32:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:33:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:34:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:35:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:36:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 09:37:07 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 09:37:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-25 09:38:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-25 09:39:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-25 09:40:24 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-25 09:41:07 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-25 09:41:17 --> Could not find the language line "Home"
ERROR - 2024-10-25 09:41:40 --> Could not find the language line "Home"
ERROR - 2024-10-25 09:41:49 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-25 09:44:45 --> Could not find the language line "Home"
ERROR - 2024-10-25 09:59:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 10:02:26 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:08:48 --> Could not find the language line "Other"
ERROR - 2024-10-25 10:14:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:15:16 --> Could not find the language line "Perfume"
ERROR - 2024-10-25 10:19:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 10:28:49 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 10:31:21 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:35:06 --> Could not find the language line "Other"
ERROR - 2024-10-25 10:35:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 10:38:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:39:29 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:44:46 --> Could not find the language line "Home"
ERROR - 2024-10-25 10:48:07 --> Could not find the language line "Home"
ERROR - 2024-10-25 11:14:46 --> Could not find the language line "Home"
ERROR - 2024-10-25 11:26:26 --> Could not find the language line "products"
ERROR - 2024-10-25 11:44:46 --> Could not find the language line "Home"
ERROR - 2024-10-25 11:49:51 --> Could not find the language line "Home"
ERROR - 2024-10-25 12:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 12:13:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 12:14:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 12:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 12:19:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 12:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 12:29:27 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 12:32:21 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-25 12:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 12:44:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 12:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 12:57:49 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 13:14:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-25 13:14:27 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:14:48 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:15:07 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 13:15:12 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:15:16 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:19:34 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:22:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 13:34:57 --> Could not find the language line "Home"
ERROR - 2024-10-25 13:44:48 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:14:48 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:19:33 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:29:39 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 14:44:48 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:47:45 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:47:47 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:47:48 --> Could not find the language line "Home"
ERROR - 2024-10-25 14:47:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:01:32 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:04:45 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 15:07:56 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:07:59 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 15:12:37 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-25 15:12:38 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:14:48 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:27:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-25 15:27:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-25 15:35:52 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:38:46 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:40:11 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:41:38 --> Could not find the language line "Home"
ERROR - 2024-10-25 15:44:49 --> Could not find the language line "Home"
ERROR - 2024-10-25 16:10:10 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 16:14:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 16:14:52 --> Could not find the language line "Home"
ERROR - 2024-10-25 16:38:13 --> Could not find the language line "Home"
ERROR - 2024-10-25 16:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 16:44:49 --> Could not find the language line "Home"
ERROR - 2024-10-25 17:14:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 17:19:22 --> Could not find the language line "Home"
ERROR - 2024-10-25 17:33:17 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 17:44:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 17:55:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:14:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 18:20:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-25 18:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 18:44:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 18:48:59 --> Could not find the language line "Home"
ERROR - 2024-10-25 18:49:31 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-25 18:49:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-10-25 18:51:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:51:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 18:52:13 --> Could not find the language line "Other"
ERROR - 2024-10-25 18:52:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 18:52:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 18:53:18 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:53:26 --> Could not find the language line "Perfume"
ERROR - 2024-10-25 18:53:40 --> Could not find the language line "Bracelets"
ERROR - 2024-10-25 18:54:02 --> Could not find the language line "Other"
ERROR - 2024-10-25 18:54:28 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:54:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:54:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 18:54:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:55:14 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:55:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-25 18:56:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 18:56:47 --> Could not find the language line "Other"
ERROR - 2024-10-25 18:57:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:57:15 --> Could not find the language line "Other"
ERROR - 2024-10-25 18:57:23 --> Could not find the language line "Other"
ERROR - 2024-10-25 18:57:27 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 18:57:56 --> Could not find the language line "Socks"
ERROR - 2024-10-25 18:57:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 19:03:39 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-25 19:03:46 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-25 19:04:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-10-25 19:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-25 19:10:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-25 19:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 19:12:28 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-25 19:12:45 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-25 19:13:04 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-25 19:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 19:13:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 19:14:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 19:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 19:16:22 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-25 19:16:22 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-25 19:16:23 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-25 19:16:26 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-25 19:16:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 19:31:34 --> Could not find the language line "Home"
ERROR - 2024-10-25 19:35:20 --> Could not find the language line "Home"
ERROR - 2024-10-25 19:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 19:44:50 --> Could not find the language line "Home"
ERROR - 2024-10-25 19:54:23 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-25 20:14:51 --> Could not find the language line "Home"
ERROR - 2024-10-25 20:24:20 --> 404 Page Not Found: Licensetxt/index
ERROR - 2024-10-25 20:30:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-25 20:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 20:44:51 --> Could not find the language line "Home"
ERROR - 2024-10-25 20:48:05 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-25 20:50:08 --> Could not find the language line "Home"
ERROR - 2024-10-25 20:55:09 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:03:12 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:05:26 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:11:16 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:13:44 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:14:52 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 21:40:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-25 21:44:35 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-25 21:44:35 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:44:35 --> Could not find the language line "Home"
ERROR - 2024-10-25 21:44:53 --> Could not find the language line "Home"
ERROR - 2024-10-25 22:13:57 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:14:53 --> Could not find the language line "Home"
ERROR - 2024-10-25 22:15:30 --> Could not find the language line "Other"
ERROR - 2024-10-25 22:15:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 22:15:31 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:15:32 --> Could not find the language line "Other"
ERROR - 2024-10-25 22:15:32 --> Could not find the language line "Other"
ERROR - 2024-10-25 22:15:33 --> Could not find the language line "Other"
ERROR - 2024-10-25 22:15:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:15:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 22:20:26 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-25 22:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 22:32:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 22:32:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 22:32:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:32:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:32:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-25 22:32:56 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:32:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-25 22:32:59 --> Could not find the language line "Home"
ERROR - 2024-10-25 22:44:55 --> Could not find the language line "Home"
ERROR - 2024-10-25 23:14:56 --> Could not find the language line "Home"
ERROR - 2024-10-25 23:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 23:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 23:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 23:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-25 23:45:02 --> Could not find the language line "Home"
ERROR - 2024-10-25 23:56:22 --> Could not find the language line "Home"
