<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-01 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-01 00:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 00:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-01 00:45:18 --> Could not find the language line "Home"
ERROR - 2023-07-01 00:45:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 00:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 00:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 00:53:45 --> Could not find the language line "Home"
ERROR - 2023-07-01 00:54:58 --> Could not find the language line "Home"
ERROR - 2023-07-01 00:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-01 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 01:13:17 --> Could not find the language line "Home"
ERROR - 2023-07-01 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:01:39 --> Could not find the language line "Other"
ERROR - 2023-07-01 02:05:38 --> Could not find the language line "Crocs"
ERROR - 2023-07-01 02:09:47 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:43:34 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:43:45 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-01 02:43:46 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-01 02:43:46 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-01 02:43:46 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-01 02:46:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 02:46:32 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:50:34 --> Could not find the language line "Home"
ERROR - 2023-07-01 02:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 02:51:55 --> Could not find the language line "Home"
ERROR - 2023-07-01 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 03:18:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 03:18:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 03:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 03:20:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 03:20:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 03:59:10 --> Could not find the language line "Home"
ERROR - 2023-07-01 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 04:26:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 04:28:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 04:31:20 --> Could not find the language line "Home"
ERROR - 2023-07-01 04:52:36 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:10:49 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:14:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 05:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 05:36:40 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:36:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:36:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 05:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:37:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:37:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:37:47 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:37:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:37:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:38:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 05:38:05 --> Could not find the language line "Home"
ERROR - 2023-07-01 05:45:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:00:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-01 06:08:38 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:15:58 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:17:59 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 06:19:28 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 06:28:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 06:29:09 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:29:09 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:32:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 06:32:02 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:33:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 06:34:06 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:35:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 06:35:02 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:35:46 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:37:05 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 06:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 06:55:03 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:56:46 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:57:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 06:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:01:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:05:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:12:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:20:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:26:43 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:26:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 07:27:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 07:28:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 07:28:07 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:28:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 07:28:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 07:28:52 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:28:57 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:29:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:31:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:31:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:31:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 07:31:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 07:31:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 07:31:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`price` ASC
 LIMIT -28, 28
ERROR - 2023-07-01 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`price` ASC
 LIMIT -28, 28
ERROR - 2023-07-01 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`price` ASC
 LIMIT -28, 28
ERROR - 2023-07-01 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`price` ASC
 LIMIT -28, 28
ERROR - 2023-07-01 07:31:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 07:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`price` ASC
 LIMIT -28, 28
