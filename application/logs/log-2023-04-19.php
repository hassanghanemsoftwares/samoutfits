<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-19 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:02:31 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:02:33 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:03:00 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 00:03:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 00:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:05:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 00:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 00:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:06:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 00:06:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:06:44 --> Could not find the language line "Socks"
ERROR - 2023-04-19 00:06:48 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 00:07:12 --> Could not find the language line "Socks"
ERROR - 2023-04-19 00:10:04 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:10:23 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:10:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:10:58 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:16:52 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:17:35 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:24:41 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:27:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-19 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 00:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 00:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-19 01:00:19 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:06:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 01:09:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:10:09 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:10:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:10:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 01:10:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:10:56 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:21:41 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:22:49 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:23:06 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 01:23:19 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:23:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:23:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:23:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:23:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:23:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:24:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:24:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:24:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:24:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:24:41 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 01:24:42 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:24:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 01:24:52 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:25:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 01:25:20 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:25:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 01:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:25:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 01:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:25:57 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:26:31 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:30:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 01:30:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 01:30:40 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:30:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:31:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:31:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:31:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:32:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:32:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:32:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:32:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 01:32:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 01:32:18 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 01:32:30 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 01:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:33:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 01:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 01:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 01:33:25 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 01:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:12:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:31:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 02:31:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:35:44 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:36:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:36:36 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-19 02:36:37 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-04-19 02:36:37 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-04-19 02:36:38 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-04-19 02:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:39:05 --> Could not find the language line "Home"
ERROR - 2023-04-19 02:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 02:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-19 04:07:08 --> Could not find the language line "Home"
ERROR - 2023-04-19 04:17:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 04:58:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-19 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 05:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 05:20:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 05:52:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 05:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 05:54:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 05:54:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 05:54:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 05:54:31 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-19 05:54:39 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-19 05:54:44 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-19 05:54:52 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-19 05:54:55 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-19 05:54:59 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-19 05:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 05:58:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 05:59:37 --> Could not find the language line "Other"
ERROR - 2023-04-19 05:59:40 --> Could not find the language line "Other"
ERROR - 2023-04-19 06:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:04:01 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:05:21 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:05:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:06:44 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:10:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:10:59 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:12:41 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:17:43 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:21:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:21:48 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 06:22:22 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:22:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 06:22:44 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:23:23 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:24:17 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:28:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 06:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:33:01 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:33:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:46:49 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:47:43 --> Could not find the language line "Home"
ERROR - 2023-04-19 06:48:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 06:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:50:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 06:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 06:53:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:05:33 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:05:50 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 07:17:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 07:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 07:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:33:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 07:33:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:33:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 07:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 07:48:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:08:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:08:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:08:42 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:10:25 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:14:16 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:14:27 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:15:45 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:17:09 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:18:21 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:18:50 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:21:04 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-19 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:30:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:31:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:31:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:31:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 08:31:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:32:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:32:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:32:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:32:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:33:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:33:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:33:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:33:46 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:35:06 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:37:52 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:39:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 08:39:42 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:40:34 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:40:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:40:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:40:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 08:41:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:41:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 08:41:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 08:42:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 08:42:34 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:42:50 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 08:43:03 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 08:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:43:14 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 08:43:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:43:19 --> Could not find the language line "Socks"
ERROR - 2023-04-19 08:43:42 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:43:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 08:43:51 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:44:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 08:44:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 08:44:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 08:46:43 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:50:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:51:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:51:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:51:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:51:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:51:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:54:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:55:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:55:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:55:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:56:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:57:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:57:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 08:57:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 08:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 08:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:00:18 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:01:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:02:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:04:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:05:50 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:05:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:05:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:05:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:06:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 09:07:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:08:00 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:08:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:09:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:09:31 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:10:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 09:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:13:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:15:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:15:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:19:38 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:24:18 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:24:42 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:38:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-19 09:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:41:49 --> Could not find the language line "Home"
ERROR - 2023-04-19 09:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:49:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 09:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:54:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 09:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-19 09:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 09:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:08:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:15:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:16:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:16:57 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:23:03 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:25:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 10:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:25:46 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:27:30 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:27:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-19 10:27:57 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 10:28:02 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 10:28:02 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:39:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:43:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:44:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:46:45 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:47:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:48:02 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 10:48:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:48:55 --> Could not find the language line "Socks"
ERROR - 2023-04-19 10:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:49:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:49:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 10:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 10:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:49:56 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:50:12 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 10:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:51:09 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 10:52:17 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 10:52:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 10:52:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 10:52:33 --> Could not find the language line "Socks"
ERROR - 2023-04-19 10:52:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 10:52:41 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:54:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 10:55:06 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:56:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:56:54 --> Could not find the language line "Home"
ERROR - 2023-04-19 10:56:59 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 10:56:59 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 10:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:59:15 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 10:59:16 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 10:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 10:59:32 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 10:59:32 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:03:07 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:03:07 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:04:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 11:05:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:05:12 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:05:13 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:05:17 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:07:02 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:07:43 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:07:43 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:07:55 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 11:08:01 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:08:02 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:08:06 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:08:35 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:08:59 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:09:22 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:09:34 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:09:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:12:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:12:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:13:22 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:14:53 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:14:53 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:16:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:16:37 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:16:38 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:17:19 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:17:19 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 11:18:33 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:22:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:22:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:23:05 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:24:04 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:27:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 11:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:41:39 --> Could not find the language line "Home"
ERROR - 2023-04-19 11:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 11:59:44 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:00:00 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:01:06 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:01:40 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:01:49 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:06:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:07:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 12:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:13:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 12:13:40 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 12:14:35 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:14:35 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:15:14 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:15:14 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:15:30 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:15:30 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:15:45 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:15:45 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-19 12:19:45 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:23:22 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:25:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:28:02 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:29:48 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:30:00 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:31:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:32:01 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:32:22 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:35:06 --> Could not find the language line "Other"
ERROR - 2023-04-19 12:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:36:22 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:38:52 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:43:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:43:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:43:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 12:43:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:49:59 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:50:06 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 12:52:09 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:54:39 --> Could not find the language line "Home"
ERROR - 2023-04-19 12:54:46 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:01:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:01:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 13:01:39 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:01:45 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 13:01:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:01:56 --> Could not find the language line "Socks"
ERROR - 2023-04-19 13:02:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:02:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 13:02:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 13:02:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 13:02:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 13:03:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:11:28 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:39:55 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:43:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:43:46 --> 404 Page Not Found: Env/index
ERROR - 2023-04-19 13:43:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:49:04 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:52:04 --> 404 Page Not Found: Running-shoes-ahthy-llrkd/index
ERROR - 2023-04-19 13:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:55:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-19 13:55:48 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-19 13:55:48 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-19 13:55:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-19 13:56:26 --> Could not find the language line "Home"
ERROR - 2023-04-19 13:57:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 13:57:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-19 13:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 13:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 13:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-19 13:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-19 13:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-19 13:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-19 13:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:58:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 13:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 13:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:08:33 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 14:13:19 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:15:35 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:17:32 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:21:30 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:22:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 14:22:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 14:22:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 14:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:23:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 14:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:29:47 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:30:33 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 14:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:36:34 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:36:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:37:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:38:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:39:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:47:25 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:47:55 --> Could not find the language line "Home"
ERROR - 2023-04-19 14:47:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:48:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:48:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:48:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:49:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:49:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 14:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 14:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:06:30 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:17:26 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:21:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:26:34 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:29:36 --> Could not find the language line "Socks"
ERROR - 2023-04-19 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 15:43:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 15:45:19 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:52:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:52:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 15:55:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 16:00:18 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 16:14:54 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 16:15:33 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 16:16:21 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 16:16:58 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:17:30 --> Could not find the language line "Socks"
ERROR - 2023-04-19 16:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 16:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:47:01 --> Could not find the language line "Home"
ERROR - 2023-04-19 16:51:43 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:13:57 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:27:23 --> 404 Page Not Found: Components/com_acym
ERROR - 2023-04-19 17:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:29:25 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:38:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 17:38:35 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:39:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 17:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 17:40:00 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:40:59 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 17:54:56 --> Could not find the language line "Home"
ERROR - 2023-04-19 17:55:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:07:17 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:11:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:20:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:25:04 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:28:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:29:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:31:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:31:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:37:23 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:49:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 18:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:50:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-19 18:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:57:40 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 18:57:56 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 18:58:03 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:58:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 18:58:16 --> Could not find the language line "Home"
ERROR - 2023-04-19 18:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 19:06:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:06:16 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:09:48 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:11:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-19 19:11:30 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 19:11:44 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:17:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-19 19:19:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:21:55 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:22:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:30:01 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:38:02 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:46:18 --> Could not find the language line "Home"
ERROR - 2023-04-19 19:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 19:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 19:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 19:54:24 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:02:29 --> Could not find the language line "accounting"
ERROR - 2023-04-19 20:02:29 --> Could not find the language line "accounting"
ERROR - 2023-04-19 20:02:29 --> Could not find the language line "accounting"
ERROR - 2023-04-19 20:02:30 --> Could not find the language line "accounting"
ERROR - 2023-04-19 20:06:43 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:07:18 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:08:48 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:11:01 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:20:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-19 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:33:26 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:36:56 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:40:59 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:42:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:44:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:44:14 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-19 20:44:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-19 20:44:15 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-19 20:44:15 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-19 20:45:00 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:46:34 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:46:35 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:47:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:47:48 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:55:26 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 20:57:36 --> Could not find the language line "Home"
ERROR - 2023-04-19 20:58:30 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:00:28 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:00:33 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:00:38 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:01:18 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:01:53 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:06:24 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:06:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:06:54 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:07:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:07:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:07:56 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:08:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:08:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-19 21:08:27 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:08:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 21:08:46 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:08:50 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:08:54 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:09:15 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:19:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:22:17 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 21:25:48 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:26:19 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:26:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-19 21:26:39 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:27:08 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:27:12 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 21:27:29 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 21:27:44 --> Could not find the language line "Bracelets"
ERROR - 2023-04-19 21:27:47 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:27:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-19 21:28:17 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:28:40 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:28:43 --> Could not find the language line "Perfume"
ERROR - 2023-04-19 21:28:51 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:28:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 21:28:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-19 21:29:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:29:10 --> Could not find the language line "Socks"
ERROR - 2023-04-19 21:29:29 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:40:07 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:45:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:46:30 --> Could not find the language line "Home"
ERROR - 2023-04-19 21:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-19 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-19 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-19 22:32:05 --> Could not find the language line "Home"
ERROR - 2023-04-19 22:53:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-19 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-19 23:03:42 --> Could not find the language line "Home"
ERROR - 2023-04-19 23:06:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-19 23:18:37 --> Could not find the language line "Home"
ERROR - 2023-04-19 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-19 23:44:08 --> 404 Page Not Found: Assets/css
