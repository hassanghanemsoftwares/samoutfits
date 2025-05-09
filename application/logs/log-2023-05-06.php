<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-06 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-06 00:05:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 00:05:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 00:05:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 00:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 00:05:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 00:05:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 00:06:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 00:06:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 00:06:13 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-05-06 00:06:19 --> Could not find the language line "Home"
ERROR - 2023-05-06 00:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 00:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 00:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 00:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 00:07:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 00:07:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 00:07:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 00:29:00 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-06 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 00:31:41 --> Could not find the language line "Home"
ERROR - 2023-05-06 00:47:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 00:47:24 --> Could not find the language line "Home"
ERROR - 2023-05-06 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-06 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 01:34:24 --> Could not find the language line "Home"
ERROR - 2023-05-06 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 02:13:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 02:13:51 --> Could not find the language line "Home"
ERROR - 2023-05-06 02:22:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 03:10:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 03:37:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 03:51:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 04:01:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 04:17:18 --> Could not find the language line "Home"
ERROR - 2023-05-06 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 04:50:23 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-06 04:56:45 --> 404 Page Not Found: Env/index
ERROR - 2023-05-06 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:03:15 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:09:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:18:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:19:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 05:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:51:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-05-06 05:51:28 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:51:31 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:51:32 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:51:34 --> Could not find the language line "Home"
ERROR - 2023-05-06 05:51:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 05:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 05:59:36 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:00:04 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:01:03 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:02:17 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:15:03 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 06:22:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 06:29:15 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 06:39:54 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-05-06 06:39:57 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-05-06 06:39:59 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-06 06:59:59 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:06:01 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:07:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:09:07 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:17:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 07:23:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 07:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:27:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:27:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:28:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:28:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:28:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:28:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:28:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:28:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:29:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:29:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:32:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:45:23 --> 404 Page Not Found: Wso112233php/index
ERROR - 2023-05-06 07:45:27 --> 404 Page Not Found: Wp-content/wso112233.php
ERROR - 2023-05-06 07:45:35 --> 404 Page Not Found: Balaphp/index
ERROR - 2023-05-06 07:45:41 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-06 07:48:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:48:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:49:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:50:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:50:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:50:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:50:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:51:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:51:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:53:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:53:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:53:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:54:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:54:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 07:55:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:55:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:55:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 07:56:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 07:56:58 --> Could not find the language line "Home"
ERROR - 2023-05-06 07:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:03:35 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:04:20 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:16:23 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:16:29 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:16:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-06 08:17:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:17:36 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:17:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:17:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 08:18:54 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:19:06 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:19:28 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:29:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:30:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:30:30 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:30:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:31:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:31:08 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:32:00 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:32:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 08:32:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 08:32:27 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:32:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:32:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:32:44 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:32:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:33:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 08:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:52:58 --> Could not find the language line "Home"
ERROR - 2023-05-06 08:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 08:58:40 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:00:48 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:08:31 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:09:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:09:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:09:44 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:09:54 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:14:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:14:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:23:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:23:09 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-06 09:23:09 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-06 09:23:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-06 09:23:10 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-06 09:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:23:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 09:30:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 09:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:36:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 09:36:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 09:36:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 09:36:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 09:36:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 09:36:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 09:36:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 09:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:51:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 09:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 09:56:32 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-06 09:56:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-06 09:56:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-06 09:56:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-06 09:56:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:57:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:57:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:57:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:57:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:58:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:58:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 09:58:38 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-06 09:58:39 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-06 09:58:39 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-06 09:58:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-06 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:07:17 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:24:38 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:24:39 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:33:51 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:52:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:52:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:52:50 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:53:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:53:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:54:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:54:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:56:25 --> Could not find the language line "Home"
ERROR - 2023-05-06 10:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 10:59:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 10:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:04:01 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:10:21 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:17:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 11:18:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 11:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 11:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 11:21:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 11:21:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:50:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 11:50:02 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:52:50 --> Could not find the language line "Home"
ERROR - 2023-05-06 11:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 11:55:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:02:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:03:32 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:07:49 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:17:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:19:32 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:20:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:21:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:23:07 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:23:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:23:48 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:23:50 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:24:55 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:25:49 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:26:05 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:29:51 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:30:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:31:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:32:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:37:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:39:59 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:40:04 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:40:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-05-06 12:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:41:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:44:25 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:44:29 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:44:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:45:29 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:45:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:46:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:46:23 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:46:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:46:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:46:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 12:46:59 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:47:06 --> Could not find the language line "Bracelets"
ERROR - 2023-05-06 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:47:19 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:47:31 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:52:00 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:52:24 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:53:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:53:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-06 12:53:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-06 12:53:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-06 12:53:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-06 12:53:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 12:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 12:57:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 12:58:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:58:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:58:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:58:38 --> Could not find the language line "Home"
ERROR - 2023-05-06 12:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:59:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:59:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 12:59:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:00:48 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:51 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:51 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:52 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:53 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:53 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:00:54 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:01:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:01:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 13:01:58 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:06:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:06:15 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:06:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:10:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 13:15:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:15:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:15:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:15:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:15:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:16:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-06 13:17:32 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:19:21 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:19:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:20:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:21:47 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:22:25 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:25:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:26:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:34:24 --> Could not find the language line "Home"
ERROR - 2023-05-06 13:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:52:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:55:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:55:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:55:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:57:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 13:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 13:58:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-06 14:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 14:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 14:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 14:24:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 14:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 14:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 14:58:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:02:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:04:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 15:04:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 15:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 15:14:45 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 15:15:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 15:16:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 15:16:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 15:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 15:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 15:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 15:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 15:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 15:24:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 15:25:07 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:40:54 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:57:34 --> Could not find the language line "Home"
ERROR - 2023-05-06 15:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 15:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 15:58:56 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:02:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:04:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:04:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:04:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:05:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:05:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:05:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:05:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:05:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:05:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 16:10:30 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:17:27 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:27:57 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:28:26 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 16:29:08 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:29:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:29:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 16:29:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:29:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:30:44 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:30:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 16:39:37 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:53:38 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:57:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 16:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 16:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 17:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:27:17 --> Could not find the language line "Home"
ERROR - 2023-05-06 17:27:49 --> Could not find the language line "Home"
ERROR - 2023-05-06 17:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:03:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 18:09:49 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:14:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 18:19:48 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:19:53 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:24:09 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:24:30 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:24:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 18:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 18:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 18:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 18:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 18:51:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 18:51:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 18:54:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:11:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:11:33 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:23:18 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:23:57 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:24:03 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:24:57 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:26:02 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:27:04 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:27:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:27:30 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:27:55 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:28:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 19:28:21 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:28:21 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:28:23 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:28:45 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:29:00 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:30:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 19:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:30:45 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:30:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 19:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:31:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 19:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:31:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 19:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:39:24 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:39:47 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:41:04 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:41:50 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:42:40 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:44:40 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:45:18 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:45:46 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:52:46 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:54:22 --> Could not find the language line "Home"
ERROR - 2023-05-06 19:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 19:59:06 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:02:52 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 20:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 20:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-06 20:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('Summer Caps')
AND `items`.`price` <= '9'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-06 20:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:32:18 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 20:35:53 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:36:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 20:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 20:37:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 20:37:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 20:44:25 --> Could not find the language line "Home"
ERROR - 2023-05-06 20:49:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 21:17:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-06 21:23:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-06 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:35:06 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:36:03 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:36:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-06 21:36:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-06 21:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:36:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-06 21:36:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-06 21:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:39:31 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:40:50 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:40:57 --> Could not find the language line "Bracelets"
ERROR - 2023-05-06 21:41:04 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:41:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:41:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:42:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:42:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:42:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:42:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-06 21:42:14 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 21:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 21:42:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 21:42:55 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:43:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 21:43:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-06 21:43:28 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:43:31 --> Could not find the language line "Perfume"
ERROR - 2023-05-06 21:43:36 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:50:57 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:51:45 --> Could not find the language line "Home"
ERROR - 2023-05-06 21:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 21:57:03 --> Could not find the language line "Home"
ERROR - 2023-05-06 22:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 22:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:08:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-06 22:09:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 22:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:11:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 22:11:34 --> Could not find the language line "Home"
ERROR - 2023-05-06 22:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-06 22:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:18:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-06 22:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:20:06 --> Could not find the language line "Home"
ERROR - 2023-05-06 22:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-06 22:36:01 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:05:00 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 23:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 23:07:01 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-06 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:41:50 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:42:29 --> Could not find the language line "Home"
ERROR - 2023-05-06 23:53:08 --> 404 Page Not Found: Assets/css
