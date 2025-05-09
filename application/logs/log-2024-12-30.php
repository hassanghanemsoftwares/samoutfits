<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-30 00:15:54 --> Could not find the language line "Home"
ERROR - 2024-12-30 00:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 00:45:56 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:14:48 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:15:54 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:20:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-30 01:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 01:44:29 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:45:57 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:46:19 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:51:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:51:51 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:53:43 --> Could not find the language line "Home"
ERROR - 2024-12-30 01:58:00 --> Could not find the language line "Socks"
ERROR - 2024-12-30 01:59:15 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:02:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-30 02:02:58 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:04:06 --> Could not find the language line "Other"
ERROR - 2024-12-30 02:06:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 02:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 02:08:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 02:16:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:16:57 --> Could not find the language line "Other"
ERROR - 2024-12-30 02:19:07 --> Could not find the language line "Other"
ERROR - 2024-12-30 02:21:07 --> Could not find the language line "Perfume"
ERROR - 2024-12-30 02:21:22 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 02:44:31 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:45:56 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:47:04 --> Could not find the language line "Disclaimer"
ERROR - 2024-12-30 02:47:12 --> Could not find the language line "Home"
ERROR - 2024-12-30 02:52:30 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:02:29 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:16:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:27:41 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 03:42:40 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:46:05 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:46:41 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:49:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 03:51:59 --> Could not find the language line "Home"
ERROR - 2024-12-30 03:54:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 04:16:03 --> Could not find the language line "Home"
ERROR - 2024-12-30 04:35:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 04:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 04:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 04:39:25 --> Could not find the language line "Home"
ERROR - 2024-12-30 04:45:56 --> Could not find the language line "Home"
ERROR - 2024-12-30 05:15:59 --> Could not find the language line "Home"
ERROR - 2024-12-30 05:26:52 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-30 05:26:56 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-12-30 05:45:56 --> Could not find the language line "Home"
ERROR - 2024-12-30 05:52:42 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-30 05:52:42 --> Could not find the language line "Home"
ERROR - 2024-12-30 05:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 06:15:57 --> Could not find the language line "Home"
ERROR - 2024-12-30 06:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 06:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 06:37:36 --> Could not find the language line "Home"
ERROR - 2024-12-30 06:45:57 --> Could not find the language line "Home"
ERROR - 2024-12-30 06:56:34 --> Could not find the language line "Socks"
ERROR - 2024-12-30 06:57:30 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-30 06:57:30 --> Could not find the language line "Home"
ERROR - 2024-12-30 06:57:30 --> Could not find the language line "Home"
ERROR - 2024-12-30 07:15:57 --> Could not find the language line "Home"
ERROR - 2024-12-30 07:30:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-30 07:30:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-30 07:44:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-30 07:45:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-30 07:45:58 --> Could not find the language line "Home"
ERROR - 2024-12-30 07:48:21 --> Could not find the language line "Home"
ERROR - 2024-12-30 07:51:36 --> Could not find the language line "Home"
ERROR - 2024-12-30 08:15:58 --> Could not find the language line "Home"
ERROR - 2024-12-30 08:18:27 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-30 08:18:27 --> Could not find the language line "Home"
ERROR - 2024-12-30 08:18:27 --> Could not find the language line "Home"
ERROR - 2024-12-30 08:30:20 --> Could not find the language line "Home"
ERROR - 2024-12-30 08:31:23 --> Could not find the language line "Home"
ERROR - 2024-12-30 08:35:51 --> Could not find the language line "Bracelets"
ERROR - 2024-12-30 08:45:59 --> Could not find the language line "Home"
ERROR - 2024-12-30 09:01:12 --> Could not find the language line "Home"
ERROR - 2024-12-30 09:16:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 09:23:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 09:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 09:27:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 09:36:17 --> Could not find the language line "Home"
ERROR - 2024-12-30 09:43:01 --> Could not find the language line "Home"
ERROR - 2024-12-30 09:43:49 --> Could not find the language line "Other"
ERROR - 2024-12-30 09:45:59 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:05:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 10:16:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:30:41 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:40:53 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-30 10:42:31 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:46:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:46:27 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:54:11 --> Could not find the language line "Home"
ERROR - 2024-12-30 10:57:29 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:02:47 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-30 11:02:47 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:15:59 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:20:40 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:20:42 --> 404 Page Not Found: Home/accounts
ERROR - 2024-12-30 11:20:42 --> 404 Page Not Found: Home/home
ERROR - 2024-12-30 11:20:42 --> 404 Page Not Found: Home/assets
ERROR - 2024-12-30 11:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 11:30:17 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:33:21 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-30 11:36:30 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-30 11:45:18 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:46:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:50:19 --> Could not find the language line "Home"
ERROR - 2024-12-30 11:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-30 12:00:19 --> Could not find the language line "Home"
ERROR - 2024-12-30 12:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 12:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 12:16:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 12:24:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-12-30 12:24:16 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-30 12:24:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-12-30 12:24:17 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-30 12:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 12:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 12:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 12:29:42 --> Could not find the language line "Home"
ERROR - 2024-12-30 12:40:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 12:40:43 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 12:42:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-30 12:46:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 12:58:25 --> Could not find the language line "Home"
ERROR - 2024-12-30 13:16:00 --> Could not find the language line "Home"
ERROR - 2024-12-30 13:46:01 --> Could not find the language line "Home"
ERROR - 2024-12-30 14:00:17 --> Could not find the language line "Home"
ERROR - 2024-12-30 14:16:03 --> Could not find the language line "Home"
ERROR - 2024-12-30 14:46:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 15:16:01 --> Could not find the language line "Home"
ERROR - 2024-12-30 15:23:54 --> 404 Page Not Found: Plugins/elfinder
ERROR - 2024-12-30 15:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 15:39:34 --> Could not find the language line "Home"
ERROR - 2024-12-30 15:39:45 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 15:39:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 15:46:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 15:47:25 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:16:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:19:48 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:20:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 16:20:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 16:20:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 16:20:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 16:20:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 16:20:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-30 16:20:36 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:20:45 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 16:21:12 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 16:21:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 16:21:25 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:23:55 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:24:12 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 16:24:25 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:32:47 --> Could not find the language line "accounts"
ERROR - 2024-12-30 16:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 16:36:50 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:46:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 16:48:30 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-12-30 16:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 17:00:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-30 17:05:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-30 17:16:02 --> Could not find the language line "Home"
ERROR - 2024-12-30 17:16:34 --> Could not find the language line "Home"
ERROR - 2024-12-30 17:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 17:40:15 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-30 17:43:24 --> Could not find the language line "Home"
ERROR - 2024-12-30 17:46:03 --> Could not find the language line "Home"
ERROR - 2024-12-30 17:52:01 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-30 17:55:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-30 18:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:07:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-30 18:13:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-30 18:16:03 --> Could not find the language line "Home"
ERROR - 2024-12-30 18:17:40 --> Could not find the language line "Home"
ERROR - 2024-12-30 18:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:20:52 --> Could not find the language line "Home"
ERROR - 2024-12-30 18:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:21:48 --> Could not find the language line "Other"
ERROR - 2024-12-30 18:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:23:08 --> Could not find the language line "Home"
ERROR - 2024-12-30 18:23:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-30 18:23:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-30 18:23:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 18:23:50 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-30 18:24:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 18:24:16 --> Could not find the language line "Home"
ERROR - 2024-12-30 18:24:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 18:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:26:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 18:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:26:23 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 18:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 18:46:03 --> Could not find the language line "Home"
ERROR - 2024-12-30 18:46:07 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-12-30 18:50:15 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:15:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-30 19:16:04 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:35:45 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:36:56 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:40:23 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:43:13 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:46:04 --> Could not find the language line "Home"
ERROR - 2024-12-30 19:50:45 --> Could not find the language line "Home"
ERROR - 2024-12-30 20:16:04 --> Could not find the language line "Home"
ERROR - 2024-12-30 20:28:27 --> Could not find the language line "Bracelets"
ERROR - 2024-12-30 20:29:44 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-30 20:30:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-30 20:32:32 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-30 20:46:04 --> Could not find the language line "Home"
ERROR - 2024-12-30 20:54:33 --> Could not find the language line "Home"
ERROR - 2024-12-30 21:02:56 --> Could not find the language line "Home"
ERROR - 2024-12-30 21:16:05 --> Could not find the language line "Home"
ERROR - 2024-12-30 21:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 21:26:46 --> Could not find the language line "Home"
ERROR - 2024-12-30 21:46:05 --> Could not find the language line "Home"
ERROR - 2024-12-30 22:16:05 --> Could not find the language line "Home"
ERROR - 2024-12-30 22:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 22:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 22:34:13 --> Could not find the language line "Home"
ERROR - 2024-12-30 22:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 22:46:08 --> Could not find the language line "Home"
ERROR - 2024-12-30 22:49:54 --> Could not find the language line "Home"
ERROR - 2024-12-30 22:52:23 --> Could not find the language line "Clothing"
ERROR - 2024-12-30 22:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-30 23:16:07 --> Could not find the language line "Home"
ERROR - 2024-12-30 23:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 23:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 23:34:53 --> Could not find the language line "Home"
ERROR - 2024-12-30 23:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-30 23:46:11 --> Could not find the language line "Home"
ERROR - 2024-12-30 23:53:15 --> Could not find the language line "Home"
ERROR - 2024-12-30 23:54:23 --> Could not find the language line "Clothing"
