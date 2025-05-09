<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-26 00:12:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 00:14:49 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:19:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:20:55 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:21:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 00:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 00:21:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 00:21:10 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 00:22:49 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:26:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:27:17 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:27:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 00:27:55 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:28:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:28:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:29:50 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:29:55 --> Could not find the language line "Socks"
ERROR - 2024-06-26 00:30:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:30:53 --> Could not find the language line "Socks"
ERROR - 2024-06-26 00:30:57 --> Could not find the language line "Socks"
ERROR - 2024-06-26 00:30:58 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:37:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:41:15 --> Could not find the language line "products"
ERROR - 2024-06-26 00:49:17 --> Could not find the language line "Home"
ERROR - 2024-06-26 00:49:43 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 00:49:43 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 00:49:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 00:49:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 00:49:46 --> Could not find the language line "assets"
ERROR - 2024-06-26 00:49:46 --> Could not find the language line "assets"
ERROR - 2024-06-26 00:49:46 --> Could not find the language line "assets"
ERROR - 2024-06-26 00:49:46 --> Could not find the language line "assets"
ERROR - 2024-06-26 00:49:46 --> Could not find the language line "assets"
ERROR - 2024-06-26 00:49:48 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:49:48 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:49:49 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:49:49 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-26 00:49:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 00:49:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 00:49:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 00:49:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-26 00:49:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-26 00:51:55 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:52:29 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:52:29 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:52:32 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 00:55:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 00:56:30 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 00:56:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:56:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 00:56:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 00:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:56:34 --> Could not find the language line "Other"
ERROR - 2024-06-26 00:56:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 00:56:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 00:57:13 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-26 01:01:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 01:03:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:19:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:22:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 01:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 01:28:54 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:28:54 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:29:08 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:29:49 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:31:38 --> Could not find the language line "products"
ERROR - 2024-06-26 01:38:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 01:39:57 --> Could not find the language line "Other"
ERROR - 2024-06-26 01:49:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 01:54:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 02:16:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 02:19:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 02:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 02:33:46 --> Could not find the language line "Home"
ERROR - 2024-06-26 02:34:07 --> Could not find the language line "Home"
ERROR - 2024-06-26 02:49:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 02:50:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 02:57:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 03:00:35 --> Could not find the language line "Home"
ERROR - 2024-06-26 03:02:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-26 03:06:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 03:07:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 03:17:57 --> Could not find the language line "Home"
ERROR - 2024-06-26 03:19:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 03:28:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 03:29:32 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-26 03:29:36 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-06-26 03:33:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 03:35:57 --> Could not find the language line "Home"
ERROR - 2024-06-26 03:43:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 03:49:38 --> Could not find the language line "Home"
ERROR - 2024-06-26 04:01:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-26 04:03:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:17:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-26 04:19:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 04:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 04:22:50 --> Could not find the language line "Home"
ERROR - 2024-06-26 04:35:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 04:36:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:37:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:37:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 04:40:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:47:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 04:47:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:47:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:49:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 04:59:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 04:59:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 05:13:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 05:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 05:13:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 05:19:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 05:28:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 05:36:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 05:42:49 --> Could not find the language line "Home"
ERROR - 2024-06-26 05:49:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 05:49:37 --> Could not find the language line "Home"
ERROR - 2024-06-26 05:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-26 06:11:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:19:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:23:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 06:25:35 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:27:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 06:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:31:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 06:32:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 06:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:33:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:38:47 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:40:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 06:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:40:38 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:44:17 --> Could not find the language line "Home"
ERROR - 2024-06-26 06:48:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 06:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 06:48:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 06:49:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:09:36 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 07:09:36 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 07:09:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 07:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 07:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:18:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 07:18:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 07:19:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 07:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:19:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:21:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:30:12 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 07:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:30:55 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 07:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:39:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 07:39:15 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:46:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:49:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:49:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:55:04 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:55:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 07:56:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 07:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 07:57:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 08:02:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 08:07:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 08:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:09:32 --> Could not find the language line "Other"
ERROR - 2024-06-26 08:19:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 08:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:30:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 08:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:44:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 08:45:12 --> Could not find the language line "Home"
ERROR - 2024-06-26 08:45:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 08:49:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 08:49:30 --> Could not find the language line "Socks"
ERROR - 2024-06-26 08:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:53:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 08:53:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 08:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:58:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 08:58:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 08:58:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 08:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 08:58:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 08:58:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 08:58:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 08:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:07:31 --> Could not find the language line "products"
ERROR - 2024-06-26 09:09:13 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:11:33 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:15:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 09:19:19 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:21:01 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:25:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 09:25:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 09:25:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 09:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 09:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:27:28 --> Could not find the language line "products"
ERROR - 2024-06-26 09:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:48:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:49:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:49:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 09:50:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 09:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 09:56:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 09:57:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 09:57:49 --> Could not find the language line "Home"
ERROR - 2024-06-26 09:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 09:59:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 10:02:25 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 10:04:29 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:07:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 10:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:12:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:19:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:20:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:24:34 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:24:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:24:54 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:25:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:25:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:25:45 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:25:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:26:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:26:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:26:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:26:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 10:26:55 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:27:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:27:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:28:05 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:29:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:29:55 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:29:59 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 10:30:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:30:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:30:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:30:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:31:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:31:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:31:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:31:11 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:32:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:32:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:32:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:32:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:35:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 10:36:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:36:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 10:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:37:52 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:38:06 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 10:38:10 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:38:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 10:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:38:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 10:38:32 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:38:47 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:45:11 --> Could not find the language line "Socks"
ERROR - 2024-06-26 10:46:53 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 10:49:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:50:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:52:55 --> Could not find the language line "Home"
ERROR - 2024-06-26 10:53:02 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:06:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:07:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-26 11:07:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-26 11:07:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-26 11:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 11:19:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:23:12 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-26 11:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 11:24:04 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:25:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:40:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 11:41:56 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:43:50 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:43:50 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:49:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:55:01 --> Could not find the language line "Home"
ERROR - 2024-06-26 11:59:55 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:00:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:02:52 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:03:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-06-26 12:03:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-06-26 12:03:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-06-26 12:03:00 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-06-26 12:04:02 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:05:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:05:07 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:05:07 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:05:08 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:05:08 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:05:08 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:05:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:05:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:05:45 --> Could not find the language line "products"
ERROR - 2024-06-26 12:08:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:09:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-26 12:10:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 12:12:51 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:19:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:20:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 12:24:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 12:27:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:27:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:28:32 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 12:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:29:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 12:29:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 12:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:37:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:37:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:37:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:37:49 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-06-26 12:37:49 --> Could not find the language line "Ha"
ERROR - 2024-06-26 12:37:49 --> 404 Page Not Found: Products/c
ERROR - 2024-06-26 12:37:50 --> 404 Page Not Found: Products/cate
ERROR - 2024-06-26 12:37:50 --> 404 Page Not Found: Products/categor
ERROR - 2024-06-26 12:37:50 --> 404 Page Not Found: Products/index
ERROR - 2024-06-26 12:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:38:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 12:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:41:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 12:44:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 12:44:41 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:46:37 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:46:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:46:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:47:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:47:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:47:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 12:47:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:47:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 12:48:00 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:49:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 12:55:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 12:56:01 --> 404 Page Not Found: Products/products
ERROR - 2024-06-26 12:56:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 12:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 13:11:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 13:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 13:13:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 13:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 13:14:47 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 13:16:43 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:17:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 13:17:52 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:18:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-26 13:19:07 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:19:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:20:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:20:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 13:21:53 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 13:22:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:27:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-26 13:27:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 13:32:56 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:37:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 13:43:12 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 13:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 13:45:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 13:45:54 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:46:01 --> Could not find the language line "Socks"
ERROR - 2024-06-26 13:46:25 --> Could not find the language line "Socks"
ERROR - 2024-06-26 13:46:36 --> Could not find the language line "Socks"
ERROR - 2024-06-26 13:46:40 --> Could not find the language line "Socks"
ERROR - 2024-06-26 13:48:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 13:49:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 13:52:11 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:00:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 14:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:06:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 14:07:00 --> Could not find the language line "Socks"
ERROR - 2024-06-26 14:07:32 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 14:07:51 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 14:07:52 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 14:07:53 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:07:56 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:08:02 --> Could not find the language line "Other"
ERROR - 2024-06-26 14:08:14 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:08:14 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:08:49 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:09:03 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:09:13 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:10:00 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:10:47 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 14:10:54 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 14:10:54 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 14:10:58 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:11:00 --> Could not find the language line "Other"
ERROR - 2024-06-26 14:11:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:12:13 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-26 14:14:28 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:14:46 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:19:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:22:00 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:28:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 14:34:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 14:38:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:41:29 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:49:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 14:49:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 14:49:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 14:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:10:06 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:10:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-26 15:10:30 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 15:10:47 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 15:11:11 --> Could not find the language line "Perfume"
ERROR - 2024-06-26 15:11:26 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-06-26 15:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:11:58 --> Could not find the language line "clothes"
ERROR - 2024-06-26 15:12:16 --> Could not find the language line "clothesrf"
ERROR - 2024-06-26 15:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:19:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:23:18 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:26:22 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:26:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:26:49 --> Could not find the language line "Bracelets"
ERROR - 2024-06-26 15:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:27:03 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:27:03 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:28:12 --> Could not find the language line "products"
ERROR - 2024-06-26 15:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:29:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 15:31:35 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 15:36:45 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-26 15:40:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 15:40:48 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:49:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 15:50:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 15:55:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:04:23 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:04:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:05:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 16:19:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:37:37 --> Could not find the language line "products"
ERROR - 2024-06-26 16:38:14 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:38:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-26 16:39:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:41:09 --> Could not find the language line "Socks"
ERROR - 2024-06-26 16:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:46:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 16:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:48:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 16:49:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:50:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 16:51:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 16:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 16:55:20 --> 404 Page Not Found: Metajson/index
ERROR - 2024-06-26 16:55:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 16:58:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 16:59:14 --> Could not find the language line "Other"
ERROR - 2024-06-26 17:00:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 17:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 17:04:12 --> Could not find the language line "Socks"
ERROR - 2024-06-26 17:06:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 17:10:59 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:11:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:12:04 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:12:34 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:13:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:14:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 17:19:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:22:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 17:26:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 17:41:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 17:44:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-26 17:47:48 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:48:52 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:49:00 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:49:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 17:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 17:51:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 17:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 17:53:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 18:02:28 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:02:46 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:04:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:08:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 18:10:08 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:12:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 18:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:16:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 18:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:19:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:20:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 18:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:24:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 18:24:47 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:25:16 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:46:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:48:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:49:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:50:31 --> Could not find the language line "Home"
ERROR - 2024-06-26 18:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 18:54:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 19:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:19:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:39:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 19:40:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 19:41:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-26 19:41:56 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:42:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:43:32 --> Could not find the language line "products"
ERROR - 2024-06-26 19:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:44:02 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:44:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:45:13 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:47:40 --> Could not find the language line "products"
ERROR - 2024-06-26 19:47:53 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:49:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:51:54 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:52:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:53:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:53:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:53:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:54:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:54:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:54:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:54:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:54:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:55:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:55:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:55:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:55:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:56:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:56:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:56:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:57:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:57:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:57:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 19:57:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 19:57:59 --> Could not find the language line "Home"
ERROR - 2024-06-26 19:58:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 19:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:01:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:01:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:01:34 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:10:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 20:14:04 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:19:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 20:19:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:23:04 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:23:41 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:24:46 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:25:44 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:26:03 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:33:41 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:33:42 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:45:34 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:45:59 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:46:00 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:49:27 --> Could not find the language line "Home"
ERROR - 2024-06-26 20:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 20:59:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 21:00:34 --> Could not find the language line "Other"
ERROR - 2024-06-26 21:00:40 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:00:41 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:03:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:03:24 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:03:47 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:04:56 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:05:54 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:08:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:08:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:08:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:08:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:08:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:08:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:08:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:08:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:09:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:09:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:09:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:09:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:09:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:09:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-26 21:09:29 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:09:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 21:09:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 21:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:10:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 21:10:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 21:10:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 21:10:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 21:10:58 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:11:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 21:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:11:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 21:12:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 21:13:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 21:13:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-26 21:13:25 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:15:03 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:16:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 21:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 21:19:31 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:24:26 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:35:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 21:36:20 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:36:21 --> Could not find the language line "Home"
ERROR - 2024-06-26 21:40:07 --> 404 Page Not Found: Products/products
ERROR - 2024-06-26 21:49:31 --> Could not find the language line "Home"
ERROR - 2024-06-26 22:01:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 22:04:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 22:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 22:08:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 22:15:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 22:17:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 22:19:32 --> Could not find the language line "Home"
ERROR - 2024-06-26 22:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-26 22:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 22:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 22:49:32 --> Could not find the language line "Home"
ERROR - 2024-06-26 22:53:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 22:59:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-26 23:06:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 23:08:31 --> Could not find the language line "Home"
ERROR - 2024-06-26 23:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 23:19:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 23:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-26 23:26:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-26 23:42:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-26 23:48:40 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-26 23:49:39 --> Could not find the language line "Home"
ERROR - 2024-06-26 23:54:08 --> Could not find the language line "Other"
