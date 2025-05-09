<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-05 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 00:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-05 00:50:51 --> Could not find the language line "Other"
ERROR - 2023-04-05 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 01:04:27 --> Could not find the language line "Home"
ERROR - 2023-04-05 01:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-05 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 01:39:36 --> Could not find the language line "Home"
ERROR - 2023-04-05 01:42:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 01:46:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-05 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:01:00 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:20:44 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 02:24:40 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 02:29:50 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 02:34:00 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:35:23 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:35:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 02:35:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 02:36:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 02:36:45 --> Could not find the language line "Home"
ERROR - 2023-04-05 02:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 02:59:23 --> Could not find the language line "Home"
ERROR - 2023-04-05 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 03:17:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 03:20:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 03:20:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 03:51:56 --> Could not find the language line "Home"
ERROR - 2023-04-05 03:52:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-05 03:52:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-05 03:52:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-05 03:52:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-05 03:52:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-05 03:52:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-05 03:52:58 --> Could not find the language line "Home"
ERROR - 2023-04-05 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 04:27:05 --> Could not find the language line "Home"
ERROR - 2023-04-05 04:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 04:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 04:51:04 --> Could not find the language line "Socks"
ERROR - 2023-04-05 04:51:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 05:00:17 --> Could not find the language line "Home"
ERROR - 2023-04-05 05:23:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 05:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 05:56:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:04:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:14:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-05 06:17:18 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:22:33 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:40:26 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:47:26 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:47:38 --> Could not find the language line "Home"
ERROR - 2023-04-05 06:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 06:58:07 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:02:15 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:18:58 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:29:44 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:30:33 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:30:47 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:30:49 --> Could not find the language line "Bracelets"
ERROR - 2023-04-05 07:31:02 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:31:48 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:31:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 07:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:32:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 07:32:32 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:44:26 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:44:45 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:47:41 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:54:33 --> Could not find the language line "Home"
ERROR - 2023-04-05 07:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 07:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:01:51 --> Could not find the language line "Disclaimer"
ERROR - 2023-04-05 08:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:09:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 08:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:11:02 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:12:18 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:13:33 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:13:37 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:13:40 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-05 08:13:40 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:13:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-05 08:13:43 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:17:05 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:18:34 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:19:52 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:24:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-05 08:24:51 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-05 08:24:52 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-05 08:24:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-05 08:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:25:08 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:25:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:30:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-05 08:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:47:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:47:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:47:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:47:59 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:48:43 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:50:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:50:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:53:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:53:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:56:35 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 08:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:57:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:57:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 08:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 08:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:00:18 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:08:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-05 09:08:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-05 09:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:40:46 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:41:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 09:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:43:30 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:45:21 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:45:46 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:45:47 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:46:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:47:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:47:16 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:49:14 --> Could not find the language line "Perfume"
ERROR - 2023-04-05 09:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:52:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 09:52:22 --> Could not find the language line "Home"
ERROR - 2023-04-05 09:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 09:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:09:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 10:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:18:48 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:21:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:23:19 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:23:32 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:24:52 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:25:17 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:25:34 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:25:42 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:30:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 10:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:39:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 10:46:53 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:46:53 --> Could not find the language line "Home"
ERROR - 2023-04-05 10:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 10:54:53 --> Could not find the language line "Home"
ERROR - 2023-04-05 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 11:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:09:49 --> Could not find the language line "Home"
ERROR - 2023-04-05 11:20:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-05 11:29:49 --> Could not find the language line "Home"
ERROR - 2023-04-05 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 11:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:41:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-05 11:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:44:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-05 11:44:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-05 11:44:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-05 11:44:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-05 11:48:34 --> Could not find the language line "Home"
ERROR - 2023-04-05 11:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 11:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:05:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:05:15 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:06:49 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:06:54 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:07:16 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:07:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 12:07:40 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:09:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:14:19 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:14:44 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 12:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 12:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 12:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 12:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 12:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 12:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:04:47 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:04:52 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:07:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:22:58 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:25:48 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:38:45 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:44:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-05 13:44:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-05 13:44:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-05 13:44:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-05 13:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:48:35 --> Could not find the language line "Home"
ERROR - 2023-04-05 13:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 13:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:04:53 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:16:55 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:17:07 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:17:34 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:18:02 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:18:38 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:19:27 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:19:43 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:21:50 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:22:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:22:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:22:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:22:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:23:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:23:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 14:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:23:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:23:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:23:36 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:23:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:24:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:24:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:24:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:25:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:25:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:32:19 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:32:47 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 14:39:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:42:48 --> Could not find the language line "Home"
ERROR - 2023-04-05 14:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 15:20:26 --> Could not find the language line "Home"
ERROR - 2023-04-05 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 15:34:58 --> Could not find the language line "Home"
ERROR - 2023-04-05 15:39:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 15:49:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 15:49:13 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-04-05 15:49:14 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-04-05 15:49:15 --> Could not find the language line "Home"
ERROR - 2023-04-05 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 16:04:35 --> Could not find the language line "Home"
ERROR - 2023-04-05 16:19:06 --> Could not find the language line "Home"
ERROR - 2023-04-05 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 16:33:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 16:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 16:55:59 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:12:07 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:16:44 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 17:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 17:17:53 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:18:16 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 17:51:34 --> Could not find the language line "Home"
ERROR - 2023-04-05 17:54:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-05 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:02:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 18:04:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-05 18:08:59 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:09:09 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:15:57 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:17:58 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:19:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-05 18:20:15 --> 404 Page Not Found: Assets/global
ERROR - 2023-04-05 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:51:42 --> Could not find the language line "Home"
ERROR - 2023-04-05 18:57:19 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:10:02 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:10:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 19:10:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 19:11:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 19:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:11:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 19:11:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 19:11:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 19:11:45 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:12:35 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:15:07 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:41:49 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:41:51 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:51:08 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:53:24 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:53:47 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 19:56:04 --> Could not find the language line "Home"
ERROR - 2023-04-05 19:59:32 --> Could not find the language line "Home"
ERROR - 2023-04-05 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 20:06:03 --> 404 Page Not Found: Git/index
ERROR - 2023-04-05 20:24:13 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-05 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 20:40:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 20:42:44 --> Could not find the language line "Home"
ERROR - 2023-04-05 20:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 21:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 21:05:55 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:06:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:08:36 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 21:09:11 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 21:09:41 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 21:35:04 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:13:29 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:14:32 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:16:42 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:17:13 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:19:16 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:19:37 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:20:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 22:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 22:49:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-05 22:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:00:20 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:11:46 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:13:29 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:14:22 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:14:55 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:15:05 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:15:29 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:15:46 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:16:34 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:19:52 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:19:53 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:21:19 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:21:47 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:22:04 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-05 23:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:22:12 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-05 23:23:43 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:28:24 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:35:16 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:36:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-05 23:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:37:41 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:42:01 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:42:45 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:45:35 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:46:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 23:46:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 23:47:15 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:47:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-05 23:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:49:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-05 23:50:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-05 23:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:55:36 --> Could not find the language line "Home"
ERROR - 2023-04-05 23:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-05 23:59:27 --> 404 Page Not Found: Assets/css
