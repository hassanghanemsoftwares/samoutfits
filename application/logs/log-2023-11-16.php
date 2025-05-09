<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-16 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-11-16 00:00:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 00:00:58 --> Could not find the language line "Home"
ERROR - 2023-11-16 00:05:40 --> Could not find the language line "Perfume"
ERROR - 2023-11-16 00:06:46 --> Could not find the language line "Home"
ERROR - 2023-11-16 00:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 00:18:28 --> Could not find the language line "products"
ERROR - 2023-11-16 00:22:25 --> Could not find the language line "Home"
ERROR - 2023-11-16 00:28:34 --> Could not find the language line "Home"
ERROR - 2023-11-16 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-16 00:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 00:36:30 --> Could not find the language line "products"
ERROR - 2023-11-16 00:37:11 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-16 00:53:33 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-16 00:54:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 00:56:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-16 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-16 01:05:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 01:09:55 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 01:25:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 01:27:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 01:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 01:37:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 01:47:28 --> Could not find the language line "products"
ERROR - 2023-11-16 01:52:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 01:59:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-16 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-16 02:03:59 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-16 02:15:16 --> Could not find the language line "Socks"
ERROR - 2023-11-16 02:29:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-16 02:46:51 --> Could not find the language line "Home"
ERROR - 2023-11-16 02:52:29 --> Could not find the language line "products"
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 02:56:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 02:56:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 03:06:11 --> Could not find the language line "products"
ERROR - 2023-11-16 03:17:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 03:18:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-16 03:23:35 --> Could not find the language line "Home"
ERROR - 2023-11-16 03:24:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 03:29:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 03:29:34 --> Could not find the language line "Home"
ERROR - 2023-11-16 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 03:33:15 --> Could not find the language line "Home"
ERROR - 2023-11-16 03:34:52 --> Could not find the language line "products"
ERROR - 2023-11-16 03:40:31 --> Could not find the language line "Home"
ERROR - 2023-11-16 03:42:04 --> Could not find the language line "products"
ERROR - 2023-11-16 03:51:06 --> 404 Page Not Found: Item/811910
ERROR - 2023-11-16 03:52:52 --> Could not find the language line "products"
ERROR - 2023-11-16 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 04:03:40 --> Could not find the language line "products"
ERROR - 2023-11-16 04:06:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 04:07:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 04:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 04:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 04:17:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 04:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 04:32:28 --> Could not find the language line "products"
ERROR - 2023-11-16 04:33:28 --> Could not find the language line "Home"
ERROR - 2023-11-16 04:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 04:40:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 04:42:31 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 04:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 04:48:16 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:00:38 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:00:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:01:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 05:02:28 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:03:06 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:03:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 05:03:19 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:03:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 05:04:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:04:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 05:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 05:14:34 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 05:16:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 05:24:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 05:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:32:34 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-16 05:37:18 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:37:18 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:37:18 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:37:19 --> Could not find the language line "Home"
ERROR - 2023-11-16 05:50:34 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 05:58:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:00:27 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 06:02:42 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 06:08:34 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 06:11:32 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:11:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 06:12:44 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 06:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 06:24:46 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 06:29:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:29:41 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:34:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 06:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 06:44:34 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-16 06:51:20 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:53:37 --> Could not find the language line "Home"
ERROR - 2023-11-16 06:58:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 06:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:03:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 07:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 07:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 07:23:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:23:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:30:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:31:03 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:34:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 07:38:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:38:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 07:39:34 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:43:45 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:45:33 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 07:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:53:05 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:58:36 --> Could not find the language line "Home"
ERROR - 2023-11-16 07:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 07:59:28 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:13:27 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:17:01 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:20:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-16 08:20:38 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:27:48 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:34:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 08:36:23 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:37:43 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:38:15 --> Could not find the language line "Home"
ERROR - 2023-11-16 08:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 08:55:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 09:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:03:23 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:08:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:08:31 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:08:41 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:08:41 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-16 09:08:48 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:09:08 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:09:12 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:10:05 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:10:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:10:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:11:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:12:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:14:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:14:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:14:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:14:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:15:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 09:15:32 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:16:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:16:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:16:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:16:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:22:43 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:23:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-16 09:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:23:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-16 09:24:00 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:42:42 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:52:35 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 09:52:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:52:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:58:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 09:59:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:59:15 --> Could not find the language line "Home"
ERROR - 2023-11-16 09:59:39 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:00:00 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:02:05 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:02:05 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:02:17 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:02:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 10:05:31 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:06:38 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:11:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 10:16:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 10:16:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:16:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 10:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 10:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:27:40 --> Could not find the language line "products"
ERROR - 2023-11-16 10:28:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 10:28:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 10:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:31:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 10:31:32 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:33:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 10:33:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 10:33:42 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:36:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 10:43:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 10:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:49:42 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:51:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 10:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 10:59:23 --> Could not find the language line "Home"
ERROR - 2023-11-16 11:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 11:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:11:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 11:21:35 --> Could not find the language line "Home"
ERROR - 2023-11-16 11:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:27:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 11:34:36 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-16 11:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:43:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 11:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 11:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 11:56:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 11:56:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42', '41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-16 11:56:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:01:52 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:03:50 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:08:01 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:09:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 12:11:44 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 12:12:26 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 12:13:17 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:13:21 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:13:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 12:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 12:16:36 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:16:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 12:17:04 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:17:09 --> Could not find the language line "Bracelets"
ERROR - 2023-11-16 12:17:20 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:17:20 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:17:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-16 12:17:47 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:18:12 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:25:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-16 12:25:35 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:30:06 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-16 12:32:42 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 12:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 12:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 12:45:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 12:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 13:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:11:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 13:13:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 13:13:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '34'
AND `transaction_item_sizes`.`size` IN('40', '41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-16 13:13:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 13:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:16:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:18:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:32:31 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:41:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 13:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:45:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 13:48:32 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:51:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:52:28 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:52:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 13:52:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-16 13:52:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 13:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:53:43 --> Could not find the language line "Home"
ERROR - 2023-11-16 13:53:46 --> Could not find the language line "products"
ERROR - 2023-11-16 13:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 13:55:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:55:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:55:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:56:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:59:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 13:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 14:03:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 14:04:02 --> Could not find the language line "Home"
ERROR - 2023-11-16 14:10:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 14:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-16 14:10:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 14:10:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 14:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-16 14:10:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 14:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 14:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:26:45 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-16 14:26:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-16 14:26:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-16 14:26:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-16 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-16 14:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:35:51 --> Could not find the language line "Home"
ERROR - 2023-11-16 14:36:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-16 14:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:36:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-16 14:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:40:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 14:40:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-16 14:46:47 --> Could not find the language line "Home"
ERROR - 2023-11-16 14:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 14:53:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 14:54:33 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 15:03:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 15:03:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 15:03:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:03:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 15:04:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 15:09:30 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:11:03 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:15:06 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:16:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:16:45 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:16:52 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:17:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:18:20 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:19:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:20:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:20:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 15:20:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-16 15:23:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:26:30 --> Could not find the language line "products"
ERROR - 2023-11-16 15:29:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 15:29:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-16 15:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:41 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:36:51 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-11-16 15:42:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 15:48:39 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 15:58:26 --> Could not find the language line "Home"
ERROR - 2023-11-16 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 16:02:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 16:04:38 --> Could not find the language line "Home"
ERROR - 2023-11-16 16:05:25 --> Could not find the language line "Home"
ERROR - 2023-11-16 16:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 16:23:46 --> Could not find the language line "products"
ERROR - 2023-11-16 16:24:18 --> Could not find the language line "Crocs"
ERROR - 2023-11-16 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-16 16:33:39 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-16 16:40:08 --> Could not find the language line "products"
ERROR - 2023-11-16 17:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 17:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 17:10:02 --> Could not find the language line "products"
ERROR - 2023-11-16 17:12:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 17:12:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-16 17:12:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 17:13:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 17:27:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 17:28:45 --> Could not find the language line "Home"
ERROR - 2023-11-16 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 17:31:09 --> Could not find the language line "products"
ERROR - 2023-11-16 17:36:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 17:46:23 --> Could not find the language line "Home"
ERROR - 2023-11-16 17:47:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 17:49:08 --> Could not find the language line "Home"
ERROR - 2023-11-16 17:54:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-16 17:55:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 17:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 18:03:00 --> Could not find the language line "products"
ERROR - 2023-11-16 18:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:08:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 18:22:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 18:24:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 18:38:55 --> Could not find the language line "Home"
ERROR - 2023-11-16 18:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 18:51:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 18:51:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-16 18:51:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 18:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 18:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 18:57:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-16 18:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-16 18:57:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-16 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:11:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 19:11:19 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:12:25 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:13:27 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:18:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:19:55 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:19:59 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:22:22 --> Could not find the language line "products"
ERROR - 2023-11-16 19:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 19:29:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:29:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:31:59 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-16 19:39:19 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:41:04 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:41:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 19:41:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:41:16 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:43:11 --> Could not find the language line "Perfume"
ERROR - 2023-11-16 19:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:44:36 --> Could not find the language line "Perfume"
ERROR - 2023-11-16 19:44:41 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:48:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 19:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:54:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 19:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:57:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:57:20 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:57:25 --> Could not find the language line "Home"
ERROR - 2023-11-16 19:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:58:21 --> Could not find the language line "Bracelets"
ERROR - 2023-11-16 19:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 19:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 19:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 19:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:00:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 20:00:37 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:00:53 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:09:59 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:10:15 --> Could not find the language line "Bracelets"
ERROR - 2023-11-16 20:10:26 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:10:29 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:10:54 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:11:50 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:12:11 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:13:24 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:13:47 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:20:56 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:34:42 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:40:37 --> Could not find the language line "Home"
ERROR - 2023-11-16 20:41:04 --> Could not find the language line "products"
ERROR - 2023-11-16 20:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:43:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 20:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:45:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 20:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 20:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-11-16 21:03:56 --> Could not find the language line "Other"
ERROR - 2023-11-16 21:06:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-16 21:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 21:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-16 21:46:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 21:54:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 21:54:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:00:21 --> Could not find the language line "Home"
ERROR - 2023-11-16 22:04:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 22:04:55 --> Could not find the language line "Home"
ERROR - 2023-11-16 22:07:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 22:18:28 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 22:20:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-16 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-16 22:52:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 22:53:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 22:53:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:00:17 --> Could not find the language line "Home"
ERROR - 2023-11-16 23:01:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 23:06:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 23:08:13 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 23:14:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-16 23:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 23:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-16 23:25:51 --> Could not find the language line "Home"
ERROR - 2023-11-16 23:25:52 --> Could not find the language line "Home"
ERROR - 2023-11-16 23:30:18 --> Could not find the language line "Home"
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:47:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-16 23:50:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-16 23:50:50 --> Could not find the language line "Other"
ERROR - 2023-11-16 23:52:02 --> 404 Page Not Found: Products/products
ERROR - 2023-11-16 23:53:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-16 23:59:26 --> Could not find the language line "Home"
