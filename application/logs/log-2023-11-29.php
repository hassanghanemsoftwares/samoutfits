<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-29 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 00:33:25 --> 404 Page Not Found: Products/products
ERROR - 2023-11-29 00:38:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 00:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 00:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 00:59:36 --> Could not find the language line "Home"
ERROR - 2023-11-29 00:59:36 --> Could not find the language line "Home"
ERROR - 2023-11-29 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-29 01:14:30 --> Could not find the language line "Home"
ERROR - 2023-11-29 01:29:06 --> Could not find the language line "products"
ERROR - 2023-11-29 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 01:34:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 01:36:14 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-29 02:00:22 --> Could not find the language line "Home"
ERROR - 2023-11-29 02:06:48 --> Could not find the language line "products"
ERROR - 2023-11-29 02:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-29 02:26:24 --> Could not find the language line "Home"
ERROR - 2023-11-29 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-29 02:33:35 --> Could not find the language line "Home"
ERROR - 2023-11-29 02:40:41 --> Could not find the language line "Home"
ERROR - 2023-11-29 02:55:20 --> Could not find the language line "Home"
ERROR - 2023-11-29 02:58:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 03:37:58 --> Could not find the language line "products"
ERROR - 2023-11-29 03:45:01 --> Could not find the language line "Other"
ERROR - 2023-11-29 03:50:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 03:50:35 --> Could not find the language line "Home"
ERROR - 2023-11-29 03:58:20 --> Could not find the language line "Home"
ERROR - 2023-11-29 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:07:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 04:16:45 --> Could not find the language line "Home"
ERROR - 2023-11-29 04:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 04:38:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 04:42:52 --> Could not find the language line "Home"
ERROR - 2023-11-29 04:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:06:39 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:07:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:07:25 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:22:33 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:30:35 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:30:37 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:31:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:36:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 05:37:19 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 05:39:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 05:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 05:50:06 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:58:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 05:59:14 --> Could not find the language line "Other"
ERROR - 2023-11-29 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:04:46 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:05:31 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:05:37 --> Could not find the language line "Perfume"
ERROR - 2023-11-29 06:05:45 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:12:47 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:23:26 --> Could not find the language line "products"
ERROR - 2023-11-29 06:25:32 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-29 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:38:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-29 06:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:41:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-29 06:41:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-29 06:41:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-29 06:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:42:27 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:45:34 --> Could not find the language line "products"
ERROR - 2023-11-29 06:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 06:53:49 --> Could not find the language line "Home"
ERROR - 2023-11-29 06:56:38 --> Could not find the language line "products"
ERROR - 2023-11-29 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:02:55 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:07:42 --> Could not find the language line "products"
ERROR - 2023-11-29 07:24:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 07:28:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:32:03 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:34:32 --> Could not find the language line "products"
ERROR - 2023-11-29 07:36:04 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:39:49 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 07:43:32 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:46:22 --> Could not find the language line "Home"
ERROR - 2023-11-29 07:49:10 --> Could not find the language line "products"
ERROR - 2023-11-29 07:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:10:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 08:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 08:16:17 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:21:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 08:22:21 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 08:26:26 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:26:58 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:27:45 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:29:17 --> Could not find the language line "products"
ERROR - 2023-11-29 08:29:38 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-29 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:30:23 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:32:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 08:32:25 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:34:25 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:35:21 --> Could not find the language line "Home"
ERROR - 2023-11-29 08:40:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 08:44:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 08:56:48 --> Could not find the language line "products"
ERROR - 2023-11-29 08:58:30 --> Could not find the language line "products"
ERROR - 2023-11-29 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 09:03:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 09:03:31 --> Could not find the language line "Home"
ERROR - 2023-11-29 09:07:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 09:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 09:08:30 --> Could not find the language line "products"
ERROR - 2023-11-29 09:10:20 --> Could not find the language line "Home"
ERROR - 2023-11-29 09:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 09:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 09:33:20 --> 404 Page Not Found: Products/products
ERROR - 2023-11-29 09:35:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 09:36:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 09:36:57 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-29 09:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 09:38:28 --> Could not find the language line "products"
ERROR - 2023-11-29 09:59:27 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:05:27 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:06:10 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:16:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 10:16:25 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:21:05 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:21:50 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:23:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 10:26:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 10:26:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 10:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:27:24 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 10:33:50 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:34:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 10:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 10:39:06 --> Could not find the language line "products"
ERROR - 2023-11-29 10:39:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-29 10:55:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 10:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 11:01:23 --> 404 Page Not Found: Products/products
ERROR - 2023-11-29 11:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:05:20 --> Could not find the language line "products"
ERROR - 2023-11-29 11:06:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 11:06:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 11:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:06:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 11:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:11:32 --> Could not find the language line "products"
ERROR - 2023-11-29 11:23:42 --> Could not find the language line "Home"
ERROR - 2023-11-29 11:23:48 --> Could not find the language line "Home"
ERROR - 2023-11-29 11:25:23 --> Could not find the language line "Home"
ERROR - 2023-11-29 11:25:26 --> Could not find the language line "Home"
ERROR - 2023-11-29 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 11:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 11:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 12:08:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 12:18:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 12:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:27:07 --> Could not find the language line "Home"
ERROR - 2023-11-29 12:27:44 --> Could not find the language line "Home"
ERROR - 2023-11-29 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 12:37:00 --> Could not find the language line "Socks"
ERROR - 2023-11-29 12:37:11 --> Could not find the language line "Socks"
ERROR - 2023-11-29 12:37:18 --> Could not find the language line "Socks"
ERROR - 2023-11-29 12:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:57:09 --> Could not find the language line "Home"
ERROR - 2023-11-29 12:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 12:59:46 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:01:52 --> Could not find the language line "Crocs"
ERROR - 2023-11-29 13:05:59 --> Could not find the language line "products"
ERROR - 2023-11-29 13:06:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:09:28 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:12:01 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:14:55 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:16:58 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 13:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:21:41 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:21:45 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:22:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 13:24:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 13:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:25:17 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-29 13:25:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-29 13:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:32:35 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:33:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 13:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:34:07 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:34:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-29 13:34:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '10'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-29 13:34:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-29 13:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:35:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:43:51 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-29 13:47:56 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:47:56 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:47:56 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:47:56 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:47:56 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:49:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 13:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 13:49:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-29 13:49:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-29 13:49:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-29 13:49:37 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:49:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:50:44 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:51:37 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:52:10 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:52:58 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:54:35 --> Could not find the language line "Home"
ERROR - 2023-11-29 13:59:06 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 14:13:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "products"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:24 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:13:33 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:15:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 14:15:48 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:39:09 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:39:09 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:39:10 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:39:10 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:39:55 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 14:42:54 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:43:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:44:04 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:46:19 --> Could not find the language line "products"
ERROR - 2023-11-29 14:47:48 --> Could not find the language line "Home"
ERROR - 2023-11-29 14:55:43 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:02:07 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:04:28 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 15:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:06:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:12:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-29 15:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:16:19 --> Could not find the language line "products"
ERROR - 2023-11-29 15:17:01 --> 404 Page Not Found: Item/2022
ERROR - 2023-11-29 15:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:25:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 15:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:30:47 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:33:54 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:35:35 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:40:42 --> Could not find the language line "products"
ERROR - 2023-11-29 15:42:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 15:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-29 15:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-29 15:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-29 15:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:44:21 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:44:58 --> Could not find the language line "products"
ERROR - 2023-11-29 15:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:50:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:53:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 15:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 15:56:19 --> Could not find the language line "Home"
ERROR - 2023-11-29 15:56:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-29 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 16:14:12 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-29 16:25:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 16:25:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 16:25:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-29 16:25:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-29 16:25:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-29 16:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 16:33:18 --> Could not find the language line "Home"
ERROR - 2023-11-29 16:36:32 --> Could not find the language line "Home"
ERROR - 2023-11-29 16:36:55 --> Could not find the language line "Home"
ERROR - 2023-11-29 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:09:24 --> Could not find the language line "Other"
ERROR - 2023-11-29 17:10:01 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:19:55 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:20:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:24:59 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:28:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 17:28:05 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 17:46:29 --> Could not find the language line "products"
ERROR - 2023-11-29 17:46:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 17:47:32 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:47:36 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:47:38 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:48:30 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:48:33 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:50:41 --> Could not find the language line "Home"
ERROR - 2023-11-29 17:50:44 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:01:37 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:05:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 18:05:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:08:34 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:08:37 --> Could not find the language line "products"
ERROR - 2023-11-29 18:11:50 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:15:49 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:16:21 --> Could not find the language line "Perfume"
ERROR - 2023-11-29 18:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 18:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 18:21:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 18:23:15 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:24:15 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:30:49 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:31:02 --> Could not find the language line "products"
ERROR - 2023-11-29 18:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 18:33:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 18:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 18:34:40 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:34:43 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:36:37 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:36:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 18:36:42 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:37:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-29 18:37:55 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:40:38 --> Could not find the language line "Perfume"
ERROR - 2023-11-29 18:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 18:59:47 --> Could not find the language line "Home"
ERROR - 2023-11-29 18:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 19:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 19:01:49 --> Could not find the language line "Home"
ERROR - 2023-11-29 19:05:28 --> Could not find the language line "Home"
ERROR - 2023-11-29 19:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-29 19:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 19:08:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-29 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 19:36:40 --> Could not find the language line "Home"
ERROR - 2023-11-29 19:38:23 --> Could not find the language line "Home"
ERROR - 2023-11-29 19:38:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 19:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 19:56:39 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-29 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 20:06:55 --> Could not find the language line "products"
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:12:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-29 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 20:33:30 --> 404 Page Not Found: Products/products
ERROR - 2023-11-29 20:44:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 20:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 20:57:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-29 21:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-29 21:01:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 21:11:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 21:16:27 --> Could not find the language line "products"
ERROR - 2023-11-29 21:28:56 --> Could not find the language line "Home"
ERROR - 2023-11-29 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 21:34:05 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-29 21:34:59 --> Could not find the language line "Home"
ERROR - 2023-11-29 21:55:59 --> Could not find the language line "Other"
ERROR - 2023-11-29 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-29 22:10:40 --> Could not find the language line "Other"
ERROR - 2023-11-29 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 22:32:55 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-11-29 22:32:55 --> Unable to connect to the database
ERROR - 2023-11-29 22:32:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-29 22:34:04 --> Could not find the language line "Home"
ERROR - 2023-11-29 22:34:08 --> Could not find the language line "Home"
ERROR - 2023-11-29 22:34:14 --> Could not find the language line "Home"
ERROR - 2023-11-29 22:34:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-29 22:58:16 --> Could not find the language line "Home"
ERROR - 2023-11-29 22:59:05 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:03:33 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:07:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 23:16:07 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:16:46 --> Could not find the language line "Other"
ERROR - 2023-11-29 23:16:49 --> Could not find the language line "Other"
ERROR - 2023-11-29 23:18:24 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:18:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-29 23:18:28 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:27:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:30:12 --> Could not find the language line "products"
ERROR - 2023-11-29 23:30:51 --> Could not find the language line "Home"
ERROR - 2023-11-29 23:34:55 --> Could not find the language line "products"
ERROR - 2023-11-29 23:43:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-29 23:50:21 --> Could not find the language line "Perfume"
