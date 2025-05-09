<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-30 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-30 00:05:52 --> Could not find the language line "Home"
ERROR - 2023-11-30 00:11:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-30 00:20:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 00:31:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 00:41:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-30 01:00:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 01:32:23 --> Could not find the language line "Home"
ERROR - 2023-11-30 01:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-30 02:00:20 --> Could not find the language line "Home"
ERROR - 2023-11-30 02:18:16 --> Could not find the language line "products"
ERROR - 2023-11-30 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 02:35:00 --> Could not find the language line "Home"
ERROR - 2023-11-30 02:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 02:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 02:36:26 --> Could not find the language line "Home"
ERROR - 2023-11-30 02:37:20 --> Could not find the language line "Home"
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 02:39:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 03:03:16 --> Could not find the language line "products"
ERROR - 2023-11-30 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 03:33:16 --> Could not find the language line "products"
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:42:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 03:47:51 --> Could not find the language line "Other"
ERROR - 2023-11-30 03:48:16 --> Could not find the language line "products"
ERROR - 2023-11-30 03:53:47 --> Could not find the language line "products"
ERROR - 2023-11-30 03:57:52 --> Could not find the language line "products"
ERROR - 2023-11-30 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 04:02:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 04:03:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:05:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:12:48 --> Could not find the language line "products"
ERROR - 2023-11-30 04:19:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 04:27:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:27:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:29:10 --> Could not find the language line "products"
ERROR - 2023-11-30 04:29:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 04:33:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 04:34:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:34:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 04:43:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 04:50:06 --> Could not find the language line "products"
ERROR - 2023-11-30 04:52:21 --> Could not find the language line "products"
ERROR - 2023-11-30 04:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 04:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 04:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 04:58:01 --> Could not find the language line "Home"
ERROR - 2023-11-30 04:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 04:59:02 --> Could not find the language line "Home"
ERROR - 2023-11-30 04:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:00:41 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:00:46 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 05:01:29 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:02:07 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:02:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 05:02:26 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 05:09:00 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:12:21 --> Could not find the language line "products"
ERROR - 2023-11-30 05:15:15 --> Could not find the language line "products"
ERROR - 2023-11-30 05:15:31 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:17:33 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:18:04 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:27:21 --> Could not find the language line "products"
ERROR - 2023-11-30 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 05:47:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:47:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 05:53:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 06:01:34 --> Could not find the language line "products"
ERROR - 2023-11-30 06:11:02 --> Could not find the language line "products"
ERROR - 2023-11-30 06:14:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 06:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 06:23:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 06:23:16 --> Could not find the language line "Home"
ERROR - 2023-11-30 06:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-30 06:28:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:43:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 06:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 06:55:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 06:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:05:01 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:05:07 --> Could not find the language line "Socks"
ERROR - 2023-11-30 07:05:18 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:05:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 07:05:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 07:05:48 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:06:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-30 07:06:41 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:08:39 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-30 07:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:21:28 --> Could not find the language line "products"
ERROR - 2023-11-30 07:27:42 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:28:46 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:38:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 07:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 07:51:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 07:54:31 --> Could not find the language line "products"
ERROR - 2023-11-30 07:57:57 --> Could not find the language line "products"
ERROR - 2023-11-30 08:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-30 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 08:31:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 08:38:57 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-30 08:39:33 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:39:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 08:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 08:54:38 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 09:20:29 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:21:23 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 09:39:38 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:39:38 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:39:38 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:39:38 --> Could not find the language line "Home"
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 09:47:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 10:14:42 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:23:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 10:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 10:24:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:31:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 10:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 10:33:26 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:33:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 10:33:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 10:33:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 10:33:30 --> 404 Page Not Found: Home/home
ERROR - 2023-11-30 10:33:30 --> 404 Page Not Found: Home/accounts
ERROR - 2023-11-30 10:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 10:39:34 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:40:28 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:44:04 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 10:56:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 10:56:59 --> Could not find the language line "Home"
ERROR - 2023-11-30 10:59:08 --> Could not find the language line "Home"
ERROR - 2023-11-30 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 11:01:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 11:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:21:55 --> Could not find the language line "Home"
ERROR - 2023-11-30 11:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 11:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:39:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 11:39:57 --> Could not find the language line "Home"
ERROR - 2023-11-30 11:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:43:59 --> Could not find the language line "Home"
ERROR - 2023-11-30 11:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 11:59:01 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:00:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:04:22 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:04:29 --> Could not find the language line "Perfume"
ERROR - 2023-11-30 12:04:33 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:04:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:05:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:05:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:05:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:06:15 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:06:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:06:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:06:45 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:06:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 12:06:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 12:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:07:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 12:07:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 12:07:31 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:08:59 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 12:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:18:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-30 12:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:22:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 12:22:38 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:23:30 --> Could not find the language line "products"
ERROR - 2023-11-30 12:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:26:02 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:26:20 --> Could not find the language line "Perfume"
ERROR - 2023-11-30 12:26:22 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:26:38 --> Could not find the language line "Socks"
ERROR - 2023-11-30 12:27:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:28:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 12:28:54 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:28:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 12:29:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-30 12:29:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-30 12:29:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-30 12:29:29 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:29:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:29:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 12:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:30:52 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:32:25 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 12:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:40:36 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:50:46 --> Could not find the language line "products"
ERROR - 2023-11-30 12:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:55:52 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:57:03 --> Could not find the language line "Home"
ERROR - 2023-11-30 12:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 12:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:02:40 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:16:01 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:18:15 --> Could not find the language line "bracelets"
ERROR - 2023-11-30 13:18:15 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 13:18:15 --> Could not find the language line "bracelets"
ERROR - 2023-11-30 13:18:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 13:18:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 13:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:34:44 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:35:35 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:39:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:39:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 13:39:55 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:43:58 --> Could not find the language line "Home"
ERROR - 2023-11-30 13:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 13:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:01:24 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:03:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 14:03:43 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:07:00 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:07:42 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:07:52 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:15:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 14:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:23:07 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 14:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:23:51 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:24:27 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:26:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-30 14:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:30:07 --> Could not find the language line "Socks"
ERROR - 2023-11-30 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 14:33:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 14:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:43:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 14:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 14:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 14:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:44:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 14:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-30 14:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:50:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 14:50:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 14:50:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 14:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 14:52:35 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:11:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 15:11:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-30 15:11:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 15:11:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 15:12:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 15:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:14:44 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:16:05 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:16:08 --> Could not find the language line "Socks"
ERROR - 2023-11-30 15:16:24 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:16:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:21:00 --> Could not find the language line "products"
ERROR - 2023-11-30 15:22:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 15:22:44 --> 404 Page Not Found: Item/811808
ERROR - 2023-11-30 15:27:51 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:28:50 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:28:51 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:31:42 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:31:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 15:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-30 15:31:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 15:32:26 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:32:28 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:32:28 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:32:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 15:32:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 15:33:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 15:33:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 15:33:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 15:33:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-30 15:33:32 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:33:33 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:44:42 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:49:02 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:51:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 15:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:52:09 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:55:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 15:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 15:59:05 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:02:43 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:06:26 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:21:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:26:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:29:39 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:44:01 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 16:50:43 --> Could not find the language line "Home"
ERROR - 2023-11-30 16:56:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 16:57:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 16:57:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:57:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 16:59:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:09:30 --> Could not find the language line "products"
ERROR - 2023-11-30 17:09:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:20:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 17:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 17:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 17:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 17:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:38:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 17:41:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:41:17 --> Could not find the language line "products"
ERROR - 2023-11-30 17:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:41:40 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:42:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:42:52 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:44:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:44:16 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:45:51 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:45:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:45:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:47:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:47:22 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:47:23 --> Could not find the language line "Home"
ERROR - 2023-11-30 17:48:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:49:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 17:52:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 17:52:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 17:52:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-30 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 18:16:43 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 18:21:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 18:21:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 18:21:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 18:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:30:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 18:36:31 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:37:34 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:38:36 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-30 18:40:56 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:40:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 18:40:57 --> Could not find the language line "Home"
ERROR - 2023-11-30 18:44:06 --> Could not find the language line "products"
ERROR - 2023-11-30 18:46:30 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 18:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 19:02:35 --> Could not find the language line "Home"
ERROR - 2023-11-30 19:20:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 19:29:32 --> Could not find the language line "Home"
ERROR - 2023-11-30 19:30:01 --> Could not find the language line "products"
ERROR - 2023-11-30 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-30 19:39:31 --> Could not find the language line "Home"
ERROR - 2023-11-30 19:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 19:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:00:58 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:02:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 20:04:43 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:05:50 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:13:52 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 20:14:18 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 20:14:35 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 20:14:52 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 20:16:04 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:17:56 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:19:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 20:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-30 20:25:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 20:27:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 20:27:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 20:27:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 20:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:35:46 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:42:04 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:44:05 --> Could not find the language line "products"
ERROR - 2023-11-30 20:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:44:44 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:46:34 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:47:37 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:53:27 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:57:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 20:57:20 --> Could not find the language line "Home"
ERROR - 2023-11-30 20:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 20:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 21:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:04:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:04:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-30 21:04:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 21:06:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 21:06:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 21:06:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 21:07:51 --> Could not find the language line "Home"
ERROR - 2023-11-30 21:10:16 --> Could not find the language line "Home"
ERROR - 2023-11-30 21:22:08 --> Could not find the language line "Home"
ERROR - 2023-11-30 21:25:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-30 21:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 21:25:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 21:25:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 21:25:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:25:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:25:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:25:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 21:25:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-30 21:25:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:25:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-30 21:30:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-30 21:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-30 21:30:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-30 21:40:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 21:59:45 --> Could not find the language line "Home"
ERROR - 2023-11-30 21:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-30 22:00:12 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-11-30 22:00:56 --> Could not find the language line "products"
ERROR - 2023-11-30 22:01:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 22:12:51 --> Could not find the language line "products"
ERROR - 2023-11-30 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-30 23:11:15 --> Could not find the language line "products"
ERROR - 2023-11-30 23:12:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 23:12:25 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:19:42 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:21:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 23:21:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 23:22:06 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-30 23:22:07 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:22:08 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-11-30 23:22:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-30 23:25:48 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-30 23:25:49 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:25:50 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-11-30 23:27:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 23:27:56 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-30 23:28:03 --> Could not find the language line "Bracelets"
ERROR - 2023-11-30 23:28:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 23:28:13 --> Could not find the language line "Home"
ERROR - 2023-11-30 23:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-30 23:30:10 --> Could not find the language line "Home"
