<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-11 00:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 00:12:05 --> Could not find the language line "Home"
ERROR - 2023-10-11 00:15:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-11 01:28:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 02:33:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 02:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 02:34:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 02:38:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 02:49:22 --> Could not find the language line "Home"
ERROR - 2023-10-11 02:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 02:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 02:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 03:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 03:03:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 03:05:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 03:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 03:07:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 03:24:36 --> Could not find the language line "Home"
ERROR - 2023-10-11 03:27:48 --> Could not find the language line "Home"
ERROR - 2023-10-11 03:47:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 03:47:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-11 03:58:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 03:58:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:08:51 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:12:10 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:12:11 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:12:48 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:24:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-11 04:33:44 --> Could not find the language line "products"
ERROR - 2023-10-11 04:51:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:52:21 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 04:52:48 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:52:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 04:53:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 04:53:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 04:53:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:53:43 --> Could not find the language line "Home"
ERROR - 2023-10-11 04:53:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 04:54:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 04:55:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 04:55:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 04:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 04:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 05:00:51 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:03:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 05:03:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:07:05 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:12:46 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:13:28 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:13:39 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 05:13:44 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 05:13:47 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 05:13:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:13:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 05:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 05:14:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 05:14:26 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 05:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 05:16:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:19:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:19:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 05:19:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:25:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 05:40:55 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 05:41:51 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:57:45 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:57:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 05:57:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 05:57:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 05:57:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 05:57:48 --> 404 Page Not Found: Home/accounts
ERROR - 2023-10-11 05:57:48 --> 404 Page Not Found: Home/home
ERROR - 2023-10-11 05:57:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 05:58:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 05:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 05:59:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:02:43 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:03:39 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:03:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:04:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:04:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:04:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:04:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:05:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:05:44 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:06:55 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:07:09 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:28:07 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-11 06:29:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:30:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:39:58 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:47:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 06:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:50:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:54:04 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:55:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 06:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 06:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 07:04:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 07:07:18 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:08:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 07:08:15 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:10:07 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:14:06 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:20:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-11 07:21:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-11 07:21:11 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-11 07:21:11 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-11 07:21:11 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-11 07:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 07:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 07:22:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 07:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 07:32:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 07:33:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 07:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 07:34:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 07:34:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 07:41:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:42:00 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:44:54 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-11 07:52:45 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:55:35 --> Could not find the language line "Home"
ERROR - 2023-10-11 07:59:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-11 08:03:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-11 08:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 08:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 08:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 08:16:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-11 08:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 08:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 08:25:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 08:28:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-11 08:41:33 --> Could not find the language line "Home"
ERROR - 2023-10-11 08:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 08:42:36 --> Could not find the language line "Home"
ERROR - 2023-10-11 08:46:07 --> Could not find the language line "Socks"
ERROR - 2023-10-11 08:46:42 --> Could not find the language line "products"
ERROR - 2023-10-11 08:54:35 --> Could not find the language line "products"
ERROR - 2023-10-11 08:59:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 09:00:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:00:33 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:04:16 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 09:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 09:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 09:16:39 --> Could not find the language line "products"
ERROR - 2023-10-11 09:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 09:23:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 09:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 09:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 09:24:32 --> Could not find the language line "products"
ERROR - 2023-10-11 09:27:18 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 09:28:17 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:32:26 --> Could not find the language line "products"
ERROR - 2023-10-11 09:32:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:33:03 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:34:43 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:40:19 --> Could not find the language line "products"
ERROR - 2023-10-11 09:46:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 09:48:13 --> Could not find the language line "products"
ERROR - 2023-10-11 09:54:03 --> Could not find the language line "Home"
ERROR - 2023-10-11 09:56:06 --> Could not find the language line "products"
ERROR - 2023-10-11 10:03:00 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:03:02 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:03:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:03:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 10:03:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:04:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:04:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 10:04:39 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:05:32 --> Could not find the language line "products"
ERROR - 2023-10-11 10:06:20 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:11:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:12:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:13:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 10:13:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-11 10:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 10:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:21:18 --> Could not find the language line "products"
ERROR - 2023-10-11 10:24:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 10:34:08 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:37:04 --> Could not find the language line "products"
ERROR - 2023-10-11 10:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 10:39:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 10:40:00 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:41:00 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:44:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 10:52:50 --> Could not find the language line "products"
ERROR - 2023-10-11 11:00:27 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:00:42 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:01:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:02:23 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:02:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:02:26 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-11 11:02:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 11:02:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 11:02:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 11:02:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 11:02:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 11:04:09 --> Could not find the language line "Socks"
ERROR - 2023-10-11 11:04:10 --> Could not find the language line "Other"
ERROR - 2023-10-11 11:04:13 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 11:04:14 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 11:04:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 11:04:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 11:04:17 --> Could not find the language line "Other"
ERROR - 2023-10-11 11:04:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:18 --> Could not find the language line "Other"
ERROR - 2023-10-11 11:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:34 --> Could not find the language line "Other"
ERROR - 2023-10-11 11:04:36 --> Could not find the language line "Other"
ERROR - 2023-10-11 11:04:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:04:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 11:04:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 11:04:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 11:04:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 11:04:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 11:08:37 --> Could not find the language line "products"
ERROR - 2023-10-11 11:18:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:18:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:18:32 --> Could not find the language line "assets"
ERROR - 2023-10-11 11:20:43 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:23:03 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:24:24 --> Could not find the language line "products"
ERROR - 2023-10-11 11:31:45 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:32:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:43:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 11:44:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:44:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 11:44:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 11:44:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:45:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:45:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:45:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 11:46:01 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 11:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 11:48:44 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:49:47 --> Could not find the language line "products"
ERROR - 2023-10-11 11:51:27 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:51:58 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:52:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 11:52:31 --> Could not find the language line "Home"
ERROR - 2023-10-11 11:54:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:54:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 11:54:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:02:08 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:04:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:06:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 12:07:50 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:11:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:12:44 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:13:41 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-11 12:15:10 --> Could not find the language line "products"
ERROR - 2023-10-11 12:23:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 12:23:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:27:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:32:09 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:32:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:32:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:32:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:33:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:33:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:33:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 12:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 12:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 12:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 12:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 12:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 12:33:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 12:33:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:35:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:35:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:35:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:35:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:37:02 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:38:08 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:39:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:40:35 --> Could not find the language line "products"
ERROR - 2023-10-11 12:40:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:41:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 12:43:46 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:45:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 12:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 12:49:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:04:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 13:04:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 13:04:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 13:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:05:58 --> Could not find the language line "products"
ERROR - 2023-10-11 13:07:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:07:43 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:07:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 13:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 13:16:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 13:17:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:18:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:19:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:20:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:21:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:26:55 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:27:09 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:31:22 --> Could not find the language line "products"
ERROR - 2023-10-11 13:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:34:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 13:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:50:38 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:51:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:52:46 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:52:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:56:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:56:46 --> Could not find the language line "products"
ERROR - 2023-10-11 13:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 13:58:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:59:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:59:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:59:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:59:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:59:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 13:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:00:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 14:00:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-11 14:00:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-11 14:01:11 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:01:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-11 14:01:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-11 14:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:02:13 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:03:13 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:05:17 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:07:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:08:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:08:59 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 14:09:02 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:09:10 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:09:12 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 14:09:15 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:10:07 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:10:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:12:14 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:12:20 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:13:17 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:13:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 14:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:14:45 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:15:04 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:17:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 14:17:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 14:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:18:28 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:19:37 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 14:19:50 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 14:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:22:10 --> Could not find the language line "products"
ERROR - 2023-10-11 14:26:06 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:27:50 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:28:41 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:28:43 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:29:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 14:29:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 14:29:31 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:33:46 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:37:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 14:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:38:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 14:38:23 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:38:31 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:39:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:40:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:40:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:41:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:41:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:42:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:43:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:43:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:44:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:44:34 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:46:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:46:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:47:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:47:34 --> Could not find the language line "products"
ERROR - 2023-10-11 14:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:48:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:49:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:49:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:51:44 --> Could not find the language line "Home"
ERROR - 2023-10-11 14:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:52:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:52:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:52:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:53:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:53:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:53:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:54:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:54:08 --> Could not find the language line "Other"
ERROR - 2023-10-11 14:54:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 14:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 14:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:00:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 15:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:02:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:03:20 --> Could not find the language line "Other"
ERROR - 2023-10-11 15:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:03:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:05:35 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:05:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:07:06 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:07:11 --> 404 Page Not Found: Home/accounting
ERROR - 2023-10-11 15:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:07:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:08:01 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:08:45 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 15:08:50 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:08:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:09:04 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:09:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:09:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:10:05 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:10:22 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:10:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:12:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:13:06 --> Could not find the language line "products"
ERROR - 2023-10-11 15:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:20:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:21:00 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:21:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:36:10 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:40:38 --> Could not find the language line "products"
ERROR - 2023-10-11 15:43:48 --> 404 Page Not Found: Env/index
ERROR - 2023-10-11 15:43:51 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:46:20 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:51:32 --> Could not find the language line "products"
ERROR - 2023-10-11 15:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:54:13 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:56:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:57:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:57:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 15:57:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:59:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 15:59:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 15:59:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 16:00:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 16:00:24 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 16:00:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 16:00:36 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 16:00:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:00:50 --> Could not find the language line "Socks"
ERROR - 2023-10-11 16:00:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:03:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:04:08 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:04:24 --> Could not find the language line "products"
ERROR - 2023-10-11 16:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:06:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 16:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 16:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:08:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 16:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:08:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:14:10 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:14:52 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:14:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 16:14:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 16:14:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 16:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:15:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:17:14 --> Could not find the language line "products"
ERROR - 2023-10-11 16:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:21:41 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:22:05 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:24:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 16:24:41 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:26:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 16:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 16:26:54 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:35:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:38:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:41:12 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:41:36 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:42:57 --> Could not find the language line "products"
ERROR - 2023-10-11 16:45:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 16:45:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-11 16:45:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 16:45:55 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:46:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:46:48 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:46:48 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-11 16:46:57 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:47:31 --> Could not find the language line "Home"
ERROR - 2023-10-11 16:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 16:54:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 16:54:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 16:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-11 16:55:49 --> Could not find the language line "products"
ERROR - 2023-10-11 17:00:18 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:00:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 17:01:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 17:01:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 17:01:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:06:11 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:08:41 --> Could not find the language line "products"
ERROR - 2023-10-11 17:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:09:15 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:09:17 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:09:48 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:09:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-11 17:09:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:09:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:09:54 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 17:10:51 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 17:13:18 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:13:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:15:38 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:17:36 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:17:38 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:19:57 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:21:32 --> Could not find the language line "products"
ERROR - 2023-10-11 17:21:36 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:25:38 --> Could not find the language line "Socks"
ERROR - 2023-10-11 17:26:16 --> Could not find the language line "Socks"
ERROR - 2023-10-11 17:28:28 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:30:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:34:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 17:34:23 --> Could not find the language line "products"
ERROR - 2023-10-11 17:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:42:16 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:43:23 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:47:14 --> Could not find the language line "products"
ERROR - 2023-10-11 17:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:48:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 17:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:52:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-11 17:52:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-11 17:52:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-11 17:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:54:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 17:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 17:57:15 --> Could not find the language line "Socks"
ERROR - 2023-10-11 17:57:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:57:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:58:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:58:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:58:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:58:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:58:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 17:58:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:00:06 --> Could not find the language line "products"
ERROR - 2023-10-11 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:00:54 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:01:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:01:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:02:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:05:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:06:23 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:06:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 18:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 18:07:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 18:07:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 18:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 18:07:55 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:08:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:08:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:08:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:08:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:08:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:08:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-11 18:08:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:11:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:11:30 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:12:57 --> Could not find the language line "products"
ERROR - 2023-10-11 18:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:25:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:25:50 --> Could not find the language line "products"
ERROR - 2023-10-11 18:26:13 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:26:39 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 18:26:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:29:17 --> Could not find the language line "products"
ERROR - 2023-10-11 18:32:48 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:33:43 --> Could not find the language line "products"
ERROR - 2023-10-11 18:37:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 18:40:39 --> Could not find the language line "products"
ERROR - 2023-10-11 18:44:25 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:45:05 --> Could not find the language line "Home"
ERROR - 2023-10-11 18:47:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 18:47:34 --> Could not find the language line "products"
ERROR - 2023-10-11 18:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 18:54:30 --> Could not find the language line "products"
ERROR - 2023-10-11 18:55:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-11 19:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:00:42 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:01:26 --> Could not find the language line "products"
ERROR - 2023-10-11 19:02:06 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:03:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:03:55 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:03:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:04:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:07:27 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:08:28 --> Could not find the language line "products"
ERROR - 2023-10-11 19:08:32 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:08:34 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:08:38 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:08:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:08:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:15:16 --> Could not find the language line "products"
ERROR - 2023-10-11 19:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:17:11 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:19:04 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:19:07 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:19:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:19:46 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:19:46 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:21:16 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:21:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 19:22:11 --> Could not find the language line "products"
ERROR - 2023-10-11 19:22:47 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:23:39 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:23:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 19:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:29:06 --> Could not find the language line "products"
ERROR - 2023-10-11 19:33:54 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:35:08 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:36:02 --> Could not find the language line "products"
ERROR - 2023-10-11 19:36:27 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:41:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 19:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:41:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 19:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-11 19:42:58 --> Could not find the language line "products"
ERROR - 2023-10-11 19:44:17 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:44:38 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 19:49:08 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:49:13 --> Could not find the language line "Home"
ERROR - 2023-10-11 19:49:53 --> Could not find the language line "products"
ERROR - 2023-10-11 19:56:48 --> Could not find the language line "products"
ERROR - 2023-10-11 20:00:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:05:11 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:11:21 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:12:20 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 20:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 20:38:27 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:40:45 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 20:48:49 --> Could not find the language line "Home"
ERROR - 2023-10-11 20:53:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:10:51 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:11:05 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:11:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-11 21:16:58 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:22:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-11 21:28:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 21:42:55 --> 404 Page Not Found: Atomlibphp/index
ERROR - 2023-10-11 21:42:55 --> 404 Page Not Found: Wp-atomphp/index
ERROR - 2023-10-11 21:42:55 --> 404 Page Not Found: Ninjaphp/index
ERROR - 2023-10-11 21:42:55 --> 404 Page Not Found: Shellphp/index
ERROR - 2023-10-11 21:42:55 --> 404 Page Not Found: Simplephp/index
ERROR - 2023-10-11 21:42:55 --> 404 Page Not Found: Nf_trackingphp/index
ERROR - 2023-10-11 21:44:42 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:44:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-11 21:45:20 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:45:29 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:46:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:46:40 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:46:42 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:50:37 --> Could not find the language line "Home"
ERROR - 2023-10-11 21:54:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-11 21:59:53 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:00:00 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:18:15 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:21:51 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-11 22:35:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:37:36 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:39:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-11 22:39:24 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:45:58 --> Could not find the language line "Home"
ERROR - 2023-10-11 22:49:19 --> Could not find the language line "Home"
ERROR - 2023-10-11 23:13:56 --> Could not find the language line "Home"
ERROR - 2023-10-11 23:18:23 --> Could not find the language line "Perfume"
ERROR - 2023-10-11 23:25:59 --> Could not find the language line "Home"
ERROR - 2023-10-11 23:27:06 --> Could not find the language line "Clothing"
