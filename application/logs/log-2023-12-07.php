<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-07 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 00:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 00:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 00:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 00:21:19 --> Could not find the language line "Home"
ERROR - 2023-12-07 00:26:45 --> Could not find the language line "products"
ERROR - 2023-12-07 00:30:24 --> Could not find the language line "Home"
ERROR - 2023-12-07 00:41:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 00:41:45 --> Could not find the language line "products"
ERROR - 2023-12-07 00:57:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 00:57:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:02:29 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:04:15 --> 404 Page Not Found: Products/products
ERROR - 2023-12-07 01:07:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:18:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 01:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 01:23:05 --> Could not find the language line "Other"
ERROR - 2023-12-07 01:23:16 --> Could not find the language line "Other"
ERROR - 2023-12-07 01:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 01:29:32 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:32:01 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:33:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 01:33:57 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:35:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 01:38:00 --> Could not find the language line "products"
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:39:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 01:43:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 01:43:34 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:46:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 01:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 01:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 02:00:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:01:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 02:07:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:10:53 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:10:56 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:10:58 --> Could not find the language line "products"
ERROR - 2023-12-07 02:17:11 --> Could not find the language line "products"
ERROR - 2023-12-07 02:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 02:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 02:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 02:23:23 --> Could not find the language line "products"
ERROR - 2023-12-07 02:30:19 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:32:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:33:16 --> Could not find the language line "Home"
ERROR - 2023-12-07 02:38:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 02:45:07 --> Could not find the language line "products"
ERROR - 2023-12-07 02:47:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 02:49:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 03:12:10 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-07 03:13:22 --> Could not find the language line "products"
ERROR - 2023-12-07 03:18:06 --> Could not find the language line "products"
ERROR - 2023-12-07 03:18:29 --> Could not find the language line "Home"
ERROR - 2023-12-07 03:27:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:32:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:33:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 03:47:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 03:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 03:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:16:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:18:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:19:37 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-12-07 04:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:21:16 --> Could not find the language line "products"
ERROR - 2023-12-07 04:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:24:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 04:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:26:11 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:36:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-07 04:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:37:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 04:37:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 04:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:38:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:38:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:38:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:38:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:38:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 04:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:49:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 04:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:52:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 04:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 04:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-07 05:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:09:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 05:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:12:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-07 05:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:21:39 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 05:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:26:49 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 05:27:12 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 05:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:27:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 05:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:34:48 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:36:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-07 05:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:43:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:49:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:49:58 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 05:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:50:13 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 05:50:22 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 05:50:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:50:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 05:50:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:53:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:53:53 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 05:53:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 05:54:10 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 05:54:13 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 05:54:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:54:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 05:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 05:59:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:01:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:01:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 06:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:06:16 --> Could not find the language line "products"
ERROR - 2023-12-07 06:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:09:03 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:25:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 06:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:27:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:27:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 06:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:28:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:28:21 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:28:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:28:36 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:28:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:29:00 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 06:29:04 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:29:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:29:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 06:29:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:29:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 06:29:53 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:30:16 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:30:57 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:31:03 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 06:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:31:20 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 06:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:31:45 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 06:31:45 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 06:31:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:31:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:32:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:32:32 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:33:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:33:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:34:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:35:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 06:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:37:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 06:37:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:47:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:47:46 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 06:48:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 06:48:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:49:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 06:49:43 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 06:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:51:26 --> Could not find the language line "products"
ERROR - 2023-12-07 06:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:51:49 --> 404 Page Not Found: Emergencyphp/index
ERROR - 2023-12-07 06:51:51 --> 404 Page Not Found: Resetphp/index
ERROR - 2023-12-07 06:51:53 --> 404 Page Not Found: Passphp/index
ERROR - 2023-12-07 06:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:58:51 --> Could not find the language line "Home"
ERROR - 2023-12-07 06:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 06:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:02:31 --> Could not find the language line "products"
ERROR - 2023-12-07 07:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 07:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 07:03:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 07:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:05:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 07:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:08:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:11:51 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:13:46 --> Could not find the language line "products"
ERROR - 2023-12-07 07:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:15:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:17:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 07:19:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 07:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 07:19:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 07:19:23 --> Could not find the language line "products"
ERROR - 2023-12-07 07:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:23:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 07:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 07:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:37:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 07:37:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-07 07:37:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-07 07:37:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:37:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:37:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:37:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:37:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:37:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:37:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:38:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 07:38:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:39:44 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 07:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:41:44 --> Could not find the language line "Home"
ERROR - 2023-12-07 07:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:41:53 --> Could not find the language line "products"
ERROR - 2023-12-07 07:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:44:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 07:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:57:14 --> Could not find the language line "products"
ERROR - 2023-12-07 07:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 07:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:01:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:01:10 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:05:24 --> 404 Page Not Found: Products/products
ERROR - 2023-12-07 08:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:05:35 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:07:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 08:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:07:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:07:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:07:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-12-07 08:07:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-12-07 08:07:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-12-07 08:07:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-07 08:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:08:53 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:10:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:13:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 08:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:15:03 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:16:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 08:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:18:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:18:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 08:19:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-07 08:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:20:00 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:22:35 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:23:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 08:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:23:38 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:23:52 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 08:24:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 08:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:25:52 --> Could not find the language line "products"
ERROR - 2023-12-07 08:26:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 08:26:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-07 08:26:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-07 08:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:29:57 --> 404 Page Not Found: Products/products
ERROR - 2023-12-07 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 08:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:47:52 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-07 08:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:53:49 --> Could not find the language line "products"
ERROR - 2023-12-07 08:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 08:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:01:19 --> Could not find the language line "products"
ERROR - 2023-12-07 09:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:06:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 09:06:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:07:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:12:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 09:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:21:30 --> Could not find the language line "Socks"
ERROR - 2023-12-07 09:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:30:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:32:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:38:49 --> 404 Page Not Found: Products/products
ERROR - 2023-12-07 09:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:41:59 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:46:59 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:47:57 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:48:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:48:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 09:48:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:50:04 --> Could not find the language line "products"
ERROR - 2023-12-07 09:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:50:46 --> Could not find the language line "Home"
ERROR - 2023-12-07 09:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 09:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:01:39 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 10:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:07:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:08:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:09:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 10:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:15:51 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:16:00 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:19:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 10:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:27:02 --> Could not find the language line "products"
ERROR - 2023-12-07 10:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:36:52 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:36:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 10:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:43:46 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:44:04 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:44:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:44:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:44:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:45:23 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 10:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:45:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:45:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:46:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:46:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:46:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 10:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 10:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:46:38 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:46:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-07 10:46:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:46:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:47:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:47:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:47:56 --> Could not find the language line "Socks"
ERROR - 2023-12-07 10:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:48:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:48:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:48:48 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 10:49:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 10:49:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 10:49:40 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:50:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 10:50:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 10:50:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 10:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:50:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 10:50:53 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 10:50:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:50:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:51:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:51:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:52:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:52:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:52:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:52:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:52:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:52:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:56:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 10:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:59:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:59:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 10:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 10:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:00:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:00:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:01:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:01:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:01:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:01:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:01:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:01:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:02:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:02:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:03:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:03:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:03:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:03:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:04:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:04:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:04:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:05:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:05:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:20:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 11:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:21:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:21:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:22:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:22:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:23:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:23:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:23:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:23:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:23:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:23:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:24:19 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:24:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:24:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:24:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:26:16 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:27:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:27:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:27:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 11:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:28:00 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 11:28:02 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:29:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:29:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:29:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:31:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:31:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 11:31:46 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:33:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-07 11:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:37:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:46:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:46:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 11:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 11:55:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 11:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 11:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:00:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:04:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 12:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:09:40 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:10:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:11:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:11:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:11:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:11:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:11:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:11:57 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 12:12:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:13:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 12:13:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:13:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:14:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 12:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:14:59 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:16:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 12:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 12:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:25:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:26:35 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:26:38 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:27:28 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 12:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:27:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:27:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:27:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:28:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:28:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:29:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:29:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:30:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:30:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:30:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:30:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:30:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:30:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:31:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:31:16 --> Could not find the language line "products"
ERROR - 2023-12-07 12:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:31:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:31:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:31:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:31:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:31:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:32:21 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 12:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:32:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:32:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:32:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:32:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:33:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:33:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:33:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:33:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:34:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:34:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:34:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:34:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:35:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:35:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:35:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:35:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:36:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:36:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:37:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:37:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 12:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:40:24 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:41:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:41:40 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 12:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:51:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 12:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:53:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:54:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 12:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:54:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 12:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 12:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:01:14 --> Could not find the language line "products"
ERROR - 2023-12-07 13:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:02:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:02:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:02:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 13:03:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:11:59 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:12:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:13:03 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:14:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:17:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:19:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-07 13:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:19:54 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 13:19:56 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:20:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:20:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:21:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:21:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:23:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:23:48 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 13:23:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:23:58 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 13:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:27:34 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 13:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:32:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:32:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:33:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:33:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:33:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:37:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:37:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:38:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:38:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:39:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:39:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:39:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:39:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:39:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:06 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:40:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:40:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:40:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:41:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:41:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:42:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:42:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:42:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:42:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:44:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:44:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:44:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 13:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:45:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:45:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:45:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:45:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:45:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 13:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:46:19 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 13:46:27 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 13:46:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 13:46:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:48:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 13:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:51:53 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:54:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:54:51 --> 404 Page Not Found: Item/811583
ERROR - 2023-12-07 13:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:56:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:58:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 13:58:27 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 13:58:35 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 13:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:59:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:59:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 13:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 13:59:45 --> Could not find the language line "Socks"
ERROR - 2023-12-07 14:00:10 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 14:00:10 --> Could not find the language line "products"
ERROR - 2023-12-07 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:02:46 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:03:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:06:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:07:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:07:37 --> Could not find the language line "products"
ERROR - 2023-12-07 14:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:07:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:07:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:08:48 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 14:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:11:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:12:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:13:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 14:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:14:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 14:14:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:14:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:15:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:15:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:16:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:16:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:16:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:16:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:24:25 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 14:24:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:24:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:24:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:24:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:24:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:25:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:25:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:25:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:25:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:26:48 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:26:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:26:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:26:56 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:27:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:27:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:27:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:28:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:28:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:28:36 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:28:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:28:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:28:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:29:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:29:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:33:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 14:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:38:25 --> Could not find the language line "products"
ERROR - 2023-12-07 14:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:40:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:40:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:40:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:40:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:40:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:41:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:41:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:41:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:41:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:44:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:44:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:44:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:45:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:45:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:45:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 14:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:45:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:45:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:46:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:46:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:46:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:47:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:48:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:48:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:49:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:49:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:49:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:49:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:50:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:50:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 14:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:50:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:50:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:50:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:54:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:54:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 14:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-07 14:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:58:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 14:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 14:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:00:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:00:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 15:00:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 15:00:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 15:00:20 --> 404 Page Not Found: Home/accounts
ERROR - 2023-12-07 15:00:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 15:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:02:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:02:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 15:02:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:02:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:02:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:03:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:03:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:03:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:03:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:04:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:05:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:05:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:06:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:06:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:06:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:06:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:06:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:06:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:07:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:07:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:07:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:07:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:10:25 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:11:38 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:12:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:13:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:13:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:13:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:13:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:17:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:17:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:17:24 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:20:21 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:20:58 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 15:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:21:13 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 15:21:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:21:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:21:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:22:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:22:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:22:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:22:34 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:23:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:24:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:24:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 15:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:25:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:29:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:29:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:29:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:30:25 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:30:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:38 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 15:30:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:30:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:31:06 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:32:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-07 15:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:37:29 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:37:35 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:37:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:38:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:38:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:38:33 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:38:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:38:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:38:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:38:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:39:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:39:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:39:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:39:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 15:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:40:32 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:41:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:41:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:41:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:41:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:41:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:43:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:43:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:43:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:43:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:44:57 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-12-07 15:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:46:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:46:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:46:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:47:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:47:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:48:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:48:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:48:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:48:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:49:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:49:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:49:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:50:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:50:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 15:51:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:51:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:52:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:52:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 15:53:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:53:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:53:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:53:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:54:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:55:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:55:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:55:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:55:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:55:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:55:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:56:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:56:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:56:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:56:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:56:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 15:57:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 15:57:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:06:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:08:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:09:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:09:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:11:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:11:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:15:19 --> 404 Page Not Found: Item/811808
ERROR - 2023-12-07 16:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:31:19 --> 404 Page Not Found: Storage/settings
ERROR - 2023-12-07 16:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:31:32 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:32:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:33:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:36:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:37:11 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:37:19 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:37:24 --> Could not find the language line "Socks"
ERROR - 2023-12-07 16:37:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 16:37:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:38:06 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 16:38:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:38:55 --> Could not find the language line "Socks"
ERROR - 2023-12-07 16:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:46:03 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:46:20 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-07 16:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:48:24 --> Could not find the language line "0"
ERROR - 2023-12-07 16:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:51:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:51:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:52:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:52:34 --> Could not find the language line "Hair%20"
ERROR - 2023-12-07 16:52:34 --> Could not find the language line "Hair%20"
ERROR - 2023-12-07 16:52:54 --> Could not find the language line "Hair%20"
ERROR - 2023-12-07 16:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:53:11 --> Could not find the language line "Hair%20"
ERROR - 2023-12-07 16:53:16 --> Could not find the language line "Hair%20"
ERROR - 2023-12-07 16:53:24 --> Could not find the language line "products"
ERROR - 2023-12-07 16:53:25 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:53:33 --> Could not find the language line "Socks"
ERROR - 2023-12-07 16:53:53 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 16:54:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:54:33 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 16:54:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:55:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 16:55:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 16:55:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:55:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:55:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:55:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:55:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:55:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:55:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 16:56:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:56:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:56:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 16:56:33 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:56:35 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 16:56:38 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 16:56:47 --> Could not find the language line "Hair%20"
ERROR - 2023-12-07 16:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 16:58:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 16:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:01:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:02:25 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:03:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 17:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:04:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:05:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:05:40 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:05:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:05:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:06:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 17:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:06:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 17:06:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 17:07:00 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:07:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:09:46 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-12-07 17:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:22:34 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:22:40 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:22:56 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:23:24 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:23:24 --> Could not find the language line "products"
ERROR - 2023-12-07 17:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:23:51 --> Could not find the language line "Socks"
ERROR - 2023-12-07 17:23:51 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:24:03 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:24:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:24:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:24:38 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:24:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:25:13 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:25:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:26:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:26:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:27:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:27:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:16 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:27:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:27:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:27:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:27:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:27:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:28:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:28:48 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:29:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:29:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 17:29:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 17:29:32 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 17:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:30:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 17:30:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 17:30:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 17:30:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:34:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:40:33 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:43:02 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:43:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:44:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:44:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:44:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:44:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 17:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:49:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:49:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 17:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:49:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:49:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:50:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:51:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:51:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 17:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:54:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 17:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 17:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:00:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:05:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:08:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 18:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:10:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:10:33 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:10:56 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:33 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:38 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:40 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-07 18:13:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:15:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:16:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:17:33 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:21:07 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:21:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:21:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:21:15 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:21:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:21:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:21:18 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 18:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:21:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 18:21:27 --> Could not find the language line "Socks"
ERROR - 2023-12-07 18:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 18:21:32 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:24:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:24:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:24:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:29:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 18:29:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 18:29:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:30:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:31:06 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:31:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:33:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:36:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:36:28 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:36:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:36:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:37:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:37:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:37:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 18:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:38:48 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:40:27 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:41:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 18:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:42:36 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:42:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:44:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:44:56 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 18:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:46:01 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 18:48:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 18:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:55:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:57:01 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:58:52 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 18:58:52 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 18:58:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 18:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:59:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:59:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:59:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 18:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:59:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 18:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 18:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:00:25 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:00:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:00:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:00:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:00:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:02:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:02:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:02:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:02:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 19:02:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 19:02:53 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:06:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:06:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 19:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:07:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:09:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:09:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:11:44 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:14:26 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:14:26 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:14:26 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:23:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-07 19:23:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '10'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-07 19:23:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-07 19:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:30:16 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:30:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:30:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:31:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-07 19:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:35:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:35:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:35:54 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:36:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:36:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:36:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:37:24 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:37:25 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:37:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:38:24 --> Could not find the language line "products"
ERROR - 2023-12-07 19:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:39:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:39:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:40:07 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:40:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:40:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:41:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:41:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:41:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:42:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:43:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:43:28 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:43:29 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:43:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:43:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:44:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 19:44:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 19:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:46:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:46:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 19:58:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 19:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:03:46 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:07:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:07:34 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:07:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:07:48 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:04 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:08:39 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:40 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:08:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:10:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 20:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:18:19 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:18:31 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:26:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 20:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:27:34 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:28:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:28:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-07 20:28:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:28:46 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 20:28:51 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:28:52 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 20:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:29:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:29:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 20:29:26 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:29:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:29:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:29:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:29:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:29:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:29:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:30:00 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:30:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:30:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:30:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:30:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 20:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:31:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:32:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 20:32:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 20:32:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 20:33:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:33:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:33:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:33:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:42:03 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 20:42:51 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:43:26 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-07 20:49:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:49:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-07 20:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:50:35 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:51:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:52:11 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:52:30 --> Could not find the language line "Socks"
ERROR - 2023-12-07 20:52:37 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:53:08 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:53:12 --> Could not find the language line "Home"
ERROR - 2023-12-07 20:53:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 20:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 20:59:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 20:59:06 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:01:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:02:52 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:02:52 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:03:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:08:38 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:08:38 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:10:21 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:10:22 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:14:57 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:16:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:16:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:16:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:16:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:16:47 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:17:01 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:18:03 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:18:03 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:21:04 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:21:42 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:22:07 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:22:07 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:23:20 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:23:20 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-07 21:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:27:34 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:28:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:29:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:32:48 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:33:00 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 21:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:33:31 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 21:33:41 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:33:53 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 21:33:55 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:35:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:36:44 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:37:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:07 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:37:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:38:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 21:38:05 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:38:15 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 21:38:19 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 21:38:28 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:38:29 --> Could not find the language line "Perfume"
ERROR - 2023-12-07 21:38:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:44:23 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:44:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:44:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:26 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:45:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-07 21:45:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:45:46 --> Could not find the language line "Home"
ERROR - 2023-12-07 21:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 21:56:07 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:12:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-07 22:13:02 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:14:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:17:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:18:00 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:18:20 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:21:52 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:22:12 --> Could not find the language line "Bracelets"
ERROR - 2023-12-07 22:22:43 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:22:44 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-07 22:23:24 --> Could not find the language line "products"
ERROR - 2023-12-07 22:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:28:13 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:33:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:35:51 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:42:45 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:43:18 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:44:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:44:21 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:46:33 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:47:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-07 22:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:49:09 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:50:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:51:27 --> Could not find the language line "Home"
ERROR - 2023-12-07 22:54:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-07 22:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 22:59:11 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:00:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:01:02 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:01:14 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:08:24 --> Could not find the language line "products"
ERROR - 2023-12-07 23:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:26:35 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:30:22 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:42:49 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:45:17 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:46:36 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:46:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-07 23:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:47:50 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:47:52 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:50:57 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-12-07 23:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:55:30 --> Could not find the language line "Home"
ERROR - 2023-12-07 23:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-07 23:59:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
