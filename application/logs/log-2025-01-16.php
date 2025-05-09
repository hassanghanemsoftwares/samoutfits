<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-16 00:04:38 --> Could not find the language line "Home"
ERROR - 2025-01-16 00:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 00:19:50 --> Could not find the language line "Home"
ERROR - 2025-01-16 00:41:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 00:43:47 --> Could not find the language line "Home"
ERROR - 2025-01-16 00:47:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 00:49:50 --> Could not find the language line "Home"
ERROR - 2025-01-16 00:50:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 00:59:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 01:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 01:07:03 --> Could not find the language line "Other"
ERROR - 2025-01-16 01:19:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 01:26:00 --> Could not find the language line "Home"
ERROR - 2025-01-16 01:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 01:49:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 01:54:42 --> Could not find the language line "Other"
ERROR - 2025-01-16 02:19:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 02:49:49 --> Could not find the language line "Home"
ERROR - 2025-01-16 02:52:36 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-16 03:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 03:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 03:19:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 03:33:12 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-16 03:49:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 03:56:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-16 04:19:56 --> Could not find the language line "Home"
ERROR - 2025-01-16 04:41:08 --> Could not find the language line "Home"
ERROR - 2025-01-16 04:49:50 --> Could not find the language line "Home"
ERROR - 2025-01-16 05:19:52 --> Could not find the language line "Home"
ERROR - 2025-01-16 05:22:15 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 05:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 05:49:52 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:13:31 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 06:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 06:19:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:20:36 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:35:21 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:35:36 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:35:37 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:38:22 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 06:39:11 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:39:48 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:49:52 --> Could not find the language line "Home"
ERROR - 2025-01-16 06:53:04 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:00:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 07:10:18 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:10:19 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:10:37 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:18:23 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:19:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:28:18 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:49:52 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 07:55:59 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:57:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 07:58:26 --> Could not find the language line "Home"
ERROR - 2025-01-16 07:59:44 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:09:44 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:14:19 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-16 08:14:19 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:14:19 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-16 08:14:20 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-16 08:14:20 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-16 08:14:20 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-16 08:14:21 --> 404 Page Not Found: New/index
ERROR - 2025-01-16 08:14:21 --> 404 Page Not Found: Main/index
ERROR - 2025-01-16 08:14:22 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:15:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 08:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:19:53 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:20:40 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 08:49:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 08:58:53 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:08:19 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:19:53 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:25:11 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:26:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:26:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:26:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:26:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:39:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:39:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:40:02 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:40:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:40:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:15 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:41:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 09:45:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:45:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:48:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 09:49:55 --> Could not find the language line "Home"
ERROR - 2025-01-16 09:57:23 --> Could not find the language line "Home"
ERROR - 2025-01-16 10:13:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-16 10:19:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 10:20:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 10:25:11 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-01-16 10:28:53 --> Could not find the language line "Home"
ERROR - 2025-01-16 10:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 10:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 10:35:29 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-16 10:39:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-16 10:44:10 --> Could not find the language line "Home"
ERROR - 2025-01-16 10:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 10:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 10:49:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 10:52:00 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 10:52:06 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 10:52:26 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 10:55:36 --> Could not find the language line "Home"
ERROR - 2025-01-16 10:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 10:58:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:58:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:58:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:58:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:58:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:58:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 10:59:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:19:55 --> Could not find the language line "Home"
ERROR - 2025-01-16 11:26:25 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-01-16 11:29:10 --> Could not find the language line "Home"
ERROR - 2025-01-16 11:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 11:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 11:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 11:33:04 --> Could not find the language line "Home"
ERROR - 2025-01-16 11:33:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:33:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:34:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:34:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 11:35:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:35:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:36:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:36:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 11:36:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:36:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:36:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:37:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:37:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:38:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:38:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:38:04 --> Could not find the language line "Home"
ERROR - 2025-01-16 11:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 11:41:50 --> Could not find the language line "Home"
ERROR - 2025-01-16 11:42:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:42:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:42:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:42:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:45:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:45:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:45:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:45:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:45:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:45:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:48:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 11:49:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 11:56:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-16 11:57:07 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-16 11:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 12:02:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:02:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:13:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:13:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:14:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:14:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:14:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:14:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 12:19:55 --> Could not find the language line "Home"
ERROR - 2025-01-16 12:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 12:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 12:45:34 --> Could not find the language line "Home"
ERROR - 2025-01-16 12:45:35 --> Could not find the language line "Home"
ERROR - 2025-01-16 12:45:38 --> Could not find the language line "Home"
ERROR - 2025-01-16 12:49:55 --> Could not find the language line "Home"
ERROR - 2025-01-16 12:53:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:15:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 13:15:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-16 13:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:16:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:16:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-16 13:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:18:15 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:18:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:19:55 --> Could not find the language line "Home"
ERROR - 2025-01-16 13:20:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:26:26 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:26:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:26:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:27:27 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:27:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:27:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:28:12 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:28:20 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:29:50 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:29:57 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:30:00 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:31:17 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:35:07 --> Could not find the language line "Home"
ERROR - 2025-01-16 13:35:15 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:35:20 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:35:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:35:44 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 13:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 13:47:48 --> Could not find the language line "Home"
ERROR - 2025-01-16 13:49:10 --> Could not find the language line "Home"
ERROR - 2025-01-16 13:49:56 --> Could not find the language line "Home"
ERROR - 2025-01-16 13:59:36 --> Could not find the language line "Home"
ERROR - 2025-01-16 14:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 14:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 14:01:52 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-16 14:01:52 --> Could not find the language line "Home"
ERROR - 2025-01-16 14:01:52 --> Could not find the language line "Home"
ERROR - 2025-01-16 14:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 14:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:03:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:07:10 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-16 14:19:57 --> Could not find the language line "Home"
ERROR - 2025-01-16 14:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 14:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 14:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 14:49:56 --> Could not find the language line "Home"
ERROR - 2025-01-16 14:57:42 --> Could not find the language line "Home"
ERROR - 2025-01-16 15:18:42 --> Could not find the language line "Home"
ERROR - 2025-01-16 15:19:56 --> Could not find the language line "Home"
ERROR - 2025-01-16 15:32:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:47:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-16 15:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:49:58 --> Could not find the language line "Home"
ERROR - 2025-01-16 15:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-16 15:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 15:57:35 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:01:57 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 16:16:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:19:56 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:30:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:39:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:49:57 --> Could not find the language line "Home"
ERROR - 2025-01-16 16:55:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-16 16:58:57 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:02:53 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:11:13 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 17:19:57 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 17:38:14 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:42:07 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-16 17:43:53 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 17:49:58 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:57:51 --> Could not find the language line "Home"
ERROR - 2025-01-16 17:59:27 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 18:03:26 --> Could not find the language line "Home"
ERROR - 2025-01-16 18:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:19:58 --> Could not find the language line "Home"
ERROR - 2025-01-16 18:20:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 18:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 18:36:42 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-16 18:36:42 --> Could not find the language line "Home"
ERROR - 2025-01-16 18:36:42 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-16 18:36:43 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-16 18:36:43 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-16 18:36:43 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-16 18:36:44 --> 404 Page Not Found: New/index
ERROR - 2025-01-16 18:36:44 --> 404 Page Not Found: Main/index
ERROR - 2025-01-16 18:36:45 --> Could not find the language line "Home"
ERROR - 2025-01-16 18:44:00 --> Could not find the language line "Home"
ERROR - 2025-01-16 18:49:58 --> Could not find the language line "Home"
ERROR - 2025-01-16 18:56:06 --> Could not find the language line "Other"
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 18:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 18:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 18:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 18:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 18:58:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 19:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:08:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 19:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 19:08:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 19:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:10:13 --> Could not find the language line "Home"
ERROR - 2025-01-16 19:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:12:02 --> Could not find the language line "Home"
ERROR - 2025-01-16 19:14:48 --> Could not find the language line "Home"
ERROR - 2025-01-16 19:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:15:56 --> Could not find the language line "Home"
ERROR - 2025-01-16 19:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:19:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 19:19:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 19:19:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 19:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:19:59 --> Could not find the language line "Home"
ERROR - 2025-01-16 19:21:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-16 19:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 19:21:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 19:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:32:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-16 19:35:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-16 19:36:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-16 19:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 19:47:04 --> Could not find the language line "Home"
ERROR - 2025-01-16 19:49:59 --> Could not find the language line "Home"
ERROR - 2025-01-16 20:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-16 20:14:35 --> Could not find the language line "Home"
ERROR - 2025-01-16 20:19:59 --> Could not find the language line "Home"
ERROR - 2025-01-16 20:20:26 --> Could not find the language line "Home"
ERROR - 2025-01-16 20:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 20:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 20:49:59 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:02:57 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:03:15 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-16 21:03:28 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-16 21:03:33 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-16 21:03:45 --> Could not find the language line "Socks"
ERROR - 2025-01-16 21:16:23 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:17:54 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:20:00 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:22:12 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:22:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:22:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:22:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:23:21 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:23:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:23:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:23:49 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 21:24:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 21:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 21:24:37 --> Could not find the language line "Clothing"
ERROR - 2025-01-16 21:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-16 21:47:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 21:50:00 --> Could not find the language line "Home"
ERROR - 2025-01-16 21:51:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 21:53:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 22:04:24 --> Could not find the language line "Home"
ERROR - 2025-01-16 22:07:36 --> Could not find the language line "Other"
ERROR - 2025-01-16 22:20:01 --> Could not find the language line "Home"
ERROR - 2025-01-16 22:27:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 22:38:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 22:46:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-16 22:50:03 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:12:41 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:13:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-16 23:13:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-16 23:13:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-16 23:20:05 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:28:58 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:32:04 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:37:45 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:50:05 --> Could not find the language line "Home"
ERROR - 2025-01-16 23:53:15 --> Could not find the language line "Perfume"
ERROR - 2025-01-16 23:55:12 --> Could not find the language line "Home"
