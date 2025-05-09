<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-18 00:09:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-18 00:09:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-18 00:10:28 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:10:29 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:13:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:15:06 --> Could not find the language line "Other"
ERROR - 2024-10-18 00:16:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-18 00:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 00:18:27 --> Could not find the language line "Other"
ERROR - 2024-10-18 00:20:15 --> Could not find the language line "Perfume"
ERROR - 2024-10-18 00:43:09 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:52:39 --> 404 Page Not Found: Products/products
ERROR - 2024-10-18 00:53:18 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:53:41 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:53:49 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:56:15 --> Could not find the language line "Home"
ERROR - 2024-10-18 00:57:17 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:02:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-18 01:13:03 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:19:08 --> Could not find the language line "products"
ERROR - 2024-10-18 01:25:59 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:36:43 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:38:34 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 01:40:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-18 01:43:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:47:58 --> Could not find the language line "Home"
ERROR - 2024-10-18 01:54:33 --> Could not find the language line "Home"
ERROR - 2024-10-18 02:13:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 02:13:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 02:42:01 --> Could not find the language line "Home"
ERROR - 2024-10-18 02:43:04 --> Could not find the language line "Home"
ERROR - 2024-10-18 02:44:41 --> Could not find the language line "Home"
ERROR - 2024-10-18 02:48:12 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-18 02:54:12 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:05:25 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:13:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:24:46 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-18 03:24:46 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:39:39 --> Could not find the language line "Other"
ERROR - 2024-10-18 03:40:44 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:43:06 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:50:29 --> Could not find the language line "Home"
ERROR - 2024-10-18 03:53:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-18 04:06:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-18 04:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-18 04:06:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-18 04:13:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 04:14:17 --> Could not find the language line "Home"
ERROR - 2024-10-18 04:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-18 04:27:27 --> Could not find the language line "Home"
ERROR - 2024-10-18 04:28:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 04:31:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-18 04:43:06 --> Could not find the language line "Home"
ERROR - 2024-10-18 05:02:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-18 05:04:55 --> Could not find the language line "Home"
ERROR - 2024-10-18 05:13:05 --> Could not find the language line "Home"
ERROR - 2024-10-18 05:30:49 --> Could not find the language line "Home"
ERROR - 2024-10-18 05:43:05 --> Could not find the language line "Home"
ERROR - 2024-10-18 05:47:23 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-18 06:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-18 06:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-18 06:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-18 06:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-18 06:03:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-18 06:10:47 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:13:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:15:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:16:34 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:23:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-18 06:24:21 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:33:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-18 06:43:06 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:49:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:55:59 --> Could not find the language line "Home"
ERROR - 2024-10-18 06:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 06:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:06:51 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:07:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 07:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:10:27 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:11:17 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:11:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-18 07:11:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-18 07:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:13:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:15:00 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:20:46 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:21:41 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:21:50 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 07:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:27:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:30:22 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:31:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:43:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 07:54:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-18 07:54:04 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:54:54 --> Could not find the language line "Home"
ERROR - 2024-10-18 07:55:09 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:09:41 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:13:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:29:35 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:35:51 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:38:58 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:42:00 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:43:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:50:36 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:50:40 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 08:57:47 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:57:49 --> Could not find the language line "Home"
ERROR - 2024-10-18 08:57:50 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:13:09 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:15:37 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:16:00 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:21:40 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:28:55 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:36:01 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:40:41 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:43:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:58:33 --> Could not find the language line "Home"
ERROR - 2024-10-18 09:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 09:59:44 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:01:14 --> Could not find the language line "hats"
ERROR - 2024-10-18 10:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:06:01 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:08:23 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:08:33 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:13:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:19:47 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:20:04 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:22:18 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 10:43:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 10:46:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 11:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-18 11:11:09 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:13:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:18:23 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:18:58 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-18 11:18:59 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:20:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:25:31 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:26:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:26:13 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-18 11:26:13 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-18 11:26:13 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-18 11:26:13 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-18 11:26:13 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-18 11:30:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 11:30:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 11:30:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 11:30:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 11:30:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 11:30:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 11:34:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-18 11:43:09 --> Could not find the language line "Home"
ERROR - 2024-10-18 11:44:59 --> Could not find the language line "Other"
ERROR - 2024-10-18 11:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 11:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 11:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:00:05 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:02:32 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:02:34 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:02:46 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:02:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-18 12:02:55 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:11:21 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:13:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:18:01 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:37:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:38:07 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:43:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:43:17 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:47:32 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:49:02 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:49:03 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:49:05 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:49:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:49:36 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:49:52 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:50:53 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:53:51 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:55:37 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:56:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:56:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 12:56:28 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:00:04 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:00:44 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:01:33 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:01:42 --> Could not find the language line "Socks"
ERROR - 2024-10-18 13:06:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-18 13:13:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:13:35 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:13:36 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:25:21 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:39:32 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:40:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:40:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-18 13:40:45 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:43:12 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:44:29 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:44:37 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:44:38 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:44:47 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:47:15 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:51:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 13:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 13:53:06 --> Could not find the language line "Other"
ERROR - 2024-10-18 14:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:03:05 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:03:43 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:03:48 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:04:27 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:04:28 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:05:20 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:06:02 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:06:03 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:07:58 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:08:01 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:11:23 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:11:53 --> Could not find the language line "Other"
ERROR - 2024-10-18 14:13:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:23:12 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:43:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 14:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 14:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:13:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:17:44 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:18:18 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:23:21 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:24:03 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:33:45 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:43:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 15:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 15:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 16:13:12 --> Could not find the language line "Home"
ERROR - 2024-10-18 16:14:03 --> Could not find the language line "Home"
ERROR - 2024-10-18 16:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 16:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 16:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 16:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 16:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 16:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 16:28:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-18 16:43:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 17:13:12 --> Could not find the language line "Home"
ERROR - 2024-10-18 17:13:51 --> Could not find the language line "Home"
ERROR - 2024-10-18 17:13:52 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-18 17:13:52 --> Could not find the language line "Home"
ERROR - 2024-10-18 17:23:19 --> Could not find the language line "products"
ERROR - 2024-10-18 17:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 17:28:45 --> Could not find the language line "Home"
ERROR - 2024-10-18 17:28:58 --> Could not find the language line "Home"
ERROR - 2024-10-18 17:29:31 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-10-18 17:29:32 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-10-18 17:30:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-18 17:30:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-18 17:30:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-18 17:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 17:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 17:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 17:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 17:43:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:08:51 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:10:04 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:10:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-18 18:10:08 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:10:11 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:12:06 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:13:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:14:26 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:15:50 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:31:49 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:32:47 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:33:10 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:35:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:43:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:46:55 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:52:44 --> Could not find the language line "Home"
ERROR - 2024-10-18 18:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 18:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 19:01:48 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 19:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 19:13:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:13:40 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:14:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-18 19:14:49 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:19:49 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:34:36 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:37:28 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:38:22 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:39:15 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:41:12 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:42:03 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:43:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 19:57:43 --> Could not find the language line "Home"
ERROR - 2024-10-18 20:01:32 --> Could not find the language line "Home"
ERROR - 2024-10-18 20:06:05 --> Could not find the language line "Home"
ERROR - 2024-10-18 20:07:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-18 20:08:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:08:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-18 20:13:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 20:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 20:37:28 --> Could not find the language line "Home"
ERROR - 2024-10-18 20:43:14 --> Could not find the language line "Home"
ERROR - 2024-10-18 21:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 21:13:15 --> Could not find the language line "Home"
ERROR - 2024-10-18 21:20:13 --> Could not find the language line "Home"
ERROR - 2024-10-18 21:21:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-18 21:24:15 --> Could not find the language line "Home"
ERROR - 2024-10-18 21:35:56 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-18 21:35:56 --> Could not find the language line "Home"
ERROR - 2024-10-18 21:35:56 --> Could not find the language line "Home"
ERROR - 2024-10-18 21:43:15 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:09:17 --> Could not find the language line "products"
ERROR - 2024-10-18 22:13:19 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:21:21 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:21:47 --> Could not find the language line "Socks"
ERROR - 2024-10-18 22:22:09 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:22:20 --> Could not find the language line "Perfume"
ERROR - 2024-10-18 22:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:22:36 --> Could not find the language line "Perfume"
ERROR - 2024-10-18 22:22:38 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:22:44 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:23:00 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:23:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:23:37 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:23:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:24:07 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:24:52 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:25:06 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:25:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:25:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:25:46 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:26:03 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:26:10 --> Could not find the language line "Clothing"
ERROR - 2024-10-18 22:27:17 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:32:27 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:32:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-18 22:33:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-18 22:33:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-18 22:33:23 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:33:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 22:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:34:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 22:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 22:35:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 22:38:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 22:38:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 22:43:16 --> Could not find the language line "Home"
ERROR - 2024-10-18 22:53:45 --> Could not find the language line "products"
ERROR - 2024-10-18 22:54:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-18 23:11:22 --> Could not find the language line "Home"
ERROR - 2024-10-18 23:13:20 --> Could not find the language line "Home"
ERROR - 2024-10-18 23:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-18 23:26:46 --> Could not find the language line "Home"
ERROR - 2024-10-18 23:43:19 --> Could not find the language line "Home"
