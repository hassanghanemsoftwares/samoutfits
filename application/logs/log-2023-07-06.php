<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-06 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 00:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 00:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 00:26:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-06 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 00:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 00:54:01 --> Could not find the language line "Home"
ERROR - 2023-07-06 01:00:22 --> Could not find the language line "Home"
ERROR - 2023-07-06 01:16:02 --> Could not find the language line "Home"
ERROR - 2023-07-06 01:20:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-06 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 01:52:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-06 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 02:05:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 02:22:18 --> Could not find the language line "Home"
ERROR - 2023-07-06 02:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-06 02:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 02:48:51 --> Could not find the language line "Home"
ERROR - 2023-07-06 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 03:33:47 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:14:16 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 04:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 04:34:36 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:35:35 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:35:47 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 04:36:06 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 04:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 04:37:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 04:37:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 04:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 04:52:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-06 04:55:29 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:56:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 04:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:03:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 05:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 05:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 05:17:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 05:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:18:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 05:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:24:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 05:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 05:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:29:18 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:33:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 05:33:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 05:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:41:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 05:41:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 05:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:44:31 --> 404 Page Not Found: Gateway/routes
ERROR - 2023-07-06 05:44:33 --> 404 Page Not Found: Actuator/gateway
ERROR - 2023-07-06 05:44:34 --> 404 Page Not Found: Autoconfig/index
ERROR - 2023-07-06 05:44:46 --> 404 Page Not Found: Actuator/autoconfig
ERROR - 2023-07-06 05:50:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:50:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:50:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:50:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:50:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 05:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 05:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:01:49 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:01:59 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:02:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:04:44 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:05:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:05:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:06:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:06:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:10:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 06:12:08 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:23:18 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:29:17 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:44:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 06:51:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 06:51:23 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:53:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 06:53:22 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:53:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 06:53:26 --> Could not find the language line "Home"
ERROR - 2023-07-06 06:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:02:32 --> Could not find the language line "Crocs"
ERROR - 2023-07-06 07:02:42 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:03:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 07:06:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:06:16 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:10:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:11:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:11:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:11:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:12:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:12:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:13:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:13:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:16:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:23:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-06 07:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:23:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:23:57 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:39:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:43:52 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:43:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-06 07:43:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-06 07:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:44:21 --> Could not find the language line "Home"
ERROR - 2023-07-06 07:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 07:55:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 07:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:10:08 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:12:53 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:18:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 08:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 08:19:42 --> 404 Page Not Found: Assets/backend
ERROR - 2023-07-06 08:24:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 08:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:37:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 08:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-06 08:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 08:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` >= '4'
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-06 08:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:54:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 08:54:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-06 08:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:59:34 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:59:34 --> Could not find the language line "Home"
ERROR - 2023-07-06 08:59:34 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:05:25 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:06:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:06:29 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:09:43 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-06 09:09:43 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-06 09:09:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-06 09:09:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-06 09:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:10:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:12:46 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:15:33 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:15:50 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-07-06 09:15:56 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-07-06 09:17:36 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:22:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:23:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:23:39 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:24:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:28:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:29:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:29:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:30:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:31:42 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:31:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:31:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:32:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:34:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 09:34:54 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:37:39 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:38:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:38:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:38:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 09:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:45:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 09:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 09:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:09:33 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:17:09 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:23:21 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:23:36 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:23:37 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:23:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:24:07 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 10:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 10:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:35:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:36:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:38:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 10:38:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Sweatpants')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-06 10:38:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:39:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:40:02 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:40:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:42:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:48:31 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:49:06 --> Could not find the language line "Home"
ERROR - 2023-07-06 10:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 10:49:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 10:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 10:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 11:00:09 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:01:06 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:01:07 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:01:59 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:02:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 11:02:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-06 11:02:39 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:13:15 --> Could not find the language line "Other"
ERROR - 2023-07-06 11:16:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:17:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:17:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:17:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:17:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:17:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:18:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:19:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:19:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:19:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:20:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:20:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:20:24 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:20:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:20:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:21:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:27:28 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:27:29 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:29:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 11:44:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-06 11:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:46:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-06 11:46:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-06 11:47:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-06 11:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 11:57:23 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-06 12:10:24 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:11:49 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:12:27 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:16:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:16:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:16:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:16:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:16:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:16:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-06 12:16:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-06 12:16:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:16:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 12:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:28:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-06 12:28:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-06 12:28:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-06 12:28:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-06 12:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:38:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-06 12:41:07 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 12:44:11 --> Could not find the language line "Hair%20%and%20Body%20Care"
ERROR - 2023-07-06 12:51:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 12:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 13:00:31 --> Could not find the language line "Home"
ERROR - 2023-07-06 13:05:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 13:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:07:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 13:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 13:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 13:31:26 --> Could not find the language line "Home"
ERROR - 2023-07-06 13:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:38:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 13:38:35 --> Could not find the language line "Home"
ERROR - 2023-07-06 13:39:57 --> Could not find the language line "Home"
ERROR - 2023-07-06 13:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:53:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 13:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 13:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 14:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:07:54 --> Could not find the language line "Home"
ERROR - 2023-07-06 14:08:30 --> Could not find the language line "Home"
ERROR - 2023-07-06 14:08:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-06 14:08:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-06 14:09:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 14:09:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 14:09:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 14:10:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 14:10:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-06 14:16:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 14:27:32 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-06 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 14:31:37 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 14:31:44 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 14:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:52:29 --> Could not find the language line "Home"
ERROR - 2023-07-06 14:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 14:59:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:08:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-06 15:08:39 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:11:09 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:22:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:33:47 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:41:19 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:42:22 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:43:49 --> Could not find the language line "Home"
ERROR - 2023-07-06 15:46:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 15:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 15:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 15:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 16:04:40 --> Could not find the language line "Home"
ERROR - 2023-07-06 16:10:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:10:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:16:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 16:16:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 16:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:19:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:20:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 16:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:20:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:21:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:21:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:21:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:22:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:22:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 16:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 16:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:22:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:23:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:24:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 16:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 16:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 16:59:21 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-06 16:59:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-06 16:59:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-06 16:59:22 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-06 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:15:00 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 17:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:15:49 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 17:16:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 17:17:00 --> Could not find the language line "Bracelets"
ERROR - 2023-07-06 17:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:22:18 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:22:40 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:22:55 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:23:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 17:47:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 17:47:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-06 17:49:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 17:49:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 17:57:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 17:59:52 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-06 17:59:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-06 17:59:53 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-06 17:59:53 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-06 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:13:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:17:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 18:23:38 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:25:50 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:31:05 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:31:18 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:31:19 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-06 18:32:25 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:34:04 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:40:46 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:48:42 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:48:42 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:48:42 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:48:42 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:49:21 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:51:01 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 18:52:20 --> Could not find the language line "Home"
ERROR - 2023-07-06 18:59:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 18:59:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:00:45 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:02:54 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 19:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 19:05:51 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:06:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 19:08:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 19:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 19:09:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 19:09:27 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:23:35 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:23:49 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:24:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 19:24:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-06 19:25:21 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:26:55 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:30:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 19:30:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-06 19:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:39:25 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:39:36 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:39:37 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-06 19:40:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:40:58 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:45:06 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:50:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 19:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:52:19 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 19:56:59 --> Could not find the language line "Home"
ERROR - 2023-07-06 19:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-06 20:01:07 --> Could not find the language line "Home"
ERROR - 2023-07-06 20:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 20:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 20:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 20:06:43 --> Could not find the language line "Home"
ERROR - 2023-07-06 20:13:21 --> Could not find the language line "Home"
ERROR - 2023-07-06 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 20:30:22 --> Could not find the language line "Home"
ERROR - 2023-07-06 20:34:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-06 20:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:04:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-06 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:33:23 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:34:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:35:28 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 21:37:54 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 21:38:34 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:52:49 --> Could not find the language line "Home"
ERROR - 2023-07-06 21:59:18 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:04:37 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:46:43 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:52:04 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:53:31 --> Could not find the language line "Home"
ERROR - 2023-07-06 22:53:33 --> Could not find the language line "Home"
ERROR - 2023-07-06 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 23:03:32 --> Could not find the language line "Home"
ERROR - 2023-07-06 23:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-06 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-06 23:38:15 --> Could not find the language line "Home"
ERROR - 2023-07-06 23:39:11 --> Could not find the language line "Home"
ERROR - 2023-07-06 23:46:22 --> Could not find the language line "Other"
ERROR - 2023-07-06 23:57:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-06 23:57:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('accounting')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
