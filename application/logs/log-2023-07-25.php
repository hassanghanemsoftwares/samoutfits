<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-25 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:15:58 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:17:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 00:20:53 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:38:49 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:38:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:39:08 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:40:07 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:41:06 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:41:10 --> Could not find the language line "Bracelets"
ERROR - 2023-07-25 00:41:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 00:42:00 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 00:42:25 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:42:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:43:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:43:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:43:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:43:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 00:45:27 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:48:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 00:48:33 --> Could not find the language line "Home"
ERROR - 2023-07-25 00:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 00:52:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-25 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-25 01:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-25 01:40:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 01:50:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 02:03:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-25 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 02:42:35 --> 404 Page Not Found: Git/config
ERROR - 2023-07-25 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:06:57 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:09:35 --> Could not find the language line "Other"
ERROR - 2023-07-25 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-25 03:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:38:06 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:38:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 03:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:39:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:39:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:39:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:39:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 03:40:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 03:40:27 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 03:41:31 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 03:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:44:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 03:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:44:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:44:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 03:44:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 03:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 03:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 04:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 04:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 04:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 04:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 04:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 04:40:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 05:19:31 --> Could not find the language line "Home"
ERROR - 2023-07-25 05:19:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 05:20:02 --> Could not find the language line "Home"
ERROR - 2023-07-25 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 05:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 05:53:46 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:14:47 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:17:48 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 06:26:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:33:49 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-07-25 06:35:14 --> 404 Page Not Found: Sites/default
ERROR - 2023-07-25 06:35:55 --> 404 Page Not Found: Admin/controller
ERROR - 2023-07-25 06:36:25 --> 404 Page Not Found: Uploads/index
ERROR - 2023-07-25 06:39:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:46:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 06:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 07:25:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-25 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 07:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 07:50:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 07:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 07:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 07:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 07:55:20 --> Could not find the language line "Home"
ERROR - 2023-07-25 07:55:36 --> Could not find the language line "Home"
ERROR - 2023-07-25 07:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 07:58:59 --> Could not find the language line "Home"
ERROR - 2023-07-25 07:58:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 07:58:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 07:59:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 07:59:01 --> 404 Page Not Found: Home/accounts
ERROR - 2023-07-25 07:59:01 --> 404 Page Not Found: Home/home
ERROR - 2023-07-25 07:59:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-25 07:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 08:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 08:01:32 --> Could not find the language line "Home"
ERROR - 2023-07-25 08:02:01 --> Could not find the language line "Home"
ERROR - 2023-07-25 08:08:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 08:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 08:30:08 --> Could not find the language line "Home"
ERROR - 2023-07-25 08:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-25 08:50:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 08:53:00 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:10:34 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:24:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 09:24:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-25 09:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:26:39 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:28:25 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 09:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-25 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:30:15 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-25 09:30:15 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-25 09:30:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-25 09:30:16 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-25 09:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:37:00 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:41:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 09:41:52 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:42:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-25 09:42:27 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-25 09:42:27 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-25 09:42:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-25 09:42:58 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:59:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 09:59:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-25 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 09:59:20 --> Could not find the language line "Home"
ERROR - 2023-07-25 09:59:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-25 09:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:00:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:04:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:08:59 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:09:01 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:09:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 10:09:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-25 10:13:39 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:13:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:14:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:14:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:14:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:14:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:15:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:25:35 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:31:22 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:32:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:32:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 10:32:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-25 10:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:35:21 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:36:58 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:43:58 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 10:45:05 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:45:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:46:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:46:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:58:24 --> Could not find the language line "Home"
ERROR - 2023-07-25 10:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:59:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 10:59:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 11:18:42 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:18:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-25 11:20:52 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:23:08 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:24:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:24:38 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:31:17 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:31:17 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-25 11:31:18 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-25 11:31:18 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:31:18 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-25 11:31:18 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-25 11:31:18 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-25 11:31:18 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-25 11:31:18 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-25 11:31:19 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-25 11:32:26 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:35:02 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:35:38 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 11:50:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 11:54:20 --> Could not find the language line "Home"
ERROR - 2023-07-25 11:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:05:54 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:06:18 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:09:09 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:11:40 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:15:22 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:17:53 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:20:56 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:24:01 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:27:03 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:27:48 --> 404 Page Not Found: Storage/settings
ERROR - 2023-07-25 12:30:05 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:33:08 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:33:41 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:34:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:35:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:36:09 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:37:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:37:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:37:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:38:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:38:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:38:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:39:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:39:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:39:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:39:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:39:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:39:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:40:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:40:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:41:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:42:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:42:17 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:42:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:42:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:42:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-25 12:43:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:43:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:43:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:43:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:43:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:43:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-25 12:43:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-25 12:44:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:44:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-25 12:44:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:44:49 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:44:50 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:44:51 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:44:52 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:45:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:45:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:45:28 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:46:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:46:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:47:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:47:31 --> Could not find the language line "Perfume"
ERROR - 2023-07-25 12:48:04 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:48:34 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:57:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 12:58:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 12:58:06 --> Could not find the language line "Home"
ERROR - 2023-07-25 12:58:15 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-25 12:58:15 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-25 12:58:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-25 12:58:16 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-25 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:03:04 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:03:59 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2023-07-25 13:03:59 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2023-07-25 13:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:12:16 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:12:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 13:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 13:12:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 13:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:13:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 13:13:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-25 13:14:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 13:14:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 13:20:12 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-25 13:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 13:29:56 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:29:57 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:29:58 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:31:46 --> 404 Page Not Found: Git/config
ERROR - 2023-07-25 13:32:55 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:33:52 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:45:46 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 13:46:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 13:46:58 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:48:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:57:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-25 13:57:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-25 13:57:33 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:59:37 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:59:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 13:59:39 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:59:39 --> Could not find the language line "Home"
ERROR - 2023-07-25 13:59:40 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-07-25 13:59:49 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-07-25 13:59:49 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-07-25 13:59:50 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-07-25 13:59:50 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-07-25 13:59:50 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:03:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:06:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 14:06:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `items`.`color` IN('Beige')
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-25 14:09:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 14:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 14:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 14:11:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-25 14:11:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-25 14:12:09 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 14:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 14:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:45:56 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:49:57 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:54:04 --> Could not find the language line "Home"
ERROR - 2023-07-25 14:58:18 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:27:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-25 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:39:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 15:40:37 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:41:48 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:41:49 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-25 15:41:49 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-25 15:41:50 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:41:50 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-25 15:41:50 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-25 15:41:51 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-25 15:41:51 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-25 15:41:51 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-25 15:41:51 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-25 15:41:52 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-07-25 15:41:52 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-25 15:41:52 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-25 15:41:52 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-25 15:41:52 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-25 15:41:53 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-25 15:41:53 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-25 15:41:53 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-25 15:41:53 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-25 15:42:06 --> Could not find the language line "Home"
ERROR - 2023-07-25 15:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 16:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-25 16:59:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 16:59:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 17:02:01 --> Could not find the language line "Home"
ERROR - 2023-07-25 17:03:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 17:03:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-25 17:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-25 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 17:45:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:00:23 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:01:10 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:02:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:02:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:02:28 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:15:27 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:15:28 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:15:28 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 18:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 18:29:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 18:29:39 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:30:35 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:58:10 --> Could not find the language line "Home"
ERROR - 2023-07-25 18:58:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-25 19:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 19:29:47 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-25 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 19:43:25 --> Could not find the language line "Home"
ERROR - 2023-07-25 19:52:45 --> 404 Page Not Found: Git/config
ERROR - 2023-07-25 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-25 20:18:34 --> Could not find the language line "Home"
ERROR - 2023-07-25 20:18:37 --> Could not find the language line "Home"
ERROR - 2023-07-25 20:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 20:24:01 --> Could not find the language line "Home"
ERROR - 2023-07-25 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:01:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-25 21:21:23 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:26:15 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:45:05 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:45:09 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:47:47 --> Could not find the language line "Home"
ERROR - 2023-07-25 21:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 21:48:33 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-07-25 21:51:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-25 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:20:27 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 22:21:00 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:29:43 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-25 22:46:22 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:49:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-25 22:53:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 22:57:57 --> Could not find the language line "Home"
ERROR - 2023-07-25 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-25 23:30:12 --> Could not find the language line "Home"
