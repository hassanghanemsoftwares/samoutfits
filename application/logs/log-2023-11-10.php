<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-10 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-10 00:07:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 00:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 00:08:45 --> 404 Page Not Found: Products/products
ERROR - 2023-11-10 00:16:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 00:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-10 00:17:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 00:44:48 --> Could not find the language line "Home"
ERROR - 2023-11-10 00:45:49 --> Could not find the language line "Home"
ERROR - 2023-11-10 00:53:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-10 00:57:30 --> Could not find the language line "products"
ERROR - 2023-11-10 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 01:05:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 01:05:56 --> Could not find the language line "Home"
ERROR - 2023-11-10 01:06:18 --> Could not find the language line "Home"
ERROR - 2023-11-10 01:12:22 --> Could not find the language line "Home"
ERROR - 2023-11-10 01:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 01:22:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-10 01:31:41 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-10 01:38:41 --> Could not find the language line "Socks"
ERROR - 2023-11-10 01:53:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 01:53:14 --> Could not find the language line "Socks"
ERROR - 2023-11-10 01:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-10 02:00:19 --> Could not find the language line "Home"
ERROR - 2023-11-10 02:15:05 --> Could not find the language line "Socks"
ERROR - 2023-11-10 02:16:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 02:17:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 02:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 02:40:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 03:01:38 --> Could not find the language line "Home"
ERROR - 2023-11-10 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-10 03:36:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 03:40:31 --> Could not find the language line "products"
ERROR - 2023-11-10 03:51:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-10 03:59:59 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:01:32 --> Could not find the language line "products"
ERROR - 2023-11-10 04:01:53 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 04:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 04:04:26 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:10:32 --> Could not find the language line "products"
ERROR - 2023-11-10 04:14:17 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:14:19 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:15:21 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:16:54 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:17:32 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:17:59 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:18:34 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 04:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 05:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:05:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 05:06:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:12:30 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:16:27 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:16:28 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:17:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-10 05:20:02 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:29:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 05:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:35:01 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 05:36:53 --> Could not find the language line "Home"
ERROR - 2023-11-10 05:54:08 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:03:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 06:19:45 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:28:53 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:29:15 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:29:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:34:52 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:42:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:44:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 06:45:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 06:49:03 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 06:51:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 06:51:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:07:03 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:07:56 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:08:22 --> Could not find the language line "Socks"
ERROR - 2023-11-10 07:08:27 --> Could not find the language line "Socks"
ERROR - 2023-11-10 07:16:48 --> Could not find the language line "products"
ERROR - 2023-11-10 07:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:19:51 --> Could not find the language line "Perfume"
ERROR - 2023-11-10 07:21:49 --> Could not find the language line "Socks"
ERROR - 2023-11-10 07:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:27:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 07:28:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:30:58 --> Could not find the language line "Perfume"
ERROR - 2023-11-10 07:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:40:08 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:41:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-10 07:46:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 07:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-10 07:46:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 07:50:16 --> Could not find the language line "Other"
ERROR - 2023-11-10 07:50:25 --> Could not find the language line "Other"
ERROR - 2023-11-10 07:51:15 --> Could not find the language line "Other"
ERROR - 2023-11-10 07:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:51:36 --> Could not find the language line "Socks"
ERROR - 2023-11-10 07:51:42 --> Could not find the language line "Socks"
ERROR - 2023-11-10 07:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:51:52 --> Could not find the language line "Socks"
ERROR - 2023-11-10 07:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:52:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 07:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 07:55:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:55:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 07:56:46 --> Could not find the language line "Home"
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 07:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 07:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 07:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 07:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 07:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 07:56:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:07:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:07:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-10 08:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:07:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:07:56 --> Could not find the language line "Bracelets"
ERROR - 2023-11-10 08:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:08:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:08:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:08:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:09:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:10:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:10:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:10:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:10:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:10:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:11:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:11:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:11:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:12:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:12:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:12:42 --> Could not find the language line "products"
ERROR - 2023-11-10 08:12:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:12:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:12:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:13:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:13:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:13:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:14:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:14:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:14:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:14:36 --> Could not find the language line "Socks"
ERROR - 2023-11-10 08:14:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:14:55 --> Could not find the language line "Perfume"
ERROR - 2023-11-10 08:15:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:15:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:17:43 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:17:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:18:02 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:18:05 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:18:06 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:21:03 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:21:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 08:22:23 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:23:20 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:23:53 --> Could not find the language line "products"
ERROR - 2023-11-10 08:26:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:26:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:26:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:26:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:26:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:26:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:27:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 08:27:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:27:17 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:34:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-10 08:42:06 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-10 08:42:06 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-10 08:42:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-10 08:42:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 08:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:46:15 --> Could not find the language line "products"
ERROR - 2023-11-10 08:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:49:43 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:52:20 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:52:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:53:27 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:53:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 08:53:47 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:57:40 --> Could not find the language line "Home"
ERROR - 2023-11-10 08:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 08:59:46 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:00:47 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:01:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 09:01:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:01:28 --> Could not find the language line "Other"
ERROR - 2023-11-10 09:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:01:59 --> Could not find the language line "Other"
ERROR - 2023-11-10 09:02:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:02:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:03:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:04:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:05:31 --> Could not find the language line "Other"
ERROR - 2023-11-10 09:06:04 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:06:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:06:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:06:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:06:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 09:07:02 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:08:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 09:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:16:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 09:16:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 09:16:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 09:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:27:15 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:27:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-10 09:28:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-10 09:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:29:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:37:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 09:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 09:37:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 09:40:15 --> Could not find the language line "Home"
ERROR - 2023-11-10 09:44:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 09:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 09:50:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 09:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 09:56:52 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-10 09:56:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-10 09:56:52 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-10 09:56:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 10:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:00:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 10:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:12:34 --> Could not find the language line "products"
ERROR - 2023-11-10 10:14:04 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:20:41 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:21:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:21:39 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:21:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 10:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:22:01 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:25:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 10:25:35 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:25:55 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:33:54 --> Could not find the language line "products"
ERROR - 2023-11-10 10:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 10:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:37:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 10:37:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 10:37:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 10:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:40:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 10:40:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Casual')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 10:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 10:40:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 10:40:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Casual')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 10:40:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 10:46:03 --> Could not find the language line "Home"
ERROR - 2023-11-10 10:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 10:47:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 10:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-10 10:47:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 10:54:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 10:55:13 --> Could not find the language line "products"
ERROR - 2023-11-10 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 11:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:11:19 --> Could not find the language line "Home"
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 11:30:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:30:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 11:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-10 11:36:46 --> Could not find the language line "assets"
ERROR - 2023-11-10 11:37:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 11:37:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 11:37:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 11:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:43:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 11:49:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 11:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 11:52:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-10 11:55:50 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:02:15 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:03:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-10 12:03:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-10 12:05:38 --> Could not find the language line "products"
ERROR - 2023-11-10 12:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:11:59 --> Could not find the language line "Perfume"
ERROR - 2023-11-10 12:12:01 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:12:59 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:13:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 12:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:14:39 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:16:13 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:16:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 12:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:18:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-10 12:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:24:06 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:29:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:29:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:30:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 12:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:36:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:37:50 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:39:55 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:40:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 12:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 12:45:38 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:48:18 --> Could not find the language line "Home"
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:48:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 12:50:32 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-10 12:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 12:58:06 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:07:43 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:08:43 --> Could not find the language line "Socks"
ERROR - 2023-11-10 13:09:04 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:09:45 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:11:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:13:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 13:24:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:26:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:43:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:43:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:43:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:49:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:50:42 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:54:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 13:54:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 13:55:24 --> Could not find the language line "Home"
ERROR - 2023-11-10 13:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 13:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:04:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 14:04:02 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-10 14:06:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 14:06:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-10 14:06:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 14:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:11:46 --> 404 Page Not Found: Products/products
ERROR - 2023-11-10 14:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 14:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 14:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Sneakers')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-10 14:17:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 14:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:19:16 --> 404 Page Not Found: Products/products
ERROR - 2023-11-10 14:20:20 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-10 14:20:56 --> Could not find the language line "Other"
ERROR - 2023-11-10 14:24:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 14:29:41 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:29:54 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:29:56 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:30:00 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:31:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 14:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 14:33:28 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:34:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 14:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 14:43:20 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:46:20 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:53:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-10 14:55:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-10 14:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 14:58:57 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:58:57 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:58:57 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:58:57 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:58:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:58:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 14:58:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:01:52 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:04:04 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:13:46 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:32:28 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:46:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 15:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-10 15:46:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 15:48:30 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:51:48 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:52:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:52:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 15:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 15:55:22 --> Could not find the language line "Home"
ERROR - 2023-11-10 15:59:55 --> Could not find the language line "Home"
ERROR - 2023-11-10 16:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 16:01:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 16:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:14:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:15:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:16:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:16:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:17:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:18:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-10 16:18:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 16:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:19:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:19:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 16:28:40 --> 404 Page Not Found: Products/products
ERROR - 2023-11-10 16:29:48 --> Could not find the language line "Home"
ERROR - 2023-11-10 16:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 16:37:29 --> Could not find the language line "Home"
ERROR - 2023-11-10 16:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:41:20 --> Could not find the language line "Home"
ERROR - 2023-11-10 16:51:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 16:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:07:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 17:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 17:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 17:24:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 17:24:37 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:31:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:31:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 17:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 17:49:28 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:52:19 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:52:22 --> Could not find the language line "Home"
ERROR - 2023-11-10 17:57:31 --> Could not find the language line "Home"
ERROR - 2023-11-10 18:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-10 18:12:44 --> Could not find the language line "products"
ERROR - 2023-11-10 18:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 18:17:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 18:17:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-10 18:17:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 18:18:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-10 18:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-10 18:18:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-10 18:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 18:18:49 --> Could not find the language line "Home"
ERROR - 2023-11-10 18:22:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 18:23:19 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-10 18:23:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-10 18:23:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-10 18:23:30 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-10 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-11-10 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 18:30:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 18:43:28 --> Could not find the language line "Perfume"
ERROR - 2023-11-10 18:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 18:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 18:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 18:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 19:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:02:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-10 19:06:16 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:08:45 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:26:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:31:25 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:31:43 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:35:37 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:35:51 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:37:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-11-10 19:37:39 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:37:40 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 19:39:30 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:42:32 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:42:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 19:42:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:45:20 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:45:21 --> Could not find the language line "Home"
ERROR - 2023-11-10 19:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 19:58:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 20:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:07:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 20:08:16 --> Could not find the language line "Other"
ERROR - 2023-11-10 20:20:22 --> 404 Page Not Found: Storage/settings
ERROR - 2023-11-10 20:22:59 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:23:27 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:23:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:24:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:24:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:24:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:25:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:26:02 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:26:22 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:26:55 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:26:55 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:26:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:26:58 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:34:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 20:36:12 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 20:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 20:49:59 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:50:18 --> Could not find the language line "Home"
ERROR - 2023-11-10 20:52:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:53:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 20:53:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:53:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:54:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 20:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 20:54:48 --> Could not find the language line "Other"
ERROR - 2023-11-10 20:55:08 --> Could not find the language line "Other"
ERROR - 2023-11-10 20:55:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-10 20:55:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-10 20:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-10 21:01:33 --> Could not find the language line "Home"
ERROR - 2023-11-10 21:04:24 --> Could not find the language line "Home"
ERROR - 2023-11-10 21:12:44 --> Could not find the language line "products"
ERROR - 2023-11-10 21:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 21:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 21:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 21:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-10 21:39:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 21:42:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 21:53:51 --> Could not find the language line "Home"
ERROR - 2023-11-10 21:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 21:57:44 --> Could not find the language line "products"
ERROR - 2023-11-10 21:58:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-10 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 22:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 22:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 22:07:12 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 22:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 22:09:51 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:12:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 22:13:41 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:18:21 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:18:22 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 22:27:44 --> Could not find the language line "products"
ERROR - 2023-11-10 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:42:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-10 22:43:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 22:47:00 --> Could not find the language line "Home"
ERROR - 2023-11-10 22:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-10 23:02:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-10 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-10 23:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-10 23:56:18 --> Could not find the language line "Other"
