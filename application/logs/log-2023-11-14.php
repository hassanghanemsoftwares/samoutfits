<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-14 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-14 00:09:02 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-14 00:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 00:24:45 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:25:17 --> Could not find the language line "Socks"
ERROR - 2023-11-14 00:25:23 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 00:27:15 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:27:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 00:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:27:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 00:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 00:28:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:30:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:32:33 --> Could not find the language line "products"
ERROR - 2023-11-14 00:38:42 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:41:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 00:53:31 --> Could not find the language line "Home"
ERROR - 2023-11-14 00:59:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 01:00:21 --> Could not find the language line "Home"
ERROR - 2023-11-14 01:08:09 --> Could not find the language line "Home"
ERROR - 2023-11-14 01:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 01:17:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 01:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:19:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 01:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:25:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-14 01:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 01:27:34 --> Could not find the language line "Home"
ERROR - 2023-11-14 01:30:17 --> Could not find the language line "Home"
ERROR - 2023-11-14 01:30:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 01:33:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-14 01:36:54 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-14 01:44:33 --> Could not find the language line "products"
ERROR - 2023-11-14 01:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 01:58:04 --> Could not find the language line "Home"
ERROR - 2023-11-14 01:58:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 01:59:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-14 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 02:02:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 02:03:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 02:11:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 02:20:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 02:21:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 02:24:19 --> Could not find the language line "Socks"
ERROR - 2023-11-14 02:29:33 --> 404 Page Not Found: Products/products
ERROR - 2023-11-14 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-14 02:30:35 --> Could not find the language line "Home"
ERROR - 2023-11-14 02:31:37 --> Could not find the language line "Home"
ERROR - 2023-11-14 02:41:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 02:52:36 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:01:25 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:17:52 --> Could not find the language line "products"
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 03:24:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:24:23 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:33:51 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:36:26 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:36:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 03:39:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 03:39:04 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:40:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-14 03:41:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-14 03:41:37 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:43:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:43:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:43:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:43:04 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:43:05 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:49:29 --> Could not find the language line "Other"
ERROR - 2023-11-14 03:54:37 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 03:56:14 --> Could not find the language line "Home"
ERROR - 2023-11-14 03:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 03:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 03:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 03:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 03:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 03:59:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:00:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:00:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:01:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:01:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:01:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:02:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:03:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:03:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:03:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:04:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:04:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:04:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:05:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:05:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:05:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-14 04:05:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:05:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:05:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:06:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:06:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:06:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 04:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:18:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:20:10 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 04:28:35 --> Could not find the language line "Bracelets"
ERROR - 2023-11-14 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:32:17 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:34:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 04:36:46 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:41:20 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:43:21 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:43:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 04:43:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 04:43:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 04:43:24 --> 404 Page Not Found: Home/home
ERROR - 2023-11-14 04:43:24 --> 404 Page Not Found: Home/accounts
ERROR - 2023-11-14 04:48:48 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:50:05 --> Could not find the language line "Home"
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 04:53:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 05:05:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 05:12:44 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 05:21:36 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 05:42:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 05:47:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:51:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 05:53:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:01:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-14 06:03:52 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:08:45 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:09:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 06:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:23:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:23:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 06:25:00 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:26:32 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:27:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:29:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 06:29:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 06:29:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 06:29:55 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:33:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 06:33:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 06:34:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 06:34:09 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:37:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 06:37:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 06:38:23 --> Could not find the language line "Home"
ERROR - 2023-11-14 06:38:33 --> Could not find the language line "Bracelets"
ERROR - 2023-11-14 06:41:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 06:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-14 06:41:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 06:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 06:42:43 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 06:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 06:50:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 06:51:36 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 06:55:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 06:58:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:00:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:01:28 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:05:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-14 07:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:09:27 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:09:42 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:09:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:10:04 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:10:07 --> Could not find the language line "Socks"
ERROR - 2023-11-14 07:10:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:14:33 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:14:36 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:14:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:15:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:15:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:15:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:15:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:15:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:16:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:16:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:16:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:19:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-14 07:22:47 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:33:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:33:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:36:36 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 07:39:35 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:41:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:41:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:41:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:41:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:42:16 --> Could not find the language line "Perfume"
ERROR - 2023-11-14 07:42:32 --> Could not find the language line "Perfume"
ERROR - 2023-11-14 07:43:18 --> Could not find the language line "Perfume"
ERROR - 2023-11-14 07:43:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:46:55 --> Could not find the language line "products"
ERROR - 2023-11-14 07:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:51:08 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:51:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:51:56 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:52:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:52:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:52:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:53:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:53:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 07:53:55 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:54:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:54:14 --> Could not find the language line "Bracelets"
ERROR - 2023-11-14 07:57:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 07:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-14 07:57:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 07:57:42 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:57:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 07:57:53 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:57:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 07:58:08 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:58:33 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:58:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:58:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 07:59:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:59:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 07:59:23 --> Could not find the language line "Home"
ERROR - 2023-11-14 07:59:42 --> Could not find the language line "Socks"
ERROR - 2023-11-14 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:05:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:10:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:11:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:13:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 08:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:14:33 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:18:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:20:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:21:36 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 08:23:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:23:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:23:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:29:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:30:44 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:31:16 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:32:25 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:33:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:39:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:03 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 08:40:45 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:41:26 --> Could not find the language line "Other"
ERROR - 2023-11-14 08:41:37 --> 404 Page Not Found: Assets/lib
ERROR - 2023-11-14 08:43:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:43:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:44:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:44:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:44:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:45:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:45:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:45:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:46:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:46:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 08:48:34 --> Could not find the language line "Home"
ERROR - 2023-11-14 08:48:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 08:48:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 08:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:52:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:53:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:53:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:53:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:54:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:54:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:55:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:56:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 08:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 08:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 08:59:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 08:59:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-14 08:59:48 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:03:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 09:05:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 09:05:09 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:08:25 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:08:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-14 09:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:09:38 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:09:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:10:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:44 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:12:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:12:46 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-11-14 09:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:13:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 09:13:34 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 09:16:26 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:17:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 09:23:09 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:23:09 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:23:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:23:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:23:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:23:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:25:00 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:25:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:25:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-14 09:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-14 09:37:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 09:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 09:57:20 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:00:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:14:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:15:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:15:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:15:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:16:07 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:16:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 10:16:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 10:16:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:20:51 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-11-14 10:23:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 10:24:08 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:24:42 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:32:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 10:34:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:44:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 10:44:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:48:47 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:51:23 --> Could not find the language line "Home"
ERROR - 2023-11-14 10:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:51:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:51:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 10:52:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 10:53:54 --> Could not find the language line "products"
ERROR - 2023-11-14 10:56:54 --> Could not find the language line "Home"
ERROR - 2023-11-14 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 11:02:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:02:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:15:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 11:19:03 --> Could not find the language line "products"
ERROR - 2023-11-14 11:28:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 11:30:16 --> Could not find the language line "products"
ERROR - 2023-11-14 11:32:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-14 11:38:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-14 11:42:29 --> Could not find the language line "Home"
ERROR - 2023-11-14 11:42:32 --> Could not find the language line "Home"
ERROR - 2023-11-14 11:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 11:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 11:46:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 11:49:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 11:52:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 11:52:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 11:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 11:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 11:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:55:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 11:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 11:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:03:54 --> Could not find the language line "products"
ERROR - 2023-11-14 12:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 12:08:31 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:08:38 --> Could not find the language line "Other"
ERROR - 2023-11-14 12:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:09:21 --> Could not find the language line "Other"
ERROR - 2023-11-14 12:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:09:41 --> Could not find the language line "Other"
ERROR - 2023-11-14 12:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:09:56 --> Could not find the language line "Other"
ERROR - 2023-11-14 12:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:10:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 12:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:10:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 12:10:56 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:11:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 12:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:15:22 --> Could not find the language line "products"
ERROR - 2023-11-14 12:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:22:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-14 12:24:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 12:29:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:34:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:36:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:50:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 12:51:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 12:56:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 12:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 12:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-14 13:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:03:15 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:11:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:34:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 13:34:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-14 13:36:22 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:37:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 13:37:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 13:38:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 13:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 13:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:39:00 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:39:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 13:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:39:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 13:39:23 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:39:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 13:39:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 13:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-14 13:39:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 13:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:39:38 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:40:01 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:40:13 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:40:40 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:41:01 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:42:30 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:42:45 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:42:57 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:43:02 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:43:13 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:44:13 --> Could not find the language line "Socks"
ERROR - 2023-11-14 13:45:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 13:45:59 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:48:03 --> Could not find the language line "Home"
ERROR - 2023-11-14 13:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 13:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:00:22 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:07:36 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:09:51 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 14:18:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 14:24:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 14:25:07 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:25:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:25:24 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:26:17 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:26:20 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:27:26 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:29:27 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:29:27 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:29:27 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:29:27 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:30:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 14:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:32:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 14:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:38:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 14:39:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 14:39:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-14 14:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:42:01 --> Could not find the language line "Socks"
ERROR - 2023-11-14 14:42:51 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:42:56 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:46:06 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:52:37 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 14:53:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 14:54:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 14:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:55:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 14:56:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 14:59:40 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:00:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 15:00:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-14 15:00:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 15:02:52 --> Could not find the language line "assets"
ERROR - 2023-11-14 15:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:05:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:06:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 15:06:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:06:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:07:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:07:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:14:48 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:14:54 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-14 15:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:22:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 15:22:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-14 15:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 15:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:22:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:30:58 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:31:40 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 15:51:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 15:54:39 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:54:39 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:54:40 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:54:40 --> Could not find the language line "Home"
ERROR - 2023-11-14 15:54:40 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:01:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 16:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:03:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 16:04:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 16:05:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 16:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:14:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 16:14:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-14 16:14:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 16:17:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 16:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:21:55 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 16:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 16:25:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 16:26:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:29:55 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:30:25 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:31:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:33:33 --> 404 Page Not Found: Item/811808
ERROR - 2023-11-14 16:52:17 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:53:05 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:55:37 --> 404 Page Not Found: Item/811808
ERROR - 2023-11-14 16:58:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:58:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:58:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:58:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:58:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 16:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 16:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:09:16 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:10:16 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:13:23 --> Could not find the language line "products"
ERROR - 2023-11-14 17:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:17:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:26:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:34:41 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:35:34 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:35:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:44:31 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:44:58 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:50:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:53:24 --> Could not find the language line "Home"
ERROR - 2023-11-14 17:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:53:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 17:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 17:54:53 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:00:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:06:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 18:07:03 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:11:03 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:14:59 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:18:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 18:18:59 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:21:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:21:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 18:21:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:22:55 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:22:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:23:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:26:38 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 18:27:01 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:27:26 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:30:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 18:56:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:56:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:56:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 18:58:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:00:35 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:00:44 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:02:59 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:03:48 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:05:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:06:07 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:11:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:20:30 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:20:49 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-11-14 19:21:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:21:47 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:22:42 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:23:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 19:23:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-14 19:23:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 19:26:29 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:32:33 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:33:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:34:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:34:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:34:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 19:34:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-14 19:34:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 19:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:41:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 19:42:02 --> Could not find the language line "Home"
ERROR - 2023-11-14 19:44:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:44:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:44:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:44:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-14 19:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-14 19:44:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-14 19:44:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:49:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:49:49 --> Could not find the language line "products"
ERROR - 2023-11-14 19:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 19:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 19:56:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-14 19:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:09:38 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:09:51 --> Could not find the language line "Socks"
ERROR - 2023-11-14 20:12:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 20:27:51 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:30:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 20:30:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-14 20:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 20:40:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:40:36 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:41:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 20:42:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 20:45:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 20:45:34 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-14 20:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 20:51:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 20:52:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 20:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 20:53:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 20:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 20:54:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 20:58:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 20:58:19 --> Could not find the language line "Home"
ERROR - 2023-11-14 20:58:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-14 21:20:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 21:20:29 --> Could not find the language line "Home"
ERROR - 2023-11-14 21:29:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-14 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-14 21:33:21 --> Could not find the language line "products"
ERROR - 2023-11-14 21:37:37 --> Could not find the language line "Home"
ERROR - 2023-11-14 21:37:39 --> 404 Page Not Found: Admin/index
ERROR - 2023-11-14 21:37:42 --> 404 Page Not Found: Manager/index
ERROR - 2023-11-14 21:37:44 --> 404 Page Not Found: Admin/content
ERROR - 2023-11-14 21:37:47 --> 404 Page Not Found: Js/mage
ERROR - 2023-11-14 21:37:49 --> 404 Page Not Found: Administrator/index
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 21:59:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:01:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 22:07:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-14 22:09:43 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:09:43 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:17:38 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 22:19:43 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 22:40:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 22:40:39 --> Could not find the language line "Home"
ERROR - 2023-11-14 22:55:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 22:57:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:01:43 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:02:03 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 23:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:06:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:07:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-14 23:12:17 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:12:44 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:14:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:14:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-14 23:15:42 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:17:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:23:53 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 23:24:20 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:29:35 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:29:58 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:32:28 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 23:36:55 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 23:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-14 23:38:38 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:43:18 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:47:49 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:50:41 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:51:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-14 23:51:52 --> Could not find the language line "Home"
ERROR - 2023-11-14 23:59:43 --> Could not find the language line "products"
