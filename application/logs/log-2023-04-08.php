<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-08 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 00:09:04 --> Could not find the language line "Home"
ERROR - 2023-04-08 00:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 00:12:18 --> Could not find the language line "Home"
ERROR - 2023-04-08 00:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 00:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 00:43:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 00:48:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-08 00:56:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-08 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 01:15:24 --> Could not find the language line "Home"
ERROR - 2023-04-08 01:19:56 --> Could not find the language line "Home"
ERROR - 2023-04-08 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 01:53:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 01:55:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-08 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:01:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 02:02:01 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:09:38 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 02:11:59 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:12:41 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:39:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 02:41:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 02:41:31 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:41:34 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:44:48 --> Could not find the language line "Home"
ERROR - 2023-04-08 02:46:55 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:04:07 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:19:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:25:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:34:18 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:34:51 --> Could not find the language line "Perfume"
ERROR - 2023-04-08 03:35:15 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:45:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 03:47:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 03:47:17 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:47:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 03:47:51 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:49:43 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 03:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 03:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 03:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 03:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 03:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 03:52:47 --> Could not find the language line "Home"
ERROR - 2023-04-08 03:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 04:15:17 --> Could not find the language line "Home"
ERROR - 2023-04-08 04:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-08 04:28:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 04:53:27 --> Could not find the language line "Home"
ERROR - 2023-04-08 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 05:56:48 --> Could not find the language line "Home"
ERROR - 2023-04-08 05:57:31 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:01:52 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:04:29 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:04:36 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:08:54 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:08:58 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:32:19 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:39:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 06:39:14 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:42:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:50:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:53:43 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:54:12 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-04-08 06:54:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-04-08 06:54:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-04-08 06:54:24 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-04-08 06:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:56:33 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:58:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 06:58:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:58:25 --> Could not find the language line "Home"
ERROR - 2023-04-08 06:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 06:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:03:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:07:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 07:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:09:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 07:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:10:20 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:10:29 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:10:50 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:11:06 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:15:26 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:20:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 07:20:49 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:22:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:22:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 07:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:22:37 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:22:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 07:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:22:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 07:23:09 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:23:32 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:24:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:25:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:32:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:32:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:33:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 07:33:33 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:33:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 07:33:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 07:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:53:21 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:54:09 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:55:17 --> Could not find the language line "Home"
ERROR - 2023-04-08 07:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 07:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 08:02:02 --> Could not find the language line "Home"
ERROR - 2023-04-08 08:04:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 08:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:28:54 --> Could not find the language line "Other"
ERROR - 2023-04-08 08:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 08:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:46:02 --> Could not find the language line "Home"
ERROR - 2023-04-08 08:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:55:01 --> Could not find the language line "Home"
ERROR - 2023-04-08 08:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 08:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 09:03:30 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 09:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:17:58 --> Could not find the language line "Home"
ERROR - 2023-04-08 09:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:21:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 09:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:22:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 09:22:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 09:23:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 09:23:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 09:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 09:25:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 09:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:29:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 09:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:44:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 09:44:53 --> Could not find the language line "Home"
ERROR - 2023-04-08 09:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 09:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 10:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 10:38:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 10:55:17 --> Could not find the language line "Home"
ERROR - 2023-04-08 10:56:17 --> Could not find the language line "Home"
ERROR - 2023-04-08 10:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 10:58:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:00:35 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:04:37 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:05:15 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:18:17 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:21:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 11:21:23 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:23:37 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:23:38 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:24:41 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:31:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:31:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:32:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:32:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:33:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:33:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:33:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:34:30 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:35:35 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:47:48 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:47:56 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:48:45 --> Could not find the language line "Home"
ERROR - 2023-04-08 11:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:53:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:53:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:54:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:54:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:54:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:55:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 11:59:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 11:59:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 12:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:28:49 --> Could not find the language line "Home"
ERROR - 2023-04-08 12:29:32 --> Could not find the language line "Home"
ERROR - 2023-04-08 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 12:32:55 --> Could not find the language line "Home"
ERROR - 2023-04-08 12:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:36:34 --> Could not find the language line "Home"
ERROR - 2023-04-08 12:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:42:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 12:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 12:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-08 12:57:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-08 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:05:27 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:07:08 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 13:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 13:10:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:10:14 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:17:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-08 13:24:21 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 13:30:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-08 13:34:55 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 13:35:31 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 13:35:31 --> Could not find the language line "assets"
ERROR - 2023-04-08 13:35:31 --> Could not find the language line "assets"
ERROR - 2023-04-08 13:35:31 --> Could not find the language line "assets"
ERROR - 2023-04-08 13:35:31 --> Could not find the language line "assets"
ERROR - 2023-04-08 13:35:31 --> Could not find the language line "assets"
ERROR - 2023-04-08 13:38:33 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:38:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 13:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 13:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 13:41:53 --> Could not find the language line "Home"
ERROR - 2023-04-08 13:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 13:48:15 --> Could not find the language line "Other"
ERROR - 2023-04-08 13:50:35 --> Could not find the language line "Home"
ERROR - 2023-04-08 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 14:02:38 --> Could not find the language line "Home"
ERROR - 2023-04-08 14:02:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 14:02:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 14:03:33 --> 404 Page Not Found: Admin_page/index
ERROR - 2023-04-08 14:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 14:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 14:36:55 --> Could not find the language line "Home"
ERROR - 2023-04-08 14:43:48 --> Could not find the language line "Home"
ERROR - 2023-04-08 14:57:44 --> Could not find the language line "Home"
ERROR - 2023-04-08 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 15:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 15:48:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 15:48:00 --> Could not find the language line "Socks"
ERROR - 2023-04-08 15:48:20 --> 404 Page Not Found: Products/index
ERROR - 2023-04-08 15:48:22 --> 404 Page Not Found: Products/index
ERROR - 2023-04-08 15:49:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-08 16:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 16:52:49 --> Could not find the language line "Home"
ERROR - 2023-04-08 16:52:50 --> Could not find the language line "Home"
ERROR - 2023-04-08 16:52:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-08 16:52:53 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-08 16:52:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-08 16:52:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-08 16:53:06 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:16:26 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:16:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-08 17:17:14 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:17:45 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:18:22 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:18:48 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:18:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-08 17:19:44 --> Could not find the language line "Perfume"
ERROR - 2023-04-08 17:19:44 --> Could not find the language line "Perfume"
ERROR - 2023-04-08 17:20:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 17:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:23:47 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-04-08 17:23:47 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:23:47 --> 404 Page Not Found: Wp/index
ERROR - 2023-04-08 17:23:48 --> 404 Page Not Found: Bc/index
ERROR - 2023-04-08 17:23:48 --> 404 Page Not Found: Bk/index
ERROR - 2023-04-08 17:23:48 --> 404 Page Not Found: Backup/index
ERROR - 2023-04-08 17:23:49 --> 404 Page Not Found: New/index
ERROR - 2023-04-08 17:23:49 --> 404 Page Not Found: Main/index
ERROR - 2023-04-08 17:23:49 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:35:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 17:35:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 17:37:08 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:40:53 --> Could not find the language line "Home"
ERROR - 2023-04-08 17:49:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 17:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 17:54:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 17:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:02:31 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:06:26 --> 404 Page Not Found: Public/assets
ERROR - 2023-04-08 18:07:57 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:18:47 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:18:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 18:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:19:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 18:19:21 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:19:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:19:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:19:45 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:22:00 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:25:22 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:25:33 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:25:47 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:27:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:27:34 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:27:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:27:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:28:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:28:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:28:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:28:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:28:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:28:51 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:28:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 18:29:05 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 18:29:20 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 18:29:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-08 18:29:28 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 18:29:58 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:31:43 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:31:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-08 18:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:32:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-08 18:32:13 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:32:16 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 18:32:32 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:32:57 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:33:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 18:33:22 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:33:24 --> Could not find the language line "Perfume"
ERROR - 2023-04-08 18:33:29 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:33:31 --> Could not find the language line "Socks"
ERROR - 2023-04-08 18:33:37 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:33:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:33:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:34:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 18:34:47 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:35:22 --> Could not find the language line "Socks"
ERROR - 2023-04-08 18:35:25 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:35:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-08 18:35:32 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:36:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 18:36:44 --> Could not find the language line "Home"
ERROR - 2023-04-08 18:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:37:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-08 18:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 18:39:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-08 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 19:03:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 19:14:55 --> Could not find the language line "Home"
ERROR - 2023-04-08 19:15:36 --> Could not find the language line "Home"
ERROR - 2023-04-08 19:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 19:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 19:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 19:43:30 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-08 19:44:06 --> 404 Page Not Found: Storage/settings
ERROR - 2023-04-08 19:48:51 --> Could not find the language line "Home"
ERROR - 2023-04-08 19:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:15:54 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:23:42 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-08 20:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:47:49 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:49:05 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:50:23 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:51:50 --> Could not find the language line "Home"
ERROR - 2023-04-08 20:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 20:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:03:10 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:08:42 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:21:53 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:24:09 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:26:36 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:30:00 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:34:08 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:49:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-08 21:52:24 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:52:54 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:54:21 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:54:31 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:54:41 --> Could not find the language line "Socks"
ERROR - 2023-04-08 21:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:54:46 --> Could not find the language line "Socks"
ERROR - 2023-04-08 21:54:55 --> Could not find the language line "Perfume"
ERROR - 2023-04-08 21:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:57:02 --> Could not find the language line "Home"
ERROR - 2023-04-08 21:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 21:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 22:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 22:03:05 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:12:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 22:12:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 22:12:57 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:15:41 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:25:05 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:29:29 --> Could not find the language line "Other"
ERROR - 2023-04-08 22:30:06 --> Could not find the language line "Bracelets"
ERROR - 2023-04-08 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:30:29 --> Could not find the language line "Other"
ERROR - 2023-04-08 22:31:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 22:31:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-08 22:37:53 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-08 22:43:59 --> Could not find the language line "Perfume"
ERROR - 2023-04-08 22:45:28 --> Could not find the language line "Home"
ERROR - 2023-04-08 22:53:59 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:05:50 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:06:23 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:22:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 23:22:31 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:36:24 --> Could not find the language line "Home"
ERROR - 2023-04-08 23:47:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-08 23:57:50 --> Could not find the language line "Home"
