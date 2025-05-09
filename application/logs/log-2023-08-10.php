<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-10 00:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-10 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 00:32:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 00:49:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 00:50:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 01:00:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 01:00:33 --> Could not find the language line "Home"
ERROR - 2023-08-10 01:10:53 --> Could not find the language line "Home"
ERROR - 2023-08-10 01:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-10 01:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 01:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 01:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 01:54:59 --> Could not find the language line "Home"
ERROR - 2023-08-10 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-10 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 02:39:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 02:42:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 02:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-10 02:47:43 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-10 02:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 03:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-10 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 03:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 03:59:42 --> Could not find the language line "Home"
ERROR - 2023-08-10 03:59:42 --> Could not find the language line "Home"
ERROR - 2023-08-10 03:59:42 --> Could not find the language line "Home"
ERROR - 2023-08-10 03:59:43 --> Could not find the language line "Home"
ERROR - 2023-08-10 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 04:03:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 04:03:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 04:05:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 04:05:32 --> Could not find the language line "Home"
ERROR - 2023-08-10 04:06:07 --> Could not find the language line "Home"
ERROR - 2023-08-10 04:13:56 --> Could not find the language line "Home"
ERROR - 2023-08-10 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:00:38 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:07:28 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:13:02 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:16:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 05:16:38 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:22:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 05:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 05:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 05:24:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 05:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 05:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 05:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 05:27:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 05:36:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 05:38:09 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-10 05:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 05:43:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 05:44:39 --> Could not find the language line "Home"
ERROR - 2023-08-10 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 06:02:19 --> Could not find the language line "Home"
ERROR - 2023-08-10 06:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:06:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 06:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:07:00 --> Could not find the language line "Perfume"
ERROR - 2023-08-10 06:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:11:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 06:11:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 06:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:11:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:12:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:12:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:12:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 06:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-10 06:14:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:16:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:16:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:16:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 06:16:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 06:17:01 --> Could not find the language line "Home"
ERROR - 2023-08-10 06:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:24:43 --> Could not find the language line "Other"
ERROR - 2023-08-10 06:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:27:49 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-10 06:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:30:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-10 06:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:34:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:34:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:34:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:35:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:35:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:35:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 06:36:44 --> Could not find the language line "products"
ERROR - 2023-08-10 06:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 06:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 06:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-10 07:00:01 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:00:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 07:00:51 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:08:27 --> Could not find the language line "products"
ERROR - 2023-08-10 07:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:08:45 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:18:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 07:18:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 07:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:28:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:30:16 --> Could not find the language line "Other"
ERROR - 2023-08-10 07:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:42:46 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:45:43 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:46:22 --> Could not find the language line "Home"
ERROR - 2023-08-10 07:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 07:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 08:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:30:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 08:30:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 08:33:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-10 08:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 08:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-10 08:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:52:02 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-10 08:52:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 08:52:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 08:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 08:55:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 08:55:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:00:43 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:06:12 --> Could not find the language line "assets"
ERROR - 2023-08-10 09:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:15:28 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:25:13 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:25:13 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:30:37 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:30:37 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:30:42 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:31:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 09:31:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 09:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:31:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 09:31:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 09:32:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 09:32:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 09:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:47:42 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:47:43 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:49:20 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:52:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-10 09:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:53:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 09:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 09:53:49 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:56:20 --> Could not find the language line "Home"
ERROR - 2023-08-10 09:59:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 09:59:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-10 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:00:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:00:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:01:58 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:05:22 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:07:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 10:07:45 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:12:33 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:12:51 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:14:05 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:14:35 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:16:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:25:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:26:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:26:11 --> Could not find the language line "assets"
ERROR - 2023-08-10 10:27:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:27:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:27:37 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:30:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:31:22 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:34:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:34:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:36:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:41:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:41:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:48:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:48:40 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:48:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:48:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 10:49:00 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:50:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 10:55:20 --> Could not find the language line "Home"
ERROR - 2023-08-10 10:58:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 10:59:25 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:05:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 11:06:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 11:07:07 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-10 11:24:28 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:30:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:31:07 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:35:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 11:40:21 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:40:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 11:40:56 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 11:53:29 --> Could not find the language line "Home"
ERROR - 2023-08-10 11:55:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:00:31 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:00:31 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:05:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 12:05:35 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:06:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:08:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:08:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 12:08:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 12:08:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 12:08:39 --> 404 Page Not Found: Home/home
ERROR - 2023-08-10 12:08:39 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-10 12:09:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 12:09:44 --> Could not find the language line "assets"
ERROR - 2023-08-10 12:10:50 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:16:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:16:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:17:36 --> 404 Page Not Found: Storage/settings
ERROR - 2023-08-10 12:18:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:19:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:19:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:20:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:21:29 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:21:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 12:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 12:22:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:22:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:22:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 12:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-10 12:22:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:22:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:22:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:23:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 12:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:24:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 12:24:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:24:38 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:25:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:25:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:30:54 --> Could not find the language line "Socks"
ERROR - 2023-08-10 12:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:40:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:41:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 12:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:44:06 --> 404 Page Not Found: Repeaterphp/index
ERROR - 2023-08-10 12:48:41 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:48:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:48:51 --> Could not find the language line "Home"
ERROR - 2023-08-10 12:51:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 12:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:52:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 12:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 12:55:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:55:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:55:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 12:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:10:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 13:10:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 13:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:12:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 13:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:22:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:22:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 13:25:56 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:28:38 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:30:30 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:30:34 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:38:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:38:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:49:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:49:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 13:51:39 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:51:46 --> Could not find the language line "Home"
ERROR - 2023-08-10 13:51:47 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-10 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:11:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 14:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:19:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:19:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:19:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:19:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:19:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 14:21:59 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:22:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:31:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 14:31:09 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 14:45:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-10 14:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-10 14:46:37 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:46:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 14:48:23 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:55:05 --> Could not find the language line "Home"
ERROR - 2023-08-10 14:57:56 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 15:14:20 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:20:34 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:26:39 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-10 15:26:40 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-10 15:26:40 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-10 15:26:40 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-10 15:28:41 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:28:41 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:32:39 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:32:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 15:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:33:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 15:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:33:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 15:33:32 --> Could not find the language line "Home"
ERROR - 2023-08-10 15:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 15:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 15:59:55 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:07:52 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:09:40 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:19:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 16:19:18 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 16:51:38 --> Could not find the language line "Home"
ERROR - 2023-08-10 16:52:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 16:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:05:40 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:10:25 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:10:25 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:10:25 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:10:25 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:19:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 17:20:27 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 17:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:34:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 17:34:58 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-10 17:47:41 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:47:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-10 17:49:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 17:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 17:56:59 --> Could not find the language line "Home"
ERROR - 2023-08-10 17:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 17:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:04:16 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:06:10 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:06:17 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:06:32 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:32:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 18:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 18:43:50 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:44:05 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:46:33 --> Could not find the language line "Home"
ERROR - 2023-08-10 18:57:56 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 19:41:01 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:45:09 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:45:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 19:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 19:45:55 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:46:04 --> Could not find the language line "Perfume"
ERROR - 2023-08-10 19:46:09 --> Could not find the language line "Home"
ERROR - 2023-08-10 19:49:58 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:01:16 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:04:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:13:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:14:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:14:48 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:16:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:16:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:16:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:17:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:17:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:17:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:30:54 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:31:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-10 20:49:36 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:56:44 --> Could not find the language line "Home"
ERROR - 2023-08-10 20:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 20:59:48 --> Could not find the language line "Home"
ERROR - 2023-08-10 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 21:02:41 --> Could not find the language line "Home"
ERROR - 2023-08-10 21:11:10 --> Could not find the language line "Bracelets"
ERROR - 2023-08-10 21:14:47 --> Could not find the language line "Home"
ERROR - 2023-08-10 21:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:22:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-10 21:28:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:28:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:29:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:29:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:29:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:29:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:29:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:29:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-10 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-10 21:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:31:47 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-10 21:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 21:40:35 --> 404 Page Not Found: Git/config
ERROR - 2023-08-10 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-10 22:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-10 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-10 23:19:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-10 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-10 23:44:15 --> Could not find the language line "Other"
