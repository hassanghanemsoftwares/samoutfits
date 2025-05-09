<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-22 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 00:01:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 00:14:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 00:14:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 00:32:49 --> Could not find the language line "Home"
ERROR - 2023-04-22 00:50:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 00:50:15 --> Could not find the language line "Home"
ERROR - 2023-04-22 00:51:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-22 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 01:09:46 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-22 01:09:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-22 01:09:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-22 01:09:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-22 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 01:32:56 --> Could not find the language line "Home"
ERROR - 2023-04-22 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 02:07:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 02:09:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 02:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 02:51:56 --> Could not find the language line "Home"
ERROR - 2023-04-22 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 03:11:26 --> Could not find the language line "Home"
ERROR - 2023-04-22 03:17:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 03:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-22 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 04:01:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 04:52:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 04:52:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-22 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 05:09:36 --> Could not find the language line "Home"
ERROR - 2023-04-22 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 05:35:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 05:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 05:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 05:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 05:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 05:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:08:35 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:13:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:15:35 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:16:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:16:44 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:26:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 06:26:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 06:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 06:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 06:57:07 --> 404 Page Not Found: Storage/settings
ERROR - 2023-04-22 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:04:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 07:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:12:09 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:15:59 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:17:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-22 07:17:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-22 07:17:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-22 07:17:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-22 07:17:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 07:20:06 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:20:39 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-04-22 07:20:40 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:20:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 07:23:42 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-04-22 07:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:27:50 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:28:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:28:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:28:56 --> Could not find the language line "Perfume"
ERROR - 2023-04-22 07:29:00 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:29:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:04 --> Could not find the language line "Other"
ERROR - 2023-04-22 07:29:07 --> Could not find the language line "Disclaimer"
ERROR - 2023-04-22 07:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:29:16 --> Could not find the language line "Other"
ERROR - 2023-04-22 07:29:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:29:21 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 07:29:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:40:45 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:44:51 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:45:42 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:46:20 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:55:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:55:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:57:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 07:57:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:58:06 --> Could not find the language line "Home"
ERROR - 2023-04-22 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 07:59:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 07:59:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:03:02 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:05:25 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:06:07 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:07:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:11:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:11:18 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:11:31 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:12:05 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:12:21 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:12:24 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:14:02 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:17:38 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:17:41 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:18:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:19:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:20:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:21:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:22:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:33:57 --> Could not find the language line "accounting"
ERROR - 2023-04-22 08:33:57 --> Could not find the language line "accounting"
ERROR - 2023-04-22 08:33:58 --> Could not find the language line "accounting"
ERROR - 2023-04-22 08:33:58 --> Could not find the language line "accounting"
ERROR - 2023-04-22 08:33:58 --> Could not find the language line "accounting"
ERROR - 2023-04-22 08:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:38:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:38:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:38:54 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:38:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 08:39:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:39:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:39:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:40:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:40:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:40:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:40:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 08:40:41 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:43:19 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:57:02 --> Could not find the language line "Home"
ERROR - 2023-04-22 08:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:05:32 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:08:56 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:15:57 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:16:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:16:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:17:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:17:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:18:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:18:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:20:10 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 09:20:30 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 09:20:48 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 09:20:51 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:20:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-22 09:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:21:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-22 09:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:21:37 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:21:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-22 09:21:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-22 09:21:54 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:23:00 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:26:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:26:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:27:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 09:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:28:53 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:28:53 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:37:06 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:40:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:40:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:40:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:41:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:42:50 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:42:55 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:44:35 --> Could not find the language line "Socks"
ERROR - 2023-04-22 09:44:42 --> Could not find the language line "Socks"
ERROR - 2023-04-22 09:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:46:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:46:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:46:50 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:47:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 09:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:48:21 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:48:25 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:49:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:52:36 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:54:56 --> Could not find the language line "Home"
ERROR - 2023-04-22 09:55:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 09:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:00:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:00:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:10:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:10:20 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:12:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:25:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:25:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:26:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:26:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:26:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:29:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:29:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:30:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 10:31:00 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:31:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:34:23 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:34:38 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 10:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 10:52:58 --> Could not find the language line "Home"
ERROR - 2023-04-22 10:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:00:32 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-22 11:00:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-22 11:00:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-22 11:00:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-22 11:00:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 11:00:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 11:00:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 11:02:40 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:08:22 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:10:03 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:10:39 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:10:42 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:11:24 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:19:25 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:29:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:31:00 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:31:39 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:34:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 11:37:18 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:44:56 --> Could not find the language line "accounting"
ERROR - 2023-04-22 11:44:56 --> Could not find the language line "accounting"
ERROR - 2023-04-22 11:44:56 --> Could not find the language line "accounting"
ERROR - 2023-04-22 11:44:56 --> Could not find the language line "accounting"
ERROR - 2023-04-22 11:44:56 --> Could not find the language line "accounting"
ERROR - 2023-04-22 11:54:48 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:56:29 --> Could not find the language line "Home"
ERROR - 2023-04-22 11:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 11:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 12:09:50 --> Could not find the language line "accounting"
ERROR - 2023-04-22 12:09:50 --> Could not find the language line "accounting"
ERROR - 2023-04-22 12:09:50 --> Could not find the language line "accounting"
ERROR - 2023-04-22 12:09:50 --> Could not find the language line "accounting"
ERROR - 2023-04-22 12:09:50 --> Could not find the language line "accounting"
ERROR - 2023-04-22 12:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 12:51:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 12:51:22 --> Could not find the language line "Home"
ERROR - 2023-04-22 12:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:57:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 12:57:56 --> Could not find the language line "Home"
ERROR - 2023-04-22 12:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:58:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 12:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:58:41 --> Could not find the language line "Home"
ERROR - 2023-04-22 12:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 12:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:00:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:04:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:04:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:05:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:06:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 13:08:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:08:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:08:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:08:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:11:25 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:11:46 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:11:54 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:12:03 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:13:21 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:13:47 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:14:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:14:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:14:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:15:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:15:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:15:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:15:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:25:47 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:25:53 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:26:06 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:30:47 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:31:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:31:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:32:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:32:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:33:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:33:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:34:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 13:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:34:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:35:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:55:18 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:59:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:59:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 13:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 13:59:44 --> Could not find the language line "Home"
ERROR - 2023-04-22 13:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:01:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 14:02:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:02:16 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:02:28 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:04:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 14:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 14:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:06:17 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:10:19 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:11:52 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:15:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-22 14:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:15:54 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:15:57 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:16:17 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:22:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 14:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:24:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 14:25:56 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:26:06 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:26:28 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:29:53 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:30:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:30:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:30:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:38:42 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:38:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:39:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:39:29 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:41:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:42:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:42:47 --> Could not find the language line "Home"
ERROR - 2023-04-22 14:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:44:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 14:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:44:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:45:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 14:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:46:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 14:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:52:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-22 14:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 14:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 15:16:52 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:22:29 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:33:38 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:37:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:37:29 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:37:34 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:37:36 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:38:19 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:38:22 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:38:26 --> Could not find the language line "Home"
ERROR - 2023-04-22 15:48:07 --> Could not find the language line "accounting"
ERROR - 2023-04-22 15:48:07 --> Could not find the language line "accounting"
ERROR - 2023-04-22 15:48:08 --> Could not find the language line "accounting"
ERROR - 2023-04-22 15:48:08 --> Could not find the language line "accounting"
ERROR - 2023-04-22 15:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:12:52 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 16:29:15 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:31:05 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:31:30 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:31:32 --> Could not find the language line "Socks"
ERROR - 2023-04-22 16:54:02 --> Could not find the language line "Home"
ERROR - 2023-04-22 16:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:07:16 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:07:40 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:07:42 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:29:41 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:34:55 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:35:08 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 17:35:47 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:39:24 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:39:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:39:58 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:40:05 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:40:06 --> Could not find the language line "Perfume"
ERROR - 2023-04-22 17:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:40:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 17:40:38 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:40:45 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:40:59 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 17:43:03 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:52:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 17:54:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 18:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 18:18:33 --> Could not find the language line "Home"
ERROR - 2023-04-22 18:28:24 --> Could not find the language line "Home"
ERROR - 2023-04-22 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:01:18 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 19:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 19:20:18 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:31:35 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:43:06 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:49:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 19:55:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 19:57:32 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:05:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 20:08:24 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:10:40 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:11:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:34:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 20:34:47 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:36:54 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:37:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-22 20:37:46 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:37:50 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:38:31 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:39:02 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 20:43:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 20:48:05 --> Could not find the language line "Home"
ERROR - 2023-04-22 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-22 21:17:42 --> Could not find the language line "Home"
ERROR - 2023-04-22 21:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 21:23:53 --> Could not find the language line "Home"
ERROR - 2023-04-22 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 21:31:27 --> Could not find the language line "Home"
ERROR - 2023-04-22 21:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 21:48:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-22 21:52:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-22 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:10:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 22:15:35 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:20:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-22 22:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:29:00 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:31:55 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:33:36 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:33:44 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 22:33:51 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:39:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:39:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:40:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:41:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:42:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:45:23 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:45:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:47:23 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:49:02 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:50:26 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:50:32 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:50:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 22:50:57 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:51:06 --> Could not find the language line "Bracelets"
ERROR - 2023-04-22 22:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:51:28 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:51:38 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:51:45 --> Could not find the language line "Home"
ERROR - 2023-04-22 22:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 22:59:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-22 22:59:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-22 22:59:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-22 22:59:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-22 22:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-22 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-22 23:03:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 23:17:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 23:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 23:22:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-22 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-22 23:34:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 23:43:29 --> Could not find the language line "Home"
ERROR - 2023-04-22 23:51:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-22 23:51:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
