<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-23 00:10:57 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:11:14 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:11:35 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:14:17 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:18:04 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:18:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:18:29 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:18:51 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 00:44:19 --> Could not find the language line "Home"
ERROR - 2024-12-23 00:47:02 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-23 01:14:18 --> Could not find the language line "Home"
ERROR - 2024-12-23 01:20:15 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-12-23 01:26:25 --> Could not find the language line "Home"
ERROR - 2024-12-23 01:26:25 --> Could not find the language line "Home"
ERROR - 2024-12-23 01:26:26 --> Could not find the language line "Home"
ERROR - 2024-12-23 01:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 01:29:57 --> Could not find the language line "Home"
ERROR - 2024-12-23 01:29:59 --> Could not find the language line "Other"
ERROR - 2024-12-23 01:41:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-23 01:42:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-23 01:42:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-23 01:44:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 01:53:44 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:14:17 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 02:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 02:27:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:32:13 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:32:14 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:36:06 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 02:44:21 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 02:45:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 02:54:03 --> Could not find the language line "Home"
ERROR - 2024-12-23 02:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 02:59:14 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 03:14:18 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:19:47 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 03:22:07 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:22:39 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:28:07 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:30:06 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:32:04 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 03:40:29 --> Could not find the language line "Bracelets"
ERROR - 2024-12-23 03:44:19 --> Could not find the language line "Home"
ERROR - 2024-12-23 03:45:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-23 03:50:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-23 03:56:06 --> 404 Page Not Found: Sitemap/index
ERROR - 2024-12-23 03:57:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-23 03:58:45 --> Could not find the language line "Home"
ERROR - 2024-12-23 04:14:22 --> Could not find the language line "Home"
ERROR - 2024-12-23 04:34:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 04:39:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 04:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 04:44:20 --> Could not find the language line "Home"
ERROR - 2024-12-23 04:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:13:07 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 05:14:20 --> Could not find the language line "Home"
ERROR - 2024-12-23 05:20:29 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 05:25:31 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 05:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:33:49 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-23 05:44:21 --> Could not find the language line "Home"
ERROR - 2024-12-23 05:45:27 --> Could not find the language line "Home"
ERROR - 2024-12-23 05:45:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:46:15 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:46:28 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:46:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:46:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:47:42 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:47:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:48:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:12 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:15 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:25 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:28 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:48:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:49:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 05:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 05:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 06:14:20 --> Could not find the language line "Home"
ERROR - 2024-12-23 06:17:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-23 06:17:48 --> Could not find the language line "Home"
ERROR - 2024-12-23 06:25:45 --> Could not find the language line "Home"
ERROR - 2024-12-23 06:44:29 --> Could not find the language line "Home"
ERROR - 2024-12-23 07:11:13 --> Could not find the language line "Home"
ERROR - 2024-12-23 07:14:20 --> Could not find the language line "Home"
ERROR - 2024-12-23 07:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:21:33 --> Could not find the language line "Home"
ERROR - 2024-12-23 07:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 07:40:08 --> Could not find the language line "Home"
ERROR - 2024-12-23 07:40:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-23 07:44:20 --> Could not find the language line "Home"
ERROR - 2024-12-23 07:51:51 --> Could not find the language line "Home"
ERROR - 2024-12-23 08:14:21 --> Could not find the language line "Home"
ERROR - 2024-12-23 08:16:25 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 08:16:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 08:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 08:44:21 --> Could not find the language line "Home"
ERROR - 2024-12-23 08:53:12 --> Could not find the language line "Home"
ERROR - 2024-12-23 08:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:14:22 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:15:58 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:20:42 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:21:22 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:21:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:21:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:21:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:21:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:22:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:22:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:22:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:23:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:23:22 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:24:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-23 09:25:03 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:25:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-23 09:25:08 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:25:08 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:25:08 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:25:22 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:25:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:25:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 09:25:58 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:34:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:36:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:36:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 09:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 09:38:18 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:38:44 --> Could not find the language line "Home"
ERROR - 2024-12-23 09:44:21 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:05:44 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:10:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 10:14:22 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:18:17 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:18:19 --> 404 Page Not Found: Home/accounts
ERROR - 2024-12-23 10:18:19 --> 404 Page Not Found: Home/assets
ERROR - 2024-12-23 10:18:19 --> 404 Page Not Found: Home/home
ERROR - 2024-12-23 10:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 10:24:40 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:27:44 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:31:51 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:35:08 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:42:50 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:44:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 10:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 10:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 10:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 10:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 10:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 10:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:12:27 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:14:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:15:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:18:17 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:27 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:19:47 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:19:48 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:20:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:23:34 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:25:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:25:55 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-12-23 11:26:43 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:28:33 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:31:11 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:34:16 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:34:17 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:36:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 11:37:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 11:38:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 11:43:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 11:43:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 11:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 11:44:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 11:53:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:12:32 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:13:40 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:13:41 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:14:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:15:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:15:27 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-23 12:15:37 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:15:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-23 12:15:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-23 12:15:38 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:15:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:15:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:15:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:15:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 12:15:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Socks"
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Perfume"
ERROR - 2024-12-23 12:15:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:15:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:15:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:15:58 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:15:58 --> Could not find the language line "Other"
ERROR - 2024-12-23 12:16:07 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-23 12:16:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:16:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:16:08 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:16:08 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-23 12:16:08 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 12:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:16:28 --> Could not find the language line "Disclaimer"
ERROR - 2024-12-23 12:22:41 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:26:40 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:28:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 12:28:31 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 12:31:39 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 12:44:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:48:49 --> Could not find the language line "Home"
ERROR - 2024-12-23 12:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:07:06 --> Could not find the language line "Home"
ERROR - 2024-12-23 13:14:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 13:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:32:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 13:32:45 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 13:32:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 13:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 13:44:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 13:56:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-23 13:57:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-23 13:58:48 --> Could not find the language line "Home"
ERROR - 2024-12-23 13:59:13 --> Could not find the language line "Home"
ERROR - 2024-12-23 13:59:20 --> Could not find the language line "Socks"
ERROR - 2024-12-23 13:59:20 --> Could not find the language line "Socks"
ERROR - 2024-12-23 13:59:49 --> Could not find the language line "Socks"
ERROR - 2024-12-23 13:59:53 --> Could not find the language line "Socks"
ERROR - 2024-12-23 13:59:54 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:00:04 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:06:34 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 14:07:06 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 14:07:49 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:07:55 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:07:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-23 14:08:07 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:08:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-23 14:14:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:44:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 14:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 14:53:13 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 15:04:41 --> Could not find the language line "Home"
ERROR - 2024-12-23 15:08:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-23 15:14:25 --> Could not find the language line "Home"
ERROR - 2024-12-23 15:44:25 --> Could not find the language line "Home"
ERROR - 2024-12-23 15:47:13 --> Could not find the language line "Home"
ERROR - 2024-12-23 15:48:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 15:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 15:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 15:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 15:49:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 15:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 15:50:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-23 15:50:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 15:52:36 --> Could not find the language line "Home"
ERROR - 2024-12-23 16:10:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 16:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 16:14:25 --> Could not find the language line "Home"
ERROR - 2024-12-23 16:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 16:20:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 16:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 16:22:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 16:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 16:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 16:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 16:32:55 --> Could not find the language line "Home"
ERROR - 2024-12-23 16:44:26 --> Could not find the language line "Home"
ERROR - 2024-12-23 16:54:21 --> Could not find the language line "Home"
ERROR - 2024-12-23 16:54:22 --> Could not find the language line "Home"
ERROR - 2024-12-23 16:55:01 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 17:08:12 --> 404 Page Not Found: Media/mainstream
ERROR - 2024-12-23 17:14:26 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:15:26 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 17:25:39 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:30:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 17:30:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-23 17:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 17:40:25 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:44:26 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:53:15 --> Could not find the language line "Home"
ERROR - 2024-12-23 17:55:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 18:06:01 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:14:26 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:14:29 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:24:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:24:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-23 18:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 18:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-23 18:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-23 18:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-23 18:27:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-23 18:37:36 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 18:44:27 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 18:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 18:52:39 --> Could not find the language line "Home"
ERROR - 2024-12-23 18:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 19:02:54 --> Could not find the language line "Home"
ERROR - 2024-12-23 19:09:39 --> Could not find the language line "Home"
ERROR - 2024-12-23 19:14:27 --> Could not find the language line "Home"
ERROR - 2024-12-23 19:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 19:38:15 --> Could not find the language line "Home"
ERROR - 2024-12-23 19:44:27 --> Could not find the language line "Home"
ERROR - 2024-12-23 19:54:16 --> Could not find the language line "Home"
ERROR - 2024-12-23 20:10:10 --> Could not find the language line "Home"
ERROR - 2024-12-23 20:14:23 --> Could not find the language line "Home"
ERROR - 2024-12-23 20:14:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 20:14:27 --> Could not find the language line "Home"
ERROR - 2024-12-23 20:44:28 --> Could not find the language line "Home"
ERROR - 2024-12-23 20:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 21:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 21:14:29 --> Could not find the language line "Home"
ERROR - 2024-12-23 21:44:28 --> Could not find the language line "Home"
ERROR - 2024-12-23 21:54:10 --> Could not find the language line "Home"
ERROR - 2024-12-23 21:54:33 --> Could not find the language line "Home"
ERROR - 2024-12-23 21:55:15 --> Could not find the language line "Home"
ERROR - 2024-12-23 21:55:15 --> Could not find the language line "Home"
ERROR - 2024-12-23 21:55:16 --> Could not find the language line "Home"
ERROR - 2024-12-23 22:14:29 --> Could not find the language line "Home"
ERROR - 2024-12-23 22:20:24 --> Could not find the language line "Home"
ERROR - 2024-12-23 22:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 22:26:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-23 22:26:34 --> Could not find the language line "Clothing"
ERROR - 2024-12-23 22:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 22:44:29 --> Could not find the language line "Home"
ERROR - 2024-12-23 22:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 23:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-23 23:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-23 23:14:34 --> Could not find the language line "Home"
ERROR - 2024-12-23 23:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-23 23:25:47 --> Could not find the language line "Home"
ERROR - 2024-12-23 23:25:49 --> Could not find the language line "Other"
ERROR - 2024-12-23 23:44:30 --> Could not find the language line "Home"
