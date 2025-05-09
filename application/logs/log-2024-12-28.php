<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-28 00:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 00:13:13 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-12-28 00:13:13 --> Could not find the language line "Bracelets"
ERROR - 2024-12-28 00:13:13 --> Could not find the language line "Bracelets"
ERROR - 2024-12-28 00:15:27 --> Could not find the language line "Home"
ERROR - 2024-12-28 00:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 00:27:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 00:37:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-28 00:45:27 --> Could not find the language line "Home"
ERROR - 2024-12-28 01:15:27 --> Could not find the language line "Home"
ERROR - 2024-12-28 01:43:40 --> Could not find the language line "Home"
ERROR - 2024-12-28 01:45:28 --> Could not find the language line "Home"
ERROR - 2024-12-28 02:15:28 --> Could not find the language line "Home"
ERROR - 2024-12-28 02:35:52 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-12-28 02:35:52 --> Could not find the language line "Home"
ERROR - 2024-12-28 02:35:53 --> 404 Page Not Found: Wp/index
ERROR - 2024-12-28 02:35:53 --> 404 Page Not Found: Bc/index
ERROR - 2024-12-28 02:35:53 --> 404 Page Not Found: Bk/index
ERROR - 2024-12-28 02:35:53 --> 404 Page Not Found: Backup/index
ERROR - 2024-12-28 02:35:54 --> 404 Page Not Found: New/index
ERROR - 2024-12-28 02:35:54 --> 404 Page Not Found: Main/index
ERROR - 2024-12-28 02:35:55 --> Could not find the language line "Home"
ERROR - 2024-12-28 02:45:29 --> Could not find the language line "Home"
ERROR - 2024-12-28 02:57:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 03:09:36 --> Could not find the language line "Home"
ERROR - 2024-12-28 03:15:29 --> Could not find the language line "Home"
ERROR - 2024-12-28 03:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 03:31:26 --> Could not find the language line "Perfume"
ERROR - 2024-12-28 03:45:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:15:36 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:21:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 04:29:11 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 04:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 04:36:23 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:36:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 04:45:33 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:49:19 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:49:28 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:50:48 --> Could not find the language line "Home"
ERROR - 2024-12-28 04:57:52 --> Could not find the language line "Home"
ERROR - 2024-12-28 05:05:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-28 05:15:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 05:19:21 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 05:28:08 --> Could not find the language line "Home"
ERROR - 2024-12-28 05:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 05:31:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 05:36:14 --> Could not find the language line "Home"
ERROR - 2024-12-28 05:45:31 --> Could not find the language line "Home"
ERROR - 2024-12-28 05:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 06:15:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 06:27:21 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-28 06:27:21 --> Could not find the language line "Home"
ERROR - 2024-12-28 06:28:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-28 06:38:20 --> Could not find the language line "Other"
ERROR - 2024-12-28 06:45:32 --> Could not find the language line "Home"
ERROR - 2024-12-28 06:59:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-28 06:59:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-28 07:15:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 07:16:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 07:17:02 --> Could not find the language line "Home"
ERROR - 2024-12-28 07:19:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 07:20:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 07:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:26:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-28 07:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:35:17 --> Could not find the language line "Home"
ERROR - 2024-12-28 07:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 07:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:45:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 07:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 07:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:02:15 --> Could not find the language line "Home"
ERROR - 2024-12-28 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:14:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-28 08:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:15:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 08:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:15:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 08:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:41:34 --> 404 Page Not Found: Products/products
ERROR - 2024-12-28 08:45:30 --> Could not find the language line "Home"
ERROR - 2024-12-28 08:50:11 --> Could not find the language line "Home"
ERROR - 2024-12-28 08:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 08:58:41 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:00:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-28 09:00:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-28 09:05:38 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:11:44 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:13:43 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:15:31 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:21:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-28 09:26:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 09:26:31 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:28:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-28 09:28:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-28 09:28:40 --> Could not find the language line "Socks"
ERROR - 2024-12-28 09:28:47 --> Could not find the language line "Socks"
ERROR - 2024-12-28 09:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:31:06 --> Could not find the language line "Socks"
ERROR - 2024-12-28 09:31:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-28 09:36:44 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-12-28 09:36:44 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:36:44 --> 404 Page Not Found: Wp/index
ERROR - 2024-12-28 09:36:45 --> 404 Page Not Found: Bc/index
ERROR - 2024-12-28 09:36:45 --> 404 Page Not Found: Bk/index
ERROR - 2024-12-28 09:36:45 --> 404 Page Not Found: Backup/index
ERROR - 2024-12-28 09:36:46 --> 404 Page Not Found: New/index
ERROR - 2024-12-28 09:36:46 --> 404 Page Not Found: Main/index
ERROR - 2024-12-28 09:36:46 --> Could not find the language line "Home"
ERROR - 2024-12-28 09:38:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-28 09:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 09:39:44 --> Could not find the language line "Other"
ERROR - 2024-12-28 09:45:32 --> Could not find the language line "Home"
ERROR - 2024-12-28 10:15:31 --> Could not find the language line "Home"
ERROR - 2024-12-28 10:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 10:45:32 --> Could not find the language line "Home"
ERROR - 2024-12-28 10:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 11:04:12 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:12:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-28 11:15:32 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:29:54 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:45:33 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:49:31 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:51:43 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:57:06 --> Could not find the language line "Home"
ERROR - 2024-12-28 11:58:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-28 12:02:51 --> Could not find the language line "Socks"
ERROR - 2024-12-28 12:03:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-28 12:03:29 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:03:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-28 12:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 12:08:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 12:12:19 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:15:32 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:20:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 12:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 12:20:21 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 12:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 12:20:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 12:28:25 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 12:42:27 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:42:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-28 12:43:39 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:45:33 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:48:27 --> Could not find the language line "Home"
ERROR - 2024-12-28 12:56:28 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:03:27 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:10:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 13:10:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 13:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 13:10:34 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:11:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 13:13:59 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:14:18 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:14:25 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:14:29 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 13:14:59 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:15:00 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:15:33 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 13:40:46 --> Could not find the language line "Home"
ERROR - 2024-12-28 13:45:33 --> Could not find the language line "Home"
ERROR - 2024-12-28 14:11:48 --> Could not find the language line "products"
ERROR - 2024-12-28 14:15:34 --> Could not find the language line "Home"
ERROR - 2024-12-28 14:15:36 --> Could not find the language line "Home"
ERROR - 2024-12-28 14:20:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-28 14:37:49 --> Could not find the language line "Home"
ERROR - 2024-12-28 14:37:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-12-28 14:37:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-12-28 14:37:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-28 14:37:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-28 14:45:34 --> Could not find the language line "Home"
ERROR - 2024-12-28 15:15:34 --> Could not find the language line "Home"
ERROR - 2024-12-28 15:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 15:45:34 --> Could not find the language line "Home"
ERROR - 2024-12-28 16:15:34 --> Could not find the language line "Home"
ERROR - 2024-12-28 16:18:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 16:26:01 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-12-28 16:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 16:40:08 --> Could not find the language line "Home"
ERROR - 2024-12-28 16:45:35 --> Could not find the language line "Home"
ERROR - 2024-12-28 16:47:39 --> Could not find the language line "Home"
ERROR - 2024-12-28 16:47:53 --> Could not find the language line "Home"
ERROR - 2024-12-28 16:48:08 --> Could not find the language line "Home"
ERROR - 2024-12-28 17:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 17:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 17:15:35 --> Could not find the language line "Home"
ERROR - 2024-12-28 17:34:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-28 17:45:35 --> Could not find the language line "Home"
ERROR - 2024-12-28 17:46:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-28 18:11:48 --> Could not find the language line "Other"
ERROR - 2024-12-28 18:15:36 --> Could not find the language line "Home"
ERROR - 2024-12-28 18:27:08 --> Could not find the language line "Home"
ERROR - 2024-12-28 18:45:36 --> Could not find the language line "Home"
ERROR - 2024-12-28 19:00:10 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-28 19:07:20 --> Could not find the language line "Perfume"
ERROR - 2024-12-28 19:15:36 --> Could not find the language line "Home"
ERROR - 2024-12-28 19:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 19:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 19:20:45 --> Could not find the language line "Home"
ERROR - 2024-12-28 19:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 19:40:58 --> Could not find the language line "Home"
ERROR - 2024-12-28 19:45:37 --> Could not find the language line "Home"
ERROR - 2024-12-28 19:54:28 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:03:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:03:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:03:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:03:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:03:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:03:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:03:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-28 20:04:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-28 20:04:14 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-28 20:04:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-28 20:04:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-28 20:04:42 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-28 20:04:49 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-28 20:04:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-28 20:11:15 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:12:08 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:15:37 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 20:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 20:18:54 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:24:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 20:29:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 20:30:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-28 20:40:56 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:41:49 --> Could not find the language line "Home"
ERROR - 2024-12-28 20:45:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-28 20:45:38 --> Could not find the language line "Home"
ERROR - 2024-12-28 21:00:20 --> Could not find the language line "Home"
ERROR - 2024-12-28 21:15:40 --> Could not find the language line "Home"
ERROR - 2024-12-28 21:24:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-28 21:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 21:45:38 --> Could not find the language line "Home"
ERROR - 2024-12-28 22:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-28 22:15:30 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-28 22:15:38 --> Could not find the language line "Home"
ERROR - 2024-12-28 22:45:41 --> Could not find the language line "Home"
ERROR - 2024-12-28 23:15:40 --> Could not find the language line "Home"
ERROR - 2024-12-28 23:26:05 --> Could not find the language line "Home"
ERROR - 2024-12-28 23:36:04 --> Could not find the language line "Home"
ERROR - 2024-12-28 23:45:41 --> Could not find the language line "Home"
