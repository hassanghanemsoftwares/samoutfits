<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-13 00:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 00:00:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 00:00:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 00:11:23 --> Could not find the language line "Home"
ERROR - 2023-03-13 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 01:13:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 01:19:40 --> Could not find the language line "Perfume"
ERROR - 2023-03-13 01:28:55 --> Could not find the language line "Home"
ERROR - 2023-03-13 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 02:27:06 --> Could not find the language line "Home"
ERROR - 2023-03-13 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 02:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-13 02:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 03:48:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 03:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-13 03:59:44 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:00:51 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:05:31 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:19:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:47:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 04:56:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 04:56:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:57:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:57:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 04:57:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 04:57:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:58:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:58:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:59:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 04:59:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 04:59:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 04:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:00:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:00:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:01:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:01:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:01:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:01:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:02:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:02:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:02:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:03:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:03:59 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:04:00 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:04:21 --> Could not find the language line "Perfume"
ERROR - 2023-03-13 05:04:27 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:04:35 --> Could not find the language line "Socks"
ERROR - 2023-03-13 05:04:48 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:05:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:19:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:42:31 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:45:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 05:46:24 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:52:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 05:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:57:59 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 05:58:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 05:58:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 05:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 05:59:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 05:59:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 05:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 06:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 06:01:56 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:01:56 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-13 06:01:56 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-13 06:01:57 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-13 06:01:57 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-13 06:01:58 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-03-13 06:01:58 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-13 06:01:58 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-13 06:01:58 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-13 06:01:58 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-13 06:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 06:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 06:03:01 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:03:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-13 06:06:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 06:09:40 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:29:22 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 06:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:13:01 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:13:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:16:25 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:25:00 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:25:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-13 07:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:25:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:26:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:27:05 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:27:38 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:28:26 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:28:38 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 07:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:41:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-13 07:41:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-13 07:41:15 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-13 07:41:15 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-13 07:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:53:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 07:53:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 07:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 07:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:00:18 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:03:18 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:08:27 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:19:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:27:32 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:30:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 08:33:57 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:34:06 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:34:29 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:36:20 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 08:51:47 --> Could not find the language line "Home"
ERROR - 2023-03-13 08:52:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:07:28 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:09:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 09:09:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 09:09:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 09:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:10:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 09:10:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 09:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:12:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 09:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:14:00 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:15:35 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:18:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 09:18:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 09:18:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 09:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:18:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 09:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:35:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:36:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:36:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:36:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:36:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:36:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:37:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:37:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:48:41 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 09:48:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 09:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:49:41 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 09:49:50 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 09:51:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 09:52:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 09:52:54 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 09:57:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:57:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:57:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:57:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:58:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:58:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 09:58:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 09:59:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:00:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:00:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 10:00:54 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:05:33 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:11:09 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:15:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:15:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 10:15:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 10:15:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:15:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:18:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:19:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:19:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:19:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:19:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:19:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:20:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:21:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:21:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:21:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:21:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:21:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:22:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:22:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:23:59 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:37:19 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:40:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:40:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:40:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:41:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:43:56 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:44:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:44:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:44:20 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 10:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:44:26 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 10:44:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:44:40 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 10:44:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:44:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:44:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:45:54 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 10:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:46:15 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 10:46:18 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:46:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:46:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 10:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:48:37 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:49:07 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:53:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:54:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 10:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:57:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 10:57:57 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:58:47 --> Could not find the language line "Home"
ERROR - 2023-03-13 10:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 10:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:59:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 10:59:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 10:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:59:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 10:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 10:59:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 10:59:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 11:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:05:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:07:41 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:07:43 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:08:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:09:20 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:23:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:37:28 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:40:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:41:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:41:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 11:41:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:42:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:43:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:44:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:44:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:45:08 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:45:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:45:52 --> Could not find the language line "Socks"
ERROR - 2023-03-13 11:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:46:08 --> Could not find the language line "Socks"
ERROR - 2023-03-13 11:46:13 --> Could not find the language line "Socks"
ERROR - 2023-03-13 11:46:16 --> Could not find the language line "Socks"
ERROR - 2023-03-13 11:46:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:46:59 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:47:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:47:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 11:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:47:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:47:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 11:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:47:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:47:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:48:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:48:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:48:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:48:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:49:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:49:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:49:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:49:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:49:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:50:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:51:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:51:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:51:39 --> Could not find the language line "socks"
ERROR - 2023-03-13 11:51:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:52:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:52:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:52:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:52:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 11:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:53:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:54:06 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:54:49 --> Could not find the language line "Home"
ERROR - 2023-03-13 11:54:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:57:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:58:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:58:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:58:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 11:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 11:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:00:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:00:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:00:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:05:19 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:05:29 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:06:24 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:06:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:06:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:06:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:06:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:06:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:06:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:07:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:07:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:07:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:07:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:07:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:07:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 12:07:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:08:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:08:38 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:15:29 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:20:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:36:08 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:36:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:36:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 12:36:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:36:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:36:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 12:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:37:06 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 12:37:30 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:37:33 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:37:36 --> Could not find the language line "Socks"
ERROR - 2023-03-13 12:37:59 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:38:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:38:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 12:38:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 12:41:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 12:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 12:55:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 12:55:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 12:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-13 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:09:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-13 13:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:15:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 13:15:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 13:15:53 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:21:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 13:21:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 13:21:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 13:21:27 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 13:21:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 13:21:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 13:21:48 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 13:21:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 13:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:22:06 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 13:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:24:20 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 13:24:41 --> Could not find the language line "Hair%20"
ERROR - 2023-03-13 13:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:26:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 13:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:26:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 13:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:30:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:30:58 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:36:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-13 13:36:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-13 13:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:39:54 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:42:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 13:42:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 13:47:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:51:26 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:57:26 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:57:36 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:57:38 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:57:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 13:57:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 13:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:58:59 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:59:21 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 13:59:35 --> Could not find the language line "Home"
ERROR - 2023-03-13 13:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:01:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:03:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:03:29 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:05:25 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-13 14:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-13 14:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-13 14:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-13 14:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-13 14:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:07:55 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:10:03 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:10:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 14:11:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 14:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:14:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 14:14:33 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:15:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:18:58 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 14:19:55 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:19:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 14:19:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 14:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:20:24 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:21:42 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:23:27 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:24:42 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:24:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:25:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:25:39 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:27:21 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:28:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:28:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-13 14:28:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:28:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-13 14:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-13 14:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-13 14:28:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-13 14:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-13 14:28:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 14:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:28:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 14:28:37 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:29:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:29:22 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:30:09 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:30:42 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:32:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:35:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 14:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:38:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:38:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 14:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:45:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 14:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:48:21 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:50:44 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:51:50 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:53:54 --> Could not find the language line "Home"
ERROR - 2023-03-13 14:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 14:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:08:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:09:34 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:13:49 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:20:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:20:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:20:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:20:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:21:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:22:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:22:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:23:44 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:26:26 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:27:40 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:28:57 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:31:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:32:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:33:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:34:30 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:42:40 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:45:23 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 15:55:46 --> Could not find the language line "Home"
ERROR - 2023-03-13 15:58:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 15:58:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 16:00:09 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:20:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:25:58 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:38:34 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:39:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:45:39 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:45:56 --> Could not find the language line "Home"
ERROR - 2023-03-13 16:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 16:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 17:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 17:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 17:07:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 17:07:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 17:08:23 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:09:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 17:09:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 17:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 17:10:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 17:20:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 17:26:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:41:20 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:42:28 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:43:16 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-03-13 17:43:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:43:17 --> 404 Page Not Found: Wp/index
ERROR - 2023-03-13 17:43:18 --> 404 Page Not Found: Bc/index
ERROR - 2023-03-13 17:43:18 --> 404 Page Not Found: Bk/index
ERROR - 2023-03-13 17:43:18 --> 404 Page Not Found: Backup/index
ERROR - 2023-03-13 17:43:19 --> 404 Page Not Found: New/index
ERROR - 2023-03-13 17:43:20 --> 404 Page Not Found: Main/index
ERROR - 2023-03-13 17:43:20 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:52:34 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 17:54:09 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:54:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-13 17:54:38 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:54:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-13 17:54:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-13 17:54:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:55:24 --> Could not find the language line "Bracelets"
ERROR - 2023-03-13 17:55:30 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:56:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 17:58:55 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:00:43 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:00:57 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:07:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:07:15 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:07:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:07:30 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:11:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:17:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 18:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:18:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 18:19:08 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:19:22 --> Could not find the language line "Perfume"
ERROR - 2023-03-13 18:19:29 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:19:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 18:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:19:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 18:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:20:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 18:20:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 18:20:09 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:20:14 --> Could not find the language line "Bracelets"
ERROR - 2023-03-13 18:20:41 --> Could not find the language line "Bracelets"
ERROR - 2023-03-13 18:20:52 --> Could not find the language line "Bracelets"
ERROR - 2023-03-13 18:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:20:58 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:25:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 18:26:19 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:37:34 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-13 18:45:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 18:46:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 18:47:56 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:48:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 18:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 18:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:52:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 18:52:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 18:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-13 18:53:05 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:53:08 --> Could not find the language line "Bracelets"
ERROR - 2023-03-13 18:53:30 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:53:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 18:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 18:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:13:25 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:13:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:14:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 19:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:14:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:15:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:16:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:16:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 19:17:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:18:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:18:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:19:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 19:19:40 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:22:17 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:22:58 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:23:38 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:23:44 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:23:44 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:23:53 --> Could not find the language line "Socks"
ERROR - 2023-03-13 19:24:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:26:28 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:26:34 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:27:39 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:28:37 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:32:24 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:33:57 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:43:05 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:47:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 19:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 19:50:14 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:52:08 --> Could not find the language line "Home"
ERROR - 2023-03-13 19:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:01:49 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:05:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 20:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 20:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:06:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 20:06:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 20:07:19 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:11:02 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:11:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:11:29 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:11:33 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:11:46 --> Could not find the language line "Socks"
ERROR - 2023-03-13 20:12:04 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:12:07 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:13:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:13:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:13:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-13 20:13:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-13 20:14:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-13 20:14:45 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:19:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:20:35 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:21:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-13 20:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 20:34:23 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:34:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 20:34:52 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:35:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 20:35:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-13 20:42:19 --> Could not find the language line "Home"
ERROR - 2023-03-13 20:57:52 --> 404 Page Not Found: Public/admin
ERROR - 2023-03-13 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 21:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 21:20:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-13 21:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 21:28:04 --> Could not find the language line "Home"
ERROR - 2023-03-13 21:28:46 --> Could not find the language line "Home"
ERROR - 2023-03-13 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 21:37:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:02:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-13 22:03:18 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:04:25 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 22:05:11 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 22:20:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-13 22:21:00 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:26:43 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:26:59 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:27:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 22:27:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-13 22:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 22:27:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 22:27:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 22:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 22:27:34 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:27:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-13 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 22:34:42 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:42:49 --> Could not find the language line "Home"
ERROR - 2023-03-13 22:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-13 23:05:26 --> Could not find the language line "Home"
ERROR - 2023-03-13 23:08:10 --> Could not find the language line "Home"
ERROR - 2023-03-13 23:15:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-13 23:15:15 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-13 23:30:19 --> Could not find the language line "Home"
ERROR - 2023-03-13 23:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 23:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-13 23:58:40 --> Could not find the language line "Home"
ERROR - 2023-03-13 23:59:00 --> 404 Page Not Found: Assets/css
