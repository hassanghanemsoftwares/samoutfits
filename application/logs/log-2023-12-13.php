<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-13 00:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 00:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 00:11:55 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-13 00:14:30 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 00:15:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:15:52 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:19:07 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 00:21:28 --> Could not find the language line "products"
ERROR - 2023-12-13 00:22:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 00:22:48 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:27:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:30:35 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:30:56 --> Could not find the language line "products"
ERROR - 2023-12-13 00:33:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 00:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 00:43:24 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:49:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:51:01 --> Could not find the language line "products"
ERROR - 2023-12-13 00:51:59 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:52:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:52:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:52:28 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:54:08 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:54:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:55:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:55:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:55:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 00:55:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 00:56:17 --> Could not find the language line "Home"
ERROR - 2023-12-13 00:56:21 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:56:31 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:56:43 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:56:46 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:56:57 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:57:11 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:57:28 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:57:32 --> Could not find the language line "Socks"
ERROR - 2023-12-13 00:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 01:00:56 --> 404 Page Not Found: Products/products
ERROR - 2023-12-13 01:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 01:19:17 --> Could not find the language line "Home"
ERROR - 2023-12-13 01:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 01:30:56 --> Could not find the language line "products"
ERROR - 2023-12-13 01:49:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 02:02:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 02:07:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:07:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 02:19:17 --> Could not find the language line "Home"
ERROR - 2023-12-13 02:27:39 --> Could not find the language line "Other"
ERROR - 2023-12-13 02:30:56 --> Could not find the language line "products"
ERROR - 2023-12-13 02:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 02:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 02:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 02:43:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 02:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 02:47:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 02:47:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 02:49:07 --> Could not find the language line "Home"
ERROR - 2023-12-13 02:51:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 02:51:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 03:01:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 03:08:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 03:09:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-13 03:10:53 --> Could not find the language line "Home"
ERROR - 2023-12-13 03:12:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 03:12:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 03:19:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 03:45:56 --> Could not find the language line "products"
ERROR - 2023-12-13 03:49:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:08:26 --> Could not find the language line "products"
ERROR - 2023-12-13 04:12:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 04:12:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 04:12:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:12:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 04:19:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:22:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 04:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 04:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 04:41:26 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:56:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:57:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:57:06 --> Could not find the language line "Home"
ERROR - 2023-12-13 04:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 04:57:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 04:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 04:59:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 04:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:04:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 05:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 05:07:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 05:08:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 05:08:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 05:10:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 05:14:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 05:14:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 05:18:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 05:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 05:19:08 --> Could not find the language line "products"
ERROR - 2023-12-13 05:27:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 05:28:30 --> 404 Page Not Found: Item/2024
ERROR - 2023-12-13 05:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 05:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 05:34:07 --> Could not find the language line "Home"
ERROR - 2023-12-13 05:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 05:49:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 05:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 06:05:16 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:12:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:19:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:23:26 --> Could not find the language line "products"
ERROR - 2023-12-13 06:24:55 --> Could not find the language line "Other"
ERROR - 2023-12-13 06:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 06:28:51 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 06:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:49:09 --> Could not find the language line "products"
ERROR - 2023-12-13 06:54:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 06:55:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 06:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 06:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 06:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 07:08:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 07:13:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 07:14:18 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:14:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 07:14:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:14:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 07:15:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 07:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 07:15:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 07:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 07:15:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 07:15:55 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:16:53 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:17:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 07:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:21:17 --> Could not find the language line "products"
ERROR - 2023-12-13 07:22:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 07:37:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 07:37:21 --> Could not find the language line "products"
ERROR - 2023-12-13 07:38:26 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 07:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:51:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 07:53:26 --> Could not find the language line "products"
ERROR - 2023-12-13 08:08:46 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 08:09:36 --> Could not find the language line "products"
ERROR - 2023-12-13 08:12:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 08:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 08:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 08:19:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:21:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 08:21:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-12-13 08:21:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 08:21:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 08:21:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('36')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 08:21:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 08:23:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:23:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 08:27:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 08:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 08:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-12-13 08:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 08:33:56 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:34:58 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 08:35:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:35:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 08:41:38 --> Could not find the language line "products"
ERROR - 2023-12-13 08:42:23 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:46:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:46:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:46:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 08:46:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:46:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:47:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:47:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:47:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:47:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:48:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:48:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 08:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:52:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 08:53:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:55:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:55:28 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:55:44 --> Could not find the language line "Home"
ERROR - 2023-12-13 08:57:43 --> Could not find the language line "products"
ERROR - 2023-12-13 08:58:32 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-13 08:59:07 --> Could not find the language line "Other"
ERROR - 2023-12-13 08:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:00:57 --> Could not find the language line "Other"
ERROR - 2023-12-13 09:04:46 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-12-13 09:08:18 --> 404 Page Not Found: Products/products
ERROR - 2023-12-13 09:09:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 09:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:18:02 --> 404 Page Not Found: Item/2066
ERROR - 2023-12-13 09:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 09:23:30 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:23:39 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:24:11 --> Could not find the language line "products"
ERROR - 2023-12-13 09:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:33:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:33:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:33:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:34:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:34:08 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:34:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:35:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:36:45 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:38:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:38:32 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:40:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 09:41:21 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:45:22 --> Could not find the language line "products"
ERROR - 2023-12-13 09:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:49:15 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:49:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:50:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 09:50:58 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:51:22 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 09:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 09:51:33 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 09:51:33 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 09:51:39 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:51:52 --> Could not find the language line "Home"
ERROR - 2023-12-13 09:53:52 --> Could not find the language line "Hair%20"
ERROR - 2023-12-13 09:55:57 --> Could not find the language line "products"
ERROR - 2023-12-13 10:00:17 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 10:00:21 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 10:02:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:06:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 10:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 10:06:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 10:06:32 --> Could not find the language line "products"
ERROR - 2023-12-13 10:10:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 10:11:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 10:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:21:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 10:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:33:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:33:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 10:33:23 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:37:41 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:44:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:49:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 10:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 10:53:48 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 10:56:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 10:56:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 10:56:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 11:00:25 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-12-13 11:00:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:03:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 11:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 11:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:07:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 11:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:10:47 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:12:38 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 11:12:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-12-13 11:12:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-13 11:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 11:12:51 --> Could not find the language line "assets"
ERROR - 2023-12-13 11:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:14:21 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:16:43 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:16:51 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:17:30 --> Could not find the language line "products"
ERROR - 2023-12-13 11:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:20:06 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:20:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 11:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:27:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 11:27:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 11:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:28:42 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:28:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:28:51 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 11:28:55 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:28:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:30:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:30:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:31:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:31:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:31:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:31:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:31:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:31:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:32:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 11:35:29 --> Could not find the language line "products"
ERROR - 2023-12-13 11:37:02 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:38:11 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:39:59 --> Could not find the language line "products"
ERROR - 2023-12-13 11:41:16 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 11:43:12 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:43:12 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:43:12 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:45:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:45:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 11:49:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 11:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:00:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:01:06 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:04:27 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:06:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:06:35 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:06:59 --> 404 Page Not Found: Products/products
ERROR - 2023-12-13 12:10:32 --> 404 Page Not Found: Item/1588057
ERROR - 2023-12-13 12:12:00 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:12:23 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 12:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:12:39 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 12:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:12:51 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 12:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:13:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:13:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:17:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 12:19:06 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 12:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:23:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:23:57 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 12:24:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:24:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 12:24:59 --> Could not find the language line "products"
ERROR - 2023-12-13 12:25:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 12:25:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 12:29:29 --> Could not find the language line "products"
ERROR - 2023-12-13 12:36:00 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:39:27 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:42:59 --> Could not find the language line "products"
ERROR - 2023-12-13 12:43:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:43:53 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:44:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 12:44:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 12:44:36 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:44:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 12:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:44:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 12:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:45:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 12:45:45 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:45:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 12:45:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 12:45:57 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:46:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 12:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:47:29 --> Could not find the language line "products"
ERROR - 2023-12-13 12:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:49:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 12:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 12:49:19 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:50:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 12:56:29 --> Could not find the language line "products"
ERROR - 2023-12-13 12:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 12:59:07 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:03:30 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:07:21 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:09:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 13:10:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 13:13:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 13:14:42 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 13:15:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:15:49 --> Could not find the language line "Hair%20"
ERROR - 2023-12-13 13:15:55 --> Could not find the language line "Hair%20"
ERROR - 2023-12-13 13:16:01 --> Could not find the language line "Hair%20"
ERROR - 2023-12-13 13:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 13:17:45 --> Could not find the language line "Hair%20Skin%20Products"
ERROR - 2023-12-13 13:18:16 --> Could not find the language line "Hair%20and%20Skin%20Products"
ERROR - 2023-12-13 13:18:34 --> Could not find the language line "Hair%20and%20Skin%20Products"
ERROR - 2023-12-13 13:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:19:18 --> Could not find the language line "Hair%20and%20Skin%20Products"
ERROR - 2023-12-13 13:19:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:21:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 13:22:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:23:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:24:36 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:27:02 --> Could not find the language line "Hair%20%26%20Skin%20Products%20"
ERROR - 2023-12-13 13:27:13 --> Could not find the language line "Hair%20%26%20Skin%20Products%20"
ERROR - 2023-12-13 13:32:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:32:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:32:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:34:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:35:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 13:37:47 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:40:01 --> Could not find the language line "Socks"
ERROR - 2023-12-13 13:40:12 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:40:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:40:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:41:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 13:41:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 13:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 13:41:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 13:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 13:42:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 13:42:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:42:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:42:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:42:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:43:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:43:13 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:43:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:43:26 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:43:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:43:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:45:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:46:16 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:46:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:52:27 --> Could not find the language line "Home"
ERROR - 2023-12-13 13:52:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:52:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:52:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:52:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:52:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:52:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 13:57:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:00:45 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:00:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 14:00:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:06:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 14:06:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 14:06:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 14:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:12:00 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2023-12-13 14:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:12:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:14:22 --> Could not find the language line "products"
ERROR - 2023-12-13 14:14:39 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:18:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:19:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:20:36 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:20:46 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:23:03 --> Could not find the language line "products"
ERROR - 2023-12-13 14:23:20 --> 404 Page Not Found: Item/1588057
ERROR - 2023-12-13 14:33:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:35:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:35:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:35:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:35:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:35:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:35:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:37:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:37:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:38:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:38:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:38:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:38:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:38:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:38:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:38:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:39:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:39:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:39:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-13 14:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:39:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-12-13 14:39:33 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:45:33 --> Could not find the language line "products"
ERROR - 2023-12-13 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:49:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:50:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:51:56 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 14:56:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 14:56:48 --> Could not find the language line "products"
ERROR - 2023-12-13 14:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:58:11 --> Could not find the language line "Home"
ERROR - 2023-12-13 14:58:51 --> Could not find the language line "products"
ERROR - 2023-12-13 14:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 14:59:11 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:00:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:00:54 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:01:29 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:02:14 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:04:28 --> Could not find the language line "products"
ERROR - 2023-12-13 15:05:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 15:05:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:08:03 --> Could not find the language line "products"
ERROR - 2023-12-13 15:09:35 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-12-13 15:10:37 --> Could not find the language line "products"
ERROR - 2023-12-13 15:11:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:12:06 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 15:12:51 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 15:13:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:14:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:15:00 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:19:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:20:00 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:22:51 --> Could not find the language line "products"
ERROR - 2023-12-13 15:22:53 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:25:36 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:26:37 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:26:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:27:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:28:16 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:27 --> Could not find the language line "products"
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 15:46:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:46:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 15:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 15:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:55:41 --> Could not find the language line "products"
ERROR - 2023-12-13 15:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 15:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:02:04 --> Could not find the language line "Other"
ERROR - 2023-12-13 16:03:35 --> Could not find the language line "Other"
ERROR - 2023-12-13 16:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:19:09 --> 404 Page Not Found: Products/products
ERROR - 2023-12-13 16:19:23 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:19:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:22:35 --> Could not find the language line "Other"
ERROR - 2023-12-13 16:26:07 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:26:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:26:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:29:22 --> Could not find the language line "products"
ERROR - 2023-12-13 16:36:11 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:39:38 --> Could not find the language line "Hair%20"
ERROR - 2023-12-13 16:40:38 --> Could not find the language line "products"
ERROR - 2023-12-13 16:42:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:42:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:42:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:42:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 16:43:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:44:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:45:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:45:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:47:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:48:47 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:49:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:51:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:52:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:52:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:53:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:56:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 16:56:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 16:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:56:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 16:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 16:57:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 17:00:52 --> Could not find the language line "products"
ERROR - 2023-12-13 17:01:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 17:04:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 17:07:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:09:43 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:09:52 --> Could not find the language line "products"
ERROR - 2023-12-13 17:12:40 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:13:54 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:14:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 17:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:22:35 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:23:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:23:44 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:35:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-13 17:37:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:43:45 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:45:53 --> Could not find the language line "products"
ERROR - 2023-12-13 17:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:47:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 17:47:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 17:49:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:54:52 --> Could not find the language line "products"
ERROR - 2023-12-13 17:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 17:59:42 --> Could not find the language line "Home"
ERROR - 2023-12-13 17:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:01:37 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-12-13 18:03:00 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:03:32 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:03:37 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:03:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:04:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:05:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 18:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:11:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:12:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:13:35 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:15:38 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:15:41 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:15:57 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:16:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:17:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:21:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:28:19 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 18:28:43 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:30:59 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 18:31:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:31:13 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 18:31:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 18:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bracelets'
AND `items`.`price` <= '7'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 18:31:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 18:31:29 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 18:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:32:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:36:55 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:38:19 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:39:52 --> Could not find the language line "products"
ERROR - 2023-12-13 18:49:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:49:05 --> Could not find the language line "Home"
ERROR - 2023-12-13 18:50:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:51:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 18:51:42 --> Could not find the language line "Other"
ERROR - 2023-12-13 18:52:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 18:52:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 18:52:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 18:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 18:54:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 18:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:55:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 18:55:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-12-13 18:55:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 18:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 18:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:04:18 --> Could not find the language line "products"
ERROR - 2023-12-13 19:06:35 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:11:24 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:12:21 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:14:03 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 19:14:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-13 19:14:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-13 19:14:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-13 19:14:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-13 19:14:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-13 19:14:04 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-12-13 19:15:48 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:15:48 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:15:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:15:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:15:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:15:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:17:09 --> Could not find the language line "products"
ERROR - 2023-12-13 19:17:24 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:19:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:19:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:19:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:20:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:20:48 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:21:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 19:22:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:23:07 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:26:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 19:26:26 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:30:02 --> Could not find the language line "products"
ERROR - 2023-12-13 19:30:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:30:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:33:07 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:38:08 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:39:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:40:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:42:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 19:43:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:46:28 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:47:11 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:47:23 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:48:40 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 19:48:54 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 19:49:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:49:18 --> Could not find the language line "products"
ERROR - 2023-12-13 19:49:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:50:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:51:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 19:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 19:52:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:52:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 19:53:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:53:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:53:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:53:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:57:12 --> Could not find the language line "Home"
ERROR - 2023-12-13 19:58:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:04:59 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:08:35 --> Could not find the language line "products"
ERROR - 2023-12-13 20:09:56 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:10:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-13 20:19:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:19:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 20:21:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:27:31 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 20:27:52 --> Could not find the language line "products"
ERROR - 2023-12-13 20:32:30 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:34:18 --> Could not find the language line "products"
ERROR - 2023-12-13 20:35:06 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:36:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:36:46 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 20:36:59 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 20:37:05 --> Could not find the language line "Socks"
ERROR - 2023-12-13 20:37:33 --> Could not find the language line "Bracelets"
ERROR - 2023-12-13 20:37:44 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:38:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:38:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:39:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:39:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:39:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:39:46 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:41:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:44:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:49:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:49:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:51:41 --> Could not find the language line "Perfume"
ERROR - 2023-12-13 20:52:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 20:53:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 20:53:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 20:53:35 --> Could not find the language line "products"
ERROR - 2023-12-13 20:55:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:55:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 20:56:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 20:56:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-13 20:56:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-13 20:56:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-13 20:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 20:59:56 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:00:05 --> Could not find the language line "Socks"
ERROR - 2023-12-13 21:00:26 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:00:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:00:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:01:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:01:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:01:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:01:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:01:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:01:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:02:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:02:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:02:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:02:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:02:37 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:02:45 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:02:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:03:02 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:03:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:03:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:04:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:04:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:04:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:04:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:04:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:04:27 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:05:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:05:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:05:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-13 21:05:42 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:11:45 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:11:47 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:12:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:13:10 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:16:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:19:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:20:43 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:27:21 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:27:42 --> Could not find the language line "products"
ERROR - 2023-12-13 21:28:20 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:28:30 --> Could not find the language line "Socks"
ERROR - 2023-12-13 21:29:06 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:29:37 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:29:43 --> Could not find the language line "Socks"
ERROR - 2023-12-13 21:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:30:04 --> Could not find the language line "Socks"
ERROR - 2023-12-13 21:30:37 --> Could not find the language line "Socks"
ERROR - 2023-12-13 21:31:09 --> Could not find the language line "Socks"
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:31:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:31:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:31:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:32:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:32:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 21:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:33:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:34:33 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:34:56 --> Could not find the language line "products"
ERROR - 2023-12-13 21:35:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:35:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-13 21:35:22 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:35:25 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:35:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:37:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:40:48 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:41:33 --> Could not find the language line "products"
ERROR - 2023-12-13 21:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:45:27 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:48:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 21:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:49:04 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:51:56 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:52:48 --> Could not find the language line "Home"
ERROR - 2023-12-13 21:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 21:55:24 --> Could not find the language line "products"
ERROR - 2023-12-13 22:00:19 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:02:19 --> Could not find the language line "products"
ERROR - 2023-12-13 22:05:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 22:15:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 22:16:10 --> Could not find the language line "products"
ERROR - 2023-12-13 22:23:05 --> Could not find the language line "products"
ERROR - 2023-12-13 22:23:37 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:30:01 --> Could not find the language line "products"
ERROR - 2023-12-13 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:30:30 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:32:57 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 22:34:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 22:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 22:36:49 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-13 22:36:59 --> Could not find the language line "products"
ERROR - 2023-12-13 22:37:58 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:38:03 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:43:51 --> Could not find the language line "products"
ERROR - 2023-12-13 22:45:18 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 22:46:08 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:46:09 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:50:02 --> Could not find the language line "Home"
ERROR - 2023-12-13 22:50:50 --> Could not find the language line "products"
ERROR - 2023-12-13 22:55:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-13 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:00:51 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 23:05:47 --> Could not find the language line "products"
ERROR - 2023-12-13 23:05:48 --> Could not find the language line "Other"
ERROR - 2023-12-13 23:11:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-13 23:12:50 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:13:02 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:13:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:15:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:15:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:15:34 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:18:30 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:20:48 --> Could not find the language line "products"
ERROR - 2023-12-13 23:28:37 --> Could not find the language line "products"
ERROR - 2023-12-13 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:33:31 --> Could not find the language line "Home"
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:33:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-13 23:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-13 23:50:47 --> Could not find the language line "products"
