<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-15 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-11-15 00:03:08 --> Could not find the language line "Home"
ERROR - 2023-11-15 00:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 00:17:04 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-15 00:17:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 00:23:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 00:42:24 --> Could not find the language line "Home"
ERROR - 2023-11-15 00:45:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 00:54:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 00:58:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 01:03:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-15 01:15:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 01:23:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 01:27:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-15 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-15 01:50:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 01:50:14 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-11-15 01:50:14 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-11-15 01:50:15 --> Could not find the language line "Home"
ERROR - 2023-11-15 01:52:31 --> Could not find the language line "Home"
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 01:56:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 02:03:00 --> Could not find the language line "Home"
ERROR - 2023-11-15 02:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 02:19:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 02:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 02:26:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 02:32:22 --> 404 Page Not Found: Adminphp/index
ERROR - 2023-11-15 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-15 03:14:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 03:18:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:18:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 03:20:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 03:20:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:04:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 04:12:40 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:18:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 04:21:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 04:21:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:21:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 04:23:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 04:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:37:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:38:52 --> Could not find the language line "Home"
ERROR - 2023-11-15 04:40:54 --> Could not find the language line "products"
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:41:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 04:54:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:00:19 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 05:02:18 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:10:48 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:18:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:26:15 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:26:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 05:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 05:44:22 --> Could not find the language line "Other"
ERROR - 2023-11-15 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 06:11:41 --> Could not find the language line "Home"
ERROR - 2023-11-15 06:25:39 --> Could not find the language line "Home"
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 06:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:10:27 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:10:29 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:11:24 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:14:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 07:15:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 07:25:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:32:04 --> Could not find the language line "products"
ERROR - 2023-11-15 07:40:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:42:39 --> Could not find the language line "Home"
ERROR - 2023-11-15 07:52:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-15 08:00:55 --> Could not find the language line "Home"
ERROR - 2023-11-15 08:05:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 08:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-15 08:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 08:41:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 09:01:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 09:01:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 09:01:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 09:14:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 09:23:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 09:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-15 09:23:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 09:23:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 09:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 09:23:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 09:24:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 09:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 09:24:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 09:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 09:51:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 09:51:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 09:55:58 --> Could not find the language line "products"
ERROR - 2023-11-15 09:56:15 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:04:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 10:05:26 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:06:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-15 10:07:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 10:17:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 10:17:13 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:18:28 --> Could not find the language line "products"
ERROR - 2023-11-15 10:20:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:26:55 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:27:26 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:28:00 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:32:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 10:36:05 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:40:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 10:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 10:40:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 10:42:50 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:44:59 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 10:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:55:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 10:55:12 --> Could not find the language line "Home"
ERROR - 2023-11-15 10:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 10:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 10:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:05:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:05:28 --> Could not find the language line "Other"
ERROR - 2023-11-15 11:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:05:36 --> Could not find the language line "Other"
ERROR - 2023-11-15 11:05:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 11:05:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 11:06:05 --> Could not find the language line "Socks"
ERROR - 2023-11-15 11:06:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:06:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 11:06:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 11:14:43 --> Could not find the language line "products"
ERROR - 2023-11-15 11:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-15 11:24:12 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-15 11:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:31:05 --> Could not find the language line "products"
ERROR - 2023-11-15 11:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:36:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:36:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 11:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 11:39:43 --> Could not find the language line "products"
ERROR - 2023-11-15 11:47:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 11:48:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:49:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:49:28 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:49:33 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:49:36 --> Could not find the language line "Home"
ERROR - 2023-11-15 11:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 11:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 11:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:02:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 12:03:49 --> Could not find the language line "products"
ERROR - 2023-11-15 12:03:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-15 12:04:29 --> Could not find the language line "Socks"
ERROR - 2023-11-15 12:22:10 --> 404 Page Not Found: Products/products
ERROR - 2023-11-15 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:31:34 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:32:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:32:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:33:20 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:33:39 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:35:08 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:36:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:38:35 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:38:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:38:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:39:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:39:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:40:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:45:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:45:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:46:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 12:46:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 12:49:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:50:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 12:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 12:56:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 12:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:06:12 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:06:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:06:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 13:07:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 13:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:07:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:08:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:09:16 --> Could not find the language line "products"
ERROR - 2023-11-15 13:09:38 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:10:46 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:11:23 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:14:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:14:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:14:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:16:02 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:16:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:21:43 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:21:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:22:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:22:45 --> Could not find the language line "products"
ERROR - 2023-11-15 13:23:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:26:41 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:27:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:27:56 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:28:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:28:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:29:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:29:59 --> Could not find the language line "products"
ERROR - 2023-11-15 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:30:23 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:31:15 --> Could not find the language line "products"
ERROR - 2023-11-15 13:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:34:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:36:48 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:37:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:37:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:37:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:38:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:39:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:39:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:39:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 13:39:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:39:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:39:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:39:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:41:49 --> Could not find the language line "Home"
ERROR - 2023-11-15 13:42:30 --> Could not find the language line "products"
ERROR - 2023-11-15 13:42:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:42:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:55:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:55:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 13:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 13:59:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 13:59:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-15 13:59:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:00:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:03:53 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:15:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:16:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:16:28 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:16:45 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:17:32 --> Could not find the language line "products"
ERROR - 2023-11-15 14:18:20 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:25:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:27:50 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:27:52 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:28:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 14:29:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:29:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:29:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:30:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:30:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:33:53 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:34:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:34:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-15 14:34:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:34:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:35:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:35:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:35:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:36:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 14:45:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 14:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:48:23 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:49:02 --> Could not find the language line "Home"
ERROR - 2023-11-15 14:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:54:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 14:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:57:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 14:59:00 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:01:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:02:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:02:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:02:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:19:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:21:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:21:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:22:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 15:25:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:27:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:27:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:29:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:36:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:36:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:37:03 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:37:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:38:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:38:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 15:38:21 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 15:42:24 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:46:24 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:51:26 --> Could not find the language line "Home"
ERROR - 2023-11-15 15:51:49 --> Could not find the language line "Bracelets"
ERROR - 2023-11-15 15:52:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:06:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 16:06:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 16:06:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 16:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:15:28 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:16:27 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:16:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:16:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 16:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:18:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:18:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:19:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:20:06 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-15 16:21:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 16:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 16:21:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 16:22:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:34:19 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:44:03 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:47:05 --> Could not find the language line "products"
ERROR - 2023-11-15 16:47:50 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:47:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:48:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:49:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:49:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 16:49:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 16:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:49:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 16:49:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 16:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:49:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 16:49:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 16:49:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:49:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:49:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:50:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:52:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:52:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:52:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:53:07 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:55:21 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:55:39 --> Could not find the language line "Home"
ERROR - 2023-11-15 16:55:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:55:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 16:56:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-11-15 16:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:58:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 16:58:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:00:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:01:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:01:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:02:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:02:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:03:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:04:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:04:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:05:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:05:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:05:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:06:29 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:06:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-15 17:07:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-15 17:07:23 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:07:52 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:08:01 --> Could not find the language line "Socks"
ERROR - 2023-11-15 17:08:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:08:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 17:08:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 17:09:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 17:09:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-15 17:09:19 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:09:22 --> Could not find the language line "Perfume"
ERROR - 2023-11-15 17:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:09:37 --> Could not find the language line "Perfume"
ERROR - 2023-11-15 17:09:41 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:12:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:12:21 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:13:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:17:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:17:55 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:18:48 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 17:19:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:19:23 --> Could not find the language line "Perfume"
ERROR - 2023-11-15 17:19:30 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:19:35 --> Could not find the language line "Socks"
ERROR - 2023-11-15 17:19:51 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:21:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:22:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 17:22:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-15 17:25:07 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:31:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 17:31:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 17:31:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 17:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:38:40 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 17:47:14 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:50:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-15 17:50:06 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:50:06 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:50:06 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:50:32 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:52:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:52:37 --> Could not find the language line "Home"
ERROR - 2023-11-15 17:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 18:03:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 18:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 18:03:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 18:12:20 --> Could not find the language line "Home"
ERROR - 2023-11-15 18:22:27 --> Could not find the language line "Home"
ERROR - 2023-11-15 18:29:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 18:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 18:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 18:29:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 18:33:01 --> Could not find the language line "Home"
ERROR - 2023-11-15 18:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 18:35:58 --> Could not find the language line "Home"
ERROR - 2023-11-15 18:39:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:08:23 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:11:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:12:38 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:17:27 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:17:28 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:17:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:18:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:18:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:18:28 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:18:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:12 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:19:15 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:20:46 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:22:54 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:23:27 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:23:43 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:23:43 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-15 19:23:53 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:25:37 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:25:51 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:30:07 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:30:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 19:31:56 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:32:56 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:33:01 --> Could not find the language line "Bracelets"
ERROR - 2023-11-15 19:33:39 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:42:05 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:42:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:43:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:43:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:44:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:44:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:44:20 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:44:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:45:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:46:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:46:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 19:47:04 --> Could not find the language line "Home"
ERROR - 2023-11-15 19:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 19:55:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:00:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 20:01:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 20:01:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 20:01:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 20:02:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-15 20:02:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-15 20:02:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-15 20:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 20:13:44 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:14:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 20:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 20:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 20:15:42 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:34:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 20:44:18 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 20:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 20:49:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 20:50:22 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:51:22 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:51:22 --> Could not find the language line "Home"
ERROR - 2023-11-15 20:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 20:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:01:40 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:02:40 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:02:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 21:02:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 21:02:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 21:02:43 --> 404 Page Not Found: Home/accounts
ERROR - 2023-11-15 21:02:44 --> 404 Page Not Found: Home/home
ERROR - 2023-11-15 21:07:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 21:14:37 --> Could not find the language line "products"
ERROR - 2023-11-15 21:20:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 21:20:15 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:26:19 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:31:19 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 21:32:22 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:32:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-15 21:32:29 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 21:32:46 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:33:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:36:45 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:43:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 21:51:42 --> Could not find the language line "Home"
ERROR - 2023-11-15 21:51:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-15 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:03:27 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:06:59 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 22:09:56 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:10:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-15 22:11:06 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:32:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 22:35:52 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:38:22 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:39:49 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:40:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:41:17 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:47:42 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:55:35 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 22:56:24 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:57:40 --> Could not find the language line "Home"
ERROR - 2023-11-15 22:57:56 --> Could not find the language line "Home"
ERROR - 2023-11-15 23:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-15 23:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 23:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 23:24:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 23:24:28 --> Could not find the language line "products"
ERROR - 2023-11-15 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-15 23:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:34:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-15 23:38:34 --> Could not find the language line "Home"
ERROR - 2023-11-15 23:42:28 --> Could not find the language line "products"
ERROR - 2023-11-15 23:43:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-15 23:50:04 --> 404 Page Not Found: Assets/css