ERROR - 2023-07-01 07:31:51 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:32:09 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:36:03 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 07:38:51 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:39:06 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 07:41:44 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:41:49 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:42:53 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 07:47:24 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 07:54:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 07:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:57:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 07:57:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 07:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:03:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:03:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:04:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:04:42 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:13:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 08:14:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:16:40 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:18:50 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:30:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:35:24 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:37:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 08:49:30 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:54:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:54:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:03 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:55:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:55:28 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:55:28 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:55:28 --> Could not find the language line "Home"
ERROR - 2023-07-01 08:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:56:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:56:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:57:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 08:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 08:59:24 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:00:33 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:06:35 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:09:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-01 09:09:36 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:12:00 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:12:39 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:13:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:13:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 09:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:14:03 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 09:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 09:22:17 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:22:39 --> Could not find the language line "Perfume"
ERROR - 2023-07-01 09:22:50 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:23:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 09:23:51 --> Could not find the language line "Home"
ERROR - 2023-07-01 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:08:44 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:09:11 --> Could not find the language line "Other"
ERROR - 2023-07-01 10:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:10:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-01 10:11:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-01 10:12:19 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:18:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:18:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:18:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-01 10:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-01 10:18:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:18:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-01 10:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-01 10:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-01 10:18:25 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 10:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 10:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 10:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 10:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 10:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:30:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:34:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 10:36:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 10:36:04 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:38:08 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:38:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:39:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 10:39:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:40:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:40:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:40:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:40:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:43:23 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:44:20 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:44:23 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 10:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:44:50 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 10:44:57 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:45:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 10:45:29 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:45:47 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 10:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:46:07 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:46:40 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:46:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:47:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:47:55 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:48:05 --> Could not find the language line "Socks"
ERROR - 2023-07-01 10:48:33 --> Could not find the language line "Home"
ERROR - 2023-07-01 10:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 10:49:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:49:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:00 --> Could not find the language line "assets"
ERROR - 2023-07-01 10:50:00 --> Could not find the language line "assets"
ERROR - 2023-07-01 10:50:00 --> Could not find the language line "assets"
ERROR - 2023-07-01 10:50:01 --> Could not find the language line "assets"
ERROR - 2023-07-01 10:50:01 --> Could not find the language line "assets"
ERROR - 2023-07-01 10:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 10:50:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 11:00:41 --> Could not find the language line "Home"
ERROR - 2023-07-01 11:03:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:03:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:03:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 11:03:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 11:03:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 11:04:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 11:05:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 11:06:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:06:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:06:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 11:07:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 11:15:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 11:16:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 11:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 11:44:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 11:44:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 11:44:54 --> Could not find the language line "Home"
ERROR - 2023-07-01 11:54:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 11:57:30 --> Could not find the language line "Home"
ERROR - 2023-07-01 11:59:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:03:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:06:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:10:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 12:12:25 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 12:20:31 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 12:29:25 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:33:42 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:38:34 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:48:46 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:48:46 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:48:46 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:48:46 --> Could not find the language line "Home"
ERROR - 2023-07-01 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:01:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:02:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 13:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:09:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 13:09:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 13:09:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 13:09:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 13:09:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-01 13:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 13:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 13:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 13:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 13:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-01 13:12:07 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 13:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:19:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:20:35 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:22:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:23:22 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:23:37 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:24:01 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:24:01 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:26:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:30:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:34:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:36:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 13:43:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 13:54:47 --> Could not find the language line "Home"
ERROR - 2023-07-01 13:57:45 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:07:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 14:19:50 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:28:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 14:29:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:36:35 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:40:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:46:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 14:47:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 14:47:54 --> Could not find the language line "accounting"
ERROR - 2023-07-01 14:47:54 --> Could not find the language line "accounting"
ERROR - 2023-07-01 14:47:54 --> Could not find the language line "accounting"
ERROR - 2023-07-01 14:47:54 --> Could not find the language line "accounting"
ERROR - 2023-07-01 14:47:54 --> Could not find the language line "accounting"
ERROR - 2023-07-01 14:48:08 --> Could not find the language line "accounting"
ERROR - 2023-07-01 14:48:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 14:49:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 14:49:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 14:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 14:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 14:53:04 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:53:41 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:54:48 --> Could not find the language line "Home"
ERROR - 2023-07-01 14:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:00:23 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:16:47 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:20:34 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:21:10 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:23:54 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:25:20 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:26:07 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:27:02 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:34:02 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:35:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:35:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:37:41 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:41:28 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:41:32 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:42:06 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:42:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 15:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 15:42:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 15:42:22 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 15:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:51:39 --> Could not find the language line "Home"
ERROR - 2023-07-01 15:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 15:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 16:06:34 --> Could not find the language line "Home"
ERROR - 2023-07-01 16:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-01 16:12:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 16:14:51 --> Could not find the language line "Home"
ERROR - 2023-07-01 16:23:45 --> Could not find the language line "Home"
ERROR - 2023-07-01 16:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 16:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 16:24:52 --> Could not find the language line "Socks"
ERROR - 2023-07-01 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 16:34:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 16:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:04:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-01 17:06:39 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:09:12 --> Could not find the language line "accounting"
ERROR - 2023-07-01 17:09:12 --> Could not find the language line "accounting"
ERROR - 2023-07-01 17:09:12 --> Could not find the language line "accounting"
ERROR - 2023-07-01 17:09:12 --> Could not find the language line "accounting"
ERROR - 2023-07-01 17:09:12 --> Could not find the language line "accounting"
ERROR - 2023-07-01 17:09:13 --> Could not find the language line "accounting"
ERROR - 2023-07-01 17:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 17:09:49 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:10:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 17:10:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:10:39 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:10:57 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:11:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:11:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:11:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 17:14:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 17:14:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:16:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:18:59 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:19:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 17:25:53 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:26:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:26:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:26:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:26:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:26:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:26:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:27:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:27:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:28:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:28:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:29:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:29:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:29:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:29:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 17:29:24 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:31:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-01 17:39:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 17:39:50 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:42:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:42:42 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:43:31 --> Could not find the language line "Home"
ERROR - 2023-07-01 17:52:53 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:16:01 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 18:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 18:24:49 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:26:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:34:20 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 18:40:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:40:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 18:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:45:46 --> Could not find the language line "accounting"
ERROR - 2023-07-01 18:45:46 --> Could not find the language line "accounting"
ERROR - 2023-07-01 18:45:46 --> Could not find the language line "accounting"
ERROR - 2023-07-01 18:45:46 --> Could not find the language line "accounting"
ERROR - 2023-07-01 18:45:47 --> Could not find the language line "accounting"
ERROR - 2023-07-01 18:45:47 --> Could not find the language line "accounting"
ERROR - 2023-07-01 18:46:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:47:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 18:47:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:49:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:49:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:49:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 18:50:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:50:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:50:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:50:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:50:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 18:50:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:02:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 19:03:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:08:10 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:10:05 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:13:45 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:17:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:22:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:32:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:33:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:35:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:35:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:37:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:37:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:38:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:38:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:38:52 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:38:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 19:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 19:43:31 --> Could not find the language line "Home"
ERROR - 2023-07-01 19:46:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 19:47:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:05:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 20:19:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 20:20:04 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:05 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:05 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:05 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:05 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:05 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 20:20:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 20:20:23 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:23 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:23 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:24 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:24 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:24 --> Could not find the language line "accounting"
ERROR - 2023-07-01 20:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 20:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 20:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 20:22:47 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:22:47 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:35:42 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 20:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:37:16 --> 404 Page Not Found: FileDownload/index
ERROR - 2023-07-01 20:37:23 --> 404 Page Not Found: FileDownload/index
ERROR - 2023-07-01 20:37:41 --> Could not find the language line "Home"
ERROR - 2023-07-01 20:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 20:46:36 --> Could not find the language line "Socks"
ERROR - 2023-07-01 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:01:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:05:45 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:14:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 21:14:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 21:14:14 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-01 21:14:18 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-01 21:14:28 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-01 21:14:32 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-01 21:14:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 21:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:15:07 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-01 21:15:13 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:15:26 --> Could not find the language line "Bracelets"
ERROR - 2023-07-01 21:15:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:15:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:15:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:15:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:16:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 21:16:24 --> Could not find the language line "Other"
ERROR - 2023-07-01 21:16:31 --> Could not find the language line "Other"
ERROR - 2023-07-01 21:16:34 --> Could not find the language line "Other"
ERROR - 2023-07-01 21:16:38 --> Could not find the language line "Other"
ERROR - 2023-07-01 21:16:41 --> Could not find the language line "Perfume"
ERROR - 2023-07-01 21:17:00 --> Could not find the language line "Socks"
ERROR - 2023-07-01 21:17:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-01 21:17:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 21:17:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-01 21:19:08 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:19:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 21:22:01 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:22:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:28:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:41:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 21:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 21:55:26 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 21:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:04:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 22:06:55 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:06:55 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:06:55 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:06:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:06:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:06:56 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:14:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 22:29:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-01 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:31:17 --> Could not find the language line "Home"
ERROR - 2023-07-01 22:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-01 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:00:41 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:02:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 23:05:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-01 23:05:01 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:07:04 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 23:25:27 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:25:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:26:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:26:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:26:30 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:26:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:26:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:27:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:27:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:27:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-01 23:27:26 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:28:33 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-01 23:40:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-01 23:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-01 23:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
