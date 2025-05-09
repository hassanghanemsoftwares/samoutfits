<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-12 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 00:03:29 --> Could not find the language line "products"
ERROR - 2023-11-12 00:04:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 00:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 00:17:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 00:28:23 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-12 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 00:30:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 00:30:27 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-12 00:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 00:53:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:00:20 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 01:08:54 --> Could not find the language line "products"
ERROR - 2023-11-12 01:11:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 01:17:43 --> Could not find the language line "Perfume"
ERROR - 2023-11-12 01:22:33 --> Could not find the language line "products"
ERROR - 2023-11-12 01:26:44 --> Could not find the language line "products"
ERROR - 2023-11-12 01:26:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 01:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:28:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:29:45 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-12 01:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:30:36 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:34:04 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:34:31 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:36:00 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:37:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 01:40:22 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 01:41:19 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:42:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 01:42:47 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:42:51 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:49:00 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:50:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 01:50:54 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:52:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 01:53:29 --> Could not find the language line "products"
ERROR - 2023-11-12 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:04:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:13:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 02:25:38 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:26:55 --> Could not find the language line "products"
ERROR - 2023-11-12 02:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:27:29 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:28:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:30:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 02:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:35:49 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:35:57 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:36:06 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:36:08 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:36:15 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:36:16 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 02:36:27 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:36:35 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:36:36 --> Could not find the language line "Socks"
ERROR - 2023-11-12 02:36:38 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:38:04 --> Could not find the language line "products"
ERROR - 2023-11-12 02:38:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 02:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 02:47:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 02:52:33 --> Could not find the language line "Home"
ERROR - 2023-11-12 02:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 03:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 03:12:02 --> 404 Page Not Found: Item/810602
ERROR - 2023-11-12 03:30:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 03:30:21 --> Could not find the language line "Home"
ERROR - 2023-11-12 03:34:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 03:36:21 --> Could not find the language line "products"
ERROR - 2023-11-12 03:41:16 --> Could not find the language line "Home"
ERROR - 2023-11-12 03:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 03:45:48 --> Could not find the language line "Home"
ERROR - 2023-11-12 03:54:21 --> Could not find the language line "products"
ERROR - 2023-11-12 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 04:07:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-12 04:12:22 --> Could not find the language line "products"
ERROR - 2023-11-12 04:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 04:30:21 --> Could not find the language line "products"
ERROR - 2023-11-12 04:31:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 04:43:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:00:27 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:06:22 --> Could not find the language line "products"
ERROR - 2023-11-12 05:07:52 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-12 05:09:08 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:09:09 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:09:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:13:26 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-12 05:17:19 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:19:13 --> Could not find the language line "products"
ERROR - 2023-11-12 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:44:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 05:44:56 --> Could not find the language line "products"
ERROR - 2023-11-12 05:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 05:53:37 --> Could not find the language line "Home"
ERROR - 2023-11-12 05:57:47 --> Could not find the language line "products"
ERROR - 2023-11-12 05:58:20 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:00:36 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:00:48 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:09:54 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:10:39 --> Could not find the language line "products"
ERROR - 2023-11-12 06:13:25 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:20:40 --> Could not find the language line "products"
ERROR - 2023-11-12 06:22:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 06:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 06:23:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 06:23:31 --> Could not find the language line "products"
ERROR - 2023-11-12 06:24:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 06:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 06:30:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 06:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:36:22 --> Could not find the language line "products"
ERROR - 2023-11-12 06:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:47:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 06:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 06:49:13 --> Could not find the language line "products"
ERROR - 2023-11-12 06:50:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 06:50:55 --> Could not find the language line "Home"
ERROR - 2023-11-12 06:56:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 06:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-12 06:56:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 06:57:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 06:57:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-12 06:57:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 06:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:02:04 --> Could not find the language line "products"
ERROR - 2023-11-12 07:03:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:04:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:05:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:05:55 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:05:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:07:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:07:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:07:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:07:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:07:40 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:10:50 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:12:04 --> Could not find the language line "products"
ERROR - 2023-11-12 07:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:15:17 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:21:41 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:22:04 --> Could not find the language line "products"
ERROR - 2023-11-12 07:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:24:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:32:04 --> Could not find the language line "products"
ERROR - 2023-11-12 07:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:36:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:37:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:42:04 --> Could not find the language line "products"
ERROR - 2023-11-12 07:42:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 07:42:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-12 07:42:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 07:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:45:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 07:46:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 07:47:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 07:48:01 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:48:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:48:09 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-12 07:48:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:48:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:48:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 07:48:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 07:48:12 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-11-12 07:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:49:29 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:49:51 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-12 07:49:52 --> Could not find the language line "Home"
ERROR - 2023-11-12 07:49:53 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-11-12 07:50:30 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-12 07:50:32 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-11-12 07:52:04 --> Could not find the language line "products"
ERROR - 2023-11-12 07:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:59:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 07:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-12 07:59:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 07:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 07:59:28 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:01:52 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:01:53 --> Could not find the language line "Bracelets"
ERROR - 2023-11-12 08:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:02:00 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-12 08:02:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:02:04 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:02:05 --> Could not find the language line "products"
ERROR - 2023-11-12 08:02:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 08:02:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 08:02:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 08:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:05:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:09:22 --> Could not find the language line "Perfume"
ERROR - 2023-11-12 08:09:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:10:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:11:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:11:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:12:04 --> Could not find the language line "products"
ERROR - 2023-11-12 08:12:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:12:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 08:12:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 08:12:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 08:13:02 --> Could not find the language line "products"
ERROR - 2023-11-12 08:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:15:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 08:18:02 --> Could not find the language line "products"
ERROR - 2023-11-12 08:18:22 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-12 08:18:42 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:18:58 --> Could not find the language line "Bracelets"
ERROR - 2023-11-12 08:19:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:21:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:21:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:22:04 --> Could not find the language line "products"
ERROR - 2023-11-12 08:22:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:23:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:29:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:32:04 --> Could not find the language line "products"
ERROR - 2023-11-12 08:39:46 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:40:51 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:40:52 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 08:43:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:43:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:45:05 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:45:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:45:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:46:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:49:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 08:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 08:52:04 --> Could not find the language line "products"
ERROR - 2023-11-12 08:53:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 08:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:55:37 --> Could not find the language line "Home"
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:56:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 08:57:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 08:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 08:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:01:38 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:02:04 --> Could not find the language line "products"
ERROR - 2023-11-12 09:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:05:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:07:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:08:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 09:09:34 --> Could not find the language line "products"
ERROR - 2023-11-12 09:10:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:12:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 09:12:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 09:12:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 09:14:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:17:04 --> Could not find the language line "products"
ERROR - 2023-11-12 09:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:22:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 09:22:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 09:22:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 09:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:24:34 --> Could not find the language line "products"
ERROR - 2023-11-12 09:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:27:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 09:27:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 09:27:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 09:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:30:07 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:32:04 --> Could not find the language line "products"
ERROR - 2023-11-12 09:35:16 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:37:43 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-12 09:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:39:34 --> Could not find the language line "products"
ERROR - 2023-11-12 09:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 09:44:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 09:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 09:44:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 09:46:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 09:46:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-12 09:46:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 09:46:52 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:47:04 --> Could not find the language line "products"
ERROR - 2023-11-12 09:47:28 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:50:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:51:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 09:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:54:34 --> Could not find the language line "products"
ERROR - 2023-11-12 09:54:54 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 09:56:58 --> Could not find the language line "Home"
ERROR - 2023-11-12 09:58:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 09:59:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:02:04 --> Could not find the language line "products"
ERROR - 2023-11-12 10:05:12 --> Could not find the language line "Bracelets"
ERROR - 2023-11-12 10:06:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 10:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:09:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:09:34 --> Could not find the language line "products"
ERROR - 2023-11-12 10:12:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 10:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '31'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 10:12:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 10:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:16:02 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:16:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 10:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 10:16:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 10:17:04 --> Could not find the language line "products"
ERROR - 2023-11-12 10:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:22:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:23:10 --> 404 Page Not Found: All/index
ERROR - 2023-11-12 10:24:34 --> Could not find the language line "products"
ERROR - 2023-11-12 10:24:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:24:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:24:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:24:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:32:04 --> Could not find the language line "products"
ERROR - 2023-11-12 10:36:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:37:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:37:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:38:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 10:39:34 --> Could not find the language line "products"
ERROR - 2023-11-12 10:42:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 10:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 10:47:04 --> Could not find the language line "products"
ERROR - 2023-11-12 10:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 10:52:46 --> Could not find the language line "Home"
ERROR - 2023-11-12 10:53:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 10:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 10:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 10:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:53:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 10:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 10:54:34 --> Could not find the language line "products"
ERROR - 2023-11-12 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:02:04 --> Could not find the language line "products"
ERROR - 2023-11-12 11:02:05 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:02:29 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:02:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:03:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:03:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:03:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:04:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:04:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:05:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:06:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:06:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:06:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:06:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:07:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 11:08:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 11:08:04 --> Could not find the language line "products"
ERROR - 2023-11-12 11:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:08:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 11:08:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 11:08:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 11:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:09:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 11:09:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:10:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-12 11:12:36 --> Could not find the language line "products"
ERROR - 2023-11-12 11:13:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 11:13:35 --> Could not find the language line "products"
ERROR - 2023-11-12 11:14:34 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:19:21 --> Could not find the language line "products"
ERROR - 2023-11-12 11:23:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:25:06 --> Could not find the language line "products"
ERROR - 2023-11-12 11:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:33:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 11:37:03 --> Could not find the language line "assets"
ERROR - 2023-11-12 11:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:39:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:41:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 11:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 11:41:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 11:42:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 11:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:50:26 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:50:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:50:39 --> Could not find the language line "products"
ERROR - 2023-11-12 11:50:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:51:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 11:51:48 --> Could not find the language line "Home"
ERROR - 2023-11-12 11:53:31 --> Could not find the language line "products"
ERROR - 2023-11-12 11:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 11:56:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 11:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:03:19 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:05:24 --> Could not find the language line "products"
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:06:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 12:06:34 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 12:15:04 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:18:42 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:20:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 12:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:26:05 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:28:45 --> Could not find the language line "products"
ERROR - 2023-11-12 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 12:32:54 --> Could not find the language line "products"
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:34:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 12:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 12:54:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 12:56:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 13:00:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 13:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:09:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 13:09:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 13:09:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 13:12:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 13:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 13:12:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 13:13:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 13:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 13:20:40 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-12 13:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 13:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '17'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 13:29:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 13:31:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 13:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 13:31:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 13:34:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:34:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:37:38 --> Could not find the language line "Home"
ERROR - 2023-11-12 13:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:38:01 --> Could not find the language line "Home"
ERROR - 2023-11-12 13:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:38:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 13:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:39:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 13:40:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-12 13:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-12 13:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-12 13:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:42:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 13:45:36 --> Could not find the language line "Home"
ERROR - 2023-11-12 13:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 13:57:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 13:58:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 14:07:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 14:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:19:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 14:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 14:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:37:46 --> Could not find the language line "Home"
ERROR - 2023-11-12 14:39:07 --> 404 Page Not Found: Products/products
ERROR - 2023-11-12 14:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:41:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:41:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:41:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:41:46 --> Could not find the language line "Home"
ERROR - 2023-11-12 14:41:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:42:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:42:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:44:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 14:46:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 14:46:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 14:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 14:58:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 14:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:01:36 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:04:48 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:06:53 --> Could not find the language line "Bracelets"
ERROR - 2023-11-12 15:08:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 15:09:29 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:13:33 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:14:30 --> Could not find the language line "Other"
ERROR - 2023-11-12 15:14:37 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:19:49 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:20:40 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:20:44 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:20:58 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 15:25:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 15:25:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 15:26:00 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:26:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 15:26:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 15:26:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:26:55 --> Could not find the language line "Socks"
ERROR - 2023-11-12 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:33:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-12 15:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 15:41:40 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:42:40 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:45:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-12 15:50:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 15:50:42 --> Could not find the language line "Home"
ERROR - 2023-11-12 15:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 15:58:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:01:36 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:01:48 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:04:38 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:11:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 16:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 16:11:43 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 16:12:08 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:20:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 16:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 16:28:31 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 16:50:43 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:55:07 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:55:33 --> Could not find the language line "Home"
ERROR - 2023-11-12 16:56:41 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:00:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 17:04:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 17:04:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 17:10:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 17:12:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-12 17:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:15:37 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:23:16 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:24:44 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:25:02 --> Could not find the language line "Perfume"
ERROR - 2023-11-12 17:25:14 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:26:46 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:28:28 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:29:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:32:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:32:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 17:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:34:54 --> Could not find the language line "Bracelets"
ERROR - 2023-11-12 17:35:11 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:35:49 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:36:01 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:36:12 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:36:22 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:36:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-12 17:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:36:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-12 17:36:52 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:36:56 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:37:00 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:37:02 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:37:04 --> Could not find the language line "Other"
ERROR - 2023-11-12 17:38:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:38:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 17:38:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 17:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 17:40:50 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:45:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 17:53:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 17:56:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:59:05 --> Could not find the language line "Home"
ERROR - 2023-11-12 17:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 17:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:01:20 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:02:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 18:02:28 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:03:09 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:03:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 18:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 18:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 18:05:34 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:05:45 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:05:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:05:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:05:53 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:06:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:06:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:06:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:06:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:07:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:07:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-12 18:10:10 --> Could not find the language line "products"
ERROR - 2023-11-12 18:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-12 18:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 18:27:51 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:32:40 --> Could not find the language line "products"
ERROR - 2023-11-12 18:34:38 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 18:35:09 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:35:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:43:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 18:51:39 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:56:14 --> Could not find the language line "Home"
ERROR - 2023-11-12 18:57:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-12 18:58:55 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:01:35 --> Could not find the language line "products"
ERROR - 2023-11-12 19:02:34 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:04:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 19:04:44 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:06:35 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:19:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 19:22:37 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:25:43 --> 404 Page Not Found: Products/products
ERROR - 2023-11-12 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 19:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 19:47:36 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 20:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 20:07:32 --> Could not find the language line "products"
ERROR - 2023-11-12 20:10:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:10:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 20:14:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 20:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:14:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 20:14:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 20:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:15:25 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:15:27 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:15:46 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:16:29 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:20:33 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 20:44:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 20:46:28 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:56:40 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:57:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 20:57:20 --> Could not find the language line "Home"
ERROR - 2023-11-12 20:59:05 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:07:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 21:07:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 21:23:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:23:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-12 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:35:22 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:39:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:40:08 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:40:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:43:15 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 21:45:18 --> Could not find the language line "Home"
ERROR - 2023-11-12 21:55:15 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:12:33 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 22:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 22:14:00 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 22:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 22:17:16 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:18:25 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:19:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 22:20:20 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:20:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:21:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-12 22:24:47 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:25:41 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:26:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-12 22:26:21 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:28:51 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:30:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 22:34:18 --> Could not find the language line "Other"
ERROR - 2023-11-12 22:39:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 22:41:35 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-12 22:54:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 22:54:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:08:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 23:09:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-12 23:13:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-12 23:25:35 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:29:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-12 23:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:30:21 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:31:29 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:35:28 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:38:17 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:38:43 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:40:35 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-12 23:46:35 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:58:57 --> Could not find the language line "Home"
ERROR - 2023-11-12 23:58:57 --> Could not find the language line "Home"
