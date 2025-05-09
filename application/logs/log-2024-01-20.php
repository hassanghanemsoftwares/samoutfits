<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-20 00:00:17 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:04:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 00:15:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:16:52 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:19:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 00:21:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 00:21:35 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:22:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:26:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 00:27:21 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:30:20 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:41:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-01-20 00:46:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 00:48:20 --> Could not find the language line "Home"
ERROR - 2024-01-20 00:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 01:00:19 --> Could not find the language line "Home"
ERROR - 2024-01-20 01:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 01:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 01:28:24 --> Could not find the language line "products"
ERROR - 2024-01-20 01:28:25 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 01:30:17 --> Could not find the language line "Home"
ERROR - 2024-01-20 01:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 01:37:03 --> Could not find the language line "products"
ERROR - 2024-01-20 01:47:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 02:01:09 --> Could not find the language line "Home"
ERROR - 2024-01-20 02:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 02:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 02:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 02:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 02:30:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 02:36:38 --> Could not find the language line "Home"
ERROR - 2024-01-20 02:37:40 --> Could not find the language line "Home"
ERROR - 2024-01-20 02:37:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 02:45:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 03:00:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:05:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 03:06:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:06:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 03:07:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 03:17:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 03:23:48 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 03:27:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 03:30:13 --> Could not find the language line "Home"
ERROR - 2024-01-20 03:38:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 03:53:41 --> Could not find the language line "Other"
ERROR - 2024-01-20 04:00:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:00:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 04:03:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-20 04:03:59 --> 404 Page Not Found: Products/products
ERROR - 2024-01-20 04:11:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 04:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 04:22:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 04:40:41 --> 404 Page Not Found: Products/products
ERROR - 2024-01-20 04:53:26 --> Could not find the language line "products"
ERROR - 2024-01-20 04:59:12 --> Could not find the language line "products"
ERROR - 2024-01-20 05:00:29 --> Could not find the language line "Home"
ERROR - 2024-01-20 05:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 05:21:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 05:21:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 05:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 05:26:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 05:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 05:39:24 --> Could not find the language line "Bracelets"
ERROR - 2024-01-20 05:45:31 --> Could not find the language line "Home"
ERROR - 2024-01-20 05:48:27 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 05:48:29 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 05:48:36 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 05:56:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:00:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 06:00:48 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:06:30 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:12:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:12:21 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:13:23 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:18:37 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 06:25:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 06:26:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-20 06:27:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 06:29:18 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:33:13 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:35:57 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 06:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 06:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 06:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 06:50:52 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 06:54:58 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:57:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:57:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:57:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:57:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:57:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 06:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 06:59:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 07:01:52 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:05:02 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:05:11 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-01-20 07:05:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:05:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-01-20 07:05:14 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-01-20 07:05:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-01-20 07:05:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-01-20 07:05:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-01-20 07:05:17 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 07:05:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:06:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:06:54 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 07:06:55 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:07:08 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:07:28 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:07:45 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:08:20 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:08:45 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:09:02 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:09:22 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:09:31 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:09:39 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:09:46 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:09:54 --> Could not find the language line "Perfume"
ERROR - 2024-01-20 07:10:04 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:10:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 07:10:39 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:10:41 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:10:55 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:11:07 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:11:17 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:11:30 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:11:32 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:11:33 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:11:34 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:11:58 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:13:31 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:13:34 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:13:40 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:14:05 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:14:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:15:07 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:15:48 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 07:18:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:21:39 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:22:08 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 07:23:57 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 07:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:28:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 07:28:48 --> Could not find the language line "Socks"
ERROR - 2024-01-20 07:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:34:05 --> Could not find the language line "Home"
ERROR - 2024-01-20 07:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:42:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:43:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 07:43:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 07:51:44 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 07:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 07:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 08:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:00:29 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:16:49 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:17:56 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:20:00 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:21:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 08:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:23:07 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 08:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:26:29 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 08:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:28:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-20 08:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:32:34 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:33:48 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 08:34:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 08:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:49:18 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:49:33 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:49:44 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:54:23 --> Could not find the language line "Other"
ERROR - 2024-01-20 08:55:50 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:58:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 08:58:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 08:58:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 08:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 08:58:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 08:58:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 08:59:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 08:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 09:00:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 09:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 09:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 09:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 09:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 09:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 09:34:44 --> Could not find the language line "Home"
ERROR - 2024-01-20 09:38:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-01-20 09:41:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 09:45:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:45:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:50:28 --> Could not find the language line "Home"
ERROR - 2024-01-20 09:51:33 --> Could not find the language line "Home"
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 09:56:08 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 09:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 09:57:47 --> Could not find the language line "Home"
ERROR - 2024-01-20 09:57:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-20 09:57:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-01-20 09:57:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-20 09:58:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:00:33 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:01:42 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:02:24 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:02:39 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 10:06:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:06:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 10:10:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-20 10:10:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-20 10:10:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-20 10:18:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-01-20 10:30:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:31:17 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 10:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 10:42:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 10:42:59 --> Could not find the language line "products"
ERROR - 2024-01-20 10:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 10:55:23 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 10:56:28 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:56:30 --> Could not find the language line "Home"
ERROR - 2024-01-20 10:59:55 --> Could not find the language line "Home"
ERROR - 2024-01-20 11:01:01 --> Could not find the language line "Home"
ERROR - 2024-01-20 11:02:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 11:08:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-01-20 11:14:46 --> Could not find the language line "Home"
ERROR - 2024-01-20 11:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 11:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:36:50 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 11:36:59 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 11:37:31 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 11:37:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-01-20 11:37:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-01-20 11:37:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-01-20 11:38:40 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 11:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:39:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 11:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 11:39:31 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 11:44:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 11:49:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 11:49:02 --> Could not find the language line "Home"
ERROR - 2024-01-20 11:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 11:57:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:05:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:05:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 12:07:30 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:12:52 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:14:22 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:20:09 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 12:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:30:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:33:25 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:33:34 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:33:52 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:34:14 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:34:35 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:35:22 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:36:00 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:39:08 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:39:26 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:39:40 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:39:48 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:40:32 --> Could not find the language line "Home"
ERROR - 2024-01-20 12:40:54 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:47:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 12:48:32 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:48:45 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:48:48 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:49:02 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:49:03 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:49:15 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:49:34 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:49:38 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:49:51 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:49:56 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:50:19 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:50:30 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:50:40 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:51:05 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:52:14 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:52:32 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:52:52 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 12:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 12:53:03 --> Could not find the language line "products"
ERROR - 2024-01-20 13:00:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 13:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 13:14:03 --> Could not find the language line "products"
ERROR - 2024-01-20 13:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:20:32 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:24:15 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-01-20 13:24:15 --> 404 Page Not Found: Wp-content/themes
ERROR - 2024-01-20 13:24:16 --> 404 Page Not Found: Well-known/acme-challenge
ERROR - 2024-01-20 13:24:16 --> 404 Page Not Found: Wp-admin/network
ERROR - 2024-01-20 13:24:16 --> 404 Page Not Found: Cloudphp/index
ERROR - 2024-01-20 13:24:17 --> 404 Page Not Found: Cgi-bin/cloud.php
ERROR - 2024-01-20 13:24:17 --> 404 Page Not Found: Wp-content/updates.php
ERROR - 2024-01-20 13:24:17 --> 404 Page Not Found: Css/cloud.php
ERROR - 2024-01-20 13:24:17 --> 404 Page Not Found: Wp-admin/user
ERROR - 2024-01-20 13:24:17 --> 404 Page Not Found: Img/cloud.php
ERROR - 2024-01-20 13:24:18 --> 404 Page Not Found: Wp-admin/css
ERROR - 2024-01-20 13:24:18 --> 404 Page Not Found: Wp-admin/images
ERROR - 2024-01-20 13:24:19 --> 404 Page Not Found: Images/cloud.php
ERROR - 2024-01-20 13:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:29:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:30:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:39:31 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 13:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 13:39:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 13:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:41:37 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:42:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 13:42:08 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 13:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:42:38 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 13:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:43:01 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 13:43:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:44:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:44:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 13:47:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 13:53:55 --> Could not find the language line "Disclaimer"
ERROR - 2024-01-20 13:59:05 --> Could not find the language line "Home"
ERROR - 2024-01-20 13:59:20 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 14:08:51 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:08:57 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 14:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 14:09:07 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 14:09:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:09:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 14:10:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 14:14:48 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:16:57 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 14:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 14:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 14:24:45 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:25:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:25:23 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:26:41 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 14:28:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:30:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:31:05 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:31:07 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:32:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:35:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 14:52:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 15:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:04:44 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:11:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:16:49 --> Could not find the language line "hair%20%26%20skin%20products"
ERROR - 2024-01-20 15:16:49 --> Could not find the language line "hair%20%26%20skin%20products"
ERROR - 2024-01-20 15:19:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:19:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:20:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 15:38:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 15:40:49 --> Could not find the language line "Home"
ERROR - 2024-01-20 15:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 15:52:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 15:53:45 --> 404 Page Not Found: Item/1586966
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 15:54:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 16:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 16:04:53 --> Could not find the language line "Other"
ERROR - 2024-01-20 16:08:47 --> Could not find the language line "Home"
ERROR - 2024-01-20 16:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 16:19:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:21:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:23:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 16:23:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 16:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 16:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 16:30:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 16:43:22 --> Could not find the language line "Home"
ERROR - 2024-01-20 16:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 16:47:02 --> Could not find the language line "Home"
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:48:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 16:55:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 16:55:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 16:58:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 17:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:05:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:06:10 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:08:06 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:22:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 17:23:26 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:24:32 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:24:49 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:24:50 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:25:32 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:26:02 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:26:05 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:28:04 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:28:04 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:28:07 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:28:09 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:28:14 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:29:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:29:29 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:29:35 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 17:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:30:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 17:30:01 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:32:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:33:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 17:33:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 17:33:20 --> Could not find the language line "assets"
ERROR - 2024-01-20 17:33:20 --> Could not find the language line "assets"
ERROR - 2024-01-20 17:33:20 --> Could not find the language line "assets"
ERROR - 2024-01-20 17:33:20 --> Could not find the language line "assets"
ERROR - 2024-01-20 17:33:20 --> Could not find the language line "assets"
ERROR - 2024-01-20 17:48:03 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:48:16 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:51:33 --> Could not find the language line "Home"
ERROR - 2024-01-20 17:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 17:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 18:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:02:00 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:02:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 18:02:09 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:07:13 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:11:40 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:11:45 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:12:00 --> Could not find the language line "Perfume"
ERROR - 2024-01-20 18:12:07 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:12:10 --> Could not find the language line "Perfume"
ERROR - 2024-01-20 18:12:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 18:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 18:18:33 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 18:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 18:28:18 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:30:10 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:38:38 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:46:32 --> Could not find the language line "Home"
ERROR - 2024-01-20 18:48:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-01-20 18:53:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 18:53:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:00:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 19:00:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 19:03:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 19:03:09 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:04:36 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:04:36 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:04:36 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:04:36 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:11:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:24:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:32:43 --> Could not find the language line "Socks"
ERROR - 2024-01-20 19:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 19:39:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 19:40:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:40:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 19:47:55 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 19:50:40 --> Could not find the language line "Home"
ERROR - 2024-01-20 19:51:08 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 19:51:16 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 19:52:00 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 19:52:48 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 19:53:09 --> 404 Page Not Found: Products/products
ERROR - 2024-01-20 20:00:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:05:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 20:06:47 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:07:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:12:34 --> Could not find the language line "products"
ERROR - 2024-01-20 20:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:20:42 --> Could not find the language line "Socks"
ERROR - 2024-01-20 20:22:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 20:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:30:11 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 20:37:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:38:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 20:42:23 --> Could not find the language line "Other"
ERROR - 2024-01-20 20:51:13 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:51:31 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 20:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:52:10 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 20:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:52:39 --> Could not find the language line "Clothing"
ERROR - 2024-01-20 20:52:39 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:52:41 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:59:08 --> Could not find the language line "Home"
ERROR - 2024-01-20 20:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 20:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 21:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 21:00:13 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 21:00:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:04:07 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 21:08:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 21:15:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-01-20 21:24:21 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 21:25:11 --> Could not find the language line "Bracelets"
ERROR - 2024-01-20 21:25:38 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:25:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 21:25:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 21:26:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 21:26:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 21:26:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 21:26:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-01-20 21:26:53 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:26:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-01-20 21:27:49 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:29:52 --> Could not find the language line "Other"
ERROR - 2024-01-20 21:30:12 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:30:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:34:56 --> Could not find the language line "Home"
ERROR - 2024-01-20 21:47:39 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 21:50:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:50:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 21:53:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 21:53:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:00:18 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:04:14 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:11:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 22:18:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:24:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 22:30:15 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 22:43:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:43:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:46:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-01-20 22:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-20 22:46:39 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:46:40 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:46:43 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:46:44 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:46:58 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:47:01 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:47:02 --> Could not find the language line "Home"
ERROR - 2024-01-20 22:47:09 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 93
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 94
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 95
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 97
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:47:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2024-01-20 22:51:54 --> Could not find the language line "products"
ERROR - 2024-01-20 23:00:22 --> Could not find the language line "Home"
ERROR - 2024-01-20 23:07:53 --> 404 Page Not Found: Csvphp/index
ERROR - 2024-01-20 23:14:29 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-01-20 23:21:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 23:26:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 23:30:13 --> Could not find the language line "Home"
ERROR - 2024-01-20 23:38:19 --> Could not find the language line "Home"
ERROR - 2024-01-20 23:40:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-20 23:53:51 --> Could not find the language line "Home"
ERROR - 2024-01-20 23:54:07 --> 404 Page Not Found: Assets/css
