<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-27 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-27 00:00:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-27 00:14:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 00:24:27 --> Could not find the language line "products"
ERROR - 2023-11-27 00:24:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 00:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 00:52:08 --> Could not find the language line "products"
ERROR - 2023-11-27 01:00:21 --> Could not find the language line "Home"
ERROR - 2023-11-27 01:12:04 --> Could not find the language line "Home"
ERROR - 2023-11-27 01:17:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 01:19:52 --> Could not find the language line "products"
ERROR - 2023-11-27 01:21:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 01:21:41 --> Could not find the language line "Home"
ERROR - 2023-11-27 01:23:29 --> Could not find the language line "Home"
ERROR - 2023-11-27 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-27 01:30:50 --> Could not find the language line "Home"
ERROR - 2023-11-27 01:37:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 01:58:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 02:16:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 02:18:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 02:30:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 02:31:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 02:31:43 --> Could not find the language line "Home"
ERROR - 2023-11-27 02:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 02:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 03:01:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 03:02:01 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-27 03:10:27 --> Could not find the language line "Home"
ERROR - 2023-11-27 03:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 03:19:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:16 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:16 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:03:35 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-27 04:09:42 --> Could not find the language line "products"
ERROR - 2023-11-27 04:22:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 04:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:29:38 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:29:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-27 04:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:32:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 04:33:01 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:33:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 04:33:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:33:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 04:34:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 04:34:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 04:34:19 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:34:27 --> Could not find the language line "Perfume"
ERROR - 2023-11-27 04:34:35 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:34:36 --> Could not find the language line "Socks"
ERROR - 2023-11-27 04:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:35:03 --> Could not find the language line "Socks"
ERROR - 2023-11-27 04:35:29 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:35:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:35:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:35:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:35:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:35:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:35:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:36:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:36:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:36:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:36:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:36:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:36:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:37:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:37:38 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:45:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:54:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:54:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:54:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:54:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:54:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 04:55:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:55:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:56:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:56:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:56:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:56:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:56:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:56:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 04:56:50 --> Could not find the language line "Home"
ERROR - 2023-11-27 04:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 04:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 05:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 05:24:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 05:28:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 05:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 05:30:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 05:54:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 05:57:20 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 06:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 06:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 06:17:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 06:17:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:17:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 06:20:06 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-27 06:28:41 --> Could not find the language line "Home"
ERROR - 2023-11-27 06:30:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 06:33:35 --> Could not find the language line "Home"
ERROR - 2023-11-27 06:34:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 06:40:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 06:58:34 --> Could not find the language line "Home"
ERROR - 2023-11-27 07:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 07:01:50 --> Could not find the language line "products"
ERROR - 2023-11-27 07:19:56 --> Could not find the language line "Home"
ERROR - 2023-11-27 07:21:40 --> Could not find the language line "Home"
ERROR - 2023-11-27 07:21:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 07:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 07:27:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 07:27:47 --> Could not find the language line "Home"
ERROR - 2023-11-27 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 07:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 07:32:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 07:37:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-27 07:37:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 07:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 07:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 07:57:53 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:03:24 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:03:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:03:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:04:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:04:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:05:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:05:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:06:57 --> Could not find the language line "products"
ERROR - 2023-11-27 08:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:09:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:09:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:10:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:10:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 08:10:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:10:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:10:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:10:48 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:14:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:14:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:14:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:15:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:15:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:15:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:15:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:15:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:16:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:16:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:16:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:16:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:17:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:17:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:18:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:18:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:18:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:19:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 08:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:19:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:20:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:20:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:22:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:22:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:23:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:23:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:23:50 --> Could not find the language line "products"
ERROR - 2023-11-27 08:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:24:47 --> 404 Page Not Found: Item/811808
ERROR - 2023-11-27 08:25:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:25:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:26:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:26:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:26:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:26:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:27:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 08:28:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:28:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:28:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:29:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:30:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:30:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 08:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 08:44:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:44:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:45:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 08:59:32 --> Could not find the language line "Home"
ERROR - 2023-11-27 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 09:02:56 --> Could not find the language line "Other"
ERROR - 2023-11-27 09:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:08:01 --> Could not find the language line "Home"
ERROR - 2023-11-27 09:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:08:11 --> Could not find the language line "Perfume"
ERROR - 2023-11-27 09:08:18 --> Could not find the language line "products"
ERROR - 2023-11-27 09:16:29 --> Could not find the language line "products"
ERROR - 2023-11-27 09:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 09:33:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 09:34:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 09:35:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 09:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 09:37:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 09:37:43 --> Could not find the language line "products"
ERROR - 2023-11-27 09:37:59 --> Could not find the language line "products"
ERROR - 2023-11-27 09:53:22 --> Could not find the language line "products"
ERROR - 2023-11-27 09:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:09:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 10:14:01 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:22:52 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:25:48 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:25:49 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 10:33:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 10:35:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 10:36:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 10:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:39:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:39:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:39:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:40:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:41:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:41:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:41:48 --> Could not find the language line "products"
ERROR - 2023-11-27 10:41:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:43:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:43:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:44:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:44:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:44:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:45:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-27 10:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:45:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:45:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:46:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:46:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:47:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:47:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:47:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:48:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:48:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:48:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:48:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:49:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:49:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:50:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:50:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:50:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:50:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:50:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:51:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:51:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 10:51:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 10:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:51:59 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-27 10:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:57:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 10:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 10:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 10:58:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 10:58:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 11:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:07:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:20:52 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:24:07 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 11:26:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:26:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 11:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:33:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 11:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 11:33:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 11:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:35:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 11:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:42:35 --> Could not find the language line "products"
ERROR - 2023-11-27 11:43:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:46:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 11:46:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-27 11:46:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 11:47:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 11:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-27 11:47:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 11:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:51:01 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:52:23 --> Could not find the language line "Home"
ERROR - 2023-11-27 11:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 11:58:34 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:07:06 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-27 12:08:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:37:40 --> Could not find the language line "products"
ERROR - 2023-11-27 12:37:59 --> Could not find the language line "products"
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:38:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 12:39:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 12:42:55 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:44:58 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:45:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:45:41 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:45:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:46:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:47:05 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:48:42 --> Could not find the language line "products"
ERROR - 2023-11-27 12:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:53:52 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:53:59 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 12:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:54:32 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 12:54:56 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 12:55:07 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 12:55:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 12:55:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:55:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:55:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:55:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:56:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:56:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:56:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:56:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:56:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:56:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 12:57:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:57:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 12:58:04 --> Could not find the language line "Home"
ERROR - 2023-11-27 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:03:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:06:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 13:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 13:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-27 13:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 13:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 13:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 13:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 13:44:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 13:44:48 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-27 13:46:55 --> Could not find the language line "Home"
ERROR - 2023-11-27 13:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 13:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 13:47:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 13:47:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 13:47:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 13:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 13:49:34 --> Could not find the language line "Home"
ERROR - 2023-11-27 13:52:38 --> Could not find the language line "products"
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:54:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 13:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:08:40 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:16:00 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:16:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 14:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 14:16:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 14:16:57 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:17:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:17:54 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:17:56 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:18:20 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:23:43 --> 404 Page Not Found: Products/products
ERROR - 2023-11-27 14:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:31:03 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-27 14:31:13 --> 404 Page Not Found: Products/products
ERROR - 2023-11-27 14:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:36:25 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:36:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 14:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:38:43 --> Could not find the language line "products"
ERROR - 2023-11-27 14:41:03 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:41:03 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:41:06 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:41:14 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:42:38 --> Could not find the language line "products"
ERROR - 2023-11-27 14:44:23 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:46:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 14:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 14:51:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:51:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 14:56:26 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:00:34 --> Could not find the language line "products"
ERROR - 2023-11-27 15:00:48 --> Could not find the language line "products"
ERROR - 2023-11-27 15:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:03:57 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:03:59 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:07:01 --> Could not find the language line "products"
ERROR - 2023-11-27 15:08:58 --> 404 Page Not Found: Storage/settings
ERROR - 2023-11-27 15:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:14:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-27 15:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:18:22 --> Could not find the language line "products"
ERROR - 2023-11-27 15:19:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 15:19:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 15:19:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 15:19:32 --> Could not find the language line "Socks"
ERROR - 2023-11-27 15:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:21:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 15:21:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 15:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:24:03 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:25:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 15:25:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 15:25:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 15:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:28:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 15:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:30:35 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:32:24 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:35:40 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:36:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 15:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:42:29 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:43:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:45:32 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:45:47 --> Could not find the language line "Perfume"
ERROR - 2023-11-27 15:45:51 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:45:51 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:45:51 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:45:54 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:46:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:47:22 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:47:35 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:48:37 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:48:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 15:49:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 15:49:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 15:49:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 15:49:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-27 15:49:47 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:49:54 --> Could not find the language line "Home"
ERROR - 2023-11-27 15:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:33 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:52:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 15:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 15:54:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 15:55:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:05:04 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:06:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:06:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:09:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 16:09:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 16:09:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 16:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:16:46 --> Could not find the language line "products"
ERROR - 2023-11-27 16:19:43 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:25:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 16:25:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 16:25:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 16:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:30:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:34:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:35:25 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:37:14 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:44:25 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:44:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:49:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 16:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:51:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:51:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:53:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 16:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-27 16:53:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 16:54:12 --> Could not find the language line "Home"
ERROR - 2023-11-27 16:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 16:55:38 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 16:55:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:55:39 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 16:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 16:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:03:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:08:24 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:11:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 17:11:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 17:11:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 17:12:52 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:13:34 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:15:06 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:16:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:17:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:17:51 --> Could not find the language line "products"
ERROR - 2023-11-27 17:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:19:14 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:26:57 --> Could not find the language line "products"
ERROR - 2023-11-27 17:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:31:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-27 17:32:18 --> Could not find the language line "Perfume"
ERROR - 2023-11-27 17:32:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:32:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:33:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:33:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:33:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:33:37 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:33:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:34:00 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:34:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:34:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:34:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:34:33 --> Could not find the language line "Socks"
ERROR - 2023-11-27 17:34:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 17:34:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 17:34:54 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:35:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 17:36:27 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:38:05 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:40:05 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:48:43 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:49:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 17:49:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 17:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 17:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:53:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 17:53:22 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:56:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 17:56:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 17:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 17:59:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:59:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 17:59:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:01:49 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:04:32 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:04:37 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 18:04:39 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:04:45 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:05:21 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:05:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:05:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:07:00 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 18:08:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:08:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:09:54 --> Could not find the language line "Socks"
ERROR - 2023-11-27 18:10:03 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:12:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:15:04 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:15:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:15:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:15:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:15:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:15:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 18:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 18:15:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 18:16:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:16:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:16:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:16:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 18:16:24 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:17:08 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:17:29 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:18:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:19:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:22:34 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:22:44 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 18:22:58 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:23:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:24:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:24:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:24:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 18:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:25:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 18:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:28:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:31:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-27 18:31:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-27 18:31:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-27 18:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:32:24 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:45 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 18:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:35:18 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:38:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-27 18:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:43:17 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:43:21 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:43:58 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-27 18:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:48:34 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:49:50 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:51:31 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:51:40 --> Could not find the language line "Perfume"
ERROR - 2023-11-27 18:51:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:53:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:53:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:54:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:54:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:54:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:54:07 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:54:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 18:54:36 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:55:16 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:55:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:55:42 --> Could not find the language line "Other"
ERROR - 2023-11-27 18:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:55:52 --> Could not find the language line "Other"
ERROR - 2023-11-27 18:55:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:56:19 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:56:21 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:56:23 --> Could not find the language line "Home"
ERROR - 2023-11-27 18:56:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 18:56:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 18:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 18:56:39 --> Could not find the language line "Perfume"
ERROR - 2023-11-27 18:58:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 18:59:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:05:54 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:06:57 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:06:59 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:12:52 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:13:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-27 19:13:54 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:22:35 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:27:41 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:28:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:34 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-27 19:29:35 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:29:36 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-27 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:34:35 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:36:32 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:36:38 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:38:37 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:39:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 19:41:00 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:45:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 19:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:51:59 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:53:39 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:54:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:55:22 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 19:57:36 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:57:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:57:57 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:58:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 19:58:36 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:00:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:00:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:00:55 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:01:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 20:04:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-27 20:07:07 --> Could not find the language line "products"
ERROR - 2023-11-27 20:08:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-27 20:09:19 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:10:13 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:10:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:17:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-27 20:19:03 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:22:26 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:24:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:24:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:25:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:25:16 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:25:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:25:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:26:28 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:27:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:27:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:27:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:27:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:27:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:34:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:34:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:41:34 --> Could not find the language line "Hair"
ERROR - 2023-11-27 20:41:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:41:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 20:42:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:42:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 20:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:47:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:47:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 20:49:52 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:51:02 --> Could not find the language line "Home"
ERROR - 2023-11-27 20:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 20:58:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 20:59:39 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:00:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-27 21:00:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-27 21:00:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-27 21:00:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-27 21:00:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-11-27 21:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:01:35 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:01:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:03:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:04:00 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:04:02 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:04:06 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:04:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:04:22 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:05:22 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-27 21:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:05:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:06:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:11:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 21:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:17:15 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:17:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-27 21:17:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-27 21:17:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-27 21:18:09 --> Could not find the language line "Bracelets"
ERROR - 2023-11-27 21:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:19:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:30:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:30:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 21:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:30:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:30:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:31:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:31:41 --> Could not find the language line "Other"
ERROR - 2023-11-27 21:32:00 --> Could not find the language line "Other"
ERROR - 2023-11-27 21:32:20 --> Could not find the language line "Other"
ERROR - 2023-11-27 21:32:32 --> Could not find the language line "Other"
ERROR - 2023-11-27 21:32:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 21:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:33:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 21:33:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-27 21:33:53 --> Could not find the language line "Socks"
ERROR - 2023-11-27 21:34:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:34:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:34:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:34:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:35:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:36:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:36:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:36:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:36:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-27 21:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:42:57 --> Could not find the language line "Home"
ERROR - 2023-11-27 21:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:50:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 21:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 21:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 22:08:30 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:10:23 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:20:22 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-27 22:23:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 22:26:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:26:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:26:44 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 22:46:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-27 22:48:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 22:48:01 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:50:02 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 22:55:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 22:56:05 --> Could not find the language line "Home"
ERROR - 2023-11-27 22:58:06 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:04:27 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:06:46 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:06:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-27 23:06:47 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-27 23:06:49 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:06:59 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-11-27 23:06:59 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-11-27 23:07:00 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-11-27 23:07:00 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-11-27 23:07:00 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:07:16 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:07:23 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:12:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-27 23:18:33 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:23:06 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:25:36 --> Could not find the language line "products"
ERROR - 2023-11-27 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:44:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-27 23:54:18 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:55:48 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:57:42 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-27 23:59:51 --> Could not find the language line "Home"
ERROR - 2023-11-27 23:59:58 --> Could not find the language line "Home"
