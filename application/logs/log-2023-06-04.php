<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-04 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 00:40:54 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-06-04 00:40:55 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-06-04 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 01:05:45 --> Could not find the language line "Home"
ERROR - 2023-06-04 01:24:44 --> Could not find the language line "Home"
ERROR - 2023-06-04 01:26:37 --> Could not find the language line "Home"
ERROR - 2023-06-04 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-04 01:40:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 02:15:05 --> Could not find the language line "Home"
ERROR - 2023-06-04 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:02:22 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:07:51 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:07:54 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:07:57 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:08:01 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:08:04 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:08:07 --> 404 Page Not Found: 19837437_notfoundhtml/index
ERROR - 2023-06-04 03:08:10 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:13:47 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 03:53:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-04 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:00:33 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:10:39 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:15:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:25:40 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:26:10 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:29:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 04:57:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-04 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 05:28:57 --> Could not find the language line "Home"
ERROR - 2023-06-04 05:29:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-04 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:13:57 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:15:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:15:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:18:30 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:20:46 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:20:50 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:23:08 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:23:31 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:57:01 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:57:03 --> Could not find the language line "Home"
ERROR - 2023-06-04 06:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:57:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:57:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:57:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 06:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:58:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:59:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 06:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:06:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:22:21 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:24:24 --> Could not find the language line "clothing"
ERROR - 2023-06-04 07:24:25 --> Could not find the language line "clothing"
ERROR - 2023-06-04 07:24:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:25:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:26:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:26:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:26:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:26:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:29:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:29:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:30:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:30:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:30:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:30:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:31:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:31:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:32:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:32:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:32:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:32:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:32:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 07:33:10 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:34:16 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 07:34:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-04 07:34:58 --> Could not find the language line "Perfume"
ERROR - 2023-06-04 07:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:35:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 07:35:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 07:35:46 --> Could not find the language line "Socks"
ERROR - 2023-06-04 07:36:09 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:36:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 07:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:42:35 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 07:44:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 07:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:05:28 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:05:42 --> Could not find the language line "Perfume"
ERROR - 2023-06-04 08:05:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:06:05 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:06:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 08:06:42 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:06:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:11:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 08:11:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-04 08:11:38 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:11:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 08:12:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 08:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:00 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:29:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:29:39 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:40:08 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:40:47 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:40:48 --> Could not find the language line "Home"
ERROR - 2023-06-04 08:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 08:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:00:48 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:05:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:06:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:07:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:16:21 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:16:46 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:22:19 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:22:20 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-04 09:26:04 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:26:09 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:38:32 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:39:23 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:39:39 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:49:41 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:50:25 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:50:28 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:50:48 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:51:40 --> Could not find the language line "Perfume"
ERROR - 2023-06-04 09:51:43 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:52:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:56:55 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:57:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:57:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:57:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-04 09:59:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 09:59:40 --> Could not find the language line "Home"
ERROR - 2023-06-04 09:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 09:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:02:51 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:03:48 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:04:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 10:04:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 10:05:03 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 10:05:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 10:05:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 10:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:06:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 10:06:45 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:07:25 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:10:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:16:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:16:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:19:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:19:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:20:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:20:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:20:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:23:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-04 10:25:36 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:27:43 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:28:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:29:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:29:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:29:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:31:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:31:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:31:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:31:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:31:23 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:35:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:36:15 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:37:00 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:41:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 10:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 10:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 10:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 10:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 10:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 10:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-04 10:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-04 10:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-04 10:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-04 10:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-04 10:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-04 10:48:58 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:49:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 10:49:24 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:49:55 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:57:04 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:57:33 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:58:54 --> Could not find the language line "Home"
ERROR - 2023-06-04 10:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 10:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 11:00:00 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:00:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:01:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 11:03:08 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:16:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-04 11:16:08 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-04 11:16:08 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-04 11:16:08 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-04 11:17:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:17:32 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:24:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:36:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:36:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:36:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:36:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 11:37:09 --> Could not find the language line "Home"
ERROR - 2023-06-04 11:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 11:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 11:55:09 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-06-04 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:14:35 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-06-04 12:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:16:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:19:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:29:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:29:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:29:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:30:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:30:21 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:34:35 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-06-04 12:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:40:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:40:18 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:40:18 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:40:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:40:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 12:47:19 --> 404 Page Not Found: Storage/settings
ERROR - 2023-06-04 12:48:00 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:48:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:50:38 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:50:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:52:06 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:53:45 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:54:49 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:54:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 12:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 12:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:06:50 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:07:10 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:12:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:12:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:12:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:14:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:14:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:16:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:16:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:16:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:17:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:17:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:17:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:17:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:18:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:18:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:20:36 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-04 13:20:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-04 13:20:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-04 13:20:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-04 13:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:22:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:27:25 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:30:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:33:15 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:33:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:35:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:36:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:37:46 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:42:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:42:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 13:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:43:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 13:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:43:55 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:46:04 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:48:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-04 13:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:53:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:53:05 --> Could not find the language line "Home"
ERROR - 2023-06-04 13:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:54:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:54:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 13:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 13:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:12:24 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:24:34 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:29:04 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:29:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 14:34:32 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-04 14:34:32 --> Could not find the language line "Home"
ERROR - 2023-06-04 14:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:15:51 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:15:51 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:15:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:16:01 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 15:16:23 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 15:16:36 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 15:16:38 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:16:55 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:18:07 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 15:19:05 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 15:20:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:20:30 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:20:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 15:20:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 15:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 15:21:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 15:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 15:23:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 15:23:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 15:23:08 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:24:13 --> 404 Page Not Found: Git/config
ERROR - 2023-06-04 15:29:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:30:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 15:30:57 --> Could not find the language line "Home"
ERROR - 2023-06-04 15:42:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 15:55:43 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:00:31 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:02:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:03:41 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:08:33 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:09:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 16:09:22 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:09:40 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:09:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 16:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 16:09:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 16:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 16:12:23 --> 404 Page Not Found: Storage/settings
ERROR - 2023-06-04 16:20:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 16:20:48 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:38:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 16:57:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:57:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 16:57:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 17:01:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 17:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 17:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 17:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 17:58:47 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:01:28 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:01:29 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:01:29 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:01:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 18:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 18:02:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 18:03:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 18:03:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 18:03:33 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:03:45 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:05:08 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:33:51 --> Could not find the language line "Home"
ERROR - 2023-06-04 18:34:06 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:13:23 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 19:20:57 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:21:21 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:32:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:32:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:32:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 19:34:18 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:41:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 19:49:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:49:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:49:56 --> Could not find the language line "Home"
ERROR - 2023-06-04 19:57:54 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-04 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:12:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:17:10 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:17:49 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:17:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 20:17:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 20:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:18:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 20:18:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-04 20:18:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 20:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 20:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 20:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 20:19:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 20:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 20:19:23 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:19:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-04 20:19:38 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:19:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-04 20:19:46 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:19:48 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 20:20:03 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 20:20:11 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 20:20:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:20:33 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:31:41 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:31:55 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 20:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:32:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:33:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-04 20:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:33:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-04 20:34:28 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:34:32 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:34:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:35:01 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 20:35:30 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:35:34 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:37:02 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:37:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 20:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 20:37:58 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:04:31 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:12:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 21:23:02 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:23:02 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:23:03 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:31:25 --> 404 Page Not Found: Wp-ccphp/index
ERROR - 2023-06-04 21:31:25 --> 404 Page Not Found: Wp-commentinphp/index
ERROR - 2023-06-04 21:37:35 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:37:35 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:37:36 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:39:08 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:39:32 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:39:32 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:46:34 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:47:51 --> Could not find the language line "Home"
ERROR - 2023-06-04 21:48:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 21:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 21:50:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 21:51:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:51:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:52:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:52:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 21:53:04 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:05:20 --> 404 Page Not Found: Theme/assets
ERROR - 2023-06-04 22:26:21 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:31:29 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:42:19 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:42:52 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:44:25 --> Could not find the language line "Home"
ERROR - 2023-06-04 22:44:26 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:09:16 --> Could not find the language line "Bracelets"
ERROR - 2023-06-04 23:10:26 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:12:02 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:28:47 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:28:47 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:28:47 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:36:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 23:38:06 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:38:07 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:38:22 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:38:22 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:38:35 --> Could not find the language line "Perfume"
ERROR - 2023-06-04 23:38:46 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:39:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-04 23:40:13 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:41:21 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:41:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:41:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:41:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:41:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:42:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:42:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:42:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:42:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 23:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:43:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-04 23:43:23 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:51:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-04 23:51:53 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:57:27 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 23:58:40 --> Could not find the language line "Home"
ERROR - 2023-06-04 23:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-04 23:59:24 --> Could not find the language line "Home"
