<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-15 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:02:18 --> Could not find the language line "products"
ERROR - 2023-12-15 00:05:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:07:30 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:09:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 00:09:34 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:11:42 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:12:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-15 00:14:12 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-15 00:24:47 --> Could not find the language line "products"
ERROR - 2023-12-15 00:30:20 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:40:01 --> Could not find the language line "Home"
ERROR - 2023-12-15 00:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 00:58:06 --> Could not find the language line "Home"
ERROR - 2023-12-15 01:00:24 --> Could not find the language line "Home"
ERROR - 2023-12-15 01:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 01:04:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-15 01:09:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 01:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-15 01:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 01:31:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-12-15 01:48:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 01:54:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-12-15 01:54:47 --> Could not find the language line "products"
ERROR - 2023-12-15 01:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:05:23 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:05:28 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:05:41 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:05:51 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 02:30:21 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 02:39:47 --> 404 Page Not Found: Products/products
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:41:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 02:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 02:50:34 --> Could not find the language line "Home"
ERROR - 2023-12-15 02:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 03:00:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:04:18 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:06:09 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:06:16 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 03:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 03:07:15 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 03:07:32 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 03:07:33 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:07:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 03:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 03:08:17 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:08:25 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 03:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 03:08:46 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 03:08:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:08:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 03:08:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 03:09:17 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:11:20 --> Could not find the language line "products"
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:19:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 03:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 03:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-15 03:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 03:42:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-15 03:44:04 --> Could not find the language line "products"
ERROR - 2023-12-15 03:57:07 --> Could not find the language line "Home"
ERROR - 2023-12-15 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-12-15 04:02:09 --> Could not find the language line "Home"
ERROR - 2023-12-15 04:18:37 --> Could not find the language line "Home"
ERROR - 2023-12-15 04:18:51 --> Could not find the language line "Socks"
ERROR - 2023-12-15 04:19:17 --> Could not find the language line "Socks"
ERROR - 2023-12-15 04:19:26 --> Could not find the language line "Socks"
ERROR - 2023-12-15 04:19:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 04:20:28 --> Could not find the language line "Socks"
ERROR - 2023-12-15 04:20:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 04:21:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 04:21:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 04:21:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 04:21:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 04:29:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 04:35:29 --> Could not find the language line "products"
ERROR - 2023-12-15 04:38:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 04:38:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 04:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 04:47:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:47:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 04:48:21 --> Could not find the language line "products"
ERROR - 2023-12-15 04:52:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:07:18 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 05:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 05:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 05:08:29 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:10:02 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:11:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:14:04 --> Could not find the language line "products"
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 05:18:05 --> Could not find the language line "Other"
ERROR - 2023-12-15 05:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 05:24:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:32:40 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:35:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:41:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:44:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:44:29 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 05:44:38 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 05:49:29 --> Could not find the language line "Home"
ERROR - 2023-12-15 05:51:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:03:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 06:04:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 06:09:17 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:09:18 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:13:53 --> 404 Page Not Found: Item/2008
ERROR - 2023-12-15 06:14:04 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 06:14:26 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 06:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 06:22:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 06:22:27 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 06:31:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 06:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 06:32:06 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:34:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 06:35:01 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 06:44:18 --> Could not find the language line "Home"
ERROR - 2023-12-15 06:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 06:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 06:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 06:58:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-15 06:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-15 06:58:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 06:59:56 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:02:45 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 07:09:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:09:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:09:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:09:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:09:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:13:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:14:02 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:14:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 07:14:44 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:22:08 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:22:10 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:22:18 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:22:49 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 07:30:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:36:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 07:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 07:46:22 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-12-15 07:49:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 07:52:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 07:52:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 07:53:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-15 07:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-15 07:53:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 07:55:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 07:59:15 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 07:59:59 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 08:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:01:33 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:02:00 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 08:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:02:34 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:02:36 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 08:05:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:05:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:06:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 08:12:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:32:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 08:34:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-15 08:44:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:55:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:56:06 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:56:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:56:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 08:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 08:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 08:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 08:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 08:58:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 08:58:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:01:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:04:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 09:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 09:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 09:18:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 09:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 09:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 09:34:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:34:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 09:36:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:37:51 --> Could not find the language line "Home"
ERROR - 2023-12-15 09:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 09:44:04 --> Could not find the language line "products"
ERROR - 2023-12-15 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:03:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:04:57 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:06:15 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:14:04 --> Could not find the language line "products"
ERROR - 2023-12-15 10:16:37 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:29:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-15 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:34:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:36:21 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:37:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:37:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:38:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 10:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:42:50 --> Could not find the language line "products"
ERROR - 2023-12-15 10:44:04 --> 404 Page Not Found: Products/products
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 10:44:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:44:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:45:33 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:53:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 10:54:28 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:55:08 --> Could not find the language line "Home"
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 10:56:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:04:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 11:04:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 11:27:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:28:09 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:28:19 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:33:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:33:27 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:33:34 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 11:33:34 --> Could not find the language line "Socks"
ERROR - 2023-12-15 11:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:33:51 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 11:33:54 --> Could not find the language line "Socks"
ERROR - 2023-12-15 11:33:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:34:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 11:34:08 --> Could not find the language line "Socks"
ERROR - 2023-12-15 11:34:35 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:49:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 11:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 11:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 12:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 12:05:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:05:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:05:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:05:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:05:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:05:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:06:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:06:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:06:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:06:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:06:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:06:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:07:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 12:07:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 12:10:29 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:12:40 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:18:04 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:21:24 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:23:40 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:29:57 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 12:30:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:31:07 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2023-12-15 12:31:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
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
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2023-12-15 12:31:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 12:31:42 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:32:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 12:32:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:36:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:36:50 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:37:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 12:40:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:45:59 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:48:03 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:53:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:53:53 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 12:54:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 12:54:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:07:57 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:08:20 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:08:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:08:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:08:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:08:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:09:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:09:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:09:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:09:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 13:09:28 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:09:58 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:10:08 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:10:45 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2023-12-15 13:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
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
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2023-12-15 13:10:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 13:10:54 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:20:03 --> Could not find the language line "Socks"
ERROR - 2023-12-15 13:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:35:19 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 13:53:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:37 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 13:58:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 13:58:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:06:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:09:57 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:10:14 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:10:27 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:10:30 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:10:41 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:10:42 --> 404 Page Not Found: Home/assets
ERROR - 2023-12-15 14:11:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-15 14:11:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-15 14:11:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 14:11:52 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 14:12:02 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 14:12:03 --> Could not find the language line "assets"
ERROR - 2023-12-15 14:12:24 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 14:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:18:10 --> 404 Page Not Found: Item/560110
ERROR - 2023-12-15 14:24:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:30:09 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:31:57 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:32:04 --> 404 Page Not Found: Products/products
ERROR - 2023-12-15 14:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:33:21 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 14:35:32 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:35:36 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:35:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:36:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:36:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:37:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:37:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:39:05 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:39:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:41:18 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:43:38 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:43:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:43:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:44:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:44:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:45:08 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:46:22 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:46:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:47:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:47:04 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:49:26 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:50:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 14:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 14:54:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 14:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 15:02:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:03:33 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:03:39 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:03:39 --> 404 Page Not Found: Home/assets
ERROR - 2023-12-15 15:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 15:06:19 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:06:50 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:08:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-15 15:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-15 15:08:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 15:14:03 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:14:18 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:17:26 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:24:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:26:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 15:26:29 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:38:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 15:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 15:38:55 --> Could not find the language line "products"
ERROR - 2023-12-15 15:45:01 --> Could not find the language line "Home"
ERROR - 2023-12-15 15:55:45 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:06:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 16:06:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 16:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 16:16:17 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 16:17:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:18:03 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:18:03 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:18:07 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:18:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:18:23 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 16:18:39 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:26:10 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:30:21 --> Could not find the language line "products"
ERROR - 2023-12-15 16:41:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 16:43:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:43:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 16:48:09 --> Could not find the language line "Home"
ERROR - 2023-12-15 16:59:09 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 16:59:50 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:01:21 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 17:01:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:01:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:01:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:01:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:03:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:05:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 17:05:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 17:05:45 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:07:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 17:08:55 --> Could not find the language line "products"
ERROR - 2023-12-15 17:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:14:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:20:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:20:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:28:39 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:29:58 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:37:26 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:38:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-15 17:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-12-15 17:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 17:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:39:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:44:16 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:46:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:48:30 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 17:48:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 17:48:43 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 17:48:43 --> Could not find the language line "assets"
ERROR - 2023-12-15 17:49:37 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 17:49:37 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:51:06 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:51:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 17:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:51:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 17:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:52:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 17:52:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 17:52:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 17:52:54 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:53:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:53:32 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:53:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:54:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:54:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:54:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:54:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 17:54:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:54:51 --> Could not find the language line "Socks"
ERROR - 2023-12-15 17:55:10 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:56:27 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:56:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 17:56:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:57:08 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:58:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:58:52 --> Could not find the language line "Home"
ERROR - 2023-12-15 17:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 17:59:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:00:42 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:01:34 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 18:02:01 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 18:02:09 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 18:02:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:02:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:02:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:03:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:03:32 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:03:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:04:07 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:04:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:05:45 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:06:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:06:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:06:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:06:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:07:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:07:36 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:07:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:08:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:08:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:08:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 18:09:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:09:43 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 18:09:44 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 18:09:48 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:09:50 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:10:41 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:10:51 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:11:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-15 18:11:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:11:14 --> Could not find the language line "Socks"
ERROR - 2023-12-15 18:11:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:11:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 18:11:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-15 18:11:48 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:12:54 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:13:02 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:21:42 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:22:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 18:22:04 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:22:49 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:23:01 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:24:41 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 18:26:21 --> Could not find the language line "Other"
ERROR - 2023-12-15 18:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 18:32:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-15 18:41:36 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:42:34 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:43:45 --> Could not find the language line "Perfume"
ERROR - 2023-12-15 18:44:36 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:46:34 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:56:01 --> Could not find the language line "Home"
ERROR - 2023-12-15 18:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:04:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 19:04:17 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:04:42 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 19:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:06:45 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:08:34 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:10:05 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:10:22 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:29:33 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:29:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:30:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 19:34:30 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:36:15 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 19:36:41 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 19:37:05 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 19:37:06 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 19:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:52:00 --> Could not find the language line "Home"
ERROR - 2023-12-15 19:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 19:59:25 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:01:05 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:10:21 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:12:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 20:12:08 --> Could not find the language line "products"
ERROR - 2023-12-15 20:30:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:40:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-15 20:40:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-15 20:40:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-15 20:42:00 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:43:54 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-12-15 20:43:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-12-15 20:43:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-12-15 20:43:56 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-15 20:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:57:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:57:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 20:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:59:43 --> Could not find the language line "Home"
ERROR - 2023-12-15 20:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 20:59:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:01:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:05:27 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:05:31 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:07:55 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-15 21:08:57 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:15:10 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:15:49 --> Could not find the language line "products"
ERROR - 2023-12-15 21:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:34:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:34:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:34:55 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:34:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:34:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:34:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 21:37:08 --> Could not find the language line "products"
ERROR - 2023-12-15 21:43:54 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:00:19 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:17:08 --> Could not find the language line "products"
ERROR - 2023-12-15 22:24:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-12-15 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 22:39:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-15 22:51:58 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Js/common.js
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Js/main.js
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Lib/easing
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-12-15 22:52:18 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Js/common.js
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Js/main.js
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Lib/easing
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-12-15 22:53:12 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:55:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 22:56:04 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 22:56:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 22:56:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:08 --> Could not find the language line "products"
ERROR - 2023-12-15 22:57:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-15 22:57:53 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:58:22 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:58:28 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 22:58:47 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 22:58:54 --> Could not find the language line "Bracelets"
ERROR - 2023-12-15 22:58:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 22:59:24 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:20:47 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:23:37 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:33:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:33:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:34:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:34:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-15 23:34:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-15 23:34:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:34:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:34:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:35:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:35:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:36:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:36:46 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:36:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:37:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:38:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:39:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:39:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:40:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:40:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:40:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-15 23:40:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:41:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:41:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:42:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:44:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:44:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:44:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2023-12-15 23:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-15 23:50:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-15 23:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-15 23:57:56 --> Could not find the language line "Home"
ERROR - 2023-12-15 23:57:56 --> Could not find the language line "Home"
