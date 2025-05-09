<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-06 00:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:10:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 00:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:10:51 --> Could not find the language line "Other"
ERROR - 2023-12-06 00:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:52:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 00:52:03 --> Could not find the language line "Home"
ERROR - 2023-12-06 00:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-06 00:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 00:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:01:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:11:27 --> Could not find the language line "products"
ERROR - 2023-12-06 01:14:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 01:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:17:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 01:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:22:55 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-06 01:23:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:23:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 01:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:31:17 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:31:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 01:38:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:38:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:57:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 01:58:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-06 02:01:31 --> Could not find the language line "Home"
ERROR - 2023-12-06 02:12:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 02:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 02:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:13:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 02:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:17:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 02:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:22:32 --> Could not find the language line "Perfume"
ERROR - 2023-12-06 02:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 02:40:39 --> Could not find the language line "products"
ERROR - 2023-12-06 02:55:39 --> Could not find the language line "products"
ERROR - 2023-12-06 02:59:04 --> Could not find the language line "Home"
ERROR - 2023-12-06 03:02:51 --> Could not find the language line "Home"
ERROR - 2023-12-06 03:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 03:06:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 03:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:10:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 03:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:14:41 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 03:20:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 03:30:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 03:33:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 03:45:40 --> Could not find the language line "products"
ERROR - 2023-12-06 03:46:17 --> Could not find the language line "Home"
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:50:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 03:55:35 --> 404 Page Not Found: Products/products
ERROR - 2023-12-06 03:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 03:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 03:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:01:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 04:18:40 --> Could not find the language line "Home"
ERROR - 2023-12-06 04:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:23:40 --> Could not find the language line "Home"
ERROR - 2023-12-06 04:26:31 --> Could not find the language line "Home"
ERROR - 2023-12-06 04:30:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-06 04:31:21 --> Could not find the language line "Home"
ERROR - 2023-12-06 04:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:34:47 --> Could not find the language line "Home"
ERROR - 2023-12-06 04:34:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 04:45:33 --> Could not find the language line "products"
ERROR - 2023-12-06 04:50:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 04:50:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-06 04:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:57:16 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-12-06 04:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 04:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 05:30:59 --> Could not find the language line "Home"
ERROR - 2023-12-06 05:33:43 --> Could not find the language line "Home"
ERROR - 2023-12-06 05:34:47 --> Could not find the language line "Home"
ERROR - 2023-12-06 05:34:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 05:38:53 --> Could not find the language line "Home"
ERROR - 2023-12-06 05:40:21 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-06 05:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 05:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 05:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 05:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 05:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 05:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 05:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:06:21 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:09:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:11:33 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:11:44 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 06:12:07 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:12:49 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:13:32 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:14:52 --> Could not find the language line "Socks"
ERROR - 2023-12-06 06:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:15:40 --> Could not find the language line "Other"
ERROR - 2023-12-06 06:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:17:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:23:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:26:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:26:10 --> Could not find the language line "products"
ERROR - 2023-12-06 06:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:26:21 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:26:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:26:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:28:51 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:31:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 06:32:18 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:35:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-06 06:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 06:37:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 06:44:49 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:45:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 06:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:16:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 07:16:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 07:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 07:29:33 --> Could not find the language line "products"
ERROR - 2023-12-06 07:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:39:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 07:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:43:01 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:43:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-06 07:43:41 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:43:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 07:44:13 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:44:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:44:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:44:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:44:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:45:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:45:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:45:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:46:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:46:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:46:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:46:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:46:21 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:46:30 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 07:46:55 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 07:47:07 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 07:47:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:47:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:47:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 07:47:15 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:47:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 07:47:19 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:47:22 --> Could not find the language line "Socks"
ERROR - 2023-12-06 07:47:44 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:47:48 --> Could not find the language line "Perfume"
ERROR - 2023-12-06 07:47:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:49:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:50:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 07:52:44 --> Could not find the language line "Home"
ERROR - 2023-12-06 07:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:00:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-06 08:07:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 08:07:55 --> Could not find the language line "products"
ERROR - 2023-12-06 08:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 08:15:30 --> Could not find the language line "products"
ERROR - 2023-12-06 08:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:20:14 --> Could not find the language line "products"
ERROR - 2023-12-06 08:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:22:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 08:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:29:42 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 08:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 08:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-06 08:44:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:44:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 08:46:43 --> Could not find the language line "Home"
ERROR - 2023-12-06 08:56:45 --> Could not find the language line "Home"
ERROR - 2023-12-06 08:56:47 --> Could not find the language line "Home"
ERROR - 2023-12-06 08:58:07 --> Could not find the language line "products"
ERROR - 2023-12-06 09:02:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:09:43 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:10:13 --> Could not find the language line "Socks"
ERROR - 2023-12-06 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:12:37 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:15:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:16:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:17:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:17:04 --> Could not find the language line "products"
ERROR - 2023-12-06 09:17:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:17:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:17:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:17:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:17:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:19:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 09:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:23:53 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:24:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 09:24:24 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:26:33 --> Could not find the language line "products"
ERROR - 2023-12-06 09:29:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:30:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 09:30:39 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:31:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:36:01 --> Could not find the language line "products"
ERROR - 2023-12-06 09:44:16 --> Could not find the language line "Home"
ERROR - 2023-12-06 09:45:29 --> Could not find the language line "products"
ERROR - 2023-12-06 09:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:48:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 09:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:48:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 09:48:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 09:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:54:58 --> Could not find the language line "products"
ERROR - 2023-12-06 09:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 09:58:04 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:04:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:08:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 10:09:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 10:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:33:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:36:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:47:25 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:47:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:47:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:47:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:47:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:47:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 10:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 10:49:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 10:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:51:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-06 10:54:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 10:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 10:56:59 --> Could not find the language line "products"
ERROR - 2023-12-06 11:02:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 11:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:03:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:03:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:04:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:04:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:10:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:10:30 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:13:20 --> Could not find the language line "products"
ERROR - 2023-12-06 11:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:15:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 11:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:15:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 11:16:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 11:16:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 11:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:18:46 --> Could not find the language line "products"
ERROR - 2023-12-06 11:20:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:21:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:22:51 --> 404 Page Not Found: Products/products
ERROR - 2023-12-06 11:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:28:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 11:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 11:29:42 --> Could not find the language line "products"
ERROR - 2023-12-06 11:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:31:32 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:31:58 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 11:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:36:35 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:36:38 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 11:37:14 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:37:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:37:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-12-06 11:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:38:45 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:42:19 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:51:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:54:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:54:15 --> Could not find the language line "products"
ERROR - 2023-12-06 11:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:56:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:57:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 11:58:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:58:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 11:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 11:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:00:56 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:02:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 12:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:05:50 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:06:15 --> Could not find the language line "products"
ERROR - 2023-12-06 12:06:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 12:08:02 --> Could not find the language line "products"
ERROR - 2023-12-06 12:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:12:15 --> Could not find the language line "products"
ERROR - 2023-12-06 12:17:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 12:22:24 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:22:53 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:26:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:26:56 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:27:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:27:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:27:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 12:28:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:28:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:29:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:29:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:29:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:29:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 12:29:37 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 12:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:30:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 12:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:30:15 --> Could not find the language line "products"
ERROR - 2023-12-06 12:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:30:59 --> Could not find the language line "Home"
ERROR - 2023-12-06 12:33:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 12:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:46:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 12:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:52:15 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 12:53:01 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 12:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 12:59:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 12:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:04:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:05:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 13:10:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:18:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:18:15 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:24:15 --> Could not find the language line "products"
ERROR - 2023-12-06 13:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:30:15 --> Could not find the language line "products"
ERROR - 2023-12-06 13:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:36:15 --> Could not find the language line "products"
ERROR - 2023-12-06 13:36:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 13:36:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 13:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:38:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:38:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 13:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:38:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:39:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-06 13:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:40:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:41:41 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:41:50 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:42:17 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:49:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:49:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:51:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 13:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:56:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:56:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:56:23 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 13:58:20 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:58:55 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:58:55 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:58:56 --> Could not find the language line "Home"
ERROR - 2023-12-06 13:59:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 13:59:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:01:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 14:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 14:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:03:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:03:56 --> Could not find the language line "Socks"
ERROR - 2023-12-06 14:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:04:13 --> Could not find the language line "Socks"
ERROR - 2023-12-06 14:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:04:31 --> Could not find the language line "Socks"
ERROR - 2023-12-06 14:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:05:13 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:05:15 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:05:47 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:06:17 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:06:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 14:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:07:57 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:07:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:11:32 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:11:38 --> Could not find the language line "Socks"
ERROR - 2023-12-06 14:14:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:16:44 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:17:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 14:17:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 14:27:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:27:20 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:27:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:27:37 --> Could not find the language line "Socks"
ERROR - 2023-12-06 14:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:28:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:28:31 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:28:37 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:28:38 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:32:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:40:50 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:42:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:43:46 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:44:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:53:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 14:54:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 14:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:56:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 14:58:01 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:58:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 14:59:40 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:00:31 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:08:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 15:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-06 15:11:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 15:16:15 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:16:45 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:19:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 15:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:29:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:32:25 --> Could not find the language line "Home"
ERROR - 2023-12-06 15:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 15:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 15:59:03 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-06 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 16:08:02 --> Could not find the language line "products"
ERROR - 2023-12-06 16:12:49 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:14:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 16:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-06 16:17:20 --> Could not find the language line "products"
ERROR - 2023-12-06 16:18:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:20:51 --> Could not find the language line "products"
ERROR - 2023-12-06 16:21:57 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:21:58 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 16:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 16:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 16:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 16:24:12 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:24:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:25:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:33:43 --> 404 Page Not Found: Products/products
ERROR - 2023-12-06 16:39:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 16:46:25 --> Could not find the language line "products"
ERROR - 2023-12-06 16:47:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 16:51:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 16:52:14 --> Could not find the language line "Home"
ERROR - 2023-12-06 16:59:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:00:46 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:02:06 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:03:06 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:03:07 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:03:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:03:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:03:34 --> Could not find the language line "Crocs"
ERROR - 2023-12-06 17:03:51 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 17:07:55 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:15:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 17:16:35 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:24:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 17:24:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 17:25:09 --> Could not find the language line "products"
ERROR - 2023-12-06 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:41:12 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:43:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:45:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-12-06 17:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c71%' OR a.description LIKE '%c71%' OR a.color LIKE '%c71%' OR a.barcode LIKE '%c71%' OR a.category LIKE '%c71%' OR a.sub_category LIKE '%c71%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-12-06 17:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c71%' OR a.description LIKE '%c71%' OR a.color LIKE '%c71%' OR a.barcode LIKE '%c71%' OR a.category LIKE '%c71%' OR a.sub_category LIKE '%c71%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 17:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c71%' OR a.description LIKE '%c71%' OR a.color LIKE '%c71%' OR a.barcode LIKE '%c71%' OR a.category LIKE '%c71%' OR a.sub_category LIKE '%c71%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-12-06 17:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c71%' OR a.description LIKE '%c71%' OR a.color LIKE '%c71%' OR a.barcode LIKE '%c71%' OR a.category LIKE '%c71%' OR a.sub_category LIKE '%c71%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-12-06 17:46:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 17:50:51 --> 404 Page Not Found: Products/products
ERROR - 2023-12-06 17:55:02 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:56:05 --> Could not find the language line "Home"
ERROR - 2023-12-06 17:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 17:57:19 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:03:43 --> Could not find the language line "products"
ERROR - 2023-12-06 18:04:16 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:08:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:08:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 18:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:08:36 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 18:09:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 18:09:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 18:09:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:14:58 --> Could not find the language line "products"
ERROR - 2023-12-06 18:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:22:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:22:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 18:25:29 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:26:13 --> Could not find the language line "products"
ERROR - 2023-12-06 18:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:33:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 18:33:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 18:35:50 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:36:16 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:40:39 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:41:14 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:41:46 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-06 18:41:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-12-06 18:41:53 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:42:12 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:42:49 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:44:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 18:44:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 18:44:27 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:48:43 --> Could not find the language line "products"
ERROR - 2023-12-06 18:57:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 18:58:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 18:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 18:58:43 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:00:00 --> Could not find the language line "products"
ERROR - 2023-12-06 19:00:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-06 19:00:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-06 19:00:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 19:00:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:01:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:02:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:04:47 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:05:50 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:08:43 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:08:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:08:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:09:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:09:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-06 19:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-06 19:09:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 19:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:10:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:10:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:11:13 --> Could not find the language line "products"
ERROR - 2023-12-06 19:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:11:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:11:46 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:12:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:13:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:13:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:16:44 --> Could not find the language line "Bracelets"
ERROR - 2023-12-06 19:22:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:24:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:24:12 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:25:01 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:25:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-06 19:28:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:28:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 19:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:29:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:30:52 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:31:37 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:31:59 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:32:00 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:45:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:47:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:52:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:56:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:56:04 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:56:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:56:26 --> Could not find the language line "Home"
ERROR - 2023-12-06 19:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:58:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 19:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 19:59:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:01:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:03:03 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:03:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:04:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:05:18 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:05:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:05:48 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:06:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:06:10 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:06:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:08:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 20:08:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:13:38 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:16:09 --> Could not find the language line "products"
ERROR - 2023-12-06 20:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:20:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:21:58 --> Could not find the language line "Other"
ERROR - 2023-12-06 20:30:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:30:37 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:32:00 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:32:01 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:32:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:32:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:32:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:32:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:32:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:32:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 20:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:34:13 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:35:02 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:35:20 --> Could not find the language line "Other"
ERROR - 2023-12-06 20:35:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-06 20:36:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:36:44 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:39:36 --> Could not find the language line "products"
ERROR - 2023-12-06 20:44:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 20:46:01 --> Could not find the language line "products"
ERROR - 2023-12-06 20:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:51:07 --> Could not find the language line "Home"
ERROR - 2023-12-06 20:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 20:52:27 --> Could not find the language line "products"
ERROR - 2023-12-06 20:59:53 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:00:07 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:00:09 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:01:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:05:19 --> Could not find the language line "products"
ERROR - 2023-12-06 21:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:18:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-06 21:18:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-12-06 21:18:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 21:18:11 --> Could not find the language line "products"
ERROR - 2023-12-06 21:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:28:06 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:28:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:28:42 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:28:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:29:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:30:09 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:30:39 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:30:50 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:31:21 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:32:03 --> Could not find the language line "Socks"
ERROR - 2023-12-06 21:32:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:32:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:32:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:32:54 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:32:55 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:41:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 21:42:48 --> Could not find the language line "Other"
ERROR - 2023-12-06 21:42:54 --> Could not find the language line "Other"
ERROR - 2023-12-06 21:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:44:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-06 21:44:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-06 21:44:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-06 21:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 21:54:41 --> Could not find the language line "Home"
ERROR - 2023-12-06 21:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 21:57:43 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-06 22:00:17 --> Could not find the language line "Home"
ERROR - 2023-12-06 22:16:02 --> Could not find the language line "products"
ERROR - 2023-12-06 22:21:03 --> Could not find the language line "products"
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:24:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-06 22:28:53 --> Could not find the language line "products"
ERROR - 2023-12-06 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-06 22:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 22:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 22:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 22:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 22:41:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-06 22:55:20 --> Could not find the language line "Home"
ERROR - 2023-12-06 22:59:50 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:00:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:00:24 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:00:34 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:01:20 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:01:21 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:01:22 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:03:48 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:03:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 23:04:02 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:04:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 23:04:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 23:04:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 23:04:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 23:04:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 23:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-06 23:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 23:17:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-06 23:17:55 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:18:08 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:18:16 --> Could not find the language line "Socks"
ERROR - 2023-12-06 23:18:58 --> Could not find the language line "Socks"
ERROR - 2023-12-06 23:19:21 --> Could not find the language line "Socks"
ERROR - 2023-12-06 23:19:44 --> Could not find the language line "Socks"
ERROR - 2023-12-06 23:19:46 --> Could not find the language line "Socks"
ERROR - 2023-12-06 23:19:48 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:19:49 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:19:53 --> Could not find the language line "Perfume"
ERROR - 2023-12-06 23:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:21:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-06 23:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:21:27 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:22:20 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-06 23:23:45 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-12-06 23:41:33 --> 404 Page Not Found: Robotstxt/index
