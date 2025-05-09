<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-23 00:00:24 --> Could not find the language line "Home"
ERROR - 2023-11-23 00:00:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 00:04:03 --> Could not find the language line "products"
ERROR - 2023-11-23 00:08:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 00:08:46 --> Could not find the language line "Home"
ERROR - 2023-11-23 00:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 00:18:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 00:18:27 --> Could not find the language line "products"
ERROR - 2023-11-23 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-23 00:30:48 --> Could not find the language line "Home"
ERROR - 2023-11-23 00:34:35 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-23 00:45:08 --> Could not find the language line "Home"
ERROR - 2023-11-23 00:56:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 00:57:04 --> Could not find the language line "products"
ERROR - 2023-11-23 01:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:02:04 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:02:06 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:10:35 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:16:49 --> Could not find the language line "products"
ERROR - 2023-11-23 01:17:31 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 01:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 01:23:42 --> Could not find the language line "products"
ERROR - 2023-11-23 01:25:19 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:34:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 01:36:25 --> Could not find the language line "products"
ERROR - 2023-11-23 01:36:53 --> Could not find the language line "products"
ERROR - 2023-11-23 01:43:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:43:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 01:49:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 01:49:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 01:55:05 --> Could not find the language line "products"
ERROR - 2023-11-23 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 02:01:30 --> Could not find the language line "products"
ERROR - 2023-11-23 02:05:11 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-23 02:17:07 --> Could not find the language line "products"
ERROR - 2023-11-23 02:26:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 02:28:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 02:28:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-23 02:30:49 --> Could not find the language line "products"
ERROR - 2023-11-23 02:58:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-11-23 03:05:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 03:05:37 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:19:51 --> Could not find the language line "Home"
ERROR - 2023-11-23 03:19:58 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:20:19 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:20:43 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:20:58 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:21:03 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:21:27 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:21:45 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:21:48 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:22:07 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:22:13 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:22:19 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:23 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:24 --> Could not find the language line "Home"
ERROR - 2023-11-23 03:22:32 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:22:40 --> Could not find the language line "Socks"
ERROR - 2023-11-23 03:22:41 --> Could not find the language line "Home"
ERROR - 2023-11-23 03:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:29:36 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 03:35:25 --> Could not find the language line "products"
ERROR - 2023-11-23 03:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 03:51:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 03:53:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 03:55:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 03:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 04:01:13 --> Could not find the language line "Home"
ERROR - 2023-11-23 04:01:13 --> Could not find the language line "Home"
ERROR - 2023-11-23 04:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 04:14:34 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 04:19:05 --> Could not find the language line "products"
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:24:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 04:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-23 04:45:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 04:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 04:54:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 04:59:34 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 05:15:25 --> Could not find the language line "Other"
ERROR - 2023-11-23 05:17:23 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 05:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 05:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 05:25:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 05:28:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 05:28:29 --> Could not find the language line "Home"
ERROR - 2023-11-23 05:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 05:30:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 05:33:51 --> Could not find the language line "Other"
ERROR - 2023-11-23 05:57:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:11:49 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:13:27 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:13:28 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 06:14:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 06:14:16 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:19:17 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:20:08 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:23:49 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:25:40 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:31:16 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:32:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 06:38:19 --> Could not find the language line "Home"
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:43:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 06:51:19 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-23 06:54:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 06:54:58 --> 404 Page Not Found: Big-sizes/index
ERROR - 2023-11-23 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 07:00:53 --> 404 Page Not Found: Products/products
ERROR - 2023-11-23 07:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:08:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 07:08:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-23 07:08:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 07:18:38 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 07:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:27:03 --> Could not find the language line "products"
ERROR - 2023-11-23 07:29:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 07:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-23 07:29:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 07:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 07:35:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 07:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 07:54:48 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 07:56:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-23 08:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:06:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 08:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:09:25 --> Could not find the language line "Home"
ERROR - 2023-11-23 08:10:07 --> Could not find the language line "products"
ERROR - 2023-11-23 08:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:13:37 --> Could not find the language line "products"
ERROR - 2023-11-23 08:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 08:27:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-23 08:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 08:30:53 --> Could not find the language line "products"
ERROR - 2023-11-23 08:33:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 08:33:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 08:44:44 --> 404 Page Not Found: Products/products
ERROR - 2023-11-23 08:45:56 --> Could not find the language line "Home"
ERROR - 2023-11-23 08:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:03:33 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:03:35 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 09:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:06:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-23 09:07:31 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:07:32 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:08:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 09:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-23 09:08:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 09:17:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 09:30:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:30:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 09:31:43 --> Could not find the language line "products"
ERROR - 2023-11-23 09:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:38:19 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 09:42:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 09:42:06 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:44:04 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:44:51 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:50:59 --> Could not find the language line "products"
ERROR - 2023-11-23 09:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:52:29 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:53:06 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:53:07 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:54:41 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 09:57:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 09:57:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 09:57:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 09:57:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 09:57:15 --> 404 Page Not Found: Home/accounts
ERROR - 2023-11-23 09:57:15 --> 404 Page Not Found: Home/home
ERROR - 2023-11-23 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:00:24 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:04:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:04:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 10:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 10:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 10:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 10:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 10:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 10:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 10:08:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 10:11:21 --> 404 Page Not Found: Products/products
ERROR - 2023-11-23 10:13:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 10:14:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:14:34 --> 404 Page Not Found: Products/products
ERROR - 2023-11-23 10:16:42 --> Could not find the language line "products"
ERROR - 2023-11-23 10:17:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 10:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 10:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 10:34:47 --> Could not find the language line "products"
ERROR - 2023-11-23 10:35:07 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:35:59 --> Could not find the language line "products"
ERROR - 2023-11-23 10:39:35 --> Could not find the language line "products"
ERROR - 2023-11-23 10:42:57 --> Could not find the language line "Home"
ERROR - 2023-11-23 10:47:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 10:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Boots')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-23 10:47:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 10:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 10:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 10:56:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 10:59:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 10:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 11:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:05:01 --> Could not find the language line "Home"
ERROR - 2023-11-23 11:06:05 --> Could not find the language line "Home"
ERROR - 2023-11-23 11:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:15:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 11:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:16:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 11:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '10'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-23 11:16:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 11:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 11:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:40:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 11:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:43:26 --> Could not find the language line "Home"
ERROR - 2023-11-23 11:43:30 --> Could not find the language line "Home"
ERROR - 2023-11-23 11:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 11:43:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 11:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 11:46:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 11:49:53 --> Could not find the language line "products"
ERROR - 2023-11-23 11:50:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 11:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 12:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:07:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 12:16:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 12:16:30 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:17:17 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:18:54 --> Could not find the language line "products"
ERROR - 2023-11-23 12:19:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 12:19:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:22:38 --> Could not find the language line "Socks"
ERROR - 2023-11-23 12:23:50 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:35:12 --> Could not find the language line "products"
ERROR - 2023-11-23 12:35:24 --> Could not find the language line "products"
ERROR - 2023-11-23 12:43:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 12:43:41 --> Could not find the language line "Home"
ERROR - 2023-11-23 12:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 13:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 13:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:11:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 13:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 13:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:17:35 --> 404 Page Not Found: Products/products
ERROR - 2023-11-23 13:18:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 13:22:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 13:22:52 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:23:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:26:58 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:28:53 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:31:03 --> Could not find the language line "Socks"
ERROR - 2023-11-23 13:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:34:06 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:35:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 13:36:39 --> Could not find the language line "products"
ERROR - 2023-11-23 13:43:55 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 13:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:52:57 --> Could not find the language line "Socks"
ERROR - 2023-11-23 13:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 13:53:33 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:55:05 --> 404 Page Not Found: Products/products
ERROR - 2023-11-23 13:55:12 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-23 13:55:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 13:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 13:55:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 13:55:53 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:55:56 --> Could not find the language line "Home"
ERROR - 2023-11-23 13:57:39 --> Could not find the language line "Socks"
ERROR - 2023-11-23 14:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:00:47 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:02:22 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:03:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-23 14:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:04:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:04:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:04:55 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:17:23 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:25:21 --> Could not find the language line "products"
ERROR - 2023-11-23 14:26:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 14:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 14:26:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 14:29:33 --> Could not find the language line "products"
ERROR - 2023-11-23 14:30:07 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:40:43 --> Could not find the language line "Home"
ERROR - 2023-11-23 14:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 14:43:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 14:43:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-23 14:43:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 14:44:34 --> Could not find the language line "products"
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:48:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 14:49:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 14:53:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 14:55:05 --> Could not find the language line "products"
ERROR - 2023-11-23 14:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 15:03:57 --> Could not find the language line "Home"
ERROR - 2023-11-23 15:04:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 15:04:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 15:12:54 --> Could not find the language line "products"
ERROR - 2023-11-23 15:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:13:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 15:17:58 --> Could not find the language line "Home"
ERROR - 2023-11-23 15:20:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 15:20:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 15:20:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 15:20:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 15:20:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 15:20:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 15:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 15:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 15:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 15:32:45 --> Could not find the language line "products"
ERROR - 2023-11-23 15:55:05 --> Could not find the language line "products"
ERROR - 2023-11-23 16:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 16:09:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 16:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:25:05 --> Could not find the language line "products"
ERROR - 2023-11-23 16:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:29:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 16:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 16:33:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 16:35:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 16:45:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 16:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:50:50 --> Could not find the language line "Home"
ERROR - 2023-11-23 16:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:51:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:51:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:51:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:52:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:52:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:52:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:53:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:53:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:53:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:53:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:53:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 16:53:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:54:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:54:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 16:54:39 --> Could not find the language line "Home"
ERROR - 2023-11-23 16:55:05 --> Could not find the language line "products"
ERROR - 2023-11-23 17:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 17:01:03 --> Could not find the language line "Home"
ERROR - 2023-11-23 17:15:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 17:16:34 --> Could not find the language line "socks"
ERROR - 2023-11-23 17:16:34 --> Could not find the language line "Socks"
ERROR - 2023-11-23 17:16:34 --> Could not find the language line "socks"
ERROR - 2023-11-23 17:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:19:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-23 17:24:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-23 17:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-23 17:24:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-23 17:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 17:29:13 --> Could not find the language line "Home"
ERROR - 2023-11-23 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 17:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 17:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 17:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 17:44:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 17:44:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-23 17:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 17:50:16 --> Could not find the language line "Home"
ERROR - 2023-11-23 17:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 18:06:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 18:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 18:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 18:29:19 --> Could not find the language line "Home"
ERROR - 2023-11-23 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 18:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 18:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 18:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 18:36:20 --> Could not find the language line "products"
ERROR - 2023-11-23 18:36:55 --> Could not find the language line "Home"
ERROR - 2023-11-23 18:44:15 --> Could not find the language line "Home"
ERROR - 2023-11-23 18:46:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 18:51:44 --> Could not find the language line "Home"
ERROR - 2023-11-23 18:52:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 18:59:42 --> Could not find the language line "products"
ERROR - 2023-11-23 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:14:02 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:20:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 19:24:54 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:24:59 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 19:25:43 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:26:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:26:58 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:46:43 --> Could not find the language line "Home"
ERROR - 2023-11-23 19:47:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 19:57:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 20:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:00:26 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:02:57 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:03:06 --> Could not find the language line "Socks"
ERROR - 2023-11-23 20:03:35 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:04:11 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 20:06:58 --> Could not find the language line "products"
ERROR - 2023-11-23 20:07:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 20:08:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:28:29 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:28:58 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:29:18 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:41:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 20:42:04 --> Could not find the language line "Home"
ERROR - 2023-11-23 20:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 20:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 20:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 20:52:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 21:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 21:08:32 --> Could not find the language line "Home"
ERROR - 2023-11-23 21:15:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-23 21:22:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-23 21:25:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 21:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 21:37:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 21:38:00 --> Could not find the language line "Home"
ERROR - 2023-11-23 21:38:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 21:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 21:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-23 21:53:42 --> Could not find the language line "Home"
ERROR - 2023-11-23 21:58:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 22:06:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-23 22:28:00 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-23 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-23 22:36:52 --> Could not find the language line "products"
ERROR - 2023-11-23 22:41:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 22:45:52 --> Could not find the language line "products"
ERROR - 2023-11-23 22:53:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 22:54:52 --> Could not find the language line "products"
ERROR - 2023-11-23 23:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 23:06:55 --> Could not find the language line "products"
ERROR - 2023-11-23 23:12:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-23 23:15:55 --> Could not find the language line "products"
ERROR - 2023-11-23 23:19:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 23:24:09 --> Could not find the language line "Home"
ERROR - 2023-11-23 23:24:55 --> Could not find the language line "products"
ERROR - 2023-11-23 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-23 23:32:50 --> Could not find the language line "Home"
ERROR - 2023-11-23 23:34:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-23 23:36:52 --> Could not find the language line "products"
ERROR - 2023-11-23 23:46:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-23 23:59:50 --> Could not find the language line "Home"
