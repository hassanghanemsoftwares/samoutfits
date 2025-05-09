<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-15 00:06:26 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 00:07:48 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 00:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 00:18:19 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 00:19:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:25:33 --> Could not find the language line "Socks"
ERROR - 2025-03-15 00:28:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-15 00:28:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-15 00:30:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-15 00:30:18 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:30:18 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:31:38 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 00:35:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-15 00:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 00:47:17 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:47:18 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:47:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-15 00:49:14 --> Could not find the language line "Home"
ERROR - 2025-03-15 00:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 01:19:15 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:23:51 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:26:29 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:26:40 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 01:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 01:46:10 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:46:38 --> 404 Page Not Found: Assets/images
ERROR - 2025-03-15 01:46:38 --> 404 Page Not Found: Assets/images
ERROR - 2025-03-15 01:46:51 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:49:07 --> Could not find the language line "Home"
ERROR - 2025-03-15 01:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 01:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 02:01:27 --> Could not find the language line "Other"
ERROR - 2025-03-15 02:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 02:09:17 --> 404 Page Not Found: Media/system
ERROR - 2025-03-15 02:09:18 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-03-15 02:16:43 --> Could not find the language line "Home"
ERROR - 2025-03-15 02:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 02:19:01 --> Could not find the language line "Home"
ERROR - 2025-03-15 02:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 02:20:28 --> Could not find the language line "Home"
ERROR - 2025-03-15 02:21:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 02:23:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 02:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 02:40:13 --> Could not find the language line "Socks"
ERROR - 2025-03-15 02:44:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-15 02:44:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-15 02:44:26 --> Could not find the language line "Home"
ERROR - 2025-03-15 02:49:04 --> Could not find the language line "Home"
ERROR - 2025-03-15 03:00:28 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-15 03:01:45 --> Could not find the language line "Other"
ERROR - 2025-03-15 03:03:19 --> Could not find the language line "Home"
ERROR - 2025-03-15 03:04:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:38 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-15 03:05:46 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 03:05:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-15 03:06:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-15 03:06:08 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-15 03:06:15 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-15 03:06:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-15 03:06:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-15 03:07:20 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 03:07:34 --> 404 Page Not Found: _fragment/index
ERROR - 2025-03-15 03:13:14 --> Could not find the language line "Home"
ERROR - 2025-03-15 03:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:17:41 --> Could not find the language line "Home"
ERROR - 2025-03-15 03:17:51 --> Could not find the language line "Socks"
ERROR - 2025-03-15 03:18:06 --> Could not find the language line "Socks"
ERROR - 2025-03-15 03:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:18:26 --> Could not find the language line "Socks"
ERROR - 2025-03-15 03:18:43 --> Could not find the language line "Socks"
ERROR - 2025-03-15 03:19:03 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 03:19:07 --> Could not find the language line "Home"
ERROR - 2025-03-15 03:19:07 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 03:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:23:49 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 03:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 03:30:32 --> Could not find the language line "Other"
ERROR - 2025-03-15 03:49:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 03:49:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 03:54:45 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 04:19:06 --> Could not find the language line "Home"
ERROR - 2025-03-15 04:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 04:46:43 --> Could not find the language line "Home"
ERROR - 2025-03-15 04:46:54 --> Could not find the language line "Home"
ERROR - 2025-03-15 04:47:33 --> Could not find the language line "Home"
ERROR - 2025-03-15 04:49:07 --> Could not find the language line "Home"
ERROR - 2025-03-15 04:51:51 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 04:53:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-15 05:05:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 05:16:46 --> Could not find the language line "Other"
ERROR - 2025-03-15 05:19:07 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:24:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-15 05:28:47 --> Could not find the language line "Socks"
ERROR - 2025-03-15 05:39:47 --> Could not find the language line "Disclaimer"
ERROR - 2025-03-15 05:43:03 --> Could not find the language line "Other"
ERROR - 2025-03-15 05:45:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:45:42 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:45:48 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:45:48 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:45:53 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:49:04 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:55:51 --> Could not find the language line "Home"
ERROR - 2025-03-15 05:56:13 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-15 05:59:50 --> Could not find the language line "Home"
ERROR - 2025-03-15 06:00:49 --> Could not find the language line "Home"
ERROR - 2025-03-15 06:10:41 --> Could not find the language line "Crocs"
ERROR - 2025-03-15 06:12:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 06:13:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-15 06:15:41 --> Could not find the language line "Home"
ERROR - 2025-03-15 06:19:04 --> Could not find the language line "Home"
ERROR - 2025-03-15 06:19:35 --> Could not find the language line "Home"
ERROR - 2025-03-15 06:20:14 --> Could not find the language line "Other"
ERROR - 2025-03-15 06:39:30 --> Could not find the language line "Home"
ERROR - 2025-03-15 06:49:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:00:20 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 07:09:25 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 07:19:04 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 07:23:25 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 07:34:01 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:34:04 --> Could not find the language line "Other"
ERROR - 2025-03-15 07:34:12 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-15 07:34:12 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:34:12 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 07:44:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 07:49:06 --> Could not find the language line "Home"
ERROR - 2025-03-15 07:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 08:09:35 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 08:11:42 --> Could not find the language line "Other"
ERROR - 2025-03-15 08:14:37 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 08:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 08:19:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 08:33:43 --> 404 Page Not Found: Media/system
ERROR - 2025-03-15 08:33:44 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-03-15 08:42:54 --> 404 Page Not Found: Git/config
ERROR - 2025-03-15 08:49:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 08:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 08:56:01 --> Could not find the language line "Home"
ERROR - 2025-03-15 08:56:03 --> Could not find the language line "Home"
ERROR - 2025-03-15 08:56:10 --> Could not find the language line "Home"
ERROR - 2025-03-15 08:56:10 --> Could not find the language line "Home"
ERROR - 2025-03-15 08:56:16 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:00:04 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:01:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-15 09:06:07 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 09:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 09:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 09:15:57 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 09:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 09:19:06 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:19:17 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:19:17 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:23:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-15 09:24:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-15 09:34:26 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:49:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:59:23 --> Could not find the language line "Home"
ERROR - 2025-03-15 09:59:32 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:10:01 --> Could not find the language line "users"
ERROR - 2025-03-15 10:10:07 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 10:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 10:11:54 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:12:16 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 10:12:20 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 10:13:41 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:13:49 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 10:18:17 --> Could not find the language line "accounts"
ERROR - 2025-03-15 10:19:07 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 10:24:35 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:25:37 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:30:35 --> Could not find the language line "accounts"
ERROR - 2025-03-15 10:39:56 --> Could not find the language line "products"
ERROR - 2025-03-15 10:49:06 --> Could not find the language line "Home"
ERROR - 2025-03-15 10:49:08 --> Could not find the language line "products"
ERROR - 2025-03-15 10:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:05:30 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:13:33 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:19:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:20:35 --> Could not find the language line "Socks"
ERROR - 2025-03-15 11:20:52 --> Could not find the language line "Socks"
ERROR - 2025-03-15 11:30:32 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:31:34 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-03-15 11:31:34 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-03-15 11:31:34 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-03-15 11:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:31:36 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-03-15 11:31:36 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-15 11:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:31:58 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-03-15 11:32:05 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-03-15 11:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:33:27 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:35:13 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:35:13 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-15 11:38:44 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:40:23 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:42:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:42:18 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:42:19 --> Could not find the language line "Home"
ERROR - 2025-03-15 11:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:44:14 --> Could not find the language line "Other"
ERROR - 2025-03-15 11:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 11:49:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:01:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-15 12:05:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 12:07:33 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 12:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 12:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 12:16:11 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:19:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 12:31:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:33:04 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 12:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 12:39:54 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-15 12:40:49 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-15 12:42:46 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:46:38 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:49:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 12:52:19 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:05:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 13:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 13:13:42 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:14:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:14:14 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:15:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:15:35 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:16:15 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:16:16 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:19:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:22:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:22:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:29:37 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:49:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 13:54:18 --> Could not find the language line "Other"
ERROR - 2025-03-15 14:04:33 --> Could not find the language line "Home"
ERROR - 2025-03-15 14:06:08 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-15 14:06:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 14:06:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 14:16:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 14:19:10 --> Could not find the language line "Home"
ERROR - 2025-03-15 14:22:01 --> Could not find the language line "Socks"
ERROR - 2025-03-15 14:23:09 --> Could not find the language line "Socks"
ERROR - 2025-03-15 14:26:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-15 14:27:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-15 14:35:19 --> Could not find the language line "Home"
ERROR - 2025-03-15 14:39:38 --> Could not find the language line "Socks"
ERROR - 2025-03-15 14:49:10 --> Could not find the language line "Home"
ERROR - 2025-03-15 14:53:05 --> Could not find the language line "Home"
ERROR - 2025-03-15 15:14:13 --> Could not find the language line "Home"
ERROR - 2025-03-15 15:19:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 15:20:17 --> Could not find the language line "Socks"
ERROR - 2025-03-15 15:20:49 --> Could not find the language line "Socks"
ERROR - 2025-03-15 15:21:22 --> Could not find the language line "Socks"
ERROR - 2025-03-15 15:21:29 --> Could not find the language line "Socks"
ERROR - 2025-03-15 15:33:59 --> Could not find the language line "Home"
ERROR - 2025-03-15 15:42:39 --> Could not find the language line "Home"
ERROR - 2025-03-15 15:43:55 --> Could not find the language line "Home"
ERROR - 2025-03-15 15:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 15:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-15 15:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-15 15:49:11 --> Could not find the language line "Home"
ERROR - 2025-03-15 16:19:10 --> Could not find the language line "Home"
ERROR - 2025-03-15 16:19:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 16:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 16:27:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-15 16:30:14 --> Could not find the language line "Home"
ERROR - 2025-03-15 16:49:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 17:02:20 --> Could not find the language line "Home"
ERROR - 2025-03-15 17:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 17:19:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 17:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 17:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 17:46:21 --> Could not find the language line "Home"
ERROR - 2025-03-15 17:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 17:46:30 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 17:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 17:49:11 --> Could not find the language line "Home"
ERROR - 2025-03-15 17:57:55 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:19:11 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:33:57 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:35:54 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:35:54 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 18:44:37 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:49:12 --> Could not find the language line "Home"
ERROR - 2025-03-15 18:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:15:54 --> Could not find the language line "Home"
ERROR - 2025-03-15 19:19:11 --> Could not find the language line "Home"
ERROR - 2025-03-15 19:39:09 --> Could not find the language line "Home"
ERROR - 2025-03-15 19:45:14 --> Could not find the language line "Home"
ERROR - 2025-03-15 19:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:49:12 --> Could not find the language line "Home"
ERROR - 2025-03-15 19:49:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:49:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:49:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:50:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:50:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:50:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:50:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:51:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:51:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:51:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:52:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:52:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:52:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:52:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:52:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 19:52:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:52:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 19:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:53:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 19:53:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 19:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 19:55:44 --> Could not find the language line "Home"
ERROR - 2025-03-15 19:59:14 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:16:12 --> Could not find the language line "Clothing"
ERROR - 2025-03-15 20:19:12 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:20:36 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:20:41 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:20:46 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:20:52 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:21:01 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:21:40 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 20:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 20:29:27 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:29:30 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:30:39 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:37:34 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:37:34 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:37:35 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:37:37 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:37:38 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:37:39 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:38:19 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:39:22 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:44:22 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:49:12 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 20:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 20:56:22 --> Could not find the language line "Home"
ERROR - 2025-03-15 20:58:20 --> Could not find the language line "Home"
ERROR - 2025-03-15 21:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 21:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 21:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 21:19:13 --> Could not find the language line "Home"
ERROR - 2025-03-15 21:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 21:19:35 --> Could not find the language line "Home"
ERROR - 2025-03-15 21:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 21:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-15 21:40:56 --> Could not find the language line "Home"
ERROR - 2025-03-15 21:49:13 --> Could not find the language line "Home"
ERROR - 2025-03-15 21:51:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-15 21:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:19:13 --> Could not find the language line "Home"
ERROR - 2025-03-15 22:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:49:17 --> Could not find the language line "Home"
ERROR - 2025-03-15 22:52:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-15 22:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:58:27 --> Could not find the language line "Home"
ERROR - 2025-03-15 22:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:58:59 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 22:59:16 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 22:59:19 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 22:59:23 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 22:59:24 --> Could not find the language line "Perfume"
ERROR - 2025-03-15 22:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 22:59:37 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-15 23:00:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 23:00:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-15 23:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 23:19:17 --> Could not find the language line "Home"
ERROR - 2025-03-15 23:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 23:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 23:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 23:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 23:49:15 --> Could not find the language line "Home"
ERROR - 2025-03-15 23:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-15 23:50:28 --> Could not find the language line "Home"
ERROR - 2025-03-15 23:50:39 --> Could not find the language line "Home"
ERROR - 2025-03-15 23:55:08 --> Could not find the language line "Home"
ERROR - 2025-03-15 23:57:06 --> 404 Page Not Found: Git/config
