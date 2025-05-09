<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-15 00:09:40 --> Could not find the language line "Other"
ERROR - 2024-12-15 00:18:10 --> Could not find the language line "Home"
ERROR - 2024-12-15 00:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 00:35:32 --> Could not find the language line "Home"
ERROR - 2024-12-15 00:40:27 --> Could not find the language line "Home"
ERROR - 2024-12-15 00:41:33 --> Could not find the language line "Home"
ERROR - 2024-12-15 00:41:43 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-15 00:41:43 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-12-15 00:41:43 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-12-15 00:41:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-15 00:41:44 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-15 00:41:47 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-12-15 00:41:48 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-12-15 00:43:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 00:44:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-15 00:44:21 --> Could not find the language line "Home"
ERROR - 2024-12-15 00:48:07 --> Could not find the language line "Home"
ERROR - 2024-12-15 01:12:29 --> Could not find the language line "Crocs"
ERROR - 2024-12-15 01:13:44 --> Could not find the language line "Home"
ERROR - 2024-12-15 01:18:07 --> Could not find the language line "Home"
ERROR - 2024-12-15 01:40:54 --> Could not find the language line "Home"
ERROR - 2024-12-15 01:48:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-15 01:48:21 --> Could not find the language line "Home"
ERROR - 2024-12-15 02:09:59 --> Could not find the language line "Other"
ERROR - 2024-12-15 02:18:09 --> Could not find the language line "Home"
ERROR - 2024-12-15 02:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 02:48:09 --> Could not find the language line "Home"
ERROR - 2024-12-15 03:18:11 --> Could not find the language line "Home"
ERROR - 2024-12-15 03:38:57 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-15 03:48:27 --> Could not find the language line "Home"
ERROR - 2024-12-15 03:48:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 04:18:11 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:24:47 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:41:45 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:45:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:45:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:45:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:45:24 --> Could not find the language line "Home"
ERROR - 2024-12-15 04:48:11 --> Could not find the language line "Home"
ERROR - 2024-12-15 05:18:11 --> Could not find the language line "Home"
ERROR - 2024-12-15 05:20:58 --> Could not find the language line "Home"
ERROR - 2024-12-15 05:48:11 --> Could not find the language line "Home"
ERROR - 2024-12-15 06:14:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-15 06:18:14 --> Could not find the language line "Home"
ERROR - 2024-12-15 06:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 06:23:56 --> Could not find the language line "Other"
ERROR - 2024-12-15 06:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 06:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 06:48:13 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:09:48 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:12:53 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:12:57 --> Could not find the language line "Other"
ERROR - 2024-12-15 07:18:12 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:20:35 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:23:51 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:23:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 07:23:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 07:24:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 07:24:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 07:29:32 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-15 07:33:09 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:48:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:50:41 --> Could not find the language line "Home"
ERROR - 2024-12-15 07:57:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 07:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 07:59:24 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:13:29 --> Could not find the language line "Other"
ERROR - 2024-12-15 08:18:13 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:18:46 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:22:44 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:23:33 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:27:24 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:31:22 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:31:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:32:47 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:34:38 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:36:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:45:26 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:45:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:45:35 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:45:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:45:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:45:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 08:48:13 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:49:09 --> Could not find the language line "Home"
ERROR - 2024-12-15 08:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 08:59:01 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-15 09:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 09:13:38 --> Could not find the language line "Home"
ERROR - 2024-12-15 09:18:13 --> Could not find the language line "Home"
ERROR - 2024-12-15 09:39:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 09:48:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:06:25 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:11:55 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:14:14 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:14:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:16:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 10:16:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 10:18:15 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:24:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-15 10:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:40:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-15 10:48:00 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:48:14 --> Could not find the language line "Home"
ERROR - 2024-12-15 10:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 10:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 11:10:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 11:10:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 11:10:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 11:10:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 11:11:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 11:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 11:11:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 11:16:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:16:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:17:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:17:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 11:18:20 --> Could not find the language line "Home"
ERROR - 2024-12-15 11:48:15 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:18:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:30:51 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:48:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:48:58 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:49:05 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:49:06 --> Could not find the language line "Home"
ERROR - 2024-12-15 12:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 12:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:18:20 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:27:35 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:27:38 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:27:38 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:27:39 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:47:48 --> Could not find the language line "Other"
ERROR - 2024-12-15 13:48:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:50:45 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:51:10 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:51:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:51:39 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:52:37 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 13:54:22 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:54:24 --> Could not find the language line "Home"
ERROR - 2024-12-15 13:57:12 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:04:14 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:04:29 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:04:29 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:07:03 --> Could not find the language line "Bracelets"
ERROR - 2024-12-15 14:14:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-15 14:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 14:18:26 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:24:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:24:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:25:08 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:25:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:25:17 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:25:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:25:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:29:42 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:32:15 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:32:28 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:35:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 14:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 14:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 14:40:55 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 14:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 14:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 14:40:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 14:40:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-15 14:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 14:41:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 14:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 14:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 14:48:18 --> Could not find the language line "Home"
ERROR - 2024-12-15 14:53:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-15 14:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 14:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 14:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 15:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 15:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 15:18:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 15:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 15:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 15:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 15:39:44 --> Could not find the language line "Home"
ERROR - 2024-12-15 15:39:46 --> Could not find the language line "Home"
ERROR - 2024-12-15 15:40:26 --> Could not find the language line "Home"
ERROR - 2024-12-15 15:48:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 15:48:38 --> Could not find the language line "Home"
ERROR - 2024-12-15 15:53:32 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:00:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-15 16:09:54 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:10:05 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:10:06 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:12:28 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:16:10 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:16:14 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:18:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:18:18 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:18:30 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:19:49 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:19:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 16:20:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:20:29 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:20:42 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 16:21:04 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:21:27 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-15 16:21:27 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 16:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 16:22:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-15 16:22:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-15 16:22:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-15 16:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 16:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 16:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 16:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 16:35:25 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:35:54 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 16:48:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:48:27 --> Could not find the language line "Home"
ERROR - 2024-12-15 16:52:25 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:07:54 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:07:57 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:07:57 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:07:58 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:18:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:26:47 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 17:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 17:29:03 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 17:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 17:36:10 --> Could not find the language line "Home"
ERROR - 2024-12-15 17:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 17:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 17:48:18 --> Could not find the language line "Home"
ERROR - 2024-12-15 18:18:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 18:26:54 --> Could not find the language line "Home"
ERROR - 2024-12-15 18:32:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-15 18:33:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 18:37:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 18:48:18 --> Could not find the language line "Home"
ERROR - 2024-12-15 18:51:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 18:56:39 --> Could not find the language line "Home"
ERROR - 2024-12-15 18:58:06 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 19:18:16 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 19:26:27 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:46:02 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:46:45 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:48:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:48:55 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 19:50:55 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:59:31 --> Could not find the language line "Home"
ERROR - 2024-12-15 19:59:31 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:18:17 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:35:49 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:35:56 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:36:09 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:36:31 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:48:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:54:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 20:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 20:56:29 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 21:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 21:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 21:13:23 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:13:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-15 21:15:19 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:18:19 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 21:39:41 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:40:06 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:40:07 --> Could not find the language line "Home"
ERROR - 2024-12-15 21:48:18 --> Could not find the language line "Home"
ERROR - 2024-12-15 22:15:22 --> Could not find the language line "Home"
ERROR - 2024-12-15 22:17:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-15 22:18:20 --> Could not find the language line "Home"
ERROR - 2024-12-15 22:48:21 --> Could not find the language line "Home"
ERROR - 2024-12-15 22:50:50 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-12-15 23:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:18:24 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:41:48 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:45:08 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:47:19 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:47:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-15 23:47:40 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:48:25 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:48:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-15 23:48:28 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:48:35 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:48:45 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-15 23:49:26 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-15 23:49:29 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-15 23:49:31 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:49:45 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:49:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:49:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:50:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:50:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:50:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:50:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-15 23:51:15 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:51:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-15 23:51:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-15 23:51:46 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:51:50 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-15 23:54:00 --> Could not find the language line "Home"
ERROR - 2024-12-15 23:54:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-15 23:55:52 --> 404 Page Not Found: Assets/css
