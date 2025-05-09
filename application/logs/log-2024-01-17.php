<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-17 00:29:10 --> Could not find the language line "Other"
ERROR - 2024-01-17 00:30:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 00:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 00:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 00:47:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 00:47:54 --> 404 Page Not Found: Humanstxt/index
ERROR - 2024-01-17 00:47:54 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-01-17 00:47:54 --> Could not find the language line "Home"
ERROR - 2024-01-17 00:49:54 --> Could not find the language line "Home"
ERROR - 2024-01-17 00:50:00 --> Could not find the language line "Home"
ERROR - 2024-01-17 00:50:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 00:51:09 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:51:34 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 00:52:18 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:52:30 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:52:42 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:53:00 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:53:03 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:53:11 --> Could not find the language line "Home"
ERROR - 2024-01-17 00:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 00:53:24 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:53:26 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 00:54:07 --> Could not find the language line "Home"
ERROR - 2024-01-17 01:00:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 01:17:39 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 01:30:25 --> Could not find the language line "Home"
ERROR - 2024-01-17 01:42:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 01:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 02:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 02:00:33 --> Could not find the language line "Home"
ERROR - 2024-01-17 02:03:54 --> Could not find the language line "products"
ERROR - 2024-01-17 02:22:54 --> Could not find the language line "Home"
ERROR - 2024-01-17 02:23:24 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 02:24:03 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 02:24:34 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 02:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 02:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 02:30:25 --> Could not find the language line "Home"
ERROR - 2024-01-17 02:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 02:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 03:01:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 03:10:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 03:12:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 03:30:25 --> Could not find the language line "Home"
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 03:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 03:49:51 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:00:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:15:37 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:17:35 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:25:58 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:31:06 --> 404 Page Not Found: Item/1136400
ERROR - 2024-01-17 04:34:48 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:40:59 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:41:19 --> Could not find the language line "Home"
ERROR - 2024-01-17 04:41:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 05:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 05:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 05:30:42 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:06:06 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:09:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:14:49 --> Could not find the language line "products"
ERROR - 2024-01-17 06:19:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 06:26:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 06:27:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:27:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:27:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:27:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:27:40 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:27:40 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:27:40 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:29:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:30:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:30:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 06:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 06:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 06:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 06:44:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 06:44:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-17 06:44:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 06:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 06:47:58 --> Could not find the language line "Home"
ERROR - 2024-01-17 06:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:00:23 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:00:45 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:24:37 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 07:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:25:53 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:27:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 07:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:29:53 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 07:30:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:44:07 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 07:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:44:13 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:46:45 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 07:47:37 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:48:07 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:48:12 --> Could not find the language line "Home"
ERROR - 2024-01-17 07:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 07:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:00:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 08:07:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 08:08:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 08:09:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:09:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 08:09:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 08:09:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 08:09:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 08:09:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 08:09:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:09:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 08:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:10:20 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:12:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:14:08 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:14:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 08:15:27 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:15:50 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:17:21 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:21:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 08:22:21 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 08:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 08:30:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:31:20 --> Could not find the language line "Home"
ERROR - 2024-01-17 08:37:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 08:39:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 08:40:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 08:56:21 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:00:23 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:16:05 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:18:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:21:05 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 09:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 09:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 09:30:21 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:34:29 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 09:48:20 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:48:50 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 09:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 09:49:26 --> Could not find the language line "Home"
ERROR - 2024-01-17 09:53:25 --> Could not find the language line "Socks"
ERROR - 2024-01-17 09:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 09:57:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:00:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:00:49 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:04:59 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:05:49 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:29:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 10:29:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-17 10:29:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 10:30:25 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:31:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 10:31:33 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:35:33 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:35:39 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:35:45 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:38:09 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:39:27 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:39:32 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:42:33 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:42:37 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:42:57 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:43:06 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:43:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:43:38 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:43:50 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:43:54 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:44:10 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:46:49 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:47:05 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:47:30 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 10:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:51:32 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 10:54:52 --> Could not find the language line "Home"
ERROR - 2024-01-17 10:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:00:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:06:46 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:14:55 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 11:20:17 --> Could not find the language line "products"
ERROR - 2024-01-17 11:23:12 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 11:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:28:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 11:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:30:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 11:32:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:32:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 11:35:17 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 11:40:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:44:09 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:45:12 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:46:20 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 11:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 11:49:10 --> Could not find the language line "Home"
ERROR - 2024-01-17 11:49:46 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 11:54:32 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 11:54:37 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:00:37 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:01:40 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:03:05 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:12:47 --> Could not find the language line "products"
ERROR - 2024-01-17 12:25:12 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:30:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:33:10 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 12:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:33:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 12:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:36:50 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:37:18 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:49:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:49:56 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:49:58 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:49:58 --> Could not find the language line "Home"
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T166%' OR a.description LIKE '%T166%' OR a.color LIKE '%T166%' OR a.barcode LIKE '%T166%' OR a.category LIKE '%T166%' OR a.sub_category LIKE '%T166%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 12:52:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 12:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:56:35 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 12:56:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 12:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 12:56:41 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:00:30 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:02:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:03:11 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:03:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:03:37 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:05:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:11:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:14:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:20:13 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:25:10 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:25:24 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:25:30 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:25:35 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:27:14 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:27:46 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:28:07 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:28:17 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:30:18 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:30:23 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:31:14 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:31:23 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:31:39 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:31:49 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:32:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:36:16 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:36:49 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:43:17 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:43:23 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 13:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:46:31 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:46:32 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:46:38 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:51:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 13:51:26 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:53:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:54:49 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:55:20 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 13:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 13:55:41 --> Could not find the language line "Home"
ERROR - 2024-01-17 13:57:10 --> Could not find the language line "products"
ERROR - 2024-01-17 13:58:06 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 14:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:03:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 14:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:06:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 14:06:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-17 14:06:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 14:06:21 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:12:44 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:13:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:14:38 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:14:42 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:23:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:23:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:23:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:23:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:27:09 --> 404 Page Not Found: Products/products
ERROR - 2024-01-17 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 14:32:19 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:34:49 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:40:16 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 14:42:14 --> Could not find the language line "products"
ERROR - 2024-01-17 14:42:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 14:44:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 14:45:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:45:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 14:49:19 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:52:20 --> Could not find the language line "Home"
ERROR - 2024-01-17 14:57:09 --> 404 Page Not Found: Products/products
ERROR - 2024-01-17 14:58:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 15:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 15:15:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:16:13 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:27:11 --> Could not find the language line "products"
ERROR - 2024-01-17 15:29:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 15:30:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:33:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 15:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 15:40:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:40:02 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:40:06 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:40:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:41:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 15:48:35 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:48:48 --> Could not find the language line "Home"
ERROR - 2024-01-17 15:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 15:50:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 15:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 15:56:53 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:07:41 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:07:41 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:15:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 16:16:59 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:18:43 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:24:14 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:26:51 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:26:53 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:30:34 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:36:14 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:38:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:38:59 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:41:53 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:41:57 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:42:59 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:47:23 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:49:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:53:32 --> Could not find the language line "Home"
ERROR - 2024-01-17 16:54:04 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:54:12 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:54:18 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:54:48 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:55:00 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:55:35 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:55:50 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:56:07 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:56:16 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:56:40 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:56:59 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:57:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 16:57:19 --> 404 Page Not Found: Products/products
ERROR - 2024-01-17 16:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 16:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 17:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-01-17 17:06:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:09:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:11:30 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 17:12:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:12:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 17:20:48 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:26:09 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:27:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:27:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:27:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:27:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-01-17 17:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE a.barcode = 'C839' 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-17 17:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:28:57 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:29:05 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 17:29:08 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:30:23 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:32:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:33:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:33:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:33:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:33:32 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:33:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:33:48 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:34:09 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:13 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:34:22 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:34:38 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:43 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:49 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:34:54 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:35:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 17:35:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 17:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:35:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 17:35:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 17:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:35:37 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:35:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 17:35:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 17:35:44 --> Could not find the language line "Socks"
ERROR - 2024-01-17 17:40:48 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:46:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 17:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-01-17 17:46:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 17:46:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 17:46:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:46:56 --> Could not find the language line "Home"
ERROR - 2024-01-17 17:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 17:49:39 --> Could not find the language line "products"
ERROR - 2024-01-17 17:56:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 18:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:00:45 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:01:19 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:07:16 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:09:31 --> Could not find the language line "Perfume"
ERROR - 2024-01-17 18:09:34 --> Could not find the language line "Perfume"
ERROR - 2024-01-17 18:09:40 --> Could not find the language line "Perfume"
ERROR - 2024-01-17 18:09:45 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 18:09:51 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 18:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:10:29 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 18:10:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:11:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:11:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:12:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:12:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 18:12:24 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:12:29 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:12:44 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:12:49 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:13:17 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:13:24 --> Could not find the language line "Socks"
ERROR - 2024-01-17 18:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:14:20 --> Could not find the language line "Socks"
ERROR - 2024-01-17 18:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:15:05 --> Could not find the language line "Socks"
ERROR - 2024-01-17 18:15:34 --> Could not find the language line "Socks"
ERROR - 2024-01-17 18:16:05 --> Could not find the language line "Other"
ERROR - 2024-01-17 18:16:15 --> Could not find the language line "Other"
ERROR - 2024-01-17 18:16:28 --> Could not find the language line "Other"
ERROR - 2024-01-17 18:16:46 --> Could not find the language line "Other"
ERROR - 2024-01-17 18:16:59 --> Could not find the language line "Other"
ERROR - 2024-01-17 18:17:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 18:17:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 18:17:49 --> Could not find the language line "Socks"
ERROR - 2024-01-17 18:17:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:18:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:18:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:18:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:18:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:18:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 18:19:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:19:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:19:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:19:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 18:19:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:19:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:20:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:20:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:20:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:21:08 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:21:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:21:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 18:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:22:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:22:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:22:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:22:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:23:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-17 18:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:29:48 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:29:54 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:30:30 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:30:34 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:30:53 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:31:05 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:36:25 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:38:09 --> 404 Page Not Found: Storage/settings
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 18:42:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:42:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 18:43:27 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 18:46:58 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 18:46:59 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:48:09 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:48:11 --> Could not find the language line "Home"
ERROR - 2024-01-17 18:51:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-01-17 19:01:18 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:06:54 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:11:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 19:11:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-17 19:11:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 19:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:27:09 --> Could not find the language line "products"
ERROR - 2024-01-17 19:30:51 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:33:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 19:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-01-17 19:33:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 19:37:04 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:37:54 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:38:12 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:40:30 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 19:40:50 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 19:41:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:41:24 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:48:03 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:48:11 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:49:28 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:49:42 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:50:06 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:50:12 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:50:19 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:50:28 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:50:48 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:50:59 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:51:17 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:51:33 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:51:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 19:51:59 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:52:21 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:52:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-17 19:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:52:53 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:53:31 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:53:34 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:53:35 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 19:53:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 19:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 19:59:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 20:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 20:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 20:14:26 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:14:39 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:16:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-17 20:30:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:32:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 20:38:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-01-17 20:38:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-01-17 20:38:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-17 20:38:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-17 20:38:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-17 20:41:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 20:50:07 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:51:23 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:52:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 20:52:54 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:54:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 20:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 21:00:33 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:01:53 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 21:04:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-01-17 21:06:22 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:07:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 21:14:07 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 21:17:09 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:30:24 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:34:50 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:35:04 --> Could not find the language line "Perfume"
ERROR - 2024-01-17 21:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 21:35:19 --> Could not find the language line "Perfume"
ERROR - 2024-01-17 21:35:21 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:37:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:37:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-17 21:37:21 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:37:25 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 21:37:44 --> Could not find the language line "Bracelets"
ERROR - 2024-01-17 21:37:58 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:38:05 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:38:08 --> Could not find the language line "Home"
ERROR - 2024-01-17 21:46:24 --> Could not find the language line "products"
ERROR - 2024-01-17 22:00:18 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:01:52 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:09:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 22:09:50 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:10:35 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 22:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 22:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-17 22:10:40 --> 404 Page Not Found: Home/accounts
ERROR - 2024-01-17 22:10:40 --> 404 Page Not Found: Home/home
ERROR - 2024-01-17 22:10:55 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:20:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:20:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:20:01 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:20:14 --> Could not find the language line "Socks"
ERROR - 2024-01-17 22:30:12 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:30:31 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:30:31 --> Could not find the language line "Home"
ERROR - 2024-01-17 22:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 22:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 22:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-17 22:54:11 --> Could not find the language line "Socks"
ERROR - 2024-01-17 23:01:33 --> Could not find the language line "Home"
ERROR - 2024-01-17 23:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 23:10:18 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 23:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 23:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-17 23:29:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:29:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-17 23:30:36 --> Could not find the language line "Home"
ERROR - 2024-01-17 23:41:25 --> Could not find the language line "Home"
ERROR - 2024-01-17 23:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 23:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 23:49:55 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-17 23:50:06 --> Could not find the language line "Home"
ERROR - 2024-01-17 23:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-17 23:53:09 --> Could not find the language line "Home"
ERROR - 2024-01-17 23:53:25 --> Could not find the language line "Clothing"
ERROR - 2024-01-17 23:56:57 --> Could not find the language line "Home"
