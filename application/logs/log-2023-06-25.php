<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-25 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:02:21 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 00:18:30 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:28:45 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:30:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:34:54 --> Could not find the language line "Home"
ERROR - 2023-06-25 00:58:18 --> Could not find the language line "Other"
ERROR - 2023-06-25 00:58:22 --> Could not find the language line "products"
ERROR - 2023-06-25 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 01:15:18 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-06-25 01:21:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 01:48:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 01:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 02:04:18 --> Could not find the language line "Home"
ERROR - 2023-06-25 02:17:23 --> Could not find the language line "Home"
ERROR - 2023-06-25 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 02:31:49 --> Could not find the language line "Socks"
ERROR - 2023-06-25 02:33:14 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-25 02:52:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 02:56:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 02:56:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 03:12:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 03:13:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 03:18:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 03:22:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 03:22:45 --> 404 Page Not Found: Products/products
ERROR - 2023-06-25 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 03:41:29 --> Could not find the language line "products"
ERROR - 2023-06-25 03:43:39 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:00:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:00:26 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:07:16 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:11:05 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:12:08 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:12:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 04:19:25 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 04:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 04:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 04:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 04:25:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 04:52:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 04:53:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:03:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:03:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:17:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:20:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 05:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:27:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:35:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:54:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:55:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:55:56 --> Could not find the language line "products"
ERROR - 2023-06-25 05:57:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:58:18 --> Could not find the language line "Socks"
ERROR - 2023-06-25 05:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 05:59:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 05:59:48 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:04:21 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:04:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:04:32 --> Could not find the language line "Socks"
ERROR - 2023-06-25 06:04:48 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:10:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:11:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:13:18 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:14:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:15:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 06:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:19:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:19:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:22:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:27:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:27:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:28:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:31:43 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:32:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:33:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:34:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:38:21 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:39:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:40:19 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:42 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:41:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:41:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-25 06:41:53 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-25 06:41:53 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-25 06:41:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-25 06:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:42:35 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:05 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:43:25 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:43:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:43:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:44:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:50:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 06:51:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:52:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:53:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 06:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 06:59:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:10:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 07:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:17:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:19:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:20:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:20:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 07:20:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 07:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:23:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:23:28 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-25 07:23:29 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-25 07:23:29 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-25 07:23:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-25 07:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:24:38 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:25:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 07:25:26 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:28:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:34:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:35:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 07:40:38 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:41:30 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:42:26 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:45:33 --> Could not find the language line "products"
ERROR - 2023-06-25 07:46:08 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 07:48:21 --> Could not find the language line "products"
ERROR - 2023-06-25 07:51:57 --> Could not find the language line "products"
ERROR - 2023-06-25 07:57:04 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:59:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-25 07:59:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 07:59:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:01:06 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:01:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:01:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:03:26 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:03:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:04:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:04:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:13:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:19:21 --> Could not find the language line "products"
ERROR - 2023-06-25 08:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:21:51 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:23:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:23:16 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:24:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:25:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:25:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:27:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:28:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:28:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-25 08:29:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-25 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:33:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:34:30 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:36:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:36:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:36:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:37:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:39:08 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:40:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:42:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 08:43:13 --> 404 Page Not Found: Home/inde
ERROR - 2023-06-25 08:43:13 --> 404 Page Not Found: Home/inde
ERROR - 2023-06-25 08:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:48:58 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:50:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:51:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:52:49 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 08:58:23 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:59:05 --> Could not find the language line "Home"
ERROR - 2023-06-25 08:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:01:08 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:02:08 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:02:28 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:03:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:03:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:03:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:04:09 --> Could not find the language line "products"
ERROR - 2023-06-25 09:10:36 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:12:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:12:25 --> Could not find the language line "products"
ERROR - 2023-06-25 09:12:26 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:13:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:16:40 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:17:09 --> Could not find the language line "products"
ERROR - 2023-06-25 09:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:17:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:18:20 --> Could not find the language line "products"
ERROR - 2023-06-25 09:20:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:24:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:26:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:27:23 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:28:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:30:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:30:43 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:32:43 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:34:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:35:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:36:19 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:37:17 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:37:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:38:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:40:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:41:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:42:30 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:43:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 09:43:09 --> Could not find the language line "products"
ERROR - 2023-06-25 09:44:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:45:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:45:44 --> Could not find the language line "Bracelets"
ERROR - 2023-06-25 09:46:17 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:50:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:53:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:53:47 --> Could not find the language line "products"
ERROR - 2023-06-25 09:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:58:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 09:58:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:58:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 09:58:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 09:59:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:00:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:01:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:01:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:02:18 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:02:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:05:10 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:05:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:05:59 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:06:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:07:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:07:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:08:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:08:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:11:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:15:03 --> Could not find the language line "products"
ERROR - 2023-06-25 10:16:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:16:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:16:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:22:08 --> Could not find the language line "products"
ERROR - 2023-06-25 10:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:25:45 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:29:20 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:30:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:36:19 --> Could not find the language line "products"
ERROR - 2023-06-25 10:39:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:39:54 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:40:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:40:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:41:59 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:47:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:48:06 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:51:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:51:41 --> Could not find the language line "products"
ERROR - 2023-06-25 10:51:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:52:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:54:04 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:54:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:55:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 10:55:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:55:39 --> Could not find the language line "Perfume"
ERROR - 2023-06-25 10:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:56:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 10:56:21 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:56:36 --> Could not find the language line "Home"
ERROR - 2023-06-25 10:59:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:01:58 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:04:40 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:05:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:06:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:07:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:08:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:08:49 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:13:25 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:14:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:19:06 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:21:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:25:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:27:00 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:32:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:33:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:34:49 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:35:54 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:39:01 --> Could not find the language line "products"
ERROR - 2023-06-25 11:39:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:40:35 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:40:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 11:40:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:40:38 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-06-25 11:40:47 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-06-25 11:40:48 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-06-25 11:40:48 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-06-25 11:40:48 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:40:49 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-06-25 11:41:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:41:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:42:19 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:42:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:43:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:43:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:43:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:44:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 11:45:02 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 11:52:39 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:52:47 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:56:28 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:56:54 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:57:18 --> Could not find the language line "Home"
ERROR - 2023-06-25 11:58:21 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:00:47 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:06:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:06:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:11:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:15:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:15:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:17:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:17:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:17:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:17:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:17:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:17:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:19:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:19:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:28:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:29:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:29:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:30:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:08 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-06-25 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:32:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:32:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:33:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:42:17 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:43:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:43:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 12:48:51 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:50:45 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:53:17 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:54:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:54:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:54:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:54:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:55:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 12:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 12:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 12:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 12:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-25 12:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-25 12:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-25 12:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 12:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-25 12:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-25 12:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-25 12:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 12:58:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 12:58:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:00:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:01:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:02:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:09:20 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:13:21 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:20:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:21:02 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:22:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:22:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:24:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:27:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:29:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:39:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:39:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:40:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:42:19 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:43:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:44:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:44:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:44:51 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:44:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:45:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:45:02 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:45:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:45:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:45:40 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:45:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:45:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:46:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:46:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:46:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:47:23 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:47:54 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:52:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:53:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:53:05 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:53:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:54:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:54:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:54:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:55:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 13:56:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:57:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 13:58:39 --> Could not find the language line "Home"
ERROR - 2023-06-25 13:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:03:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:10:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 14:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 14:10:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:10:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 14:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:14:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 14:19:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:21:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:21:09 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:21:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:24:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:27:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:30:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:30:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 14:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:31:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 14:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:32:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:32:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:42:12 --> Could not find the language line "products"
ERROR - 2023-06-25 14:43:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:44:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:45:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:45:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:47:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 14:51:54 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:52:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-25 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 14:55:01 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-25 14:58:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:00:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:00:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 15:07:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:08:37 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:11:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:11:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:13:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 15:13:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 15:13:25 --> Could not find the language line "products"
ERROR - 2023-06-25 15:22:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:22:35 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:30:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:31:24 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:32:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:32:05 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:35:33 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:35:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:46:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:47:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:47:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 15:47:36 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:47:45 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:49:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:50:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:51:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 15:51:43 --> Could not find the language line "products"
ERROR - 2023-06-25 15:52:20 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 15:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 15:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-25 15:57:58 --> Could not find the language line "Perfume"
ERROR - 2023-06-25 15:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 15:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 15:59:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 15:59:10 --> Could not find the language line "Home"
ERROR - 2023-06-25 15:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 15:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 15:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 16:00:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 16:07:06 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:08:10 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:08:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:08:28 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:12:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:12:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:13:44 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:20:09 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:32:20 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:34:09 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:37:25 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:37:46 --> Could not find the language line "products"
ERROR - 2023-06-25 16:40:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:46:09 --> Could not find the language line "Home"
ERROR - 2023-06-25 16:47:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:00:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:03:19 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 17:09:39 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:11:16 --> Could not find the language line "products"
ERROR - 2023-06-25 17:14:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:18:39 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:19:49 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:20:14 --> Could not find the language line "Bracelets"
ERROR - 2023-06-25 17:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:22:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:22:03 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:22:10 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:22:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-25 17:22:51 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:22:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:22:58 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:23:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 17:23:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 17:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 17:24:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 17:24:09 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:24:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-25 17:24:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-25 17:24:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-25 17:24:59 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:25:05 --> Could not find the language line "Socks"
ERROR - 2023-06-25 17:29:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:31:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:38:50 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:38:57 --> Could not find the language line "products"
ERROR - 2023-06-25 17:39:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:42:26 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:43:05 --> Could not find the language line "Home"
ERROR - 2023-06-25 17:45:18 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:05:43 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:06:17 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:09:23 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-06-25 18:09:24 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-06-25 18:18:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:26:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-25 18:27:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:30:08 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:32:35 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:32:36 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:35:10 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:35:25 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:37:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:37:23 --> Could not find the language line "products"
ERROR - 2023-06-25 18:38:20 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:43:35 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:43:38 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:44:48 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:51:20 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:55:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:55:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:58:29 --> Could not find the language line "Home"
ERROR - 2023-06-25 18:59:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:02:35 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:02:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:03:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:08:28 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:09:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-25 19:13:10 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:13:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:23:23 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:25:38 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:26:16 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:26:16 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:27:18 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:27:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:29:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:31:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:31:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:37:24 --> Could not find the language line "Other"
ERROR - 2023-06-25 19:38:07 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:39:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:41:02 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:42:38 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:42:45 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 19:46:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:47:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:54:20 --> Could not find the language line "products"
ERROR - 2023-06-25 19:57:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:58:40 --> Could not find the language line "Home"
ERROR - 2023-06-25 19:59:43 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:02:58 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:04:04 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:07:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:08:55 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:09:01 --> Could not find the language line "products"
ERROR - 2023-06-25 20:10:43 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:20:48 --> 404 Page Not Found: Products/products
ERROR - 2023-06-25 20:21:48 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:21:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:22:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-25 20:22:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-25 20:22:21 --> Could not find the language line "Other"
ERROR - 2023-06-25 20:23:01 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:27:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:32:19 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:37:34 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:38:46 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:45:59 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:47:48 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:48:32 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:52:14 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:58:09 --> Could not find the language line "Home"
ERROR - 2023-06-25 20:59:17 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:00:23 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:00:48 --> 404 Page Not Found: Products/products
ERROR - 2023-06-25 21:07:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-25 21:15:11 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:26:04 --> Could not find the language line "products"
ERROR - 2023-06-25 21:28:45 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:29:31 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:31:52 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:34:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 21:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-25 21:44:42 --> Could not find the language line "Home"
ERROR - 2023-06-25 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 22:08:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 22:10:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 22:10:41 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-25 22:12:53 --> Could not find the language line "Home"
ERROR - 2023-06-25 22:17:22 --> Could not find the language line "Home"
ERROR - 2023-06-25 22:17:27 --> Could not find the language line "Home"
ERROR - 2023-06-25 22:27:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:07:04 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-25 23:22:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-25 23:28:06 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:28:36 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:42:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-25 23:42:41 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:42:56 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:42:57 --> Could not find the language line "Home"
ERROR - 2023-06-25 23:45:43 --> Could not find the language line "Home"
