<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-20 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 00:01:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-20 00:23:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 01:23:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 01:25:39 --> 404 Page Not Found: Big-sizes/index
ERROR - 2023-05-20 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 01:41:57 --> Could not find the language line "Home"
ERROR - 2023-05-20 01:45:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-20 01:49:15 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-20 01:49:16 --> 404 Page Not Found: Account/login
ERROR - 2023-05-20 01:49:16 --> 404 Page Not Found: Graphql/index
ERROR - 2023-05-20 01:49:16 --> 404 Page Not Found: Check_mk/login.py
ERROR - 2023-05-20 01:49:17 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-20 01:49:17 --> 404 Page Not Found: Spaces/viewdefaultdecorator.action
ERROR - 2023-05-20 01:49:17 --> 404 Page Not Found: Metrics/index
ERROR - 2023-05-20 01:49:17 --> 404 Page Not Found: New/login
ERROR - 2023-05-20 01:49:17 --> 404 Page Not Found: Password_changecgi/index
ERROR - 2023-05-20 01:49:18 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-20 01:49:18 --> 404 Page Not Found: Dip/api
ERROR - 2023-05-20 01:49:18 --> 404 Page Not Found: Backupsettingsdat/index
ERROR - 2023-05-20 01:49:22 --> Could not find the language line "Home"
ERROR - 2023-05-20 01:50:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 01:50:26 --> Could not find the language line "Other"
ERROR - 2023-05-20 01:59:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 01:59:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-20 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 02:00:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 02:10:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-20 02:27:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 02:34:53 --> Could not find the language line "Home"
ERROR - 2023-05-20 02:55:07 --> Could not find the language line "Home"
ERROR - 2023-05-20 02:55:08 --> Could not find the language line "Home"
ERROR - 2023-05-20 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 03:06:26 --> Could not find the language line "Home"
ERROR - 2023-05-20 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 04:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 04:08:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-20 04:13:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 04:31:18 --> Could not find the language line "Home"
ERROR - 2023-05-20 04:31:20 --> Could not find the language line "Home"
ERROR - 2023-05-20 04:31:55 --> Could not find the language line "Home"
ERROR - 2023-05-20 04:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-20 04:52:25 --> Could not find the language line "Home"
ERROR - 2023-05-20 05:00:00 --> 404 Page Not Found: Login/index
ERROR - 2023-05-20 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 05:00:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 05:05:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 05:05:53 --> Could not find the language line "Home"
ERROR - 2023-05-20 05:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 05:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:07:58 --> Could not find the language line "Home"
ERROR - 2023-05-20 05:08:34 --> Could not find the language line "Home"
ERROR - 2023-05-20 05:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-20 05:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:41:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:41:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:41:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:43:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:44:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 05:45:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 05:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:00:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:00:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:00:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:15:30 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:16:53 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 06:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:18:08 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:18:33 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:18:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:19:23 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:22:44 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:23:21 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:30:20 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:37:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:37:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:38:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:38:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:39:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 06:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 06:48:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 06:48:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 06:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:00:40 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-20 07:00:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-20 07:00:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-20 07:00:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-20 07:01:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:01:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:02:22 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:02:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:03:49 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:04:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:04:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:05:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:05:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:05:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 07:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:06:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:06:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:06:25 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:08:28 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:08:33 --> Could not find the language line "Perfume"
ERROR - 2023-05-20 07:08:40 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:11:08 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:13:06 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:13:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:13:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:13:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:13:55 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:14:30 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:14:42 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:14:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 07:14:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 07:14:47 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:15:08 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:15:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 07:15:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:16:30 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:16:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:16:52 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:17:00 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:17:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:18:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:19:52 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:20:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:21:03 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:21:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:24:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:24:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:24:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:37:56 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:38:39 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:48:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 07:48:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:50:28 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 07:53:39 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:59:07 --> Could not find the language line "Home"
ERROR - 2023-05-20 07:59:39 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:07:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:11:46 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:14:34 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:30:18 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:41:07 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:41:48 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:41:59 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:42:25 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:42:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:43:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:43:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:44:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:46:54 --> Could not find the language line "Home"
ERROR - 2023-05-20 08:47:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:47:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:50:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 08:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 08:52:53 --> Could not find the language line "Socks"
ERROR - 2023-05-20 08:53:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 08:53:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 09:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:14:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:14:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:14:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:14:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:14:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-20 09:14:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-20 09:14:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-20 09:14:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-20 09:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:15:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:15:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:16:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 09:16:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 09:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:17:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:17:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:19:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:21:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:28:27 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-05-20 09:28:29 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-05-20 09:28:32 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-20 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 09:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:34:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:35:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:35:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:38:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 09:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 09:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:09:05 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:19:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 10:19:50 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:21:54 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:46:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 10:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 10:48:28 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:48:45 --> Could not find the language line "Perfume"
ERROR - 2023-05-20 10:48:54 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:51:32 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 10:53:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:53:30 --> Could not find the language line "Home"
ERROR - 2023-05-20 10:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 10:59:54 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:05:59 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:20:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:22:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-20 11:22:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-20 11:22:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-20 11:22:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-20 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:33:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:35:04 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:36:30 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:37:02 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:37:09 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 11:37:29 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:37:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:40:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:40:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:40:48 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:40:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:41:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:41:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:41:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:42:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:42:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-20 11:42:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:42:53 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:42:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:44:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:46:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-20 11:46:32 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 11:59:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 11:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 12:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:03:59 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:04:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 12:04:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 12:04:21 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:04:27 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 12:04:53 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:11:09 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 12:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 12:17:51 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:19:57 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 12:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 12:26:46 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:26:47 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:26:47 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:41:01 --> Could not find the language line "Home"
ERROR - 2023-05-20 12:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:08:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 13:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:15:42 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:15:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 13:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 13:16:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 13:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 13:24:02 --> Could not find the language line "Socks"
ERROR - 2023-05-20 13:26:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 13:26:29 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:30:57 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:31:01 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:33:18 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:38:00 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:38:29 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:39:05 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-20 13:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:46:09 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:46:13 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-20 13:46:18 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-20 13:46:19 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-20 13:46:21 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-20 13:47:22 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:49:22 --> Could not find the language line "Home"
ERROR - 2023-05-20 13:49:23 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 13:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:49:40 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 13:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 13:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 13:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:05:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 14:25:39 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:27:27 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:32:36 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:33:43 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-05-20 14:49:23 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:49:23 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:49:23 --> Could not find the language line "Home"
ERROR - 2023-05-20 14:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 14:59:37 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:01:53 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:03:45 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:03:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 15:04:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:05:38 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:09:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-20 15:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:17:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:17:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:17:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:17:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:17:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:18:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:18:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:18:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:18:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:18:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:19:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:19:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:20:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:20:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:20:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:20:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:20:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:21:18 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:21:54 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:22:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 15:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 15:22:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 15:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 15:22:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 15:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 15:23:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:23:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:23:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 15:25:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-20 15:25:09 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:36:30 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 15:42:48 --> Could not find the language line "Home"
ERROR - 2023-05-20 15:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 16:05:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 16:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 16:16:05 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:16:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 16:16:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 16:16:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 16:17:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:17:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 16:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 16:18:15 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:18:16 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%f00%' OR a.description LIKE '%f00%' OR a.color LIKE '%f00%' OR a.barcode LIKE '%f00%' OR a.category LIKE '%f00%' OR a.sub_category LIKE '%f00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-20 16:22:50 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 16:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:42:02 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:47:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 16:53:27 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:53:28 --> Could not find the language line "Home"
ERROR - 2023-05-20 16:54:07 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:06:09 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:15:03 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:15:05 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:26:21 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:28:00 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:38:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:39:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 17:39:24 --> Could not find the language line "Home"
ERROR - 2023-05-20 17:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 17:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 18:13:22 --> Could not find the language line "Home"
ERROR - 2023-05-20 18:19:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-20 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-20 18:42:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 18:52:51 --> Could not find the language line "Home"
ERROR - 2023-05-20 18:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 18:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 18:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 18:57:46 --> Could not find the language line "Home"
ERROR - 2023-05-20 18:59:08 --> Could not find the language line "Home"
ERROR - 2023-05-20 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 19:01:01 --> Could not find the language line "Home"
ERROR - 2023-05-20 19:01:33 --> Could not find the language line "Perfume"
ERROR - 2023-05-20 19:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 19:02:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 19:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 19:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-20 19:37:04 --> Could not find the language line "Home"
ERROR - 2023-05-20 19:38:53 --> Could not find the language line "Home"
ERROR - 2023-05-20 19:43:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-20 19:54:41 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:07:04 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:15:18 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:18:02 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:48:34 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:53:55 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:59:29 --> Could not find the language line "Home"
ERROR - 2023-05-20 20:59:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-20 20:59:39 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:01:02 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:05:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:25:21 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:31:37 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:32:05 --> Could not find the language line "Home"
ERROR - 2023-05-20 21:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:37:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-20 21:38:14 --> Could not find the language line "Socks"
ERROR - 2023-05-20 21:38:50 --> Could not find the language line "Bracelets"
ERROR - 2023-05-20 21:38:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:39:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:40:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:40:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:40:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:41:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:41:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:41:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:42:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:42:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:43:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-20 21:43:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:43:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:43:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:43:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 21:44:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:44:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:44:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:44:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:44:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:44:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-20 21:53:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-20 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-20 22:19:45 --> Could not find the language line "Home"
ERROR - 2023-05-20 22:19:47 --> Could not find the language line "Home"
ERROR - 2023-05-20 22:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-20 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 22:34:21 --> Could not find the language line "Home"
ERROR - 2023-05-20 22:36:47 --> Could not find the language line "Home"
ERROR - 2023-05-20 22:36:51 --> Could not find the language line "Home"
ERROR - 2023-05-20 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-20 23:16:10 --> Could not find the language line "Other"
ERROR - 2023-05-20 23:18:37 --> Could not find the language line "Home"
ERROR - 2023-05-20 23:25:10 --> Could not find the language line "Other"
ERROR - 2023-05-20 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-20 23:38:11 --> Could not find the language line "Home"
ERROR - 2023-05-20 23:43:10 --> Could not find the language line "Other"
ERROR - 2023-05-20 23:45:34 --> Could not find the language line "Home"
ERROR - 2023-05-20 23:52:54 --> Could not find the language line "Home"
